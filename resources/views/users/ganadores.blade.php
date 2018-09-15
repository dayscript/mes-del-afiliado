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
                background-image: url("../img/fondo.jpg");
                background-size: cover;
            }
        </style>
    </head>
    <body class="">
      <div class="container">
        <div>
          <h1 class="text-white">Ganadores del sorteo</h1>
          <table class="table table-striped">
            <tr>
              <th class="text-white">Nombre</th>
              <th class="text-white">Cedula</th>
              <th class="text-white">Dependencia</th>
              <th class="text-white">Premio</th>
            </tr>
            @foreach ($users as $user)
            <tr>
              <td class="text-white">{{ $user->first_name }}</td>
              <td class="text-white">{{ $user->identification }}</td>
              <td class="text-white">{{ $user->dependence }}</td>
              <td class="text-white">$1'000.000</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </body>
</html>
