@extends('layouts.admin')
@section('titulo', 'Crud de imágenes')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h2 class="float-left">Lista de imagenes:</h2>
            <a href="{{ route('imagenes.create') }}" class="btn btn-primary float-right">Subir nueva imagen</a>
        </div>
        <div class="col-lg-12 mt-4">
            @if (session('status'))
                <div class="text-success">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{-- <div class="row">
        @foreach ($imagenes as $imagen)
            <div class="col-lg-3">
                <div class="card" style="width: 18rem; height:auto">
                    <img class="card-img-top" width="100%" height="auto" src="../img/galeria/{{ $imagen->img }}">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.<br>
                        </p>
                        <p id="imagen">
                            https://pachamamaspirit.com/img/galeria/{{ $imagen->img }}
                        </p>


                        <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/imagenes/{{ $imagen->id }}/edit" class="btn btn-info btn-sm" title="Editar">
                                <i class="fa fa-edit"></i> </a>
                            <a href="{{ route('imagenes.show', $imagen->id) }}" class="btn btn-success btn-sm"
                                title="Ver tour">
                                <i class="fa fa-eye"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i
                                    class="fas fa-trash"></i></button>
                        </form>
                        <button id="boton" class="btn btn-primary btn-sm mt-4">
                            <i class="fa fa-clipboard"></i> Copiar URL
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id:</th>
                        <th>Imagen: </th>
                        <th>URL:</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imagenes as $imagen)
                        <tr>
                            <td>{{ $imagen->id }}</td>
                            <td> <img width="200px" height="auto" src="../img/galeria/{{ $imagen->img }}">
                            </td>
                            <td onclick="copiar(this)">https://pachamamaspirit.com/img/galeria/{{ $imagen->img }} 
                                
                            </td>
                            <td>
                                <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/imagenes/{{ $imagen->id }}/edit" class="btn btn-info btn-sm" title="Editar">
                                        <i class="fa fa-edit"></i> </a>
                                    <a href="https://pachamamaspirit.com/img/galeria/{{ $imagen->img }}" target="_blank" class="btn btn-success btn-sm"
                                        title="Ver imagen">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function copiar(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).html()).select();
            document.execCommand("copy");
            $temp.remove();
            alert('URL copiada');
        }
    </script>
@endsection
