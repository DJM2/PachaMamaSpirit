@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="hero">
        <!------- formulario---------->
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <form class="form-index">
                        @csrf
                        <h3 class="h1-index-book">¡Reserva tu viaje a Perú!</h3>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" type="text" name="da" placeholder="Fecha de viaje:"
                                    onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" class="form-control" id="adultos" placeholder="Cantidad de días">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" class="form-control" id="adultos" placeholder="Adultos">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" class="form-control" id="childs" placeholder="Niños">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="mensaje" rows="3" style="height: 2.8em" placeholder="Message:"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="boton-index">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--------Fin formulario ---------->
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Pacha Mama Spirit</beige>
                    </h1>
                    <p>Somos una empresa tour operador de <strong> viajes de aventura y
                            turismo</strong>
                        tradicional con experiencia, profesional y dinámica fundada en 2006. Contamos con un personal
                        altamente preparado y siempre dispuesto a brindarle un servicio personalizado en Sudamérica.
                        Nuestros viajes de aventura en Perú involucran una amplia gama de diferentes estilos para
                        satisfacer las necesidades de cualquier viajero. Nuestra mayor especialidades son las<strong>
                            caminatas
                            por el Camino Inca y Salkantay</strong>. Sin embargo, no nos limitamos a esto, ¡podemos
                        organizar
                        cualquier viaje a Perú a su solicitud! <a href="{{ url('tours') }}">Tours</a>
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>

                <!-----Prueba--->
                @foreach ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="img/buscador/{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'machupicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Caminata' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('caminata') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{$peru='Perú'}}
                                        </p>
                                        <a class="enlaceAround" href="{{route('peru')}}"> 
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                    <p style="display:none">
                                        {{ $luxury = 'Privado' }}
                                    </p>
                                        <a class="enlaceLuxury" href="{{route('luxury')}}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'fullday'))
                                    <p style="display:none">
                                        {{ $fullday = 'Full Day' }}
                                    </p>
                                        <a class="enlaceFullday" href="{{route('fullday')}}"> {{ $fullday }}</a>
                                    @endif
                                </div>

                                <div class="row iconos-tours">
                                    <div class="col-4" style="float: left">
                                        <span class="icon-clock-o"> {{ $tour->dias }}días</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                    </div>
                                </div>
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                    class="boton-card">Más detalles</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                <!-----Fin orueba--->
              {{--   @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'machupicchu'))
                        <p style="display:none">{{ $mapi = 'Machu Picchu esa es!' }}</p>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="destinos/camino-inca-cantera-peru">
                                    <img class="card-img-top" src="img/buscador/{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <p>Categoria:
                                        <a href="mapi"> {{ $mapi }}</a>.
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <a href="hike"> {{ $hike = 'Hiking' }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <a href="around"> {{ $hike = 'Around Perú' }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <a href="luxury"> {{ $hike = 'Luxury' }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <a href="fullday"> {{ $hike = 'Full Day' }}</a>
                                        @endif
                                    </p>

                                    <div class="row iconos-tours">
                                        <div class="col-4" style="float: left">
                                            <span class="icon-clock-o"> {{ $tour->dias }} días</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                        </div>

                                    </div>
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="boton-card">Quedo</a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
 --}}
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Caminatas</h5>
                <p>Excursiones con caminatas por Perú</p>
                <a href="">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card dos">
            <div class="oscuro">
                <h5>Machu Picchu</h5>
                <p>Tours en Machu Pïcchu</p>
                <a href="">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Perú</h5>
                <p>Tours para conocer Perú</p>
                <a href="">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Mountain Lodge</h5>
                <p>Pacha Mama Spirit Lodge</p>
                <a href="">Ver Tours</a>
            </div>
        </div>
    </div>
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Perú Aventura:</h2>
                    <p>Pacha Mama Spirit es una agencia de viajes con bastante experiencia en
                        viajes de aventura y caminatas por las rutas de destino turístico en Perú. Nuestros paquetes
                        turísticos ofrecen gran variedad de excursiones la gran diversidad de este hermoso país.
                        Ya que los viajeros se mueven a menudo a pie por las zonas rurales, el senderismo les brinda una
                        vista de cerca de paisajes increíbles durante su recorrido.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/machu-picchu-travel-tour.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu por 3 días</h5>
                            <p class="text-card">Esta excelente excursión a “Machu Picchu”, es una gran opción para
                                conocer esta maravilla del mundo.</p>
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
                        <img class="card-img-top" src="{{ asset('img/thumb/tour-a-machu-picchu-tierras-vivas.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour Machu Picchu por tren 2 Días/ 1 Noche</h5>
                            <p class="text-card">El Tour a Machu Picchu 2 Días es uno de los más libres de estrés
                                disponibles. El transporte...</p>
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
                        <img class="card-img-top" src="{{ asset('img/thumb/peru-aventurero-paquete-de-viajes.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Perú Aventurero 11 Días/ 10 Noches</h5>
                            <p class="text-card">Perú Aventurero es un paquete de viajes a Perú. Sumerja sus
                                sentidos en los coloridos mercados...</p>
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
                            src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco Mágico 5 Días/ 4 Noches</h5>
                            <p class="text-card">El tour de Cusco Machu Picchu es un paquete turístico preparado
                                para los viajeros que desean descubrir más</p>
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
    {{-- @include('layouts.banner-es') --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>{{-- 
    @include('layouts.foot-castellano') --}}
@endsection
