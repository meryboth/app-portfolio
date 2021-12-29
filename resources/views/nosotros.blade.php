@extends("layouts.template")

@section("content")

<!-- Team [Title]-->

<section class="row nosotros__title m-auto container mt-5 mb-5">
    <img src="{!! asset('images/clip-1062.png')!!}" alt="" class="col-lg-6 col-md-6 col-ms-12 col-xs-12 m-auto">
    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 m-auto">
        <h1>Nuestro Equipo</h1>
        <p class="w-52">Somos un equipo que fusiona la colaboración de desarrolladores tanto front-end como back-end. Nos unimos en el marco del bootcamp de <strong>Neoris</strong> dictado por la UTN. Elaboramos el proyecto en un periodo de dos meses en el cual incorporamos el desarrollo de distintas tecnologías, entre las que se encuentran: <strong>MySql, PHP, Laravel, Html, CSS, Bootstrap y Javascript</strong>.</p>
    </div>
</section>

<!-- Team integrantes [Cards]-->

<div class="row pb-3 m-auto justify-content-center">
 <h2 class="font-weight-bold mt-5 mb-5 text-center">Team</h2>
  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
    <!-- Card-->
    <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
      <div class="card-body p-0"><img src="{!! asset('images/diego.jpeg')!!}" alt="" class="w-100 card-img-top">
        <div class="p-4 text-center">
          <h5 class="mb-0">Diego Martinez Giardini</h5>
          <p class="small text-muted">FullStack Dev</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item m-0"><a href="https://github.com/kida10-tech" class="social-link" target="_blank"><i class="fab fa-github"></i></a></li>
            <li class="list-inline-item m-0"><a href="https://www.linkedin.com/in/martinezgiardinidiego/" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
    <!-- Card-->
    <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
      <div class="card-body p-0"><img src="{!! asset('images/marilyn.jpg')!!}" alt="" class="w-100 card-img-top">
        <div class="p-4 text-center">
          <h5 class="mb-0">Marilyn Botheatoz</h5>
          <p class="small text-muted">FullStack Dev</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item m-0"><a href="https://github.com/meryboth" class="social-link" target="_blank"><i class="fab fa-github"></i></a></li>
            <li class="list-inline-item m-0"><a href="https://www.linkedin.com/in/marilyn-botheatoz/" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
    <!-- Card-->
    <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
      <div class="card-body p-0"><img src="{!! asset('images/ignacio.jpg')!!}" alt="" class="w-100 card-img-top">
        <div class="p-4 text-center">
          <h5 class="mb-0">Ignacio Valdivia</h5>
          <p class="small text-muted">FullStack Dev</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row pb-3 m-auto justify-content-center mb-5">
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
       <!-- Card-->
       <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
         <div class="card-body p-0"><img src="{!! asset('images/macarena.jpeg')!!}" alt="" class="w-100 card-img-top">
           <div class="p-4 text-center">
             <h5 class="mb-0">María Macarena Hanna Arenas</h5>
             <p class="small text-muted">FullStack Dev</p>
             <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item m-0"><a href="https://github.com/MacaHannaArenas" target="_blank" class="social-link"><i class="fab fa-github"></i></a></li>
              <li class="list-inline-item m-0"><a href="https://www.linkedin.com/in/mar%C3%ADa-macarena-hanna-arenas/" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
       <!-- Card-->
       <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
         <div class="card-body p-0"><img src="{!! asset('images/eduardo.png')!!}" alt="" class="w-100 card-img-top">
           <div class="p-4 text-center">
             <h5 class="mb-0">Eduardo Londero</h5>
             <p class="small text-muted">FullStack Dev</p>
             <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item m-0"><a href="https://github.com/Eduardo-Londero" target="_blank" class="social-link"><i class="fab fa-github"></i></a></li>
              <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
       <!-- Card-->
       <div class="card shadow-sm border-0 rounded m-3" style="height: 330px;">
         <div class="card-body p-0"><img src="{!! asset('images/juan.jpeg')!!}" alt="" class="w-100 card-img-top">
           <div class="p-4 text-center">
             <h5 class="mb-0">Juan Bossetti</h5>
             <p class="small text-muted">FullStack Dev</p>
             <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item m-0"><a href="https://github.com/JuanBossetti" class="social-link" target="_blank"><i class="fab fa-github"></i></a></li>
              <li class="list-inline-item m-0"><a href="https://www.linkedin.com/in/juan-bossetti-56a103194/" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
</div>
@endsection