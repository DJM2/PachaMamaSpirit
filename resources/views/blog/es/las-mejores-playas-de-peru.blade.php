@extends('layouts.app')
@php $titulo="Las mejores playas de Perú" @endphp
@php $descripcion="Este país tiene un área de 2500 km (1553 millas) de costa y en todo este territorio tiene una gran cantidad de hermosas playas" @endphp
@php $keywords="las mejores playas de peru, playas en peru, disfruta el verano en peru" @endphp
@php $img="https://pachamamaspirit.com/img/blog/Playa-Caballeros-Lima.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu-castellano')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Las mejores playas de Perú</h1>
                    <p class="text-center" style="color: #fff">La mejor lista de playas en Perú</p>
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
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a href="{{ route('blog-peru') }}">Blog</a>
                                / <a>Las mejores playas en Perú</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">Lista de las mejores playas en Perú</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    El mar peruano
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>El mar Grau, es el nombre oficial que tiene el territorio marítimo de Perú y se
                                        encuentra en el océano pacífico, este nombre lo lleva gracias al Almirante
                                        Miguel Grau, que fue un reconocido héroe peruano en la guerra del
                                        pacífico.<br><br>
                                        Este país tiene un área de 2500 km (1553 millas) de costa y en todo este
                                        territorio tiene una gran cantidad de hermosas playas tan diversas como su
                                        gente. De por si la geografía peruana enamora a los visitantes de todo el mundo
                                        y el mar de este país no es una excepción que es grata para la visita de
                                        turistas de todo el mundo.<br><br>
                                        Nuestra lista no muestra de las mejores playa en Perú,no esta de mejor a peor en
                                        el orden en que se muestran, pero si son altamente recomendadas por viajeros que
                                        pasaron su visita en la costa de este país, asi como la revista <strong>‘Lonely
                                            Planet’</strong>
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
                                        Los paisajes que nos brinda este lugar son como sacados de un paraíso, es para
                                        muchos peruanos la mejor playa del país, ya que tiene aguas translúcidas
                                        bordeadas de una exuberante vegetación.<br><br>
                                        Puedes encontrar bastante variedad de hoteles en los alrededores y disfrutar de
                                        unas playas muy bien cuidadas. Tiene un área de 6.5km aproximadamente, se
                                        encuentra en Tumbes y se llega por la carretera Panamericana Norte en el km
                                        1187, donde podrás encontrar un paradero con el nombre de: ‘Balneario turístico
                                        Punta Sal’.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Punta-Sal-Pacha-Mama-Spirit.webp') }}" width="100%"
                                        alt="Punta sal beach" loading="lazy">
                                    <i>Playa Punta Sal</i>
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
                                        Máncora es sin duda la playa más conocida de todo Perú, En Máncora todo es
                                        celebración y esto se ve tanto de día como de la vida nocturna que
                                        tiene.<br><br>
                                        Surfear, bucear, comer un buen ceviche y disfrutar de sus cielos despejados con
                                        sus bebidas heladas, es parte del paraíso playero que es Máncora.<br><br>
                                        Puedes encontrar desde los resorts más exclusivos hasta hospedajes para
                                        mochileros, Máncora recibe a todos los viajeros que tengan diversión en mente.
                                        Se encuentra a 187 km de la ciudad de Piura y a su vez se encuentra en el km
                                        1035 de la Panamericana Norte.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Mancora-Peru.webp') }}" width="100%" loading="lazy"
                                        alt="Playa Máncora - Perú">
                                    <i>Playa Máncora - Perú</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Playa Barlovento
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Una excelente opción para disfrutar y descansar en la playa, además de tener la
                                        opción de pescar magníficos ejemplares de corvina y lenguado. Esta playa está
                                        ubicada en entre las provincias de Ica y Pisco.<br><br>
                                        Es sin duda uno de los mejores lugares donde realizar la pesca, se puede
                                        experimentar una grata experiencia de pesca con caña de mano.
                                    </p>
                                    <img src="{{ asset('img/blog/playa-Barlovento-Ica.webp') }}"
                                        alt="Playa Barlovento Ica - Perú" loading="lazy" width="100%">
                                    <i>Playa Barlovento, Ica - Perú</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Playa Caballeros
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Es uno de los balnearios más populares de la ciudad de Lima en el distrito de
                                        Santa María, esta laya es la cereza del pastel de entre las playas mas hermosas
                                        de Perú. Esta rodeada de residencias que puedes alquilar y así asegurar una
                                        estadía muy agradable.<br><br>
                                        Antiguamente era visitada tanto por residentes como por turistas, pero
                                        últimamente el ingreso se ha vuelto un poco más difícil y esto se debe por la
                                        popularidad que tiene el surf en la zona, esta playa presenta olas del tipo
                                        Reef-Break.<br><br>
                                        El tipo de oleaje que tiene este balneario ha sido optimo para ser sede de
                                        importantes competencias deportivas, como por ejemplo el ‘Circuito Nacional IPD’
                                        y ‘Ola Grande’.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Caballeros-Lima.webp') }}" width="100%"
                                        loading="lazy" alt="Playa Caballeros">
                                    <i>Playa Caballeros, Lima</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    Playa Wakama
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Es una playa escondida que queda a un par de horas de la ciudad de Lima, es el
                                        primer refugio natural de la costa en Perú, y esto lleva a que este paraje este
                                        dirigido al ecoturismo y a preservar el medio ambiente.<br><br>
                                        Se puede apreciar alrededor de la playa, cabañas en arriendo con todas las
                                        comodidades y con un único estilo natural. Está rodeada de cerros de arena, lo
                                        que permite sentirse libre del mundo exterior, es por eso que Wakama es un lugar
                                        preciso para desconectarse y para aquellos que buscan esa tranquilidad que se
                                        pierde en toda ciudad.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-Wakama-Lima.webp') }}" width="100%"
                                        loading="lazy" alt="Playa Wakama">
                                    <i>Playa Wakama, Lima - Cañete</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    Playa La Mina
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Esta sorprendente playa está ubicada en la Reserva Nacional de Paracas, en Ica.
                                        La zona de Paracas es característica por presentar intensos vientos, y esta
                                        playa está protegida por grandes cerros que la rodean, además que la playa tiene
                                        forma de herradura, lo cual la hace aún más característica y ofrece un paisaje
                                        fascinante.<br><br>
                                        Su nombre se origina por las cavidades en las montañas de su alrededor, que
                                        antiguamente sirvieron como minas de carbón.<br><br>
                                        Posee aguas cristalinas, limpias, muy apacibles, de colores esmeralda y turquesa
                                        que ofrecen una vista increíble, esta zona además es ideal para observar todo
                                        tipo de animales marinos, como pingüinos, lobos, aves y una inmensa variedad de
                                        fauna marina.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-La-mina-paracas.webp') }}" width="100%"
                                        loading="lazy" alt="Playa la Mina">
                                    <i>Playa la Mina, Ica - Paracas</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    Playa Huanchaco
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Este es un balneario, situado a las afueras de la ciudad de Trujillo, es una
                                        playa paradisiaca y variada ya que pueden realizarse diversas
                                        actividades.<br><br>
                                        Podrás encontrar muchos caballitos de totora, que son embarcaciones hechas de
                                        planta trenzada, están hechas para pescar y podrás dar un paseo en ellas si así
                                        lo deseas. También esta playa es perfecta para practicar Surf, de hecho aquí se
                                        celebra anualmente competencias de este deporte.<br><br>
                                        Pero si eres de actividades más tranquilas, puedes recostarte en la arena y
                                        observar el increíble paisaje, también podrás dar un paseo por el muelle, o
                                        disfrutar de la variada gastronomía peruana, ya que en este balneario existen
                                        bastantes restaurantes típicos.
                                    </p>
                                    <img src="{{ asset('img/blog/Playa-HUANCHACO-trujillo.webp') }}" width="100%"
                                        loading="lazy" alt="Playa Huanchaco">
                                    <i>Playa Huanchaco, Trujillo</i>
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
                                        Esta hermosa playa goza de paisajes naturales, acantilados con singulares
                                        formaciones rocosas, sitios arqueológicos y ecológicos. Queda al Sur de Perú,
                                        Panamericana Sur en el km 604, dentro de la provincia de Caravelí, región
                                        Arequipa.<br><br>
                                        Es una bahía que tiene aguas transparentes y muy calmadas, perfectas para
                                        pasarla en familia. Tiene el nombre de Puerto Inka, ya que era la mas importante
                                        para los Inkas y esto se sabe ya que hasta acá llega uno de los brazos del
                                        Camino Inka.<br><br>
                                        Se puede disfrutar tanto de la playa como de caminatas alrededor y como no, de
                                        deportes acuáticos. Se puede acampar en los alrededores y también tiene la
                                        opción de hospedarse en albergues.
                                    </p>
                                    <img src="{{ asset('img/blog/playa-Puerto-Inka-PachaMama-Spirit.webp') }}"
                                        width="100%" loading="lazy" alt="Playa Puerto Inca">
                                    <i>Playa Puerto Inka, Arequipa</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.shareblogs')
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <h3 class="text-center">More topics</h3>
                        <a href="{{ route('fiestas-patrias-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/fiestas-patrias-Peru-Pacha-Mama-Spirit.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>Las fiestas patrias en Perú se celebran a lo grande alrededor de todo el país</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('santa-rosa-de-lima-es') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/santa-rosa-de-Lima-Pacha-Mama-Spirit.webp') }}"
                                        alt="Playas de Perú" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>La vida completa de Santa Rosa de Lima y su canonización</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/mistura-lima-peru-Pacha-mama-Spirit.webp') }}"
                                        alt="Feria gastronómica Mistura" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>Texto de muestra para ver resultado de ejemplo para Blog</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
