<div class="sticky">
    <form class="form-row book-tours">
        <h4 class="form-group col-md-12">Solicitar Información</h4>
        @csrf
        <div class="form-group col-md-12">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                placeholder="Ingresar Email">
        </div>
        <div class="form-group col-md-12">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group col-md-12">
            <label for="da">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="da">
        </div>
        <div class="form-group col-md-12">
            <label for="tour">Eliga su Tour:</label>
            <select class="form-control" name="tour">
                <option selected>Seleccionar Tour</option>
                <option value="Machu Picchu">Machu Picchu</option>
                <option data-url="animals.html">Animals</option>
                <option data-url="cars .html">Cars</option>
                <option data-url="motorcycles.html">Motorcycles</option>
                <option data-url="plants.html">Plants</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="adultos">Adultos:</label>
            <input type="number" class="form-control" name="adultos" placeholder="Cantidad">
        </div>
        <div class="form-group col-md-6">
            <label for="childs">Niños:</label>
            <input type="number" class="form-control" name="childs" placeholder="Cantidad">
        </div>
        <div class="form-group col-md-12">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" name="mensaje" placeholder="Escriba acá su mensaje"></textarea>
        </div>
        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn-pacha">Enviar</button>
        </div>
    </form>
</div>