<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EnlacesCategorias;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchenController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ToursenController;
use App\Http\Controllers\UserControler;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Páginas de inicio
Route::get('/', [ToursenController::class, 'mostrar'])->name('index');
Route::get('inicio', [TourController::class, 'mostrar'])->name('inicio');
//Categorias español
Route::get('machu-picchu', [EnlacesCategorias::class, 'machuPicchu'])->name('mapi');
Route::get('caminatas', [EnlacesCategorias::class, 'caminata'])->name('caminata');
Route::get('alrededor-de-peru', [EnlacesCategorias::class, 'peru'])->name('peru');
Route::get('privados', [EnlacesCategorias::class, 'luxury'])->name('luxury');
Route::get('tours-de-un-dia', [EnlacesCategorias::class, 'fullday'])->name('fullday');

Route::get('lodge-pacha-mama-spirit', [EnlacesCategorias::class, 'lodge'])->name('lodges');
Route::get('nosotros', [EnlacesCategorias::class, 'nosotros'])->name('nosotros');
Route::get('terminos-y-condiciones', [EnlacesCategorias::class, 'terminos'])->name('terminos');
Route::get('preguntas-frecuentes', [EnlacesCategorias::class, 'preguntas'])->name('preguntas');
//Blog español
Route::get('peru-blog', function () {
    return view('peru-blog');
})->name('peru-blog');
Route::get('blog/es/santa-rosa-de-lima', function () {
    return view('blog/es/santa-rosa-de-lima');
})->name('santa-rosa-de-lima-es');
Route::get('blog/es/fiestas-patrias-peru', function () {
    return view('blog/es/fiestas-patrias-peru');
})->name('fiestas-patrias-peru');
Route::get('blog/es/las-mejores-playas-de-peru', function () {
    return view('blog/es/las-mejores-playas-de-peru');
})->name('las-mejores-playas-peru');
Route::get('blog/mistura', function () {
    return view('blog/es/mistura');
})->name('mistura-es');
Route::get('blog/semana-santa-cusco', function () {
    return view('blog/es/semana-santa-cusco');
})->name('semanasanta');
Route::get('blog/actividades-turiticas-en-cusco', function () {
    return view('blog/es/actividades-turisticas-cusco');
})->name('actividadescusco');


//Blog Ingles:
Route::get('blog-peru', function () {
    return view('blog-peru');
})->name('blog-peru');
Route::get('blog/en/santa-rosa-de-lima', function () {
    return view('blog/en/santa-rosa-de-lima');
})->name('santa-rosa-de-lima-en');
Route::get('blog/en/national-holidays-in-peru', function () {
    return view('blog/en/national-holidays-in-peru');
})->name('national-holidays-peru');
Route::get('blog/en/the-best-beaches-in-peru', function () {
    return view('blog/en/the-best-beaches-in-peru');
})->name('the-best-beaches-peru');
Route::get('blog/en/mistura', function () {
    return view('blog/en/mistura');
})->name('mistura-en');
Route::get('blog/holy-week', function () { return view('blog/en/Holy-week');})->name('holy-week');
Route::get('blog/touristic-activities-cusco', function () { return view('blog/en/touristic-activities-cusco');})->name('activities-cusco');

