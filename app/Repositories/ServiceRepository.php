<?php

namespace App\Repositories;
use App\Models\Service;
use App\Repositories\Interfaces\IDealerRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DealerRepository implements IDealerRepository
{
    public function find($id)
    {
        return Service::find($id);
    }

    public function findByKeyword($keyword)
    { 
        $query = DB::table('dealer')
            ->join('service', 'dealer.id', '=', 'service.dealer_id')
            ->select('service.id', 'service.user', 'dealer.dealer_address', 'dealer.company')
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
        $dealer = Service ::findOrFail($id);
        $dealer->update($data);
        return $dealer;
    }

    public function create(array $data)
    {
        return Service::create($data);
    }

    public function delete($id)
    {
        $dealer = Service::findOrFail($id);
        $dealer->delete();
    }
    
}