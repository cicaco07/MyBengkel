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

<<<<<<< HEAD
    public function mechanic()
    {
        return $this->belongsTo(Service::class);
    }

    // public function sparepart(){
    //     return $this->hasMany(sparepart::class)
    // }
=======
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'price');
    }
>>>>>>> 0196afe9b9b5613cb9232c9956cabe35f6a2d567
}
