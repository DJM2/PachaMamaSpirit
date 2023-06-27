<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cartas MRK Emprende - DJM2</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column align-items-center justify-content-center vh-100">
        <img src="{{asset('img/mrk-logo.png')}}" alt="Imagen" class="w-100" style="max-width: 160px;">
        <div class="mt-4">
            <a href="{{route('pikol')}}" class="botonCarta">Pikol</a>
            <a href="{{route('waka')}}" class="botonCarta">Waka Runtu</a>
            <a href="{{route('ricospan')}}" class="botonCarta">Ricos Pan</a>
            <a href="{{route('trujillano')}}" class="botonCarta">Rincón Trujillano</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
