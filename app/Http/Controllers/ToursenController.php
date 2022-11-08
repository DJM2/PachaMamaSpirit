<?php

namespace App\Http\Controllers;

use App\Models\Toursen;
use Illuminate\Http\Request;

/**
 * Class ToursenController
 * @package App\Http\Controllers
 */
class ToursenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toursens = Toursen::paginate();

        return view('toursen.index', compact('toursens'))
            ->with('i', (request()->input('page', 1) - 1) * $toursens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toursen = new Toursen();
        return view('toursen.create', compact('toursen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $toursen = new Toursen();

        $toursen->id = $request->get('id');
        $toursen->nombre = $request->get('nombre');

        $toursen->descripcion = $request->get('descripcion');
        
        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = time() . "." . $img->getClientOriginalExtension();
        $img->move($rutaImg, $imgTour);
        $toursen['img'] = "$imgTour";


        $toursen->precio = $request->get('precio');
        $toursen->dias = $request->get('dias');
        $toursen->categoria = $request->get('categoria');
        $toursen->ubicacion = $request->get('ubicacion');

        $toursen->save();
        return redirect('/toursen') ->with('success', 'Toursen created successfully.');
       /*  request()->validate(Toursen::$rules);

        $toursen = Toursen::create($request->all());

        return redirect()->route('toursen.index')
            ->with('success', 'Toursen created successfully.'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $toursen = Toursen::find($id);

        return view('toursen.show', compact('toursen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toursen = Toursen::find($id);

        return view('toursen.edit')->with('toursen', $toursen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Toursen $toursen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $toursen = Toursen::find($id);

        $toursen->id = $request->get('id');
        $toursen->nombre = $request->get('nombre');
        $toursen->descripcion = $request->get('descripcion');
        $toursen->precio = $request->get('precio');
        $toursen->dias = $request->get('dias');
        $toursen->categoria = $request->get('categoria');
        $toursen->ubicacion = $request->get('ubicacion');

        $toursen->save();
        return redirect('/toursen') ->with('success', 'Toursen created successfully.');
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $toursen = Toursen::find($id)->delete();

        return redirect()->route('toursen.index')
            ->with('success', 'Toursen deleted successfully');
    }
}
