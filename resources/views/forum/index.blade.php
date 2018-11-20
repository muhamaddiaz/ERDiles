@extends('layouts.app')

@section('title', 'Forum')

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Forum</h1>
            <p>Forum diskusi ERDLes</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(!$forum->first())
                    <br><br>
                    <h2 style="color: grey">Belum ada forum</h2>
                    <br><br>
                @else
                    <form action="{{route('forum.cari')}}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control" name="cari" placeholder="Cari forum" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    @foreach($forum as $f)
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">{{$f->judul}}</h2>
                                <p class="card-text text-secondary">{{$f->deskripsi}}</p>
                                <a href="{{route('forum.show', $f->id)}}" class="btn btn-outline-primary">
                                    Buka forum
                                </a>
                            </div>
                        </div>
                        <br>
                    @endforeach
                @endif
            </div>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title primary-color">Buat forum</h3>
                        <p class="card-text">
                            Didalam forum ini anda bisa berdiskusi
                            bersama dengan pengguna lainnya untuk menemukan
                            solusi dari permasalahan yang anda hadapi
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buatForum">
                            Buat forum
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>

    <div id="buatForum" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="primary-color card-title mb-0 mt-3">Buat forum</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('forum.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" placeholder="Judul forum">
                        </div>
                        <div class="form-group">
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">Deskripsi</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Buat forum</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn primary-color-background text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Deskripsi forum',
            tabsize: 2,
            height: 200
        });        
    </script>
@endsection