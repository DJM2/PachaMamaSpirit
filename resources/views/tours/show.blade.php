@extends('layouts.app')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@section('content')
    @include('layouts.menu-castellano')
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=629958a2703b77001ade9c8c&product=sop'
        async='async'></script>
    <div class="blog" id="blog">
        <!----Variable de clase------>
        <div id="sarah" style="opacity: 0">
            
            {{ $tour->clase }}
            <script>                
                var $nombre = document.getElementById('sarah').innerText;
                var $insertar = document.getElementById("blog");
                $insertar.classList.remove("blog");
                $insertar.classList.add($nombre);
            </script>      
        </div>
        <!----Fin Variable de clase------>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">{{ $tour->nombre }}</h1>
                    <div class="col-lg-12 text-center font-weight-bold" style="color: #fff">
                        <span><i class="icon-map-marker"></i> {{ $tour->ubicacion }}</span>&nbsp;&nbsp;
                        <span><i class="icon-clock-o"></i> {{ $tour->dias }} días</span>&nbsp;&nbsp;
                        <span><i class="icon-usd"></i> {{ $tour->precio }}.00</span>&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="text-success text-center">
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a>{{ $tour->ubicacion }}</a>
                                / <a>{{ $tour->nombre }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">{!! $tour->contenido !!}</p>
                    <br>
                    <div>
                        <ul class="nav nav-tabs justify-content-center nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Resumen</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Programa
                                    detallado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Incluye</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="importante-tab" data-bs-toggle="tab"
                                    data-bs-target="#importante" type="button" role="tab" aria-controls="importante"
                                    aria-selected="false">Importante</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {!! $tour->resumen !!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                {!! $tour->detallado !!}
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                {!! $tour->incluidos !!}
                            </div>
                            <div class="tab-pane fade" id="importante" role="tabpanel" aria-labelledby="importante-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                    <div class="share">
                        <h3>Compartir</h3>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div-form-tours">
                        <h3 class="text-center">Book now!</h3>
                        <form class="djmFormShow" action="{{ route('mensajePacha') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Inca Pachacutec" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="hijo-del-sol@gmail.com" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adults:</label>
                                    <input type="number" class="form-control" name="adultos" id="inputAddress"
                                        placeholder="Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2" title="Children under 3 years old do not pay">Childs:
                                        ⓘ</label>
                                    <input type="number" name="childs" class="form-control" id="inputAddress2"
                                        placeholder="Number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Fecha de viaje Peru:</label>
                                    <input type="date" name="date" class="form-control" id="date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Phone number: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control" id="tour"
                                        value="{{ $tour->nombre }}" name="tour" readonly>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje">
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Enviar</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod">
                                <h4 class="text-center">Soporte al Cliente:</h4>
                                <p class="text-center"><i class="icon-whatsapp">
                                    </i> +51 921 136 755<br>
                                    </i> info@pachamamaspirit.com
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours populares</h2>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>

@endsection
