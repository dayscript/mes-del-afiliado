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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (!isset($user))
                        <div class="col-xl-6 col-md-12 col-sm-12">
                            {{ Form::open(array('url' => '/actualizacion-datos')) }}
                            
                            @if (session('message'))
                                <div class="alert alert-danger">
                                    {{ session('message') }}
                                </div>
                            @endif
                                <div class="form-group">
                                  <label class="text-white">Para actualizar datos por favor ingrese su numero de cédula</label>
                                  {{ Form::text('identification', null, array('placeholder' => 'Cédula', 'class' => 'form-control form-control-sm mt-3 col-xl-6 col-md-12 col-sm-12' )) }}
                                </div>
                                <div class="form-group">
                                  {{ Form::button( 'Buscar', array('type' => 'submit', 'class' => 'btn btn-primary mt-3' )) }}
                                </div>
                            {{ Form::close() }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>