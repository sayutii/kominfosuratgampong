<section class="hero is-fullheight is-default is-bold">
        
            <nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{url('/')}}">
                        <!-- <img src="1/assets/img/logos/fresh-alt.svg" alt="" width="112" height="28"> -->
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
                     <!--   <a href="#" class="navbar-item is-secondary">
                                Features
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Pricing
                            </a>  -->
                            @if (Route::has('login'))
                              @auth
                            <a class="navbar-item" href="{{ url('/home') }}">
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
                     <!--   <a href="#" class="navbar-item is-secondary">
                                Features
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Pricing
                            </a>  -->
                            @if (Route::has('login'))
                              @auth
                            <a class="navbar-item" href="{{ url('/home') }}">
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
            
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column is-5 is-offset-1 landing-caption">
                            <h1 class="title is-1 is-bold is-spaced">
                                Surat Gampong.
                            </h1>
                            <h2 class="subtitle is-5 is-muted">Selamat datang di portal Gampong Punge Jurong Kecamatan Meuraxa Kota Banda Aceh </h2>
                            <div class="button-wrap">
                            @if (Route::has('login'))
                              @auth
                                <a class="button cta is-rounded primary-btn raised"  href="{{ url('/home') }}">
                                    Dashboard
                                </a>
                              @else
                                <a class="button cta is-rounded primary-btn raised" href="{{ route('login') }}">
                                    Masuk
                                </a>
                              @if (Route::has('register'))
                                <a class="button cta is-rounded" href="{{ route('register') }}">
                                    Daftar Sekarang
                                </a>
                                @endif
                            @endif
                         @endif
                            </div>
                        </div>
                        <div class="column is-5">
                            <figure class="image is-4by3">
                                <img src="{{url('assets/img/illustrations/kerja.svg')}}" alt="Description">
                            </figure>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>