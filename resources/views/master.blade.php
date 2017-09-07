<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Some App!</title>

        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

        <!-- AngularJS -->
        <script type="text/javascript" src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
        
        <!-- Angular Bootstrap -->

        <script type="text/javascript" src="{{ asset('bower_components/angular-bootstrap/ui-bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body ng-app="some">

        <ng-include
            src="'templates/header.html'">
        </ng-include>
        
        <div class="container-narrow">
            <ng-view></ng-view>
        </div>
        
    </body>
</html>


