<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/contato', function () {
    $message = 'Contato';
    return ($message) ; 
    
});

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.principal');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@principal')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app')-> group (function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});


Route::get('/admin', function() {
    return redirect()->route('site.index');
});

Route::fallback(function() {
    echo 'a rota não existe <a href= "'.route('site.principal').'"> clique aqui </a> ';
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/criar', function () {
//     return view('criar');
// })->middleware(['auth', 'verified'])->name('criar');

// Route::get('/consultar', function () {
//     return view('consultar');
// })->middleware(['auth', 'verified'])->name('consultar');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
