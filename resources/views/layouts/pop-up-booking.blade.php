 <!---banner--------->
 <div class="banner-destinos">
     <div class="banner-container">
         <h3 class="h3-banner">Tours en peru 2022</h3>
         <p class="p-banner">TOUR OPERATOR PERÚ</p>
         <P class="p-banner">Pacha Mama Spirit es tour operador turístico desde 2016. Somos especialistas en
             viajes de aventura y caminata. Reserve con nosotros su proxima visita a Perú. Conoce las mejores
             opciones en tours alrededor de <strong>Perú</strong></P>
         <P class="p-banner">
             <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva
                 ahora!</a>
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
                 <h3 class="h3-book-pop-up">Reserva tu viaje a Perú</h3>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="email">Email:</label>
                         <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="name">Nombre:</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="David Miranda">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Arrivo:</label>
                         <input type="date" class="form-control" name="arribo" id="arribo" placeholder="Arribo">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="tour">Elija su Tour:</label>
                         <select id="tour" name="tour" class="form-control">
                             <option selected value="Camino Inca Clásico 4 días">Camino Inca Clásico 4 días</option>
                             <option value="Camino Inca 2 días">Camino Inca 2 días</option>
                             <option value="Camino Inca 2 días">Inca Jungle 4 días</option>
                             <option value="Choquequirao 4 días">Choquequirao 4 días</option>
                             <option value="Cusco de lujo 4 días">Cusco de lujo 4 días</option>
                             <option value="Perú de lujo 8 días">Perú de lujo 8 días</option>
                             <option value="Caminata Salkantay 5 días">Caminata Salkantay 5 días</option>
                             <option value="Caminata Salkantay 4 días">Caminata Salkantay 4 días</option>
                             <option value="Reserva Nacional del Manu 4 días">Reserva Nacional del Manu 4 días</option>
                             <option value="Reserva Nacional del Manu 7 días">Reserva Nacional del Manu 7 días</option>
                             <option value="Laguna Humantay">Laguna Humantay</option>
                             <option value="Montaña de 7 colores (Vinicunca)">Montaña de 7 colores (Vinicunca)</option>
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Adultos:</label>
                         <input type="number" class="form-control" name="adultos" id="inputPassword4" placeholder="Cantidad">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="adults">Niños:</label>
                         <input type="number" class="form-control" name="childs" id="inputPassword4" placeholder="Cantidad">
                     </div>
                     <div class="form-group col-md-12">
                         <label for="child">Mensaje:</label>
                         <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" style="height: 2.8em"
                             placeholder="Message:"></textarea>
                     </div>
                 </div>
                 <div class="form-group text-center">
                     <button type="submit" class="boton-index">Enviar</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- Fin Modal de banner-->
