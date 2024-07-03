<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForSaleModel extends Model
{
    use HasFactory;
    protected $table = 'forsale_details';
    public $incrementing = false;
    protected $fillable =[
        'sale_id',
        'amenity_id',

    ];
}
