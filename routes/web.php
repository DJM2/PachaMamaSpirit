<?php

use Illuminate\Support\Facades\Route;


/*Español*/
Route::get('inicio', function () {return view('inicio');})->name('inicio');
Route::get('arma-tu-viaje', function () {return view('arma-tu-viaje');})->name('armar-viaje');
Route::get('peru-blog', function () {return view('peru-blog');})->name('peru-blog');
//Destinos
Route::get('es/destinos-peru', function () {return view('es/destinos-peru');})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {return view('es/destinos-en-peru/cusco-ombligo-del-mundo');})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {return view('es/destinos-en-peru/lima-ciudad-de-reyes');})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {return view('es/destinos-en-peru/arequipa-la-ciudad-blanca');})->name('arequipa-la-ciudad-blanca');
Route::get('es/destinos-en-peru/la-ciudad-de-puno', function () {return view('es/destinos-en-peru/la-ciudad-de-puno');})->name('la-ciudad-de-puno');
Route::get('es/destinos-en-peru/ciudad-de-ica', function () {return view('es/destinos-en-peru/ciudad-de-ica');})->name('ciudad-de-ica');
Route::get('es/destinos-en-peru/ciudad-de-pisco', function () {return view('es/destinos-en-peru/ciudad-de-pisco');})->name('ciudad-de-pisco');
Route::get('es/destinos-en-peru/puerto-maldonado', function () {return view('es/destinos-en-peru/puerto-maldonado');})->name('puerto-maldonado');
 //Blog español
 Route::get('peru-blog', function () {return view('peru-blog');})->name('peru-blog');
 Route::get('blog/es/santa-rosa-de-lima', function () {return view('blog/es/santa-rosa-de-lima');})->name('santa-rosa-de-lima-es');
 Route::get('blog/es/fiestas-patrias-peru', function () {return view('blog/es/fiestas-patrias-peru');})->name('fiestas-patrias-peru');
 Route::get('blog/es/las-mejores-playas-de-peru', function () {return view('blog/es/las-mejores-playas-de-peru');})->name('las-mejores-playas-peru');
 Route::get('blog/es/mistura', function () {return view('blog/es/mistura');})->name('mistura-es');

/*English*/
Route::get('/', function () {return view('index');})->name('index');
/*Blog English*/
Route::get('blog-peru', function () {return view('blog-peru');})->name('blog-peru');
Route::get('blog/en/santa-rosa-de-lima', function () {return view('blog/en/santa-rosa-de-lima');})->name('santa-rosa-de-lima-en');
Route::get('blog/en/national-holidays-in-peru', function () {return view('blog/en/national-holidays-in-peru');})->name('national-holidays-peru');
Route::get('blog/en/the-best-beaches-in-peru', function () {return view('blog/en/the-best-beaches-in-peru');})->name('the-best-beaches-peru');
Route::get('blog/en/mistura', function () {return view('blog/en/mistura');})->name('mistura-en');
//Destinies
Route::get('en/destinies-peru', function () {return view('en/destinies-peru');})->name('destinies-peru');
Route::get('en/destinies-peru/cusco-navel-of-the-world', function () {return view('en/destinies-peru/cusco-navel-of-the-world');})->name('cusco-navel-of-the-world');
Route::get('en/destinies-peru/lima-city-of-kings', function () {return view('en/destinies-peru/lima-city-of-kings');})->name('lima-city-of-kings');
Route::get('en/destinies-peru/arequipa-the-white-city', function () {return view('en/destinies-peru/arequipa-the-white-city');})->name('arequipa-the-white-city');
Route::get('en/destinies-peru/puno-city', function () {return view('en/destinies-peru/puno-city');})->name('puno-city');
Route::get('en/destinies-peru/ica-city', function () {return view('en/destinies-peru/ica-city');})->name('ica-city');
Route::get('en/destinies-peru/pisco-city', function () {return view('en/destinies-peru/pisco-city');})->name('pisco-city');
Route::get('en/destinies-peru/puerto-maldonado', function () {return view('en/destinies-peru/puerto-maldonado');})->name('puerto-maldonado-en');


