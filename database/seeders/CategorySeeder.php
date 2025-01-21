<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insérer des catégories dans la table 'categories'
        Category::insert([
            ['name' => 'Entrées'],
            ['name' => 'Plats principaux'],
            ['name' => 'Desserts'],
            ['name' => 'Boissons'],
            ['name' => 'Végétarien'],
            ['name' => 'Vegan'],
            ['name' => 'Sans Gluten'],
            ['name' => 'Épicé'],
            ['name' => 'Menu Enfant']
            ]);
    }
}
