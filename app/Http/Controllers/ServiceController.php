<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Dealer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request, $dealer_id)
    {
        $request->validate([
            'vehicle_name' => 'required',
            'plat_num' => 'required',
            'problem' => ['required', 'in:Ganti Ban,Ganti Oli,Service Rutin,Lain-lain', 'max:50'],
        ]);

        $user_id = auth()->user()->id;
        $dealer_id = Dealer::findOrFail($dealer_id);

        $service = new Service;
        $service->vehicle_name=$request->get('vehicle_name');
        $service->plat_num=$request->get('plat_num');
        $service->problem=$request->get('problem');
        $service->user_id = $user_id;
        $service->dealer_id = $dealer_id->id;

        $service->save();
        return redirect()->route('customer.allservisku', ['id'=>$service->id])->with('success', 'Data Servis berhasil dibuat');
    }


    public function destroyService($id)
    {
        $user = Auth::user();
        // $servis = Service::findOrFail($id); 
        $servis = Service::where('user_id', $user->id)->findOrFail($id);
        $servis->deleteWithCart();
        return redirect()->back()->with('success', 'Antrian berhasil dibatalkan');
    }
}
