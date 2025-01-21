<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    /**
     * Attributs assignables en masse.
     */
    protected $fillable = [
        'dish_id', // ID du plat auquel cet ingrédient est lié
        'name',         // Nom de l'ingrédient
        'description',  // Description optionnelle de l'ingrédient
    ];

    /**
     * Relation : Un ingrédient appartient à un plat (MenuItem).
     */
    public function menuItem()
    {
        return $this->belongsTo(Dish::class);
    }
}
