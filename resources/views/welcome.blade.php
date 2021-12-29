@extends('layouts.app')

@section('template_title')
Perfil
@endsection

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <section class="container bg-light my-5 border rounded-3">
                <div class="d-flex justify-content-center m-1">
                    <img src="https://media.istockphoto.com/vectors/default-profile-picture-avatar-photo-placeholder-vector-illustration-vector-id1223671392?k=20&m=1223671392&s=612x612&w=0&h=lGpj2vWAI3WUT1JeJWm1PRoHT3V15_1pdcTn2szdwQ0=" class="rounded-circle m-3" style="width: 200px;">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    @guest
                    @if (Route::has('login'))
                    <h4 class="text-center fw-bold m-1"><a href="{{ route('login') }}">{{ __('Login') }}</a></h4>
                    @endif
                    @else
                    <h4 class="text-center fw-bold m-1">{{ Auth::user()->name }}</h4>
                    @endguest

                    <a href="{{'configuracion'}}"><img src="https://icongr.am/fontawesome/gear.svg?size=20&color=c20000" alt=""></a>
                </div>
                <h6 class="text-center">Diseñadora Gráfica</h6>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos officia numquam voluptate mollitia eos iusto explicabo illo.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="m-1">
                        <a href="#!"><img src="https://icongr.am/fontawesome/facebook-official.svg?size=30&color=c20000" alt=""></a>
                    </li>
                    <li class="m-1">
                        <a href="#!"><img src="https://icongr.am/fontawesome/instagram.svg?size=30&color=c20000" alt=""></a>
                    </li>
                    <li class="m-1">
                        <a href="#!"><img src="https://icongr.am/fontawesome/envelope.svg?size=30&color=c20000" alt=""></a>
                    </li>
                    <li class="m-1">
                        <a href="#!"><img src="https://icongr.am/fontawesome/linkedin-square.svg?size=30&color=c20000" alt=""></a>
                    </li>
                </ul>
            </section>

            <!-- Portfolio Section Heading-->
            <h1 class="text-center text-uppercase text-secondary mb-3">Portfolio</h1>
            <!-- Portfolio Grid Items-->
            @foreach ($proyectos as $proyecto)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto m-3" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <h4>{{ $proyecto->nombre }}</h4>
                        </div>
                    </div>
                    <img style="display:block; width:200px; height: 200px;" id="base64image" src="data:image/jpeg;base64, {{ $proyecto->imagen }}">
                </div>
            </div>

            <!-- Portfolio Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="text-secondary text-uppercase mb-3">{{ $proyecto->nombre }}</h2>
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">{{ $proyecto->descripcion }}</p>
                                        <!-- Portfolio Modal - Image-->
                                        <img style="display:block; width:200px; height: 200px;" id="base64image" src="data:image/jpeg;base64, {{ $proyecto->imagen }}">
                                        <a class="btn btn-danger" href="{{ $proyecto->url }}" target="_blank">
                                            Visitar proyecto
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Agregar porfolio -->
<section class="container bg-light my-5 border rounded-3 p-3">
    <div class="mb-3">
        <a href="{{ route('proyectos.index') }}" class="text-decoration-none">
            <div class="rounded shadow-sm text-center">
                <img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center">
                <h4 class="text-dark">Nuevo proyecto</h4>
        </a>
    </div>
    </div>
</section>


@endsection