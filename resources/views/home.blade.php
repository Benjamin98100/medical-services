@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido:') }}
                    {{ Auth::user()->name }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div>
        
    </div>
    <div class="">
        <img src="assets/img/dn3.webp" class="img-fluid imbs" alt="...">
        @if (Auth::check())
            @if (Auth()->user()->roll=='admin')
            <section class="portfolio-block photography">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/ver.jpg?raw=true"></a></div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/edi.jpg?raw=true"></a></div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="https://github.com/drixter1/imagenes/blob/main/del.jpg?raw=true"></a></div>
                    </div>
                </div>
            </section>
            @endif
            @if(Auth()->user()->roll=='')
                
                
                <div class="titulo_citas">
                    Tramita tu Cita Medica <br>
                </div>
                <div class="container dos_campos">
                    <div class="tramitar_cita">
                    <a class="a_citas" href="{{ route('agendar.index') }}">Tramita tu cita</a>
                    </div>
                    <div class="ver_citas">
                        <a class="a_citas" href="{{ route('ver_citas.index') }}">Ver citas</a>
                    </div>
                </div>
            @endif
        @endif
                            
    </div>
        <div class="container">
            <a class="nav-link bs-linkis "  href="{{ route('main.index') }}">ir a inicio</a>
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
@endsection
