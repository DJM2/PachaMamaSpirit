 <!---banner--------->
 <div class="banner-destinos">
     <div class="banner-container">
         <h3 class="h3-banner">Tours en peru 2022</h3>
         <p class="p-banner">TOUR OPERATOR PERÚ</p>
         <P class="p-banner">Pacha Mama Spirit es tour operador turístico desde 2012. Somos especialistas en
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
                         <input type="email" id="email" class="form-control" id="inputEmail4" placeholder="Email">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="name">Nombre:</label>
                         <input type="text" class="form-control" id="name" placeholder="David Miranda">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Arrivo:</label>
                         <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="tour">Eliga su Tour:</label>
                         <select id="tour" class="form-control">
                             <option selected>Camino Inca cantera Perú</option>
                             <option data-url="index.html">All</option>
                             <option data-url="animals.html">Animals</option>
                             <option data-url="cars .html">Cars</option>
                             <option data-url="motorcycles.html">Motorcycles</option>
                             <option data-url="plants.html">Plants</option>
                             <option selected>Camino Inca cantera Perú</option>
                             <option data-url="index.html">All</option>
                             <option data-url="animals.html">Animals</option>
                             <option data-url="cars .html">Cars</option>
                             <option data-url="motorcycles.html">Motorcycles</option>
                             <option data-url="plants.html">Plants</option>
                             <option selected>Camino Inca cantera Perú</option>
                             <option data-url="index.html">All</option>
                             <option data-url="animals.html">Animals</option>
                             <option data-url="cars .html">Cars</option>
                             <option data-url="motorcycles.html">Motorcycles</option>
                             <option data-url="plants.html">Plants</option>
                             <option selected>Camino Inca cantera Perú</option>
                             <option data-url="index.html">All</option>
                             <option data-url="animals.html">Animals</option>
                             <option data-url="cars .html">Cars</option>
                             <option data-url="motorcycles.html">Motorcycles</option>
                             <option data-url="plants.html">Plants</option>
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="fa">Adultos:</label>
                         <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                     </div>
                     <div class="form-group col-md-6">
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
 <!-- Fin Modal de banner-->
