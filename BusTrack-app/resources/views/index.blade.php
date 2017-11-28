@extends('layout.layout')


@section('img-bienvenidos')
	<section id="inicio" class="bienvenidos">

@stop
@section('navegador')
  <li>
    	<a class="nav-link" href="#video">video</a>
	</li>
  <li>
      <a class="nav-link" href="#descripcion">Descripción</a>
  </li>
@stop

@section('text-bienvenidos')
	<div  class="texto-bienvenidos text-center sticky-top">
    <p class="h2">Bienvenidos a BusTrack</p>
    <h1 class="display-4 mb-5">ENCANTADOS DE CONOCERTE</h1>
    <!-- <a href="#" class="btn btn-primary btn-lg" >Ponte en contacto</a> -->
  </div>
@stop

@section('content')
    <!-- seccion video -->
      <section id="video" class="text-center video">
        <div class="container py-4 ">        
          <div class="w-75 mx-auto embed-responsive embed-responsive-16by9 ">
            <iframe  src="https://www.youtube.com/embed/K3iDuN9Z6D8?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>        
      </section>
    <!-- fin video -->
    <!-- descripcion proyecto -->      
    <section id="descripcion" class="text-center">
        <div class="container">
          <h2 class="h3">Descripción proyecto</h2>
          <p>BusTrack será una aplicación en la que podrás ver si tu bus a tu ciudad ya salio del terminal o aun está en su anden.Seguirá una ruta a través de un mapa y por si no alcanzaste a llegar al terminal, podrás tomarlo en tu paradero más próximo y así no tendrás que esperar por tanto tiempo. Además sabrás el tiempo estimado que te tomara en llegar a tu destino.</p>
        </div>
    </section>
    <!-- fin descripcion -->
@stop