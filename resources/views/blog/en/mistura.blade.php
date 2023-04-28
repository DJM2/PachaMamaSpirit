@extends('layouts.appen')
@php $titulo="Mistura, the largesto gastronomic fair in latin america" @endphp
@php $descripcion="This Peruvian and <strong>international gastronomy fair is held annually in Lima every first half of September" @endphp
@php $keywords="Mistura, mistura Peru, mistura 2024, mistura gastronomic fair" @endphp
@php $img="https://pachamamaspirit.com/img/blog/productos-peruanos-gastronomia.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Mistura - Peru</h1>
                    <p class="text-center" style="color: #fff">The largest gastronomic fair in Latin America</p>
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
                                / <a>Fiestas patrias Perú</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">The gastronomic fair Mistura</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Introduction to Peruvian products
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This Peruvian and <strong>international gastronomy fair</strong> is held
                                        annually in Lima every
                                        first half of September and is one of the most fascinating pantries in South
                                        America.<br><br>

                                        This wealth is due to the hand of the Peruvian man as well as to the immense
                                        amount of products that Peruvian soils offer us, thanks to its ecological
                                        diversity by the Andes mountain range that allow Peru to have 85 types of
                                        geography and with this that it has the same number of climates.<br><br>

                                        Organized by the Peruvian Society of Gastronomy (Apega), a civil and non-profit
                                        association that was founded by the renowned Peruvian chef Gastón Acurio. It is
                                        recognized as the most important food festival in Latin America.
                                    </p>
                                    <img src="{{ asset('img/blog/productos-peruanos-gastronomia.webp') }}" loading="lazy"
                                        alt="Peruvian products" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Peruvian cuisine
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Peruvian food has had a great history over the years. Every time recipes and
                                        flavors from different parts of the world have been compiled, in order to have
                                        the particular Peruvian food.<br><br>

                                        Peruvian gastronomy was recognized as 'Cultural Heritage of the Americas for the
                                        world' thanks to the 'Organization of the USA'. It is one of the most important
                                        foods in the world and a great example of fusion cuisine.<br><br>

                                        Peruvian food has become very fashionable in Europe in recent times, especially
                                        in countries like Spain. Peruvian food has a lot of history and miscegenation,
                                        also full of traditions and customs.<br><br>

                                        Peruvian cuisine is the one with the most typical dishes in the world. Only the
                                        coast has registered around 2,500 different types of soups and 250 desserts.
                                        Peru is also known for having the largest amount of potatoes in the world, with
                                        more than 3 thousand types of potatoes. Lima is recognized as the gastronomic
                                        capital of America.<br><br>

                                        To add even more prestige to the gastronomy of this country, Peru would have won
                                        five times the first place in The World's 50 Best Restaurants in Latin America
                                        list, with the 'Central' Restaurant, in 2014, 2015, 2016, 2021 and 2022. La
                                        Central was also positioned as the 4th best restaurant in the world in 2021 and
                                        2nd in 2022.
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
                                    Curiosities of Mistura
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Mistura means 'mixture'. </li>
                                        <li>The entrance to this great gastronomic fair is paid and depending on the
                                            day, it can cost between 15 and 25 soles (between 5 and 8 dollars).</li>
                                        <li>You have to buy tickets or tickets to be able to taste the food at each
                                            stall.</li>
                                        <li>Inside the fair, you will find a wide variety of food tents.</li>
                                        <li>You can also buy different types of typical products from the regions of
                                            Peru within the fair market.</li>
                                        <li>It originates from the year 2007 in Lima, Peru.</li>
                                        <li>Mistura is the largest and most recognized gastronomic fair in all of Latin
                                            America. It is a fair organized by the Peruvian Society of Gastronomy
                                            (APEGA)</li>
                                    </ul>
                                    <img src="{{ asset('img/blog/Mistura-2017.webp') }}" width="100%" loading="lazy"
                                        alt="Feria Mistura">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Food classification in Mistura
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Mistura has organized the food that is exhibited into various 'Worlds'. Each
                                        tent represents a 'World' with a specific gastronomic proposal from each region.
                                        They are classified in:
                                    </p>
                                    <ul>
                                        <li>Embers and anticuchos</li>
                                        <li>Ceviches</li>
                                        <li>Chifa y Nikkei</li>
                                        <li>Andean and Amazonian</li>
                                        <li>Sweet</li>
                                        <li>Sandwiches</li>
                                        <li>Wheelbarrows</li>
                                        <li>Pubs</li>
                                        <li>Pisco & Wine</li>
                                        <li>Brewer</li>
                                    </ul>
                                    <p>
                                        With this example you can realize that the Mistura fair is huge and of course
                                        you can find places where you can sit comfortably to taste these exquisite
                                        dishes.<br><br>

                                        Among the most famous drinks you can find the Pisco sour and the chilcano. At
                                        the end of the entire fair you can find the beer point, where you can find the
                                        best beers in Peru, it is at this point where music groups perform daily to
                                        further enliven the gastronomic fair.
                                    </p>
                                    <img src="{{ asset('img/blog/Ceviche-Peruano-pacha-mama-Spirit.webp') }}"
                                        alt="Peruvian-ceviche" loading="lazy" width="100%">
                                    <i>Peruvian ceviche</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.shareblogs')
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <h3 class="text-center">Other themes</h3>
                        <a href="{{ route('national-holidays-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/fiestas-patrias-Peru-Pacha-Mama-Spirit.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada" loading="lazy">
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
                                        alt="Playas de Perú" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>The complete life of Santa Rosa de Lima and her canonization</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('the-best-beaches-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/the-best-beaches-of-Peru.webp') }}"
                                        alt="Las mejores playas de Perú" class="imgCuadrada" loading="lazy">
                                </div>
                                <div class="col-8">
                                    <p>Get to know a list of the best beaches that Peru has to offer</p>
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
