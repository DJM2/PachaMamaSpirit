<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Pacha Mama Spirit | Agencia de viajes de lujo en Perú</title>
    <meta name="description"
        content="Pacha Mama Spirit es una agencia de viajes en Perú que tiene mas de 15 años de experiencia en el rubro turistico, dando siempre calidad de servicio con cada cliente." />
    <meta name="keywords"
        content="Viaja a Peru, conocer peru, reservar peru, como viajar a peru, como viajar a machu picchu, reservar machu picchu, book machu picchu, reservar tour a machu picchu, tours en Machu Picchu" />
    <meta property="og:description"
        content="Te ofrecemos en esta sección las mejores opciones para conocer Perú, un país lleno de maravillas en cada rinconcito al que se va.  Maravíllate con lo que Perú ofrece.">
    <meta name="DateCreated" content="Mon, 6 June 2022 00:00:00 GMT-5">
    <meta name="Revisit-after" content="30 days">
    <meta property="og:image" content="https://pachamamaspirit.com/img/" />
    <link rel="canonical" href="https://www.pachamamaspirit.com/inicio" />
</head>

<body>
    @include('layouts.menu-castellano')
    <li>
        <button onclick="window.location='/'" class="castellano-es">Ingles</button>
    </li>
    @include('layouts.menu-castellano-2')
    <div class="hero">
        <!---- formulario
            ----------------->
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
                                <input type="date" class="form-control" id="da">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="date" class="form-control" id="do">
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
                        cualquier viaje a Perú a su solicitud!
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/camino-inca-cantera-peru">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/Camino-Inca-4-Dias-3-noches.webp') }}"
                                alt="Camino Inca 4 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Camino Inca 4 Días/ 3 Noches</h5>
                            <p class="text-card">El Camino Inca de 4 días a Machu Picchu es la caminata más popular
                                de la ruta turistica de Perú</p>
                            <a href="destinos/camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/Camino-Inca-2-Dias-Tierras-Vivas.webp') }}"
                                alt="Camino Inca 2 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Corto Camino Inca 2 Días/ 1 Noche</h5>
                            <p class="text-card">El Camino Inca de 2 días comienza muy temprano. Traslado a la
                                estación de tren de Ollantaytambo...</p>
                            <a href="destinos/camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/Caminata-a-Salkantay-Machu-Picchu.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Salkantay Machu Picchu 5 Días/ 4 Noches</h5>
                            <p class="text-card">El Camino a Salkantay de 5 días es una caminata alternativa al
                                Camino Inca de 4 Dias...</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/valle-sagrado-machu-picchu-2-dias.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Sagrado a Machu Picchu</h5>
                            <p class="text-card">El tour de 2 días del Valle Sagrado a Machu Picchu implica la
                                experiencia de visitar el famoso mercado de Pisac</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
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
                <h5>Lodge</h5>
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
                        viajes de aventura y caminatas por las
                        rutas del Perú. Las
                        actividades de aventura en Perú ofrecen paquetes para disfrutar y conocer este país,
                        Ya que los viajeros se mueven a menudo a pie por las zonas rurales, el senderismo les brinda una vista
                        de cerca de paisajes increíbles durante todo el recorrido. Muchos excursionistas viajan por áreas aisladas, lo que les
                        brinda una experiencia muy diferente en comparación con aquellos que viajan en grupos
                        organizados a destinos peruanos más populares.</p>
                </div>
                <div class="space"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/Machu-Picchu-por-carro-2-dias.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu por carro 2 Días/ 1 Noche</h5>
                            <p class="text-card">Esta excelente excursión conocida como “Machu Picchu por carro” o
                                “Ruta Amazónica“...</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/tour-a-machu-picchu-tierras-vivas.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour Machu Picchu por tren 2 Días/ 1 Noche</h5>
                            <p class="text-card">El Tour a Machu Picchu 2 Días es uno de los más libres de estrés
                                disponibles. El transporte...</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top"
                            src="{{ asset('img/thumb/peru-aventurero-paquete-de-viajes.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Perú Aventurero 11 Días/ 10 Noches</h5>
                            <p class="text-card">Perú Aventurero es un paquete de viajes a Perú. Sumerja sus
                                sentidos en los coloridos mercados...</p>
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
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>

    <!---banner--------->
    <div class="banner">
        <div class="banner-container">
            <h3 class="h3-banner">Camino Inca 2022</h3>
            <p class="p-banner">TOUR OPERATOR PERÚ</p>
            <P class="p-banner">Pacha Mama Spirit es operador del Camino Inca desde 2010. Somos especialistas en
                viajes de aventura y
                caminata. Reserve con nosotros su proxima caminata por las rutas incas, finalizando en la ciudad
                perdida
                de <strong>Machu Picchu</strong></P>
            <P class="p-banner">
                <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva ahora!</a>
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
                            <input type="email" id="email" class="form-control" id="inputEmail4" placeholder="Email">
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
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Paquetes a Perú:</h2>
                    <p>
                        Si decide visitar Perú durante las vacaciones, puede elegir uno de los viajes de vacaciones de
                        aventura para descubrir los aspectos más destacados de las áreas más especiales. Existe una
                        amplia opción de paquetes turísticos a Perú. Tierras Vivas ofrece llevarlo a lugares remotos de
                        la selva amazónica en Perú, muchas regiones costeras maravillosas, el desierto místico y
                        deslumbrante de las Líneas de Nazca, las magníficas montañas de los Andes con sus espectaculares
                        caminatas y paisajes, y por supuesto Machu Picchu y el Camino Inca.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/city-tour-cusco-peru.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco & Machu Picchu</h5>
                            <p class="text-card">4 days From $640.00</p>
                            <a href="#" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/inca-trail-tour-cusco.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="text-card">4 days From $640.00</p>
                            <a href="#" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/honeymoon-peru-tour.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="text-card">4 days From $640.00</p>
                            <a href="#" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/thumb/machu-picchu-tours.webp') }}"
                            alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="text-card">4 days From $640.00</p>
                            <a href="#" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    @include('layouts.foot')
</body>

</html>
