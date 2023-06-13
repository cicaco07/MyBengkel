<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otp extends Model
{
    use HasFactory;
    protected $table = 'otps';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'otp',
        'exp',
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
