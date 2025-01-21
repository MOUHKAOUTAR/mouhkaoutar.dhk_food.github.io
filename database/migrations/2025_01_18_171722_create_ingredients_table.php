<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();  // Identifiant unique de chaque ingrédient
            $table->string('name');  // Nom de l'ingrédient (ex: Tomate, Fromage)
            $table->text('description')->nullable();  // Description optionnelle de l'ingrédient
            
            $table->decimal('price', 8, 2);  // Prix de l'ingrédient (avec 2 décimales)
            $table->string('image')->nullable(); // Ajout de la colonne pour l'image
            $table->timestamps();  // Gestion des timestamps (création et mise à jour)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
