@extends('layouts.app')
<?php $titulo = '10 Actividades Turísticas para realizar en Cusco'; ?>
@php $descripcion="Cusco es una ciudad que ofrece una gran variedad de atractivos y actividades turísticas para todos los gustos y presupuestos. Desde monumentos históricos y culturales, paisajes naturales y aventuras, explorar los impresionantes restos arqueológicos incas, hasta degustar la deliciosa gastronomía peruana." @endphp
@php $keywords="cusco, turismo en cusco, lugares turisticos de cusco, turismo cusco, viaje cusco, conocer cusco"; @endphp
@php $img="https://pachamamaspirit/img/blog/ciudadela-machupicchu.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu-castellano')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>{{ $titulo }}</h1>
                    <p class="text-center" style="color: #fff">Conoce y disfruta de muchas actividades turísticas en la
                        ciudad del Cusco</p>
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
                                / <a>10 Actividades Turísticas en Cusco</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">10 Actividades Turísticas Recomendadas en Cusco</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseZero" aria-expanded="false"
                                    aria-controls="flush-collapseZero">
                                    Turismo en la ciudad del Cusco "Ombligo del Mundo"
                            </h2>
                            <div id="flush-collapseZero" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingZero" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Cusco es una ciudad que ofrece una gran variedad de atractivos y actividades
                                        turísticas para todos los gustos y presupuestos. Desde monumentos históricos y
                                        culturales, paisajes naturales y aventuras, explorar los impresionantes restos
                                        arqueológicos incas, hasta degustar la deliciosa gastronomía peruana, Cusco tiene
                                        algo para cada viajero. <br> Pero definitivamente hay mucho que ver y hacer en Cusco
                                        y
                                        sus alrededores. <br> En este artículo te presentaremos las 10 mejores actividades
                                        turísticas que puedes
                                        realizar en Cusco.
                                    </p>
                                    <img src="{{ asset('img/blog/actividades-turisticas-en-cusco.webp') }}" loading="lazy"
                                        alt="Turismo en Cusco" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    1. Visitar Machu Picchu:
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La ciudadela inca más famosa del mundo es sin duda el principal atractivo de Cusco y
                                        del Perú, declarada Patrimonio de la Humanidad por la UNESCO y una de las siete
                                        maravillas del mundo moderno. Machu Picchu es un lugar mágico y misterioso que te
                                        dejará sin aliento con su belleza y su historia.<br>
                                        Hay muchas razones para conocer esta maravilla del mundo, Machu Picchu es un
                                        testimonio de la grandeza y el misterio de la civilización inca, que construyó esta
                                        ciudadela de piedra hace más de 500 años. Aquí podrás admirar la arquitectura, la
                                        astronomía y la ingeniería de esta cultura, que se adaptó al entorno natural con una
                                        sabiduría impresionante. <br> Además, podrás disfrutar de la belleza y la diversidad
                                        de
                                        la flora y la fauna que rodean a Machu Picchu, que forma parte de una reserva
                                        ecológica. Para llegar a Machu Picchu puedes tomar el tren desde Ollantaytambo o si
                                        te gustan los desafíos, podrás vivir una experiencia única al recorrer el Camino
                                        Inca, una ruta de senderismo que dura entre 2 y 4 días y que te llevará por paisajes
                                        increíbles hasta llegar a la ciudad sagrada.<br> O también seguir alguna de sus
                                        alternativas como Salkantay o Lares. Una vez en el santuario, podrás recorrer sus
                                        impresionantes construcciones y admirar la belleza de su entorno natural. <br>
                                        Sea cual sea la opción que elijas, te recomendamos reservar con anticipación tu
                                        entrada y tu transporte, ya que hay un límite diario de visitantes. <br>
                                        ¡No lo dudes más! visitar Machu Picchu es una aventura que no te puedes perder.

                                    </p>
                                    <img src="{{ asset('img/blog/ciudadela-machupicchu.webp') }}" width="100%"
                                        alt="Ciudadela Machupicchu" loading="lazy">
                                    <i>Ciudadela de Machupicchu</i><br><br><br>

                                    <img src="{{ asset('img/blog/camino-inca-hacia-machupicchu.webp') }}" width="100%"
                                        alt="Camino Inca hacia Machupicchu" loading="lazy">
                                    <i>Camino Inca hacia Machupicchu</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    2. Explorar el Valle Sagrado de los Incas:
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        El Valle Sagrado de los Incas es una zona fértil y pintoresca ,este valle alberga
                                        varios sitios arqueológicos, pueblos tradicionales y paisajes de ensueño, como
                                        Pisac, Ollantaytambo, Chinchero y Moray. <br> Algunos de los lugares que no puedes
                                        perderte son Pisac, con su mercado artesanal y su complejo inca; Ollantaytambo, con
                                        su fortaleza y su pueblo colonial; y Chinchero, con su iglesia y sus tejedoras,
                                        todos estos lugares muestran la arquitectura, la ingeniería y la cosmovisión de esta
                                        antigua cultura. <br>
                                        Además, en el Valle Sagrado podrás apreciar la vida rural de los pobladores andinos,
                                        sus tradiciones y su artesanía.<br>
                                        Visitar el valle sagrado de los incas es una experiencia única e inolvidable.
                                        También se puede disfrutar de la gastronomía típica, los productos artesanales y las
                                        actividades de aventura como el senderismo, el rafting o el ciclismo. Esta visita es
                                        una forma de enriquecer el espíritu y el conocimiento, y de admirar una de las
                                        maravillas del mundo. <br>
                                        Una buena forma de conocer el Valle Sagrado es hacer un tour de un día del <a
                                            href=""> valle sagrado de los incas</a> desde Cusco
                                        que incluya el transporte, el guía y el almuerzo .


                                    </p>
                                    <img src="{{ asset('img/blog/ollantaytambo.webp') }}" width="100%"
                                        alt="Ollantaytambo" loading="lazy">
                                    <i>Ollantaytambo</i> <br><br><br>

                                    <img src="{{ asset('img/blog/mercado-de-pisac.webp') }}" width="100%"
                                        alt="Mercado de Pisac" loading="lazy">
                                    <i>Mercado Artesanal de Pisac</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#exploracusco" aria-expanded="false" aria-controls="exploracusco">
                                    3. Conocer y explorar la ciudad y el centro histórico de Cusco:
                                </button>
                            </h2>
                            <div id="exploracusco" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La antigua capital del imperio inca conserva su encanto y su riqueza cultural en sus
                                        calles, plazas, iglesias y museos, es una mezcla fascinante de lo antiguo y lo
                                        moderno, donde conviven las huellas del pasado incaico con las construcciones
                                        coloniales españolas y la vida cosmopolita actual. <br> No dejes de visitar la Plaza
                                        de
                                        Armas, la Catedral, el Templo del Sol o Coricancha, el Convento de Santo Domingo, el
                                        Museo Inka, el Barrio de San Blas, el Mercado de San Pedro y los centros
                                        arqueólogicos cercanos como Sacsayhuamán, Qenqo, Puca Pucara y Tambomachay. <br>
                                        El Cusco es una ciudad que te cautivará con su historia, su cultura y su magia. No
                                        esperes más y ven a descubrirla por ti mismo. ¡Te aseguro que no te arrepentirás!

                                    </p>
                                    <img src="{{ asset('img/blog/barrio-san-blas.webp') }}" width="100%"
                                        alt="Barrio San Blas cusco" loading="lazy">
                                    <i>Barrio de San Blas</i> <br><br><br>

                                    <img src="{{ asset('img/blog/saqsayhuaman.webp') }}" width="100%"
                                        alt="saqsayhuaman" loading="lazy">
                                    <i>Complejo Arqueológico de Saqsayhuaman</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gastronomico" aria-expanded="false"
                                    aria-controls="gastronomico">
                                    4. Realiza un tour gastronómico por la ciudad y disfruta la cocina Peruana:
                                </button>
                            </h2>
                            <div id="gastronomico" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La gastronomía peruana es una de las más variadas y reconocidas del mundo, y en
                                        Cusco podrás degustar algunos de sus platos más típicos y deliciosos.
                                        Un tour gastronómico por la ciudad de Cusco es una excelente manera de conocer y
                                        disfrutar de la rica y variada cocina peruana, que combina los sabores e
                                        ingredientes de los Andes con las influencias de otras culturas. En este artículo te
                                        damos algunas sugerencias para realizar un tour gastronómico por Cusco y descubrir
                                        sus platos típicos, sus mercados y sus restaurantes. <br>
                                        Lo primero que debes hacer es visitar el mercado de San Pedro, el más grande y
                                        famoso de Cusco, donde podrás encontrar una gran variedad de productos locales, como
                                        frutas, verduras, granos, carnes, quesos y panes. Aquí podrás apreciar la diversidad
                                        y la calidad de los alimentos que se cultivan y se producen en la región del Cusco,
                                        siguiendo las tradiciones de la agricultura inca.<br> Además, podrás degustar
                                        algunos
                                        bocadillos típicos, como el choclo con queso (maíz cocido con queso fresco), el
                                        anticucho (brocheta de corazón de res), el emoliente (bebida caliente a base de
                                        hierbas) o el jugo de frutas.<br>
                                        Después de recorrer el mercado, puedes dirigirte a alguno de los restaurantes que
                                        ofrecen tours gastronómicos en Cusco, donde podrás aprender a preparar y a probar
                                        algunos platos tradicionales de la cocina peruana. Por ejemplo, puedes aprender a
                                        hacer el ceviche (pescado crudo marinado en limón y ají), el lomo saltado (carne
                                        salteada con cebolla, tomate y papas fritas), la causa rellena (pastel frío de papa
                                        con relleno de atún o pollo) o el ají de gallina (crema picante de pollo
                                        deshilachado). También podrás degustar algunas bebidas típicas, como el pisco sour
                                        (cóctel a base de pisco, limón y clara de huevo) o la chicha morada (bebida dulce a
                                        base de maíz morado).<br>
                                        Finalmente, no puedes dejar de probar algunos postres tradicionales de Cusco, como
                                        el suspiro a la limeña (crema dulce cubierta con merengue), el arroz con leche
                                        (arroz cocido con leche y canela) o el picarón (buñuelo frito de masa de zapallo y
                                        camote). Estos postres son una delicia para el paladar y una muestra de la fusión
                                        entre la gastronomía andina y la española.<br>
                                        Como ves, un tour gastronómico por Cusco es una experiencia única e inolvidable que
                                        te permitirá conocer y disfrutar de la riqueza culinaria del Perú. No dudes en
                                        reservar tu tour gastronómico en Cusco y prepárate para deleitar tus sentidos con
                                        los sabores y aromas de esta maravillosa ciudad.


                                    </p>
                                    <img src="{{ asset('img/blog/mercado-san-pedro.webp') }}" width="100%"
                                        alt="Mercado central de san pedro" loading="lazy">
                                    <i>Mercado de San Pedro - Cusco</i> <br><br><br>

                                    <img src="{{ asset('img/blog/cebiche-lomo-saltado.webp') }}" width="100%"
                                        alt="Ceviche y Lomo Saltado" loading="lazy">
                                    <i>Ceviche y Lomo Saltado Peruanos</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#museos" aria-expanded="false"
                                    aria-controls="museos">
                                    5. Recorrer los Museos más importantes y aprender sobre la cultura incaica y pre
                                    incaica:
                                </button>
                            </h2>
                            <div id="museos" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Si quieres conocer más sobre la riqueza cultural e histórica y el arte de Cusco, una
                                        buena opción es visitar sus museos. Hay museos para todos los gustos y edades, desde
                                        los que muestran el legado de las civilizaciones precolombinas hasta los que exhiben
                                        el arte contemporáneo y las tradiciones locales. <br> Aquí te presentamos algunos de
                                        los
                                        principales museos en Cusco que puedes incluir en tu itinerario.<br>

                                    <ul>
                                        <li>
                                            Museo Inca o Palacio del Almirante: Aquí se exhiben más de 40 mil piezas
                                            arqueológicas que pertenecieron a la cultura inca y a otras culturas
                                            preincaicas.
                                        </li>
                                        <li>
                                            Museo de Arte Precolombino: Aquí podrás apreciar más de 400 piezas de cerámica,
                                            metal, madera y textiles que representan el arte de las culturas prehispánicas
                                            del
                                            Perú, como la Chavín, Paracas, Mochica, Nazca, Wari, Lambayeque, Chimú e Inca .
                                        </li>
                                        <li>
                                            Museo de Arte Contemporáneo: Aquí se exhiben obras de artistas cusqueños y
                                            peruanos que reflejan la diversidad y la riqueza del arte nacional.
                                        </li>
                                        <li>
                                            Museo de Arte Religioso o Palacio Arzobispal: Aquí se pueden admirar pinturas,
                                            esculturas, retablos y objetos religiosos que muestran la influencia del arte
                                            europeo y el sincretismo
                                        </li>
                                        <li>Museo Inca o Palacio del Almirante: Aquí se exhiben más de 40 mil piezas
                                            arqueológicas que pertenecieron a la cultura inca y a otras culturas
                                            preincaicas.</li>
                                        <li>Museo de Arte Precolombino: Aquí podrás apreciar más de 400 piezas de cerámica,
                                            metal, madera y textiles que representan el arte de las culturas prehispánicas
                                            del
                                            Perú, como la Chavín, Paracas, Mochica, Nazca, Wari, Lambayeque, Chimú e Inca.
                                        </li>
                                        <li>Museo de Arte Contemporáneo: Aquí se exhiben obras de artistas cusqueños y
                                            peruanos que reflejan la diversidad y la riqueza del arte nacional.</li>
                                        <li>Museo de Arte Religioso o Palacio Arzobispal: Aquí se pueden admirar pinturas,
                                            esculturas, retablos y objetos religiosos que muestran la influencia del arte
                                            europeo y el sincretismo con el arte andino.</li>
                                        <li>Museo Regional de Historia y Casa del Inca Garcilaso de la Vega: Aquí se pueden
                                            ver objetos personales del escritor, así como pinturas, documentos y muebles que
                                            narran la historia de Cusco desde la época incaica hasta la república.</li>
                                        <li>Museo de Historia Natural: Aquí se pueden observar más de 5 mil especímenes de
                                            flora y fauna del Perú, así como fósiles, rocas y minerales.</li>
                                        <li>El Planetario de Cusco: El museo conocido como Planetario de Cusco es una
                                            atracción cultural y educativa que ofrece a los visitantes la oportunidad de
                                            conocer
                                            la astronomía de los incas y observar el cielo nocturno del sur.</li>
                                        <li> El ChocoMuseo: Es un museo dedicado al cacao y al chocolate en la ciudad de
                                            Cusco.
                                            En este museo se puede aprender sobre la historia, el cultivo y la elaboración
                                            del
                                            chocolate a partir de granos orgánicos de cacao peruano.</li>
                                    </ul> <br>

                                    Estos son solo algunos de los museos que puedes visitar en Cusco para conocer más
                                    sobre su pasado y su presente, cada uno con su propio encanto y valor. También hay
                                    otros museos gratuitos o especializados que puedes explorar si tienes más tiempo o
                                    interés, como el Museo del Café, el Museo del Pisco, el Museo Maximo Laura o el
                                    Museo de Vida Monástica. <br> Te invitamos a descubrirlos y a disfrutar de la riqueza
                                    cultural de Cusco, recomendamos que visites los que más te interesen y que disfrutes de
                                    la experiencia
                                    cultural que te ofrecen.
                                    </p>
                                    <img src="{{ asset('img/blog/museo-inca.webp') }}" width="100%"
                                        alt="Museo Inca del Cusco" loading="lazy">
                                    <i>Museo Inka del Cusco</i> <br><br><br>

                                    <img src="{{ asset('img/blog/planetario-cusco.webp') }}" width="100%"
                                        alt="Planetario Cusco" loading="lazy">
                                    <i>Planetario - Cusco</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#vinicunca" aria-expanded="false"
                                    aria-controls="vinicunca">
                                    6. Aventurarse en una excursión a la Montaña de los 7 Colores o Vinicunca:
                                </button>
                            </h2>
                            <div id="vinicunca" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La Montaña Arcoíris o Vinicunca es una formación geológica única que muestra una
                                        gama de colores increíbles debido a la erosión y la mineralización del suelo. Se
                                        encuentra a unos 100 km al sur de Cusco y a una altitud de 5.200
                                        m.s.n.m., esta montaña presenta una gama de colores que se debe
                                        a la presencia de diferentes minerales haciéndola uno de los fenómenos naturales más
                                        espectaculares de Cusco y por ello uno de los destinos más impresionantes y
                                        fascinantes que tiene esta ciudad. Para llegar a Vinicunca hay que hacer una
                                        caminata de unas 3 horas desde el poblado de Cusipata o tomar un tour en cuatrimoto
                                        desde Pitumarca. <br>
                                        Visitar la montaña de colores es una experiencia única e inolvidable, que requiere
                                        de una buena preparación física y logística. El recorrido se puede hacer en un día
                                        desde Cusco, tomando un transporte hasta el poblado de Pitumarca o Pampa Chiri,
                                        donde se inicia la caminata o el ascenso en caballo hasta el mirador de Vinicunca.
                                        El trayecto dura entre dos y tres horas, dependiendo del ritmo y la aclimatación de
                                        cada persona.<br>

                                        Durante el camino, se puede apreciar la belleza del paisaje andino, con sus nevados,
                                        lagunas, valles y comunidades campesinas. También se puede observar la flora y fauna
                                        típicas de la zona, como las llamas, alpacas, vicuñas y cóndores. La montaña de
                                        colores ofrece un espectáculo visual sin igual, con sus franjas de colores rosado,
                                        blanco, rojo, verde, marrón y amarillo mostaza, que contrastan con el cielo
                                        azul.<br>

                                        La mejor época para visitar la montaña de colores es entre abril y octubre, cuando
                                        hay menos lluvias y el clima es más favorable. Se recomienda llevar ropa abrigada,
                                        impermeable, bloqueador solar, sombrero, lentes de sol, agua y snacks. También se
                                        aconseja tomar mate de coca o pastillas para el soroche, y evitar el consumo de
                                        alcohol o comidas pesadas antes del viaje.<br>

                                        La montaña de colores o Vinicunca es un lugar mágico y sorprendente, que merece ser
                                        conocido y respetado por todos los visitantes. Es una muestra de la riqueza natural
                                        y cultural de Cusco, que invita a disfrutar y cuidar el patrimonio de nuestro país.

                                    </p>
                                    <img src="{{ asset('img/blog/vinicunca.webp') }}" width="100%" alt="vinicunca"
                                        loading="lazy">
                                    <i>Montaña Vinicunca / 7 colores o Montaña Arco Iris</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cocalmayo" aria-expanded="false"
                                    aria-controls="cocalmayo">
                                    7. Disfrutar de las aguas termales de Lares o Cocalmayo:
                                </button>
                            </h2>
                            <div id="cocalmayo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Después de un día de caminata o exploración, nada mejor que relajarse en unas
                                        piscinas naturales de agua caliente. Lares y Cocalmayo son dos opciones para darte
                                        un baño terapéutico rodeado de naturaleza y tranquilidad. <br>
                                        Las aguas termales de Lares y Cocalmayo son dos destinos imperdibles para los
                                        viajeros que buscan relajarse y disfrutar de los beneficios de las aguas medicinales
                                        en el entorno natural de Cusco. Estas aguas provienen de fuentes subterráneas de
                                        origen volcánico y tienen propiedades terapéuticas para la piel, los músculos y el
                                        sistema nervioso.<br>

                                        Las aguas termales de <strong> Lares</strong> se encuentran en el distrito del mismo
                                        nombre, a unas
                                        cuatro horas en auto desde Cusco. El lugar cuenta con cuatro piscinas de diferentes
                                        temperaturas, rodeadas de vegetación y montañas. Es un sitio ideal para combinar con
                                        una caminata por el valle de Lares o una visita a Machu Picchu, ya que se puede
                                        acceder a ellas desde el camino inca o desde el tren.<br>

                                        Las aguas termales de <strong> Cocalmayo </strong>se ubican en el distrito de Santa
                                        Teresa, a unas
                                        tres horas en auto desde Cusco. El lugar tiene tres piscinas de gran tamaño, con
                                        aguas cristalinas de color turquesa, que contrastan con el verde del paisaje. Es un
                                        sitio perfecto para relajarse después de una aventura por la selva o la montaña, ya
                                        que se puede llegar a ellas desde la hidroeléctrica o desde el pueblo de Aguas
                                        Calientes.<br>

                                        Ambos destinos ofrecen una experiencia única de conexión con la naturaleza y la
                                        cultura andina, así como una oportunidad de recuperar energías y salud. Por eso, si
                                        visitas Cusco y quieres disfrutar de las aguas termales de Lares y Cocalmayo, te
                                        recomendamos reservar un tour con anticipación y llevar ropa cómoda, toalla, traje
                                        de baño y protector solar.


                                    </p>
                                    <img src="{{ asset('img/blog/cocalmayo-baños.webp') }}" width="100%"
                                        alt="Aguas termales Cocalmayo" loading="lazy">
                                    <i>Baños Termales de Cocalmayo - Cusco</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#humantay" aria-expanded="false"
                                    aria-controls="humantay">
                                    8. Admirar la Laguna Humantay:
                                </button>
                            </h2>
                            <div id="humantay" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Esta laguna es otro de los atractivos naturales más hermosos de Cusco, ya que tiene
                                        un color turquesa intenso que contrasta con el blanco del nevado Humantay.<br>
                                        La laguna Humantay es una maravilla natural que se encuentra en el Cusco, cerca del
                                        nevado SalKantay. Es un destino ideal para los amantes de la naturaleza y el
                                        senderismo, ya que ofrece un paisaje espectacular de aguas turquesas rodeadas de
                                        montañas y nieve. <br> Para visitar la laguna Humantay se necesita tener una buena
                                        aclimatación al Cusco, pues se ubica a 4200 m.s.n.m. El
                                        recorrido empieza en Mollepata, donde se toma un taxi hasta Soraypampa, el punto de
                                        partida de la caminata. El trayecto dura aproximadamente una hora y media y tiene un
                                        grado de dificultad moderado. Al llegar a la laguna se puede apreciar su belleza y
                                        participar en un ritual andino en honor a la Pachamama, la Madre Tierra. También se
                                        puede hacer camping cerca de la laguna y disfrutar de la puesta del sol y el
                                        amanecer. Además, se puede degustar la gastronomía típica de la zona, como la
                                        patasca, el guiso de chumos o la chicha de jora.<br>
                                        Lo más recomendable también es tomar un TOUR que incluye transporte y guía.
                                        La laguna Humantay es un lugar mágico y sagrado que vale la pena conocer si se viaja
                                        al Cusco.
                                    </p>

                                    <img src="{{ asset('img/blog/laguna-humantay.webp') }}" width="100%"
                                        alt="Laguna Humantay" loading="lazy">
                                    <i>Laguna Humantay</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tresCruces" aria-expanded="false"
                                    aria-controls="tresCruces">
                                    9. Contemplar el amanecer más hermoso del mundo en Tres Cruces de Oro:
                                </button>
                            </h2>
                            <div id="tresCruces" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Este mirador ofrece una vista privilegiada del fenómeno óptico conocido como "el
                                        espectáculo del sol". Se trata de un juego de luces y colores que se produce cuando
                                        el sol sale por detrás de las montañas y se refleja en las nubes.<br>
                                        Tres Cruces de Oro está ubicado en el Parque Nacional del Manu, en la región de
                                        Cusco, Perú. Desde este lugar se puede apreciar uno de los fenómenos más
                                        espectaculares de la naturaleza: el amanecer andino. Este consiste en la aparición
                                        de tres cruces luminosas en el horizonte, que se forman por la refracción de los
                                        rayos solares en las capas de aire frío y caliente. Estas cruces cambian de color y
                                        forma a medida que el sol se eleva, creando un espectáculo único e inolvidable.<br>

                                        Visitar Tres Cruces de Oro es una experiencia que vale la pena vivir al menos una
                                        vez en la vida. No solo se puede disfrutar del amanecer andino, sino también de la
                                        biodiversidad y la cultura de la zona. El Parque Nacional del Manu es una de las
                                        reservas naturales más importantes del mundo, que alberga una gran variedad de
                                        especies de flora y fauna, muchas de ellas endémicas y en peligro de extinción.
                                        Además, en los alrededores se pueden conocer las comunidades nativas que conservan
                                        sus tradiciones y costumbres ancestrales.<br>

                                        Para visitar Tres Cruces de Oro se necesita un permiso especial del Servicio
                                        Nacional de Áreas Naturales Protegidas por el Estado (SERNANP), ya que se trata de
                                        una zona restringida y protegida. También se recomienda contratar un guía local que
                                        conozca el camino y las condiciones climáticas. El mejor momento para ir es entre
                                        mayo y agosto, cuando el cielo está más despejado y hay menos probabilidades de
                                        lluvia. Se debe madrugar mucho, ya que el amanecer ocurre entre las 5:30 y las 6:00
                                        de la mañana. Se aconseja llevar ropa abrigada, agua, comida y una cámara
                                        fotográfica para capturar este maravilloso momento.

                                    </p>

                                    <img src="{{ asset('img/blog/tres-cruces-de-oro.webp') }}" width="100%"
                                        alt="Mirador 3 cruces de oro" loading="lazy">
                                    <i>Amanecer en el Mirador Tres Cruces de Oro</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#putucusi" aria-expanded="false"
                                    aria-controls="putucusi">
                                    10. Desafiar la altura en la Montaña Putucusi:
                                </button>
                            </h2>
                            <div id="putucusi" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Esta montaña se encuentra frente a Machu Picchu y ofrece una vista panorámica del
                                        santuario inca. Para subir a Putucusi hay que superar una serie de escaleras
                                        verticales y tramos empinados que requieren de mucha fuerza y valentía. Solo se
                                        recomienda para personas con buena condición física y sin vértigo. <br>Si eres un
                                        amante
                                        de la naturaleza y la aventura, no puedes dejar de visitarla es una de las cumbres
                                        más altas y desafiantes de la zona, que ofrece unas vistas espectaculares del valle
                                        sagrado de los incas y de la ciudadela de Machu Picchu.<br>

                                        Para llegar a la cima de Putucusi, que significa "montaña feliz" en quechua, hay que
                                        superar un recorrido de unos 3 kilómetros que incluye escaleras de madera, pasarelas
                                        colgantes, senderos empinados y rocas resbaladizas. El ascenso puede durar entre una
                                        y dos horas, dependiendo del ritmo y la condición física de cada uno. Se recomienda
                                        llevar ropa cómoda, zapatos adecuados, agua, protector solar y un sombrero.<br>

                                        Una vez en la cima, se puede disfrutar de una vista panorámica de 360 grados que
                                        abarca el río Urubamba, las montañas circundantes y el imponente Machu Picchu.
                                        También se puede apreciar la flora y fauna típicas de la zona, como orquídeas,
                                        bromelias, colibríes y cóndores. Además, se puede sentir la energía mística que
                                        emana de este lugar sagrado para los antiguos incas.<br>

                                        La montaña Putucusi es una opción ideal para los viajeros que buscan una experiencia
                                        diferente y emocionante en Cusco. Es una forma de conectar con la naturaleza, la
                                        historia y la cultura de esta región maravillosa. Eso sí, hay que tener en cuenta
                                        que se trata de una actividad exigente y no apta para personas con vértigo o
                                        problemas cardíacos. También hay que respetar las normas de seguridad y conservación
                                        del lugar.<br>
                                        Si te animas a visitar la montaña Putucusi, no te arrepentirás. Es una aventura que
                                        te dejará sin aliento y con recuerdos inolvidables.
                                    </p>

                                    <img src="{{ asset('img/blog/putucusi.webp') }}" width="100%"
                                        alt="Montaña Putucusi" loading="lazy">
                                    <i>Ascenso a la Montaña Putucusi</i> <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#curioso" aria-expanded="false"
                                    aria-controls="curioso">
                                    Datos Curiosos Turísticos de la ciudad de Cusco
                                </button>
                            </h2>
                            <div id="curioso" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>La ciudad del Cusco, en quechua "Qosqo", significa "ombligo del mundo", y fue la
                                            capital del Imperio Inca.</li>
                                        <li> La ciudad del Cusco cuenta con una impresionante arquitectura colonial
                                            española,
                                            mezclada con la arquitectura incaica, y fue declarada Patrimonio de la Humanidad
                                            por
                                            la UNESCO en 1983.</li>
                                        <li> La piedra de los doce ángulos, ubicada en una pared en el barrio de San Blas,
                                            es
                                            una de las estructuras incas más famosas en la ciudad y es conocida por su
                                            precisión
                                            y detalle en la talla.</li>
                                        <li>El Templo del Sol, también conocido como el Coricancha, fue el lugar más sagrado
                                            del Imperio Inca y estuvo completamente cubierto de oro. Hoy en día, solo quedan
                                            algunas paredes y cimientos.</li>
                                        <li> El barrio de San Blas es conocido como el barrio de los artesanos y cuenta con
                                            talleres y tiendas donde se venden productos de cuero, cerámica, textiles y
                                            joyería.</li>
                                        <li> La ciudad del Cusco es el punto de partida para visitar la mundialmente famosa
                                            ciudadela de Machu Picchu, que es una de las maravillas del mundo moderno y se
                                            encuentra a unos 80 km al noroeste de la ciudad.</li>
                                    </ul>
                                    <p>
                                        En nuestro artículo te mostramos solo algunas de las muchas actividades turísticas
                                        que te ofrece el Cusco.<br>
                                        En conclusión si estás buscando un destino turístico que te ofrezca cultura,
                                        naturaleza, aventura y diversión, entonces no puedes dejar de visitar la ciudad del
                                        Cusco, la antigua capital del imperio incaico y una de las ciudades más hermosas del
                                        Perú.
                                        Cusco tiene mucho que ofrecerte y te garantiza una experiencia
                                        inolvidable.<br> No esperes más y reserva tu viaje a esta maravillosa ciudad. ¡Te
                                        aseguramos que no te arrepentirás!

                                    </p>

                                    <img src="{{ asset('img/blog/plaza-de-armas-cusco.webp') }}" width="100%"
                                        alt="Plaza de armas cusco" loading="lazy">
                                    <i>Plaza de Armas de Cusco</i>
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
                                    <p>Conoce cómo se vive la semana Santa en Cusco</p>
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
