@extends('trujillano.cuerpo')
@section('titulo','Rincón Trujillano - Carta Digital')
@section('contenido')

<div class="container" style="height: 36vh;">
    <div class="row text-center" style="margin-top: 30vh">
        <div class="col-6">
            <a href="{{route('trujillano-local')}}" class="boton-local"><i class="fa fa-home"></i> En local</a>
        </div>
        <div class="col-6">
            <a href="{{route('trujillano-delivery')}}" class="boton-wasa"><i class="fab fa-whatsapp"></i> Delivery</a>
        </div>
    </div>
</div>
@endsection