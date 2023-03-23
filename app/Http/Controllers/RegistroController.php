<?php

namespace App\Http\Controllers; //Ubicación de donde están los controladores

use Illuminate\Http\Request; //Método request, existen 2. Por ahora solo para llamar la vista

use App\Models\User; //Importamos el modelo (Viende desde la carpeta Models)

use Illuminate\Support\Facades\Hash; //Método Hash, para registrar datos para poder obtener seguridad desde el Framework 'encriptación'

use Illuminate\Validation\Rules\Password; //Métodos de validación de las contraseñas.

use Illuminate\Support\Str; // Helper Slug, para poder convertir los campos en url.



//Clase que genera los atributos de la clase padre la cual es llamda Controller
class RegistroController extends Controller
{

    public function index()
    {
        return view('auth.registro');
    }

    public function store(Request $request)
    {
        //dd es una función de laravel que permite debuggear VAR
        //¿¿dd($_REQUEST);#Me muestra todo el método post que estoy llamando

        //Si se digitan usuarios repetidos, no va generar error.
        $request->request->add(['name_user' => Str::slug($request->name_user)]);

        $validated = $request->validate([
            'ident' => 'required|min:7|unique:users|string',
            'name_user' => 'required|min:5|max:40|string',
            'email' => 'required|unique:users|email|max:60|string',
            'genero' => 'required',
            'career' => 'required|min:3|max:40|string',
            'password' => [
                'required',
                Password::min(5)
                    ->letters(1)
                    ->mixedCase(1)
                    ->numbers(1)
                    ->symbols(1)
                    ->uncompromised(3)
            ],
            'passconfirm' => 'required|same:password|string'

        ]);

        // uncumpromised | Ensure the password appears less than 3 times in the same data leak...

        User::create([

            //Campos DB  -----  Campos del front directamente desde el formulario
            'ident' => $request->ident,
            'name_user' => $request->name_user,
            'genero' => $request->genero,
            'email' => $request->email,
            'career' => $request->career,
            'password' => Hash::make($request->password), //Se registra la contraseña de manera encriptada en la DB.
        ]);
        //Intento de autenticación y redireccionamiento.
        auth()->attempt([
            'ident' => $request->ident,
            'password' => $request->password,
        ]);

        //otra forma de autenticar
        /*auth()->attempt($request->only('ident','pass'));*/

        //Redireccionamos la ruta en laravel de la siguiente manera...
        return redirect()->route('login');
    }
}
