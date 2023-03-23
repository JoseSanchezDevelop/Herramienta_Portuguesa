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
        return view('dashboard');
        //dd(auth()->user());
        //$users = User::where('id', '!=', auth()->id())->get();
        /*$users = User::all();
        return view('dashboard', [
            'users' => $users
        ]);*/
    }
}
