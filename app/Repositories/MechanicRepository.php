<?php

namespace App\Repositories;

use App\Models\Dealer;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MechanicRepository
{
    public function getMechanicData()
    {
        $user = Auth::user();
        $mechanic = $user->mechanic;
        $dealer = $mechanic->dealer;

        if (!$mechanic) {
            return null;
        }
    
        $position = $mechanic->position;
        $dealers = $dealer ? $dealer->dealer_name : null;
        $company = $dealer ? $dealer->company : null;

        return compact('user', 'position', 'dealers', 'company');
    }

    public function getDealerServis($user)
    {   
        $mechanic = $user->mechanic;

        if (!$mechanic) {
            return null;
        }

        $dealer = $mechanic->dealer;
        $services = Service::where('dealer_id', $dealer->id)->paginate(5);

        return compact('user', 'services', 'dealer');
    }


    public function updateProfile($user, $request)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone_number = $request['phone_number'];
        $user->address = $request['address'];

        if (isset($request['avatar'])) {
            if ($user->avatar && file_exists(storage_path('app/public' . $user->avatar))) {
                Storage::delete('public/' . $user->avatar);
            }

            $image = $request['avatar']->store('images', 'public');
            $user->avatar = $image;
        }

        $existingUser = User::where('email', $request['email'])->where('id', '!=', $user->id)->first();
            if ($existingUser) {
                return 'email_exists';
            }
        $user->phone_number = substr($user->phone_number, 0, 13);

        $user->save();

        return $user;
    }

    public function updateStatus($id)
    {
        $service = Service::findOrFail($id);
        $service->status = 'accept';
        $service->save();
    }
}
