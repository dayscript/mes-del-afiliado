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
                background-image: url("/img/fondo.jpg");
                background-size: cover;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="w-100 h-100 d-table">
            <div class="align-middle d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white">Sorteo</h1>
                            {{ Form::open( array('method' => 'POST', 'dependence' => 'dependence', 'winners' => 'winners')) }}
                                <div class="form-group">
                                  <label class="text-white">Seleccionar Dependencia</label>
                                  {{ Form::select('dependence', $id_dependence, null,['class'=>'form-control mt-3']) }}
                                  {{ Form::select('winners', [ '1' => '1',
                                                               '2' => '2',
                                                               '3' => '3',
                                                               '4' => '4',
                                                               '5' => '5',
                                                               '6' => '6',
                                                               '7' => '7',
                                                               '8' => '8',
                                                               '9' => '9',
                                                               '10' => '10'
                                                               ],null,['class'=>'form-control mt-3']) }}
                                </div>
                                <div class="form-group">
                                  <button class="btn btn-success" type="submit">Generar Ganador</button>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <div class="col">
                            <h1 class="text-white">Ganadores</h1>
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-white">Nombre</th>
                                    <th class="text-white">No Cédula</th>
                                </tr>
                                @if($winner != NULL)
                                    @foreach ($winner as $win)
                                    <tr>
                                        <td class="text-white">{{ $win->first_name }}</td>
                                        <td class="text-white">{{ $win->identification }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
