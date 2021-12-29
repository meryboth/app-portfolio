<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e78fc278fc.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles-2.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://icongr.am/fontawesome/rocket.svg?size=80&color=c20000" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('proyectos.index') }}">{{ __('Proyectos') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ url('/perfil') }}">Perfil</a>
                              </li>
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

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer font-small blue pt-2 bg-light">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-md-12 col-xs-12 mt-md-0 mt-3 mb-3 footer__logo">
      
              <!-- Content -->
              <img src="{!! asset('images/clip-175.png')!!}" alt="" width="50px">
      
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
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>

</html>
