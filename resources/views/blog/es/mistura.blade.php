@extends('layouts.app')
@php $titulo="Mistura: La feria gastronómica más grande de Latinoamérica" @endphp
@php $descripcion="Esta feria de gastronomía peruana e internacional se celebra anualmente en Lima cada primera mitad del mes de setiembre y es una de las despensas más fascinantes de América Sur." @endphp
@php $keywords="mistura, feria mistura peru, mistura 2024, mistura 2023, feria gastronomica peru" @endphp
@php $img="https://pachamamaspirit.com/img/blog/productos-peruanos-gastronomia.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu-castellano')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Mistura Perú</h1>
                    <p class="text-center" style="color: #fff">La feria gastronómica más grande de Latinoamérica</p>
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
                                / <a>Feria Mistura</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">La feria gastronómica Mistura</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Introducción a los productos peruanos
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Esta feria de gastronomía peruana e internacional se celebra anualmente en Lima
                                        cada primera mitad del mes de setiembre y es una de las despensas más
                                        fascinantes de América Sur.<br><br>
                                        Esta riqueza se debe a la mano del hombre peruano como a la inmensa cantidad de
                                        productos que nos ofrecen los suelos peruanos, gracias a su diversidad ecológica
                                        por la cordillera de los Andes que permiten que Perú tenga 85 tipos de geografía
                                        y con esto que tenga igual cantidad de climas.<br><br>
                                        Organizada por la Sociedad Peruana de Gastronomía (Apega), asociación civil y
                                        sin rubros de lucro que fue fundada por el reconocido chef peruano Gastón
                                        Acurio. Es reconocida como el festival de comida más importante en América
                                        Latina.
                                    </p>
                                    <img src="{{ asset('img/blog/productos-peruanos-gastronomia.webp') }}" loading="lazy"
                                        alt="Productos peruanos" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    La cocina peruana
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La comida peruana tiene tuvo una gran historia con el pasar de los años. Cada
                                        vez se ha ido recopilando recetas y sabores de distintos lugares del mundo, para
                                        poder tener la particular comida peruana.<br><br>
                                        La gastronomía peruana fue reconocida como ‘Patrimonio Cultural de las Américas
                                        para el mundo’ gracias a la ‘Organización de los EEUU’. Es una de las comidas
                                        mas importantes del mundo y un gran ejemplo de la cocina fusión.<br><br>
                                        La comida peruana se puso muy de moda en Europa en los últimos tiempos,
                                        especialmente en países como España. La comida peruana tiene mucha historia y
                                        mestizaje, también lleno de tradiciones y costumbres.<br><br>
                                        La gastronomía peruana es la que más platos típicos tiene en el mundo. Solo la
                                        costa tiene registrado alrededor de 2500 diferentes tipos de sopas y 250
                                        postres. Perú también es conocida por tener la mayor cantidad de papas en el
                                        mundo contando con más de 3 mil tipos de papas. Lima es reconocida como la
                                        capital gastronómica de América.<br><br>
                                        Para agregar aún más prestigio a la gastronomía de este país, Perú habría ganado
                                        cinco veces el primer lugar en la lista The World's 50 Best Restaurants en
                                        Latinoamérica, con el Restaurante ‘Central’, los años 2014, 2015, 2016, 2021 y
                                        2022. La Central también se posiciono como el 4to mejor restaurante del mundo en
                                        el año 2021 y 2do en 2022.
                                    </p>
                                    <img src="{{ asset('img/blog/arroz-con-pollo-Comida-peruana.webp') }}" width="100%"
                                        alt="Arroz con pollo" loading="lazy">
                                    <i>Arroz con Pollo</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Curiosidades de Mistura
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Mistura significa ‘mezcla’. </li>
                                        <li>Se paga la entrada a esta gran feria gastronómica y dependiendo del día,
                                            esta puede costar entre 15 y 25 soles (entre 5 y 8 dólares).</li>
                                        <li>Se tiene que adquirir boletos o tickets para poder degustar de la comida en
                                            cada puesto.</li>
                                        <li>Dentro de la feria, te encontrarás con una gran variedad de carpas de
                                            comidas.</li>
                                        <li>Se puede también adquirir distintos tipos de productos típicos de las
                                            regiones del Perú dentro del mercado de la feria.</li>
                                        <li>Se da origen desde el año 2007 en Lima, Perú.</li>
                                        <li>Mistura es la feria gastronómica mas grande y reconocida de toda
                                            Latinoamérica. Es una feria organizada por la Sociedad Peruana de
                                            Gastronomía (APEGA)</li>
                                    </ul>
                                    <img src="{{ asset('img/blog/Mistura-2017.webp') }}" width="100%" loading="lazy"
                                        alt="Feria-Mistura">
                                    <i>Feria Mistura</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Clasisficación de comidas en Mistura
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Mistura a organizado en varios ‘Mundos’ la comida que se expone. Cada carpa
                                        representa un ‘Mundo’ con una propuesta gastronómica especifica de cada región.
                                        Se clasifican en:
                                    </p>
                                    <ul>
                                        <li>Brasas y anticuchos</li>
                                        <li>Ceviches</li>
                                        <li>Chifa y Nikkei</li>
                                        <li>Andino y Amazónico</li>
                                        <li>Dulces</li>
                                        <li>Sánguches</li>
                                        <li>Carretillas</li>
                                        <li>Bares</li>
                                        <li>Pisco & Vino</li>
                                        <li>Cervecero</li>
                                    </ul>
                                    <p>
                                        Con este ejemplo puedes darte cuenta que la feria Mistura es enorme y por
                                        supuesto podrás encontrar lugares en los que puedas sentarte cómodamente a
                                        degustar de estos exquisitos platos.<br><br>
                                        Entre las bebidas más famosas se puede encontrar el Pisco sour y el chilcano. Al
                                        final de toda la feria se puede encontrar el punto cervecero, donde podrás
                                        encontrar las mejores cervezas de Perú, es en este punto donde se presentan
                                        diariamente grupos de música para alegra aun más la feria gastronómica.
                                    </p>
                                    <img src="{{ asset('img/blog/Ceviche-Peruano-pacha-mama-Spirit.webp') }}"
                                        alt="Peruvian ceviche" loading="lazy" width="100%">
                                    <i>Peruvian ceviche</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.shareblogs')
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <h3 class="text-center">Blogs sugeridos</h3>
                        <a href="{{ route('fiestas-patrias-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/fiestas-patrias-Peru-Pacha-Mama-Spirit.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>Las fiestas patrias en Perú se celebran a lo grande alrededor de todo el país
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('las-mejores-playas-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/the-best-beaches-of-Peru.webp') }}"
                                        alt="Las mejores playas de Perú" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>En este Blog encontraras una guía completa con las mejores playas de Perú.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('semanasanta') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/santo_sepulcro.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>Conoce como se celebra la semana santa en Cusco</p>
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
