<?php
namespace App\Repositories\Interfaces;

Interface IMechanicRepository
{
    public function getMechanicData();

    public function getDealerServis($user);

    public function updateProfile($user, $request);

    public function updateStatus($id);

    public function find($id);

    public function findByUser($userId);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function findByKeyword($keyword);

}