@extends('layouts.appen')
@section('titulo', 'Muestra Ingles')

@section('content')
    @include('layouts.logeado')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 mt-5">
            <div class="row">
                <div class="col-7 float-left">
                    <h2>Lista de tours en ingles:</h2>
                </div>
                <div class="col-5">
                    <a href="toursen/create" class="btn btn-primary float-end mr-2">Nuevo Tour</a>
                    <a href="tours" class="btn btn-info float-end mr-2">Tours en Español</a>
                    <a href="{{ route('index') }}" class="btn btn-success float-end mr-2">Volver a inicio</a>
                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                    <div class="text-success">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
                </div>
            </div>
            <table class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Días</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Slug</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->nombre }}</td>
                            <td>{{ $tour->descripcion }}</td>
                            <td><img src="img/buscador/{{ $tour->img }}" width="120px"></td>
                            <td>{{ $tour->precio }}</td>
                            <td>{{ $tour->dias }}</td>
                            <td>{{ $tour->categoria }}</td>
                            <td>{{ $tour->ubicacion }}</td>
                            <td>{{ $tour->slug }}</td>
                            <td style="width: 125px">
                                <form action="{{ route('toursen.destroy', $tour->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/toursen/{{ $tour->id }}/edit" class="btn btn-info btn-sm" title="Editar">
                                        <i class="icon-edit"></i> </a>
                                    <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="btn btn-success btn-sm" title="Ver tour"><i class="icon-eye"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"
                                        onclick="alerta();"><i class="icon-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            function alerta() {
                alert('Desea aliminar?');
            }
        </script>
        <div class="col-1"></div>
    </div>
@endsection
