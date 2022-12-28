
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ENSBBA - Administration</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet" />

        <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }} "></script>

        {{-- <script src="{{ asset('assets/admin/css/styles.css') }}" defer></script> --}}
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('sweetalert::alert')
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('index') }}">ENSBBA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> --}}
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="text-white ms-3" style="white-space: nowrap" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Se déconnecter') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    {{-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Se déconnecter</a></li>
                    </ul> --}}
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            {{-- <a class="nav-link {{ (request()->is('/')) ? 'active' : ''}}" href="{{ route('index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> --}}
                            <a class="nav-link {{ (request()->is('admin/users*')) ? 'active' : ''}}" href="{{ route('users.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Utilisateurs
                            </a>
                            <a class="nav-link {{ (request()->is('admin/articles*')) ? 'active' : ''}}" href="{{ route('articles.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                                Articles
                            </a>
                            <a class="nav-link {{ (request()->is('admin/sliders*')) ? 'active' : ''}}" href="{{ route('sliders.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-panorama"></i></div>
                                Sliders
                            </a>
                            <a class="nav-link {{ (request()->is('admin/trainings*')) ? 'active' : ''}}" href="{{ route('trainings.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-scroll"></i></div>
                                Formations
                            </a>
                            <a class="nav-link {{ (request()->is('admin/partners*')) ? 'active' : ''}}" href="{{ route('partners.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-handshake-simple"></i></div>
                                Partenaires
                            </a>
                            <a class="nav-link {{ (request()->is('admin/missions*')) ? 'active' : ''}}" href="{{ route('missions.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-thumbtack"></i></div>
                                Vision et mission
                            </a>
                            <a class="nav-link {{ (request()->is('admin/conditions*')) ? 'active' : ''}}" href="{{ route('conditions.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                                Conditions d'admission
                            </a>
                            <hr>
                            <a class="nav-link" href="{{ route('welcome') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-home"></i></div>
                                Retourner à l'acceuil
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant que:</div>
                        {{auth()->user()->name}}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/admin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/admin/js/datatables-simple-demo.js') }}"></script>
        {{-- <script src="https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json"></script> --}}

        @yield('script')
    </body>
</html>
