<?php

use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Rutas de pagina de inicio
Route::get('/', [webController::class, 'home'])->name('home');

//Rutas de proyectos
Route::get('proyectos', [webController::class, 'projects'])->name('proyects');
// Route::get('project/{id}',[webController::class, 'details'])->name('details');