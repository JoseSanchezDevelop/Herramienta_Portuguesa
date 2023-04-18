<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function index()
    {
        return view('auth.sesion'); //Método que retornará la vista de login una vez registrado los datos del user new
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ident' => 'required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('ident', 'password'))) {

            return back()->with('mensaje', '¡Usuario o Contraseña Incorrecta!');
            //En caso de ser invalidos los datos suministrados en el login con relación
            //a la DB, mostrará la vista en la que estaba con este mensaje de alerta.

        }

        //Pasamos el campo "name_user" dentro de la ruta para que contenga la autenticación de cada usuario individualmente.
        return redirect()->route('accesoseguro', ['user' => auth()->user()->name_user]);
    }
}
