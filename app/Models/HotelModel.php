<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $fillable = [
        'name',
        'location',
        'hotel_brand',
        'image'
    ];
}
