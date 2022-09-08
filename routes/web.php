<?php

use Illuminate\Support\Facades\Route;


/*Español*/
Route::get('inicio', function () {return view('inicio');})->name('inicio');
Route::get('arma-tu-viaje', function () {return view('arma-tu-viaje');})->name('armar-viaje');
//Destinos
Route::get('es/destinos-peru', function () {return view('es/destinos-peru');})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {return view('es/destinos-en-peru/cusco-ombligo-del-mundo');})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {return view('es/destinos-en-peru/lima-ciudad-de-reyes');})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {return view('es/destinos-en-peru/arequipa-la-ciudad-blanca');})->name('arequipa-la-ciudad-blanca');
Route::get('es/destinos-en-peru/la-ciudad-de-puno', function () {return view('es/destinos-en-peru/la-ciudad-de-puno');})->name('la-ciudad-de-puno');
Route::get('es/destinos-en-peru/ciudad-de-ica', function () {return view('es/destinos-en-peru/ciudad-de-ica');})->name('ciudad-de-ica');
Route::get('es/destinos-en-peru/ciudad-de-pisco', function () {return view('es/destinos-en-peru/ciudad-de-pisco');})->name('ciudad-de-pisco');
Route::get('es/destinos-en-peru/puerto-maldonado', function () {return view('es/destinos-en-peru/puerto-maldonado');})->name('puerto-maldonado');

/*English*/
Route::get('/', function () {return view('index');})->name('index');
//Destinies
Route::get('en/destinies-peru', function () {return view('en/destinies-peru');})->name('destinies-peru');
Route::get('en/destinies-peru/cusco-navel-of-the-world', function () {return view('en/destinies-peru/cusco-navel-of-the-world');})->name('cusco-navel-of-the-world');
Route::get('en/destinies-peru/lima-city-of-kings', function () {return view('en/destinies-peru/lima-city-of-kings');})->name('lima-city-of-kings');
Route::get('en/destinies-peru/arequipa-the-white-city', function () {return view('en/destinies-peru/arequipa-the-white-city');})->name('arequipa-the-white-city');
Route::get('en/destinies-peru/puno-city', function () {return view('en/destinies-peru/puno-city');})->name('puno-city');
Route::get('en/destinies-peru/ica-city', function () {return view('en/destinies-peru/ica-city');})->name('ica-city');
Route::get('en/destinies-peru/pisco-city', function () {return view('en/destinies-peru/pisco-city');})->name('pisco-city');
Route::get('en/destinies-peru/puerto-maldonado', function () {return view('en/destinies-peru/puerto-maldonado');})->name('puerto-maldonado-en');


