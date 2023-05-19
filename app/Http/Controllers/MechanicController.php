<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function dashboard()
    {
        return view('mechanic.dashboard');
    }

    public function servisku()
    {
        return view('mechanic.servisku');
    }

    public function profilku()
    {
        return view('mechanic.profilku');
    }

    public function antrian()
    {
        return view('mechanic.antrian');
    }
}
