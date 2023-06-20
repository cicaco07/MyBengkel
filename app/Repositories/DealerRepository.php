<?php

namespace App\Repositories;
use App\Models\Service;
use App\Models\Dealer;
use App\Repositories\Interfaces\IDealerRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    
        $perPage = 5;
        $currentPage = request()->input('page', 1); 

        $results = $query->get();

        $collection = collect($results);

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