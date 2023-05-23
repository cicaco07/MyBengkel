<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:100'],
            'email' => ['required','string','email','max:255','unique:users'],
            'username' => ['required','string','max:100'],
            'password' => ['required','string','min:8'],
            'phone_number' => ['required','string','max:100'],
            'address' => ['required','string','max:100'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->route('loginForm')->with('success', 'Registration successful. Please login.');
    }
}
