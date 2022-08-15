<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keywords" content="UTN98100, citas medicas, proyeccitas" >
    <title>Servicios Medicos</title>
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
                    <li class="nav-item">
						@if (Auth::check())
							
							<a style="color: rgb(230, 24, 24)" class="nav-link" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Cerrar Sesion') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
	
						@else
							<a class="nav-link " aria-current="page" href="login">Iniciar sesion</a>	
						@endif
					</li>
                </ul>
            </div>
        </div>
    </nav>
   
    <main class="page lanidng-page">
        <div class="hero_vercitas">
            <h1>Tus citas</h1>
        </div>
        <section class="portfolio-block block-intro">
            <div class="container">
           
                <div class="avatar" style="background-image:url(https://cdn-icons-png.flaticon.com/512/2858/2858429.png);"></div>
                <div class="about-me">
                    <p><strong>Tus citas se muestran aqui: En esta página</strong> </p>
                </div>
            </div>
        </section>
    </main>

<div class="form_bms ">
    <h2 class="h2-bs">
        Citas
    </h2>
    <ul>
        @foreach ($citas as $cita  )
            <li>
                <div class="name_cita">
                    {{$cita->nombre}} {{$cita->apellido_p}} {{$cita->apellido_m}}
                </div> 
                <p class="bla">-- Tu Cita es el dia: -- <b class="name_cita">{{date('d-m-Y', strtotime($cita->created_at))}}</b> </p> 
            </li>
        @endforeach
        
    </ul> 
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