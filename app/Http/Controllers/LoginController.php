<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login_process(Request $request)
    {
        $request-> validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('login')->with('Failed', 'Wrong Email or Password');
        }
    }
}
