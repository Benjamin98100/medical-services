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
                    <div class="bs-flex">
                        @if (Auth::check())
                            @if (Auth()->user()->roll=='admin')
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
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
                                <a  class="nav-link bs-linkis " aria-current="page"
                                
                                href="{{route('admin.auth')}}">Administrar Pagina</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
