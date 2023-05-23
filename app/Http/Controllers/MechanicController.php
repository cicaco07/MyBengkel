<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MechanicController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('mechanic.dashboard',compact('user'));
    }

    public function servisku()
    {
        return view('mechanic.servisku');
    }

    public function profilku()
    {
        $user = Auth::user();
        return view('mechanic.profilku',compact('user'));
    }

    public function antrian()
    {
        return view('mechanic.antrian');
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
