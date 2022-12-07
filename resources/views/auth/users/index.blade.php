@extends('layouts.app')
@section('titulo', 'Muestrs')

@section('content')
    @include('layouts.logeado')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h1>Usuarios registrados:</h1>
            <a href="register" class="btn btn-primary">Nuevo Usuario</a>
            <a href="{{ route('index') }}" class="btn btn-success">Volver a inicio</a>
            <table class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                             <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
@endsection
