<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/trujillano/trujillano-favicon.png" tipe="image/png">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="css/trujillano.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!----A l e r t a----->
    <div class="overlay" id="pop">
        <div class="alert alert-danger text-center" role="alert" id="error-message">
            La cantidad no puede ser cero
            <button type="button" class="btn-close" id="close-alert" onclick="cerrarpop()"></button>
        </div>
    </div>
    <div class="fondo" id="pollos">
        <img src="img/trujillano/logo-trujillano.png" class="img-pikol" alt="">
    </div>
    @yield('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-4 text-center">
                <a class="fab fa-facebook redes" target="_blank" href="https://www.facebook.com/profile.php?id=100069872174764x"></a>
                <a class="fab fa-instagram redes" target="_blank" href="https://www.instagram.com/ricospansac/"></a>
            </div>
            <div class="col-lg-12 pie">
                <h5>Hecho por <a href="https://www.facebook.com/MrkEmprendePeru" target="_blank">MRK</a></h5>
            </div>
        </div>
    </div>

    <script src="js/trujillano.js"></script>
    <script src="js/popup.js"></script>
</body>

</html>