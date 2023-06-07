<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{
    public function find($id)
    {
        return User::find($id);
    }
    
    public function findByKeyword($keyword)
    {
        $query = User::where('role', '!=', 'admin');

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('username', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('name', 'LIKE', "%$keyword%");
            });
        }

        $perPage = 5; // Jumlah item per halaman
        $currentPage = request()->input('page', 1); // Halaman saat ini, default 1

        // Ambil semua hasil yang cocok dengan query
        $results = $query->get();

        // Buat objek Collection dari hasil
        $collection = collect($results);

        // Buat objek LengthAwarePaginator dengan menggunakan Collection
        $data = new LengthAwarePaginator(
            $collection->forPage($currentPage, $perPage),
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url() . '?' . http_build_query(request()->query())]
        );

        $searchQuery = $keyword;
        $message = "Hasil pencarian dari : " . $searchQuery;

        if ($data->isEmpty()) {
            $message = "User not found.";
            return ['data' => $data, 'message' => $message, 'searchQuery' => $searchQuery];
        }

            return ['data' => $data, 'message' => $message, 'searchQuery' => $searchQuery];
    }
    
    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
    
    public function create(array $data)
    {
        return User::create($data);
    }
}