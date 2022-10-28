 <!---banner--------->
 <div class="banner-destinos">
     <div class="banner-container">
         <h3 class="h3-banner">Tours in Perú</h3>
         <p class="p-banner">TOUR OPERATOR PERÚ</p>
         <P class="p-banner">Pacha Mama Spirit has been a tour operator since 2016. We are specialists in adventure and
             hiking trips. Book with us your next visit to Peru. Get to know the best options in tours around 
             <strong>Perú</strong></P>
         <P class="p-banner">
             <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">Book now!</a>
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
                 <h3 class="h3-book-pop-up">Book your trip to Peru</h3>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="email">Email:</label>
                         <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="name">Name:</label>
                         <input type="text" class="form-control" id="name" name="name"
                             placeholder="David Miranda">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Arrival:</label>
                         <input type="date" class="form-control" name="arribo" id="arribo" placeholder="Arribo">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="tour">Choose your Tour:</label>
                         <select id="tour" name="tour" class="form-control">
                             <option selected value="Camino Inca Clásico 4 días">Classic Inca Trail 4 days</option>
                             <option value="Camino Inca 2 días">Inca Trail 2 days</option>
                             <option value="Camino Inca 2 días">Inca Jungle 4 days</option>
                             <option value="Choquequirao 4 días">Trek Choquequirao 4 days</option>
                             <option value="Cusco de lujo 4 días">Luxury Cusco 4 days</option>
                             <option value="Perú de lujo 8 días">Luxury Peru 8 days</option>
                             <option value="Caminata Salkantay 5 días">Salkantay trek 5 days</option>
                             <option value="Caminata Salkantay 4 días">Salkantay trek 4 days</option>
                             <option value="Reserva Nacional del Manu 4 días">Manu National Reserve 4 days</option>
                             <option value="Reserva Nacional del Manu 7 días">Manu National Reserve 7 days</option>
                             <option value="Laguna Humantay">Humantay Lagoon</option>
                             <option value="Montaña de 7 colores (Vinicunca)">Mountain of 7 colors (Vinicunca)</option>
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Adults:</label>
                         <input type="number" class="form-control" name="adultos" id="inputPassword4"
                             placeholder="Cantidad">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="adults">Kids:</label>
                         <input type="number" class="form-control" name="childs" id="inputPassword4"
                             placeholder="Cantidad">
                     </div>
                     <div class="form-group col-md-12">
                         <label for="child">Message:</label>
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
