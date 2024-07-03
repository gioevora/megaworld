<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForLeaseModel extends Model
{
    use HasFactory;
    protected $table = 'lease';
    public $incrementing = false;
    protected $fillable =[
        'id',
        'lease_name',
        'division',
        'location',
        'type',
        'unit_type',
        'unit_price',
        'description',
        'image',
        'status'

    ];
}
