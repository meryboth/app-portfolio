@extends('layouts.template')

@section('content')
<!-- Portfolio Section Heading-->
<h1 class="text-center text-uppercase text-secondary mb-3">Portfolios</h1>
<!-- Portfolio Grid Items-->
@foreach ($proyectos as $proyecto)
<!-- Portfolio Item 1-->
<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" style="height:15rem;" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
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
                            <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="..." />
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

@endsection