@extends('layouts.plantilla-tours');
@section('contenido')
    <h1>Editar Tour</h1>
    <form action="/toursen/{{ $toursen->id }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-row">
            <div class="col-md-6">
                <label for="">ID</label>
                <input type="text" id="id" name="id" class="form-control" value="{{ $toursen->id }}">
            </div>
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $toursen->nombre }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control"
                    value="{{ $toursen->descripcion }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input type="text" id="precio" name="precio" class="form-control" value="{{ $toursen->precio }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Días</label>
                <input type="text" id="dias" name="dias" class="form-control" value="{{ $toursen->dias }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoría</label>
                <input type="text" id="categoria" name="categoria" class="form-control"
                    value="{{ $toursen->categoria }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" class="form-control"
                    value="{{ $toursen->ubicacion }}">
            </div>
        </div>
        <a href="/toursen" class="btn btn-secondary">Cancelar</a>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection
