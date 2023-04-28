@extends('layouts.appen')
@section('titulo', 'Holy Week in Cusco 2024 | Peru')
@php $titulo="Holy Week in Cusco 2024 | Peru" @endphp
@php $descripcion="Holy Week in Cusco is a religious celebration that takes place during the last week of Lent, which begins on Palm Sunday and ends on Easter Sunday." @endphp
@php $keywords="Holy Week in Cusco 2024, costums Peru, cusco religion" @endphp
@php $img="https://pachamamaspirit.com/img/blog/semana-santa-en-cusco.webp" @endphp
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>{{ $titulo }}</h1>
                    <p class="text-center" style="color: #fff">One of the most important religious events in the city of
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
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a href="{{ route('blog-peru') }}">Blog</a>
                                / <a>{{$titulo}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">Holy Week in Cusco</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What is it and what are its most important activities?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Holy Week in Cusco is a religious celebration that takes place during the last week
                                        of Lent, which begins on Palm Sunday and ends on Easter Sunday. During this week,
                                        the city of Cusco is filled with celebrations, processions, and rituals
                                        commemorating the death and resurrection of Jesus Christ.
                                        <br><br>
                                        If you are interested in finding out more about this festivity, I recommend that you
                                        visit the city of Cusco during Holy Week.
                                    </p>
                                    <img src="{{ asset('img/blog/semana-santa-en-cusco.webp') }}" loading="lazy"
                                        alt="Productos peruanos" width="100%"> <br><br>
                                    <p>Some of the activities carried out include:
                                    <h3>Processions</h3>
                                    The processions are a fundamental part of the Holy Week in Cusco. During this week, the
                                    city streets are filled with people following the religious images that are carried in
                                    procession. The most important of all the processions is that of Holy Monday, in which
                                    the image of the Lord of the Earthquakes "Señor de los Temblores" is carried through the
                                    streets of Cusco. This
                                    procession is considered one of the largest in Latin America.<br><br>
                                    <h3>The masses and rituals</h3>
                                    During Holy Week in Cusco, various religious masses and rituals are held in the
                                    different churches of the city. One of the most important is the Misa del Pueblo, which
                                    is celebrated on Holy Thursday in the church of San Francisco. This mass is very popular
                                    among the inhabitants of Cusco, who go to the church to listen to the music and
                                    traditional songs that are interpreted during the ceremony.<br> <br>
                                    <h3>The typical food</h3>
                                    During Easter in Cusco, it is also possible to enjoy the typical food of the region. All
                                    based on fish, seafood and vegetables, since during this week the consumption of red
                                    meat is prohibited according to religious customs.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Day by Day of Holly Week in Cusco
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <h3>Palm Sunday:</h3>
                                    <p>This day marks the beginning of Holy Week and is celebrated all over the Christian
                                        world. During this day, various activities take place in Cusco that are part of the
                                        region's traditions. One of the most important is the procession of the palms, where
                                        the faithful carry palm branches and olive leaves that are blessed in the church and
                                        then carried in procession through the city streets. In addition, during Palm Sunday
                                        in Cusco, the representation of the triumphant entry of Jesus into Jerusalem is
                                        carried out, which is one of the most emblematic scenes of Holy Week. During this
                                        representation, the arrival of Jesus in Jerusalem mounted on a donkey is recreated,
                                        while the crowd welcomes him with palm branches and olive leaves. Another important
                                        activity that is carried out during Palm Sunday in Cusco is the decoration of
                                        churches and houses with palm branches and flowers, to receive divine blessing and
                                        protection.

                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/domingo-de-ramos.webp') }}" width="100%"
                                        alt="Palm Sunday" loading="lazy">
                                    <i>Palm entrance</i> <br><br>

                                    <h3> Easter Monday:</h3>
                                    <p>Holy Monday is one of the most important days of Easter in Cusco, Peru. During this
                                        day, various religious and cultural activities are held in honor of Easter.<br>
                                        One of the main activities that takes place in Cusco on Holy Monday is the
                                        procession of the Señor de los Temblores. This procession is one of the most
                                        important and oldest in Latin America and it has been held since the 16th century.
                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/lunes-santo.webp') }}" width="100%"
                                        alt="procession easter monday" loading="lazy">
                                    <i>Holy Monday procession</i> <br><br>

                                    <p>Other religious activities that take place on Holy Monday include masses and
                                        ceremonies in the city's churches, as well as the Rosary in the Plaza de Armas.<br>
                                        In addition to religious activities, various cultural events are also held in Cusco
                                        on Holy Monday. One of the most outstanding is the Chicha Festival, which takes
                                        place in the district of San Sebastián. During this festival, chicha, a traditional
                                        fermented corn-based drink, is offered, accompanied by food and typical music.
                                    </p>
                                    <h3> Maundy Tuesday:</h3>
                                    <p>Easter Tuesday is a day of great devotion in Cusco. The Mass of the Holy Oils is
                                        celebrated in the Cusco Cathedral, where the sacred oils that will be used
                                        throughout the year in the sacraments are blessed.
                                    </p> <br>
                                    <h3> Easter Wednesday:</h3>
                                    <p>Holy Wednesday is known as "Confession Day" in Cusco. People go to confession to
                                        receive absolution before Holy Week. At night, the "Encuentro de las Imágenes" is
                                        held in the Plaza de Armas, where images of Christ and the Virgin Mary are placed
                                        together to represent their reunion after the Resurrection. <br>
                                        Another of the activities that take place in Cusco on Holy Wednesday is the
                                        procession of the Virgin of Sorrows. This procession, which is also very important
                                        in the region, consists of carrying an image of the Virgen de los Dolores through
                                        the streets of the city in a journey that begins at the church of La Merced and ends
                                        at the cathedral of Cusco.
                                    </p> <br>
                                    <h3> Maundy Thursday:</h3>
                                    <p>Holy Thursday is known as the "Day of the Institution of the Eucharist and of the
                                        Washing of Feet."<br>
                                        One of the most important activities that take place is the Last Supper Mass, which
                                        is celebrated in the cathedral of Cusco. During this mass, the last supper that
                                        Jesus shared with his disciples before being crucified is commemorated, and the
                                        foot-washing ceremony is performed, in which the priest washes the feet of twelve
                                        people representing the twelve apostles.<br>
                                        Some Families eat the so-called twelve dishes, in commemoration of the last supper.
                                        Other families opt to do it on Holy Friday.
                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/jueves-santo-lavado-de-pies.webp') }}" width="100%"
                                        alt="Easter Thursday" loading="lazy">
                                    <i>Washing of Feet</i> <br><br>
                                    <h3> Holy Friday:</h3>
                                    <p>Holy Friday is a day of great devotion in the entire Christian world. In Cusco, a
                                        "Holy Sepulchre" procession is held, in which the image of the dead Christ is
                                        carried in a coffin adorned with flowers.<br> This procession begins at the
                                        Cathedral of Cusco and runs through the streets of the city.
                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/santo_sepulcro.webp') }}" width="100%"
                                        alt="Holy Sepulchre" loading="lazy">
                                    <i>Christ of Holy Sepulcher</i> <br><br>
                                    <p>In the cultural field, during Good Friday in Cusco the traditional Fair of Flowers
                                        and Plants, called in Quechua "Hampi Rantikuy" takes place in the Plaza de San
                                        Francisco.<br> At this fair, you can find various varieties of flowers and plants
                                        that are used to decorate processions and altars during Holy Week.</p><br><br>
                                    <img src="{{ asset('img/blog/hampirantikuy-viernes-santo.webp') }}" width="100%"
                                        alt="hampirantikuy" loading="lazy">
                                    <i>"Hampirantikuy"</i> <br><br>
                                    <h3> Glory Saturday</h3>
                                    <p>Holy Saturday or Saturday of glory, is a day of silence and reflection in Cusco. The
                                        Catholic Church considers it the day Jesus Christ rested in the tomb after his
                                        crucifixion. <br>At night, an Easter vigil is held in the Cathedral of Cusco.
                                    </p> <br>
                                    <h3>Resurrection Sunday:</h3>
                                    <p>Resurrection Sunday is the most important day of Holy Week in the entire Christian
                                        world. In Cusco, a Resurrection procession is held, in which the image of the risen
                                        Christ is carried through the streets of the city. <br>It is a day of joy and
                                        celebration for the Christians of Cusco and the whole world.
                                    </p> <br><br>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    History of the Lord of Earthquakes "Señor de los Temblores" and his procession.
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Historical Overview:</h3>

                                    <p>
                                        The Lord of Earthquakes is one of the most venerated religious images in the city of
                                        Cusco. Legend has it that the image of Cristo Moreno was painted by an Angolan slave
                                        in the seventeenth century. <br>According to the story, an earthquake struck the
                                        city of Cusco in 1650, and the image of the Lord of Earthquakes was carried in
                                        procession through the streets of the city, stopping at the epicenter of the
                                        tremor.<br>
                                        After the procession, the tremors stopped and the image was considered miraculous by
                                        the people of Cusco.
                                    </p> <br>
                                    <img src="{{ asset('img/blog/señor de los temblores.webp') }}" width="100%"
                                        loading="lazy" alt="señor de los temblores">
                                    <i>Lord of the Tremors "Cristo Moreno"</i> <br><br>

                                    <h3>Procession</h3>

                                    <p>
                                        The procession of the Señor de los Temblores takes place every year on Holy Monday,
                                        and is one of the most important of Holy Week in Cusco. The image is carried on a
                                        litter from the Church of La Merced to the Cusco Cathedral. The procession is long
                                        and exciting, and the image is accompanied by music bands and crowds of worshipers
                                        who join the journey.<br>
                                        The procession begins around 3 in the afternoon, when the image of the Lord of the
                                        Earthquakes is taken from the Church of La Merced and placed on a wooden platform,
                                        covered with flowers and candles. The image is carried on the shoulders of the
                                        porters, and is followed by a crowd of faithful who carry candles and palm
                                        branches.<br>
                                        The route of the procession of the Lord of the Earthquakes stretches for several
                                        kilometers, and the image makes several stops in different churches and sacred
                                        places in the city. During the procession, scenes of great devotion and emotion can
                                        be seen, such as faithful who kneel and pray, and people who throw red flower petals
                                        known as "Ñucchu" as the image passes.<br>

                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/procesion-temblores.webp') }}" width="100%"
                                        loading="lazy" alt="procession señor de los temblores">
                                    <i> Path of the "Señor de los Temblores" </i> <br><br>
                                    <p>
                                        Finally, the procession arrives at the Cusco Cathedral, where the image is received
                                        with a solemn mass. After the mass, the image is taken back to the Iglesia de La
                                        Merced, where it is venerated by the faithful throughout the Holy Week.<br>
                                        The procession of the Señor de los Temblores is one of the oldest and most revered
                                        traditions of Holy Week in Cusco, and is an event that attracts thousands of
                                        faithful each year. The image of Señor de los Temblores is considered a protector of
                                        the city, and its procession is a moment of great emotion and devotion for the
                                        people of Cusco.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    The traditional 12 dishes
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        During Holy Week in Cusco, particularly during Holy Thursday and Good Friday, it is
                                        customary not to consume meat, so the dishes and desserts that are prepared are
                                        based on fish, shellfish, and vegetables.
                                    </p><br><br>
                                    <img src="{{ asset('img/blog/12-platos-cristo.webp') }}" width="100%"
                                        loading="lazy" alt="holy week dishes">
                                    <br><br>
                                    <p>
                                        That is why families in Cusco have the tradition of consuming a variety of sweet and
                                        savory dishes that together add up to 12. Doing it on Thursday or Good Friday
                                        according to the personal preference of each family.
                                    </p>
                                    <img src="{{ asset('img/blog/12-platos.webp') }}" width="100%" loading="lazy"
                                        alt="holy week 12 dishes">
                                    <i> 12 sweet and savory dishes</i> <br><br>
                                    <p>
                                        Next, we will see the 12 most common dishes and desserts during Easter in Cusco:
                                    </p>
                                    <h3> Dishes:</h3>
                                    <ul>
                                        <li>Chupe de Camarones: A thick shrimp soup with potatoes, cheese, and spices. It is
                                            a very popular dish in the Andean region of Peru and it is perfect for a family
                                            dinner.</li>
                                        <li>Corn cream: It is a creamy and thick soup made from white corn and cheese, which
                                            is prepared with simple ingredients, but with a very characteristic flavor.</li>
                                        <li>Lisas Soup (Ollucos): A nutritious soup based on ollucos, which are a type of
                                            Andean tuber, and other vegetables that make it very pleasant to the palate.
                                        </li>
                                        <li>Rice with seafood: A preparation based on rice, seafood, peppers and onion. It
                                            is a dish that is served hot and is ideal to share.</li>
                                        <li>Fried Fish: A potato filled with tuna, egg and olives, breaded and fried. It is
                                            a very flavorful and filling dish.</li>
                                        <li>Menestras stews: A preparation of fish cooked with onion, pepper, carrot and
                                            spices, marinated in vinegar. This is a fresh and delicious dish.</li>
                                    </ul>

                                    <img src="{{ asset('img/blog/chupe-de-camarones.webp') }}" width="100%"
                                        loading="lazy" alt="chupe de camarones">
                                    <i> Chupe de Camarones</i> <br> <br>
                                    <img src="{{ asset('img/blog/sopa-de-lisas.webp') }}" width="100%" loading="lazy"
                                        alt="sopa de lisas">
                                    <i> Lisas Soup (ollucos)</i> <br><br>
                                    <img src="{{ asset('img/blog/pescado-frito.webp') }}" width="100%" loading="lazy"
                                        alt="pescado frito">
                                    <i> Fried Fish</i> <br><br>
                                    <h3>Desserts:</h3>
                                    <ul>
                                        <li>Rice pudding: A rice-based dessert cooked in milk and sweetened with sugar,
                                            cinnamon, and raisins. It is a very traditional dessert from the Andean region
                                            of Peru.</li>
                                        <li>Mazamorra de chancaca: It is a typical dessert from the Cusco region in Peru,
                                            which is prepared with chancaca (a type of brown sugar made from sugar cane),
                                            purple corn, cinnamon and other ingredients. The Mazamorra de chancaca cusqueña
                                            is usually served cold, and it is a sweet and comforting dessert that you can
                                            enjoy at any time of the year.</li>
                                        <li>Peach Stew: It is a dessert made from peaches, sugar and cinnamon, among other
                                            ingredients, served cold and is quite refreshing and delicious.</li>
                                        <li> Countess and Maicillos: Countess are small sweet snacks made with flour,
                                            butter, egg, sugar and anise. The dough is kneaded and cut into small portions,
                                            which are then baked until golden and crispy. They are served as a side to tea
                                            or coffee.<br>
                                            Likewise, the Maicillos are sweet cookies made with corn and sugar. The corns
                                            have a soft texture and a delicate flavor.</li>
                                        <li>Sighs: This dessert is a delicious combination of meringue, milk, and cinnamon.
                                            The base is a fluffy meringue made with egg whites and sugar, which is baked
                                            until crisp on the outside and soft on the inside.<br>It is then bathed in a
                                            mixture of condensed milk, evaporated milk, and ground cinnamon, giving it a
                                            sweet, aromatic flavor. The sighs are served cold and are a delight for the
                                            palate.</li>
                                        <li>Sweet Empanadas: These empanadas have a soft and fluffy dough, they come inside
                                            butter paper and are decorated with colored sprinkles.</li>

                                    </ul>
                                    <img src="{{ asset('img/blog/empanadas-suspiros.webp') }}" alt="suspiros y empanadas"
                                        loading="lazy" width="100%">
                                    <i>Empanadas and sighs</i><br><br>
                                    <img src="{{ asset('img/blog/condesas-maicillos.webp') }}" alt="Condesas y maicillos"
                                        loading="lazy" width="100%">
                                    <i>Countess and Maicillos</i><br><br>

                                    <p>
                                        These are some of the most common dishes and desserts during Easter in Cusco.<br>
                                        Likewise, Easter desserts and dishes in Cusco are a tradition deeply rooted in the
                                        gastronomic culture of the region, and each family has their own recipes and secrets
                                        to prepare them.<br>These sweets are a way to share and enjoy with the family during
                                        religious celebrations, and are a sample of Peru's rich cultural and culinary
                                        diversity.
                                    </p>

                                    <img src="{{ asset('img/blog/mazamorras.webp') }}" alt="peruvian desserts"
                                        loading="lazy" width="100%">
                                    <i>Rice pudding, Mazamorra morada and Zambito Rice</i> <br><br>

                                    <p>
                                        With this we conclude that Easter in Cusco - Peru is a very important and vibrant
                                        celebration that combines elements of the Catholic religion and Andean
                                        traditions.<br>
                                        Visitors to Cusco during Holy Week can experience a variety of cultural and
                                        religious events, such as the Palm Sunday procession and the famous Lord of the
                                        Tremors procession on Holy Monday, which features the image of the Cristo de los
                                        Temblores. In addition, it is also an opportunity to try the typical food of the
                                        region and learn about the local culture in the craft markets and cultural
                                        events.<br>
                                        It is worth visiting Cusco during Holy Week because the city comes to life in a
                                        special way at this time of the year. Visitors can experience the emotion and
                                        devotion of the local people while immersing themselves in a rich culture and
                                        religion that has been passed down through the generations.<br> Plus, it's an
                                        opportunity to admire the Spanish colonial architecture and stunning views of the
                                        Andes mountains that surround the city. In short, Holy Week in Cusco is a unique and
                                        unforgettable experience that any traveler should experience at least once in their
                                        life!
                                    </p>
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
