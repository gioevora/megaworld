<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitModel extends Model
{
    use HasFactory;
    protected $table = 'visits';
    protected $fillable = [
        'name',
       'number',
       'email',
       'date',
       'time',
       'message',
       'properties'

    ];

}
