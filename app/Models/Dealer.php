<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Dealer extends Model
{
    use HasFactory;

    protected $table = 'dealer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'dealer_name',
        'dealer_address',
        'maps',
        'company',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mechanics()
    {
        return $this->hasMany(Mechanic::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    
    public function sparepart()
    {
        return $this->hasMany(Sparepart::class);
    }
}
