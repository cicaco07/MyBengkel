<?php
namespace App\Repositories\Interfaces;

Interface IMechanicRepository
{
    public function getMechanicData();

    public function getAllDealerServis1($user);

    public function getAllDealerServis2($user);

    public function updateProfile($user, $request);

    public function updateStatus1($id);

    public function updateStatus2($id);

    public function updateStatus3($id);

    public function find($id);

    public function findByUser($userId);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function findByKeyword($keyword);

}