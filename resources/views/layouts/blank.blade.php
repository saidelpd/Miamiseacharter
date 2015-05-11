<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @if(!isset($TITLE)) <?php $TITLE = "Miami Sea Charter";?> @endif
    <title>HTL | {{$TITLE}}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script src="/js/vendor/jquery.min.js"></script>
</head>
<body>
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
