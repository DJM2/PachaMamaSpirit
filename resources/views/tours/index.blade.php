@extends('layouts.plantilla-tours');
@section('contenido')
    <h1>Tours:</h1>
    <a href="tours/create" class="btn btn-primary">Nuevo Tour</a>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Precio</th>
                <th scope="col">Días</th>
                <th scope="col">Categoría</th>
                <th scope="col">Ubicación</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>{{ $tour->nombre }}</td>
                    <td>{{ $tour->descripcion }}</td> 
                    <td><img src="img/buscador/{{$tour->img}}" width="120px"></td>                    
                    <td>{{ $tour->precio }}</td>
                    <td>{{ $tour->dias }}</td>
                    <td>{{ $tour->categoria }}</td>
                    <td>{{ $tour->ubicacion }}</td>
                    <td>
                        <form action="{{route('tours.destroy',$tour->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/tours/{{ $tour->id }}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
