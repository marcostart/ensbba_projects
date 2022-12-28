<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bienvenue à l'ENSBBA</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{asset('assets/logo.png')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            @media screen and (max-width: 500px) {
                .foot{
                    margin: auto !important;
                    width: 70%;
                    margin-top: 4% !important;
                }
                .reduce{
                    margin-top: 0px !important;
                }
            }
            .article-content {
                display: block;
                width: 200px;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
            a{
                text-decoration: none;
            }
            a:hover{
                text-decoration: underline;

            }
        </style>
        @yield('style')
    </head>
    <body>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
        <header>
            <div class="bg-primary text-white d-none d-md-block">
                <div class="container">
                    <div class="row py-3">
                        <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center ">
                            <span class="fw-bold text-center text-md-start">
                                École nationale supérieure des biosciences et biotechnologies appliquées (ENSBBA)
                            </span>
                        </div>

                        <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center text-center text-md-start" style="white-space: nowrap">
                            <span>
                                Tél : +229-97 65 60 00
                            </span>
                            <span>,&nbsp;</span>
                            <span>
                                Dassa-Zoumé, Route Nationale Inter-Etats N°2
                            </span>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="d-flex justify-content-end align-items-center h-100">
                                @auth
                                    @if (auth()->user()->admin)
                                        <a href="{{ route('users.index', []) }}" class="btn-login"> <span class="p-icon"><i class="fa fa-gears"></i></span>  Administration</a>
                                    @endif

                                    <a class="text-white ms-3" style="white-space: nowrap" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Se déconnecter') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login', []) }}" class="btn-login"> <span class="p-icon"><i class="fa fa-user"></i></span>  Se connecter</a>
                                    <a href="{{ route('register', []) }}" class="text-white ms-3">S'inscrire</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bg-light -->
            <div class="" style="background-color: white;">
                <div class="container">
                    <div class="header-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="col-md-2 col-sm-5 text-start">
                                <img src="{{ asset('assets/logo.png') }}" alt="" style="max-width: 100px">
                            </div>
                            <div class="col-md-8 d-none d-md-block">
                                <div class="nav justify-content-center fs-5">
                                    <a href="{{ route('welcome', []) }}" class="nav-link"> Accueil </a>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" type="button" id="dropdownEnsbba1" data-bs-toggle="dropdown" aria-expanded="false">
                                          ENSBBA
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEnsbba1">
                                          <li><a class="dropdown-item" href="#news">Actualités</a></li>
                                          <li><a class="dropdown-item" href="{{route('mission')}}">Mission et défis</a></li>
                                          <li><a class="dropdown-item" href="#partners">Partenaires</a></li>
                                          <li><a class="dropdown-item" href="{{route('administration')}}">Administration</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{route('formation')}}" class="nav-link active"> Formations </a>
                                    <a href="{{ route('search', []) }}" class="nav-link active"> Recherche </a>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" type="button" id="dropdownGalerie1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Galerie
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownGalerie1">
                                          <li><a class="dropdown-item" href="#">Photothèque</a></li>
                                          <li><a class="dropdown-item" href="#">Vidéothèque</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('contact', []) }}" class="nav-link active"> Contact </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 text-end d-none d-md-block">
                                <img src="{{ asset('assets/ensbba-unstim.jpg') }}" alt="" style="max-width: 100px">
                            </div>
                            <div class="col text-end d-xs-block d-sm-block d-md-none">
                                <div class="dropdown">
                                    <button class="btn menu dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2">
                                        <li><a href="{{ route('welcome', []) }}" class="dropdown-item active"> Accueil </a></li>
                                        <li><a class="dropdown-item" href="#news">Actualités</a></li>
                                        <li><a class="dropdown-item" href="{{route('mission')}}">Mission et défis</a></li>
                                        <li><a class="dropdown-item" href="#partners">Partenaires</a></li>
                                        <li><a class="dropdown-item" href="{{route('administration')}}">Administration</a></li>
                                        <li><a href="{{route('formation')}}" class="dropdown-item"> Formations </a></li>
                                        <li><a href="{{ route('search', []) }}" class="dropdown-item"> Recherche </a></li>
                                        <li><a href="#" class="dropdown-item"> Phototèque </a></li>
                                        <li><a href="#" class="dropdown-item"> Vidéothèque </a></li>
                                        <li><a href="{{ route('contact', []) }}" class="dropdown-item"> Contact </a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        @auth
                                            @if (auth()->user()->admin)
                                            <li>
                                                <a href="{{ route('users.index', []) }}" class="dropdown-item">Administration</a>
                                            </li>
                                            @endif

                                            <li>
                                                <a class="dropdown-item" style="white-space: nowrap" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Se déconnecter') }}
                                                </a>
                                            </li>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <li>
                                                <a href="{{ route('login', []) }}" class="dropdown-item">Se connecter</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register', []) }}" class="dropdown-item">S'inscrire</a>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="bg-primary d-flex" style="width: 100%; height: 10px;">
                <div class="col-4" style="height: 10px; background-color: green">

                </div>
                <div class="col-8">
                    <div class="d-flex flex-column">
                        <div class="yellow" style="height: 5px; background-color: yellow">

                        </div>
                        <div class="red" style="height: 5px; background-color: red">

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer bg-primary text-white">
                <div class="container">
                    <div class="row" style="min-height: 200px">
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-between mt-4">
                            <div class="bg-white w-100 text-center">
                                <img src="{{ asset('assets/logo.png') }}" alt="" style="max-width: 100px">
                            </div>
                            <div class="fs-6">
                                <span>Suivez nous dans les médias !</span>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <img src="{{ asset('assets/social_media/youtube.png') }}" alt="" style="max-width: 100px">
                                <img src="{{ asset('assets/social_media/facebook_2.png') }}" alt="" style="max-width: 100px">
                                <img src="{{ asset('assets/social_media/twitter.png') }}" alt="" style="max-width: 100px">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column mt-4 foot">
                            <div class="title text-warning">
                                <span class="text-uppercase h4 fw-bold">
                                    contacts
                                </span>
                                <p class="underline-footer">
                                </p>
                            </div>
                            <div class="content mt-4 reduce">
                                <div class="d-flex flex-column">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            {{-- <img src="{{ asset('assets/social_media/iphone.png') }}" alt="" style="width: 55px"> --}}
                                            <i class="fa fa-phone fs-2 my-2"></i>
                                        </div>
                                        <div class=" text-end">
                                            <p class="m-0">+229 - 97 65 60 00</p>
                                            <p class="m-0">95 40 66 16</p>
                                            <p class="m-0">66 40 56 44</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <i class="fa fa-envelope fs-2"></i>
                                            {{-- <img src="{{ asset('assets/social_media/mail.png') }}" alt="" style="max-width: 100px"> --}}
                                        </div>
                                        <div class=" justify-content-end d-flex align-items-center">
                                            <p>ensbba@unstim.bj</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-12 d-flex align-items-end text-end">
                                            <span>BP: 14 Dassa-Zoumé, Bénin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column mt-4 foot">
                            <div class="title text-warning">
                                <span class="text-uppercase h4 fw-bold">
                                    Navigation
                                </span>
                                <p class="underline-footer">
                                </p>
                            </div>

                            <div class="content mt-4 reduce">
                                <a href="#" class="text-white">Mot de bienvenue de la directrice</a><br>
                                <a href="#" class="text-white">Actualités</a><br>
                                <a href="#" class="text-white">Vidéothèque</a><br>
                                <a href="#" class="text-white">Photothèque</a><br>
                                <a href="#" class="text-white">FAQ (Questions-Réponses)</a><br>
                                <a href="#" class="text-white">Nous écrire un message</a><br>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column  mt-4 foot">
                            <div class="title text-warning">
                                <span class="text-uppercase h4 fw-bold">
                                    liens utiles
                                </span>
                                <p class="underline-footer">
                                </p>
                            </div>

                            <div class="content mt-4 reduce">
                                <a href="#" class="text-white text-capitalize">Ministère de l'enseignement supérieur et de la recherche scientifique</a><br>
                                <a href="#" class="text-white text-capitalize">direction générale de l'enseignement supérieur</a><br>
                                <a href="#" class="text-white text-capitalize">Université Nationale des sciences, Technoologies, Ingénerie et mathématiques</a><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @yield('script')
    </body>
</html>