//Destinies
Route::get('en/destinies-peru', function () {
    return view('en/destinies-peru');
})->name('destinies-peru');
Route::get('en/destinies-peru/cusco-navel-of-the-world', function () {
    return view('en/destinies-peru/cusco-navel-of-the-world');
})->name('cusco-navel-of-the-world');
Route::get('en/destinies-peru/lima-city-of-kings', function () {
    return view('en/destinies-peru/lima-city-of-kings');
})->name('lima-city-of-kings');
Route::get('en/destinies-peru/arequipa-the-white-city', function () {
    return view('en/destinies-peru/arequipa-the-white-city');
})->name('arequipa-the-white-city');
Route::get('en/destinies-peru/puno-city', function () {
    return view('en/destinies-peru/puno-city');
})->name('puno-city');
Route::get('en/destinies-peru/ica-city', function () {
    return view('en/destinies-peru/ica-city');
})->name('ica-city');
Route::get('en/destinies-peru/pisco-city', function () {
    return view('en/destinies-peru/pisco-city');
})->name('pisco-city');
Route::get('en/destinies-peru/puerto-maldonado', function () {
    return view('en/destinies-peru/puerto-maldonado');
})->name('puerto-maldonado-en');
//Usuarios
Route::resource('users', UserControler::class)->middleware('auth');
Route::get('registrarPacha', [UserControler::class, 'create'])->middleware('auth')->name('registrar');
Route::post('upload_image', [ArticleController::class, 'uploadImage'])->name('upload');
Auth::routes();
Route::get('/djm2', [HomeController::class, 'index']);
//Crud de imagenes
Route::resource('imagenes', ImagenesController::class)->middleware('auth');
//Categorias ingles
Route::get('machu-picchu-en', [EnlacesCategorias::class, 'mapien'])->name('mapien');
Route::get('hikes', [EnlacesCategorias::class, 'hikes'])->name('hikes');
Route::get('around-peru', [EnlacesCategorias::class, 'around'])->name('around');
Route::get('private', [EnlacesCategorias::class, 'private'])->name('private');
Route::get('full-day-tours', [EnlacesCategorias::class, 'fulldayen'])->name('fulldayen');
Route::get('lodge-pacha-mama-spirit-en', [EnlacesCategorias::class, 'lodgen'])->name('lodgen');
//Administrador de tour español
Route::resource('tours', TourController::class)->middleware('auth');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('tour/{slug}/', [TourController::class, 'show'])->name('tours.show');
/* Route::get('/{slug}/', [TourController::class, 'show'])->name('tours.show'); */

//Administrador de tour Ingles
Route::resource('toursen', ToursenController::class)->middleware('auth');
/* Route::get('/toursen/{id}/{slug}/', [ToursenController::class, 'show'])->name('toursen.show'); */
Route::get('/{slug}/', [ToursenController::class, 'show'])->name('toursen.show');
Route::get('searchen', [SearchenController::class, 'search'])->name('searchen');


//mensajes
Route::post('mensajePacha', [MailController::class, 'getMail'])->name('mensajePacha');
Route::post('mensajePachaEn', [MailController::class, 'getMailEn'])->name('mensajePachaEn');

//Paginas estaticas español:
Route::get('arma-tu-viaje', function () {
    return view('arma-tu-viaje');
})->name('armar-viaje');
Route::get('peru-blog', function () {
    return view('peru-blog');
})->name('peru-blog');
//Destinos
Route::get('es/destinos-peru', function () {
    return view('es/destinos-peru');
})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {
    return view('es/destinos-en-peru/cusco-ombligo-del-mundo');
})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {
    return view('es/destinos-en-peru/lima-ciudad-de-reyes');
})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {
    return view('es/destinos-en-peru/arequipa-la-ciudad-blanca');
})->name('arequipa-la-ciudad-blanca');
Route::get('es/destinos-en-peru/la-ciudad-de-puno', function () {
    return view('es/destinos-en-peru/la-ciudad-de-puno');
})->name('la-ciudad-de-puno');
Route::get('es/destinos-en-peru/ciudad-de-ica', function () {
    return view('es/destinos-en-peru/ciudad-de-ica');
})->name('ciudad-de-ica');
Route::get('es/destinos-en-peru/ciudad-de-pisco', function () {
    return view('es/destinos-en-peru/ciudad-de-pisco');
})->name('ciudad-de-pisco');
Route::get('es/destinos-en-peru/puerto-maldonado', function () {
    return view('es/destinos-en-peru/puerto-maldonado');
})->name('puerto-maldonado');
