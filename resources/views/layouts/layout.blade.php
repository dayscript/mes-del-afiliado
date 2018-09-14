<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap -->
    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
</body>
</html>
