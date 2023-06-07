<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service; 

class CustomerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('customer.dashboard',compact('user'));
    }

    public function yamaha()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'yamaha')->get();
        return view('customer.yamaha',compact('user', 'dealer'));
    } 

    public function honda()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'honda')->get();
        return view('customer.honda',compact('user', 'dealer'));
    }

    public function suzuki()
    {
        $user = Auth::user();
        $dealer = Dealer::where('company', 'suzuki')->get();
        return view('customer.suzuki',compact('user', 'dealer'));
    }

    public function profilku()
    {
        $user = Auth::user();
        return view('customer.profilku',compact('user'));
    }

    public function servisku($id)
    {
        $user = Auth::user();
        $service = $user->service()->findOrFail($id);
        return view('customer.servisku', compact('user','service'));
    }

    public function allservisku()
    {
        $user = Auth::user();
        $services = $user->service()->get();
        return view('customer.allservisku', compact('user','services'));
    }

    public function servisku2()
    {
        $user = Auth::user();
        return view('customer.servisku2',compact('user'));
    }

    public function servisku3()
    {
        $user = Auth::user();
        return view('customer.servisku3',compact('user'));
    }

    public function servisku4()
    {
        $user = Auth::user();
        return view('customer.servisku4',compact('user'));
    }

    public function form()
    {
        $user = Auth::user();
        return view('customer.form',compact('user'));
    }

    public function form2()
    {
        $user = Auth::user();
        return view('customer.form2',compact('user'));
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
            if ($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))) {
                Storage::delete('public/' . $user->avatar);
            }
            $image = $request->file('avatar')->store('images', 'public');
            $user->avatar = $image;
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile berhasil diubah');
    }
    
}
