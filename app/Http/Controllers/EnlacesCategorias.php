<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;

use Illuminate\Http\Request;

class EnlacesCategorias extends Controller
{
    public function machuPicchu(){
        $tours=Tour::all();
        return view('es.machu-picchu', compact('tours'));
    }
    public function caminata(){
        $tours=Tour::all();
        return view('es.caminatas', compact('tours'));
    }
    public function peru(){
        $tours=Tour::all();
        return view('es.peru', compact('tours'));
    }
    public function luxury(){
        $tours=Tour::all();
        return view('es.privados', compact('tours'));
    }
    public function fullday(){
        $tours=Tour::all();
        return view('es.tours-de-un-dia', compact('tours'));
    }
    public function lodge(){
        $tours=Tour::all();
        return view('es.lodge-pacha-mama-spirit', compact('tours'));
    }
    

    //Categorias ingles
    public function mapien(){
        $tours=Toursen::all();
        return view('en.machu-picchu', compact('tours'));
    }
    public function hikes(){
        $tours=Toursen::all();
        return view('en.hikes', compact('tours'));
    }
    public function around(){
        $tours=Toursen::all();
        return view('en.around-peru', compact('tours'));
    }
    public function private(){
        $tours=Toursen::all();
        return view('en.private-and-exclusive-tours', compact('tours'));
    }
    public function fulldayen(){
        $tours=Toursen::all();
        return view('en.full-day-tours', compact('tours'));
    }
}