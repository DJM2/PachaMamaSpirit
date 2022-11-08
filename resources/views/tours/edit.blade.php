@extends('layouts.plantilla-tours');
@section('contenido')
<h1>Editar Tour</h1>
<form action="/tours/{{$tour->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input type="text" id="id" name="id" class="form-control" value="{{$tour->id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$tour->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$tour->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" class="form-control" value="{{$tour->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Días</label>
        <input type="text" id="dias" name="dias" class="form-control" value="{{$tour->dias}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoría</label>
        <input type="text" id="categoria" name="categoria" class="form-control" value="{{$tour->categoria}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ubicación</label>
        <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="{{$tour->ubicacion}}">
    </div>
    <a href="/tours" class="btn btn-secondary">Cancelar</a>
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
@endsection