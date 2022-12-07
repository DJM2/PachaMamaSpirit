@extends('layouts.app')
@section('content')
    @include('layouts.menu-castellano')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 18%;color:#fff">Resultados de su búsqueda</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($respuestas as $respuesta)
                <div class="col-lg-4 pt-5">
                    <div class="card" style="width: 18rem; margin:auto">
                        <img class="card-img-top" src="img/buscador/{{ $respuesta->img }}" alt="Camino Inca 4 dias"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">{{ $respuesta->nombre }}</h5>
                            <p class="card-text">{{ $respuesta->descripcion }}</p>
                            <div class="text-center">
                                <a href="{{ route('tours.show', ['slug' => $respuesta->slug, 'id' => $respuesta->id]) }}"
                                    class="boton-card">Más info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
