<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IMechanicRepository;
use App\Models\User;
use App\Models\Service;
use App\Models\Mechanic;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MechanicRepository implements IMechanicRepository
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
        // $service->status = 'accept';
        $service->save();
    }

    public function find($id)
    {
        return Mechanic::findOrFail($id);
    }

    public function findByUser($userId)
    {
        return Mechanic::where('user_id', $userId)->first();
    }

    public function create(array $data)
    {
        return Mechanic::create($data);
    }

    public function update($id, array $data)
    {
        $mechanic = $this->find($id);
        $mechanic->update($data);

        return $mechanic;
    }

    public function delete($id)
    {
        $mechanic = $this->find($id);
        $mechanic->delete();
    }

    public function findByKeyword($keyword)
    {
        $query = Mechanic::with('user', 'dealer')
            ->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%$keyword%");
                })
            ->orWhereHas('dealer', function ($query) use ($keyword) {
                $query->where('dealer_name', 'LIKE', "%$keyword%");
            })
            ->orWhere('position', 'LIKE', "%$keyword%");
        
            $perPage = 5; // Jumlah item per halaman
            $currentPage = request()->input('page', 1); // Halaman saat ini, default 1
    
            // Ambil semua hasil yang cocok dengan query
            $results = $query->get();
    
            // Buat objek Collection dari hasil
            $collection = collect($results);
    
            // Buat objek LengthAwarePaginator dengan menggunakan Collection
            $mechanics = new LengthAwarePaginator(
                $collection->forPage($currentPage, $perPage),
                $collection->count(),
                $perPage,
                $currentPage,
                ['path' => request()->url() . '?' . http_build_query(request()->query())]
            );
    
            return $mechanics;
    }
    
}
