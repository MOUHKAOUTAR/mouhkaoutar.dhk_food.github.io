<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NutritionalValue;

class NutritionalValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NutritionalValue::insert([
            // Entrées
            [
                'calories' => 180,
                'dish_id' => 1 ,// Salade César
                'proteins' => 7.5,
                'glucides' => 14.5,
                'lipides' => 9.8,
                'fibres' => 2.5,
                
            ],
            [
                'calories' => 200,
                'glucides' => 16.0,
                'proteins' => 8,
                'lipides' => 11.5,
                'fibres' => 1.8,
                'dish_id' => 2 // Soupe à l'oignon
            ],
            [
                'calories' => 250,
                'proteins' => 8.0,
                'glucides' => 19.0,
                'lipides' => 12.5,
                'fibres' => 3.0,
                'dish_id' => 3 // Bruschetta
            ],
            [
                'calories' => 300,
                'proteins' => 15.0,
                'glucides' => 23.0,
                'lipides' => 9.0,
                'fibres' => 5.0,
                'dish_id' => 4 // Carpaccio de bœuf
            ],
            [
                'calories' => 220,
                'proteins' => 12.0,
                
                'glucides' => 9.0,
                'lipides' => 13.0,
                'fibres' => 1.5,
                'dish_id' => 5 // Tartare de saumon
            ],
            [
                'calories' => 150,
                'proteins' => 3.5, 
                'glucides' => 10.5,
                'lipides' => 6.8,
                'fibres' => 2.2,
                'dish_id' => 6 // Gaspacho
            ],
            [
                'calories' => 190,
                'proteins' => 5.0,
                'glucides' => 13.5,
                'lipides' => 9.5,
                'fibres' => 3.0,
                'dish_id' => 7 // Avocat crevettes
            ],
            [
                'calories' => 320,
                'proteins' => 9.5,
                
                'glucides' => 17.0,
                'lipides' => 19.5,
                'fibres' => 1.2,
                'dish_id' => 8 // Foie gras
            ],
            [
                'calories' => 210,
                'proteins' => 6.0,
               
                'glucides' => 18.5,
                'lipides' => 8.5,
                'fibres' => 2.8,
                'dish_id' => 9 // Mini quiches
            ],
            [
                'calories' => 260,
                'proteins' => 7.8,
                
                'glucides' => 21.0,
                'lipides' => 11.0,
                'fibres' => 4.0,
                'dish_id' => 10 // Croustillants de chèvre
            ],

            //PLATS PRINCIPALES
                [
                    'calories' => 450,
                    'proteins' => 35.0,
                   
                    'glucides' => 28.0,
                    'lipides' => 19.0,
                    'fibres' => 4.0,
                    'dish_id' => 11 // Tajine Poulet
                ],
                [
                    'calories' => 520,
                    'proteins' => 25.0,
                    
                    'glucides' => 63.0,
                    'lipides' => 14.5,
                    'fibres' => 7.0,
                    'dish_id' => 12 // Couscous Royal
                ],
                [
                    'calories' => 600,
                    'proteins' => 40.0,
                   
                    'glucides' => 18.0,
                    'lipides' => 34.0,
                    'fibres' => 3.5,
                    'dish_id' => 13 // Grillades Mix
                ],
                [
                    'calories' => 480,
                    'proteins' => 30.0,
                    
                    'glucides' => 48.0,
                    'lipides' => 14.0,
                    'fibres' => 5.0,
                    'dish_id' => 14 // Paella
                ],
                [
                    'calories' => 420,
                    'proteins' => 28.0,
                    
                    'glucides' => 39.0,
                    'lipides' => 17.5,
                    'fibres' => 3.8,
                    'dish_id' => 15 // Poulet au curry
                ],
                [
                    'calories' => 500,
                    'proteins' => 45.0,
                    
                    'glucides' => 9.0,
                    'lipides' => 24.0,
                    'fibres' => 1.2,
                    'dish_id' => 16 // Filet de bœuf
                ],
                [
                    'calories' => 380,
                    'proteins' => 40.0,
                    
                    'glucides' => 4.5,
                    'lipides' => 14.0,
                    'fibres' => 0.8,
                    'dish_id' => 17 // Saumon grillé
                ],
                [
                    'calories' => 450,
                    'proteins' => 25.0,
                    
                    'glucides' => 39.0,
                    'lipides' => 19.0,
                    'fibres' => 3.0,
                    'dish_id' => 18 // Lasagnes
                ],
                [
                    'calories' => 400,
                    'proteins' => 15.0,
                    
                    'glucides' => 58.0,
                    'lipides' => 9.5,
                    'fibres' => 6.5,
                    'dish_id' => 19 // Risotto aux champignons
                ],
                [
                    'calories' => 300,
                    'proteins' => 12.0,
                    
                    'glucides' => 38.0,
                    'lipides' => 7.5,
                    'fibres' => 2.0,
                    'dish_id' => 20 // Pizza Margherita
                ],
                [
                    'calories' => 500,
                    'proteins' => 35.0,
                   
                    'glucides' => 24.0,
                    'lipides' => 21.5,
                    'fibres' => 3.5,
                    'dish_id' => 21 // Bœuf bourguignon
                ],
                [
                    'calories' => 400,
                    'proteins' => 35.0,
                    
                    'glucides' => 4.5,
                    'lipides' => 14.5,
                    'fibres' => 1.0,
                    'dish_id' => 22 // Poulet rôti
                ],
                [
                    'calories' => 480,
                    'proteins' => 30.0,
                    
                    'glucides' => 39.0,
                    'lipides' => 14.5,
                    'fibres' => 4.0,
                    'dish_id' => 23 // Tagliatelles aux crevettes
                ],
                [
                    'calories' => 550,
                    'proteins' => 30.0,
                    
                    'glucides' => 39.0,
                    'lipides' => 24.0,
                    'fibres' => 5.0,
                    'dish_id' => 24 // Canard à l'orange
                ],
                [
                    'calories' => 350,
                    'proteins' => 15.0,
                    
                    'glucides' => 48.0,
                    'lipides' => 9.0,
                    'fibres' => 6.0,
                    'dish_id' => 25 // Vegetarian Bowl
                ],

                //DESSERTS
                    [
                        'calories' => 320,
                        'proteins' => 5.0,
                        
                        'glucides' => 44.0,
                        'lipides' => 14.5,
                        'fibres' => 2.0,
                        'dish_id' => 26 // Tarte au chocolat
                    ],
                    [
                        'calories' => 290,
                        'proteins' => 6.0,
                        'glucides' => 34.0,
                        'lipides' => 13.5,
                        'fibres' => 1.5,
                        'dish_id' => 27 // Crème brûlée
                    ],
                    [
                        'calories' => 350,
                        'proteins' => 7.0,
                        'glucides' => 34.5,
                        'lipides' => 19.0,
                        'fibres' => 1.8,
                        'dish_id' => 28// Tiramisu
                    ],
                    [
                        'calories' => 380,
                        'proteins' => 6.0,
                        'glucides' => 38.0,
                        'lipides' => 24.5,
                        'fibres' => 2.5,
                        'dish_id' => 29 // Cheesecake aux fruits rouges
                    ],
                    [
                        'calories' => 120,
                        'proteins' => 3.0,
                        'glucides' => 14.0,
                        'lipides' => 5.5,
                        'fibres' => 0.8,
                        'dish_id' => 30 // Macarons
                    ],
                    [
                        'calories' => 300,
                        'proteins' => 5.0,
                        'glucides' => 29.5,
                        'lipides' => 17.5,
                        'fibres' => 1.5,
                        'dish_id' => 31 // Mousse au chocolat
                    ],
                    [
                        'calories' => 350,
                        'proteins' => 6.0,
                        'glucides' => 31.5,
                        'lipides' => 21.0,
                        'fibres' => 2.0,
                        'dish_id' => 32 // Fondant au chocolat
                    ],
                    [
                        'calories' => 250,
                        'proteins' => 4.0,
                        'glucides' => 36.5,
                        'lipides' => 9.5,
                        'fibres' => 2.2,
                        'dish_id' => 33 // Tarte aux pommes
                    ],
                    [
                        'calories' => 200,
                        'proteins' => 4.0,
                        'glucides' => 27.0,
                        'lipides' => 7.5,
                        'fibres' => 1.0,
                        'dish_id' => 34 // Glace artisanale
                    ],
                    [
                        'calories' => 220,
                        'proteins' => 5.0,
                        'glucides' => 29.0,
                        'lipides' => 6.5,
                        'fibres' => 1.5,
                        'dish_id' => 35 // Clafoutis aux cerises
                    ],
                    [
                        'calories' => 250,
                        'proteins' => 5.0,
                        'glucides' => 28.5,
                        'lipides' => 11.5,
                        'fibres' => 2.0,
                        'dish_id' => 36 // Profiteroles
                    ],
                    [
                        'calories' => 280,
                        'proteins' => 5.0,
                        'glucides' => 39.5,
                        'lipides' => 9.5,
                        'fibres' => 1.5,
                        'dish_id' => 37 // Gâteau au citron
                    ],
                    [
                        'calories' => 190,
                        'proteins' => 4.0,
                        'glucides' => 24.5,
                        'lipides' => 9.5,
                        'fibres' => 1.2,
                        'dish_id' => 38 // Panna Cotta
                    ],
                    [
                        'calories' => 400,
                        'proteins' => 6.0,
                        'glucides' => 39.0,
                        'lipides' => 24.5,
                        'fibres' => 2.5,
                        'dish_id' => 39// Baklava
                    ],
                    [
                        'calories' => 180,
                        'proteins' => 4.0,
                        'glucides' => 24.0,
                        'lipides' => 7.5,
                        'fibres' => 1.0,
                        'dish_id' => 40// Beignets
                    ],
                //BOISSONS
                        [
                            'calories' => 50,
                            'proteins' => 0.0,
                            'glucides' => 12.0,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 41 // Thé à la menthe
                        ],
                        [
                            'calories' => 110,
                            'proteins' => 1.0,
                            'glucides' => 24.5,
                            'lipides' => 0.0,
                            'fibres' => 0.1,
                            'dish_id' => 42 // Jus d'orange
                        ],
                        [
                            'calories' => 5,
                            'proteins' => 0.2,
                            'glucides' => 0.0,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 43 // Café Expresso
                        ],
                        [
                            'calories' => 120,
                            'proteins' => 6.0,
                            'glucides' => 11.5,
                            'lipides' => 5.5,
                            'fibres' => 0.0,
                            'dish_id' => 44 // Café Latte
                        ],
                        [
                            'calories' => 140,
                            'proteins' => 1.0,
                            'glucides' => 33.5,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 45 // Jus de grenade
                        ],
                        [
                            'calories' => 210,
                            'proteins' => 6.0,
                            'glucides' => 37.5,
                            'lipides' => 3.5,
                            'fibres' => 0.5,
                            'dish_id' => 46 // Milkshake à la vanille
                        ],
                        [
                            'calories' => 90,
                            'proteins' => 0.0,
                            'glucides' => 21.5,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 47 // Limonade maison
                        ],
                        [
                            'calories' => 150,
                            'proteins' => 1.5,
                            'glucides' => 34.5,
                            'lipides' => 0.5,
                            'fibres' => 0.5,
                            'dish_id' => 48 // Smoothie tropical
                        ],
                        [
                            'calories' => 40,
                            'proteins' => 1.0,
                            'glucides' => 8.5,
                            'lipides' => 0.0,
                            'fibres' => 0.3,
                            'dish_id' => 49 // Jus de carotte
                        ],
                        [
                            'calories' => 80,
                            'proteins' => 0.0,
                            'glucides' => 19.5,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 50 // Thé glacé à la pêche
                        ],
                        [
                            'calories' => 290,
                            'proteins' => 5.0,
                            'glucides' => 31.5,
                            'lipides' => 14.5,
                            'fibres' => 0.5,
                            'dish_id' => 51 // Café moka
                        ],
                        [
                            'calories' => 40,
                            'proteins' => 1.0,
                            'glucides' => 8.5,
                            'lipides' => 0.0,
                            'fibres' => 0.0,
                            'dish_id' => 52// Jus de tomate
                        ],
                        [
                            'calories' => 140,
                            'proteins' => 1.0,
                            'glucides' => 32.5,
                            'lipides' => 0.5,
                            'fibres' => 0.3,
                            'dish_id' => 53 // Cocktail de fruits
                        ],
                        [
                            'calories' => 180,
                            'proteins' => 6.0,
                            'glucides' => 26.5,
                            'lipides' => 4.5,
                            'fibres' => 0.0,
                            'dish_id' => 54 // Chocolat chaud
                        ],
                        
                            // Végétarien
                            [
                                'calories' => 350,
                                'proteins' => 12.0,
                                'glucides' => 44.5,
                                'lipides' => 9.5,
                                'fibres' => 8.0,
                                'dish_id' => 55 // Buddha Bowl
                            ],
                            [
                                'calories' => 280,
                                'proteins' => 6.0,
                                'glucides' => 49.5,
                                'lipides' => 6.5,
                                'fibres' => 6.0,
                                'dish_id' => 56 // Curry de légumes
                            ],
                            [
                                'calories' => 400,
                                'proteins' => 18.0,
                                'glucides' => 49.0,
                                'lipides' => 14.5,
                                'fibres' => 5.0,
                                'dish_id' => 57 // Lasagnes végétariennes
                            ],
                            [
                                'calories' => 250,
                                'proteins' => 8.0,
                                'glucides' => 29.5,
                                'lipides' => 9.5,
                                'fibres' => 4.0,
                                'dish_id' => 58 // Galette de quinoa
                            ],
                            [
                                'calories' => 320,
                                'proteins' => 12.0,
                                'glucides' => 49.0,
                                'lipides' => 7.5,
                                'fibres' => 3.5,
                                'dish_id' => 59 // Pâtes aux champignons
                            ],
                        
                            // Vegan
                            [
                                'calories' => 420,
                                'proteins' => 15.0,
                                'glucides' => 64.5,
                                'lipides' => 7.5,
                                'fibres' => 6.0,
                                'dish_id' => 60 // Burger végétal
                            ],
                            [
                                'calories' => 240,
                                'proteins' => 3.0,
                                'glucides' => 44.5,
                                'lipides' => 3.5,
                                'fibres' => 5.0,
                                'dish_id' => 61 // Bowl açaï
                            ],
                            [
                                'calories' => 310,
                                'proteins' => 8.0,
                                'glucides' => 39.5,
                                'lipides' => 9.5,
                                'fibres' => 5.5,
                                'dish_id' => 62 // Tajine de légumes
                            ],
                            [
                                'calories' => 200,
                                'proteins' => 6.0,
                                'glucides' => 24.5,
                                'lipides' => 5.5,
                                'fibres' => 4.5,
                                'dish_id' => 63 // Salade complète
                            ],
                            [
                                'calories' => 350,
                                'proteins' => 10.0,
                                'glucides' => 49.5,
                                'lipides' => 7.5,
                                'fibres' => 3.0,
                                'dish_id' => 64 // Pad thaï végétal
                            ],
                        
                            // Sans Gluten
                            [
                                'calories' => 220,
                                'proteins' => 35.0,
                                'glucides' => 0.5,
                                'lipides' => 5.5,
                                'fibres' => 0.0,
                                'dish_id' => 65 // Poulet grillé aux herbes
                            ],
                            [
                                'calories' => 300,
                                'proteins' => 7.0,
                                'glucides' => 44.5,
                                'lipides' => 5.5,
                                'fibres' => 5.0,
                                'dish_id' => 66 // Risotto aux légumes
                            ],
                            [
                                'calories' => 250,
                                'proteins' => 40.0,
                                'glucides' => 0.0,
                                'lipides' => 9.5,
                                'fibres' => 0.0,
                                'dish_id' => 67 // Steak de thon
                            ],
                            [
                                'calories' => 180,
                                'proteins' => 12.0,
                                'glucides' => 9.5,
                                'lipides' => 7.5,
                                'fibres' => 2.0,
                                'dish_id' => 68 // Salade niçoise
                            ],
                            [
                                'calories' => 400,
                                'proteins' => 8.0,
                                'glucides' => 39.5,
                                'lipides' => 19.5,
                                'fibres' => 3.0,
                                'dish_id' => 69 // Gâteau aux amandes
                            ],
                        
                            // Épicé
                            [
                                'calories' => 320,
                                'proteins' => 20.0,
                                'glucides' => 29.5,
                                'lipides' => 11.5,
                                'fibres' => 4.0,
                                'dish_id' => 70 // Curry madras
                            ],
                            [
                                'calories' => 350,
                                'proteins' => 15.0,
                                'glucides' => 49.5,
                                'lipides' => 9.5,
                                'fibres' => 3.5,
                                'dish_id' => 71 // Pad thaï épicé
                            ],
                            [
                                'calories' => 450,
                                'proteins' => 20.0,
                              
                                'glucides' => 39.5,
                                'lipides' => 19.5,
                                'fibres' => 5.0,
                                'dish_id' => 72 // Tajine merguez
                            ],
                            [
                                'calories' => 380,
                                'proteins' => 25.0,
                                'glucides' => 29.5,
                                'lipides' => 14.5,
                                'fibres' => 3.0,
                                'dish_id' => 73 // Wings buffalo
                            ],
                            [
                                'calories' => 200,
                                'proteins' => 15.0,
                                'glucides' => 19.5,
                                'lipides' => 5.5,
                                'fibres' => 2.0,
                                'dish_id' => 74 // Soupe tom yum
                            ],
                             // Menu Enfant
    ['calories' => 350,
     'proteins' => 15.5,
     'glucides' => 30.2, 
     'lipides' => 18.3, 
     'fibres' => 3.5, 
     'dish_id' => 75],

    ['calories' => 250, 
    'proteins' => 12.1, 
    'glucides' => 22.3,
    'lipides' => 14.2, 
    'fibres' => 2.3, 
    'dish_id' => 76],

    ['calories' => 600,
     'proteins' => 22.7,
       'glucides' => 65.1,
        'lipides' => 24.5, 
        'fibres' => 4.1, 
        'dish_id' => 77],
    ['calories' => 500, 
    'proteins' => 22.5,
     'glucides' => 53.4, 
     'lipides' => 19.8,
      'fibres' => 2.9,
       'dish_id' => 78],

    ['calories' => 250, 
    'proteins' => 5.4, 
    'glucides' => 41.2, 
    'lipides' => 9.7,
     'fibres' => 1.7,
      'dish_id' => 79],
                        
                           
                       
        ]);
        
    }
}
