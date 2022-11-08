@extends('layouts.plantilla-tours');
@section('contenido')
    <div class="row text-white bg-secondary" style="padding: 1em; border-radius: 10px;">
        <div class="col-lg-6 float-left">
            <h2>Crear Nuevo Tour en español</h2>
        </div>
        <div class="col-lg-6 float-right">
            <a href="/toursen/create" class="btn btn-primary">Crear tour en Ingles</a>
        </div>
    </div><br><br>
    <form action="/tours" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="id" class="form-label">ID:</label>
                <input type="text" id="id" name="id" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="col-lg-12">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control">
            </div>
            <div class="col-lg-12">
                <label for="img" class="form-label">Imagen:</label>
                <input type="file" id="img" name="img" class="form-control" accept="image/*">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Precio:</label>
                <input type="text" id="precio" name="precio" class="form-control">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Días:</label>
                <input type="text" id="dias" name="dias" class="form-control">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Categoría:</label>
                <input type="text" id="categoria" name="categoria" class="form-control">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion" class="form-control">
            </div>
        </div>
        <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
        <button class="btn btn-primary mt-4" type="submit">Guardar</button>
    </form>
@endsection
