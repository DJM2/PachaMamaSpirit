<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::paginate(10);
        return view('tours.index')->with('tours', $tours);
    }
    public function mostrar()
    {
        $tours = tour::all();
        return view('inicio')->with('tours', $tours);
    }
    public function users()
    {
        $users = User::all();
        return view('auth.users.index')->with('users', $users);
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
        $tours = new tour();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');
        $tours->descripcion = $request->get('descripcion');
        $tours->contenido = $request->get('contenido');
        $tours->incluidos = $request->get('incluidos');
        $tours->noincluidos = $request->get('noincluidos');
        $tours->importante = $request->get('importante');
        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->ubicacion = $request->get('ubicacion');

        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = /* time() . "." .  */$img->getClientOriginalExtension();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "$imgTour";


        /* $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = time() . "." . $img->getClientOriginalExtension();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "$imgTour"; */

        $cat = $request->get('categoria');
        $tours->categoria= implode(',', $cat);
        $tours->keywords = $request->get('keywords');
        $tours->slug = $request->get('slug');
        $tours->clase = $request->get('clase');

        $tours->save();
        session()->flash('status', 'Tour creado exitosamente!');
        return redirect('tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $tour = Tour::find($id);
        return view('tours.show')->with('tour', $tour);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tour  $tour
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
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);

        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        $tour->contenido = $request->get('contenido');
        $tour->incluidos = $request->get('incluidos');
        $tour->noincluidos = $request->get('noincluidos');
        $tour->importante = $request->get('importante');
        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $cat = $request->get('categoria');
        $tour->categoria= implode(',', $cat);          
        $tour->ubicacion = $request->get('ubicacion');
        $tour->keywords = $request->get('keywords');

        if ($img = $request->file('img')) {
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $tour['img'] = "$imgTour";
        } else {
            unset($tour['img']);
        }

        $tour->save();
        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('/tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('/tours');
    }
}
