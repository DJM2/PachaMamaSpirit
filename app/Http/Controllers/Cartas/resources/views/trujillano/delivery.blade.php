@extends('trujillano.cuerpo')
@section('titulo', 'Rincón Trujillano - Carta Digital')
@section('contenido')
<div id="oferta" class="ofertaback">
    <div class="ofertacont">
        <button class="btn-oferta" id="cerrar-oferta"><i class="fas fa-times"></i></button>
        <img src="{{ asset('img/trujillano/oferta.jpeg') }}" alt="Oferta Trujillano">
    </div>
</div>
    <div class="menu">
        <ul data-v-1c8fdb5a="" data-v-3eb1d840="" class="category-slider px-0" style="transform-origin: center top 0px;">
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#fondo">Platos de Fondo</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#pescados">Pescados Fritos</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#milanezas">Milanezas</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#chicharrones">Chicharrones</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#chaufas">Chaufas</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#ceviches">Ceviches</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#sudados">Sudados</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#picantes">Picantes</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#entradas">Entradas</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#sopas">Sopas y Caldos</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#porciones">Porciones</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#bebidas">Bebidas</a> <span class="dot">•</span></div>
            </li>
            <li data-v-1c8fdb5a="" class="category-slider__item rounded px-1 mx-1">
                <div><a href="#infusiones">Infusiones</a> </div>
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
                    <div class="col-6">
                        <a class="boton-wasa" onclick="wasa()"><i class="fab fa-whatsapp"></i> Delivery</a>
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
            <!----- P l a t o s   d e  F o n d o ------>
            <div class="col-12">
                <h2 id="fondo" class="titulo" style="padding-top: 0px;">Platos de fondo</h2>
                <div class="subrayado"></div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/seco-de-cordero-trujillano.jpg" alt="Seco de cordero djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="secoyuca">Seco de cordero con arroz y yuca.</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-secoyuca">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-secoyuca','num-secoyuca', 'valor-secoyuca')"></span>
                                        <input type="text" class="form-control input" readonly id="num-secoyuca"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-secoyuca','num-secoyuca', 'valor-secoyuca')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-secoyuca','num-secoyuca','secoyuca')">Agregar
                                            s/.<span id="valor-secoyuca">0.00</span></button>
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
                        <img src="img/trujillano/seco-frejoles.jpg">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="secofrejol">Seco de cordero con arroz y frejoles.</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-secofrejol">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-secofrejol','num-secofrejol', 'valor-secofrejol')"></span>
                                        <input type="text" class="form-control input" readonly id="num-secofrejol"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-secofrejol','num-secofrejol', 'valor-secofrejol')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-secofrejol','num-secofrejol','secofrejol')">Agregar
                                            s/.<span id="valor-secofrejol">0.00</span></button>
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
                        <img src="img/trujillano/asado-con-arroz.jpg" alt="Asado a la olla con arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="asadoarroz">Asado a la olla con arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-asadoarroz">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-asadoarroz','num-asadoarroz', 'valor-asadoarroz')"></span>
                                        <input type="text" class="form-control input" readonly id="num-asasoarroz"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-asadoarroz','num-asadoarroz', 'valor-asadoarroz')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-asadoarroz','num-asadoarroz','asadoarroz')">Agregar
                                            s/.<span id="valor-asadoarroz">0.00</span></button>
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
                        <img src="img/trujillano/asado-con-pure.jpg" alt="Asado a la olla con puré djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="asadopure">Asado a la olla con Puré</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-asadopure">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-asadopure','num-asadopure', 'valor-asadopure')"></span>
                                        <input type="text" class="form-control input" readonly id="num-asadopure"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-asadopure','num-asadopure', 'valor-asadopure')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-asadopure','num-asadopure','asadopure')">Agregar
                                            s/.<span id="valor-asadopure">0.00</span></button>
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
                        <img src="img/trujillano/aji-de-gallina.jpg" alt="Aji de gallina con arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="ajidegallina">Ají de Gallina con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-ajidegallina">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-ajidegallina','num-ajidegallina', 'valor-ajidegallina')"></span>
                                        <input type="text" class="form-control input" readonly id="num-ajidegallina"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-ajidegallina','num-ajidegallina', 'valor-ajidegallina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-ajidegallina','num-ajidegallina','ajidegallina')">Agregar
                                            s/.<span id="valor-ajidegallina">0.00</span></button>
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
                        <img src="img/trujillano/arroz-con-pato.jpg" alt="Arroz con Pato djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="arrozpato">Arroz con Pato</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-arrozpato">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-arrozpato','num-arrozpato', 'valor-arrozpato')"></span>
                                        <input type="text" class="form-control input" readonly id="num-arrozpato"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-arrozpato','num-arrozpato', 'valor-arrozpato')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-arrozpato','num-arrozpato','arrozpato')">Agregar
                                            s/.<span id="valor-arrozpato">0.00</span></button>
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
                        <img src="img/trujillano/pato-guisado.jpg" alt="Pato Guisado djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="patoguisado">Pato Guisado</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-patoguisado">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-patoguisado','num-patoguisado', 'valor-patoguisado')"></span>
                                        <input type="text" class="form-control input" readonly id="num-patoguisado"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-patoguisado','num-patoguisado', 'valor-patoguisado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-patoguisado','num-patoguisado','patoguisado')">Agregar
                                            s/.<span id="valor-patoguisado">0.00</span></button>
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
                        <img src="img/trujillano/arroz-con-pollo.jpg" alt="Arroz con Pollo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="arrozconpollo">Arroz con Pollo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-arrozconpollo">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-arrozconpollo','num-arrozconpollo', 'valor-arrozconpollo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-arrozconpollo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-arrozconpollo','num-arrozconpollo', 'valor-arrozconpollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-arrozconpollo','num-arrozconpollo','arrozconpollo')">Agregar
                                            s/.<span id="valor-arrozconpollo">0.00</span></button>
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
                        <img src="img/trujillano/carapulcra-con-arroz.jpg" alt="Carapulcra con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="carapulcra">Carapulcra con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-carapulcra">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-carapulcra','num-carapulcra', 'valor-carapulcra')"></span>
                                        <input type="text" class="form-control input" readonly id="num-carapulcra"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-carapulcra','num-carapulcra', 'valor-carapulcra')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-carapulcra','num-carapulcra','carapulcra')">Agregar
                                            s/.<span id="valor-carapulcra">0.00</span></button>
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
                        <img src="img/trujillano/cau-cau-con-arroz.jpg" alt="Cau cau con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="caucauarroz">Cau cau con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-caucauarroz">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-caucauarroz','num-caucauarroz', 'valor-caucauarroz')"></span>
                                        <input type="text" class="form-control input" readonly id="num-caucauarroz"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-caucauarroz','num-caucauarroz', 'valor-caucauarroz')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-caucauarroz','num-caucauarroz','caucauarroz')">Agregar
                                            s/.<span id="valor-caucauarroz">0.00</span></button>
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
                        <img src="img/trujillano/estofado-con-arroz.jpg" alt="Estofado con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="estofadoarroz">Estofado con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-estofadoarroz">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-estofadoarroz','num-estofadoarroz', 'valor-estofadoarroz')"></span>
                                        <input type="text" class="form-control input" readonly id="num-estofadoarroz"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-estofadoarroz','num-estofadoarroz', 'valor-estofadoarroz')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-estofadoarroz','num-estofadoarroz','estofadoarroz')">Agregar
                                            s/.<span id="valor-estofadoarroz">0.00</span></button>
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
                        <img src="img/trujillano/tacu-tacu-con-seco.jpg" alt="Tacu Tacu con Seco djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tacutacuseco">Tacu Tacu con Seco</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tacutacuseco">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tacutacuseco','num-tacutacuseco', 'valor-tacutacuseco')"></span>
                                        <input type="text" class="form-control input" readonly id="num-tacutacuseco"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tacutacuseco','num-tacutacuseco', 'valor-tacutacuseco')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tacutacuseco','num-tacutacuseco','tacutacuseco')">Agregar
                                            s/.<span id="valor-tacutacuseco">0.00</span></button>
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
                        <img src="img/trujillano/tacu-tacu-con-pato.jpg" alt="Tacu Tacu con Pato Guisado djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tacutacupato">Tacu Tacu con Pato Guisado</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tacutacupato">37</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tacutacupato','num-tacutacupato', 'valor-tacutacupato')"></span>
                                        <input type="text" class="form-control input" readonly id="num-tacutacupato"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tacutacupato','num-tacutacupato', 'valor-tacutacupato')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tacutacupato','num-tacutacupato','tacutacupato')">Agregar
                                            s/.<span id="valor-tacutacupato">0.00</span></button>
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
                        <img src="img/trujillano/tallarines-con-pollo.jpg" alt="Tallarines con Pollo (Guiso) djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tallarinespollo">Tallarines con Pollo (Guiso)</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tallarinespollo">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tallarinespollo','num-tallarinespollo', 'valor-tallarinespollo')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-tallarinespollo" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tallarinespollo','num-tallarinespollo', 'valor-tallarinespollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tallarinespollo','num-tallarinespollo','tallarinespollo')">Agregar
                                            s/.<span id="valor-tallarinespollo">0.00</span></button>
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
                        <img src="img/trujillano/tallarines-saltados.jpg" alt="Tallarines Saltados Criollos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tallarinsaltado">Tallarines Saltados Criollos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tallarinsaltado">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tallarinsaltado','num-tallarinsaltado', 'valor-tallarinsaltado')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-tallarinsaltado" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tallarinsaltado','num-tallarinsaltado', 'valor-tallarinsaltado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tallarinsaltado','num-tallarinsaltado','tallarinsaltado')">Agregar
                                            s/.<span id="valor-tallarinsaltado">0.00</span></button>
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
                        <img src="img/trujillano/tallarines-chifas.jpg" alt="Tallarines Chifas djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tallarineschifa">Tallarines Chifas</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tallarineschifa">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tallarineschifa','num-tallarineschifa', 'valor-tallarineschifa')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-tallarineschifa" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tallarineschifa','num-tallarineschifa', 'valor-tallarineschifa')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tallarineschifa','num-tallarineschifa','tallarineschifa')">Agregar
                                            s/.<span id="valor-tallarineschifa">0.00</span></button>
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
                        <img src="img/trujillano/lengua-con-arroz.jpg"
                            alt="Lengua Guisada con Arroz y Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="lenguafrejoles">Lengua Guisada con Arroz y
                                            Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-lenguafrejoles">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-lenguafrejoles','num-lenguafrejoles', 'valor-lenguafrejoles')"></span>
                                        <input type="text" class="form-control input" readonly id="num-lenguafrejoles"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-lenguafrejoles','num-lenguafrejoles', 'valor-lenguafrejoles')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-lenguafrejoles','num-lenguafrejoles','lenguafrejoles')">Agregar
                                            s/.<span id="valor-lenguafrejoles">0.00</span></button>
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
                        <img src="img/trujillano/lengua-con-pure.jpg"
                            alt="Lengua Guisada con Arroz y Puré djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="lenguapure">Lengua Guisada con Arroz y Puré</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-lenguapure">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-lenguapure','num-lenguapure', 'valor-lenguapure')"></span>
                                        <input type="text" class="form-control input" readonly id="num-lenguapure"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-lenguapure','num-lenguapure', 'valor-lenguapure')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-lenguapure','num-lenguapure','lenguapure')">Agregar
                                            s/.<span id="valor-lenguapure">0.00</span></button>
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
                        <img src="img/trujillano/pollo-a-la-plancha.jpg" alt="Pollo a la plancha con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="polloplancha">Pollo a la Plancha con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-polloplancha">25</span></p>
                                    </div>
                                </div>
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
                        <img src="img/trujillano/bisteck-con-arroz.jpg" alt="Bisteck con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="bisteckarroz">Bisteck con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisteckarroz">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisteckarroz','num-bisteckarroz', 'valor-bisteckarroz')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisteckarroz"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisteckarroz','num-bisteckarroz', 'valor-bisteckarroz')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisteckarroz','num-bisteckarroz','bisteckarroz')">Agregar
                                            s/.<span id="valor-bisteckarroz">0.00</span></button>
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
                        <img src="img/trujillano/bisteck-con-papas.jpg"
                            alt="Bisteck con Arroz y Papas Fritas djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="bisteckpapas">Bisteck con Arroz y Papas Fritas</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisteckpapas">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisteckpapas','num-bisteckpapas', 'valor-bisteckpapas')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisteckpapas"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisteckpapas','num-bisteckpapas', 'valor-bisteckpapas')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisteckpapas','num-bisteckpapas','bisteckpapas')">Agregar
                                            s/.<span id="valor-bisteckpapas">0.00</span></button>
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
                        <img src="img/trujillano/bisteck-montado.jpg" alt="Bisteck Montado djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="bisteckmontado">Bisteck Montado</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisteckmontado">29</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisteckmontado','num-bisteckmontado', 'valor-bisteckmontado')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisteckmontado"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisteckmontado','num-bisteckmontado', 'valor-bisteckmontado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisteckmontado','num-bisteckmontado','bisteckmontado')">Agregar
                                            s/.<span id="valor-bisteckmontado">0.00</span></button>
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
                        <img src="img/trujillano/bisteck-a-lo-pobre.jpg" alt="Bisteck a lo Pobre djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="bisteckpobre">Bisteck a lo Pobre</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisteckpobre">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisteckpobre','num-bisteckpobre', 'valor-bisteckpobre')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisteckpobre"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisteckpobre','num-bisteckpobre', 'valor-bisteckpobre')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisteckpobre','num-bisteckpobre','bisteckpobre')">Agregar
                                            s/.<span id="valor-bisteckpobre">0.00</span></button>
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
                        <img src="img/trujillano/bisteck-apanado.jpg" alt="Bisteck Apanado con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="bisteckapanado">Bisteck Apanado con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-bisteckapanado">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-bisteckapanado','num-bisteckapanado', 'valor-bisteckapanado')"></span>
                                        <input type="text" class="form-control input" readonly id="num-bisteckapanado"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-bisteckapanado','num-bisteckapanado', 'valor-bisteckapanado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-bisteckapanado','num-bisteckapanado','bisteckapanado')">Agregar
                                            s/.<span id="valor-bisteckapanado">0.00</span></button>
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
                        <img src="img/trujillano/lomo-saltado.jpg" alt="Lomo Saltado con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="lomosaltado">Lomo Saltado con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-lomosaltado">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-lomosaltado','num-lomosaltado', 'valor-lomosaltado')"></span>
                                        <input type="text" class="form-control input" readonly id="num-lomosaltado"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-lomosaltado','num-lomosaltado', 'valor-lomosaltado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-lomosaltado','num-lomosaltado','lomosaltado')">Agregar
                                            s/.<span id="valor-lomosaltado">0.00</span></button>
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
                        <img src="img/trujillano/lomo-fino-con-arroz.jpg" alt="Lomo Fino con Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="lomofino">Lomo Fino con Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-lomofino">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-lomofino','num-lomofino', 'valor-lomofino')"></span>
                                        <input type="text" class="form-control input" readonly id="num-lomofino"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-lomofino','num-lomofino', 'valor-lomofino')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-lomofino','num-lomofino','lomofino')">Agregar
                                            s/.<span id="valor-lomofino">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ P e s c a d o s  F r i t o s ------>

            <div class="col-lg-12">
                <h2 id="pescados" class="titulo">Pescados Fritos</h2>
                <div class="subrayado"></div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/pescados-fritos.jpg" alt="Corvina con Arroz y Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="corvina">Corvina con Arroz y Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-corvina">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-corvina','num-corvina', 'valor-corvina')"></span>
                                        <input type="text" class="form-control input" readonly id="num-corvina"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-corvina','num-corvina', 'valor-corvina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-corvina','num-corvina','corvina')">Agregar
                                            s/.<span id="valor-corvina">0.00</span></button>
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
                        <img src="img/trujillano/pescados-fritos.jpg" alt="Cojinova con Arroz y Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cojinova">Cojinova con Arroz y Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cojinova">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cojinova','num-cojinova', 'valor-cojinova')"></span>
                                        <input type="text" class="form-control input" readonly id="num-cojinova"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cojinova','num-cojinova', 'valor-cojinova')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cojinova','num-cojinova','cojinova')">Agregar
                                            s/.<span id="valor-cojinova">0.00</span></button>
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
                        <img src="img/trujillano/pescados-fritos.jpg" alt="Trucha con Arroz y Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="trucha">Trucha con Arroz y Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-trucha">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-trucha','num-trucha', 'valor-trucha')"></span>
                                        <input type="text" class="form-control input" readonly id="num-trucha"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-trucha','num-trucha', 'valor-trucha')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-trucha','num-trucha','trucha')">Agregar
                                            s/.<span id="valor-trucha">0.00</span></button>
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
                        <img src="img/trujillano/pescados-fritos.jpg" alt="Toyo con Arroz y Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="toyo">Toyo con Arroz y Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-toyo">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-toyo','num-toyo', 'valor-toyo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-toyo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-toyo','num-toyo', 'valor-toyo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-toyo','num-toyo','toyo')">Agregar
                                            s/.<span id="valor-toyo">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ M i l a n e z a s ------>

            <div class="col-lg-12">
                <h2 id="milanezas" class="titulo">Milanezas</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/milaneza-carne.jpg" alt="Milaneza de Carne djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="milanezacarne">Milaneza de Carne</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-milanezacarne">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-milanezacarne','num-milanezacarne', 'valor-milanezacarne')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-milanezacarne" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-milanezacarne','num-milanezacarne', 'valor-milanezacarne')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-milanezacarne','num-milanezacarne','milanezacarne')">Agregar
                                            s/.<span id="valor-milanezacarne">0.00</span></button>
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
                        <img src="img/trujillano/milaneza-pollo.jpg" alt="Milaneza de Pollo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="milanezapollo">Milaneza de Pollo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-milanezapollo">27</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-milanezapollo','num-milanezapollo', 'valor-milanezapollo')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-milanezapollo" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-milanezapollo','num-milanezapollo', 'valor-milanezapollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-milanezapollo','num-milanezapollo','milanezapollo')">Agregar
                                            s/.<span id="valor-milanezapollo">0.00</span></button>
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
                        <img src="img/trujillano/milaneza-corvina-cojinova.jpg" alt="Milaneza de Corvina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="milanezacorvina">Milaneza de Corvina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-milanezacorvina">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-milanezacorvina','num-milanezacorvina', 'valor-milanezacorvina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-milanezacorvina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-milanezacorvina','num-milanezacorvina', 'valor-milanezacorvina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-milanezacorvina','num-milanezacorvina','milanezacorvina')">Agregar
                                            s/.<span id="valor-milanezacorvina">0.00</span></button>
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
                        <img src="img/trujillano/milaneza-corvina-cojinova.jpg" alt="Milaneza de Cojinova djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="milanezacojinova">Milaneza de Cojinova</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-milanezacojinova">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-milanezacojinova','num-milanezacojinova', 'valor-milanezacojinova')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-milanezacojinova" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-milanezacojinova','num-milanezacojinova', 'valor-milanezacojinova')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-milanezacojinova','num-milanezacojinova','milanezacojinova')">Agregar
                                            s/.<span id="valor-milanezacojinova">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ C h i c h a r r o n e s ------>

            <div class="col-lg-12">
                <h2 id="chicharrones" class="titulo">Chicharrones</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/chicharron-pollo.jpg" alt="Chicharrón de Pollo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharronpollo">Chicharrón de Pollo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharronpollo">25</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharronpollo','num-chicharronpollo', 'valor-chicharronpollo')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharronpollo" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharronpollo','num-chicharronpollo', 'valor-chicharronpollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharronpollo','num-chicharronpollo','chicharronpollo')">Agregar
                                            s/.<span id="valor-chicharronpollo">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-camaron.jpg" alt="Chicharrón de Camarones djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharroncamarones">Chicharrón de Camarones</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharroncamarones">45</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharroncamarones','num-chicharroncamarones', 'valor-chicharroncamarones')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharroncamarones" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharroncamarones','num-chicharroncamarones', 'valor-chicharroncamarones')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharroncamarones','num-chicharroncamarones','chicharroncamarones')">Agregar
                                            s/.<span id="valor-chicharroncamarones">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-pulpo.jpg" alt="Chicharrón de Pulpo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharronpulpo">Chicharrón de Pulpo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharronpulpo">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharronpulpo','num-chicharronpulpo', 'valor-chicharronpulpo')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharronpulpo" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharronpulpo','num-chicharronpulpo', 'valor-chicharronpulpo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharronpulpo','num-chicharronpulpo','chicharronpulpo')">Agregar
                                            s/.<span id="valor-chicharronpulpo">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-pescado.jpg" alt="Chicharrón de Toyo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharrontoyo">Chicharrón de Toyo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharrontoyo">29</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharrontoyo','num-chicharrontoyo', 'valor-chicharrontoyo')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharrontoyo" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharrontoyo','num-chicharrontoyo', 'valor-chicharrontoyo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharrontoyo','num-chicharrontoyo','chicharrontoyo')">Agregar
                                            s/.<span id="valor-chicharrontoyo">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-pescado.jpg" alt="Chicharrón de Cojinova djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharroncojinova">Chicharrón de Cojinova</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharroncojinova">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharroncojinova','num-chicharroncojinova', 'valor-chicharroncojinova')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharroncojinova" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharroncojinova','num-chicharroncojinova', 'valor-chicharroncojinova')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharroncojinova','num-chicharroncojinova','chicharroncojinova')">Agregar
                                            s/.<span id="valor-chicharroncojinova">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-pescado.jpg" alt="Chicharrón de Corvina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharroncorvina">Chicharrón de Corvina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharroncorvina">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharroncorvina','num-chicharroncorvina', 'valor-chicharroncorvina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharroncorvina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharroncorvina','num-chicharroncorvina', 'valor-chicharroncorvina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharroncorvina','num-chicharroncorvina','chicharroncorvina')">Agregar
                                            s/.<span id="valor-chicharroncorvina">0.00</span></button>
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
                        <img src="img/trujillano/chicharron-mixto.jpg" alt="Chicharrón Mixto djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chicharronmixto">Chicharrón Mixto</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chicharronmixto">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chicharronmixto','num-chicharronmixto', 'valor-chicharronmixto')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chicharronmixto" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chicharronmixto','num-chicharronmixto', 'valor-chicharronmixto')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chicharronmixto','num-chicharronmixto','chicharronmixto')">Agregar
                                            s/.<span id="valor-chicharronmixto">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ C h a u f a s ------>

            <div class="col-lg-12">
                <h2 id="chaufas" class="titulo">Chaufas</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/chaufa-carne.jpg" alt="Chaufa con Carne djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chaufacarne">Chaufa con Carne</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chaufacarne">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chaufacarne','num-chaufacarne', 'valor-chaufacarne')"></span>
                                        <input type="text" class="form-control input" readonly id="num-chaufacarne"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chaufacarne','num-chaufacarne', 'valor-chaufacarne')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chaufacarne','num-chaufacarne','chaufacarne')">Agregar
                                            s/.<span id="valor-chaufacarne">0.00</span></button>
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
                        <img src="img/trujillano/chaufa-pollo.jpg" alt="Chaufa con Pollo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chaufapollo">Chaufa con Pollo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chaufapollo">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chaufapollo','num-chaufapollo', 'valor-chaufapollo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-chaufapollo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chaufapollo','num-chaufapollo', 'valor-chaufapollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chaufapollo','num-chaufapollo','chaufapollo')">Agregar
                                            s/.<span id="valor-chaufapollo">0.00</span></button>
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
                        <img src="img/trujillano/chaufa-mariscos.jpg" alt="Chaufa con Mariscos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chaufamariscos">Chaufa con Mariscos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chaufamariscos">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chaufamariscos','num-chaufamariscos', 'valor-chaufamariscos')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-chaufamariscos" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chaufamariscos','num-chaufamariscos', 'valor-chaufamariscos')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chaufamariscos','num-chaufamariscos','chaufamariscos')">Agregar
                                            s/.<span id="valor-chaufamariscos">0.00</span></button>
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
                        <img src="img/trujillano/chaufa-solo.jpg" alt="Chaufa Solo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chaufasolo">Chaufa Solo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chaufasolo">10</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chaufasolo','num-chaufasolo', 'valor-chaufasolo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-chaufasolo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chaufasolo','num-chaufasolo', 'valor-chaufasolo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chaufasolo','num-chaufasolo','chaufasolo')">Agregar
                                            s/.<span id="valor-chaufasolo">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ C e v i c h e s ------>

            <div class="col-lg-12">
                <h2 id="ceviches" class="titulo">Ceviches</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/ceviche-corvina-cojinova.jpg" alt="Ceviche de Corvina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cevichecorvina">Ceviche de Corvina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cevichecorvina">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cevichecorvina','num-cevichecorvina', 'valor-cevichecorvina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-cevichecorvina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cevichecorvina','num-cevichecorvina', 'valor-cevichecorvina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cevichecorvina','num-cevichecorvina','cevichecorvina')">Agregar
                                            s/.<span id="valor-cevichecorvina">0.00</span></button>
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
                        <img src="img/trujillano/ceviche-corvina-cojinova.jpg" alt="Ceviche de Cojinova djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cevichecojinova">Ceviche de Cojinova</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cevichecojinova">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cevichecojinova','num-cevichecojinova', 'valor-cevichecojinova')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-cevichecojinova" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cevichecojinova','num-cevichecojinova', 'valor-cevichecojinova')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cevichecojinova','num-cevichecojinova','cevichecojinova')">Agregar
                                            s/.<span id="valor-cevichecojinova">0.00</span></button>
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
                        <img src="img/trujillano/ceviche-mariscos.jpg" alt="Ceviche de Mariscos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cevichemariscos">Ceviche de Mariscos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cevichemariscos">29</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cevichemariscos','num-cevichemariscos', 'valor-cevichemariscos')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-cevichemariscos" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cevichemariscos','num-cevichemariscos', 'valor-cevichemariscos')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cevichemariscos','num-cevichemariscos','cevichemariscos')">Agregar
                                            s/.<span id="valor-cevichemariscos">0.00</span></button>
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
                        <img src="img/trujillano/ceviche-mixto.jpg" alt="Ceviche Mixto djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cevichemixto">Ceviche Mixto</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cevichemixto">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cevichemixto','num-cevichemixto', 'valor-cevichemixto')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-cevichemixto" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cevichemixto','num-cevichemixto', 'valor-cevichemixto')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cevichemixto','num-cevichemixto','cevichemixto')">Agregar
                                            s/.<span id="valor-cevichemixto">0.00</span></button>
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
                        <img src="img/trujillano/seco-de-cordero-trujillano.jpg" alt="Combinado djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="combinado">Combinado</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-combinado">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-combinado','num-combinado', 'valor-combinado')"></span>
                                        <input type="text" class="form-control input" readonly id="num-combinado"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-combinado','num-combinado', 'valor-combinado')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-combinado','num-combinado','combinado')">Agregar
                                            s/.<span id="valor-combinado">0.00</span></button>
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
                        <img src="img/trujillano/leche-de-tigre.jpg" alt="Leche de Tigre djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="lechetigre">Leche de Tigre</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-lechetigre">10</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-lechetigre','num-lechetigre', 'valor-lechetigre')"></span>
                                        <input type="text" class="form-control input" readonly id="num-lechetigre"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-lechetigre','num-lechetigre', 'valor-lechetigre')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-lechetigre','num-lechetigre','lechetigre')">Agregar
                                            s/.<span id="valor-lechetigre">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ S u d a d o s ------>

            <div class="col-lg-12">
                <h2 id="sudados" class="titulo">Sudados</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/sudado-pescados.jpg" alt="Sudado de Corvina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sudadocorvina">Sudado de Corvina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sudadocorvina">36</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sudadocorvina','num-sudadocorvina', 'valor-sudadocorvina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-sudadocorvina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sudadocorvina','num-sudadocorvina', 'valor-sudadocorvina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sudadocorvina','num-sudadocorvina','sudadocorvina')">Agregar
                                            s/.<span id="valor-sudadocorvina">0.00</span></button>
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
                        <img src="img/trujillano/sudado-pescados.jpg" alt="Sudado de Cojinova djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sudadocojinova">Sudado de Cojinova</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sudadocojinova">30</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sudadocojinova','num-sudadocojinova', 'valor-sudadocojinova')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-sudadocojinova" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sudadocojinova','num-sudadocojinova', 'valor-sudadocojinova')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sudadocojinova','num-sudadocojinova','sudadocojinova')">Agregar
                                            s/.<span id="valor-sudadocojinova">0.00</span></button>
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
                        <img src="img/trujillano/sudado-toyo-trucha.jpg" alt="Sudado de Toyo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sudadotoyo">Sudado de Toyo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sudadotoyo">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sudadotoyo','num-sudadotoyo', 'valor-sudadotoyo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-sudadotoyo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sudadotoyo','num-sudadotoyo', 'valor-sudadotoyo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sudadotoyo','num-sudadotoyo','sudadotoyo')">Agregar
                                            s/.<span id="valor-sudadotoyo">0.00</span></button>
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
                        <img src="img/trujillano/sudado-toyo-trucha.jpg" alt="Sudado de Trucha djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sudadotrucha">Sudado de Trucha</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sudadotrucha">26</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sudadotrucha','num-sudadotrucha', 'valor-sudadotrucha')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-sudadotrucha" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sudadotrucha','num-sudadotrucha', 'valor-sudadotrucha')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sudadotrucha','num-sudadotrucha','sudadotrucha')">Agregar
                                            s/.<span id="valor-sudadotrucha">0.00</span></button>
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
                        <img src="img/trujillano/arroz-con-mariscos.jpg" alt="Arroz con Mariscos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="arrozmariscos">Arroz con Mariscos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-arrozmariscos">29</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-arrozmariscos','num-arrozmariscos', 'valor-arrozmariscos')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-arrozmariscos" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-arrozmariscos','num-arrozmariscos', 'valor-arrozmariscos')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-arrozmariscos','num-arrozmariscos','arrozmariscos')">Agregar
                                            s/.<span id="valor-arrozmariscos">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ P i c a n t e s ------>

            <div class="col-lg-12">
                <h2 id="picantes" class="titulo">Picantes</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/picante-camarones.jpg" alt="Picante de Camarones djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="picantecamarones">Camarones</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-picantecamarones">45</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-picantecamarones','num-picantecamarones', 'valor-picantecamarones')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-picantecamarones" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-picantecamarones','num-picantecamarones', 'valor-picantecamarones')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-picantecamarones','num-picantecamarones','picantecamarones')">Agregar
                                            s/.<span id="valor-picantecamarones">0.00</span></button>
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
                        <img src="img/trujillano/picante-mariscos.jpg" alt="Picante de Mariscos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="picantemariscos">Mariscos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-picantemariscos">28</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-picantemariscos','num-picantemariscos', 'valor-picantemariscos')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-picantemariscos" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-picantemariscos','num-picantemariscos', 'valor-picantemariscos')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-picantemariscos','num-picantemariscos','picantemariscos')">Agregar
                                            s/.<span id="valor-picantemariscos">0.00</span></button>
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
                        <img src="img/trujillano/picante-de-carne.jpg" alt="Picante de Carne djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="picantecarne">De Carne</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-picantecarne">24</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-picantecarne','num-picantecarne', 'valor-picantecarne')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-picantecarne" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-picantecarne','num-picantecarne', 'valor-picantecarne')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-picantecarne','num-picantecarne','picantecarne')">Agregar
                                            s/.<span id="valor-picantecarne">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------ E n t r a d a s ------>

            <div class="col-lg-12">
                <h2 id="entradas" class="titulo">Entradas</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/tamales-norteños.jpg" alt="Tamales Norteños djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="tamales">Tamales Norteños</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-tamales">5</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-tamales','num-tamales', 'valor-tamales')"></span>
                                        <input type="text" class="form-control input" readonly id="num-tamales"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-tamales','num-tamales', 'valor-tamales')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-tamales','num-tamales','tamales')">Agregar
                                            s/.<span id="valor-tamales">0.00</span></button>
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
                        <img src="img/trujillano/papa-huancaina.jpg" alt="Papa a la Huancaina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="papahuancaina">Papa a la Huancaina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-papahuancaina">14</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-papahuancaina','num-papahuancaina', 'valor-papahuancaina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-papahuancaina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-papahuancaina','num-papahuancaina', 'valor-papahuancaina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-papahuancaina','num-papahuancaina','papahuancaina')">Agregar
                                            s/.<span id="valor-papahuancaina">0.00</span></button>
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
                        <img src="img/trujillano/yuca-huancaina.jpg" alt="Huancaina con Yuca Frita djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="huancainayuca">Huancaina con Yuca Frita</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-huancainayuca">14</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-huancainayuca','num-huancainayuca', 'valor-huancainayuca')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-huancainayuca" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-huancainayuca','num-huancainayuca', 'valor-huancainayuca')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-huancainayuca','num-huancainayuca','huancainayuca')">Agregar
                                            s/.<span id="valor-huancainayuca">0.00</span></button>
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
                        <img src="img/trujillano/ensalada-mixta.jpg" alt="Ensalada Mixta djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="ensaladamixta">Ensalada Mixta</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-ensaladamixta">11</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-ensaladamixta','num-ensaladamixta', 'valor-ensaladamixta')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-ensaladamixta" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-ensaladamixta','num-ensaladamixta', 'valor-ensaladamixta')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-ensaladamixta','num-ensaladamixta','ensaladamixta')">Agregar
                                            s/.<span id="valor-ensaladamixta">0.00</span></button>
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
                        <img src="img/trujillano/causa-rellena-pollo.jpg" alt="Causa Rellena con Pollo djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="causapollo">Causa Rellena con Pollo</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-causapollo">15</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-causapollo','num-causapollo', 'valor-causapollo')"></span>
                                        <input type="text" class="form-control input" readonly id="num-causapollo"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-causapollo','num-causapollo', 'valor-causapollo')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-causapollo','num-causapollo','causapollo')">Agregar
                                            s/.<span id="valor-causapollo">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ S o p a s  y  C a l d o s ------>

            <div class="col-lg-12">
                <h2 id="sopas" class="titulo">Sopas y Caldos</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/sopa-shambar.jpg" alt="Shambar djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="shambar">Shambar</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-shambar">14</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-shambar','num-shambar', 'valor-shambar')"></span>
                                        <input type="text" class="form-control input" readonly id="num-shambar"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-shambar','num-shambar', 'valor-shambar')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-shambar','num-shambar','shambar')">Agregar
                                            s/.<span id="valor-shambar">0.00</span></button>
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
                        <img src="img/trujillano/caldo-de-gallina.jpg" alt="Caldo de Gallina djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="caldogallina">Caldo de Gallina</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-caldogallina">16</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-caldogallina','num-caldogallina', 'valor-caldogallina')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-caldogallina" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-caldogallina','num-caldogallina', 'valor-caldogallina')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-caldogallina','num-caldogallina','caldogallina')">Agregar
                                            s/.<span id="valor-caldogallina">0.00</span></button>
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
                        <img src="img/trujillano/sopa-a-la-minuta.jpg" alt="Sopa a la Minuta djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sopaminuta">Sopa a la Minuta</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sopaminuta">13</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sopaminuta','num-sopaminuta', 'valor-sopaminuta')"></span>
                                        <input type="text" class="form-control input" readonly id="num-sopaminuta"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sopaminuta','num-sopaminuta', 'valor-sopaminuta')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sopaminuta','num-sopaminuta','sopaminuta')">Agregar
                                            s/.<span id="valor-sopaminuta">0.00</span></button>
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
                        <img src="img/trujillano/sopa-criolla.jpg" alt="Sopa Criolla djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sopacriolla">Sopa Criolla</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sopacriolla">14</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sopacriolla','num-sopacriolla', 'valor-sopacriolla')"></span>
                                        <input type="text" class="form-control input" readonly id="num-sopacriolla"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sopacriolla','num-sopacriolla', 'valor-sopacriolla')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sopacriolla','num-sopacriolla','sopacriolla')">Agregar
                                            s/.<span id="valor-sopacriolla">0.00</span></button>
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
                        <img src="img/trujillano/sopa-chifa.jpg" alt="Sopa Chifa djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="sopachifa">Sopa Chifa</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-sopachifa">13</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-sopachifa','num-sopachifa', 'valor-sopachifa')"></span>
                                        <input type="text" class="form-control input" readonly id="num-sopachifa"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-sopachifa','num-sopachifa', 'valor-sopachifa')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-sopachifa','num-sopachifa','sopachifa')">Agregar
                                            s/.<span id="valor-sopachifa">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ P o r c i o n e s ------>

            <div class="col-lg-12">
                <h2 id="porciones" class="titulo">Porciones</h2>
                <div class="subrayado"></div>
            </div>
            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/porcion-arroz.jpg" alt="Porcion de Arroz djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="arroz">Arroz</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-arroz">8</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-arroz','num-arroz', 'valor-arroz')"></span>
                                        <input type="text" class="form-control input" readonly id="num-arroz"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-arroz','num-arroz', 'valor-arroz')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-arroz','num-arroz','arroz')">Agregar
                                            s/.<span id="valor-arroz">0.00</span></button>
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
                        <img src="img/trujillano/porcion-yuca-frita.jpg" alt="Yuca Frita djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="yucafrita">Yuca Frita</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-yucafrita">8</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-yucafrita','num-yucafrita', 'valor-yucafrita')"></span>
                                        <input type="text" class="form-control input" readonly id="num-yucafrita"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-yucafrita','num-yucafrita', 'valor-yucafrita')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-yucafrita','num-yucafrita','yucafrita')">Agregar
                                            s/.<span id="valor-yucafrita">0.00</span></button>
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
                        <img src="img/trujillano/porcion-yuca-sancochada.jpg" alt="Yuca Sancochada djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="yucasancochada">Yuca Sancochada</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-yucasancochada">6</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-yucasancochada','num-yucasancochada', 'valor-yucasancochada')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-yucasancochada" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-yucasancochada','num-yucasancochada', 'valor-yucasancochada')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-yucasancochada','num-yucasancochada','yucasancochada')">Agregar
                                            s/.<span id="valor-yucasancochada">0.00</span></button>
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
                        <img src="img/trujillano/porcion-papas.jpg" alt="Papa Frita djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="papafrita">Papa Frita</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-papafrita">8</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-papafrita','num-papafrita', 'valor-papafrita')"></span>
                                        <input type="text" class="form-control input" readonly id="num-papafrita"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-papafrita','num-papafrita', 'valor-papafrita')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-papafrita','num-papafrita','papafrita')">Agregar
                                            s/.<span id="valor-papafrita">0.00</span></button>
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
                        <img src="img/trujillano/porcion-camote-frito.jpg" alt="Camote Frito djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="camotefrito">Camote Frito</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-camotefrito">8</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-camotefrito','num-camotefrito', 'valor-camotefrito')"></span>
                                        <input type="text" class="form-control input" readonly id="num-camotefrito"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-camotefrito','num-camotefrito', 'valor-camotefrito')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-camotefrito','num-camotefrito','camotefrito')">Agregar
                                            s/.<span id="valor-camotefrito">0.00</span></button>
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
                        <img src="img/trujillano/porcion-platano.jpg" alt="Plátanos Fritos djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="platanofrito">Plátanos Fritos</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-platanofrito">5</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-platanofrito','num-platanofrito', 'valor-platanofrito')"></span>
                                        <input type="text" class="form-control input" readonly
                                            id="num-platanofrito" value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-platanofrito','num-platanofrito', 'valor-platanofrito')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-platanofrito','num-platanofrito','platanofrito')">Agregar
                                            s/.<span id="valor-platanofrito">0.00</span></button>
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
                        <img src="img/trujillano/porcion-frejoles.jpg" alt="Frejoles djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="frejoles">Frejoles</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-frejoles">6</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-frejoles','num-frejoles', 'valor-frejoles')"></span>
                                        <input type="text" class="form-control input" readonly id="num-frejoles"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-frejoles','num-frejoles', 'valor-frejoles')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-frejoles','num-frejoles','frejoles')">Agregar
                                            s/.<span id="valor-frejoles">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ B e b i d a s  ------>

            <div class="col-lg-12">
                <h2 id="bebidas" class="titulo">Bebidas</h2>
                <div class="subrayado"></div>
            </div>

            <div class="col-lg-6 plato">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="img/trujillano/limonada.webp" alt="Limonada djm2">
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
                                            value="1">
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
                                            value="1">
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
                        <img src="img/trujillano/gaseosas.jpg" alt="Gaseosas Djm">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="gaseosa">Gaseosa:</span>
                                        <select class="selectP gaseosai" name="gaseosai" id="gaseosai"
                                            onchange="updateGasText('gaseosa', 'gaseosai', 'gaseosat', 'sub-gaseosa', 'valor-gaseosa', 3, 4, 5,9,10,13 'num-gaseosa')">
                                            <option selected>Selccionar porción</option>
                                            <option value="mediana">Mediana</option>
                                            <option value="mediolitro">Medio Litro</option>
                                            <option value="gordita">Gordita</option>
                                            <option value="litro">Litro</option>
                                            <option value="litromedio">Litro y medio</option>
                                            <option value="2litros">2 Litros</option>
                                        </select>
                                        <span id="gaseosat" style="display: none;">0</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-gaseosa">0</span></p>
                                    </div>
                                </div>
                                <div class="linea" style="margin-top:1em"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-gaseosa','num-gaseosa', 'valor-gaseosa', 'sub-gaseosa','valor-gaseosa')"></span>
                                        <input type="text" class="form-control input" readonly id="num-gaseosa"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-gaseosa','num-gaseosa', 'valor-gaseosa')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-gaseosa','num-gaseosa','gaseosat')">Agregar
                                            s/.<span id="valor-gaseosa">0.00</span></button>
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
                        <img src="img/trujillano/cervezas.jpg" alt="Cervezas Djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cerveza">Cerveza:</span>
                                        <select class="selectP cervezai" id="cervezai"
                                            onchange="chelaCausa('cerveza', 'cervezai', 'cervezat', 'sub-cerveza', 'valor-cerveza', 8, 10, 10,11,13 'num-cerveza')">
                                            <option selected>Seleccionar</option>
                                            <option value="negra">Negra pequeña</option>
                                            <option value="blanca">Blanca 620</option>
                                            <option value="negra6">Negra 620</option>
                                            <option value="trigo">Trigo 620</option>
                                            <option value="litro">Blanca Litro</option>
                                        </select>
                                        <span id="cervezat" style="display: none;">0</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cerveza">0</span></p>
                                    </div>
                                </div>
                                <div class="linea" style="margin-top:1em"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cerveza','num-cerveza', 'valor-cerveza', 'sub-cerveza','valor-cerveza')"></span>
                                        <input type="text" class="form-control input" readonly id="num-cerveza"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cerveza','num-cerveza', 'valor-cerveza')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cerveza','num-cerveza','cervezat')">Agregar
                                            s/.<span id="valor-cerveza">0.00</span></button>
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
                        <img src="img/trujillano/pisco-sour.jpg" alt="Pisco Sour djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="pisco">Pisco Sour</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-pisco">11</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-pisco','num-pisco', 'valor-pisco')"></span>
                                        <input type="text" class="form-control input" readonly id="num-pisco"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-pisco','num-pisco', 'valor-pisco')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-pisco','num-pisco','pisco')">Agregar
                                            s/.<span id="valor-pisco">0.00</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------ B e b i d a s  C a l i e n t e s ------>

            <div class="col-lg-12">
                <h2 id="bebidas" class="titulo">Bebidas Calientes</h2>
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
                                        <span class="izq" id="infusion">Infusión:</span>
                                        <select class="selectP infusioni" name="infusioni" id="infusioni"
                                            onchange="updateInfusionText('infusion', 'infusioni', 'infusiont')">
                                            <option selected>...</option>
                                            <option value="Manzanilla">Manzanilla</option>
                                            <option value="Coca">Coca</option>
                                             <option value="Anís">Anís</option>      
                                        </select>
                                        <span id="infusiont" style="display: none;">0</span>

                                    </div>
                                    <div class="col-6">
                                        <p class="der">s/.<span id="sub-infusion">3.00</span></p>
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
                                            value="1">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-infusion','num-infusion', 'valor-infusion')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-infusion','num-infusion','infusiont')">Agregar
                                            s/.<span id="valor-infusion">3.00</span></button>
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
                        <img src="img/trujillano/cafe.jpg" alt="Café djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="cafe">Café</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-cafe">4</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-cafe','num-cafe', 'valor-cafe')"></span>
                                        <input type="text" class="form-control input" readonly id="num-cafe"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-cafe','num-cafe', 'valor-cafe')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-cafe','num-cafe','cafe')">Agregar
                                            s/.<span id="valor-cafe">0.00</span></button>
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
                        <img src="img/trujillano/leche.jpg" alt="Leche djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="leche">Leche</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-leche">5</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-leche','num-leche', 'valor-leche')"></span>
                                        <input type="text" class="form-control input" readonly id="num-leche"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-leche','num-leche', 'valor-leche')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-leche','num-leche','leche')">Agregar
                                            s/.<span id="valor-leche">0.00</span></button>
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
                        <img src="img/trujillano/chocolate.jpg" alt="Chocolate djm2">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row margin-left">
                            <div class="col-12 pedido">
                                <div class="row">
                                    <div class="col-8">
                                        <span class="izq2" id="chocolate">Chocolate</span>
                                    </div>
                                    <div class="col-4">
                                        <p class="der">s/.<span id="sub-chocolate">4</span></p>
                                    </div>
                                </div>
                                <div class="linea"></div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 d-flex dialog">
                                        <span class="fa-solid fa-minus" id="decremento"
                                            onclick="decrementar('sub-chocolate','num-chocolate', 'valor-chocolate')"></span>
                                        <input type="text" class="form-control input" readonly id="num-chocolate"
                                            value="0">
                                        <span class="fa-solid fa-plus" id="botonactivo"
                                            onclick="incrementar('sub-chocolate','num-chocolate', 'valor-chocolate')"></span>
                                    </div>
                                    <div class="col-6 d-flex dialog">
                                        <button class="enviarpedido"
                                            onclick="sumar('valor-chocolate','num-chocolate','chocolate')">Agregar
                                            s/.<span id="valor-chocolate">0.00</span></button>
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
