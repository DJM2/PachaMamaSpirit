@extends('pikol.cuerpo')
@section('titulo', 'Carta digital Pikol')
@section('contenido')
<div class="container" style="height: 80vh;">
    <div class="row text-center mt-5 mb-5">
        <div class="col-6">
            <a href="{{route('pikol-local')}}" class="boton-local"><i class="fa fa-home"></i> En local</a>
        </div>
        <div class="col-6">
            <a href="{{route('pikol-delivery')}}" class="boton-wasa"><i class="fab fa-whatsapp"></i> Delivery</a>
        </div>
    </div>
</div>
@endsection