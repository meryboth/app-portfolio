<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e78fc278fc.js" crossorigin="anonymous"></script>
    <!-- Plantilla propia CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-2.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e78fc278fc.js" crossorigin="anonymous"></script>

    <title>App Portfolio</title>
    

  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand m-2" href="{{'index'}}"><img src="https://icongr.am/fontawesome/rocket.svg?size=80&color=c20000" alt=""></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{'coleccion'}}">Coleccion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{'nosotros'}}">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{'contacto'}}">Contacto</a>
              </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-danger m-1" type="submit"><a href="{{'login'}}">Login</a></button>
              <button class="btn btn-outline-danger m-1 bg-danger text-light" type="submit"><a href="{{'registrarse'}}">Registrarse</a></button>
            </form>
          </div>
        </div>
      </nav>
    


    <!-- main -->
    @yield('content')
    <!-- main -->


      <!-- Footer -->
<footer class="page-footer font-small blue pt-2 bg-light">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-md-12 col-xs-12 mt-md-0 mt-3 mb-3 footer__logo">
  
          <!-- Content -->
          <img src="{!! asset('images/clip-175.png')!!}" alt="">
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-md-12 col-xs-12 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li class="nav-item">
            <a class="nav-link text-dark" href="{{'coleccion'}}">Coleccion</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="{{'nosotros'}}">Nosotros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="{{'contacto'}}">Contacto</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-md-12 col-xs-12 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Redes</h5>
  
          <ul class="list-unstyled d-flex justify-content-center">
            <li class="m-1">
              <a href="#!"><img src="https://icongr.am/fontawesome/facebook-official.svg?size=30&color=c20000" alt=""></a>
            </li>
            <li class="m-1">
              <a href="#!"><img src="https://icongr.am/fontawesome/instagram.svg?size=30&color=c20000" alt=""></a>
            </li>
            <li class="m-1">
              <a href="#!"><img src="https://icongr.am/fontawesome/twitter-square.svg?size=30&color=c20000" alt=""></a>
            </li>
            <li class="m-1">
              <a href="#!"><img src="https://icongr.am/fontawesome/linkedin-square.svg?size=30&color=c20000" alt=""></a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <p class="m-0">All <strong>illustrations</strong> are from <a href="https://iconos8.es/">Iconos8</a>
      </p>
      <p class="m-0">All <strong>images</strong> are from <a href="https://unsplash.com/">Unspash</a></p>
    </div>
    <!-- Copyright -->
  
  </footer>

  <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
</html>