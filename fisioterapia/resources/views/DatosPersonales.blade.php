@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_datos.css') }}}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('title','Datos Personales')
@section('principal')

<div class="container">

    <div class="row">
    	<div class="col-md-3 col-sm-4">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="row ">Información general</h3>
    			</div>
    			<div class="panel-body ustify-content-md-center">
    				<br>
    				<div class="row">
    					<div class="col-sm-12">
    						<ul class="simple">
    							<li>
    								<small class="text-muted">Nombre:</small>
    								<span>Julian Roberto</span>
    							</li>
    							<li>
    								<small class="text-muted">Apellido paterno:</small>
    								<span>Jimenez</span>
    							</li>
    							<li>
    								<small class="text-muted">Apellido materno:</small>
    								<span>Garcia</span>
    							</li>
    							<li>
    								<small class="text-muted">Ocupación:</small>
    								<span>Pasante</span>
    							</li>
    							<li>
    								<small class="text-muted">Fecha de nacimiento:</small>
    								<span>13 de Febrero de 1996</span>
    							</li>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="col-md-9 col-sm-8">
    		<div class="panel panel-default">
    			<div class="panel-heading ">
    				<h3 class="row justify-content-md-center ">Información de contacto</h3>
    			</div>
    			<div class="panel-body">
    				<ul class="simple">
    					<li>
    						<small class="text-muted">Calle y número:</small>
    						<span>Francisco Lazo Estrada #32</span>
    					</li>
    					<li>
    						<small class="text-muted">Colonia:</small>
    						<span>Fracc Villas Del Real</span>
    					</li>
    					<li>
    						<small class="text-muted">Código postal:</small>
    						<span>58116</span>
    					</li>
    					<li>
    						<small class="text-muted">Municipio:</small>
    						<span>Moreia</span>
    					</li>
    					<li>
    						<small class="text-muted">Estado:</small>
    						<span>Michoacán</span>
    					</li>
    					<li>
    						<small class="text-muted">Teléfono celular:</small>
    						<span>4432445888</span>
    					</li>
              <li>
                <small class="text-muted">Teléfono de casa:</small>
                <span>4432445888</span>
              </li>
    					<li>
    						<small class="text-muted">Correo electrónico:</small>
    						<span>jualin96@hotmail.com</span>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>

</div>

@endsection
