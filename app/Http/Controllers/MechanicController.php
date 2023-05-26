<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MechanicController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('mechanic.dashboard',compact('user'));
    }

    public function servisku()
    {
        $user = Auth::user();
        return view('mechanic.servisku',compact('user'));
    }

    public function profilku()
    {
        $user = Auth::user();
        return view('mechanic.profilku',compact('user'));
    }

    public function antrian()
    {
        $user = Auth::user();
        return view('mechanic.antrian',compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;

        if ($request->hasFile('avatar')) {
            if ($user->avatar && file_exists(storage_path('app/public' . $user->avatar))) {
                Storage::delete('public/' . $user->avatar);
            }
            $image = $request->file('avatar')->store('images', 'public');
            $user->avatar = $image;
        }
        $user->save();

        return redirect()->back()->with('Success', 'Profile berhasil diubah');
    }
}
