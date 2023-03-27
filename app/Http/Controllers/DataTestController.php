<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultTest;


class DataTestController extends Controller
{
    
    public function guardarCampo(Request $request){

        {
            //Este código recupera el valor del campo resultante de la solicitud AJAX,
            //y luego lo guarda en la base de datos utilizando el modelo correspondiente.
            $valor = $request->input('valor');
    
            // Guarda el valor en la base de datos utilizando el modelo correspondiente
            $datos = new ResultTest();
            $datos->campo = $valor;
            $datos->save();
    
            
            // puedes redirigir al usuario a otra página o mostrar un mensaje de éxito aquí
        }

    }

}
