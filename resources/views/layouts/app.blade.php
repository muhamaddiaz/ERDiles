<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ERDLes | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ERDLes
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('materi.index') }}">Materi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('forum.index') }}">Forum</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color: white"href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
            <button title="Tombol bantuan" data-target="#bantuan" data-toggle="modal" class="btn btn-primary" style="position: fixed; right: 30px; bottom: 30px; width: 50px; height: 50px; border-radius: 50%; padding: 0;">
                <b>?</b>
            </button>

            <div id="bantuan" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="primary-color card-title mb-0 mt-3">Pusat bantuan</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4 class="primary-color">Menu beranda</h4>
                            <p>Digunakan untuk menampilkan halaman utama yang berisi bacaan terakhir pengguna, info singkat pengguna, menu perbarui akun pengguna, dan diskusi forum paling baru</p>
                            <hr>
                            <h4 class="primary-color">Menu materi</h4>
                            <p>Digunakan untuk memilih materi yang akan anda pelajari dan didalam web ini ada 4 buah materi yang anda bisa pelajari</p>
                            <hr>
                            <h4 class="primary-color">Menu forum</h4>
                            <p>Digunakan untuk membuat forum baru dan juga berdiskusi antar user didalam forum yang telah dibuat, didalamnya ada fitur pencarian dan juga user yang membuat forum dapat memperbarui forum yang telah dibuatnya</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
