@extends('layouts.app')

@section('content')
    <div class="jumbotron home-beranda mt-5">
        <div class="container">
            <h1>Selamat Datang di ERDLes</h1>
            <p><i>Entity Relationship Diagram Lesson</i></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="http://gravatar.com/avatar/{{md5(Auth::user()->email)}}" alt="profile image" 
                        style="width: 100px; height: 100px; border-radius: 50%" class="mb-3">
                        <h2>{{Auth::user()->name}}</h2>
                        <p>{{Auth::user()->email}}</p>
                    </div>
                </div>
                <div class="list-group mt-3 mb-3">
                    <a href="#perbaruiProfil" data-toggle="modal" class="list-group-item list-group-action">
                        Perbarui profil
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron home-quotes">
                    <div class="container">
                        <blockquote>
                            <p>Quotes Block</p> 
                            <footer>- Halim Chaniago</footer>
                        </blockquote>
                    </div>
                </div>
                @if($forum->first())
                    <h3>Forum terbaru</h3>
                    <br>
                    <div class="card-group">
                        @foreach($forum as $f)
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{$f->judul}}</h3>
                                    <p class="card-text">{{$f->deskripsi}}</p>
                                </div>
                            </div>
                        @endforeach  
                    </div>
                @endif
            </div>
        </div>
        <br><br>
    </div>

    <div id="perbaruiProfil" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="primary-color card-title mb-0 mt-3">Perbarui profil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('user.update', Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <p class="card-text">Informasi pengguna</p>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Alamat Email" required>
                        </div>
                        <p class="card-text">Perbarui kata sandi</p>
                        <div class="form-group">
                            <input type="password" name="oldpassword" class="form-control" placeholder="Kata sandi sebelumnya (opsional)">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Kata sandi baru">
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui informasi</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
