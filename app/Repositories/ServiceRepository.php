<?php

namespace App\Repositories;

use App\Models\Service;
use App\Models\Cart;
use App\Repositories\Interfaces\IServiceRepository;
use Illuminate\Support\Carbon;  

class ServiceRepository implements IServiceRepository
{
    public function getServiceById($id)
    {
        return Service::findOrFail($id);
    }

    public function updateRecommendedService($id, $message)
    {
        $service = Service::find($id);
        $service->recommended_service = $message;
        $service->save();
    }

    public function updateServiceSchedule($id, $planDate, $time)
    {
        $service = Service::find($id);
        $service->plan_date = Carbon::createFromFormat('m/d/Y', $planDate)->format('Y-m-d');
        $service->time = $time;
        $service->save();
    }

    public function getServiceCarts($serviceId)
    {
        return Cart::where('service_id', $serviceId)
            ->join('spareparts', 'carts.sparepart_id', '=', 'spareparts.id')
            ->select('carts.*', 'spareparts.item_name')
            ->get();
    }
}