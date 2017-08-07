<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liimex App</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/app.css"/>
        <link rel="stylesheet" type="text/css" href="css/app.css">  
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body ng-app="liimex">
        @if ( count( $errors ) > 0 )
            @foreach ($errors->all() as $error)
                <div alert-error>{{ $error }}</div>
            @endforeach
        @endif

        @yield('content')
    </body>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular-route.js"></script>
    <script src="/js/app.js"></script>
</html>

