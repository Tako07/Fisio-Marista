@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_datos.css') }}}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('title','Datos Personales')
@section('principal')

<div class="container">
@if(session('rol')!=1)

    <div class="row">
    	<div class="col-md-3 col-sm-4">
    		<div class="panel panel-default yellowMarista">
    			<div class="panel-heading">
    				<h3 class="row titulo">Información general</h3>
    			</div>
    			<div class="panel-body ustify-content-md-center">
    				<br>
    				<div class="row">
    					<div class="col-sm-12">
    						<ul class="simple">
    							<li>
    								<small class="text-muted">Nombre:</small>
    								<span>{{$usr->nombres}}</span>
    							</li>
    							<li>
    								<small class="text-muted">Apellido paterno:</small>
    								<span>{{$usr->apaterno}}</span>
    							</li>
    							<li>
    								<small class="text-muted">Apellido materno:</small>
    								<span>{{$usr->amaterno}}</span>
    							</li>
    							<li>
    								<small class="text-muted">Ocupación:</small>
    								<span>{{$usr->rol}}</span>
    							</li>
    							<li>
    								<small class="text-muted">Fecha de nacimiento:</small>
    								<span>{{$usr->fecha_nacimiento}}</span>
    							</li>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="col-md-9 col-sm-8">
    		<div class="panel panel-default grayMarista">
    			<div class="panel-heading ">
    				<h3 class="row justify-content-md-center titulo">Información de contacto</h3>
    			</div>
    			<div class="panel-body">
    				<ul class="simple">
    					<li>
    						<small class="text-muted">Calle y número:</small>
    						<span>{{$usr->calle}}</span>
    					</li>
    					<li>
    						<small class="text-muted">Colonia:</small>
    						<span>{{$usr->colonia}}</span>
    					</li>
    					<li>
    						<small class="text-muted">Código postal:</small>
    						<span>{{$usr->cp}}</span>
    					</li>
    					<li>
    						<small class="text-muted">Teléfono celular:</small>
    						<span>{{$usr->num_cel}}</span>
    					</li>
              <li>
                <small class="text-muted">Teléfono de casa:</small>
                <span>{{$usr->num_tel}}</span>
              </li>
    					<li>
    						<small class="text-muted">Correo electrónico:</small>
    						<span>{{$usr->email}}</span>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
@endif
</div>
@endsection
