@extends('layouts.plantilla-tours');
@section('contenido')
<h1>Crear Nuevo Tour</h1>
<form action="/tours" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" id="id" name="id" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Imagen:</label>
        <input type="file" id="img" name="img" class="form-control" accept="image/*">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Días</label>
        <input type="text" id="dias" name="dias" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoría</label>
        <input type="text" id="categoria" name="categoria" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ubicación</label>
        <input type="text" id="ubicacion" name="ubicacion" class="form-control">
    </div>
    <a href="/tours" class="btn btn-secondary">Cancelar</a>
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
@endsection