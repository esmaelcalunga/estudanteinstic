<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\transacao;
use App\Models\Transacoes;
use Illuminate\Http\Request;
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
 
Route::get('/', [transacao::class, 'index'])->name('home');

 
Route::post('/cadastrar', [transacao::class, 'cadastrar'])->name('cadastrar');

Route::get('/editar/{id}', [transacao::class, 'mostrarUmRegisto'])->name('mostrar');

 
Route::post('/editar/editarregisto/{id}', [transacao::class, 'editarregisto'])->name('editar');


 


Route::get('/eliminar/{id}', function ($id) {

    $transacao = Transacoes::findOrFail($id);
    $transacao -> delete();

    return redirect()->route('home');
 
});


 
