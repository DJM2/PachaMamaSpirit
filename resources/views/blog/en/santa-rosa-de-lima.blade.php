@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Santa Rosa de Lima</h1>
                    <p class="text-center" style="color: #fff">Santa católica terciaria dominic</p>
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
                                / <a>Santa Rosa de Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">"Saint Rose of Lima: The patron saint of America"</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Who was Santa Rosa de Lima?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <i>
                                        "Santa Rosa de Lima", patron saint of the national police of Peru, and
                                        representative of Peruvian nurses, to whom a series of miracles and interesting
                                        stories are attributed, represents the reason for many traditions in Peru, on
                                        the 30th of August of each year, thousands of Peruvians pay tribute to the best
                                        known "Patron of America". We will know these and many more facts about the
                                        first woman in Latin America declared a saint by the Catholic Church.
                                    </i><br><br>
                                    <p>
                                        Santa Rosa de Lima, whose real name was Isabel Flores de Oliva, was a Dominican
                                        tertiary Christian woman, canonized in 1671 by Pope Clement X. She always stood
                                        out for her beauty and noble heart, since she devoted her life to caring for the
                                        sick, elderly, children, and performed ascetic practices, which led to many
                                        places his fame of holiness.<br><br>

                                        Even in her lifetime she was already highly revered, since she possessed certain
                                        gifts, mystical visions and a series of miracles were attributed to her. For
                                        this reason, in a little more than half a century, the Catholic Church canonized
                                        her, declaring her patron saint of Lima and Peru, and a short time later patron
                                        saint of America, the Philippines and the East Indies.
                                    </p>
                                    <img src="{{ asset('img/blog/santa-rosa-de-Lima-Pacha-Mama-Spirit.webp') }}"
                                        width="100%" alt="Santa Rosa de Lima Pacha Mama Spirit" loading="lazy">
                                    <i>Photo: Santa Rosa de Lima</i><br><br>
                                    <h3>History of her birth and origin of her name: Santa Rosa de Lima</h3>
                                    <p>
                                        Santa Rosa de Lima was born on April 20, 1586 in the vicinity of the Hospital of
                                        the Holy Spirit in the city of Lima, which at that time was the capital of the
                                        Viceroyalty of Peru. She was the fourth of the 12 children of Gaspar Flores (an
                                        arquebusier of the viceroyalty guard from San Juan, Puerto Rico) and Maria de
                                        Oliva from Lima.<br><br>

                                        At birth she was baptized as Isabel Flores de Oliva, but at the time of her
                                        confirmation she was given the name "Rosa", since this was the name that her
                                        entire family used for her practically since her birth. The reason? her
                                        exceptional beauty so outstanding, but also because of a vision that her mother
                                        had, in which she observed that the face of her little girl turned into a rose.
                                        For those reasons, Santa Rosa would definitely assume that name.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    The beginning of the vocation of Santa Rosa de Lima
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        From her childhood there were already indications that manifested in the future
                                        saint her religious vocation, as well as a singular spiritual elevation. She had
                                        learned music, singing and poetry, skills that were learned from her mother,
                                        since she was dedicated to instructing the daughters of the nobility in those
                                        times. Around the age of 10, Rosa carried out peculiar activities: she fasted on
                                        bread and water, placed logs on her bed, shavings and reeds on her pillow, she
                                        also used hair shirts to flog her fragile body, all this, with the conviction of
                                        her fidelity to Christ.<br><br>

                                        Actually, from a very young age, she showed her vocation to help others, for
                                        this reason, adding to the actions of fasting or self-flagellation that she
                                        carried out, her parents tried to divert her from this Christian path and even
                                        began to look for a suitable marriage for her, but Rosa never gave in to those
                                        claims. Even in her adolescence, Santa Rosa felt strongly attracted to the model
                                        of the Dominican Saint Catherine of Siena (Tuscan mystic of the fourteenth
                                        century) and following her example, she stripped off her attractive hair and
                                        made a vow of perpetual chastity, thus definitely contrary to her parents' plans
                                        for her.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Miracles attributed to Santa Rosa
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Throughout history many miracles are attributed to Santa Rosa de Lima, we will
                                        highlight 5 of them:
                                    </p>
                                    <h3>Protection of the city of Lima from the Dutch corsair Joris Spitberg</h3>
                                    <p>
                                        EnIn 1615, the city of Lima was in imminent danger of being sacked by the Dutch
                                        pirate Joris Spitberg, who was hired by the Netherlands to take the Viceroyalty
                                        of Peru by storm. His plans were to land in Callao and loot Lima with the help
                                        of 300 men. , who sailed with him in six ships under his charge.<br><br>

                                        When the Dutch corsair arrived in El Callao, the rumor spread that he would take
                                        the convent of Santo Domingo to desecrate it and steal its treasures. Then, the
                                        young Isabel Flores, 29 years old at the time, ran determined to the temple to
                                        protect it with her own body, she was willing to die in defense of Catholic
                                        values, so she began to beg for the protection of Lima to the Virgin
                                        Rosary.<br><br>

                                        Spitberg decided not to land at El Callao or attack the city of Lima. He
                                        continued on his way to Paita and Acapulco and never returned. The people of
                                        Lima then attributed these actions to the prayers and supplications of the
                                        Saint.
                                    </p>
                                    <h3>Rain of scented flowers in front of Pope Clement IX</h3>
                                    <p>
                                        This is one of the best known miracles of the saint from Lima. According to the
                                        stories, Pope Clement IX had doubts about the powers and miracles of Santa Rosa
                                        and wanted to make sure of them before beatifying her.<br><br>

                                        After hearing the stories of her miracles, the Supreme Pontiff would have said:
                                        “Patron and Saint? Flowers and Roses? Then let it rain flowers on my desk if
                                        this is true”. That was when a shower of roses began to fall on the Pope's table
                                        that left him stupefied. It was then that he approved her canonization, and the
                                        young Isabel Flores de Oliva was renamed Santa Rosa de Lima.
                                    </p>
                                    <h3>Appearance to the Filipino people and their protection during World War II
                                    </h3>
                                    <p>
                                        Another of the stories told about Santa Rosa is the miracle of its appearance to
                                        several hundred Filipinos fleeing the Japanese siege during the war. While the
                                        troops of the Imperial Army advanced near that place, the Peruvian saint made
                                        her appearance and led them to a nearby temple where she offered them shelter
                                        and food. It is said that a beautiful lady dressed in a black and white robe led
                                        them to the church, in the parish of Santa Rosa.<br><br>

                                        When they were inside, she offered them plenty of fish and rice. Grateful,
                                        everyone fell to their knees as they entered the temple and recognized her image
                                        on the altar. Japanese troops later reached the church. The officers leading the
                                        platoon tried to enter on their horses, but to no avail because the animals
                                        resisted.
                                    </p>
                                    <h3>He healed the sick with the image of the Child Jesus</h3>
                                    <p>
                                        Another of the miracles for which the faith of the people of Lima towards Santa
                                        Rosa grew was the healing of the sick, using a holy card of Jesus whom he called
                                        "doctor boy" and prayed daily. According to the stories that are told about
                                        these miracles, Santa Rosa was devoted to the Child Jesus and she had an image
                                        of the Divine Child in her house.

                                        The sick came to her in search of a cure for her ills. She kindly entrusted her
                                        healing to the "doctor boy". From that point, the Catholic faith in the Divine
                                        Child spread throughout the continent.
                                    </p>
                                    <h3>The mystical marriage with Jesus</h3>
                                    <p>
                                        Santa Rosa contracted a mystical marriage with Jesus of Nazareth, in the convent
                                        of Santo Domingo de Lima. This miracle is also known as the "mystical betrothal"
                                        between Jesus and Santa Rosa de Lima. It happened in 1617 during Palm Sunday;
                                        she was 31 years old.<br><br>

                                        That day she did not receive any palm, so she thought that God was upset with
                                        her for some offense. She then went to the Chapel of the Rosary where she wept
                                        and begged Jesus for forgiveness, and he replied: "Rose of my heart, I want you
                                        as a wife." She answered the Lord that she would be his most "humble slave."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Last years, death and canonization
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        In 1615, and with the help of his favorite brother, Hernando Flores de Herrera,
                                        he built a small cell or hermitage in the garden of his parents' house. There,
                                        in a space of just over two square meters (which can still be seen today), Santa
                                        Rosa would gather to pray and do penance, practicing her severe asceticism, with
                                        a crown of thorns under her veil, her hair pinned to the wall to keep from
                                        falling asleep, drank ice, and did rigorous fasts.<br><br>

                                        Her biographers say that her mystical experiences and states of ecstasy were
                                        very frequent. Apparently, every week she experienced a state of ecstasy similar
                                        to that of Santa Catalina de Ricci, it is said that every Thursday morning she
                                        locked herself in her oratory and did not come to until Saturday. She was also
                                        credited with various gifts, such as prophecy (according to tradition, she
                                        prophesied her death a year earlier).<br><br>

                                        But, Santa Rosa suffered at that time the misunderstanding of his family and
                                        friends and suffered stages of great emptiness, but all this borne fruit his
                                        intense spiritual experiences, full of ecstasy and wonders, such as
                                        communication with plants and animals, without ever losing joy. of his spirit (a
                                        fan of composing love songs with mystical symbolism) and the beauty of his face.
                                    </p>
                                    <h3>The Day of his Death:</h3>
                                    <p>
                                        Santa Rosa de Lima fell seriously ill and was affected by acute hemiplegia. The
                                        Lima virgin thus gave her soul to God, on August 24, 1617, in the early hours of
                                        the morning; she was only 31 years old.<br><br>

                                        The same day of her death, in the afternoon, Santa Rosa's body was transferred
                                        to the large Dominican convent, called Our Lady of the Rosary.
                                    </p>

                                    <h3>Canonization</h3>
                                    <p>
                                        The process that led to the beatification and canonization of Rosa de Lima began
                                        immediately in 1617-1618 by the Archbishop of Lima, Bartolomé Lobo Guerrero.
                                        After five decades of proceedings, Pope Clement IX beatified her in 1668, and a
                                        year later she declared her the patron saint of Lima and Peru. After her,
                                        Clement X of her, canonized her in 1671 and besides her declared her the main
                                        patron saint of America, the Philippines and the East Indies.<br><br>

                                        This is how every August 30 is declared a holiday in Peru, due to the
                                        celebration and homage to the patron saint Santa Rosa de Lima, without a doubt a
                                        woman full of incomparable virtues and gifts.
                                    </p>
                                    <img src="{{ asset('img/blog/canonizacion-de-santa-rosa-de-Lima.webp') }}"
                                        alt="Canonización de Santa Rosa de Lima" loading="lazy" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    The wishing well of Santa Rosa de Lima
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Currently in the city of Lima, exactly in the Cercado de Lima, where the family
                                        of Isabel Flores de Oliva used to live, is the sanctuary of Santa Rosa, whose
                                        main attraction is the so-called Well of Desires, where every year , thousands
                                        of devout Peruvians come to pay homage to Santa Limeña, and it is traditional to
                                        write a letter, asking for a wish or a special request and then the letter is
                                        thrown into the well, hoping that the request will be fulfilled by she.
                                    </p>
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
                                        country
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('the-best-beaches-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/the-best-beaches-of-Peru.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>In this Blog you will find a complete guide with the best beaches in Peru.</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('mistura-en') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/mistura-lima-peru-Pacha-mama-Spirit.webp') }}"
                                        alt="Mistura fair" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>The largest gastronomic fair in Latinomaerica</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours más populares para Cusco:</h2>
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
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/tour-a-la-laguna-de-humantay.webp') }}" alt="Tour a Puno"
                                loading="lazy">
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
