<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets/img/logoBar.png') }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg custom-navbar">
            <div class="container-fluid">
                <span class="navbar-brand custom-navbar__logo custom-navbar__brand-title d-flex">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="custom-navbar__logo-img me-3"
                        width="100%">
                    Sistem Perpustakaan <br> SMK TI Bali Global Denpasar
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end custom-navbar__offcanvas" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="{{ asset('assets/img/logo.png') }}" width="40vw" height="85%"
                            class="custom-navbar__img" />
                        <span class="custom-navbar__brand pb-0"> Pengaduan Siswa <br class="custom-navbar__br"> SMK TI
                            Bali Global Denpasar </span>
                        <button type="button" class="btn-close custom-navbar__btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom-navbar__offcanvas-nav">
                            <li class="nav-item">
                                <a class="nav-link custom-navbar__link" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-navbar__link" href="{{ route('about.us') }}">About Us</a>
                            </li>

                            @can('is_admin')
                                <li class="nav-item dropdown">
                                    <a class="nav-link custom-navbar__link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Add New
                                    </a>
                                    <ul class="dropdown-menu custom-navbar__dropdown">
                                        <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('book.add') }}">Add Book</a></li>
                                        {{-- <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('article.add') }}">Add Artilce</a></li> --}}
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link custom-navbar__link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Item Control
                                    </a>
                                    <ul class="dropdown-menu custom-navbar__dropdown">
                                        <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('book.control') }}">Delete Book</a></li>
                                        {{-- <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('article.add') }}">Delete Artilce</a></li> --}}
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link custom-navbar__link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Deleted Item
                                    </a>
                                    <ul class="dropdown-menu custom-navbar__dropdown">
                                        <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('book.deleted') }}">Deleted Book</a></li>
                                        {{-- <li class="custom-navbar__dropdown-item-container"><a
                                                class="dropdown-item custom-navbar__dropdown-item-container"
                                                href="{{ route('article.add') }}">Deleted Artilce</a></li> --}}
                                    </ul>
                                </li>
                            @endcan

                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link custom-navbar__link"
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link custom-navbar__link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link custom dropdown-toggle custom-navbar__link"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end  custom-navbar__dropdown"
                                        aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item custom-navbar__logout"
                                            href="{{ route('book.user.borrowed') }}">
                                            Borrowed Book
                                        </a>

                                        <a class="dropdown-item custom-navbar__logout" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="main overflow-hidden">
            @yield('content')
        </main>

        <div class="footer">
            <div class="footer__text-container text-center">
                <p class="footer__text mb-0">Copyright Timebrary -SAS-<span class="footer__span">
                        &copy;<?php echo date('Y'); ?>. All Rights Reserved</span></p>
            </div>
        </div>
    </div>
</body>

</html>
