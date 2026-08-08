<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ProdottiController extends Controller
{
    public function index(): View
    {
        $prodotti = ['mele', 'pere', 'susine', 'albicocche'];

        return view('prodotti', [
            'prodotti' => $prodotti
        ]);
    }
}
