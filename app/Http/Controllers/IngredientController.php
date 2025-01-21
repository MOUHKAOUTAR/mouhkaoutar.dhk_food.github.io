<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Récupère les ingrédients d'un plat spécifique et les retourne dans la vue.
     */
    public function showIngredients($menuItemId)
    {
        // Récupérer les ingrédients associés au plat
        $ingredients = Ingredient::where('menu_item_id', $menuItemId)->get();

        if ($ingredients->isEmpty()) {
            return abort(404, 'Ingrédients non trouvés pour ce plat');
        }

        // Passer les ingrédients à la vue
        return view('menu.personnaliser', compact('ingredients'));
    }

    /**
     * Ajouter un ingrédient au plat.
     */
    public function addIngredient(Request $request, $menuItemId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Enregistrer un nouvel ingrédient lié au plat
        Ingredient::create([
            'menu_item_id' => $menuItemId, // Assurez-vous d'avoir une relation avec le plat
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('menu.personnaliser', $menuItemId)->with('success', 'Ingrédient ajouté avec succès.');
    }

    /**
     * Supprimer un ingrédient spécifique.
     */
    public function removeIngredient($ingredientId)
    {
        $ingredient = Ingredient::findOrFail($ingredientId);
        $ingredient->delete();

        return redirect()->back()->with('success', 'Ingrédient supprimé avec succès.');
    }
}
