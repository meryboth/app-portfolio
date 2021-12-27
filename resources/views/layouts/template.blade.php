<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>App - Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles-2.css" rel="stylesheet" />
    </head>
    <body id="page-top">
       
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand m-2" href="{{ route('landing') }}"><img src="https://icongr.am/fontawesome/rocket.svg?size=80&color=c20000" alt=""></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('coleccion') }}">Coleccion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('nosotros') }}">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('contacto') }}">Contacto</a>
              </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-danger m-1 text-dark" type="submit"><a href="{{ route('login') }}">Login</a></button>
              <button class="btn btn-outline-danger m-1 bg-danger text-dark" type="submit"><a href="{{ route('register') }}">Registrarse</a></button>
            </form>
          </div>
        </div>
      </nav>
       
    <!-- Portfolio Section-->

        @yield('content')


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
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
