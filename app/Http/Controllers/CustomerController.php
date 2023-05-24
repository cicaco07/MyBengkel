<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('customer.dashboard',compact('user'));
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

    public function profilku()
    {
        $user = Auth::user();
        return view('customer.profilku',compact('user'));
    }

    public function servisku()
    {
        return view('customer.servisku');
    }

    public function servisku2()
    {
        return view('customer.servisku2');
    }

    public function servisku3()
    {
        return view('customer.servisku3');
    }

    public function servisku4()
    {
        return view('customer.servisku4');
    }

    public function form()
    {
        return view('customer.form');
    }

    public function form2()
    {
        return view('customer.form2');
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        $user->update([
            'name'=>$request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('Success', 'Profile berhasil diubah');
    }
}
