<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MenuController;

// ================== Pages publiques ==================

// Page d'accueil
Route::get('/', function () {
    return view('index'); // Accueil
})->name('home');

// Page "À propos de nous"
Route::get('/apropos', function () {
    return view('aproposNous'); // Assure-toi que la vue existe
})->name('apropos'); // Définition correcte du nom
;

// Page "Connexion"
Route::get('/connexion', function () {
    return view('index'); // Vue index.blade.php pour la connexion
})->name('connexion');

// Page "Menu"
Route::get('/menu', function () {
    return view('menu'); // Vue menu.blade.php
})->name('menu');

Route::get('/nutrition/{dish_id}', [DishController::class, 'getNutrition']);

//route vers personnaliser.blade.php
Route::get('/menu/personaliser/{id}', [MenuController::class, 'personnaliser'])->name('menu.personaliser');

//pour la livraison 
Route::get('/livraison', function () {
    return view('livraison');
})->name('livraison');


//la livraison pour la personnalisation
Route::get('passer_personaliser', function () {
    return view('livraison');
})->name('passer_personaliser');

//pour la livraison 
Route::get('/emporter', function () {
    return view('emporter');
})->name('emporter');
//annulation de commande 
Route::get('/annuler', function () {
    return view('index');
})->name('annuler');

// Page "Restaurant"
Route::get('/restaurant', function () {
    return view('restaurant'); // Vue restaurant.blade.php
})->name('restaurant');
//page partenaire
Route::get('/partenaire', function () {
    return view('partenaire'); // Vue restaurant.blade.php
})->name('partenaire');

//page MENU DE R1
Route::get('/restau1', function () {
    return view('/Restau1/menu'); // Vue menu.blade.php
})->name('Restau1.menu');
//page MENU DE R2
Route::get('/restau2', function () {
    return view('Restau2.menu'); // Vue menu.blade.php
})->name('Restau2.menu');
//recuperer les informations de plats 
Route::get('/nutritional-values/{id}', [DishController::class, 'getNutritionalValues']);




// ================== Routes Admin ==================

// Formulaire de connexion Admin

// Route pour la page principale (affiche la vue principale avec les modales)
Route::get('/', function () {
    return view('index'); // Vue principale
})->name('home');

// Traitement de la connexion Admin
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

// Traitement de la connexion Gérant
Route::post('/gerant/login', [GerantController::class, 'login'])->name('gerant.login');

// Tableau de bord Admin (protégé par auth:admin)
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Tableau de bord Gérant (protégé par auth:gerant)
Route::middleware(['auth:gerant'])->group(function () {
    Route::get('/gerant/dashboard', [GerantController::class, 'dashboard'])->name('gerant.dashboard');
});


// Route pour la déconnexion
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirection vers l'accueil
})->name('logout');