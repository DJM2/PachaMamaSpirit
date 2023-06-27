@extends('ricospan.cuerpo')
@section('titulo', 'Carta digital Ricos Pan')
@section('contenido')
    <div class="menu">
        <ul data-v-1c8fdb5a="" data-v-3eb1d840="" class="category-slider px-0" style="transform-origin: center top 0px;">
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#bisabor">Tortas Bisabor</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#especiales">Tortas Especiales</a> <span class="dot">•</span></div>
            </li>
        </ul>
    </div>
    <div class="container" id="display">
        <div class="row">
            <div class="col-4 d-flex">
                <span id="valores" style="display: none;"></span>
                <span id="numeroT" class="m-auto"></span>
            </div>
            <div class="col-4" style="text-align: center; margin: auto; display: grid;">
                <a onclick="pedidol()" id="popup1-button"> Ver pedido</a>
            </div>
            <div class="col-4">
                <p id="mtotal"></p>
            </div>
        </div>
    </div>
    <dialog id="popup1-dialog">
        <div class="row">
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-12 precioEnvio mb-3">
                        <span style="display:block; float:left; margin-top: 0.4em;"> Total:</span>
                        <p style="float:right" id="mtotal-pop"></p>
                    </div>
                    <div class="col-12">
                        <span id="valores-pop" style="display:block; float:left"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4" style="text-align: center; margin: auto; display: grid;">
                <div class="row">
                    <div class="col-12">
                        <a id="popup1-close-button" class="enviarpedido" onclick="refresh()">Nuevo
                            pedido
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
    <div class="container mt-4">
        <div class="platos row">
            <!-----Alitas------>
            <div class="col-12">
                <h2 id="bisabor" class="titulo" style="padding-top: 0px;">Tortas Bisabores</h2>
                <div class="subrayado"></div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Torta clásica djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="bisabor18">Bisabor Clásica 18</span>
                                        <span class="descripcion">
                                            • 18cm <br>
                                            • 15 porciones <br>
                                            • Torta en 2 capas de vainilla y chocolate
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisabor18">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>

                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisabor18','num-bisabor18', 'valor-bisabor18')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisabor18"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisabor18','num-bisabor18', 'valor-bisabor18')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisabor18','num-bisabor18','bisabor18')">Agregar
                                            s/.<span id="valor-bisabor18">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Torta clásica djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="bisabor22">Bisabor Clásica 22</span>
                                        <span class="descripcion">
                                            • 22 cm <br>
                                            • 18 porciones <br>
                                            • Torta en 2 capas de vainilla y chocolate
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisabor22">35</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>

                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisabor22','num-bisabor22', 'valor-bisabor22')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisabor22"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisabor22','num-bisabor22', 'valor-bisabor22')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisabor22','num-bisabor22','bisabor22')">Agregar
                                            s/.<span id="valor-bisabor22">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Torta clásica djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="bisabor25">Bisabor Clásica 25</span>
                                        <span class="descripcion">
                                            • 25 cm <br>
                                            • 20 porciones <br>
                                            • Torta en 2 capas de vainilla y chocolate
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisabor25">40</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>

                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisabor25','num-bisabor25', 'valor-bisabor25')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisabor25"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisabor25','num-bisabor25', 'valor-bisabor25')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisabor25','num-bisabor25','bisabor25')">Agregar
                                            s/.<span id="valor-bisabor25">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Torta clásica djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="bisabor29">Bisabor Clásica 29</span>
                                        <span class="descripcion">
                                            • 29 cm <br>
                                            • 25 porciones <br>
                                            • Torta en 2 capas de vainilla y chocolate
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisabor29">45</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>

                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisabor29','num-bisabor29', 'valor-bisabor29')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisabor29"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisabor29','num-bisabor29', 'valor-bisabor29')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisabor29','num-bisabor29','bisabor29')">Agregar
                                            s/.<span id="valor-bisabor29">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ E s p e c i a l e s ------>
            <div class="col-lg-12">
                <h2 id="especiales" class="titulo">Tortas Especiales</h2>
                <div class="subrayado"></div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Torta Helada djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="helada">Torta Helada</span>
                                        <span class="descripcion">
                                            Bizcochuelo suave de vainilla con carlota de fresa(leche batida, gelatina de
                                            fresa), cubierta con gelatina de fresa con trozos de durazno en almibar.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-helada">55</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-helada','num-helada', 'valor-helada')"></span>
                                        <input type="text" class="form-control input" readonly id="num-helada"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-helada','num-helada', 'valor-helada')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-helada','num-helada','helada')">Agregar
                                            s/.<span id="valor-helada">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Tres Leches djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="3leches">Tres Leches</span>
                                        <span class="descripcion">
                                            Bizcochuelo de vainilla esponjoso humedecida con 3 leches, bañada con chantilly
                                            espolvoreada con canela.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-3leches">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-3leches','num-3leches', 'valor-3leches')"></span>
                                        <input type="text" class="form-control input" readonly id="num-3leches"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-3leches','num-3leches', 'valor-3leches')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-3leches','num-3leches','3leches')">Agregar
                                            s/.<span id="valor-3leches">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Tres Leches djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="canache">Canache</span>
                                        <span class="descripcion">
                                            Torta de chocolate y vainilla, rellena de lúcuma y manjar, bañada con chantilly
                                            y crema de lúcuma con chocolate rallado a los lados.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-canache">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-canache','num-canache', 'valor-canache')"></span>
                                        <input type="text" class="form-control input" readonly id="num-canache"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-canache','num-canache', 'valor-canache')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-canache','num-canache','canache')">Agregar
                                            s/.<span id="valor-canache">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Tres Leches djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="sacher">Sacher</span>
                                        <span class="descripcion">
                                            Torta de chocolate rellena con cobertura de chocolate, bañada con chantilly y
                                            cobertura de chocolate.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sacher">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sacher','num-sacher', 'valor-sacher')"></span>
                                        <input type="text" class="form-control input" readonly id="num-sacher"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sacher','num-sacher', 'valor-sacher')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sacher','num-sacher','sacher')">Agregar
                                            s/.<span id="valor-sacher">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Chips de lúcuma djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="chips">Chips de Lúcuma</span>
                                        <span class="descripcion">
                                            Torta de vainilla con chispas de chocolate, rellena con crema de lúcuma y bañada
                                            con crema chantilly de lúcuma y chocolate.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chips">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chips','num-chips', 'valor-chips')"></span>
                                        <input type="text" class="form-control input" readonly id="num-chips"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chips','num-chips', 'valor-chips')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chips','num-chips','chips')">Agregar
                                            s/.<span id="valor-chips">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Moka djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="moka">Moka</span>
                                        <span class="descripcion">
                                            Torta de chocolate rellena de pecanas y bañada con chantilly con café.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-moka">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-moka','num-moka', 'valor-moka')"></span>
                                        <input type="text" class="form-control input" readonly id="num-moka"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-moka','num-moka', 'valor-moka')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-moka','num-moka','moka')">Agregar
                                            s/.<span id="valor-moka">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Damero djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="damero">Damero</span>
                                        <span class="descripcion">
                                            Torta de chocolate y vainilla en forma de ajedrez rellena de manjar, bañada en
                                            chantilly y cobertura de chocolate.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-damero">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-damero','num-damero', 'valor-damero')"></span>
                                        <input type="text" class="form-control input" readonly id="num-damero"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-damero','num-damero', 'valor-damero')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-damero','num-damero','damero')">Agregar
                                            s/.<span id="valor-damero">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Doble chocolate djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="doblec">Doble de chocolate</span>
                                        <span class="descripcion">
                                            Torta de chocolate, rellena de manjar, bañada con ganache de chocolate y
                                            chocolate rallado.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-doblec">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-doblec','num-doblec', 'valor-doblec')"></span>
                                        <input type="text" class="form-control input" readonly id="num-doblec"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-doblec','num-doblec', 'valor-doblec')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-doblec','num-doblec','doblec')">Agregar
                                            s/.<span id="valor-doblec">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Viena maracuya djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="viena">Viena de Maracuyá</span>
                                        <span class="descripcion">
                                            Torta de vainilla rellena con pecanas y chantilly de maracuyá, bañada en
                                            chantilly y manjar.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-viena">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-viena','num-viena', 'valor-viena')"></span>
                                        <input type="text" class="form-control input" readonly id="num-viena"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-viena','num-viena', 'valor-viena')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-viena','num-viena','viena')">Agregar
                                            s/.<span id="valor-viena">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Selva negra djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="selva">Selva Negra</span>
                                        <span class="descripcion">
                                            Torta suave de chocolate, rellena con trozos de durazno en almíbar y mermelada,
                                            bañada en chantilly con chocolate rallado en los bordes.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-selva">60</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-selva','num-selva', 'valor-selva')"></span>
                                        <input type="text" class="form-control input" readonly id="num-selva"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-selva','num-selva', 'valor-selva')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-selva','num-selva','selva')">Agregar
                                            s/.<span id="valor-selva">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/ricospan/ricos-pan.jpg" alt="Candy cake djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq" id="candy">Candy Cake</span>
                                        <span class="descripcion">
                                            Torta selva negra cuvierta con grageas de chocolate, gomitas, caramelos, doña pepa y galletas.
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-candy">70</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-candy','num-candy', 'valor-candy')"></span>
                                        <input type="text" class="form-control input" readonly id="num-candy"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-candy','num-candy', 'valor-candy')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-candy','num-candy','candy')">Agregar
                                            s/.<span id="valor-candy">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
@endsection
