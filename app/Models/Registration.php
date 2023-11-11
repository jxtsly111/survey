<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'electoral_area',
        'polling',
        'first_name',
        'last_name',
        'categories',
        'decisions', 
    ];
}
