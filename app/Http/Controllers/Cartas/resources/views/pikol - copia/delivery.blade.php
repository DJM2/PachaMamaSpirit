@extends('pikol.cuerpo')
@section('titulo', 'Carta digital Pikol')
@section('contenido')
<div id="oferta" class="ofertaback">
    <div class="ofertacont">
        <button class="btn-oferta" id="cerrar-oferta"><i class="fas fa-times"></i></button>
        <img src="{{ asset('img/pikol/oferta-pikol-01.webp') }}" alt="Tu imagen de oferta">
    </div>
</div>
<div class="menu">
    <ul data-v-1c8fdb5a="" data-v-3eb1d840="" class="category-slider px-0" style="transform-origin: center top 0px;">
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#pollos">Pollos</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#criollos">Criollazos</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#casa">Los de la casa</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#sopas">Nuestras sopas</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#pikeos">Nuestros Pikeos</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#alitas">Nuestras Alitas</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#hamburguesas">Hamburguesas</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#kids">Platos Kids</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1 category-slider__item--active">
            <div><a href="#clasica">Cotelería clásica</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#autor">Coctelería de autor</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#infusiones">Infusiones </a><span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#piteados">Té piteados</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#artesanal">Cerveza artesanal</a> <span class="dot">♦</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#refrescos">Refrescantes</a></div>
        </li>
    </ul>
