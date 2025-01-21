<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionalValue extends Model
{
    use HasFactory;

    protected $table = 'nutritional_values';

    protected $fillable = [
        'calories', 
        'proteins', 
        'glucides', 
        'lipides', 
        'fibres', 
        'dish_id'
    ];
}

