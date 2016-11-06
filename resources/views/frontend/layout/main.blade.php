<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moto Bike Lanzarote">
    <meta name="author" content="Dailos Marrero Diaz">
    <title>Moto Bike Lanzarote</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">
    @include('frontend.layout._navbar')
    @yield('content')
    @include('frontend.layout._contact')
    @include('frontend.layout._footer')
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>


