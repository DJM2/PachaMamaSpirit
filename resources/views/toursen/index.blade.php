@extends('layouts.plantilla-tours');

@section('contenido')
<h2 class="text-center">Tours en Ingles</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Toursen') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('toursen.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Img</th>
										<th>Dias</th>
										<th>Categoria</th>
										<th>Ubicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($toursens as $toursen)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $toursen->nombre }}</td>
											<td>{{ $toursen->descripcion }}</td>
											<td>{{ $toursen->precio }}</td>
											<td><img src="img/buscador/{{$toursen->img}}" width="120px"></td> 
											<td>{{ $toursen->dias }}</td>
											<td>{{ $toursen->categoria }}</td>
											<td>{{ $toursen->ubicacion }}</td>

                                            <td>
                                                <form action="{{ route('toursen.destroy',$toursen->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('toursen.show',$toursen->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('toursen.edit',$toursen->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $toursens->links() !!}
            </div>
        </div>
    </div>
@endsection
