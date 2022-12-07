@extends('layouts.app')

@section('content')
    
    @include('layouts.logeado')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="row text-white bg-secondary" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Crear Nuevo Tour en español</h3>
                </div>
                <div class="col-lg-6">
                    <a href="/toursen/create" class="btn btn-primary float-right">Crear tour en Ingles</a>
                </div>
            </div><br><br>
            <form action="/tours" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                    </div>                    
                    <div class="col-lg-12">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="incluidos" class="form-label">Incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="noincluidos" class="form-label">No incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control" name="noincluidos" id="noincluidos" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                        </textarea>
                    </div>

                    <div class="col-lg-12">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*" required>
                    </div>                    
                    
                    <div class="col-lg-6">
                        <label for="" class="form-label">Categoría: <small class="text-success">Presionar Ctrl para seleccionar mas de1 categoria</small></label>
                        <select name="categoria[]" id="categoria" class="form-select" required multiple="multiple">
                            <option value="hikes">Hikes</option>
                            <option value="around">Around Perú</option>
                            <option value="machupicchu">Machu Picchu</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                        
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Clase:<small class="text-success">(Tomada para definir img)</small></label>
                        <input type="text" id="clase" name="clase" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Keywords: <small class="text-success">(Separar cada palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required>
                    </div>
                    
                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    {{-- <script>
        CKEDITOR.replace('contenido', {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script> --}}
@endsection
