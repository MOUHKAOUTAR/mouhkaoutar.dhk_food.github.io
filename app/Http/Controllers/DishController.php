<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NutritionalValue;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::with('category')->get();
        return response()->json($dishes);
    }

    public function getNutrition($dish_id)
    {
        $dish = Dish::find($dish_id);
    
        if (!$dish) {
            return response()->json(['error' => 'Plat introuvable'], 404);
        }
    
        // Récupérer les valeurs nutritionnelles
        $nutrition = $dish->nutrition; // Assurez-vous d'avoir une relation ou un champ pour cela
    
        return response()->json([
            'id' => $dish->id,
            'name' => $dish->name,
            'nutrition' => $nutrition
        ]);
    }
    
}
