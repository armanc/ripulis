<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ripulis - velosipēdu un velodaļu tirgus</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}"/>           
    </head>
    <body>
        @include('includes.nav')

        @yield('content')
        
        @section('footer')
       <footer class="footer">
        <div class="container">
          <p class="text-muted">Citi pārdod | Citi pērk | Vēlos pārdot | Vēlos pirkt | Noteikumi</p>
        </div>
      </footer>
        @show
        
        @section('scripts')
            <script src="{{ asset('assets/jquery/dist/jquery.min.js')}}"></script> 
            <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
            <script src="{{ asset('js/js.js')}}"></script> 
        @show
    </body>
</html>
