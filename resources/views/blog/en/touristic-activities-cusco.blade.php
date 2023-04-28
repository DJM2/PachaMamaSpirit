@extends('layouts.app')
@php    $titulo="10 Tourist Activities recommended to do in Cusco" @endphp
@php    $descripcion="Cusco is a city that offers a great variety of attractions and tourist activities for all tastes and budgets. From historical and cultural monuments, natural landscapes and adventures, exploring the impressive Inca archaeological remains, to tasting the delicious Peruvian gastronomy." @endphp
@php    $keywords="cusco, tourism in cusco, Cusco tourist places, tourism cusco, travel to cusco, discover cusco" @endphp
@php $img="https://pachamamaspirit.com/img/blog/ciudadela-machupicchu.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>{{ $titulo }}</h1>
                    <p class="text-center" style="color: #fff">Get to know and enjoy many tourist activities in the city of
                        Cusco</p>
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
                            <p><a href="{{ route('inicio') }}">Home</a> / <a href="{{ route('blog-peru') }}">Blog</a>
                                / <a>{{ $titulo }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">{{ $titulo }}</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseZero" aria-expanded="false"
                                    aria-controls="flush-collapseZero">
                                    Tourism in the city of Cusco “Navel of the World”
                            </h2>
                            <div id="flush-collapseZero" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingZero" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Cusco is a city that offers a great variety of attractions and tourist activities
                                        for all tastes and budgets. From historical and cultural monuments, natural
                                        landscapes and adventures, exploring the impressive Inca archaeological remains, to
                                        tasting the delicious Peruvian gastronomy, Cusco has something for every traveler.
                                        <br> But there is definitely a lot to see and do in Cusco and its surroundings. <br>
                                        In this article we will present the 10 best tourist activities you can do in Cusco.
                                    </p>
                                    <img src="{{ asset('img/blog/actividades-turisticas-en-cusco.webp') }}" loading="lazy"
                                        alt="Tourism in Cusco" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    1. Visit Machupicchu:
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The most famous Inca citadel in the world is without a doubt the main attraction of
                                        Cusco and Peru, declared a World Heritage Site by UNESCO and one of the seven
                                        wonders of the modern world. Machu Picchu is a magical and mysterious place that
                                        will leave you breathless with its beauty and history.<br>
                                        There are many reasons to visit this wonder of the world, Machu Picchu is a
                                        testimony to the greatness and mystery of the Inca civilization, which built this
                                        stone citadel over 500 years ago. Here you will be able to admire the architecture,
                                        astronomy, and engineering of this culture, which adapted to the natural environment
                                        with impressive wisdom. <br> In addition, you can enjoy the beauty and diversity of
                                        the flora and fauna that surround Machu Picchu, which is part of an ecological
                                        reserve. To get to Machu Picchu you can take the train from Ollantaytambo or if you
                                        like challenges, you can live a unique experience when you walk the Inca Trail, a
                                        hiking route that lasts between 2 and 4 days and that will take you through
                                        incredible landscapes until you reach to the sacred city<br> Or also follow one of
                                        its alternatives like Salkantay or Lares. Once in the sanctuary, you can tour its
                                        impressive buildings and admire the beauty of its natural environment. <br>
                                        Whichever option you choose, we recommend booking your ticket and transportation in
                                        advance, as there is a daily limit on visitors. <br> Do'nt hesitate anymore!
                                        Visiting Machu Picchu is an adventure not to be missed.

                                    </p>
                                    <img src="{{ asset('img/blog/ciudadela-machupicchu.webp') }}" width="100%"
                                        alt="Citadel of Machupicchu" loading="lazy">
                                    <i>Citadel of Machu Picchu</i> <br> <br><br>

                                    <img src="{{ asset('img/blog/camino-inca-hacia-machupicchu.webp') }}" width="100%"
                                        alt="Inca trail to Machupicchu" loading="lazy">
                                    <i>Inca Trail to Machupicchu</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    2. Explore the Sacred Valley of the Incas:
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The Sacred Valley of the Incas is a fertile and picturesque area, this valley is
                                        home to several archaeological sites, traditional towns and dream landscapes, such
                                        as Pisac, Ollantaytambo, Chinchero and Moray. <br> Some of the places you cannot
                                        miss are Pisac, with its craft market and its Inca complex; Ollantaytambo, with its
                                        fortress and its colonial village; and Chinchero, with its church and its weavers,
                                        all these places show the architecture, engineering and the worldview of this
                                        ancient culture. <br>
                                        In addition, in the Sacred Valley you can appreciate the rural life of the Andean
                                        inhabitants, their traditions and their crafts.<br>
                                        Visiting the Sacred Valley of the Incas is an unforgettable and unique experience.
                                        You can also enjoy typical gastronomy, handicrafts and adventure activities such as
                                        hiking, rafting or cycling. This visit is a way of enriching your spirit and
                                        knowledge, and of admiring one of the wonders of the world. <br> A good way to get
                                        to know the Sacred Valley is to take a one-day tour from Cusco that includes
                                        transportation, a guide, and lunch.


                                    </p>
                                    <img src="{{ asset('img/blog/ollantaytambo.webp') }}" width="100%" alt="Ollantaytambo"
                                        loading="lazy">
                                    <i>Ollantaytambo</i> <br><br><br>

                                    <img src="{{ asset('img/blog/mercado-de-pisac.webp') }}" width="100%"
                                        alt="Mercado de Pisac" loading="lazy">
                                    <i>Pisac Handicraft Market</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    3. Know and explore the city and the historical center of Cusco:
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The ancient capital of the Inca empire preserves its charm and its cultural richness
                                        in its streets, squares, churches and museums, it is a fascinating mixture of the
                                        old and the modern, where traces of the Inca past coexist with Spanish colonial
                                        buildings and cosmopolitan life current. <br> Do not forget to visit the Plaza de
                                        Armas, the Cathedral, the Temple of the Sun or Coricancha, the Santo Domingo
                                        Convent, the Inka Museum, the San Blas neighborhood, the San Pedro Market and nearby
                                        archaeological centers such as Sacsayhuamán, Qenqo, PucaPucara and Tambomachay.<br>
                                        Cusco is a city that will captivate you with its history, culture, and magic. Do not
                                        wait any longer and come discover it for yourself. I assure you you won't regret it!

                                    </p>
                                    <img src="{{ asset('img/blog/barrio-san-blas.webp') }}" width="100%"
                                        alt="San Blas neighborhood cusco" loading="lazy">
                                    <i>San Blas neighborhood</i> <br><br><br>

                                    <img src="{{ asset('img/blog/saqsayhuaman.webp') }}" width="100%" alt="saqsayhuaman"
                                        loading="lazy">
                                    <i>Sacsayhuaman Archaeological Complex</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    4. Take a gastronomic tour of the city and enjoy Peruvian cuisine:
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Peruvian cuisine is one of the most varied and renowned in the world, and in Cusco
                                        you can taste some of its most typical and delicious dishes.
                                        A gastronomic tour of the city of Cusco is an excellent way to learn about and enjoy
                                        the rich and varied Peruvian cuisine, which combines the flavors and ingredients of
                                        the Andes with the influences of other cultures. In this article we give you some
                                        suggestions for taking a gastronomic tour of Cusco and discovering its typical
                                        dishes, markets and restaurants. <br>
                                        The first thing you should do is visit the San Pedro market, the largest and most
                                        famous in Cusco, where you can find a great variety of local products, such as
                                        fruits, vegetables, grains, meats, cheeses, and breads. Here you can appreciate the
                                        diversity and quality of the food that is grown and produced in the Cusco region,
                                        following the traditions of Inca agriculture.<br>In addition, you can taste some
                                        typical snacks, such as choclo con queso (corn cooked with fresh cheese), anticucho
                                        (beef heart skewer), emollient (herbal hot drink) or fruit juice.<br>
                                        After touring the market, you can go to one of the restaurants that offer
                                        gastronomic tours in Cusco, where you can learn to prepare and try some traditional
                                        dishes of Peruvian cuisine. For example, you can learn how to make ceviche (raw fish
                                        marinated in lemon and chili), lomo saltado (sautéed meat with onion, tomato, and
                                        French fries), causa rellena (cold potato pie with tuna or chicken filling) or the
                                        ají de gallina (spicy cream of frayed chicken). You can also taste some typical
                                        drinks, such as the pisco sour (cocktail made of pisco, lemon and egg white) or the
                                        chicha morada (sweet drink made of purple corn).<br>
                                        Finally, you can't stop trying some traditional desserts from Cusco, such as suspiro
                                        a la limeña (sweet cream covered with meringue), arroz con leche (rice cooked with
                                        milk and cinnamon) or picarón (fried fritter made of pumpkin dough and sweet
                                        potato). These desserts are a delight for the palate and a sample of the fusion
                                        between Andean and Spanish cuisine.<br>
                                        As you can see, a gastronomic tour of Cusco is a unique and unforgettable experience
                                        that will allow you to get to know and enjoy the culinary richness of Peru. Do not
                                        hesitate to book your gastronomic tour in Cusco and prepare to delight your senses
                                        with the flavors and aromas of this wonderful city.
                                    </p>
                                    <img src="{{ asset('img/blog/mercado-san-pedro.webp') }}" width="100%"
                                        alt="San pedro market" loading="lazy">
                                    <i>San Pedro Market</i> <br> <br><br>

                                    <img src="{{ asset('img/blog/cebiche-lomo-saltado.webp') }}" width="100%"
                                        alt="Ceviche and Lomo Saltado" loading="lazy">
                                    <i>Peruvian Ceviche and Lomo Saltado</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    5. Tour the most important Museums and learn about the Inca and pre-Inca culture:
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        If you want to know more about the cultural and historical richness and art of
                                        Cusco, a good option is to visit its museums. There are museums for all tastes and
                                        ages, from those that display the legacy of pre-Columbian civilizations to those
                                        that display contemporary art and local traditions. <br> Here we introduce you to
                                        some of the main museums in Cusco that you can include in your itinerary.<br>

                                    <ul>
                                        <li>
                                            Inca Museum or Admiral's Palace: Here more than 40 thousand archaeological
                                            pieces that belonged to the Inca culture and other pre-Inca cultures are
                                            exhibited.
                                        </li>
                                        <li>
                                            Museum of Pre-Columbian Art: Here you can appreciate more than 400 pieces of
                                            ceramic, metal, wood and textiles that represent the art of the pre-Hispanic
                                            cultures of Peru, such as the Chavín, Paracas, Mochica, Nazca, Wari, Lambayeque,
                                            Chimú and Inca.
                                        </li>
                                        <li>
                                            Contemporary Art Museum: Here, works by Cusco and Peruvian artists are exhibited
                                            that reflect the diversity and richness of national art.
                                        </li>
                                        <li>
                                            Museo de Arte Religioso or Palacio Arzobispal: Here you can admire paintings,
                                            sculptures, altarpieces and religious objects that show the influence of
                                            European art and syncretism.
                                        </li>
                                        <li>Inca Museum or Admiral's Palace: Here more than 40 thousand archaeological
                                            pieces that belonged to the Inca culture and other pre-Inca cultures are
                                            exhibited.</li>
                                        <li>Museum of Pre-Columbian Art: Here you can appreciate more than 400 pieces of
                                            ceramics, metal, wood and textiles that represent the art of the pre-Hispanic
                                            cultures of Peru, such as the Chavín, Paracas, Mochica, Nazca, Wari, Lambayeque,
                                            Chimú and Inca.
                                        </li>
                                        <li>Contemporary Art Museum: Here, works by Cusco and Peruvian artists are exhibited
                                            that reflect the diversity and richness of national art.</li>
                                        <li>Religious Art Museum or Archbishop's Palace: Here you can admire paintings,
                                            sculptures, altarpieces, and religious objects that show the influence of
                                            European art and syncretism with Andean art.</li>
                                        <li>Regional Museum of History and House of the Inca Garcilaso de la Vega: Here you
                                            can see the writer's personal objects, as well as paintings, documents and
                                            furniture that tell the story of Cusco from the Inca period to the republic.
                                        </li>
                                        <li>Natural History Museum: Here you can see more than 5,000 specimens of flora and
                                            fauna from Peru, as well as fossils, rocks and minerals.</li>
                                        <li>The Planetarium of Cusco: The museum known as the Planetarium of Cusco is a
                                            cultural and educational attraction that offers visitors the opportunity to
                                            learn about the astronomy of the Incas and observe the night sky of the south.
                                        </li>
                                        <li> The ChocoMuseo: It is a museum dedicated to cacao and chocolate in the city of
                                            Cusco.
                                            In this museum you can learn about the history, cultivation, and production of
                                            chocolate from organic Peruvian cocoa beans.</li>
                                    </ul> <br>

                                    These are just some of the museums you can visit in Cusco to learn more about its past
                                    and present, each with its own charm and value. There are also other free or specialized
                                    museums that you can explore if you have more time or interest, such as the Museo del
                                    Café, the Museo del Pisco, the Museo Maximo Laura or the Museo de Vida Monástica. <br>
                                    We invite you to discover them and enjoy the cultural richness of Cusco, we recommend
                                    that you visit the ones that interest you the most and that you enjoy the cultural
                                    experience they offer you.
                                    </p>
                                    <img src="{{ asset('img/blog/museo-inca.webp') }}" width="100%"
                                        alt="Inka Museum of Cusco" loading="lazy">
                                    <i>Cusco Inka Museum</i> <br><br><br>

                                    <img src="{{ asset('img/blog/planetario-cusco.webp') }}" width="100%"
                                        alt="Planetarium Cusco" loading="lazy">
                                    <i>Planetarium - Cusco</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    6. Go on an excursion to the Mountain of 7 Colors or Vinicunca:
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The Rainbow Mountain or Vinicunca is a unique geological formation that displays a
                                        range of incredible colors due to erosion and mineralization of the soil. It is
                                        located about 100 km south of Cusco and at an altitude of 5,200 meters above sea
                                        level, this mountain presents a range of colors that is due to the presence of
                                        different minerals, making it one of the most spectacular natural phenomena in Cusco
                                        and therefore one of the most impressive and fascinating destinations that
                                        this city has. To get to Vinicunca you have to walk for about 3 hours from the town
                                        of Cusipata or take a four-wheel drive tour from Pitumarca. <br>
                                        Visiting the mountain of colors is a unique and unforgettable experience that
                                        requires good physical and logistical preparation. The tour can be done in one day
                                        from Cusco, taking a transport to the town of Pitumarca or Pampa Chiri, where the
                                        walk or the ascent by horse to the Vinicunca viewpoint begins.
                                        The journey takes between two and three hours, depending on the pace and
                                        acclimatization of each person.<br>

                                        Along the way, you can appreciate the beauty of the Andean landscape, with its
                                        snow-capped peaks, lagoons, valleys and peasant communities. You can also see the
                                        typical flora and fauna of the area, such as llamas, alpacas, vicuñas and condors.
                                        The mountain of colors offers a visual spectacle like no other, with its bands of
                                        pink, white, red, green, brown and mustard yellow, which contrast with the blue
                                        sky.<br>

                                        The best time to visit the Rainbow Mountain is between April and October, when there
                                        is less rain and the weather is more favorable. It is recommended to bring warm,
                                        waterproof clothing, sunscreen, hat, sunglasses, water and snacks. It is also
                                        advisable to drink coca tea or soroche pills, and avoid alcohol or heavy meals
                                        before the trip.<br>

                                        The rainbow mountain or Vinicunca is a magical and surprising place, which deserves
                                        to be known and respected by all visitors. It is a sample of the natural and
                                        cultural wealth of Cusco, which invites you to enjoy and care for our country's
                                        heritage.

                                    </p>
                                    <img src="{{ asset('img/blog/vinicunca.webp') }}" width="100%" alt="vinicunca"
                                        loading="lazy">
                                    <i>Vinicunca Mountain or Rainbown Mountain</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    7.Enjoy the hot springs of Lares or Cocalmayo:
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        After a day of walking or exploring, there is nothing better than relaxing in a
                                        natural pool of warm water. Lares and Cocalmayo are two options for taking a
                                        therapeutic bath surrounded by nature and tranquility. <br>
                                        The hot springs of Lares and Cocalmayo are two unmissable destinations for travelers
                                        looking to relax and enjoy the benefits of medicinal waters in the natural
                                        environment of Cusco. These waters come from subterranean sources of volcanic origin
                                        and have therapeutic properties for the skin, muscles and the nervous system.<br>

                                        The hot springs of <strong> Lares </strong> are located in the district of the same
                                        name, about a four-hour drive from Cusco. The place has four swimming pools of
                                        different temperatures, surrounded by vegetation and mountains. It is an ideal place
                                        to combine with a hike through the Lares valley or a visit to Machu Picchu, since
                                        they can be accessed from the Inca trail or from the train.<br>

                                        The <strong>Cocalmayo </strong>hot springs are located in the Santa Teresa district,
                                        about a three-hour drive from Cusco. The place has three large swimming pools, with
                                        crystalline turquoise waters that contrast with the green of the landscape. It is a
                                        perfect place to relax after an adventure through the jungle or the mountains, since
                                        they can be reached from the hydroelectric or from the town of Aguas Calientes.<br>

                                        Both destinations offer a unique experience of connection with nature and Andean
                                        culture, as well as an opportunity to recuperate energy and health. Therefore, if
                                        you visit Cusco and want to enjoy the hot springs of Lares and Cocalmayo, we
                                        recommend you book a tour in advance and bring comfortable clothing, a towel,
                                        swimsuit, and sunscreen.
                                    </p>

                                    <img src="{{ asset('img/blog/cocalmayo-baños.webp') }}" width="100%"
                                        alt="Hot Springs Cocalmayo" loading="lazy">
                                    <i>Hot Springs of Cocalmayo - Cusco</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    8. Admire the Humantay Lake:
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This lagoon is another of the most beautiful natural attractions in Cusco, since it
                                        has an intense turquoise color that contrasts with the white of the Humantay
                                        mountain.<br>
                                        The Humantay lagoon is a natural wonder that is located in Cusco, near the SalKantay
                                        snow-capped mountain. It is an ideal destination for nature and hiking lovers, as it
                                        offers a spectacular landscape of turquoise waters surrounded by mountains and snow.
                                        <br> To visit the Humantay lagoon you need to have a good acclimatization to Cusco,
                                        since it is located at 4200 meters above sea level. The tour starts in Mollepata,
                                        where you take a taxi to Soraypampa, the starting point of the hike. The journey
                                        takes about an hour and a half and has a moderate degree of difficulty. Arriving at
                                        the lagoon you can appreciate its beauty and participate in an Andean ritual in
                                        honor of Pachamama, Mother Earth. You can also camp near the lagoon and enjoy the
                                        sunset and the sunrise. In addition, you can taste the typical cuisine of the area,
                                        such as patasca, chumos stew or chicha de jora.<br>
                                        The most recommendable thing is also to take a TOUR that includes transportation and
                                        a guide.
                                        The Humantay Lagoon is a magical and sacred place that is worth visiting if you
                                        travel to Cusco.
                                    </p>

                                    <img src="{{ asset('img/blog/laguna-humantay.webp') }}" width="100%"
                                        alt="Humantay Lake" loading="lazy">
                                    <i>Humantay Lake</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    9. See the most beautiful sunrise in the world at Tres Cruces de Oro:
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This lookout offers a privileged view of the optical phenomenon known as "the
                                        spectacle of the sun." It is a play of light and color that occurs when the sun
                                        rises from behind the mountains and is reflected in the clouds.<br>
                                        Tres Cruces de Oro is located in the Manu National Park, in the region of Cusco,
                                        Peru. From this place you can see one of the most spectacular phenomena of nature:
                                        the Andean dawn. This consists of the appearance of three luminous crosses on the
                                        horizon, which are formed by the refraction of solar rays in the layers of hot and
                                        cold air. These crosses change color and shape as the sun rises, creating a unique
                                        and unforgettable show.<br>

                                        Visiting Tres Cruces de Oro is an experience that is worth living at least once in a
                                        lifetime. You can not only enjoy the Andean dawn, but also the biodiversity and
                                        culture of the area. The Manu National Park is one of the most important natural
                                        reserves in the world, which is home to a wide variety of flora and fauna species,
                                        many of them endemic and endangered.
                                        In addition, in the surroundings you can meet the native communities that preserve
                                        their traditions and ancestral customs.<br>

                                        To visit Tres Cruces de Oro you need a special permit from the National Service for
                                        Natural Areas Protected by the State (SERNANP), since it is a restricted and
                                        protected zone. It is also recommended to hire a local guide who knows the way and
                                        the weather conditions. The best time to go is between May and August, when the sky
                                        is clearer and there is less chance of rain. You must get up very early, since dawn
                                        occurs between 5:30 and 6:00 in the morning. It is recommended to bring warm
                                        clothes, water, food and a camera to capture this wonderful moment.
                                    </p>

                                    <img src="{{ asset('img/blog/tres-cruces-de-oro.webp') }}" width="100%"
                                        alt="Tres Cruces de Oro Lookout" loading="lazy">
                                    <i>Sunrise at the Tres Cruces de Oro Lookout</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    10. Defy the height in the Putucusi Mountain:
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This mountain faces Machu Picchu and offers a panoramic view of the Inca sanctuary.
                                        To go up to Putucusi, you have to overcome a series of vertical stairs and steep
                                        sections that require a lot of strength and courage. It is only recommended for
                                        people who are in good physical condition and without vertigo. <br>
                                        If you are a lover of nature and adventure, you cannot miss visiting it. It is one
                                        of the highest and most challenging peaks in the area, which offers spectacular
                                        views of the Sacred Valley of the Incas and the Machu Picchu citadel.<br>

                                        To reach the top of Putucusi, which means "happy mountain" in Quechua, you have to
                                        overcome a route of about 3 kilometers that includes wooden stairs, hanging
                                        walkways, steep paths and slippery rocks. The ascent can last between one and two
                                        hours, depending on one's pace and physical condition. It is recommended to wear
                                        comfortable clothing, appropriate shoes, water, sunscreen, and a hat.<br>

                                        Once at the top, you can enjoy a 360 degree panoramic view that encompasses the
                                        Urubamba River, the surrounding mountains and the imposing Machu Picchu.
                                        You can also see the typical flora and fauna of the area, such as orchids,
                                        bromeliads, hummingbirds, and condors. Also, you can feel the mystical energy
                                        emanating from this sacred place for the ancient Incas.<br>

                                        Putucusi Mountain is an ideal option for travelers who are looking for a different
                                        and exciting experience in Cusco. It is a way of connecting with nature, history and
                                        culture of this wonderful region. Of course, we must bear in mind that this is a
                                        demanding activity and not suitable for people with vertigo or heart problems. It is
                                        also necessary to respect the safety and conservation regulations of the place.<br>
                                        If you dare to visit Putucusi Mountain, you will not regret it. It is an adventure
                                        that will leave you breathless and unforgettable memories.
                                    </p>

                                    <img src="{{ asset('img/blog/putucusi.webp') }}" width="100%"
                                        alt="Putucusi mountain" loading="lazy">
                                    <i>Putucusi Mountain Ascenti</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false"
                                    aria-controls="flush-collapseEleven">
                                    Curious Tourist Information about the city of Cusco
                                </button>
                            </h2>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <ul>
                                        <li>The city of Cusco, in Quechua "Qosqo", means "navel of the world", and it was
                                            the capital of the Inca Empire.</li>
                                        <li> The city of Cusco boasts impressive Spanish colonial architecture, mixed with
                                            Inca architecture, and was declared a UNESCO World Heritage Site in 1983.</li>
                                        <li> The stone of the twelve angles, located in a wall in the San Blas neighborhood,
                                            is one of the most famous Inca structures in the city and is known for its
                                            precision and detail in carving.</li>
                                        <li>The Temple of the Sun, also known as the Coricancha, was the holiest place in
                                            the Inca Empire and was completely covered in gold. Today, only some walls and
                                            foundation remain.</li>
                                        <li> The neighborhood of San Blas is known as the neighborhood of artisans and has
                                            workshops and shops selling leather products, ceramics, textiles and jewelry.
                                        </li>
                                        <li> The city of Cusco is the starting point to visit the world-famous Machu Picchu
                                            citadel, which is one of the wonders of the modern world and is located about 80
                                            km northwest of the city.</li>
                                    </ul>
                                    <p>
                                        In our article we show you just some of the many tourist activities that Cusco
                                        offers you.<br>
                                        In conclusion, if you are looking for a tourist destination that offers you culture,
                                        nature, adventure and fun, then you cannot miss visiting the city of Cusco, the
                                        ancient capital of the Inca empire and one of the most beautiful cities in Peru.
                                        Cusco has a lot to offer and guarantees you an unforgettable experience.<br> Don't
                                        wait any longer and book your trip to this wonderful city. We assure you that you
                                        won't regret it!

                                    </p>

                                    <img src="{{ asset('img/blog/plaza-de-armas-cusco.webp') }}" width="100%"
                                        alt="Main Square cusco" loading="lazy">
                                    <i>Cusco Main Square</i>
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
