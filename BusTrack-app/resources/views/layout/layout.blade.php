<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BusTrack</title>
    <link rel="icon" href="image/favicon.ico">
    
    {{-- estilos  --}}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/estilos.css') !!}
    {!! Html::style('plugins/sss/sss.css') !!}

  </head>
  <body data-spy="scroll" data-target="#navbar-bustrack" data-offset="0">
    <!-- seccion bienvenidos -->
    {{-- <section id="inicio" class="bienvenidos"> --}}
      <section>
        @yield('img-bienvenidos')
        <div class="container">
          <header class="encabezado">
            <!-- navbar -->
            <div class="container-fluid bg-inverse fixed-top">
              <nav id="navbar-bustrack" class="navbar navbar-toggleable-md navbar-inverse bg-inverse container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <a class="navbar-brand" href="#">BusTrack</a>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    @yield('navegador')
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('rutas') }}">Rutas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('quienesSomos') }}">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('registro') }}">Registrar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Ingresar</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- fin navbar --> 
          </header>
        </div>
        @yield('text-bienvenidos')
        @yield('content-registro')
      </section>
    <!-- fin section bienvenidos -->
      
    @yield('content')

    <!-- footer -->
    <footer class="footer py-3 text-center">
      <div class="container">
        <p>2017 Proyecto. Todos los derechos reservados.<br> Universidad Austral de Chile</p>
      </div>
    </footer>
    <!-- fin footer -->

    {!! Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('plugins/sss/sss.js') !!}
  </body>
</html>