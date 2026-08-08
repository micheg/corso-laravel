<?php

use App\Http\Controllers\ProdottiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get("/", function () {
    return view("home", [
        "nome" => "Sviluppatore",
        "anno" => 2026,
    ]);
});
Route::get("/saluto", function () {
    return "Ciao! Sto imparando Laravel 13 senza guardare video!";
});

Route::get("/utente/{nome}", function ($nome) {
    return "Profilo utente di: " . ucfirst($nome);
});

Route::get('/chi-siamo', [PaginaController::class, 'chiSiamo']);

Route::get('/prodotti', [ProdottiController::class, 'index']);
