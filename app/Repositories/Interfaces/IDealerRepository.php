<?php
namespace App\Repositories\Interfaces;

Interface IDealerRepository
{
    public function find($id);

    public function findByKeyword($keyword);

    public function update($id, array $data);

    public function delete($id);
    
    public function create(array $data);
}