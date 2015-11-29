<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @if(!isset($TITLE)) <?php $TITLE = "Miami Sea Charter";?> @endif
    <title>{{$TITLE}}</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700italic,900italic,900,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,300italic,300,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('css/front.css') }}">
    <script src="/js/vendor/jquery.min.js"></script>
</head>
<body>
@yield('content')
<!--JAVASCRIPTS-->
<script src="/js/vendor/bootstrap.min.js"></script>
@if(isset($load_scripts) && count($load_scripts))
    @if(!in_array("helper", $load_scripts))
        <script src="/js/helper.js"></script>
    @endif
    @foreach($load_scripts as $script)
        <script src="/js/{{$script}}.js"></script>
    @endforeach
    @else
    <script src="/js/helper.js"></script>
@endif
</body>

</html>
