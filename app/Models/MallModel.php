<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MallModel extends Model
{
    use HasFactory;
    protected $table = 'mall';
    protected $fillable = [
        'image',
        'name',
        'description',
        'type'
    ];
}
