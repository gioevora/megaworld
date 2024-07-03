<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateModel extends Model
{
    protected $table = 'documents';
    protected $fillable = [
        'files_name',
        'name',
        'section',
    ];
}
