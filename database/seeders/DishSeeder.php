<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { Dish::insert([
        // Entrées
        ['name' => 'Salade César', 'category_id' => 1],
        ['name' => 'Soupe à l\'oignon', 'category_id' => 1],
        ['name' => 'Bruschetta', 'category_id' => 1],
        ['name' => 'Carpaccio de bœuf', 'category_id' => 1],
        ['name' => 'Tartare de saumon', 'category_id' => 1],
        ['name' => 'Gaspacho', 'category_id' => 1],
        ['name' => 'Avocat crevettes', 'category_id' => 1],
        ['name' => 'Foie gras', 'category_id' => 1],
        ['name' => 'Mini quiches', 'category_id' => 1],
        ['name' => 'Croustillants de chèvre', 'category_id' => 1],

        // Plats principaux
        ['name' => 'Tajine Poulet', 'category_id' => 2],
        ['name' => 'Couscous Royal', 'category_id' => 2],
        ['name' => 'Grillades Mix', 'category_id' => 2],
        ['name' => 'Paella', 'category_id' => 2],
        ['name' => 'Poulet au curry', 'category_id' => 2],
        ['name' => 'Filet de bœuf', 'category_id' => 2],
        ['name' => 'Saumon grillé', 'category_id' => 2],
        ['name' => 'Lasagnes', 'category_id' => 2],
        ['name' => 'Risotto aux champignons', 'category_id' => 2],
        ['name' => 'Pizza Margherita', 'category_id' => 2],
        ['name' => 'Bœuf bourguignon', 'category_id' => 2],
        ['name' => 'Poulet rôti', 'category_id' => 2],
        ['name' => 'Tagliatelles aux crevettes', 'category_id' => 2],
        ['name' => 'Canard à l\'orange', 'category_id' => 2],
        ['name' => 'Vegetarian Bowl', 'category_id' => 2],

        // Desserts
        ['name' => 'Tarte au chocolat', 'category_id' => 3],
        ['name' => 'Crème brûlée', 'category_id' => 3],
        ['name' => 'Tiramisu', 'category_id' => 3],
        ['name' => 'Cheesecake aux fruits rouges', 'category_id' => 3],
        ['name' => 'Macarons', 'category_id' => 3],
        ['name' => 'Mousse au chocolat', 'category_id' => 3],
        ['name' => 'Fondant au chocolat', 'category_id' => 3],
        ['name' => 'Tarte aux pommes', 'category_id' => 3],
        ['name' => 'Glace artisanale', 'category_id' => 3],
        ['name' => 'Clafoutis aux cerises', 'category_id' => 3],
        ['name' => 'Profiteroles', 'category_id' => 3],
        ['name' => 'Gâteau au citron', 'category_id' => 3],
        ['name' => 'Panna Cotta', 'category_id' => 3],
        ['name' => 'Baklava', 'category_id' => 3],
        ['name' => 'Beignets', 'category_id' => 3],

        // Boissons
        ['name' => 'Thé à la menthe', 'category_id' => 4],
        ['name' => 'Jus d\'orange', 'category_id' => 4],
        ['name' => 'Café Expresso', 'category_id' => 4],
        ['name' => 'Café Latte', 'category_id' => 4],
        ['name' => 'Jus de grenade', 'category_id' => 4],
        ['name' => 'Milkshake à la vanille', 'category_id' => 4],
        ['name' => 'Limonade maison', 'category_id' => 4],
        ['name' => 'Smoothie tropical', 'category_id' => 4],
        ['name' => 'Jus de carotte', 'category_id' => 4],
        ['name' => 'Thé glacé à la pêche', 'category_id' => 4],
        ['name' => 'Café moka', 'category_id' => 4],
        ['name' => 'Jus de tomate', 'category_id' => 4],
        ['name' => 'Cocktail de fruits', 'category_id' => 4],
        ['name' => 'Chocolat chaud', 'category_id' => 4],
        //Végétarien
        ['name' => 'Buddha Bowl', 'category_id' => 5],
        ['name' => 'Curry de légumes', 'category_id' => 5],
        ['name' => 'Lasagnes végétariennes', 'category_id' => 5],
        ['name' => 'Galette de quinoa', 'category_id' => 5],
        ['name' => 'Pâtes aux champignons', 'category_id' => 5],
        //Vegan
        ['name' => 'Burger végétal', 'category_id' => 6],
        ['name' => 'Bowl açaï', 'category_id' => 6],
        ['name' => 'Tajine de légumes', 'category_id' => 6],
        ['name' => 'Salade complète', 'category_id' => 6],
        ['name' => 'Pad thaï végétal', 'category_id' => 6],
        //Sans Gluten
        ['name' => 'Poulet grillé aux herbes', 'category_id' => 7],
        ['name' => 'Risotto aux légumes', 'category_id' => 7],
        ['name' => 'Steak de thon', 'category_id' => 7],
        ['name' => 'Salade niçoise', 'category_id' => 7],
        ['name' => 'Gâteau aux amandes', 'category_id' => 7],
        //Épicé
        ['name' => 'Curry madras', 'category_id' => 8],
        ['name' => 'Pad thaï épicé', 'category_id' => 8],
        ['name' => 'Tajine merguez', 'category_id' => 8],
        ['name' => 'Wings buffalo', 'category_id' => 8],
        ['name' => 'Soupe tom yum', 'category_id' => 8],
        //Menu Enfant
        ['name' => 'Mini burger', 'category_id' => 9],
        ['name' => 'Nuggets maison', 'category_id' => 9],
        ['name' => 'Pâtes bolognaise', 'category_id' => 9],
        ['name' => 'Pizza junior', 'category_id' => 9],
        ['name' => 'Crêpe sucrée', 'category_id' => 9],









    ]);
}
}