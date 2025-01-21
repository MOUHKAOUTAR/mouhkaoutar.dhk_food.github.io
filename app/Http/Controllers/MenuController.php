<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NutritionalValue;
use App\Models\Dish;

class MenuController extends Controller
{  public function getNutritionalValues($dishId)
    {
        $dish = Dish::find($dishId);
        $nutritionalValue = NutritionalValue::find($dishId);
        return view('menu', compact('dish', 'nutritionalValue'));
    }
    public function personnaliser($id)
    {
        // Données des plats (statique)
        $menuData = [
            1 => [
                'name' => 'Salade César',
                'image' => 'assets/Menu_images/saladeCe.jpg',
                'description' => 'Laitue romaine, croûtons, parmesan',
                'options' => ['sans croûtons', 'supplément poulet']
            ],
            2 => [
                'name' => 'Soupe à l\'oignon',
                'image' => 'assets/Menu_images/soupeO.jpg',
                'description' => 'Oignons caramélisés, fromage gratiné',
                'options' => ['supplément fromage']
            ],
            // Ajoutez vos autres plats ici
        ];
    
        // Vérifiez si le plat existe dans les données statiques
        $item = $menuData[$id] ?? null;
    
        if (!$item) {
            return abort(404, 'Plat non trouvé');
        }
    
        // Récupérer les ingrédients depuis la base de données
        $ingredients = \DB::table('ingredients')->get();
    
        // Passer les données à la vue
        return view('personnaliser', [
            'item' => $item,
            'ingredients' => $ingredients
        ]);
    }
    

}
