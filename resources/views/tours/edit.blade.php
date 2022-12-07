@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    @include('layouts.logeado')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row text-white bg-secondary" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Editar: {{$tour->nombre}}</h3>
                </div>
                <div class="col-lg-6 float-right">
                    <a href="/toursen/create" class="btn btn-primary">Crear tour en Ingles</a>
                </div>
            </div><br><br>
            <form action="/tours/{{ $tour->id }}" method="post" enctype="multipart/form-data" class="bg-light"
                style="padding: 1em">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required
                            value="{{ $tour->nombre }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required
                            value="{{ $tour->descripcion }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! Request::old('content', $tour->contenido) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="incluidos" class="form-label">Incluidos:</label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos">{!! Request::old('content', $tour->incluidos) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="incluidos" class="form-label">No Incluidos:</label>
                        <textarea class="ckeditor form-control" name="noincluidos" id="noincluidos">{!! Request::old('content', $tour->noincluidos) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="incluidos" class="form-label">Importante:</label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{!! Request::old('content', $tour->importante) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*"
                            value="{{ $tour->img }}">
                        <img src="../../img/buscador/{{ $tour->img }}" width="220px"><br>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control" required
                            value="{{ $tour->precio }}">
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control" required
                            value="{{ $tour->dias }}">
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Categoría:</label>
                        {{-- <input type="text" id="categoria" name="categoria" class="ckeditor form-control" required value="{{$tour->categoria}}"> --}}
                        <select name="categoria[]" id="categoria" class="form-select" aria-label="Default select example"
                            required multiple="multiple">
                            <option value="{{ $tour->categoria }}" selected style="text-transform: capitalize">
                                {{ $tour->categoria }} <small>(Seleccionado)</small></option>
                            <option value="hikes">Hikes</option>
                            <option value="around">Around Perú</option>
                            <option value="machupicchu">Machu Picchu</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required
                            value="{{ $tour->ubicacion }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required
                            value="{{ $tour->keywords }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required
                            value="{{ $tour->slug }}">
                    </div>
                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
            CKEDITOR.config.allowedContent = true;
        });
    </script>
@endsection
