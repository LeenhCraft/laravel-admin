<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
//rutas individuales para cada metodo
// Route::get('/cursos', [CursoController::class, 'index']);
// Route::get('/cursos/create', [CursoController::class, 'create']);
// Route::get('/cursos/{idcurso?}', [CursoController::class, 'show']);

Route::get('/controlador/{metodo?}/{parametros?}', function ($metodo = '', $parametros = '') {
    echo "El metodo es: " . $metodo . " y los parametros son: " . $parametros;
    return false;
});

//grupos de ruta por controlador
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index');
    Route::get('/cursos/create', 'create');
    Route::get('/cursos/{idcurso?}', 'show');
});
