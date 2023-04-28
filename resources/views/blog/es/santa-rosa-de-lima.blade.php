@extends('layouts.app')
@php $titulo="Santa Rosa de Lima - Perú" @endphp
@php $descripcion="Santa Rosa de Lima, patrona de la policía nacional del Perú, y representante de las enfermeras peruanas." @endphp
@php $keywords="santa rosa de lima, patrona de america, santa rosa" @endphp
@php $img="https://pachamamaspirit.com/img/blog/santa-rosa-de-Lima-Pacha-Mama-Spirit.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    @include('layouts.menu-castellano')
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
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a href="{{ route('blog-peru') }}">Blog</a>
                                / <a>Santa Rosa de Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="text-center">"Santa Rosa de Lima: La patrona de América"</h2>
                    <div class="linea-blogs"></div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    ¿Quíen fué Santa Rosa de Lima?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <i>
                                        “Santa Rosa de Lima”, patrona de la policía nacional del
                                        Perú, y representante de las enfermeras peruanas, a la cual se le atribuyen una
                                        serie de milagros e interesantes historias, representa el motivo de muchas
                                        tradiciones en el Perú, el día 30 de agosto de cada año, miles de peruanos y
                                        peruanas le rinden homenaje a la mejor conocida “Patrona de América”.
                                        Conoceremos estos y muchos datos más de la primera mujer de América latina
                                        declarada santa por la iglesia católica.
                                    </i><br><br>
                                    <p>
                                        Santa Rosa de Lima, cuyo verdadero nombre era Isabel Flores de Oliva, fue una
                                        mujer cristiana terciaria dominica, canonizada en 1671 por el papa Clemente X.
                                        Resaltó siempre por su belleza y noble corazón, ya que consagraba su vida a la
                                        atención de enfermos, ancianos, niños, y realizaba prácticas ascéticas, lo cual
                                        llevo por muchos lugares su fama de santidad.<br><br>
                                        Aún en vida ella ya era muy venerada, ya que poseía ciertos dones, se le
                                        atribuían visiones místicas y una serie de milagros. Por esta razón en un poco
                                        más de medio siglo la iglesia católica la canonizó declarándola patrona de Lima
                                        y Perú, y poco tiempo después patrona de América, Filipinas e Indias Orientales.
                                    </p>
                                    <img src="{{ asset('img/blog/santa-rosa-de-Lima-Pacha-Mama-Spirit.webp') }}"
                                        width="100%" alt="Santa Rosa de Lima Pacha Mama Spirit" loading="lazy">
                                    <i>Foto: Santa Rosa de Lima</i><br><br>
                                    <h3>Historia de su nacimiento y origen de su nombre: Santa Rosa de Lima</h3>
                                    <p>
                                        Santa Rosa de Lima nació el 20 de abril de 1586 en la vecindad del hospital del
                                        Espíritu Santo de la ciudad de Lima, que en esa época era la capital del
                                        virreinato del Perú. Fue la cuarta de los 12 hijos de Gaspar Flores (un
                                        arcabucero de la guardia virreinal natural de San Juan de Puerto Rico) y de la
                                        limeña María de Oliva.<br><br>
                                        Al nacer ella fue bautizada como Isabel Flores de Oliva, pero en el momento de
                                        su confirmación le dieron el nombre de “Rosa”, ya que éste era el nombre que
                                        toda su familia empleaba hacia ella prácticamente desde su nacimiento, ¿El
                                        motivo? su excepcional belleza tan resaltante , pero también por una visión que
                                        tuvo su madre, en la cual ella observó que el rostro de su pequeña niña se
                                        convertía en una rosa. Por esas razones Santa Rosa asumiría definitivamente ese
                                        nombre.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    El inicio de la vocación de Santa Rosa de Lima
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Desde su infancia había ya indicios que manifestaban en la futura santa su
                                        vocación religiosa, así como una singular elevación espiritual. Había aprendido
                                        música, canto y poesía, dotes que fueron aprendidas de su madre, ya que ella se
                                        dedicaba a instruir a las hijas de la nobleza en aquellos tiempos.
                                        Cerca a los 10 años Rosa realizaba peculiares actividades: ayunaba a pan y agua,
                                        colocaba maderos en su cama, virutas y cañas en su almohada, también utilizó
                                        cilicios para flagelar su frágil cuerpo, todo esto, con la convicción de su
                                        fidelidad a Cristo.<br><br>
                                        En realidad, desde muy pequeña, ella mostró su vocación por ayudar a los demás,
                                        por esta razón añadiendo a las acciones de ayuno o autoflagelo que ella
                                        realizaba, sus padre intentaron desviarla de este camino cristiano e incluso
                                        empezaron a buscarle algún matrimonio conveniente, pero Rosa, nunca cedió a esas
                                        pretensiones. Incluso, en su adolescencia Santa Rosa se sintió atraída con
                                        fuerza por el modelo de la dominica Santa Catalina de Siena (mística toscana del
                                        siglo XIV) y siguiendo el ejemplo de ésta, se despojó de su atractiva cabellera
                                        e hizo un voto de castidad perpetua, contrariando así definitivamente los planes
                                        de sus padres para ella.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Milagros atribuidos a Santa Rosa
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        En toda la historia se le atribuyeron muchos milagros a Santa Rosa de Lima,
                                        destacaremos 5 de ellos:
                                    </p>
                                    <h3>Protección de la ciudad de Lima del corsario holandés Joris Spitberg</h3>
                                    <p>
                                        En 1615, la ciudad de Lima corría el peligro inminente de ser saqueada por el
                                        pirata holandés Joris Spitberg quien fue contratado por Holanda para tomar por
                                        asalto el virreinato del Perú, sus planes eran desembarcar en el Callao y
                                        saquear Lima con la ayuda de 300 hombres, que navegaban junto a él en seis
                                        navíos a su cargo.<br><br>
                                        Al llegar el corsario holandés a El Callao se corrió el rumor de que tomaría el
                                        convento de Santo Domingo para profanarlo y robar sus tesoros. Entonces, la
                                        joven Isabel Flores con 29 años en ese entonces, corrió decidida al templo para
                                        protegerlo con su propio cuerpo, ella estaba dispuesta a morir en defensa de los
                                        valores católicos, por lo que empezó a suplicar por la protección de Lima a la
                                        Virgen del Rosario.<br><br>
                                        Spitberg decidió no desembarcar en El Callao ni atacar la ciudad de Lima. Siguió
                                        su rumbo hacia Paita y Acapulco y nunca más regresó. El pueblo limeño entonces
                                        atribuyó estas acciones a las plegarias y súplicas de la Santa.
                                    </p>
                                    <h3>Lluvia de flores perfumadas frente al Papa Clemente IX</h3>
                                    <p>
                                        Este es uno de los milagros más conocidos de la santa limeña. Según los relatos,
                                        el Papa Clemente IX, tenía dudas acerca de los poderes y milagros de Santa Rosa
                                        y quería cerciorarse de ellos antes de beatificarla.<br><br>
                                        Luego de oír los relatos de sus milagros, el Sumo Pontífice habría dicho:
                                        “¿Patrona y Santa? ¿Flores y Rosas?, entonces que lluevan flores sobre mi
                                        escritorio si esto verdad”. Fue asi cuando entonces comenzó a caer sobre la mesa
                                        del Papa una lluvia de rosas que lo dejó estupefacto. Fue así entonces como
                                        aprobó su canonización, y la joven Isabel Flores de Oliva
                                        pasó a llamarse Santa Rosa de Lima.
                                    </p>
                                    <h3>La aparición al pueblo filipino y su protección durante la II Guerra Mundial
                                    </h3>
                                    <p>
                                        Otra de las historias que se cuentan de Santa Rosa es el milagro de su aparición
                                        a varios centenares de filipinos que huían del asedio japonés durante la guerra.
                                        Mientras las tropas del Ejército imperial avanzaban cerca de ese lugar, la santa
                                        peruana hizo su aparición y los condujo hasta un templo cercano donde les
                                        ofreció refugio y alimento. Se dice que una hermosa dama vestida con una túnica
                                        blanca y negra los guió hasta la iglesia, en la parroquia de Santa Rosa.<br><br>
                                        Cuando estaban dentro, ella les ofreció abundante pescado y arroz. Agradecidos,
                                        todos caían de rodillas al ingresar al templo y reconocer su imagen en el altar.
                                        Posteriormente las tropas japonesas llegaron hasta la iglesia. Los oficiales que
                                        encabezaban el pelotón intentaron ingresar montados en sus caballos, pero fue en
                                        vano porque los animales se resistían.
                                    </p>
                                    <h3>Curaba a los enfermos con la imagen del Niño Jesús</h3>
                                    <p>
                                        Otro de los milagros por los cuales creció la fé de los limeños hacia Santa Rosa
                                        fue la sanación de los enfermos, utilizando una estampita de Jesús al que
                                        llamaba “niño doctorcito” y rezaba diariamente. Según las historias que se
                                        cuentan sobre estos milagros, Santa Rosa era devota del Niño Jesús y tenía en su
                                        casa una imagen del Divino Niño.<br><br>
                                        Los enfermos acudían a ella en busca de cura para sus males. Ella amablemente
                                        encomendaba su curación al “niño doctorcito”. A partir de ese punto, la fe
                                        católica en el Divino Niño se extendió por todo el continente.
                                    </p>
                                    <h3>El matrimonio místico con Jesús</h3>
                                    <p>
                                        Santa Rosa contrajo un matrimonio místico con Jesús de Nazareth, en el convento
                                        de Santo Domingo de Lima. A este milagro también se le conoce como el
                                        “desposorio místico” entre Jesús y Santa Rosa de Lima.
                                        Ocurrió en 1617 durante el Domingo de Ramos; ella tenía 31 años. Ese día ella no
                                        recibió ninguna palma, por lo cual pensó que Dios estaba molesto con ella por
                                        alguna ofensa.
                                        Entonces se dirigió a la Capilla del Rosario donde lloró y suplicó por perdón a
                                        Jesús, y este le respondió: “Rosa de mi corazón, yo te quiero por esposa”. Ella
                                        contestó al Señor que sería su más “humilde esclava”.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Ultimos años, muerte y canonización
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        En 1615, y con la ayuda de su hermano favorito, Hernando Flores de Herrera,
                                        construyó una pequeña celda o ermita en el jardín de la casa de sus padres.
                                        Allí, en un espacio de poco más de dos metros cuadrados (que aun hoy es posible
                                        apreciar), Santa Rosa se recogía a orar y a hacer penitencia, practicando su
                                        severo ascetismo, con una corona de espinas bajo su velo, sus cabellos clavados
                                        a la pared para no quedarse dormida, bebía hielo, y hacía ayunos
                                        rigurosos.<br><br>
                                        Sus biógrafos cuentan que sus experiencias místicas y estados de éxtasis eran
                                        muy frecuentes. Según parece, cada semana ella experimentaba un estado de
                                        éxtasis parecido al de Santa Catalina de Ricci, se dice que cada jueves por la
                                        mañana se encerraba en su oratorio y no volvía en sí hasta el sábado. Se le
                                        atribuyeron asimismo varios dones, como el de la profecía (según la tradición,
                                        profetizó su muerte un año antes).<br><br>
                                        Pero, Santa Rosa sufrió en ese tiempo la incomprensión de su familia y amigos y
                                        padeció etapas de mucho vacío, pero todo ello fructificó sus intensas
                                        experiencias espirituales, llenas de éxtasis y prodigios, como la comunicación
                                        con plantas y animales, sin perder jamás la alegría de su espíritu (aficionado a
                                        componer canciones de amor con simbolismo místico) y la belleza de su rostro.
                                    </p>
                                    <h3>El Día de su Muerte:</h3>
                                    <p>
                                        Santa Rosa de Lima cayó gravemente enferma y quedó afectada por una aguda
                                        hemiplejía. La virgen limeña entregó así su alma a Dios, el 24 de agosto de
                                        1617, en las primeras horas de la madrugada; tenía sólo 31 años.<br><br>
                                        El mismo día de su muerte, por la tarde, se efectuó el traslado del cadáver de
                                        Santa Rosa al convento grande de los dominicos, llamado de Nuestra Señora del
                                        Rosario.
                                    </p>

                                    <h3>Canonización</h3>
                                    <p>
                                        El proceso que condujo a la beatificación y canonización de Rosa de Lima empezó
                                        de inmediato en 1617-1618 por el arzobispo de Lima, Bartolomé Lobo Guerrero.
                                        Tras cinco décadas de procedimiento, el papa Clemente IX la beatificó en 1668, y
                                        un año después la declaró patrona de Lima y de Perú. Luego, Clemente X, la
                                        canonizó en 1671 y además la declaró patrona principal de América, Filipinas y
                                        las Indias Orientales.<br><br>

                                        Es así como cada 30 de agosto se declara feriado en el Perú, por motivo de
                                        celebración y homenaje a La patrona Santa Rosa de Lima, sin duda una mujer llena
                                        de virtudes y dones incomparables.
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
                                    El pozo de los deseos de Santa Rosa de Lima
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        En la actualidad en la ciudad de Lima, exactamente en el Cercado de Lima, donde
                                        vivía antiguamente la familia de Isabel Flores de Oliva, se ubica el santuario
                                        de Santa Rosa, que tiene como mayor atracción el llamado Pozo de los deseos,
                                        donde cada año, miles de peruanos devotos se aproximan a rendir homenaje a la
                                        Santa Limeña, y se tiene por tradición escribir una carta, pidiendo un deseo o
                                        una petición especial y luego se arroja la carta al interior del pozo, esperando
                                        así que la petición sea cumplida por ella.
                                    </p>
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
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>Las fiestas patrias en Perú se celebran a lo grande alrededor de todo el país</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('fiestas-patrias-peru') }}">
                            <div class="row blogSpace">
                                <div class="col-4">
                                    <img src="{{ asset('img/blog/thumb/the-best-beaches-of-Peru.webp') }}"
                                        alt="Fiestas patrias Perú" class="imgCuadrada">
                                </div>
                                <div class="col-8">
                                    <p>En este Blog encontraras una guía completa con las mejores playas de Perú.</p>
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
                                    <p>La feria gastron+omica más grande Latinoamérica esta en Perú</p>
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
