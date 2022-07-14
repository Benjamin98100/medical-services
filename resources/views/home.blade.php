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
                <a class="nav-link bs-linkis "  href="{{ route('main.index') }}">ir a inicio</a><br>
                <div>
                    Formulario para sacar citas <br>
                </div>
            @endif
        @endif
                            
    </div>
</div>
@endsection