</div>
<div class="container" id="display">
    <div class="row">
        <div class="col-4 d-flex">
            <span id="valores" style="display:none"></span>
            <span id="numeroT" class="m-auto"></span>
        </div>
        <div class="col-4" style="text-align: center; margin: auto; display: grid;">
            <a onclick="pedido()" id="popup1-button"> Ver pedido</a>
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
                <div class="row">
                    <div class="col-6">
                        <a onclick="wasa()" class="boton-wasa"><i class="fab fa-whatsapp"></i> Enviar pedido</a>
                    </div>
                    <div class="col-6">
                        <a id="popup1-close-button" class="enviarpedido" onclick="refresh()">Nuevo
                            pedido
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</dialog>
<div class="container mt-4">
    <div class="platos row">
        <div class="col-12">
            <h2 id="pollos" class="titulo" style="padding-top: 0px;">Pollos</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/1-pollo.jpg" alt="Pikol pollo entero">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pollo">1 Pollo </span>
                            <p class="der">s/.<span id="subtotal-pollo">85</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('subtotal-pollo','num-pollo', 'valor-pollo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pollo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('subtotal-pollo','num-pollo', 'valor-pollo')"></span>
                                </div>
                                <div class="col-6 dialog d-flex">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pollo','num-pollo','pollo')">Agregar s/.<span
                                            id="valor-pollo">0.00</span>
                                    </button>
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
                    <img src="img/pikol/medio-pollo.jpg" alt="Pikol medio pollo">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="medio-pollo">1/2 Pollo </span>
                            <p class="der">s/.<span id="subtotal-mediopollo">45</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('subtotal-mediopollo','num-mediopollo', 'valor-mediopollo', 'izq')"></span>
                                    <input type="text" class="form-control input" readonly id="num-mediopollo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('subtotal-mediopollo','num-mediopollo', 'valor-mediopollo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-mediopollo','num-mediopollo','medio-pollo')">Agregar
                                        s/.<span id="valor-mediopollo">0.00</span></button>
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
                    <img src="img/pikol/cuarto-de-pollo.jpg" alt="Pikol medio pollo">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="cuarto-pollo">1/4 Pollo </span>
                            <p class="der">s/.<span id="subtotal-4pollo">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('subtotal-4pollo','num-4pollo', 'valor-4pollo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-4pollo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('subtotal-4pollo','num-4pollo', 'valor-4pollo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-4pollo','num-4pollo','cuarto-pollo')">Agregar s/.<span
                                            id="valor-4pollo">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h2 id="criollos" class="titulo">Criollazos</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/lomo-saltado.jpg" alt="Pikol medio pollo">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="lomo-saltado">Lomito Saltado </span>
                            <p class="der">s/.<span id="sub-lomo">35</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-lomo','num-lomo', 'valor-lomo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-lomo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-lomo','num-lomo', 'valor-lomo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-lomo','num-lomo','lomo-saltado')">Agregar s/.<span
                                            id="valor-lomo">0.00</span></button>
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
                    <img src="img/pikol/tallarin-saltado.jpg" alt="Pikol tallarin saltado">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="tallarin-saltado">Tallarin Saltado </span>
                            <p class="der">s/.<span id="sub-tallarin">35</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-tallarin','num-tallarin', 'valor-tallarin')"></span>
                                    <input type="text" class="form-control input" readonly id="num-tallarin"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-tallarin','num-tallarin', 'valor-tallarin')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-tallarin','num-tallarin','tallarin-saltado')">Agregar
                                        s/.<span id="valor-tallarin">0.00</span></button>
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
                    <img src="img/pikol/chaufa-pikol.jpg" alt="Chaufa Pikol DJM2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="chaufa-pikol">Chaufa Pikol </span>
                            <p class="der">s/.<span id="sub-chaufa">30</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-chaufa','num-chaufa', 'valor-chaufa')"></span>
                                    <input type="text" class="form-control input" readonly id="num-chaufa"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-chaufa','num-chaufa', 'valor-chaufa')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-chaufa','num-chaufa','chaufa-pikol')">Agregar s/.<span
                                            id="valor-chaufa">0.00</span></button>
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
                    <img src="img/pikol/pesto-con-chuleta-pikol-DJM2.png" alt="Pesto con Chuleta Pikol DJM2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pesto-chuleta">Pesto con Chuleta </span>
                            <p class="der">s/.<span id="sub-pesto">30</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pesto','num-pesto', 'valor-pesto')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pesto"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pesto','num-pesto', 'valor-pesto')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pesto','num-pesto','pesto-chuleta')">Agregar s/.<span
                                            id="valor-pesto">0.00</span></button>
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
                    <img src="img/pikol/bistek-a-lo-pobre-pikol-djm2.jpg" alt="Pesto con Chuleta Pikol DJM2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="bistec-pobre">Bistek a lo Pobre</span>
                            <p class="der">s/.<span id="sub-bistec">30</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-bistec','num-bistec', 'valor-bistec')"></span>
                                    <input type="text" class="form-control input" readonly id="num-bistec"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-bistec','num-bistec', 'valor-bistec')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-bistec','num-bistec','bistec-pobre')">Agregar s/.<span
                                            id="valor-bistec">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Los de casa-->
        <div class="col-lg-12">
            <h2 id="casa" class="titulo">Los de casa</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/brochetas-de-pollo.jpg" alt="Pikol brochetas de pollo">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="brochetas-pollo">Brochetas de Pollo</span>
                            <p class="der">s/.<span id="sub-bro">30</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-bro','num-bro', 'valor-bro')"></span>
                                    <input type="text" class="form-control input" readonly id="num-bro"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-bro','num-bro', 'valor-bro')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-bro','num-bro','brochetas-pollo')">Agregar s/.<span
                                            id="valor-bro">0.00</span></button>
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
                    <img src="img/pikol/fetuccini-a-lo-alfredo-pikol-djm2.jpg" alt="Fetuchini Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="f-alfredo">Fetuccini a lo Alfredo</span>
                            <p class="der">s/.<span id="sub-alfredo">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alfredo','num-alfredo', 'valor-alfredo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alfredo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alfredo','num-alfredo', 'valor-alfredo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alfredo','num-alfredo','f-alfredo')">Agregar s/.<span
                                            id="valor-alfredo">0.00</span></button>
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
                    <img src="img/pikol/pollo-salsa-de-champiñones.jpg" alt="Pollo en salsa de champiñones">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pollo-champi">Pollo en salsa Champiñones</span>
                            <p class="der">s/.<span id="sub-pollo-champi">30</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pollo-champi','num-pollo-champi', 'valor-pollo-champi')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pollo-champi"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pollo-champi','num-pollo-champi', 'valor-pollo-champi')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pollo-champi','num-pollo-champi','pollo-champi')">Agregar
                                        s/.<span id="valor-pollo-champi">0.00</span></button>
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
                    <img src="img/pikol/Ensalada-pikol.jpg" alt="Ensalada Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="ensalada-pikol">Ensalada Pikol</span>
                            <p class="der">s/.<span id="sub-ensalada">18</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-ensalada','num-ensalada', 'valor-ensalada')"></span>
                                    <input type="text" class="form-control input" readonly id="num-ensalada"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-ensalada','num-ensalada', 'valor-ensalada')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-ensalada','num-ensalada','ensalada-pikol')">Agregar
                                        s/.<span id="valor-ensalada">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Nuestras Sopas-->
        <div class="col-lg-12">
            <h2 id="sopas" class="titulo">Nuestras sopas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/caldo-de-gallina.jpg" alt="Caldo de gallina Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="caldo-gallina">Caldo de gallina</span>
                            <p class="der">s/.<span id="sub-caldo-gallina">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-caldo-gallina','num-caldo-gallina', 'valor-caldo-gallina')"></span>
                                    <input type="text" class="form-control input" readonly id="num-caldo-gallina"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-caldo-gallina','num-caldo-gallina', 'valor-caldo-gallina')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-caldo-gallina','num-caldo-gallina','caldo-gallina')">Agregar
                                        s/.<span id="valor-caldo-gallina">0.00</span></button>
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
                    <img src="img/pikol/sopa-a-la-minuta-pikol-djm2.jpg" alt="Sopa a la minuta Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="sopa-minuta">Sopa a la minuta</span>
                            <p class="der">s/.<span id="sub-sopa-minuta">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-sopa-minuta','num-sopa-minuta', 'valor-sopa-minuta')"></span>
                                    <input type="text" class="form-control input" readonly id="num-sopa-minuta"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-sopa-minuta','num-sopa-minuta', 'valor-sopa-minuta')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-sopa-minuta','num-sopa-minuta','sopa-minuta')">Agregar
                                        s/.<span id="valor-sopa-minuta">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Dieta de pollo Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="dieta-pollo">Dieta de pollo</span>
                            <p class="der">s/.<span id="sub-dieta-pollo">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-dieta-pollo','num-dieta-pollo', 'valor-dieta-pollo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-dieta-pollo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-dieta-pollo','num-dieta-pollo', 'valor-dieta-pollo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-dieta-pollo','num-dieta-pollo','dieta-pollo')">Agregar
                                        s/.<span id="valor-dieta-pollo">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Nuestros Pikeos-->
        <div class="col-lg-12">
            <h2 id="pikeos" class="titulo">Nuestros Pikeos</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/caldo-de-gallina.jpg" alt="Anticuchos Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="anticuchos">Anticuchos</span>
                            <p class="der">s/.<span id="sub-anticuchos">26</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-anticuchos','num-anticuchos', 'valor-anticuchos')"></span>
                                    <input type="text" class="form-control input" readonly id="num-anticuchos"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-anticuchos','num-anticuchos', 'valor-anticuchos')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-anticuchos','num-anticuchos','anticuchos')">Agregar
                                        s/.<span id="valor-anticuchos">0.00</span></button>
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
                    <img src="img/pikol/sopa-a-la-minuta-pikol-djm2.jpg" alt="Mollejitas Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="mollejas">Mollejitas</span>
                            <p class="der">s/.<span id="sub-mollejas">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-mollejas','num-mollejas', 'valor-mollejas')"></span>
                                    <input type="text" class="form-control input" readonly id="num-mollejas"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-mollejas','num-mollejas', 'valor-mollejas')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-mollejas','num-mollejas','mollejas')">Agregar
                                        s/.<span id="valor-mollejas">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Boliyucas Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="boliyucas">BoliYucas</span>
                            <p class="der">s/.<span id="sub-boliyucas">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-boliyucas','num-boliyucas', 'valor-boliyucas')"></span>
                                    <input type="text" class="form-control input" readonly id="num-boliyucas"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-boliyucas','num-boliyucas', 'valor-boliyucas')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-boliyucas','num-boliyucas','boliyucas')">Agregar
                                        s/.<span id="valor-boliyucas">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Chicharrón de pollo Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="chichapollo">Chicharrón de Pollo</span>
                            <p class="der">s/.<span id="sub-chichapollo">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-chichapollo','num-chichapollo', 'valor-chichapollo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-chichapollo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-chichapollo','num-chichapollo', 'valor-chichapollo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-chichapollo','num-chichapollo','chichapollo')">Agregar
                                        s/.<span id="valor-chichapollo">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="SalchiBrasa Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="salchibrasa">SalchiBrasa</span>
                            <p class="der">s/.<span id="sub-salchibrasa">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-salchibrasa','num-salchibrasa', 'valor-salchibrasa')"></span>
                                    <input type="text" class="form-control input" readonly id="num-salchibrasa"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-salchibrasa','num-salchibrasa', 'valor-salchibrasa')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-salchibrasa','num-salchibrasa','salchibrasa')">Agregar
                                        s/.<span id="valor-salchibrasa">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Pikeo Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pikeopikol">Pikeo Pikol</span>
                            <p class="der">s/.<span id="sub-pikeopikol">38</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pikeopikol','num-pikeopikol', 'valor-pikeopikol')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pikeopikol"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pikeopikol','num-pikeopikol', 'valor-pikeopikol')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pikeopikol','num-pikeopikol','pikeopikol')">Agregar
                                        s/.<span id="valor-pikeopikol">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Nuestras Alitas-->
        <div class="col-lg-12">
            <h2 id="alitas" class="titulo">Nuestras Alitas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/alitas-bbq.jpg" alt="Alitas bbq Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="alitasbbq">Alitas BBQ</span>
                            <p class="der">s/.<span id="sub-alitasbbq">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alitasbbq','num-alitasbbq', 'valor-alitasbbq')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alitasbbq"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alitasbbq','num-alitasbbq', 'valor-alitasbbq')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alitasbbq','num-alitasbbq','alitasbbq')">Agregar
                                        s/.<span id="valor-alitasbbq">0.00</span></button>
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
                    <img src="img/pikol/alitas-bbq.jpg" alt="Alitas bufalo Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="alitasbufalo">Alitas Búfalo</span>
                            <p class="der">s/.<span id="sub-alitasbufalo">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alitasbufalo','num-alitasbufalo', 'valor-alitasbufalo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alitasbufalo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alitasbufalo','num-alitasbufalo', 'valor-alitasbufalo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alitasbufalo','num-alitasbufalo','alitasbufalo')">Agregar
                                        s/.<span id="valor-alitasbufalo">0.00</span></button>
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
                    <img src="img/pikol/alitas-bbq.jpg" alt="Alitas Maracumango Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="alitasmango">Alitas MaracuMango</span>
                            <p class="der">s/.<span id="sub-alitasmango">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alitasmango','num-alitasmango', 'valor-alitasmango')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alitasmango"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alitasmango','num-alitasmango', 'valor-alitasmango')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alitasmango','num-alitasmango','alitasmango')">Agregar
                                        s/.<span id="valor-alitasmango">0.00</span></button>
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
                    <img src="img/pikol/alitas-bbq.jpg" alt="Alitas Maracumango Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="alitasparrilla">Alitas Parrilleras</span>
                            <p class="der">s/.<span id="sub-alitasparrilla">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alitasparrilla','num-alitasparrilla', 'valor-alitasparrilla')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alitasparrilla"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alitasparrilla','num-alitasparrilla', 'valor-alitasparrilla')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alitasparrilla','num-alitasparrilla','alitasparrilla')">Agregar
                                        s/.<span id="valor-alitasparrilla">0.00</span></button>
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
                    <img src="img/pikol/alitas-pikol.jpg" alt="Alitas Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="alitaspikol">Alitas Pikol</span>
                            <p class="der">s/.<span id="sub-alitaspikol">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-alitaspikol','num-alitaspikol', 'valor-alitaspikol')"></span>
                                    <input type="text" class="form-control input" readonly id="num-alitaspikol"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-alitaspikol','num-alitaspikol', 'valor-alitaspikol')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-alitaspikol','num-alitaspikol','alitaspikol')">Agregar
                                        s/.<span id="valor-alitaspikol">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Hamburguesas-->
        <div class="col-lg-12">
            <h2 id="hamburguesas" class="titulo">Hamburguesas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Hamburguesas Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="hamburguesa">Hamburguesas</span>
                            <p class="der">s/.<span id="sub-hamburguesa">28</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-hamburguesa','num-hamburguesa', 'valor-hamburguesa')"></span>
                                    <input type="text" class="form-control input" readonly id="num-hamburguesa"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-hamburguesa','num-hamburguesa', 'valor-hamburguesa')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-hamburguesa','num-hamburguesa','hamburguesa')">Agregar
                                        s/.<span id="valor-hamburguesa">0.00</span></button>
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
                    <img src="img/pikol/mini-hamburguesas.jpg" alt="Mini Hamburguesas Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="minihamburguesa">Mini Hamburguesas</span>
                            <p class="der">s/.<span id="sub-hamburguesa">28</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-minihamburguesa','num-minihamburguesa', 'valor-minihamburguesa')"></span>
                                    <input type="text" class="form-control input" readonly id="num-minihamburguesa"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-minihamburguesa','num-minihamburguesa', 'valor-minihamburguesa')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-minihamburguesa','num-minihamburguesa','minihamburguesa')">Agregar
                                        s/.<span id="valor-minihamburguesa">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!----Platos Kids-->
         <div class="col-lg-12">
            <h2 id="kids" class="titulo">Platos Kids</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Pollo a la plancha Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="polloplancha">Pollo a la plancha</span>
                            <p class="der">s/.<span id="sub-polloplancha">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-polloplancha','num-polloplancha', 'valor-polloplancha')"></span>
                                    <input type="text" class="form-control input" readonly id="num-polloplancha"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-polloplancha','num-polloplancha', 'valor-polloplancha')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-polloplancha','num-polloplancha','polloplancha')">Agregar
                                        s/.<span id="valor-polloplancha">0.00</span></button>
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
                    <img src="img/pikol/dieta-de-pollo--djm2.jpg" alt="Milaneza Kid Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="milanezakid">Milaneza Kid</span>
                            <p class="der">s/.<span id="sub-milanezakid">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-milanezakid','num-milanezakid', 'valor-milanezakid')"></span>
                                    <input type="text" class="form-control input" readonly id="num-milanezakid"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-milanezakid','num-milanezakid', 'valor-milanezakid')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-milanezakid','num-milanezakid','milanezakid')">Agregar
                                        s/.<span id="valor-milanezakid">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Cocteleríaa Clásica-->
        <div class="col-lg-12">
            <h2 id="clasica" class="titulo">Coctelería Clásica</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/chilcano-clasico-pikol-djm2.jpg" alt="Chilcano clasico Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="chilcano-clasico">Chilcano Clásico</span>
                            <p class="der">s/.<span id="sub-chilcano-clasico">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-chilcano-clasico','num-chilcano-clasico', 'valor-chilcano-clasico')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-chilcano-clasico" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-chilcano-clasico','num-chilcano-clasico', 'valor-chilcano-clasico')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-chilcano-clasico','num-chilcano-clasico','chilcano-clasico')">Agregar
                                        s/.<span id="valor-chilcano-clasico">0.00</span></button>
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
                    <img src="img/pikol/pisco-sour.jpg" alt="Chilcano clasico Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pisco-sour">Pisco Sour</span>
                            <p class="der">s/.<span id="sub-pisco-sour">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pisco-sour','num-pisco-sour', 'valor-pisco-sour')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pisco-sour"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pisco-sour','num-pisco-sour', 'valor-pisco-sour')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pisco-sour','num-pisco-sour','pisco-sour')">Agregar
                                        s/.<span id="valor-pisco-sour">0.00</span></button>
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
                    <img src="img/pikol/chilcano-de-maracuya.jpg" alt="Chilcano clasico Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="chilcano-maracuya">Chilcano de Maracuya</span>
                            <p class="der">s/.<span id="sub-chilcano-maracuya">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-chilcano-maracuya','num-chilcano-maracuya', 'valor-chilcano-maracuya')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-chilcano-maracuya" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-chilcano-maracuya','num-chilcano-maracuya', 'valor-chilcano-maracuya')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-chilcano-maracuya','num-chilcano-maracuya','chilcano-maracuya')">Agregar
                                        s/.<span id="valor-chilcano-maracuya">0.00</span></button>
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
                    <img src="img/pikol/maracuya-sour-pikol-djm2.jpg" alt="Maracuya Sour">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="maracuya-sour">Maracuya Sour</span>
                            <p class="der">s/.<span id="sub-maracuya-sour">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-maracuya-sour','num-maracuya-sour', 'valor-maracuya-sour')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-maracuya-sour" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-maracuya-sour','num-maracuya-sour', 'valor-maracuya-sour')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-maracuya-sour','num-maracuya-sour','maracuya-sour')">Agregar
                                        s/.<span id="valor-maracuya-sour">0.00</span></button>
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
                    <img src="img/pikol/caipiroska-de-maracuya-pikol-djm2.png" alt="Caipiroska de Maracuya">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="maracuya-caipiroska">Caipiroska de Maracuya</span>
                            <p class="der">s/.<span id="sub-maracuya-caipiroska">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-maracuya-caipiroska','num-maracuya-caipiroska', 'valor-maracuya-caipiroska')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-maracuya-caipiroska" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-maracuya-caipiroska','num-maracuya-caipiroska', 'valor-maracuya-caipiroska')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-maracuya-caipiroska','num-maracuya-caipiroska','maracuya-caipiroska')">Agregar
                                        s/.<span id="valor-maracuya-caipiroska">0.00</span></button>
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
                    <img src="img/pikol/Gin-tonic-hidden.jpg" alt="Gin Tonic">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="gin-tonic">Gin Tonic</span>
                            <p class="der">s/.<span id="sub-gin-tonic">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-gin-tonic','num-gin-tonic', 'valor-gin-tonic')"></span>
                                    <input type="text" class="form-control input" readonly id="num-gin-tonic"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-gin-tonic','num-gin-tonic', 'valor-gin-tonic')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-gin-tonic','num-gin-tonic','gin-tonic')">Agregar
                                        s/.<span id="valor-gin-tonic">0.00</span></button>
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
                    <img src="img/pikol/mojito.jpg" alt="Mojito pikol djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="mojito">Mojito</span>
                            <p class="der">s/.<span id="sub-mojito">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-mojito','num-mojito', 'valor-mojito')"></span>
                                    <input type="text" class="form-control input" readonly id="num-mojito"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-mojito','num-mojito', 'valor-mojito')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-mojito','num-mojito','mojito')">Agregar s/.<span
                                            id="valor-mojito">0.00</span></button>
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
                    <img src="img/pikol/mojito-de-maracuya-djm-pikol.jpg" alt="Mojito  maracuya pikol djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="mojito-maracuya">Mojito de Maracuya</span>
                            <p class="der">s/.<span id="sub-mojito-maracuya">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-mojito-maracuya','num-mojito-maracuya', 'valor-mojito-maracuya')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-mojito-maracuya" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-mojito-maracuya','num-mojito-maracuya', 'valor-mojito-maracuya')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-mojito-maracuya','num-mojito-maracuya','mojito-maracuya')">Agregar
                                        s/.<span id="valor-mojito-maracuya">0.00</span></button>
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
                    <img src="img/pikol/pina-colada-pikol-djm2.webp" alt="Piña colada pikol djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pina-colada">Piña Colada</span>
                            <p class="der">s/.<span id="sub-pina-colada">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pina-colada','num-pina-colada', 'valor-pina-colada')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pina-colada"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pina-colada','num-pina-colada', 'valor-pina-colada')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pina-colada','num-pina-colada','pina-colada')">Agregar
                                        s/.<span id="valor-pina-colada">0.00</span></button>
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
                    <img src="img/pikol/Apple-Martini-Djm2.webp" alt="Apple Martini djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="apple-martini">Apple Martini</span>
                            <p class="der">s/.<span id="sub-apple-martini">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-apple-martini','num-apple-martini', 'valor-apple-martini')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-apple-martini" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-apple-martini','num-apple-martini', 'valor-apple-martini')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-apple-martini','num-apple-martini','apple-martini')">Agregar
                                        s/.<span id="valor-apple-martini">0.00</span></button>
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
                    <img src="img/pikol/cosmopolitan-djm2.jpg" alt="Cosmopolitan djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="cosmopolitan">Cosmopolitan</span>
                            <p class="der">s/.<span id="sub-cosmopolitan">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-cosmopolitan','num-cosmopolitan', 'valor-cosmopolitan')"></span>
                                    <input type="text" class="form-control input" readonly
                                        id="num-cosmopolitan" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-cosmopolitan','num-cosmopolitan', 'valor-cosmopolitan')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-cosmopolitan','num-cosmopolitan','cosmopolitan')">Agregar
                                        s/.<span id="valor-cosmopolitan">0.00</span></button>
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
                    <img src="img/pikol/moscow-mule-djm2.webp" alt="Moscow Mule Pikol djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="moscow">Moscow Mule</span>
                            <p class="der">s/.<span id="sub-moscow">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-moscow','num-moscow', 'valor-moscow')"></span>
                                    <input type="text" class="form-control input" readonly id="num-moscow"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-moscow','num-moscow', 'valor-moscow')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-moscow','num-moscow','moscow')">Agregar s/.<span
                                            id="valor-moscow">0.00</span></button>
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
                    <img src="img/pikol/margarita-djm2.webp" alt="Margarita djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="margarita">Margarita</span>
                            <p class="der">s/.<span id="sub-margarita">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-margarita','num-margarita', 'valor-margarita')"></span>
                                    <input type="text" class="form-control input" readonly id="num-margarita"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-margarita','num-margarita', 'valor-margarita')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-margarita','num-margarita','margarita')">Agregar
                                        s/.<span id="valor-margarita">0.00</span></button>
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
                    <img src="img/pikol/caipirinha-djm2.webp" alt="Caipiriña djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="caipirina">Caipiriña</span>
                            <p class="der">s/.<span id="sub-caipirina">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-caipirina','num-caipirina', 'valor-caipirina')"></span>
                                    <input type="text" class="form-control input" readonly id="num-caipirina"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-caipirina','num-caipirina', 'valor-caipirina')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-caipirina','num-caipirina','caipirina')">Agregar
                                        s/.<span id="valor-caipirina">0.00</span></button>
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
                    <img src="img/pikol/negroni-djm2-pikol.jpg" alt="Negroni djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="negroni">Negroni</span>
                            <p class="der">s/.<span id="sub-negroni">24</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-negroni','num-negroni', 'valor-negroni')"></span>
                                    <input type="text" class="form-control input" readonly id="num-negroni"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-negroni','num-negroni', 'valor-negroni')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-negroni','num-negroni','negroni')">Agregar s/.<span
                                            id="valor-negroni">0.00</span></button>
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
                    <img src="img/pikol/orgasmo-coctel-djm2.jpg" alt="Orgasmo djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="orgasmo">Orgasmo</span>
                            <p class="der">s/.<span id="sub-orgasmo">22</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-orgasmo','num-orgasmo', 'valor-orgasmo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-orgasmo"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-orgasmo','num-orgasmo', 'valor-orgasmo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-orgasmo','num-orgasmo','orgasmo')">Agregar s/.<span
                                            id="valor-orgasmo">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Cocteleríaa de Author-->
        <div class="col-lg-12">
            <h2 id="autor" class="titulo">Coctelería de Autor</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/kero-punch.jpg" alt="Kero Punch Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="kero">Kero Punch</span>
                            <p class="der">s/.<span id="sub-kero">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-kero','num-kero', 'valor-kero')"></span>
                                    <input type="text" class="form-control input" readonly id="num-kero"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-kero','num-kero', 'valor-kero')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-kero','num-kero','kero')">Agregar s/.<span
                                            id="valor-kero">0.00</span></button>
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
                    <img src="img/pikol/choque-y-fuga.jpg" alt="Choque y Fuga Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="choque">Choque y Fuga</span>
                            <p class="der">s/.<span id="sub-choque">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-choque','num-choque', 'valor-choque')"></span>
                                    <input type="text" class="form-control input" readonly id="num-choque"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-choque','num-choque', 'valor-choque')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-choque','num-choque','choque')">Agregar s/.<span
                                            id="valor-choque">0.00</span></button>
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
                    <img src="img/pikol/chuspa.jpg" alt="Chuspa Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="chuspa">Chuspa</span>
                            <p class="der">s/.<span id="sub-chuspa">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-chuspa','num-chuspa', 'valor-chuspa')"></span>
                                    <input type="text" class="form-control input" readonly id="num-chuspa"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-chuspa','num-chuspa', 'valor-chuspa')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-chuspa','num-chuspa','chuspa')">Agregar s/.<span
                                            id="valor-chuspa">0.00</span></button>

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
                    <img src="img/pikol/cojito.jpg" alt="Cojito Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="cojito">Cojito</span>
                            <p class="der">s/.<span id="sub-cojito">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-cojito','num-cojito', 'valor-cojito')"></span>
                                    <input type="text" class="form-control input" readonly id="num-cojito"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-cojito','num-cojito', 'valor-cojito')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-cojito','num-cojito','cojito')">Agregar s/.<span
                                            id="valor-cojito">0.00</span></button>
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
                    <img src="img/pikol/devocion.jpg" alt="Devocion Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="devocion">Devoción</span>
                            <p class="der">s/.<span id="sub-devocion">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-devocion','num-devocion', 'valor-devocion')"></span>
                                    <input type="text" class="form-control input" readonly id="num-devocion"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-devocion','num-devocion', 'valor-devocion')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-devocion','num-devocion','devocion')">Agregar s/.<span
                                            id="valor-devocion">0.00</span></button>
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
                    <img src="img/pikol/pikolpikolpikol.png" alt="Linda Negrita Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="negrita">Linda Negrita</span>
                            <p class="der">s/.<span id="sub-negrita">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-negrita','num-negrita', 'valor-negrita')"></span>
                                    <input type="text" class="form-control input" readonly id="num-negrita"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-negrita','num-negrita', 'valor-negrita')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-negrita','num-negrita','negrita')">Agregar s/.<span
                                            id="valor-negrita">0.00</span></button>
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
                    <img src="img/pikol/el-perlado.jpg" alt="Perlado Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="perlado">Perlado</span>
                            <p class="der">s/.<span id="sub-perlado">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-perlado','num-perlado', 'valor-perlado')"></span>
                                    <input type="text" class="form-control input" readonly id="num-perlado"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-perlado','num-perlado', 'valor-perlado')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-perlado','num-perlado','perlado')">Agregar s/.<span
                                            id="valor-perlado">0.00</span></button>
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
                    <img src="img/pikol/pikolpikolpikol.png" alt="Pikol Cusco Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="pikol">Pikol</span>
                            <p class="der">s/.<span id="sub-pikol">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-pikol','num-pikol', 'valor-pikol')"></span>
                                    <input type="text" class="form-control input" readonly id="num-pikol"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-pikol','num-pikol', 'valor-pikol')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-pikol','num-pikol','pikol')">Agregar s/.<span
                                            id="valor-pikol">0.00</span></button>
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
                    <img src="img/pikol/la-brasita.jpg" alt="La Brasita Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="brasita">La Brasita</span>
                            <p class="der">s/.<span id="sub-brasita">12</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-brasita','num-brasita', 'valor-brasita')"></span>
                                    <input type="text" class="form-control input" readonly id="num-brasita"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-brasita','num-brasita', 'valor-brasita')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-brasita','num-brasita','brasita')">Agregar s/.<span
                                            id="valor-brasita">0.00</span></button>
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
                    <img src="img/pikol/pikolpikolpikol.png" alt="Green Peace Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="green">Green Peace</span>
                            <p class="der">s/.<span id="sub-green">12</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-green','num-green', 'valor-green')"></span>
                                    <input type="text" class="form-control input" readonly id="num-green"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-green','num-green', 'valor-green')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-green','num-green','green')">Agregar s/.<span
                                            id="valor-green">0.00</span></button>
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
                    <img src="img/pikol/pikolpikolpikol.png" alt="Ice Tea Djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="ice">Ice Tea</span>
                            <p class="der">s/.<span id="sub-ice">12</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-ice','num-ice', 'valor-ice')"></span>
                                    <input type="text" class="form-control input" readonly id="num-ice"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-ice','num-ice', 'valor-ice')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-ice','num-ice','ice')">Agregar s/.<span
                                            id="valor-ice">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- Infusiones -->
        <div class="col-lg-12">
            <h2 id="infusiones" class="titulo">Infusiones</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/infusiones-pikol-djm2.jpg" alt="Infusiones Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="infusion">Infusion:</span>
                                    <select class="selectP infusioni" name="infusioni" id="infusioni"
                                        onchange="updateInfusionText('infusion', 'infusioni', 'infusiont')">
                                        <option selected>...</option>
                                        <option value="Manzanilla">Manzanilla</option>
                                        <option value="Coca">Coca</option>
                                        <option value="Hierba Luisa">Hierba Luisa</option>
                                        <option value="Anís">Anís</option>
                                        <option value="Té canela">Té canela</option>
                                    </select>
                                    <span id="infusiont" style="display: none;">0</span>

                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-infusion">3.50</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-infusion','num-infusion', 'valor-infusion')"></span>
                                    <input type="text" class="form-control input" readonly id="num-infusion"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-infusion','num-infusion', 'valor-infusion')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-infusion','num-infusion','infusiont')">Agregar
                                        s/.<span id="valor-infusion">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----- Tés piteados ---->
        <div class="col-lg-12">
            <h2 id="piteados" class="titulo">Té Piteado</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/pikolpikolpikol.png" alt="Te Piteado Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="piteadop">Té Piteado Pikol</span>
                            <p class="der">s/.<span id="sub-piteadop">25</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-piteadop','num-piteadop', 'valor-piteadop')"></span>
                                    <input type="text" class="form-control input" readonly id="num-piteadop"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-piteadop','num-piteadop', 'valor-piteadop')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-piteadop','num-piteadop','piteadop')">Agregar s/.<span
                                            id="valor-piteadop">0.00</span></button>
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
                    <img src="img/pikol/pikolpikolpikol.png" alt="Te piteado clásico Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="piteadoc">Té piteado clásico</span>
                            <p class="der">s/.<span id="sub-piteadoc">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-piteadoc','num-piteadoc', 'valor-piteadoc')"></span>
                                    <input type="text" class="form-control input" readonly id="num-piteadoc"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-piteadoc','num-piteadoc', 'valor-piteadoc')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-piteadoc','num-piteadoc','piteadoc')">Agregar s/.<span
                                            id="valor-piteadoc">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- Cervezas artesanales -->
        <div class="col-lg-12">
            <h2 id="artesanal" class="titulo">Cerveza artesanal</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/cerveza-zenit-pikol.png" alt="Cerveza zenit djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="zenit">Zenit:</span>
                                    <select class="selectP zeniti" name="zeniti" id="zeniti"
                                        onchange="updateInfusionText('zenit', 'zeniti', 'zenitt')">
                                        <option selected>...</option>
                                        <option value="Trigonometria (IBU 19 - ALC5%)">Trigonometria (IBU 19 -
                                            ALC5%)</option>
                                        <option value="Pale Ale (IBU 34 - ALC2%)">Pale Ale (IBU 34 - ALC2%)</option>
                                        <option value="La hinchada peruana (IBU 19 - ALC5.5%)">La hinchada peruana
                                            (IBU 19 - ALC5.5%)</option>
                                        <option value="Porter con quinua (IBU 28 - ALC6.5%)">Porter con quinua (IBU
                                            28 - ALC6.5%)</option>
                                    </select>
                                    <span id="zenitt" style="display: none;">0</span>

                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-zenit">15</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-zenit','num-zenit', 'valor-zenit')"></span>
                                    <input type="text" class="form-control input" readonly id="num-zenit"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-zenit','num-zenit', 'valor-zenit')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-zenit','num-zenit','zenitt')">Agregar
                                        s/.<span id="valor-zenit">0.00</span></button>
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
                    <img src="img/pikol/bardock-djm2-pikol.jpg" alt="Cerveza Bardock djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="bardock">Bardock:</span>
                                    <select class="selectP bardocki" name="bardocki" id="bardocki"
                                        onchange="updateInfusionText('bardock', 'bardocki', 'bardockt')">
                                        <option selected>...</option>
                                        <option value="Pale Ale(ALC 4.88%)">Pale Ale(ALC 4.88%)</option>
                                        <option value="Red Ale (ALC 7.39%)">Red Ale (ALC 7.39%)</option>
                                        <option value="Porter (ALC 5.07%)">Porter (ALC 5.07%)</option>
                                        <option value="Ipa (ALC 7.94%)">Ipa (ALC 7.94%)</option>
                                    </select>
                                    <span id="bardockt" style="display: none;">0</span>

                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-bardock">15</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-bardock','num-bardock', 'valor-bardock')"></span>
                                    <input type="text" class="form-control input" readonly id="num-bardock"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-bardock','num-bardock', 'valor-bardock')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-bardock','num-bardock','bardockt')">Agregar
                                        s/.<span id="valor-bardock">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- Refrescantes -->
        <div class="col-lg-12">
            <h2 id="refrescos" class="titulo">Refrescantes</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/limonada.webp" alt="Limonada djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="limonada">Limonada:</span>
                                    <select class="selectP zeniti" name="zeniti" id="limonadai"
                                        onchange="updateLimonadaText('limonada', 'limonadai', 'limonadat')">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="limonadat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-limonada">0.00</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-limonada','num-limonada', 'valor-limonada', 'sub-limonada','valor-limonada')"></span>
                                    <input type="text" class="form-control input" readonly id="num-limonada"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-limonada','num-limonada', 'valor-limonada')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-limonada','num-limonada','limonadat')">Agregar
                                        s/.<span id="valor-limonada">0.00</span></button>
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
                    <img src="img/pikol/vaso-maracuya.png" alt="Maracuya djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="maracuya">Maracuya:</span>
                                    <select class="selectP zeniti" name="zeniti" id="maracuyai"
                                        onchange="updateLimonadaText('maracuya', 'maracuyai', 'maracuyat')">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="maracuyat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-maracuya">0.00</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-maracuya','num-maracuya', 'valor-maracuya', 'sub-maracuya','valor-maracuya')"></span>
                                    <input type="text" class="form-control input" readonly id="num-maracuya"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-maracuya','num-maracuya', 'valor-maracuya')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-maracuya','num-maracuya','maracuyat')">Agregar
                                        s/.<span id="valor-maracuya">0.00</span></button>
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
                    <img src="img/pikol/chicha-morada.jpg" alt="Chicha morada djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="morada">Chicha Morada:</span>
                                    <select class="selectP zeniti" name="zeniti" id="moradai"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="moradat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-morada">0.00</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-morada','num-morada', 'valor-morada', 'sub-morada','valor-morada')"></span>
                                    <input type="text" class="form-control input" readonly id="num-morada"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-morada','num-morada', 'valor-morada')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-morada','num-morada','moradat')">Agregar
                                        s/.<span id="valor-morada">0.00</span></button>
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
                    <img src="img/pikol/limonada.webp" alt="Hierba Buena djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="hierba">Hierba Buena:</span>
                                    <select class="selectP zeniti" name="zeniti" id="hierbai"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="hierbat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-hierba">0.00</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-hierba','num-hierba', 'valor-hierba', 'sub-hierba','valor-hierba')"></span>
                                    <input type="text" class="form-control input" readonly id="num-hierba"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-hierba','num-hierba', 'valor-hierba')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-hierba','num-hierba','hierbat')">Agregar
                                        s/.<span id="valor-hierba">0.00</span></button>
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
                    <img src="img/pikol/limonada.webp" alt="Limonada Frozen djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="limonadaf">Limonada Frozen:</span>
                                    <select class="selectP zeniti" name="zeniti" id="limonadafi"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="limonadaft" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-limonadaf">0.00</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-limonadaf','num-limonadaf', 'valor-limonadaf', 'sub-limonadaf','valor-limonadaf')"></span>
                                    <input type="text" class="form-control input" readonly id="num-limonadaf"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-limonadaf','num-limonadaf', 'valor-limonadaf')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-limonadaf','num-limonadaf','limonadaft')">Agregar
                                        s/.<span id="valor-limonadaf">0.00</span></button>
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
                    <img src="img/pikol/limonada.webp" alt="Maracuya Frozen djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="maracuyaf">Maracuya Frozen:</span>
                                    <select class="selectP zeniti" name="zeniti" id="maracuyafi"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="maracuyaft" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-maracuyaf">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-maracuyaf','num-maracuyaf', 'valor-maracuyaf', 'sub-maracuyaf','valor-maracuyaf')"></span>
                                    <input type="text" class="form-control input" readonly id="num-maracuyaf"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-maracuyaf','num-maracuyaf', 'valor-maracuyaf')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-maracuyaf','num-maracuyaf','maracuyaft')">Agregar
                                        s/.<span id="valor-maracuyaf">0</span></button>
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
                    <img src="img/pikol/limonada.webp" alt="Maracuya Frozen djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="moradaf">Chicha Morada Frozen:</span>
                                    <select class="selectP zeniti" name="zeniti" id="moradafi"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="moradaft" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-moradaf">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-moradaf','num-moradaf', 'valor-moradaf', 'sub-moradaf','valor-moradaf')"></span>
                                    <input type="text" class="form-control input" readonly id="num-moradaf"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-moradaf','num-moradaf', 'valor-moradaf')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-moradaf','num-moradaf','moradaft')">Agregar
                                        s/.<span id="valor-moradaf">0</span></button>
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
                    <img src="img/pikol/limonada.webp" alt="Maracuya Frozen djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="hierbaf">Hierba Buena Frozen:</span>
                                    <select class="selectP zeniti" name="zeniti" id="hierbafi"
                                        onchange="updateLimonadaText()">
                                        <option selected>...</option>
                                        <option value="Vaso">Vaso</option>
                                        <option value="Jarra">Jarra</option>
                                    </select>
                                    <span id="hierbaft" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-hierbaf">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-hierbaf','num-hierbaf', 'valor-hierbaf', 'sub-hierbaf','valor-hierbaf')"></span>
                                    <input type="text" class="form-control input" readonly id="num-hierbaf"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-hierbaf','num-hierbaf', 'valor-hierbaf')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-hierbaf','num-hierbaf','hierbaft')">Agregar
                                        s/.<span id="valor-hierbaf">0</span></button>
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
                    <img src="img/pikol/Coca-cola.png" alt="Coca Cola djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="coca">Coca Cola:</span>
                                    <select class="selectP cocai" name="cocai" id="cocai"
                                        onchange="updateGasText('coca', 'cocai', 'cocat', 'sub-coca', 'valor-coca', 5, 10, 15, 'num-coca')">
                                        <option selected>...</option>
                                        <option value="medioLitro">1/2 Litro</option>
                                        <option value="Litro">Litro</option>
                                        <option value="2Litros">2 Litros</option>
                                    </select>
                                    <span id="cocat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-coca">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-coca','num-coca', 'valor-coca', 'sub-coca','valor-coca')"></span>
                                    <input type="text" class="form-control input" readonly id="num-coca"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-coca','num-coca', 'valor-coca')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-coca','num-coca','cocat')">Agregar
                                        s/.<span id="valor-coca">0</span></button>
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
                    <img src="img/pikol/inca-kola.png" alt="Inca Cola djm2 Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-6">
                                    <span class="izq" id="inka">Inca Kola:</span>
                                    <select class="selectP inkai" name="inkai" id="inkai"
                                        onchange="updateGasText('inka', 'inkai', 'inkat', 'sub-inka', 'valor-inka', 5, 10, 15, 'num-inka')">
                                        <option selected>...</option>
                                        <option value="medioLitro">1/2 Litro</option>
                                        <option value="Litro">Litro</option>
                                        <option value="2Litros">2 Litros</option>
                                    </select>
                                    <span id="inkat" style="display: none;">0</span>
                                </div>
                                <div class="col-6">
                                    <p class="der">s/.<span id="sub-inka">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-inka','num-inka', 'valor-inka', 'sub-inka','valor-inka')"></span>
                                    <input type="text" class="form-control input" readonly id="num-inka"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-inka','num-inka', 'valor-inka')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-inka','num-inka','inkat')">Agregar
                                        s/.<span id="valor-inka">0</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 plato mb-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/pikol/pikolpikolpikol.png" alt="Agua Pikol">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq" id="agua">Agua c/s gas</span>
                            <p class="der">s/.<span id="sub-agua">3.50</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento"
                                        onclick="decrementar('sub-agua','num-agua', 'valor-agua')"></span>
                                    <input type="text" class="form-control input" readonly id="num-agua"
                                        value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo"
                                        onclick="incrementar('sub-agua','num-agua', 'valor-agua')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido"
                                        onclick="sumar('valor-agua','num-agua','agua')">Agregar s/.<span
                                            id="valor-agua">0</span></button>
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