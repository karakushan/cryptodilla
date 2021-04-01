<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExchange extends Model
{
    use HasFactory;

    protected $casts = [
        'credentials' => 'array'
    ];
}
