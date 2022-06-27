<?php

use Illuminate\Support\Facades\Route;


/*Español*/
Route::get('inicio', function () {return view('inicio');})->name('inicio');

/*-->Destinos Turísticos<--*/
Route::get('es/destinos-peru', function () {return view('es/destinos-peru');})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {return view('es/destinos-en-peru/cusco-ombligo-del-mundo');})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {return view('es/destinos-en-peru/lima-ciudad-de-reyes');})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {return view('es/destinos-en-peru/arequipa-la-ciudad-blanca');})->name('arequipa-la-ciudad-blanca');

/*English*/
Route::get('/', function () {return view('index');})->name('index');
Route::get('en/destinies-peru', function () {return view('en/destinies-peru');})->name('destinies-peru');
Route::get('en/destinies-peru/cusco-navel-of-the-world', function () {return view('en/destinies-peru/cusco-navel-of-the-world');})->name('cusco-navel-of-the-world');
Route::get('en/destinies-peru/lima-city-of-kings', function () {return view('en/destinies-peru/lima-city-of-kings');})->name('lima-city-of-kings');
Route::get('en/destinies-peru/arequipa-the-white-city', function () {return view('en/destinies-peru/arequipa-the-white-city');})->name('arequipa-the-white-city');


