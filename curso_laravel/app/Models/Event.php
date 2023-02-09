<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // tratar os dados items como array
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];
    
}
