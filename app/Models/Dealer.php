<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $table = 'dealer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'dealer_name',
        'dealer_address',
        'company',
    ];
}
