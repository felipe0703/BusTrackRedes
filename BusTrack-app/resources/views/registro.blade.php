@extends('layout.layout')


@section('content-registro')
<section id="registro" class="registro">
	<div class=" container  pt-5 m-5 w-100">			
		<h1>Registro</h1>
		<div class="form-group row ">
		  	<label for="nombre-text-input" class="col-2 col-form-label">Nombre</label>
		  	<div class="col-5">
		    <input class="form-control" type="text" placeholder="Nombre" id="nombre-text-input" required>
			</div>
		</div>

		<div class="form-group row  ">
		  <label for="apellido-text-input" class="col-2 col-form-label">Apellido</label>
		  <div class="col-5">
		    <input class="form-control" type="text" placeholder="Apellido" id="apellido-text-input">
		  </div>
		</div>

		<div class="form-group row  align-content-center">
		  <label for="email-input" class="col-2 col-form-label">Email</label>
		  <div class="col-5">
		    <input class="form-control" type="email" placeholder="example@example.com" id="email-input">
		  </div>
		</div>

		<div class="form-group row ">
		  <label for="password-input" class="col-2 col-form-label">Contraseña</label>
		  <div class="col-5">
		    <input class="form-control" type="password" placeholder="Contraseña" id="password-input" aria-describedby="passwordHelpInline">
		  	<small id="passwordHelpInline" class="text-muted">Debe tener 8-20 caracteres de largo.</small>
		  </div>
		</div>

		<div class="form-group row ">
		  <label for="confirme-password-input" class="col-2 col-form-label">Confirme Contraseña</label>
		  <div class="col-5">
		    <input class="form-control" type="password" placeholder="Contraseña" id="confirme-password-input" aria-describedby="confirmePasswordHelpInline">
		  	<small id="confirmePasswordHelpInline" class="text-muted">Debe tener 8-20 caracteres de largo.</small>
		  </div>
		</div>

		<div class="form-group row ">
		    <label for="ciudad" class="col-2 col-form-label">Ciudad</label>
		    <div class="col-5">
			    <select class="form-control" id="ciudad">
			      <option>Valdivia</option>
			    </select>
		    </div>
		</div>

		<div class="p-2">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>		
	</div>
</section>
@stop
