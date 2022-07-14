<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keywords" content="UTN98100, citas medicas, proyeccitas" >
    <title>Index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="icon" href="https://github.com/drixter1/imagenes/blob/main/logosolo.png?raw=true">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Citas Medicas</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{route('main.index')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('citas.index')}}">Citas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Conócenos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://github.com/drixter1/imagenes/blob/main/logosolo.png?raw=true" alt=""     width="90" height="70">
        <h1 class="display-5 fw-bold">Tramita tu cita medica aqui</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Evita hacer filas por largas horas de espera y aprobecha de una forma mas eficiente tu tiempo tramitando tu cita desde esta plataforma, registrate o inicia sesion para llenar el formulario de agendar para tu cita</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <div>
                 <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                </div>
                    
                @else
                    <a href="{{ route('login') }}" class="alog ">Inicia sesion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="alog ">Registrate</a>
                @endif
                @endauth
            </div>
        @endif
            </div>
        </div>
    </div>


    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">¿Quienes somos?</a>
            <a href="#">Contactamos</a>
        </div>
            <div class="social-icons">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
                <a href="#"><i class="icon ion-social-instagram-outline"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
            </div>
            <p> © Derechos Reservados 2022 Servicios de salud Todos los Derechos Reservados. </p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>