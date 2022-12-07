@extends('layouts.appen')

@section('content')
    @include('layouts.menu')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Best beaches in Perú</h1>
                    <p class="text-center" style="color: #fff">A list with the best beaches in Perú</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('index') }}">Index</a> / <a href="{{ route('blog-peru') }}">Blog</a>
                                / <a>The best beaches in Perú</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">A list with the best beaches in Perú</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    The peruvian sea
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The Grau Sea, is the official name of the maritime territory of Peru and is
                                        located in the Pacific Ocean, this name is thanks to Admiral Miguel Grau, who
                                        was a recognized Peruvian hero in the Pacific War.<br><br>
                                        Peru has an area of 2,500 km (1,553 miles) of coastline and throughout this
                                        territory it has a large number of beautiful beaches as diverse as its people.
                                        In itself, the Peruvian geography falls in love with visitors from all over the
                                        world and the sea of ​​this country is not an exception that is pleasant for the
                                        visit of tourists from all over the world.<br><br>
                                        Our list does not show the beaches from best to worst in the order in which they
                                        are shown, but they are highly recommended by travelers who have visited the
                                        coast of this country, as well as the magazine <strong>'Lonely Planet'</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Punta Sal
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The landscapes that this place offers us are like taken from a paradise, it is
                                        for many Peruvians the best beach in the country, since it has translucent
                                        waters bordered by exuberant vegetation.<br><br>

                                        You can find quite a variety of hotels in the surroundings and enjoy very
                                        well-kept beaches. It has an area of approximately 6.5km, is located in Tumbes
                                        and is reached by the North Pan-American Highway at km 1187, where you can find
                                        a whereabouts with the name: 'Punta Sal Tourist Resort'.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Punta-Sal-Pacha-Mama-Spirit.webp') }}" width="100%"
                                        alt="Punta sal beach" loading="lazy">
                                    <i>Punta Sal beach</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Máncora
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Máncora is undoubtedly the best known beach in all of Peru. In Máncora
                                        everything is a celebration and this is seen both during the day and in the
                                        nightlife it has.<br><br>

                                        Surfing, diving, eating a good ceviche and enjoying its clear skies with its
                                        frozen drinks, is part of the beach paradise that is Máncora.<br><br>

                                        You can find from the most exclusive resorts to backpacker lodgings, Mancora
                                        welcomes all travelers who have fun in mind. It is located 187 km from the city
                                        of Piura and in turn is located at km 1035 of the Panamericana Norte.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Mancora-Peru.webp') }}" width="100%" loading="lazy"
                                        alt="Máncora - Perú">
                                    <i>Máncora - Perú</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Barlovento beach
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        An excellent option to enjoy and rest on the beach, in addition to having the
                                        option of fishing magnificent specimens of corvina and sole. This beach is
                                        located between the provinces of Ica and Pisco.<br><br>
                                        It is undoubtedly one of the best places to fish, you can experience a pleasant
                                        experience of fishing with a hand rod.
                                    </p>
                                    <img src="{{ asset('img/blog/playa-Barlovento-Ica.webp') }}"
                                        alt="Barlovento beach, Ica - Perú" loading="lazy" width="100%">
                                    <i>Barlovento beach, Ica - Perú</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Caballeros beach
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        It is one of the most popular resorts in the city of Lima in the district of
                                        Santa María, this beach is the cherry on the cake among the most beautiful
                                        beaches in Peru. It is surrounded by residences that you can rent and thus
                                        ensure a very pleasant stay.<br><br>

                                        Formerly it was visited by both residents and tourists, but lately entry has
                                        become a little more difficult and this is due to the popularity of surfing in
                                        the area, this beach has Reef-Break type waves.<br><br>

                                        The type of waves that this spa has has been optimal to host important sports
                                        competitions, such as the 'IPD National Circuit' and 'Ola Grande'.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Caballeros-Lima.webp') }}" width="100%"
                                        loading="lazy" alt="Caballeros beach">
                                    <i>Caballeros beach, Lima</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    Wakama beach
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        It is a hidden beach that is a couple of hours from the city of Lima, it is the
                                        first natural refuge on the coast in Peru, and this leads to this place being
                                        aimed at ecotourism and preserving the environment.<br><br>

                                        You can see around the beach, cabins for rent with all the comforts and with a
                                        unique natural style. It is surrounded by sand hills, which allows you to feel
                                        free from the outside world, which is why Wakama is a precise place to
                                        disconnect and for those who seek that tranquility that is lost in every city.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Wakama-Lima.webp') }}" width="100%"
                                        loading="lazy" alt="Wakama beach">
                                    <i>Wakama beach, Lima - Cañete</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    La Mina beach
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This amazing beach is located in the Paracas National Reserve, in Ica. The
                                        Paracas area is characteristic for presenting intense winds, and this beach is
                                        protected by large hills that surround it, in addition to the fact that the
                                        beach has a horseshoe shape, which makes it even more characteristic and offers
                                        a fascinating landscape.<br><br>
                                        Its name originates from the cavities in the mountains around it, which formerly
                                        served as coal mines.<br><br>
                                        It has crystal clear, clean, very calm waters, emerald and turquoise colors that
                                        offer an incredible view, this area is also ideal for observing all kinds of
                                        marine animals, such as penguins, sea lions, birds and an immense variety of
                                        marine fauna.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-La-mina-paracas.webp') }}" width="100%"
                                        loading="lazy" alt="La Mina beach">
                                    <i>La Mina beach, Ica - Paracas</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    Huanchaco beach
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This is a spa, located on the outskirts of the city of Trujillo, it is a
                                        paradisiacal and varied beach since various activities can be carried
                                        out.<br><br>
                                        You can find many caballitos de totora, which are boats made of braided plant,
                                        they are made for fishing and you can take a ride in them if you wish. This
                                        beach is also perfect for surfing, in fact competitions for this sport are held
                                        here annually.<br><br>
                                        But if you are into quieter activities, you can lie on the sand and observe the
                                        incredible landscape, you can also take a walk along the pier, or enjoy the
                                        varied Peruvian cuisine, since in this resort there are many typical
                                        restaurants.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-HUANCHACO-trujillo.webp') }}" width="100%"
                                        loading="lazy" alt="Huanchaco beach">
                                    <i>Huanchaco beach, Trujillo</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    Puerto Inka
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This beautiful beach enjoys natural landscapes, cliffs with unique rock
                                        formations, archaeological and ecological sites. It is in the South of Peru,
                                        Panamericana Sur at km 604, within the province of Caravelí, Arequipa
                                        region.<br><br>
                                        It is a bay that has transparent and very calm waters, perfect to spend with the
                                        family. It has the name of Puerto Inka, since it was the most important for the
                                        Inkas and this is known since one of the arms of the Inka Trail reaches
                                        here.<br><br>
                                        You can enjoy both the beach and walks around it, and of course, water sports.
                                        You can camp in the surroundings and you also have the option of staying in
                                        hostels.
                                    </p>
                                    <img src="{{ asset('img/blog/playa-Puerto-Inka-PachaMama-Spirit.webp') }}"
                                        width="100%" loading="lazy" alt="Puerto Inca beach">
                                    <i>Puerto Inka beach, Arequipa</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <h3 class="text-center">More topics</h3>
                        <a href="{{ route('national-holidays-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/fiestas-patrias-Peru-Pacha-Mama-Spirit.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>The national holidays in Peru are celebrated in a big way around the whole
                                        country</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('santa-rosa-de-lima-en') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/santa-rosa-de-Lima-Pacha-Mama-Spirit.webp') }}"
                                        alt="Santa Rosa de Lima thumb" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>The complete life of Santa Rosa de Lima and her canonization</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/mistura-lima-peru-Pacha-mama-Spirit.webp') }}"
                                        alt="Gastronomic fairy Mistura" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>The largest gastronomic fair Peru</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Popular Tours</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="camino-inca-cantera-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/caminata-a-choquequirao.webp') }}"
                                alt="camino inca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Chquequirao, caminata 4 días </h5>
                            <p class="text-card">Cachicata o Inca Quarry es una de las antiguas canteras utilizadas
                                por las civilizaciones Pre-Inca e Inca para construir el vasto complejo…</p>
                            <a href="camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="#">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="City tour en Cusco ciudad" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">City tour en Cusco</h5>
                            <p class="text-card">Antes del amanecer en el lago Titicaca, una neblina azul cubre
                                nuestra vista. Muchos conejillos de indias corren para...</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="viajar-a-puno">
                            <img class="card-img-top" src="{{ asset('img/thumb/tour-a-la-laguna-de-humantay.webp') }}"
                                alt="Tour a Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour a la laguna Humantay</h5>
                            <p class="text-card">Puno es una de las ciudades más importantes de la orilla del lago
                                Titicaca, el lago más navegable y...</p>
                            <a href="viajar-a-puno" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="vilcabamba">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Llactapata inca trail" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour gastronómico</h5>
                            <p class="text-card">Hasta hace poco, Vilcabamba era un rincón relativamente seguro y
                                accesible de la...</p>
                            <a href="vilcabamba" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
