<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ERDLes belajar ERD</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="navbar-index container-fluid">
            <div class="navbar-index__right-menu">
                <ul class="navbar-index__list-menu">
                    <li class="navbar-index__brand">ERDLes</li>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Penjelasan</a></li>
                    <li><a href="">Tentang kami</a></li>
                </ul>
            </div>
            <div class="navbar-index__left-menu">
                <ul class="navbar-index__list-menu">
                    <li><a href="{{route('register')}}">Registrasi</a></li>
                    <li><a href="{{route('login')}}">Masuk Akun</a></li>
                </ul>
            </div>
        </div>
        <div class="erdles-head">
            <div class="container">
                <div class="erdles-head__content">
                    <div class="row">
                        <div class="col-md-6 pt-5">
                            <div class="erdles-head__content--text pt-5">
                                <h1 class="pt-5">ERDLes.</h1>
                                <h3>Belajar <i>Entity Relational Diagram</i> dengan mudah bersama ERDles web.</h3>
                                <br>
                                <button class="btn btn-pink">Pelajari lebih lanjut</button>
                            </div>
                        </div>
                        <div class="col-md-6 pt-5">
                            <div class="erdles-head__content--image text-center pt-5">
                                <img src="{{asset('svg/function.svg')}}" 
                                    style="width: 50%; height: 50%" 
                                    alt="ERDles image"
                                    class="pt-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="erdles-penjelasan">
            <div class="row">
                <div class="col-md-6" style="background-color: hotpink; color: white">
                    <div class="container">
                        <div class="erdles-penjelasan__left">
                            <h1>Apa itu ERDLes ?</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="background-color: snow; color: hotpink">
                    <div class="container">
                        <div class="erdles-penjelasan__right">
                            <p>
                                Adalah sebuah aplikasi berbasis web, yang menyediakan
                                beberapa penjelasan tentang <i>Entity Relational Diagram</i>
                                untuk membantu dalam memahami setiap materi yang ada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="feature mb-5">
                    <div class="feature__header-text">
                        <h2>Fitur yang tersedia</h2>
                        <hr style="color: hotpink; width: 50%;">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <p>
                                    Didalam website pembelajaran <i>Entity Relational Diagram</i>
                                    kami menyediakan beberapa fitur yang akan berguna bagi mahasiswa 
                                    yang diharapkan dapat membantu untuk memahami setiap materi yang
                                    diberikan .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature__card-group">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="text-center">Langkah 1</h3>
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Materi</h3>
                                        <p class="card-text">
                                            Kami sediakan materi yang mudah dimengerti untuk dipelajari oleh
                                            pengguna web ini, dengan tujuan untuk membantu setiap pengguna 
                                            dalam memahami materi yang diajarkan oleh dosen
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="text-center">Langkah 2</h3>
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Video</h3>
                                        <p class="card-text">
                                            Kami sediakan materi berbentuk video tutorial jika pengguna merasa
                                            kesulitan dengan membaca materi pengguna bisa menggunakan opsi ini
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="text-center">Langkah 3</h3>
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Forum</h3>
                                        <p class="card-text">
                                            Jika pengguna merasa kesulitan kembali, jangan khawatir pengguna bisa
                                            manfaatkan fitur ini dengan bertanya di forum yang sudah kami sediakan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us mb-5">
                <div class="container">
                    <div class="about-us__text">
                        <h2>Tentang kami</h2>
                        <br><br>
                        <h3>Di desain dan dibuat dengan cinta oleh:</h3>
                        <br>
                        <h3 class="kelompok">Kelompok 5</h3>
                    </div>
                </div>
            </div>
            <div class="about-us__card-ct">
                <div class="container">
                    <h2>Anggota Kelompok</h2>
                    <div class="row mt-5">
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Yusril</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Arif</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Riva</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Halim</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Diaz</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="penutup mt-5">
            <p>Kelompok 5 IMK &copy; 2018</p>
        </footer>
    </body>
</html>