@extends('layouts.template')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
<section class="container bg-light my-5 border rounded-3">
    <div class="d-flex justify-content-center m-1">
        <img src="https://i.ibb.co/vQsCbZc/image.jpg" class="rounded-circle">
        </div>
    <div class="d-flex justify-content-center align-items-center">
        <h4 class="text-center fw-bold m-1">Jane Doe</h4>
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

</div>
</div>
</section>

<!-- Agregar porfolio -->
<section class="container">
    <div class="row mb-5">
        <a href="{{ route('proyectos.index') }}">
            <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
              <div class="p-4">
                <h5> <a href="#" class="text-dark">Nuevo Portfolio</a></h5>
                <p class="small text-muted mb-0">Agregá un nuevo portfolio a tu perfil</p>
              </div>
            </div>
        </a>
      </div>
</section>


@endsection