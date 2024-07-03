<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleModel extends Model
{
    use HasFactory;
    protected $table = 'sale';  
    public $incrementing = false;
    protected $fillable = [ 
        'id',
        'properties_name',
        'location',
        'description',
        'image',
        'type',
        'TOY',
        'units',
        'meter'
    ];
}
