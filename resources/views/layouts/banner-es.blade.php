<!---banner--------->
<div class="banner">
    <div class="banner-container">
        <h3 class="h3-banner">Arma tu viaje a Perú</h3>
        <p class="p-banner"><strong>¿No sabes por donde empezar?</strong><br>
            Pacha Mama Spirit cuenta con una experiencia de mas de 10 años en el rubro turístico dentro del territorio
            peruano y como operador turístico, nos hemos visto en la obligación y el placer de conocer cada rincón de
            este hermoso país. Podemos afirmar con certeza, que Perú es un país rico en cultura, historia, gastronomía y
            aventura.
        </p>
        <P class="p-banner">
            <a href="{{route('armar-viaje')}}" class="a-reserva">
                Armar viaje
            </a>
        </P>
    </div>
</div>
<!-- Modal de banner-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form style="padding: 0px 25px">
                @csrf
                <h3 class="h3-book-pop-up">Arma tu viaje a Perú</h3>
                <div class="form-row">
                    <div class="col-12"><h5>Informacion del solicitante:</h5></div>  
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" placeholder="David Miranda">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Teléfono/Whatsapp:</label>
                        <input type="number" class="form-control" id="name" placeholder="Código de país">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">.</label>
                        <input type="text" class="form-control" id="name" placeholder="Número de teléfono">
                    </div>

                    <div class="col-12"><h5>Informacion del viaje:</h5></div> 
                    <div class="form-group col-md-3">
                        <label for="fa">Arrivo:</label>
                        <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fa">Salida:</label>
                        <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fa">Adultos:</label>
                        <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="adults">Niños:</label>
                        <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="child">Mensaje:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 2.8em"
                            placeholder="Message:"></textarea>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="boton-index">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
