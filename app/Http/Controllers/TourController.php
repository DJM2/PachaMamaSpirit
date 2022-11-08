<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Str;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index')->with('tours', $tours);
    }
    public function mostrar()
    {
        $tours = Tour::all();
        return view('inicio')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tours = new Tour();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');

        $tours->descripcion = $request->get('descripcion');
        
        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = time() . "." . $img->getClientOriginalExtension();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "$imgTour";


        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->categoria = $request->get('categoria');
        $tours->ubicacion = $request->get('ubicacion');

        $tours->save();
        return redirect('/tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('tours.edit')->with('tour', $tour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);

        $tour->id = $request->get('id');
        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $tour->categoria = $request->get('categoria');
        $tour->ubicacion = $request->get('ubicacion');

        $tour->save();
        return redirect('/tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        return redirect('/tours');
    }
}
