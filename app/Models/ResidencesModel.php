<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidencesModel extends Model
{
    use HasFactory;
    protected $table = 'residence';
    protected $fillable = [
        'name',
        'location',
        'status',
        'image',
        'description'
    ];
}
