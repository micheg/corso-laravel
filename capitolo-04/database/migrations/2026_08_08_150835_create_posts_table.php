<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("posts", function (Blueprint $table) {
            $table->id(); // Crea la colonna ID auto-incrementante
            $table->string("titolo"); // Colonna per il titolo (testo breve)
            $table->text("contenuto"); // Colonna per il testo lungo dell'articolo
            $table->boolean("pubblicato")->default(false); // Stato (vero/falso)
            $table->timestamps(); // Crea in automatico le colonne created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("posts");
    }
};
