<?php

namespace App\Http\Controllers;

use App\Repositories\MechanicRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MechanicController extends Controller
{
    protected $mechanicRepository;

    public function __construct(MechanicRepository $mechanicRepository)
    {
        $this->mechanicRepository = $mechanicRepository;
    }

    public function dashboard()
    {
        $data = $this->mechanicRepository->getMechanicData();
        return view('mechanic.dashboard', $data);
    }

    public function servisku()
    {
        $data = $this->mechanicRepository->getMechanicData();
        return view('mechanic.servisku', $data);
    }

    public function profilku()
    {
        $data = $this->mechanicRepository->getMechanicData();
        return view('mechanic.profilku', $data);
    }

    public function antrian()
    {
        $user = Auth::user();
        $data = $this->mechanicRepository->getMechanicData();
        $data1 = $this->mechanicRepository->getDealerServis($user);
        return view('mechanic.antrian', $data, $data1);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $updatedUser = $this->mechanicRepository->updateProfile($user, $request->all());

        if ($updatedUser == 'email_exists') {
            return redirect()->back()->with('error', 'Email sudah terdaftar');
        } elseif ($updatedUser) {
            return redirect()->back()->with('success', 'Profile berhasil diubah');
        } else {
            return redirect()->back()->with('error1', 'Terjadi kesalahan saat mengupdate profil');
        }
    }

    public function updateStatus($id)
    {
        $service = $this->mechanicRepository->updateStatus($id);

        return redirect()->back()->with('success', 'Status servis berhasil diubah');
    }

}
