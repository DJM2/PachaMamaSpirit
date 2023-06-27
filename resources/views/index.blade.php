@extends('layouts.appen')
@section('titulo', 'Pacha Mama Spirit | Travel Agency for Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 style="color: #fff" class="text-center">
                                Discover the most impressive places that Peru has
                            </h1>
                            <p style="color: #fff" class="text-center">
                                Walks, gastronomy, archaeological sites, nature reserves, customs, traditions, landscapes
                                and much more...
                            </p>
                            <a href="{{ route('hikes') }}">Hikes</a>
                            <a href="{{ route('around') }}">luxury</a>
                            <a href="{{ route('mapien') }}">Machu Picchu</a>
                            <a href="{{ route('around') }}">Around Perú</a>
                        </div>
                        <a href="#pachamama">
                            <div class="circulo">
                                <i class="icon-chevron-down desvanecer"></i>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    @if (session('status'))
                        <div class="text-success text-center">
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!--------Fin formulario ---------->
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="h1-index">
                        <beige>Pacha Mama Spirit</beige>
                    </h2>
                    <p>
                        <strong>Pacha Mama Spirit</strong> is a Peruvian travel agency born in Cusco, which is known as the
                        navel of the
                        world, the ancient capital of the <strong>Inca empire</strong>. Our team has developed a list of
                        tours that allows
                        the visitor to enjoy the best that Peru has to offer such as adventure, culture, hiking, history,
                        gastronomy, exclusivity and a Pacha Mama Spirit team, who loves <strong>Peru</strong> and everything
                        it offers us.
                        Peru has one of the richest biodiversities in the world, thanks to the Andes mountain range, which
                        crosses the country forming coast, mountains and jungle on its way, and with each natural region
                        brings with it another considerable amount of microclimates. This makes Peru a country rich in
                        diversity of natural products, unique landscapes, and an extensive gastronomy among others.<br><br>
                        Peru was also the main site of the Tahuantinsuyo, which was erected by the Incas, the largest and
                        most developed culture in South America. These men built fortresses made of gigantic stones, which
                        have endured over time and today are part of the present day, conserving their greatness. In this
                        way, Peru becomes a country that has a lot to offer its visitors.
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
                            <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias" loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'machuPicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }} </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'caminata'))
                                        <p style="display:none">
                                            {{ $hike = 'Hiking' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('hikes') }}"> {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Perú' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('around') }}"> {{ $peru }} </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Private' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('private') }}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'fullday'))
                                        <p style="display:none">
                                            {{ $fullday = 'Full Day' }}
                                        </p>
                                        <a class="enlaceFullday" href="{{ route('fulldayen') }}"> {{ $fullday }}</a>
                                    @endif
                                </div>
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
                                <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                    class="boton-card">Más detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-----Fin orueba--->
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
                    <h2 class="h2-tierras">Peru Adventure:</h2>
                    <p>
                        Pacha Mama Spirit is a travel agency with a lot of experience in adventure trips and walks through
                        the main tourist routes that Peru has to offer. Since travelers often move through rural areas on
                        foot, hiking gives them an up-close view of incredible scenery along the way. The Inca Trail, which
                        leads to Machu Picchu, is one of the best treks that exists in South America and should be one of
                        your main hiking options.
                    </p>
                </div>
                <div class="space"></div>
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'caminata'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                        loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'machuPicchu'))
                                            <p style="display:none">
                                                {{ $mapi = 'Machu Picchu' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }} </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'caminata'))
                                            <p style="display:none">
                                                {{ $hike = 'Hiking' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('hikes') }}"> {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p style="display: none">
                                                {{ $peru = 'Perú' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('around') }}"> {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Private' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('private') }}">
                                                {{ $luxury }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <p style="display:none">
                                                {{ $fullday = 'Full Day' }}
                                            </p>
                                            <a class="enlaceFullday" href="{{ route('fulldayen') }}">
                                                {{ $fullday }}</a>
                                        @endif
                                    </div>
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
                                    <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="boton-card">Más detalles</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <section class="mb-4">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                        contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>
                    <div class="row">
                        <div class="col-lg-12 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mensajeIndex" method="POST">
                                @csrf
                                <div class="row formTransparent">
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Name:" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="Email:" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="phone" name="phone" class="form-control"
                                                placeholder="Phone:" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="country" name="country" class="form-control" placeholder="Country:">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form mb-4">
                                            <input type="number" id="adults" name="adults" class="form-control"
                                                placeholder="Adults:">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <select name="tipo" id="tipo" class="form-control md">
                                                <option value="familia">Family trip</option>
                                                <option value="pareja">Couple trip</option>
                                                <option value="amigos">Friends trip</option>
                                                <option value="grupo">Group trip</option>
                                                <option value="privado">Private trip</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" placeholder="Write your message here..." id="message" name="message" rows="2"
                                                class="form-control md-textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button class="btnTransparent" type="submit">Enviar</button>
                                        </div>
                                    </div>
                            </form>                            
                        </div>
                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </div>
    </section>{{-- 
    @include('layouts.foot-castellano') --}}
@endsection
