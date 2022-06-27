<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Destinos para conocer Perú | Travel Agency Pacha Mama Spirit</title>
    <meta name="description"
        content="Te ofrecemos en esta sección las mejores opciones para conocer Perú, un país lleno de maravillas en cada rinconcito al que se va.  Maravíllate con lo que Perú ofrece.">
    <meta property="og:description"
        content="Te ofrecemos en esta sección las mejores opciones para conocer Perú, un país lleno de maravillas en cada rinconcito al que se va.  Maravíllate con lo que Perú ofrece.">
    <meta name="keywords"
        CONTENT="Conocer Perú, Viajar a Perú,Reservar Perú,Como viajar a Perú?,Vacaciones en Perú,Como reservar Perú,Como llegar a Perú,Precio de viajar a Perú,Que lugares visitar en Perú,Maravilla del mundo">
    <meta name="DateCreated" CONTENT="Mon, 6 June 2022 00:00:00 GMT-5">
    <meta name="Revisit-after" CONTENT="30 days">
    <meta name="robots" content="ALL">
    <meta property="og:image" content="https://pachamamaspirit.com/img/" />
    <link rel="canonical" href="https://www.pachamamaspirit.com/es/destinos-peru" />
</head>

<body>
    @include('layouts.menu-castellano')
    <li>
        <button onclick="window.location='{{ route('destinos-peru') }}'" class="castellano-es">English</button>
    </li>
    @include('layouts.menu-castellano-2')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Encuentra destinos para conocer Perú</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Perú como destino turístico</h2>
                    <i>Perú. País de tradiciones. País mestizo. País fuerte</i><br><br>
                    <p>
                        El turismo en el <a target="_blanck" rel="no-follow" class="enlaces-tours"
                            href="">Perú</a> está
                        dirigida hacia los monumentos arqueológicos, pues cuenta con más de
                        cien mil sitios de interés, el ecoturismo en la Amazonía peruana, el turismo cultural en las
                        ciudades coloniales, turismo gastronómico, turismo de aventura y turismo de playa.<br><br>

                        De acuerdo con un estudio del gobierno peruano, el índice de satisfacción de los turistas
                        después de visitar el Perú es del 94%. Es la industria de más rápido crecimiento en el Perú
                    </p>
                    <h3>¿Quieres saber por qué visitar Perú?</h3>
                    <p>
                        La respuesta es sencilla y compleja, como el Perú mismo. Visitar Perú es ponerte en contacto con
                        una cultura asombrosa, con gente capaz de mostrarte lo mejor de sí misma en cualquier
                        circunstancia, con paisajes que generan emociones, con emociones que no se olvidan nunca. Perú
                        es rico porque su riqueza no está puesta en cosas materiales, sino que se halla en la sonrisa de
                        un niño cusqueño, en la punta de un tenedor, en tus pies sobre la arena, en el roce de unas
                        hojas en la selva, en la brisa al llegar a la cima de esa montaña, en el calor sobre tu rostro
                        cuando el sol te da de frente.
                    </p>
                    <h2>Información y asistencia al turista</h2>
                    <p>
                        Perú cuenta con un servicio estatal, gratuito que trabaja los 7 días de la semana durante todo
                        el
                        año, llamado <a target="_blanck" rel="no-follow" class="enlaces-tours"
                            href="https://www.peru.travel/es/datos-utiles/iperu">
                            Iperú,</a> Información y Asistencia al Turista. Este servicio es de gran ayuda para el
                        viajero nacional o extranjero antes, durante y después de un viaje al Perú. Asimismo, recibe
                        reclamos y sugerencias concernientes a empresas turísticas, atractivos y en general sobre el
                        turismo
                        peruano.
                    </p>
                    <h3>Destinos turísticos más populares en Perú</h3>
                    <p>Este país lleno de encanto y misticismo posee 3 regiones naturales Costa, Sierra y Selva que
                        permite al turista poder realizar un sinfín de actividades que van de los deportes y actividades
                        al aire libre hasta las visitas a sitios culturales y naturales, sin duda un destino imperdible.
                        A continuación una lista con los 7 principales lugares turísticos del Perú.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('cusco-navel-of-the-world') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card">Ombligo del mundo</p>
                            <a href="{{ route('cusco-navel-of-the-world') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('lima-city-of-kings') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card">La ciudad de los reyes</p>
                            <a href="{{ route('lima-city-of-kings') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('arequipa-the-white-city') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card">La ciudad blanca</p>
                            <a href="{{ route('arequipa-the-white-city') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                            alt="lago Titicaca Puno" loading="lazy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card">Capital del folklore</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                            alt="Ciudad de Ica, Nazca" loading="lazy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ica</h5>
                            <p class="text-card">La ciudad del eterno sol</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/leon-marino.webp') }}"
                            alt="Leon marino Ica - Paracas" loading="lazy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pisco</h5>
                            <p class="text-card">Ciudad que vio nacer a su homónima bebida</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/rio-amazonas-selva-de-peru-pacha-mama-spirit.webp') }}"
                            alt="Rio Amazonas - Puerto Maldonado" loading="lazy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Madre de Dios</h5>
                            <p class="text-card">La exótica selva peruana</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---banner--------->
    <div class="banner-destinos">
        <div class="banner-container">

            <h3 class="h3-banner">Camino Inca 2022</h3>
            <p class="p-banner">TOUR OPERATOR PERÚ</p>
            <P class="p-banner">Pacha Mama Spirit es operador turístico al Camino Inca desde 2008. Somos
                especialistas en
                viajes de aventura y
                caminata. Reserve con nosotros su proxima caminata al inca trail, finalizando en la ciudad
                perdida de los Incas: <strong>Machu Picchu</strong></P>
            <P class="p-banner">
                <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva
                    ahora!</a>
            </P>
        </div>
    </div>
    <!-- Modal de banner-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form style="padding: 0px 25px">
                    @csrf
                    <h3 class="h3-book-pop-up">Reserva tu viaje a Perú</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" id="inputEmail4"
                                placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="David Miranda">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Arrivo:</label>
                            <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Salida:</label>
                            <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Adultos:</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="adults">Niños:</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="child">Mensaje:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 2.8em"
                                placeholder="Message:"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="boton-index">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.foot')
</body>

</html>
