<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user.dashboard');
    // }

    // public function create()
    // {
    //     return view('auth.register');
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'phone_number' => 'required',
    //         'address' => 'required',
    //     ]);

    //     $data['password'] = bcrypt($data['password']);
    //     $data['role'] = 'user';

    //     $user = User::create($data);

    //     Auth::login($user);

    //     return redirect('/home');
    // }
}
