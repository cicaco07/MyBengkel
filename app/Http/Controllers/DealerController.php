<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dealer;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
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
        return view('dealer.pegawai', compact('user'));
    }

    public function antrian()
    {
        $user = Auth::user();
        return view('dealer.antrian', compact('user'));
    }
    
    public function sparepart()
    {
        $user = Auth::user();
        return view('dealer.sparepart', compact('user'));
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


}
