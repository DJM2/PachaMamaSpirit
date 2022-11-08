@extends('layouts.plantilla-tours');

@section('template_title')
    {{ $toursen->name ?? 'Show Toursen' }}
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Toursen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('toursen.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $toursen->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $toursen->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $toursen->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            <img src="../../img/buscador/{{$toursen->img}}" width="220px">
                        </div>
                        <div class="form-group">
                            <strong>Dias:</strong>
                            {{ $toursen->dias }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $toursen->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $toursen->ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
