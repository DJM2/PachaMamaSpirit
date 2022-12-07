@extends('layouts.app')

@section('content')
    @include('layouts.logeado')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <a href="{{url('toursen')}}">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/english-tours.jpg') }}" alt="Camino Inca 4 dias"
                            loading="lazy">
                        <div class="card-body text-center">

                            <a href="{{ asset('img/english-tours.jpg') }}" class="boton-card">Tours en Inglés</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{url('tours')}}">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/tours-caastellano.jpg') }}" alt="Camino Inca 4 dias"
                            loading="lazy">
                        <div class="card-body text-center">

                            <a href="{{ asset('img/tours-caastellano.jpg') }}" class="boton-card">Tours en Español</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('users') }}">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/usuarios-Pacha-Mama.jpg') }}" alt="Camino Inca 4 dias"
                            loading="lazy">
                        <div class="card-body text-center">
                            <a href="{{ url('users') }}" class="boton-card">Ver usuarios</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
