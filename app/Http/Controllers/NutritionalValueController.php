<?php

namespace App\Http\Controllers;

use App\Models\NutritionalValue;

class NutritionalValueController extends Controller
{
    public function index()
    {
        // Récupère toutes les données de la table
        $nutritionalValues = NutritionalValue::all();
        

        // Retourne les données à une vue
        return view('nutritional_values.index', compact('nutritionalValues'));
    }
    
}
