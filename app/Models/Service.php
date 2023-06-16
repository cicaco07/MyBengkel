<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'dealer_id',
        'vehicle_name',
        'problem',
        'plat_num',
        'recommended_service',
        'price',
        'plan_date',
        'status',
    ];

    public function dealer()
    {
        return $this->belongsTo(Dealer::class, 'dealer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Service::class);
    }

    // public function sparepart(){
    //     return $this->hasMany(sparepart::class)
    // }
    // public function cart()
    // {
    //     return $this->belongsTo(Cart::class, 'price');
    // }

    public function cart()
    {
        // return $this->hasOne(Cart::class, 'service_id');
        return $this->hasMany(Cart::class, 'service_id');
    }

    public function deleteWithCart()
    {
        $this->cart()->delete();
        $this->delete();
    }

    public function sparepart()
    {
        return $this->belongsToMany(Sparepart::class, 'carts', 'service_id', 'sparepart_id')
            ->withPivot('quantity', 'subtotal');
    }
}
