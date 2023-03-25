<?php

use App\Http\Controllers\CerrarSesionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController; //Ruta para detección del controllador y encapsular estos métodos
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SecureurlController;
use Illuminate\Support\Facades\Auth; //Invocamos las librerias de Auth, para que active la sesión "recuerdame" usando las cookies

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');


});





Route::get('/registrarse', [RegistroController::class, 'index'])->name('registro'); //Se usa el helper para nombrar rutas principales
//MÉTODO SEGURO; Pasar por método get al controllador.
Route::post('/registrarse', [RegistroController::class, 'store']); //Request tipo POST.

/*Route::get('/vistausuario', function () {
    return view('accesoseguro');
})->middleware('auth');
*/

/*Route::get('/{user:name_user}', [SecureurlController::class, 'index'])->name('accesoseguro');*/

Route::get('/vistausuario', [SecureurlController::class, 'index'])->name('accesoseguro'); // Ruta controller acceso seguro

//Método index, funciona para retornar vistas - Método store, para registro de datos o validar datos.
Route::get('/login', [LoginController::class, 'index'])->name('login'); //Ruta GET solitando del login una vez ingresemos
Route::post('/login', [LoginController::class, 'store']);//Creamos la ruta de tipo POST, para poder guardar con el método STORE la información.

//Route::get('/iniciarsesion', [LoginController::class, 'index'])->name('iniciar'); //Se usa el helper para nombrar rutas principales
//Route::post('/iniciarsesion', [LoginController::class, 'store']); //Request tipo POST para iniciar sesión.
 
//Ruta para terminar sesión.
Route::get('/logout', [CerrarSesionController::class, 'store'])->name('logout');

Route::post('login', function(){
    $credentials = request()->only('ident', 'password');
    
    $remember = request()->filled('remember');

    if (Auth::attempt($credentials, $remember)) {
        request()->session()->regenerate();
    
        return redirect('vistausuario');
    }

    return redirect('login');

});

/*
Esto de abajo, no se debe de hacer por seguridad.

Route::get('/registro', function () {
    return view('auth.registro');//Se verá la vista del REGISTRO (NO LOGIN)
});

Route::get('/sesion', function () {
    return view('auth.sesion');//Se verá la vista del LOGIN PRINCIPAL (NO REGISTER)
});*/

//Método para activar botón de recordarme con cookies




Route::view('/welcome', 'welcome'); //X DEFECTO LARAVEL

Route::view('/index', 'index')->name('inicio');

Route::view('/institucion', 'institucion');
Route::view('/plancurso', 'plancurso');
Route::view('/temasA1', 'temasA1');
Route::view('/temasA2', 'temasA2');
Route::view('/temasB1', 'temasB1');
Route::view('/temasB2', 'temasB2');
Route::view('/temasC1', 'temasC1');
Route::view('/temasC2', 'temasC2');
Route::view('/curso', 'curso');

