<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitiesModel extends Model
{
    use HasFactory;
    protected $table = 'aminities';
    public $incrementing = false;
    protected $fillable =[
        'aminities_name',
        'category',

    ];

}
