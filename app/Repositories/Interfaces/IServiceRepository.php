<?php

namespace App\Repositories\Interfaces;

interface IServiceRepository
{
    public function getServiceById($id);

    public function updateRecommendedService($id, $message);

    public function updateServiceSchedule($id, $planDate, $time);

    public function getServiceCarts($serviceId);
}