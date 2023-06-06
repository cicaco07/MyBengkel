<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dealer;
use App\Models\Service;
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
        $users = User::whereNotIn('role', ['customer'])->get();
        return view('dealer.pegawai', compact('user', 'users'));
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

}
