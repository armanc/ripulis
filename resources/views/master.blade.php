<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ripulis - velosipēdu un velodaļu tirgus</title>

<!--        <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />-->
<!--        <script>
            less = {
                env: "development"
            };
        </script>-->
<!--            <link rel="stylesheet/less" type="text/css" href="{{ asset('less/init.less') }}"/>-->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}"/>           
<!--            <script src="{{ asset('assets/less/dist/less-1.7.5.min.js')}}"></script>-->
    
      
    </head>
    <body>

        @include('includes.nav')


        @yield('content')

        
        @section('scripts')
            <script src="{{ asset('assets/jquery/dist/jquery.min.js')}}"></script> 
            <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
            <script src="{{ asset('js/js.js')}}"></script> 
        @show
    </body>
</html>
