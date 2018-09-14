<!doctype html>
<html class="h-100" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mes del afiliado CESAP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url("/img/fondo.jpg") no-repeat center center fixed; 
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="w-100 h-100 d-table">
            <div class="align-middle d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-sm-12">
                            <img src="{{ asset('img/logo.png') }}" alt="Responsive image" class="col-12 img-fluid">
                        </div>

                        <div class="col-xl-6 col-md-12 col-sm-12 ">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH'], ['role' => 'form']) }}
                            <div class="row">
                                {{ Form::label('first_name', 'Nombres', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('first_name', null, array('placeholder' => 'Nombres', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('last_name', 'Apellidos', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('last_name', null, array('placeholder' => 'Apellidos', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('identification', 'No Documento', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('identification', null, array('placeholder' => 'No Documento', 'class' => 'form-control form-control-sm mt-3', 'readonly' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('city', 'Ciudad', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('city', null, array('placeholder' => 'Ciudad', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('affiliate_time', 'Tiempo afiliado (años)', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('affiliate_time', null, array('placeholder' => 'Tiempo afiliado', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('email', 'Correo electrónico', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('email', null, array('placeholder' => 'Correo electrónico', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('phone', 'Teléfono', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('phone', null, array('placeholder' => 'Teléfono', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            <div class="row">
                                {{ Form::label('mobile', 'Celular', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('mobile', null, array('placeholder' => 'Celular', 'class' => 'form-control form-control-sm mt-3' )) }}
                                </div>
                            </div>
                            {{-- <div class="row">
                                {{ Form::label('dependence', 'Dependencia', array('class' => 'd-none d-sm-block col-4 col-form-label text-white' )) }}
                                <div class="col-12 col-sm-8">
                                    {{ Form::text('dependence', null, array('placeholder' => 'Dependencia', 'class' => 'form-control form-control-sm mt-3', 'hidden' )) }}
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-12 text-right">
                                    {{ Form::button( 'Actualizar datos', array('type' => 'submit', 'class' => 'btn btn-primary mt-3' )) }}
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>