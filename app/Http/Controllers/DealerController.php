<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function dashboard()
    {
        return view('dealer.dashboard');
    }

    public function dealerku()
    {
        return view('dealer.dealerku');
    }

    public function pegawai()
    {
        return view('dealer.pegawai');
    }

    public function antrian()
    {
        return view('dealer.antrian');
    }
    
    public function sparepart()
    {
        return view('dealer.sparepart');
    }

    public function servis()
    {
        return view('dealer.servis');
    }

    public function transaksi()
    {
        return view('dealer.transaksi');
    }

}
