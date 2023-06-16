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
        'sparepart_id',
        'quantity',
        'subtotal',
        'total',
    ];

    public function sparepart()
    {
        // return $this->hasMany(Sparepart::class, 'sparepart_id');
        return $this->belongsTo(Sparepart::class, 'sparepart_id', 'id');
    }

    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
}
