<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $table = 'mechanic';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'dealer_id',
        'position',
    ];

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
