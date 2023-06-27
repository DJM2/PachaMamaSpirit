<?php

use App\Http\Controllers\EnlacesController;
use Illuminate\Support\Facades\Auth;
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
//Carta pikol
Route::get('carta-pikol', [EnlacesController::class, 'index'])->name('pikol');
Route::get('pikol-local', [EnlacesController::class, 'local'])->name('pikol-local');
Route::get('pikol-delivery', [EnlacesController::class, 'delivery'])->name('pikol-delivery');
//Carta Waka Runtu
Route::get('carta-waka', [EnlacesController::class, 'index_waka'])->name('waka');
Route::get('waka-runtu-local', [EnlacesController::class, 'waka_local'])->name('waka-local');
Route::get('waka-runtu-delivery', [EnlacesController::class, 'waka_delivery'])->name('waka-delivery');
//Carta Ricos Pan
Route::get('carta-ricospan', [EnlacesController::class, 'index_ricos'])->name('ricospan');
Route::get('ricospan-local', [EnlacesController::class, 'local_ricos'])->name('ricospan-local');
Route::get('ricospan-delivery', [EnlacesController::class, 'delivery_ricos'])->name('ricospan-delivery');
//Carta Trujillano
Route::get('carta-trujillano', [EnlacesController::class, 'index_truji'])->name('trujillano');
Route::get('trujillano-local', [EnlacesController::class, 'local_truji'])->name('trujillano-local');
Route::get('trujillano-delivery', [EnlacesController::class, 'delivery_truji'])->name('trujillano-delivery');

//Carrito
// routes/web.php

Route::post('/pedidos', [EnlacesController::class, 'carrito'])->name('pedido');


Route::get('prueba', [EnlacesController::class, 'prueba']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
