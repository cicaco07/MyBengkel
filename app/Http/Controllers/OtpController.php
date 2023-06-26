<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\otp;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class OtpController extends Controller
{
    //
    public function showView()
    {
        return view('auth.otp');
    }
    public function generate(Request $request)
{
    $request->validate([
        'phone_number' => 'required|exists:users,phone_number'
    ]);

    $verificationCode = $this->generateOtp($request->phone_number);
    $otp = $verificationCode->otp;
    $user_id = $verificationCode->user_id;

    $message = "Kode OTP MyBengkel adalah : " . $otp;

    // Mengirim pesan WhatsApp menggunakan Twilio
    $sid = 'ACed6000105782f21d5a3222de4d0d5287';
    $token = 'e8ce1319193c20175b293a003e1243de';
    $twilioNumber = '+14155238886';

    $client = new Client($sid, $token);
    $client->messages->create(
        "whatsapp:" . $request->phone_number,
        [
            'from' => "whatsapp:" . $twilioNumber,
            'body' => $message
        ]
    );

    // Kembali dengan OTP
    return redirect()->route('otp.verification', ['user_id' => $user_id]);
}
    public function generateOtp($phone_number)
    {
        $user = User::where('phone_number', $phone_number)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = otp::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return otp::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'exp' => Carbon::now()->addMinutes(1)
        ]);
    }

    public function verification($user_id)
    {
        return view('auth.otp-verif')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request)
{
    // Validasi
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'otp' => 'required'
    ]);

    // Logika Validasi
    $verificationCode = otp::where('user_id', $request->user_id)
        ->where('otp', $request->otp)
        ->where('exp', '>=', Carbon::now()) // Periksa apakah waktu kedaluwarsa belum tercapai
        ->first();

    if (!$verificationCode) {
        return redirect()->back()->withErrors(['otp' => 'OTP yang Anda masukkan tidak sesuai'])->withInput();
    }

    $user = User::find($request->user_id);

    if ($user) {
        // Hapus OTP dari database
        $verificationCode->delete();

        Auth::login($user);

        return $this->sendLoginResponse($request);
    }

    return redirect()->route('showView')->with('error', 'OTP Anda tidak benar');
}

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        return $this->authenticated($request, Auth::user())
            ?: redirect()->intended($this->redirectPath());
    }
    protected function authenticated(Request $request, $user)
    {
        $userData = User::find($user->id);

        if ($userData->role === 'admin') {
            return redirect()->route('admin.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'mechanic') {
            return redirect()->route('mechanic.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'master_mechanic') {
            return redirect()->route('mmechanic.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'dealer') {
            return redirect()->route('dealer.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'customer') {
            return redirect()->route('customer.dashboard')->with('user', $userData);
        }
    }
    
}
