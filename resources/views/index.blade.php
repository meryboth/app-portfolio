@extends("layouts.template")

@section("content")
<section class="row justify-content-center align-items-center m-5">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mx-3">
        <h1 id="up" class="text-end fw-bold">Tu portfolio online</h1>
        <p class="text-end">Comparte tus proyectos de forma estética, simple y práctica. Genera tu portfolio profesional en pocos minutos y compártelo en la web para llegar a más colegas y profesionales de tu industria.</p>
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-danger m-1">
                <a class="text-white" href="{{("register") }}">Crear cuenta</a>
            </button>
            <button class="btn btn-danger m-1">
                <a class="text-white" href="{{("coleccion") }}">Ver Colección</a>
            </button>
        </div>
    </div>
    <img class="col-xs-12 col-sm-12 col-md-12 col-lg-6" src="{!! asset('images/clip-applying-to-university-online.png')!!}" alt="" style="width: 600px">
</section>
<section class="p-5">
    <div class="row text-center">
        <h2>Colección de portfolios</h2>
    </div>
    <div class="row gallery justify-content-center">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2"src="https://images.unsplash.com/photo-1548094990-c16ca90f1f0d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1508599589920-14cfa1c1fe4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1103&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
    </div>
    <div class="row text-center">
    </div>
    <div class="row gallery justify-content-center">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2"src="https://images.unsplash.com/photo-1531329466522-1075f0e4f23a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1576153192621-7a3be10b356e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1416339134316-0e91dc9ded92?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
    </div>
    <div class="row gallery justify-content-center">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2"src="https://images.unsplash.com/photo-1518893494013-481c1d8ed3fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1562342918-28657524a992?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
    </div>
    <div class="row gallery justify-content-center">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2"src="https://images.unsplash.com/photo-1527960471264-932f39eb5846?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80" alt="">
        <img class="col-xs-12 col-sm-12 col-md-3 img-thumbnail img-fluid m-2" src="https://images.unsplash.com/photo-1523023792609-a55619639b1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
    </div>
</section>
<section class="row justify-content-center align-items-center bg-light">
    <div class="col-xs-12 col-sm-12 col-md-4 mx-3">
        <h2 class="text-end mt-4 fw-bold">Paso a paso:
        llevamos tus proyectos a otro nivel  
        </h2>
        <p class="text-end">Deja en nuestras manos el diseño y la funcionalidad y sólo concéntrate en explicar tu proceso creativo.  
        </p>
        <div class="d-flex justify-content-end">
            <img src="{!! asset('images/clip-discussion-with-the-customer.png')!!}" alt=""
            style="height: 350px;">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="d-flex">
            <img src="https://icongr.am/fontawesome/angle-double-right.svg?size=40&color=currentColor" alt="">
            <h4 class="my-3">Paso 1</h4>
        </div>
        <p>Crea una nueva y configurá su perfil de acuerdo a tu especialidad.</p>
        <hr class="my-4">
        <div class="d-flex">
            <img src="https://icongr.am/fontawesome/angle-double-right.svg?size=40&color=currentColor" alt="">
            <h4 class="my-3">Paso 2</h4>
        </div>
        <p>Con un template diseñado por nuestro equipo comenzá a diagramar tu portfolio online.
        </p>
        <hr class="my-4">
        <div class="d-flex">
            <img src="https://icongr.am/fontawesome/angle-double-right.svg?size=40&color=currentColor" alt="">
            <h4 class="my-3">Paso 3</h4>
        </div>
        <p>Compartí tu portfolio con la comunidad y obtené un feedback de colegas y profesionales de tu industria.
        </p>
    </div>
</section>
<section>
    <div>
        <h2 class="text-center fw-bold mt-5">¿Por qué tener tu portfolio online?</h2>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body">
              <img src="{!! asset('images/clip-406.png')!!}" alt=""
              style="width: 70px">
              <p class="card-text mt-3">Llevá un tracking de tu evolución profesional</p>
            </div>
          </div>
          <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body">
                <img src="{!! asset('images/clip-searching-1.png')!!}" alt="" style="width: 100px">
              <p class="card-text">Guardá tu crecimiento en la web y ponelo al alcance de todos</p>
            </div>
          </div>
          <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body ">
                <img src="{!! asset('images/clip-491.png')!!}" alt="" style="width: 100px">
              <p class="card-text">Likeá y compartí tu trabajo y el de colegas</p>
            </div>
          </div>

    </div>
</section>
<section class="row justify-content-center align-items-center m-5">
    <div class="col-xs-12 col-sm-12 col-md-3 mx-5">
        <h2  class="fw-bold text-end">Networking</h2>
        
                <p class="text-end">- Conectá con colegas de tu rubro, inspirate con sus proyectos y expandí tu universo creativo.</p>
            
                <p class="text-end"> - Acercá tu trabajo a recruiters y empresas de tu industria</p>
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-danger ">
                <a class="text-white" href="{{("registrarse") }}">Subir portfolio</a>
            </button>
        </div>
    </div>
    <img class="col-xs-12 col-sm-12 col-md-3" src="{!! asset('images/clip-1062.png')!!}" alt="" style="width: 600px">
</section>
<section class="text-center">
    <a href="#up"><img src="https://icongr.am/fontawesome/angle-double-up.svg?size=80&color=cc0505" alt=""></a>
</section>

@endsection