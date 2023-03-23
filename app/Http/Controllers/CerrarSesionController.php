<?php

namespace App\Http\Controllers;

class CerrarSesionController extends Controller
{

    public function store()
    {
        //dd('cerrando...');
        auth()->logout();
        return redirect()->route('login');
    }
}
