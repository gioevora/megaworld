<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TownshipModel extends Model
{
    use HasFactory;
    protected $table = 'township';
    protected $fillable = [
        'name',
        'location',
        'type',
        'division',
        'image'
    ];
}
