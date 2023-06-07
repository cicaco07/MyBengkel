<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mechanic;
use App\Models\Dealer;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use App\Models\Sparepart;
class DealerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('dealer.dashboard', compact('user'));
    }

    public function dealerku()
    {
        $user = Auth::user();
        return view('dealer.dealerku', compact('user'));
    }

    public function pegawai()
    {
        $user = Auth::user();
        $mechanic = $user->mechanic;
        $dealer = $user->dealer;
        
        $users = User::where('role', 'mechanic')->whereHas('mechanic', function ($query) use ($dealer) {
            $query->where('dealer_id', $dealer->id);
        })->get();
    
        // Mendapatkan posisi (position) dari mekanik yang sesuai dengan dealer_id
        $positions = Mechanic::where('dealer_id', $dealer->id)->pluck('position');
    
        return view('dealer.pegawai', compact('user', 'users', 'positions'));
    }
    


    public function antrian()
    {
        $user = Auth::user();
        return view('dealer.antrian', compact('user'));
    }
    
    public function sparepart()
    {
        $user = Auth::user();
        $spareparts = Sparepart::get();
        return view('dealer.sparepart', compact('user', 'spareparts'));
    }

    public function servis()
    {
        $user = Auth::user();
        return view('dealer.servis', compact('user'));
    }

    public function transaksi()
    {
        $user = Auth::user();
        return view('dealer.transaksi', compact('user'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $dealer = Dealer::findOrFail($id);

        $services = Service::where('dealer_id', $dealer->id)->paginate(5);
        return view('customer.detailDealer', compact('user', 'services', 'dealer'));
    }
    public function update(Request $request)
{
    $user = $request->user();
    $dealer = $user->dealer;
    $request->validate([
        'dealer_name' => 'required',
        'dealer_address' => 'required',
        'company' => 'required',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $dealer->dealer_name = $request->dealer_name;
    $dealer->dealer_address = $request->dealer_address;
    $dealer->company = $request->company;

    if ($request->hasFile('avatar')) {
        if ($dealer->avatar && file_exists(storage_path('app/public/' . $dealer->avatar))) {
            Storage::delete('public/' . $dealer->avatar);
        }
        $image = $request->file('avatar')->store('images', 'public');
        $dealer->avatar = $image;
    }
    $dealer->save();

    return redirect()->back()->with('success', 'Profil berhasil diubah');
}
public function updateMekanik(Request $request, $id)
{   
    $user = User::findOrFail($id);
    $mechanic = $user->mechanic;
    
    $request->validate([
        'position' => 'required',
    ]);
    
    $mechanic->position = $request->position;
    $mechanic->update();
    
    // Tambahkan logika lain yang Anda perlukan
    
    return redirect()->back()->with('success', 'Mekanik berhasil diperbarui');
}
public function deleteMekanik($id)
{
    $user = User::findOrFail($id);
    $mechanic = $user->mechanic;

    // Tambahkan logika lain yang Anda perlukan sebelum menghapus mekanik

    $mechanic->delete();

    // Tambahkan logika lain yang Anda perlukan setelah menghapus mekanik

    return redirect()->back()->with('success', 'Mekanik berhasil dihapus');
}




}
