<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moto Bike Lanzarote">
    <meta name="author" content="Dailos Marrero Diaz">
    <title>Moto & Bike Lanzarote</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.8&appId=208998725941240";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<script>
    var bike = {
        locale : "{{App::getLocale()}}"
    };
</script>


    @include('frontend.layout._navbar')
    @yield('content')
    @include('frontend.layout._contact')
    @include('frontend.layout._footer')
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>


