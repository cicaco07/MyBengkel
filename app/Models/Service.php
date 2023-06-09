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
        'id',
        'user_id',
        'dealer_id',
        'vehicle_name',
        'problem',
        'plat_num',
        'recommended_service',
        'plan_date',
        'service',
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
}
