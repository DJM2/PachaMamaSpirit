@extends('layouts.app')
@php $titulo="Celebración de la Semana Santa en Cusco 2024" @endphp
@php $descripcion="La Semana Santa en Cusco es una celebración religiosa que se lleva a cabo durante la última semana de Cuaresma, que comienza el Domingo de Ramos y termina el Domingo de Resurrección." @endphp
@php $keywords="Holy Week in Cusco 2024, costums Peru, cusco religion" @endphp
@php $img="https://pachamamaspirit.com/img/blog/semana-santa-en-cusco.webp" @endphp
@include('layouts.metasblogs')
@section('titulo', $titulo)
@section('content')
    @include('layouts.menu-castellano')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Semana Santa en Cusco</h1>
                    <p class="text-center" style="color: #fff">Una de las manifestaciones religiosas más importantes en la
                        ciudad del
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
                                / <a>Semana Santa Cusco 2024</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">La Semana Santa en Cusco</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    En qué consiste y cuáles son sus actividades más importantes.
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La Semana Santa en Cusco es una celebración religiosa que se lleva a cabo durante la
                                        última semana de Cuaresma, que comienza el Domingo de Ramos y termina el Domingo de
                                        Resurrección. Durante esta semana, la ciudad de Cusco se llena de celebraciones,
                                        procesiones y rituales que conmemoran la muerte y resurrección de Jesucristo.
                                        <br><br>
                                        Si
                                        estás interesado en conocer más sobre esta festividad, te recomiendo que visites la
                                        ciudad de Cusco durante la Semana Santa.
                                    </p>
                                    <img src="{{ asset('img/blog/semana-santa-en-cusco.webp') }}" loading="lazy"
                                        alt="Productos peruanos" width="100%"> <br><br>
                                    <p>Entre las actividades que se realizan podemos mencionar algunas:

                                    <h3>Las procesiones</h3>
                                    Las procesiones son una parte fundamental de la Semana Santa en Cusco. Durante esta
                                    semana, las calles de la ciudad se llenan de gente que sigue a las imágenes
                                    religiosas que se llevan en procesión. La más importante de todas las procesiones es
                                    la del Lunes Santo, en la que se lleva la imagen del Señor de los Temblores por las
                                    calles de Cusco. Esta procesión es considerada como una de las más importantes de
                                    América Latina. <br><br>
                                    <h3>Las misas y los rituales</h3>
                                    Durante la Semana Santa en Cusco, se llevan a cabo varias misas y rituales
                                    religiosos en las diferentes iglesias de la ciudad. Uno de los más importantes es la
                                    Misa del Pueblo, que se celebra el Jueves Santo en la iglesia de San Francisco. Esta
                                    misa es muy popular entre los habitantes de Cusco, quienes acuden a la iglesia para
                                    escuchar la música y los cánticos tradicionales que se interpretan durante la
                                    ceremonia.<br> <br>
                                    <h3>La comida típica</h3>
                                    Durante la Semana Santa en Cusco, también es posible disfrutar de la comida típica
                                    de la región. Todas a base de pescado, mariscos y vegetales, ya que durante esta
                                    semana el consumo de carnes rojas está prohibido según costumbres religiosas.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Dia a Día de la Semana Santa en Cusco
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <h3> Domingo de Ramos:</h3>
                                    <p>Este día marca el inicio de la Semana Santa y es celebrado en todo el mundo
                                        cristiano. Durante este día, se realizan diversas actividades en Cusco que son parte
                                        de las tradiciones de la región. Una de las más importantes es la procesión de las
                                        palmas, donde los fieles llevan ramas de palma y hojas de olivo que son bendecidas
                                        en la iglesia y luego llevadas en procesión por las calles de la ciudad.
                                        Además, durante el Domingo de Ramos en Cusco, se lleva a cabo la representación de
                                        la entrada triunfal de Jesús a Jerusalén, que es una de las escenas más emblemáticas
                                        de la Semana Santa. Durante esta representación, se recrea la llegada de Jesús a
                                        Jerusalén montado en un burro, mientras la multitud lo recibe con ramas de palma y
                                        hojas de olivo.
                                        Otra actividad importante que se realiza durante el Domingo de Ramos en Cusco es la
                                        decoración de las iglesias y las casas con ramos de palma y flores, para recibir la
                                        bendición y protección divina.

                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/domingo-de-ramos.webp') }}" width="100%"
                                        alt="Domingo de Ramos" loading="lazy">
                                    <i>Entrada de Ramos</i> <br><br>

                                    <h3> Lunes Santo:</h3>
                                    <p>El Lunes Santo es uno de los días más importantes de la Semana Santa en Cusco, Perú.
                                        Durante este día, se realizan diversas actividades religiosas y culturales en honor
                                        a la Semana Santa.<br>
                                        Una de las principales actividades que se lleva a cabo en Cusco en el Lunes Santo es
                                        la procesión del Señor de los Temblores. Esta procesión es una de las más
                                        importantes y antiguas de América Latina y se lleva a cabo desde el siglo XVI.
                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/lunes-santo.webp') }}" width="100%"
                                        alt="procesion lunes santo" loading="lazy">
                                    <i>Procesión de Lunes Santo</i> <br><br>

                                    <p>Otras actividades religiosas que se realizan en el Lunes Santo incluyen misas y
                                        ceremonias en las iglesias de la ciudad, así como el rezo del Rosario en la Plaza de
                                        Armas.<br>
                                        Además de las actividades religiosas, también se realizan diversas manifestaciones
                                        culturales en Cusco durante el Lunes Santo. Una de las más destacadas es el Festival
                                        de la Chicha, que tiene lugar en el distrito de San Sebastián. Durante este
                                        festival, se ofrece chicha, una bebida tradicional a base de maíz fermentado,
                                        acompañada de comida y música típica.
                                    </p>
                                    <h3> Martes Santo:</h3>
                                    <p>El Martes Santo es un día de gran devoción en Cusco. Se celebra la Misa de los Santos
                                        Óleos en la Catedral del Cusco, donde se bendicen los óleos sagrados que se
                                        utilizarán durante todo el año en los sacramentos.
                                    </p> <br>
                                    <h3> Miércoles Santo:</h3>
                                    <p>El Miércoles Santo se conoce como el "Día de la Confesión" en Cusco. Las personas
                                        acuden a confesarse para recibir la absolución antes de la Semana Santa. En la
                                        noche, se celebra el "Encuentro de las Imágenes" en la Plaza de Armas, donde se
                                        colocan imágenes de Cristo y la Virgen María juntas para representar su reunión
                                        después de la Resurrección. <br>
                                        Otra de las actividades que se realizan en Cusco durante el Miércoles Santo es la
                                        procesión de la Virgen de los Dolores. Esta procesión, que también es muy importante
                                        en la región, consiste en llevar una imagen de la Virgen de los Dolores por las
                                        calles de la ciudad en un recorrido que se inicia en la iglesia de La Merced y
                                        culmina en la catedral del Cusco.
                                    </p> <br>
                                    <h3> Jueves Santo:</h3>
                                    <p>El Jueves Santo se conoce como el "Día de la Institución de la Eucaristía y del
                                        Lavatorio de Pies". <br>
                                        Una de las actividades más importantes que se realizan es la Misa de la Última Cena,
                                        que se celebra en la catedral del Cusco. Durante esta misa se conmemora la última
                                        cena que Jesús compartió con sus discípulos antes de ser crucificado, y se realiza
                                        la ceremonia del lavado de pies, en la que el sacerdote lava los pies de doce
                                        personas representando a los doce apóstoles.<br>
                                        Algunas Familias consumen los llamados doce platos, en conmemoración de la última
                                        cena. Otras familias optan por hacerlo el Viernes santo.

                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/jueves-santo-lavado-de-pies.webp') }}" width="100%"
                                        alt="Jueves santo" loading="lazy">
                                    <i>Lavado de pies</i> <br><br>
                                    <h3> Viernes Santo:</h3>
                                    <p>El Viernes Santo es un día de gran devoción en todo el mundo cristiano. En Cusco, se
                                        celebra una procesión del "Santo Sepulcro", en la que se lleva la imagen de Cristo
                                        muerto en un ataúd adornado con flores.<br> Esta procesión comienza en la Catedral
                                        del
                                        Cusco y recorre las calles de la ciudad.
                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/santo_sepulcro.webp') }}" width="100%"
                                        alt="santo sepulcro" loading="lazy">
                                    <i>Cristo del Santo Sepulcro</i> <br><br>
                                    <p>En el ámbito cultural, durante el Viernes Santo en Cusco se realiza la tradicional
                                        Feria de las Flores y Plantas, llamada en Quechua “Hampi Rantikuy” que tiene lugar
                                        en la plaza de San Francisco.<br> En esta feria, se pueden encontrar diversas
                                        variedades
                                        de flores y plantas que son utilizadas para la decoración de las procesiones y
                                        altares durante la Semana Santa.</p><br><br>
                                    <img src="{{ asset('img/blog/hampirantikuy-viernes-santo.webp') }}" width="100%"
                                        alt="hampirantikuy" loading="lazy">
                                    <i>"Hampirantikuy"</i> <br><br>
                                    <h3> Sábado de Gloria:</h3>
                                    <p>El Sábado Santo o de gloria, es un día de silencio y reflexión en Cusco. La Iglesia
                                        Católica lo
                                        considera el día en que Jesucristo descansó en el sepulcro después de su
                                        crucifixión. <br>En la noche, se celebra una vigilia pascual en la Catedral del
                                        Cusco.
                                    </p> <br>
                                    <h3>Domingo de Resurección:</h3>
                                    <p>El Domingo de Resurrección es el día más importante de la Semana Santa en todo el
                                        mundo cristiano. En Cusco, se celebra una procesión de la Resurrección, en la que se
                                        lleva la imagen de Cristo resucitado a través de las calles de la ciudad. <br>Es un
                                        día
                                        de alegría y celebración para los cristianos de Cusco y de todo el mundo.
                                    </p> <br><br>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Historia del Señor de los Temblores y su procesión.
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Reseña:</h3>

                                    <p>
                                        El Señor de los Temblores es una de las imágenes religiosas más veneradas en la
                                        ciudad de Cusco. La leyenda cuenta que la imagen del Cristo Moreno fue pintada por
                                        un esclavo angoleño en el siglo XVII. <br>Según la historia, un terremoto sacudió la
                                        ciudad de Cusco en 1650, y la imagen del Señor de los Temblores fue llevada en
                                        procesión por las calles de la ciudad, deteniéndose en el epicentro del temblor.<br>
                                        Después de la procesión, los temblores cesaron y la imagen fue considerada milagrosa
                                        por la población cusqueña.
                                    </p> <br>
                                    <img src="{{ asset('img/blog/señor de los temblores.webp') }}" width="100%"
                                        loading="lazy" alt="señor de los temblores">
                                    <i>Señor de los Temblores "Cristo Moreno"</i> <br><br>

                                    <h3>Procesión</h3>

                                    <p>
                                        La procesión del Señor de los Temblores tiene lugar todos los años el Lunes Santo, y
                                        es una de las más importantes de la Semana Santa en Cusco. La imagen es llevada en
                                        andas desde la Iglesia de La Merced hasta la Catedral del Cusco. La procesión es
                                        larga y emocionante, y la imagen es acompañada por bandas de música y multitudes de
                                        fieles que se unen al recorrido.<br>
                                        La procesión comienza alrededor de las 3 de la tarde, cuando la imagen del Señor de
                                        los Temblores es sacada de la Iglesia de La Merced y colocada en una plataforma de
                                        madera, cubierta de flores y velas. La imagen es llevada en hombros por los
                                        cargadores, y es seguida por una multitud de fieles que portan velas y ramas de
                                        palma.<br>
                                        El recorrido de la procesión del Señor de los Temblores se extiende por varios
                                        kilómetros, y la imagen hace varias paradas en diferentes iglesias y lugares
                                        sagrados de la ciudad. Durante la procesión, se pueden ver escenas de gran devoción
                                        y emoción, como fieles que se arrodillan y hacen oraciones, y personas que lanzan
                                        pétalos de flores rojas conocidas como “Ñucchu” al paso de la imagen.<br>

                                    </p> <br><br>
                                    <img src="{{ asset('img/blog/procesion-temblores.webp') }}" width="100%"
                                        loading="lazy" alt="procesion señor de los temblores">
                                    <i> Recorrido del Señor de los Temblores</i> <br><br>
                                    <p>
                                        Finalmente, la procesión llega a la Catedral del Cusco, donde la imagen es recibida
                                        con una misa solemne. Después de la misa, la imagen es llevada de regreso a la
                                        Iglesia de La Merced, donde es venerada por los fieles durante toda la semana
                                        santa.<br>
                                        La procesión del Señor de los Temblores es una de las tradiciones más antiguas y
                                        veneradas de la Semana Santa en Cusco, y es un evento que atrae a miles de fieles
                                        cada año. La imagen del Señor de los Temblores es considerada una protectora de la
                                        ciudad, y su procesión es un momento de gran emoción y devoción para los cusqueños.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Los tradicionales 12 platos
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Durante la Semana Santa en Cusco, en particular durante el Jueves Santo y Viernes
                                        Santo, se acostumbra a no consumir carne, por lo que los platos y postres que se
                                        preparan son a base de pescado, mariscos y vegetales.
                                    </p><br><br>
                                    <img src="{{ asset('img/blog/12-platos-cristo.webp') }}" width="100%"
                                        loading="lazy" alt="comida de semana santa">
                                    <br><br>
                                    <p>
                                        Es por eso que las familias cusqueñas tienen la tradición de consumir una variedad
                                        de platos dulces y salados que juntos suman 12. Haciéndolo en jueves o viernes santo
                                        según la preferencia personal de cada familia.
                                    </p>
                                    <img src="{{ asset('img/blog/12-platos.webp') }}" width="100%" loading="lazy"
                                        alt="12 platos semana santa">
                                    <i> 12 platos dulces y salados</i> <br><br>
                                    <p>
                                        A continuación, veremos los 12 platos y postres más comunes durante la Semana Santa
                                        en Cusco:
                                    </p>
                                    <h3> Platos:</h3>
                                    <ul>
                                        <li>Chupe de camarones: Una sopa espesa de camarones con papas, queso y especias.
                                            Es
                                            un plato muy popular en la región andina de Perú y es perfecto para una cena en
                                            familia.</li>
                                        <li>Crema de maíz: Es una sopa cremosa y espesa a base de maíz blanco y queso,
                                            que se
                                            prepara con ingredientes simples, pero con un sabor muy característico.</li>
                                        <li>Sopa de Lisas (Ollucos): Una sopa nutritiva a base de ollucos que son un
                                            tipo de
                                            tubérculo andino, y otras verduras que la hacen muy agradable al paladar.</li>
                                        <li>Arroz con mariscos: Una preparación a base de arroz, mariscos, pimientos y
                                            cebolla. Es un plato que se sirve caliente y es ideal para compartir.</li>
                                        <li>Pescado Frito: Una papa rellena de atún, huevo y aceitunas, empanizada y
                                            frita.
                                            Es un plato muy sabroso y contundente.</li>
                                        <li>Guisos de menestras: Una preparación de pescado cocido con cebolla, pimiento,
                                            zanahoria y especias, marinado en vinagre. Es un plato fresco y delicioso.</li>
                                    </ul>

                                    <img src="{{ asset('img/blog/chupe-de-camarones.webp') }}" width="100%"
                                        loading="lazy" alt="chupe de camarones">
                                    <i> Chupe de Camarones</i> <br> <br>
                                    <img src="{{ asset('img/blog/sopa-de-lisas.webp') }}" width="100%" loading="lazy"
                                        alt="sopa de lisas">
                                    <i> Sopa de Lisas (ollucos)</i> <br><br>
                                    <img src="{{ asset('img/blog/pescado-frito.webp') }}" width="100%" loading="lazy"
                                        alt="pescado frito">
                                    <i> Pescado Frito</i> <br><br>
                                    <h3>Postres:</h3>
                                    <ul>
                                        <li>Arroz con leche: Un postre a base de arroz cocido en leche y endulzado con
                                            azúcar, canela y pasas. Es un postre muy tradicional en la región andina de
                                            Perú.</li>
                                        <li>Mazamorra de chancaca: Es un postre típico de la región del Cusco en Perú,
                                            que se
                                            prepara con chancaca (un tipo de panela elaborada a partir de la caña de
                                            azúcar),
                                            maíz morado, canela y otros ingredientes. La mazamorra de chancaca cusqueña se
                                            suele
                                            servir fría, y es un postre dulce y reconfortante que puedes disfrutar en
                                            cualquier
                                            época del año.</li>
                                        <li>Guiso de Durazno: Es un postre a base de duraznos, azúcar y canela, entre
                                            otros
                                            ingredientes, se sirve frío y es bastante refrescante y delicioso.</li>
                                        <li> Condesas y Maicillos: Las condesas se tratan de pequeños bocados dulces
                                            hechos
                                            con harina, manteca, huevo, azúcar y anís. La masa se amasa y se corta en
                                            pequeñas
                                            porciones, que luego se hornean hasta que estén doradas y crujientes. Se sirven
                                            como
                                            acompañamiento para el té o el café.<br>
                                            Asi mismo, los Maicillos son galletas dulces que se elaboran con maíz y azúcar.
                                            Los
                                            maicillos tienen una textura suave y un sabor delicado.</li>
                                        <li>Suspiros: Este postre es una deliciosa combinación de merengue, leche y
                                            canela.
                                            La base es un merengue suave y esponjoso hecho con claras de huevo y azúcar, que
                                            se
                                            hornea hasta que esté crujiente por fuera y suave por dentro. <br>Luego se baña
                                            con una
                                            mezcla de leche condensada, leche evaporada y canela en polvo, lo que le da un
                                            sabor
                                            dulce y aromático. Los suspiros se sirven fríos y son una delicia para el
                                            paladar.</li>
                                        <li>Empanadas dulces: Estas empanadas tienen una masa suave y esponjosa, vienen
                                            dentro papel mantequilla y están decoradas con grajeas de colores.</li>

                                    </ul>
                                    <img src="{{ asset('img/blog/empanadas-suspiros.webp') }}" alt="suspiros y empanadas"
                                        loading="lazy" width="100%">
                                    <i>Empanadas y suspiros</i><br><br>
                                    <img src="{{ asset('img/blog/condesas-maicillos.webp') }}" alt="Condesas y maicillos"
                                        loading="lazy" width="100%">
                                    <i>Condesas y Maicillos</i><br><br>

                                    <p>
                                        Estos son algunos de los platos y postres más comunes durante la Semana Santa en
                                        Cusco.<br>
                                        Asi mismo los postres y platos de Semana Santa en Cusco son una tradición muy
                                        arraigada en la cultura gastronómica de la región, y cada familia tiene sus propias
                                        recetas y secretos para prepararlos. <br>Estos dulces son una forma de compartir y
                                        disfrutar en familia durante las celebraciones religiosas, y son una muestra de la
                                        rica diversidad cultural y culinaria de Perú.

                                    </p>

                                    <img src="{{ asset('img/blog/mazamorras.webp') }}" alt="postres peruanos"
                                        loading="lazy" width="100%">
                                    <i>Arroz con leche, Mazamorra morada y Arroz Sambito</i> <br><br>

                                    <p>
                                        Con esto concluimos que la Semana Santa en Cusco - Perú es una celebración muy
                                        importante y vibrante que combina elementos de la religión católica y las
                                        tradiciones andinas.<br>
                                        Los visitantes de Cusco durante la Semana Santa pueden experimentar una variedad de
                                        eventos culturales y religiosos, como la procesión del Domingo de Ramos y la famosa
                                        procesión del Señor de los Temblores el lunes santo, que cuenta con la imagen del
                                        Cristo de los Temblores. Además, también es una oportunidad para probar la comida
                                        típica de la región y conocer la cultura local en los mercados de artesanías y en
                                        los eventos culturales.<br>
                                        Vale la pena visitar Cusco durante la Semana Santa porque la ciudad cobra vida de
                                        una manera especial en esta época del año. Los visitantes pueden experimentar la
                                        emoción y la devoción de la gente local mientras se sumergen en una rica cultura y
                                        religión que ha sido transmitida de generación en generación.<br> Además, es una
                                        oportunidad para admirar la arquitectura colonial española y las impresionantes
                                        vistas de las montañas de los Andes que rodean la ciudad. En resumen, la Semana
                                        Santa en Cusco es una experiencia única e inolvidable que cualquier viajero debe
                                        experimentar al menos una vez en la vida!.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.shareblogs')
                </div>

                <div class="col-lg-4">
                    <div class="sticky">
                        <h3 class="text-center">Blogs de interés</h3>
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
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">

                                    <p>En este Blog encontraras una guía completa con las mejores playas de Perú.
                                    </p>

                                </div>
                            </div>
                        </a>
                        <a href="{{ route('mistura-es') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/mistura-lima-peru-Pacha-mama-Spirit.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>La feria gastronómica mas grande de latinoamerica</p>
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
