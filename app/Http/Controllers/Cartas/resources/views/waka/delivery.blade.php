@extends('waka.cuerpo')
@section('titulo')
@section('contenido')
<!----A l e r t a----->
<div class="overlay" id="pop">
    <div class="alert alert-danger text-center" role="alert" id="error-message">
        La cantidad no puede ser cero
        <button type="button" class="btn-close" id="close-alert" onclick="cerrarpop()"></button>
    </div>
</div>
<div class="menu">
    <ul data-v-1c8fdb5a="" data-v-3eb1d840="" class="category-slider px-0" style="transform-origin: center top 0px;">
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#alitas">Alitas</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#parrillas">Parrillas</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#piqueos">Piqueos</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#casa">De la casa</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#salchipapas">Salchipapas</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1 category-slider__item--active">
            <div><a href="#adicionales">Adicionales</a> <span class="dot">•</span></div>
        </li>
        <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
            <div><a href="#bebidas">Bebidas</a> </div>
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
</dialog>
<div class="container mt-4">
    <div class="platos row">
        <!-----Alitas------>
        <div class="col-12">
            <h2 id="alitas" class="titulo" style="padding-top: 0px;">Alitas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Alitas djm2 Bufalo waka runtu">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="bufalo">Búfalo:</span>
                                    <span class="descripcion">Alitas con salsa agridulce picante con camote o papa
                                        frita.</span>
                                    <select class="selectP bufaloi" name="bufaloi" id="bufaloi" onchange="updateGasText('bufalo', 'bufaloi', 'bufalot', 'sub-bufalo', 'valor-bufalo', 15, 21, 27, 'num-bufalo')">
                                        <option selected>Selccionar porción</option>
                                        <option value="x6">x6</option>
                                        <option value="x9">x9</option>
                                        <option value="x12">x12</option>
                                    </select>
                                    <span id="bufalot" style="display: none;">0</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-bufalo">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-bufalo','num-bufalo', 'valor-bufalo', 'sub-bufalo','valor-bufalo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-bufalo" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-bufalo','num-bufalo', 'valor-bufalo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-bufalo','num-bufalo','bufalot')">Agregar
                                        s/.<span id="valor-bufalo">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Alitas djm2 Bufalo waka runtu">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="bbq">BBQ:</span>
                                    <span class="descripcion">Alitas con salsa BBQ con papas fritas.</span>
                                    <select class="selectP bbqi" name="bbqi" id="bbqi" onchange="updateGasText('bbq', 'bbqi', 'bbqt', 'sub-bbq', 'valor-bbq', 15, 21, 27, 'num-bbq')">
                                        <option selected>Seleccionar porción</option>
                                        <option value="x6">x6</option>
                                        <option value="x9">x9</option>
                                        <option value="x12">x12</option>
                                    </select>
                                    <span id="bbqt" style="display: none;">0</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-bbq">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-bbq','num-bbq', 'valor-bbq', 'sub-bbq','valor-bbq')"></span>
                                    <input type="text" class="form-control input" readonly id="num-bbq" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-bbq','num-bbq', 'valor-bbq')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-bbq','num-bbq','bbqt')">Agregar
                                        s/.<span id="valor-bbq">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Crispy djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="crispy">Crispy</span>
                            <p class="der">s/.<span id="subtotal-crispy">17</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-crispy','num-crispy', 'valor-crispy')"></span>
                                    <input type="text" class="form-control input" readonly id="num-crispy" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-crispy','num-crispy', 'valor-crispy')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-crispy','num-crispy','crispy')">Agregar
                                        s/.<span id="valor-crispy">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Acevichadas djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="ceviche">Acevichada</span>
                            <p class="der">s/.<span id="subtotal-ceviche">20</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-ceviche','num-ceviche', 'valor-ceviche')"></span>
                                    <input type="text" class="form-control input" readonly id="num-ceviche" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-ceviche','num-ceviche', 'valor-ceviche')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-ceviche','num-ceviche','ceviche')">Agregar s/.<span
                                            id="valor-ceviche">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="estaciones1">4 Estaciones x12</span>
                                    <span class="descripcion">
                                        3 alitas avecichadas, 3 alitas crispy, 3 alitas BBQ y 3 alitas búfalo con
                                        papa y camote frito.
                                    </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-estaciones1">35</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>

                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-estaciones1','num-estaciones1', 'valor-estaciones1')"></span>
                                    <input type="text" class="form-control input" readonly id="num-estaciones1" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-estaciones1','num-estaciones1', 'valor-estaciones1')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-estaciones1','num-estaciones1','estaciones1')">Agregar
                                        s/.<span id="valor-estaciones1">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="estaciones2">4 Estaciones x24</span>
                                    <span class="descripcion">
                                        6 alitas avecichadas, 6 alitas crispy, 6 alitas BBQ y 6 alitas búfalo con
                                        papa y camote frito.
                                    </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-estaciones2">70</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-estaciones2','num-estaciones2', 'valor-estaciones2')"></span>
                                    <input type="text" class="form-control input" readonly id="num-estaciones2" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-estaciones2','num-estaciones2', 'valor-estaciones2')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-estaciones2','num-estaciones2','estaciones2')">Agregar
                                        s/.<span id="valor-estaciones2">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----P a r r i l l a s-->
        <div class="col-lg-12">
            <h2 id="parrillas" class="titulo">Parrillas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="familiarw">Super Familiar WakaRuntu</span>
                                    <span class="descripcion">
                                        2 medallones de lomo fino, 2 chuletas de cerdo, 2 chulets de res, 2 filetes
                                        de pollo, 2 anticuchos de corazón, chorizos, chunchuli, pancita, mollejitas,
                                        canasta de papa extragrande y ensalada. </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-familiarw">180</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>

                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-familiarw','num-familiarw', 'valor-familiarw')"></span>
                                    <input type="text" class="form-control input" readonly id="num-familiarw" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-familiarw','num-familiarw', 'valor-familiarw')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-familiarw','num-familiarw','familiarw')">Agregar
                                        s/.<span id="valor-familiarw">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones2 djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="familiars">Super Familiar</span>
                                    <span class="descripcion">
                                        2 chuletas de cerdo, 2 chulets de res, 2 filetes
                                        de pollo, 2 anticuchos de corazón, chorizos, chunchuli, pancita, mollejitas,
                                        canasta de papa extragrande y ensalada. </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-familiars">153</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>

                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-familiars','num-familiars', 'valor-familiars')"></span>
                                    <input type="text" class="form-control input" readonly id="num-familiars" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-familiars','num-familiars', 'valor-familiars')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-familiars','num-familiars','familiars')">Agregar
                                        s/.<span id="valor-familiars">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones2 djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="familiar">Familiar</span>
                                    <span class="descripcion">
                                        Chuletas de cerdo, chulets de res, filete
                                        de pollo, anticuchos de corazón, chorizos, chunchuli, pancita, mollejitas,
                                        canasta de papa frita y ensalada. </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-familiar">81</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>

                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-familiar','num-familiar', 'valor-familiar')"></span>
                                    <input type="text" class="form-control input" readonly id="num-familiar" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-familiar','num-familiar', 'valor-familiar')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-familiar','num-familiar','familiar')">Agregar
                                        s/.<span id="valor-familiar">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="4 estaciones2 djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="personal">Parrillero Personal</span>
                                    <span class="descripcion">
                                        Chueta de cerdo o de res, filete de pollo, anticucho de corazon, chorizos,
                                        chunchuli, canasta de papa frita y ensalada.
                                    </span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-personal">39.5</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>

                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-personal','num-personal', 'valor-personal')"></span>
                                    <input type="text" class="form-control input" readonly id="num-personal" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-personal','num-personal', 'valor-personal')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-personal','num-personal','personal')">Agregar
                                        s/.<span id="valor-personal">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----P i q u e o s-->
        <div class="col-lg-12">
            <h2 id="piqueos" class="titulo">Piqueos</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Anticuhcos djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="anti">Anticuchos</span>
                            <p class="der">s/.<span id="sub-anti">15</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-anti','num-anti', 'valor-anti')"></span>
                                    <input type="text" class="form-control input" readonly id="num-anti" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-anti','num-anti', 'valor-anti')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-anti','num-anti','anti')">Agregar
                                        s/.<span id="valor-anti">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Tequeños djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="teque">Tequeños</span>
                            <p class="der">s/.<span id="sub-teque">18.5</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-teque','num-teque', 'valor-teque')"></span>
                                    <input type="text" class="form-control input" readonly id="num-teque" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-teque','num-teque', 'valor-teque')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-teque','num-teque','teque')">Agregar
                                        s/.<span id="valor-teque">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---- D e - C a s a ----->
        <div class="col-lg-12">
            <h2 id="casa" class="titulo">De la casa</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Alitas djm2 Bufalo waka runtu">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="chanchito">Chanchito WakaRuntu:</span>
                                    <span class="descripcion">Panceta de cerdo crocante por fuera y jugosa por
                                        dentro, acompañada de papas, camote y ensalada fresca.</span>
                                    <select class="selectP chanchitoi" name="chanchitoi" id="chanchitoi" onchange="chanchito('chanchito', 'chanchitoi', 'chanchitot', 'sub-chanchito', 'valor-chanchito', 24, 27, 'num-chanchito')">
                                        <option selected>¿Deseas tamal?</option>
                                        <option value="Sin tamal">Sin tamal</option>
                                        <option value="Con tamal">Con Tamal</option>
                                    </select>
                                    <span id="chanchitot" style="display: none;">0</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-chanchito">0</span></p>
                                </div>
                            </div>
                            <div class="linea" style="margin-top:1em"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-chanchito','num-chanchito', 'valor-chanchito', 'sub-chanchito','valor-chanchito')"></span>
                                    <input type="text" class="form-control input" readonly id="num-chanchito" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-chanchito','num-chanchito', 'valor-chanchito')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-chanchito','num-chanchito','chanchitot')">Agregar
                                        s/.<span id="valor-chanchito">0</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Chaufa grillada djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="grilla">Arroz chaufa con carne grillada</span>
                                    <span class="descripcion">Arroz chaufa compañado de carne grillada (Chuleta de
                                        res o chuleta de cerdo o filete de pollo)</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-grilla">28</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-grilla','num-grilla', 'valor-grilla')"></span>
                                    <input type="text" class="form-control input" readonly id="num-grilla" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-grilla','num-grilla', 'valor-grilla')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-grilla','num-grilla','grilla')">Agregar
                                        s/.<span id="valor-grilla">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Chaufa grillada djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="milaneza">Milaneza de pechuga de pollo</span>
                                    <span class="descripcion">Milaneza de pollo crocante con papas fritas, arroz
                                        graneado y ensalada fresca.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-milaneza">26</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-milaneza','num-milaneza', 'valor-milaneza')"></span>
                                    <input type="text" class="form-control input" readonly id="num-milaneza" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-milaneza','num-milaneza', 'valor-milaneza')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-milaneza','num-milaneza','milaneza')">Agregar
                                        s/.<span id="valor-milaneza">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Chuño Putti djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="phuti">Chuño Phuti</span>
                                    <span class="descripcion">Revuelto de chuño con huevo y queso, acompañada de
                                        carne grillada (chuleta de res o chuleta de cerdo o filete de pollo).</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-phuti">27</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-phuti','num-phuti', 'valor-phuti')"></span>
                                    <input type="text" class="form-control input" readonly id="num-phuti" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-phuti','num-phuti', 'valor-phuti')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-phuti','num-phuti','phuti')">Agregar
                                        s/.<span id="valor-phuti">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-------- S a l c h i p a p a s -------->
        <div class="col-12">
            <h2 id="salchipapas" class="titulo" style="padding-top: 0px;">Salchipapas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Salchipapa Waka Runtu djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="salchi">Salchipapas Waka Runtu</span>
                                    <span class="descripcion">Salchicha, chorizo, pollo deshilachado, huevos fritos, y papas fritas.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-salchi">26</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-salchi','num-salchi', 'valor-salchi')"></span>
                                    <input type="text" class="form-control input" readonly id="num-salchi" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-salchi','num-salchi', 'valor-salchi')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-salchi','num-salchi','salchi')">Agregar
                                        s/.<span id="valor-salchi">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Salchipollo djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="salchipollo">Salchipollo</span>
                                    <span class="descripcion">Pollo deshilachado , Salchichas, papas fritas  y ensalada.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-salchipollo">17.50</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-salchipollo','num-salchipollo', 'valor-salchpollo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-salchipollo" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-salchipollo','num-salchipollo', 'valor-salchipollo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-salchipollo','num-salchipollo','salchipollo')">Agregar
                                        s/.<span id="valor-salchipollo">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Choripapa djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="chori">Choripapa</span>
                                    <span class="descripcion">Chorizo parillero, papas fritas y salsas.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-chori">17.50</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-chori','num-chori', 'valor-chori')"></span>
                                    <input type="text" class="form-control input" readonly id="num-chori" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-chori','num-chori', 'valor-chori')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-chori','num-chori','chori')">Agregar
                                        s/.<span id="valor-chori">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Mollejitas djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="mollejas">Mollejitas</span>
                                    <span class="descripcion">Molejas suaves papas fritas y salsas.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-mollejas">17.50</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-mollejas','num-mollejas', 'valor-mollejas')"></span>
                                    <input type="text" class="form-control input" readonly id="num-mollejas" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-mollejas','num-mollejas', 'valor-mollejas')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-mollejas','num-mollejas','mollejas')">Agregar
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
                    <img src="img/logo-waka-runtu.jpg" alt="Salchipapas djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <div class="row">
                                <div class="col-8">
                                    <span class="izq" id="salchipapas">Salchipapas</span>
                                    <span class="descripcion">Salchichas, papas fritas y salsas.</span>
                                </div>
                                <div class="col-4">
                                    <p class="der">s/.<span id="sub-salchipapas">13.50</span></p>
                                </div>
                            </div>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('sub-salchipapas','num-salchipapas', 'valor-salchipapas')"></span>
                                    <input type="text" class="form-control input" readonly id="num-salchipapas" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('sub-salchipapas','num-salchipapas', 'valor-salchipapas')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-salchipapas','num-salchipapas','salchipapas')">Agregar
                                        s/.<span id="valor-salchipapas">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------- A d i c i o n a l e s ------>
        <div class="col-lg-12">
            <h2 id="adicionales" class="titulo">Adicionales</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Acevichadas djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="papas">Papas fritas</span>
                            <p class="der">s/.<span id="subtotal-papas">5</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-papas','num-papas', 'valor-papas')"></span>
                                    <input type="text" class="form-control input" readonly id="num-papas" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-papas','num-papas', 'valor-papas')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-papas','num-papas','papas')">Agregar s/.<span
                                            id="valor-papas">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Camote frito djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="camote">Camote frito</span>
                            <p class="der">s/.<span id="subtotal-camote">5</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-camote','num-camote', 'valor-camote')"></span>
                                    <input type="text" class="form-control input" readonly id="num-camote" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-camote','num-camote', 'valor-camote')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-camote','num-camote','camote')">Agregar s/.<span
                                            id="valor-camote">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Camote frito djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="camote">Camote frito</span>
                            <p class="der">s/.<span id="subtotal-camote">5</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-camote','num-camote', 'valor-camote')"></span>
                                    <input type="text" class="form-control input" readonly id="num-camote" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-camote','num-camote', 'valor-camote')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-camote','num-camote','camote')">Agregar s/.<span
                                            id="valor-camote">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Arroz djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="arroz">Arroz</span>
                            <p class="der">s/.<span id="subtotal-arroz">4</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-arroz','num-arroz', 'valor-arroz')"></span>
                                    <input type="text" class="form-control input" readonly id="num-arroz" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-arroz','num-arroz', 'valor-arroz')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-arroz','num-arroz','arroz')">Agregar s/.<span
                                            id="valor-arroz">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Pan al ajo djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="panajo">Pan al ajo</span>
                            <p class="der">s/.<span id="subtotal-panajo">6</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-panajo','num-panajo', 'valor-panajo')"></span>
                                    <input type="text" class="form-control input" readonly id="num-panajo" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-panajo','num-panajo', 'valor-panajo')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-panajo','num-panajo','panajo')">Agregar s/.<span
                                            id="valor-panajo">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Pan al ajo djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="addsalchi">Salchicha</span>
                            <p class="der">s/.<span id="subtotal-addsalchi">6</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-addsalchi','num-addsalchi', 'valor-addsalchi')"></span>
                                    <input type="text" class="form-control input" readonly id="num-addsalchi" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-addsalchi','num-addsalchi', 'valor-addsalchi')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-addsalchi','num-addsalchi','addsalchi')">Agregar s/.<span
                                            id="valor-addsalchi">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Pan al ajo djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="addchori">Chorizo</span>
                            <p class="der">s/.<span id="subtotal-addchori">6</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-addchori','num-addchori', 'valor-addchori')"></span>
                                    <input type="text" class="form-control input" readonly id="num-addchori" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-addchori','num-addchori', 'valor-addchori')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-addchori','num-addchori','addchori')">Agregar s/.<span
                                            id="valor-addchori">0.00</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------ B e b i d a s ------>
        <div class="col-lg-12">
            <h2 id="bebidas" class="titulo">Bebidas</h2>
            <div class="subrayado"></div>
        </div>
        <div class="col-lg-6 plato">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/logo-waka-runtu.jpg" alt="Cerveza artesanal djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="artesanal">Cerveza artesanal</span>
                            <p class="der">s/.<span id="subtotal-artesanal">14</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-artesanal','num-artesanal', 'valor-artesanal')"></span>
                                    <input type="text" class="form-control input" readonly id="num-artesanal" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-artesanal','num-artesanal', 'valor-artesanal')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-artesanal','num-artesanal','artesanal')">Agregar s/.<span
                                            id="valor-artesanal">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Te piteado djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="piteado">Té piteado</span>
                            <p class="der">s/.<span id="subtotal-piteado">8.50</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-piteado','num-piteado', 'valor-piteado')"></span>
                                    <input type="text" class="form-control input" readonly id="num-piteado" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-piteado','num-piteado', 'valor-piteado')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-piteado','num-piteado','piteado')">Agregar s/.<span
                                            id="valor-piteado">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Cafe djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="cafe">Café</span>
                            <p class="der">s/.<span id="subtotal-cafe">5.00</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-cafe','num-cafe', 'valor-cafe')"></span>
                                    <input type="text" class="form-control input" readonly id="num-cafe" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-cafe','num-cafe', 'valor-cafe')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-cafe','num-cafe','cafe')">Agregar s/.<span
                                            id="valor-cafe">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Cafe djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="tes">Té o mates</span>
                            <p class="der">s/.<span id="subtotal-tes">4.00</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-tes','num-tes', 'valor-tes')"></span>
                                    <input type="text" class="form-control input" readonly id="num-tes" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-tes','num-tes', 'valor-tes')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-tes','num-tes','tes')">Agregar s/.<span
                                            id="valor-tes">0.00</span></button>
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
                    <img src="img/logo-waka-runtu.jpg" alt="Cafe djm2">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row margin-left">
                        <div class="col-12 pedido">
                            <span class="izq2" id="refresh">Refresco Litro</span>
                            <p class="der">s/.<span id="subtotal-refresh">8.00</span></p>
                            <div class="linea"></div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-6 d-flex dialog">
                                    <span class="fa-solid fa-minus" id="decremento" onclick="decrementar('subtotal-refresh','num-refresh', 'valor-refresh')"></span>
                                    <input type="text" class="form-control input" readonly id="num-refresh" value="0">
                                    <span class="fa-solid fa-plus" id="botonactivo" onclick="incrementar('subtotal-refresh','num-refresh', 'valor-refresh')"></span>
                                </div>
                                <div class="col-6 d-flex dialog">
                                    <button class="enviarpedido" onclick="sumar('valor-refresh','num-refresh','refresh')">Agregar s/.<span
                                            id="valor-refresh">0.00</span></button>
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