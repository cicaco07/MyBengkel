<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createAntrian(Request $request)
    {
        $user = User::find($request->user_id);
        $dealer = Dealer::find($request->id);

        $request->validate([
            'dealer_name' => 'required',
            'dealer_address' => 'required',
            'company' => 'required|in:yamaha,suzuki,honda',
        ]);

        if ($user){
            if ($user->dealer) {
                return redirect()->back()->with('error', 'User already has a dealer record');
            } else {
            $antrian = new Antrian;
            $antrian->jenis_motor=$request->get('jenis_motor');
            $antrian->nomor_polisi=$request->get('nomor_polisi');
            $antrian->problem=$request->get('problem');
            $antrian->user_id = $user->id;
            $antrian->save();
            
            
            return redirect()->route('mechanic.antrian')->with('success', 'Queue data has been created successfully');

            }
        } else {
            return redirect()->back()->with('error', 'Queue not found');
        }
    }
}
