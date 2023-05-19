<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function data()
    {
        return view('admin.data');
    }
    
    public function tambah()
    {
        return view('admin.tambah');
    }
}
