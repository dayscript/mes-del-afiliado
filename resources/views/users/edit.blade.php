@extends ('layouts.layout')

@section ('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>Editar Usuario</h1>

    <p>
        <a href="{{ route('users.index') }}" class="btn btn-info">Regresar a la lista de usuarios</a>
    </p>
    {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH'], ['role' => 'form']) }}
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('first_name', 'Nombres') }}
                {{ Form::text('first_name', null, array('placeholder' => 'Nombres', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('last_name', 'Apellidos') }}
                {{ Form::text('last_name', null, array('placeholder' => 'Apellidos', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('identification', 'No Documento') }}
                {{ Form::text('identification', null, array('placeholder' => 'No Documento', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('city', 'Ciudad') }}
                {{ Form::text('city', null, array('placeholder' => 'Ciudad', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('affiliate_time', 'Tiempo afiliado') }}
                {{ Form::text('affiliate_time', null, array('placeholder' => 'Tiempo afiliado', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('email', 'Correo electrónico') }}
                {{ Form::text('email', null, array('placeholder' => 'Correo electrónico', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('phone', 'Teléfono') }}
                {{ Form::text('phone', null, array('placeholder' => 'Teléfono', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('mobile', 'Celular') }}
                {{ Form::text('mobile', null, array('placeholder' => 'Celular', 'class' => 'form-control' )) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('mobile', 'Dependencia') }}
                {{ Form::text('mobile', null, array('placeholder' => 'Dependencia', 'class' => 'form-control' )) }}
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
    {{ Form::button( 'Editar usuario', array('type' => 'submit', 'class' => 'btn btn-primary' )) }}
    {{ Form::close() }}

    {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) }}
        <div class="row">
            <div class="form-group col-md-4">

            </div>
        </div>
    {{ Form::button( 'Eliminar usuario', array('type' => 'submit', 'class' => 'btn btn-danger' )) }}
    {{ Form::close() }}

@stop