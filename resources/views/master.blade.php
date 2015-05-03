<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ripulis - velosipēdu un velodetaļu tirdziņš</title>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}"/>    
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}"/>    
<!--        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">-->
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
            
            <script src="{{ asset('//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js')}}"></script>
            
            <!-- DataTables CSS -->
            
            <!-- DataTables -->
<!--            <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>       -->
            <script src="{{ asset('js/js.js')}}"></script> 
            <script src="{{ asset('js/jquery.dataTables.js')}}"></script> 
            
        @show
    </body>
</html>
