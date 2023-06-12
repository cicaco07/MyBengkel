<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'service_id',
        'spareparts_id',
        'quantity',
        'subtotal',
        'total',
    ];

    public function sparepart()
    {
        return $this->hasMany(Sparepart::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
