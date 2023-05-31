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

    public function servisku()
    {
        $user = Auth::user();
        return view('customer.servisku',compact('user'));
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
    
        return redirect()->back()->with('Success', 'Profile berhasil diubah');
    }

    // public function createService(Request $request)
    // {
    //     $user = User::find($request->user_id);
    //     $dealer = Dealer::find($request->dealer_id);

    //     $request->validate([
    //         'vehicle_name' => 'required',
    //         'plat_num' => 'required',
    //         'problem' => 'required|in:Ganti Oli,Ganti Ban,Servis Rutin, Lain-lain',
    //     ]);

    //     if ($user){
    //         if ($user->dealer) {
    //             return redirect()->back()->with('error', 'Error');
    //         } else {
    //         $service = new Service;
    //         $service->vehicle_name=$request->get('vehicle_name');
    //         $service->plat_num=$request->get('plat_num');
    //         $service->problem=$request->get('problem');
    //         $service->user_id = $user->id;
    //         $service->dealer =$dealer->id;
    //         $service->save();
            
    //         return redirect()->route('dealer.show')->with('success', 'Queue data has been created successfully');

    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'User not found');
    //     }
    // }
    
}
