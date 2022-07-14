<!DOCTYPE html>
<html>

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
            <div class="hero">
                <h1>Citas Medicas</h1>
            </div>
        <section class="portfolio-block block-intro">
            <div class="container">
           
                <div class="avatar" style="background-image:url(https://github.com/drixter1/imagenes/blob/main/PicsArt_06-13-08.59.37.png?raw=true);"></div>
                <div class="about-me">
                    <p>Hola Nosotros somos <strong>Nombre de la empresa</strong>. Somos una pagina que esta destinada en apoyar a médicos con las citas de sus pacientes. </p><a class="btn btn-outline-primary" role="button" href="#">Hire me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row g-0">
                     <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/imagen3.jpg?raw=true"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/imagen3.jpg?raw=true"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/imagen3.jpg?raw=true"></a></div>
                   
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content ">
                    <h3>Te gusta lo que vez?</h3><button class="btn btn-outline-primary btn-lg" type="button">Conocenos</button>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills bg-bsr">
            <div class="container ">
                <div class="heading">
                    <h2>Somos una empresa comprometida con el apoyo a los pacientes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Diseño amigable</h3>
                                <p class="card-text">La pagina es amigable para que los pacientes hagan sus citas fácilmente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Creación de citas</h3>
                                <p class="card-text">Crear fácilmente citas para los médicos asociados con nuestra empresa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Quienes somos?</h3>
                                <p class="card-text">Una empresa destinada al apoyo de médicos y pacientes con sus citas medicas  y poder crearlas de manera mas practica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <div class="bs-flx ">

        <div id="carouselExampleControlsNoTouching" class="carousel slide w-50 m-5" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/md1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/md2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/dn3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="cartel">
            <img src="https://github.com/drixter1/imagenes/blob/main/logosolo.png?raw=true" alt="logo">
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