<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'spareparts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'item_name', 
        'image', 
        'quantity_left', 
        'price',
    ];

    // Jika ada timestamp (created_at, updated_at), tambahkan property ini
    // public $timestamps = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function dealer()
    {
        return $this->belongsTo(Sparepart::class);
    }
}
