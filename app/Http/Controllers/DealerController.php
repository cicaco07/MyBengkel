<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DealerController;
use App\Models\User;
use App\Models\Dealer;

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


    public function show($id){
        $user = Auth::user();
        $dealer = Dealer::findOrFail($id);
        return view('customer.detailYamaha', compact('dealer', 'user'));
    }

}
