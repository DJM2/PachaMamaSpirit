<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name=$request->all();
        $nombre = $name['name'];
        $respuesta = Tour::where('nombre', 'LIKE',  "%$nombre%")->get();
        if(count($respuesta) != 0){
            $respuestas = [
                'respuestas' => $respuesta,
            ];
    
            return view('es.search', $respuestas);
        }
        else{
            return view('es.noresults');
        }
    }
}
