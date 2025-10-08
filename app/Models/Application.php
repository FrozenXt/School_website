<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'class',
        'father_name',
        'father_number',
        'mother_name',
        'mother_number',
        'temp_address',
        'perm_address',
        'message',
    ];
}
