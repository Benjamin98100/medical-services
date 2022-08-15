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
    
    {{--sebas--}}
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
        <div class="hero_tramita">
            <h1>Tramita tu cita</h1>
        </div>
        <section class="portfolio-block block-intro">
            <div class="container">
           
                <div class="avatar" style="background-image:url(https://github.com/drixter1/imagenes/blob/main/PicsArt_06-13-08.59.37.png?raw=true);"></div>
                <div class="about-me">
                    <p>Realiza tu tramite <strong>En esta página</strong>. Solo debes llenar los campos solicitados para completar tu registro y agendar tu <strong> cita.</strong> </p>
                </div>
            </div>
        </section>
    </main>

    
        <div>
            <div class="container-fluid">
                <h1></h1>
                <hr>
                <form action="{{route('agendar.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com">
                    <input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form">
                    <input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail-1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6" id="message-1">
                            <h2 class="h4"><i class="bi bi-person-fill"></i>&nbsp;Citas Medicas<small><small class="required-input">&nbsp;(*requerido)</small></small></h2>
                            <div class="form-group mb-3"><label class="form-label" >Nombre</label><span class="required-input">*</span>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-1" name="nombre" value="{{old('nombre')}}" required="" placeholder="Nombre"></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" >Apellido Paterno</label><span class="required-input">*</span>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-4" name="apellido_p" value="{{old('apellido_p')}}" required="" placeholder="Apellido Paterno"></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" >Apellido Materno</label><span class="required-input">*</span>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-5" name="apellido_m" value="{{old('apellido_m')}}" required="" placeholder="Apellido Materno"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group mb-3"><label class="form-label" >Telefono</label><span class="required-input">*</span>
                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="text" id="from-phone-1" name="telefono"  value="{{old('telefono')}}" required="" placeholder="Telefono"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group mb-3"><label class="form-label" >Fecha de la cita</label><input class="form-control" type="date" name="solicitud_fecha" value="{{old('solicitud_fecha')}}"></div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    
                                    <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Enviar<i class="fa fa-chevron-circle-right"></i></button></div>
                                </div>
                            </div>
                            <hr class="d-flex d-md-none">
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="h4"></h2>
                            <div class="row">
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <h2 class="h4"><i class="fa fa-user"></i>&nbsp;Información</h2>
                                    <div><span><strong>Correo del Medico</strong></span></div>
                                    <div><span>Emaildeldoctor@awebsite.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Contact Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="contactForm-2" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="successfail-2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6" id="message-2">
                                        <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                        <div class="form-group mb-3"><label class="form-label" for="from-name">Name</label><span class="required-input">*</span>
                                            <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-2" name="name" required="" placeholder="Full Name"></div>
                                        </div>
                                        <div class="form-group mb-3"><label class="form-label" for="from-email">Email</label><span class="required-input">*</span>
                                            <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="text" id="from-email-2" name="email" required="" placeholder="Email Address"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group mb-3"><label class="form-label" for="from-phone">Phone</label><span class="required-input">*</span>
                                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="text" id="from-phone-2" name="phone" required="" placeholder="Primary Phone"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group mb-3"><label class="form-label" for="from-calltime">Best Time to Call</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-select" id="from-calltime-2" name="call time">
                                                            <optgroup label="Best Time to Call">
                                                                <option value="Morning" selected="">Morning</option>
                                                                <option value="Afternoon">Afternoon</option>
                                                                <option value="Evening">Evening</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3"><label class="form-label" for="from-comments">Comments</label><textarea class="form-control" id="from-comments-2" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                            </div>
                                        </div>
                                        <hr class="d-flex d-md-none">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                <div><span><strong>Name</strong></span></div>
                                                <div><span>email@awebsite.com</span></div>
                                                <div><span>www.awebsite.com</span></div>
                                                <hr class="d-sm-none d-md-block d-lg-none">
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                <div><span><strong>Office Name</strong></span></div>
                                                <div><span>55 Icannot Dr</span></div>
                                                <div><span>Daytone Beach, FL 85150</span></div>
                                                <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                <hr class="d-sm-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
{{-- <div class="form_bms">
      

    <form action="{{route('agendar.store')}}" enctype="multipart/form-data" method="POST" class="row g-3">
        @CSRF

        <div class="col-auto">
            <label  class="visually-hidden">Nombre</label>
            <input type="text" class="form-control"  placeholder="Tu nombre" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <small class="error_bs">*{{$message}}</small> <br>
            @enderror
        </div>
        
        <div class="col-auto">  
            <label  class="visually-hidden">Apellido paterno</label>
            <input type="text" class="form-control"  placeholder="Apellido Paterno" name="apellido_p" value="{{old('apellido_p')}}">
            @error('apellido_p')
            <small class="error_bs">*{{$message}}</small> <br>
            @enderror
        </div>
        
        <div class="col-auto">
            <label class="visually-hidden">Apellido materno</label>
            <input type="text" class="form-control"  placeholder="Apellido materno" name="apellido_m" value="{{old('apellido_m')}}">
            @error('apellido_m')
            <small class="error_bs">*{{$message}}</small> <br>
            @enderror
        </div>
        
        <div class="col-auto">
            <label class="visually-hidden">telefono</label>
            <input type="text" class="form-control" placeholder="Numero de telefono" name="telefono"  value="{{old('telefono')}}">
            @error('telefono')
            <small class="error_bs">*{{$message}}</small> <br>
            @enderror
        </div>
        
        <div class="col-auto">
            <label  class="visually-hidden">solicitud_fecha</label>
            <input type="date" 
            class="form-control" placeholder="Fecha de Cita" name="solicitud_fecha" value="{{old('solicitud_fecha')}}">
            @error('solicitud_fecha')
            <small class="error_bs">*{{$message}}</small> <br>
            @enderror
        </div>
        
        <input type="submit" class="btn btn-primary" value="Agendar Cita">
        
    
    </form> 
</div> --}}
    
    

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