<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="position: absolute; width: 100%; top: 0; left: 0">
    <div id="app">
        @include('inc.navbar')
        <div style="position: fixed; width: 100%; height: calc(100vh - 56px); background-image: url(../../img/background.png); background-size: cover; z-index: -1;">
        </div>
        <div class="container" style="padding-top: 20px;">
            @yield('content')
        </div>
    </div>
</body>
</html>