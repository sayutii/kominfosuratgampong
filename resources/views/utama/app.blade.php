<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Surat Gampong - Banda Aceh</title>
        <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}" />

        <!--Core CSS -->
        <link rel="stylesheet" href="{{url('assets/css/bulma.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/core.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="preloader">
            <div id="status"></div>
        </div>        
        @include('utama.navbar')
        
        @yield('content')
  
        @include('utama.footer')

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>     

        <!-- Concatenated JS -->
        <script src="{{url('assets/js/app.js')}}"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        
        <!-- Fresh JS -->
        <script src="{{url('assets/js/functions.js')}}"></script>
        <script src="{{url('assets/js/main.js')}}"></script>
</body>
    </body>  
</html>
