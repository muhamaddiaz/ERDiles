@extends('layouts.app')

@section('title', 'Hasil pencarian: '. $query)

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Hasil pencarian</h1>
            <p>Untuk: {{$query}}</p>
        </div>
    </div>

    <div class="container">
        @if($cari->first())
            @foreach($cari as $f)
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$f->judul}}</h2>
                        <p class="card-text text-secondary">{{$f->deskripsi}}</p>
                        <a href="{{route('forum.show', $f->id)}}" class="btn btn-outline-primary">
                            Buka forum
                        </a>
                    </div>
                </div>
            @endforeach
            <br>
        @else
            <br><br>
            <h2 style="color: grey">Hasil tidak ditemukan</h2>
            <br><br>
        @endif
    </div>
@endsection