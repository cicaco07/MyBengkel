<?php

namespace App\Repositories;

use App\Models\Dealer;
use App\Repositories\Interfaces\IDealerRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class DealerRepository implements IDealerRepository
{
    public function find($id)
    {
        return Dealer::find($id);
    }

    public function findByKeyword($keyword)
    { 
        $query = DB::table('users')
            ->join('dealer', 'users.id', '=', 'dealer.user_id')
            ->select('dealer.id', 'dealer.dealer_name', 'dealer.dealer_address', 'dealer.company')
            ->where(function ($query) use ($keyword) {
                $query->where('dealer.dealer_name', 'like', "%$keyword%")
                    ->orWhere('dealer.dealer_address', 'like', "%$keyword%")
                    ->orWhere('dealer.company', 'like', "%$keyword%");
            });
    
        $perPage = 5; // Jumlah item per halaman
        $currentPage = request()->input('page', 1); // Halaman saat ini, default 1

        // Ambil semua hasil yang cocok dengan query
        $results = $query->get();

        // Buat objek Collection dari hasil
        $collection = collect($results);

        // Buat objek LengthAwarePaginator dengan menggunakan Collection
        $dealers = new LengthAwarePaginator(
            $collection->forPage($currentPage, $perPage),
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url() . '?' . http_build_query(request()->query())]
        );

        return $dealers;

    }

    public function update($id, array $data)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->update($data);
        return $dealer;
    }

    public function create(array $data)
    {
        return Dealer::create($data);
    }

    public function delete($id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->delete();
    }
}