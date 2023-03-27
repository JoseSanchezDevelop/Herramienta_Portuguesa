<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SecureurlController extends Controller
{

    //Se crea el constructor para hacer las validaciones
    // Ej: Si el usuario se encuentra logued, para así proceder a mostrar el index
    public function __construct()
    {
        $this->middleware('auth');
    }


    //El middleware ofrece una interfaz de programación de aplicaciones (API) 
    //estándar para administrar la entrada y la salida de los datos requeridos desde el componente.

    //(User $user)
    public function index(User $user)
    {
        //dd($user);

        //Se traerá el arreglo con la info del usuario, para traer la URL de manera dinámica desde la db.
        //dd($user);
        return view('dashboard', [

            'user' => $user

        ]);
        //dd(auth()->user());

    }

    public function create()
    {
        //dd('creando publicación');
        return view('publicaciones.create');
    }
}
