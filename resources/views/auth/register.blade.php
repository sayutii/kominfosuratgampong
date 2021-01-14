<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Surat Gampong - Register</title>
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
        <section class="hero is-fullheight is-default is-bold">
        
            <nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{url('/')}}">
                            <h1 class="nav-title">Surat Gampong</h1>
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbar-menu" class="navbar-menu is-static">

                        <div class="navbar-end">
                     
                            @if (Route::has('login'))
                              @auth
                            <a class="navbar-item" href="{{ url('/dashboard') }}">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Dashboard
                                </span>
                                @else  
                            <a href="{{ url('login') }}" class="navbar-item is-secondary modal-trigger" data-modal="auth-modal">
                                Masuk
                            </a>
                            @if (Route::has('register'))
                            <a class="navbar-item" href="{{ route('register') }}">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Daftar
                                </span>
                                    @endif
                                @endif
                            @endif
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{url('/')}}">
                       <!-- <img src="1/assets/img/logos/fresh-alt.svg" alt="" width="112" height="28"> -->
                            <h1 class="nav-title">Surat Gampong</h1>
                        </a>
            
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="cloned-navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="cloned-navbar-menu" class="navbar-menu is-fixed">
            
                        <div class="navbar-start">
                            <a class="navbar-item is-hidden-mobile"> </a>  
                        </div>
            
                    <div class="navbar-end">
                        @if (Route::has('login'))
                        @auth
                        <a class="navbar-item" href="{{ url('/dashboard') }}">
                            <span class="button signup-button rounded secondary-btn raised">
                                Dashboard
                            </span>
                        @else  
                            <a href="{{ url('login') }}" class="navbar-item is-secondary modal-trigger" data-modal="auth-modal">
                                Masuk
                            </a>
                        @if (Route::has('register'))
                        <a class="navbar-item" href="{{ route('register') }}">
                            <span class="button signup-button rounded secondary-btn raised">
                                Daftar
                            </span>
                        @endif
                        @endif
                        @endif
                        </a>
                        </div>
                    </div>
                </div>
            </nav>


    <div class="container is-fluid">
        <div id="gampong-form" class="column is-narrow-desktop">
        
        
        <form method="POST" role="form" action="{{ route('register') }}">
        @csrf
                
        <div class="field">
            <label @error('name') class="text-danger" @enderror class="label">Nama @error('name')
                       {{ $message }} @enderror
            </label>
            <div class="control">
              <input class="input" type="text" placeholder="Masukkan Nama Anda" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="field">
            <label @error('nik') class="text-danger" @enderror class="label">NIK @error('nik')
                       {{ $message }} @enderror
            </label>
            <div class="control">
              <input class="input" type="number" placeholder="Masukkan NIK" name="nik" value="{{ old('nik') }}">
            </div>
        </div>

        <div class="field">
            <label @error('email') class="text-danger" @enderror class="label">Email @error('email')
                       {{ $message }} @enderror
            </label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                </div>
        </div>

        <div class="field">
            <label @error('password') class="text-danger" @enderror class="label">Password @error('password')
                       {{ $message }} @enderror
            </label>
            <div class="control">
                <input class="input " id="password" type="password" placeholder="Masukkan Password" name="password" value="{{ old('password') }}">
            </div>
        </div>

        <div class="field">
        <label @error('password_confirmation') class="text-danger" @enderror class="label">Konfirmasi Password @error('password_confirmation')
                       {{ $message }} @enderror
            </label>
            <div class="control">
                <input class="input" id="password-confirm" type="password" placeholder="Konfirmasi Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
            </div>
        </div>
       
        <div class="field is-grouped" style="padding-top : 20px;">
            <div class="control">
                <button class="button is-link" type="submit">{{ __('Daftar') }}</button>
            </div>
        </div>
        
        </form>
        </div>
    </div>

    <footer class="footer footer-dark">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="footer-logo">
                            <h1 class="title is-1 is-bold is-spaced" style="color: white;">
                            Kominfo
                            </h1>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Product</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Discover features</a></li>
                                <li><a href="#">Why choose our Product ?</a></li>
                                <li><a href="#">Compare features</a></li>
                                <li><a href="#">Our Roadmap</a></li>
                                <li><a href="#">Request features</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Docs</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Get Started</a></li>
                                <li><a href="#">User guides</a></li>
                                <li><a href="#">Admin guide</a></li>
                                <li><a href="#">Developers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Blogroll</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Tech articles</a></li>
                                <li><a href="#">Video Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Follow Us</h3>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item" href="https://github.com/#">
                                            <span class="icon">
                                                <ion-icon name="logo-github" size="large"></ion-icon>
                                            </span>
                                        </a>
                                        <a class="level-item" href="https://facebook.com/#">
                                            <span class="icon">
                                                <ion-icon name="logo-facebook" size="large"></ion-icon>
                                            </span>
                                        </a>
                                        <a class="level-item" href="https://google.com/#">
                                            <span class="icon">
                                                <ion-icon name="logo-googleplus" size="large"></ion-icon>
                                            </span>
                                        </a>
                                        <a class="level-item" href="https://linkedin.com/#">
                                            <span class="icon">
                                                <ion-icon name="logo-linkedin" size="large"></ion-icon>
                                            </span>
                                        </a>
                                    </div>
                                </nav>
        
                                <a href="https://bulma.io" target="_blank">
                                    <img src="assets/img/logos/made-with-bulma.png" alt="Made with Bulma" width="128" height="24">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        


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
        
       