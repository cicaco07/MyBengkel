<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service; 
use App\Models\Cart;
use App\Models\Sparepart; 
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('customer.dashboard',compact('user'));
    }

    public function yamaha()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'yamaha')->get();
        return view('customer.yamaha',compact('user', 'dealer'));
    } 

    public function honda()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'honda')->get();
        return view('customer.honda',compact('user', 'dealer'));
    }

    public function suzuki()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'suzuki')->get();
        return view('customer.suzuki',compact('user', 'dealer'));
    }

    public function profilku()
    {
        $user = Auth::user();
        return view('customer.profilku',compact('user'));
    }

    public function servisku($id)
    {
        $user = Auth::user();
        $service = $user->service()->findOrFail($id);
        return view('customer.servisku', compact('user','service'));
    }

    public function allservisku()
    {
        $user = Auth::user();
        $services = $user->service()->get();
        return view('customer.allservisku', compact('user','services'));
    }

    public function viewDetailService($id){
        $user = Auth::user();
        $service = Service::with('sparepart')->findOrFail($id);
        $spareparts = $service->sparepart;
        return view('customer.detailService', compact('user', 'service', 'spareparts'));
    }

    public function historyservis()
    {
        $user = Auth::user();
        $services = $user->service()->get();
        return view('customer.history', compact('user','services'));
    }

    public function cetakhistory($id){
        $user = Auth::user();
        $service = Service::with('sparepart')->findOrFail($id);
        $spareparts = $service->sparepart;
        $pdf = PDF::loadview('customer.cetakhistory', compact('user', 'service', 'spareparts'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('');
    }
    public function panduan()
    {
        $user = Auth::user();
        return view('customer.panduansistem',compact('user'));
    }
    
    public function servisku2()
    {
        $user = Auth::user();
        return view('customer.servisku2',compact('user'));
    }

    public function servisku3()
    {
        $user = Auth::user();
        return view('customer.servisku3',compact('user'));
    }

    public function servisku4()
    {
        $user = Auth::user();
        return view('customer.servisku4',compact('user'));
    }

    public function form()
    {
        $user = Auth::user();
        return view('customer.form',compact('user'));
    }

    public function form2()
    {
        $user = Auth::user();
        return view('customer.form2',compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();
    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
    
        if ($request->hasFile('avatar')) {
            if ($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))) {
                Storage::delete('public/' . $user->avatar);
            }
            $image = $request->file('avatar')->store('images', 'public');
            $user->avatar = $image;
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile berhasil diubah');
    }

    public function updateStatus(Request $request, $id)
    {
        $user = Auth::user();
        $service = Service::findOrFail($id);
        $service->status = 'process';
        $service->save();

        $services = $user->service()->get();
        return redirect()->route('customer.allservisku', ['id'=>$service->id])->with('success', 'Data Servis berhasil dibuat');
    }


    
}
