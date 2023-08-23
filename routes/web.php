<?php

use App\Http\Controllers\veiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

//Route::get('/cadastro', function () {
// return view('/cadastro');
//});

//Route::get('/show', function () {
//  return view('/show');
//});

Route::get('/cadastro', [veiculoController::class, 'cadastro']);
Route::post('/cadastro', [veiculoController::class, 'store'])->name('registrar_veiculo');
Route::get('/show', [veiculoController::class, 'show']);
