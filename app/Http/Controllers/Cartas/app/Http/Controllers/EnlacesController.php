<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnlacesController extends Controller
{

    //Crear una funcion para cada enlace que retorne una vista llamada carrito
    public function carrito()
    {
        return view('carrito');
    }
    public function prueba()
    {
        return view('prueba.local');
    }

    //Carta Pikol
    public function index()
    {
        return view('pikol.index');
    }
    public function local()
    {
        return view('pikol.local');
    }
    public function delivery()
    {
        return view('pikol.delivery');
    }

    //Carta Waka Runtu
    public function index_waka()
    {
        return view('waka.index');
    }
    public function waka_local()
    {
        return view('waka.local');
    }
    public function waka_delivery()
    {
        return view('waka.delivery');
    }

    //Carta Waka Runtu
    public function index_ricos()
    {
        return view('ricospan.index');
    }
    public function local_ricos()
    {
        return view('ricospan.local');
    }
    public function delivery_ricos()
    {
        return view('ricospan.delivery');
    }
    //Carta Rincón Trujillano
    public function index_truji()
    {
        return view('trujillano.index');
    }
    public function local_truji()
    {
        return view('trujillano.local');
    }
    public function delivery_truji()
    {
        return view('trujillano.delivery');
    }
}
