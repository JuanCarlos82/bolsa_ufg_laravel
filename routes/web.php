<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BolsaController;
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

Route::get('/', HomeController::class);

Route::get('bolsa',function(){
    return "Bienvenido a Bolsa de Trabajo";
});

Route::get('bolsa/create', function () {
    return "En esta pagina podas crear la bolsa de trabajo";
});

Route::get('bolsa/{bolsa}',function($bolsa){
    return "Bienvenido a la bolsa de empleo: $bolsa";
});

route::get('bolsa',[BolsaController::class, 'index']);
route::get('bolsa/create',[BolsaController::class, 'create']);
route::get('bolsa/{bolsa}',[BolsaController::class, 'show']);

/*Route::get('bolsa/{bolsa}/{categoria?}', function ($bolsa, $categoria = null) {
    if($categoria){
        return "Bienvenido a la bolsa de empleo $bolsa, de la categoria $categoria";
    }else{
        return "Bienvenido a la bolsa: $bolsa";
    }
    
});*/
