<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PaginaController extends Controller
{
    public function chiSiamo(): View
    {
        $competenze = ['PHP 8.3', 'Laravel 13', 'Zed Editor', 'HTML/CSS'];

        return view('chi-siamo', [
            'sviluppatore' => 'Marco',
            'competenze' => $competenze
        ]);
    }
}
