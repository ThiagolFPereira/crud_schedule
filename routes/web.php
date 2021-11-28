<?php

use App\Http\Controllers\ContatoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');
Route::get('/contatos/add', [ContatoController::class, 'create'])->name('contatos.create');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contatos.show');
Route::get('/contatos/edit/{id}', [ContatoController::class, 'edit'])->name('contatos.edit');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');

