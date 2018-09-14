@extends ('layouts.layout')

@section ('content')
	
	<h1>Crear Usuario</h1>

	{{ Form::open(['route' => 'users.store', 'method' => 'POST'], ['role' => 'form']) }}
	    <div class="row">
	        <div class="form-group col-md-4">
	        	{{ Form::label('name', 'Nombre') }}
	        	{{ Form::text('name', null, array('placeholder' => 'Nombre', 'class' => 'form-control' )) }}
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-md-4">
	        	{{ Form::label('email', 'Correo electronico') }}
	            {{ Form::text('email', null, array('placeholder' => 'Correo electronico', 'class' => 'form-control' )) }}
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-md-4">
	        	{{ Form::label('email_verified_at', 'Verificar correo electronico') }}
	            {{ Form::text('email_verified_at', null, array('placeholder' => 'Verificar correo electronico', 'class' => 'form-control' )) }}
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-md-4">
	        	{{ Form::label('password', 'Contraseña') }}
	            {{ Form::password('password', array( 'class' => 'form-control' )) }}
	        </div>
	    </div>
	    <div class="row">
	        <div class="form-group col-md-4">
	            {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
	            {{ Form::password('password_confirmation', array( 'class' => 'form-control' )) }}
	        </div>
	    </div>
    {{ Form::button( 'Crear', array('type' => 'submit', 'class' => 'btn btn-primary' )) }}
    {{ Form::close() }}

@stop