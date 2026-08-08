<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PaginaController extends Controller
{
    public function creaLista(): View
    {
        Post::firstOrCreate(
            ["titolo" => "Il mio primo post su Laravel 13"], // Condizione di ricerca
            [
                "contenuto" =>
                    "Questo articolo è salvato direttamente nel file SQLite!",
                "pubblicato" => true,
            ],
        );

        // oppure
        /*
        if (Post::count() === 0) {
            Post::create([
                'titolo' => 'Il mio primo post su Laravel 13',
                'contenuto' => 'Questo articolo è salvato direttamente nel file SQLite!',
                'pubblicato' => true,
            ]);
        }
        */

        // 2. LEGGERE TUTTI i record presenti nel Database
        $tuttiIPost = Post::all();

        // 3. LEGGERE solo quelli pubblicati (Filtraggio)
        $postPubblicati = Post::where("pubblicato", true)->get();

        // Passiamo i dati alla vista
        return view("blog", [
            "posts" => $postPubblicati,
        ]);
    }
}
