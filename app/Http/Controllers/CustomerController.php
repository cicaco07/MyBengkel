<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function yamaha()
    {
        return view('customer.yamaha');
    }
    
    public function honda()
    {
        return view('customer.honda');
    }

    public function suzuki()
    {
        return view('customer.suzuki');
    }

    public function servisku()
    {
        return view('customer.servisku');
    }

    public function servisku2()
    {
        return view('customer.servisku2');
    }

    public function form()
    {
        return view('customer.form');
    }

    public function form2()
    {
        return view('customer.form2');
    }
}
