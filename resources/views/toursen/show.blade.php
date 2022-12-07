@extends('layouts.app')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@section('content')
    @include('layouts.menu')
    <div class="blog" id="blog">
        <!----Variable de clase------>
        <div id="sarah" style="opacity: 0">
            {{ $tour->clase }}
        </div>
        <!----Fin Variable de clase------>
        <script>
            var $nombre = document.getElementById('sarah').innerText;
            var $insertar = document.getElementById("blog");
            $insertar.classList.remove("blog");
            $insertar.classList.add($nombre);
        </script>
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
                <div class="col-lg-8">
                    <p class="text-justify">{!! $tour->contenido !!}</p>
                    <br>
                    <div>
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Incluye</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">No
                                    incluye</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Recomendaciones</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {!! $tour->incluidos !!}</div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                {!! $tour->noincluidos !!}
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div-form-tours">
                        <h3 class="text-center">Book now!</h3>
                        <form class="djmFormShow">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Nombre:</label>
                                    <input type="email" class="form-control" id="nombre" name="nombre"
                                        placeholder="Inca Pachacutec">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="hijo-del-sol@gmail.com">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adults:</label>
                                    <input type="number" class="form-control" id="inputAddress" placeholder="Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2" title="Children under 3 years old do not pay">Childs:
                                        ⓘ</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Date arrival in Peru:</label>
                                    <input type="date" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Phone number: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control" id="tour"
                                        value="{{ $tour->nombre }}" readonly>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Submit</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod">
                                <h4 class="text-center">Soporte al Cliente:</h4>
                                <p class="text-center"><i class="icon-whatsapp"></i> +51 921 136 755</p>
                                <p class="text-center"><i class="icon-envelope"></i> info@pachamamaspirit.com</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/camino-inca-cantera-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/machu-picchu-travel-tour.webp') }}"
                                alt="Camino Inca 4 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Camino Inca Clásico</h5>
                            <p class="text-card">El Camino Inca de 4 días a Machu Picchu es la caminata más popular
                                de la ruta turistica de Perú</p>
                            <div class="row iconos-tours">
                                <div class="col-6" style="float: left">
                                    <span class="icon-clock-o"> 4 días</span>
                                </div>
                                <div class="col-6" style="float:right">
                                    <span class="icon-map-marker"> Cusco</span>
                                </div>
                            </div>
                            <a href="destinos/camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="">
                            <img class="card-img-top" src="{{ asset('img/thumb/caminata-a-choquequirao.webp') }}"
                                alt="Camino Inca 2 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Choquequirao</h5>
                            <p class="text-card">Esta ruta es conocida por sus increibes vistas, ardua caminata y el
                                centro arqueologico que hace que todo valga la pena </p>
                            <div class="row iconos-tours">
                                <div class="col-6" style="float: left">
                                    <span class="icon-clock-o"> 4 días</span>
                                </div>
                                <div class="col-6" style="float:right">
                                    <span class="icon-map-marker"> Cusco</span>
                                </div>
                            </div>
                            <a href="destinos/camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/salkantay-trek.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Salkantay Machu Picchu 5 Días/ 4 Noches</h5>
                            <p class="text-card">El Camino a Salkantay de 5 días es una caminata alternativa al
                                Camino Inca de 4 Dias...</p>
                            <div class="row iconos-tours">
                                <div class="col-6" style="float: left">
                                    <span class="icon-clock-o"> 4 días</span>
                                </div>
                                <div class="col-6" style="float:right">
                                    <span class="icon-map-marker"> Cusco</span>
                                </div>
                            </div>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/ollantaytambo-Sacred-valley-of-the-incas.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Sagrado a Machu Picchu</h5>
                            <p class="text-card">El tour de 2 días del Valle Sagrado a Machu Picchu implica la
                                experiencia de visitar el famoso mercado de Pisac</p>
                            <div class="row iconos-tours">
                                <div class="col-6" style="float: left">
                                    <span class="icon-clock-o"> 4 días</span>
                                </div>
                                <div class="col-6" style="float:right">
                                    <span class="icon-map-marker"> Cusco</span>
                                </div>
                            </div>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>

@endsection
