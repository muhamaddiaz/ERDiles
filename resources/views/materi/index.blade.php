@extends('layouts.app')

@section('title', 'Materi')

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Materi</h1>
            <p>Materi pembelajaran ERDLes</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <h3 class="card-title">Pengenalan ERD</h3>
                                <p class="card-text">
                                    ERD adalah permodelan data berdasarkan persepsi pada dunia nyata yang terdiri dari objek yang disebut entitas, dan hubungan antar entitas yang biasa disebut relasi. 
                                    Contohnya seperti ini : mahasiswa, dosen, mata kuliah merupakan...
                                </p>
                                <a href="{{route('materi.bagian1')}}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <h3 class="card-title">Key</h3>
                                <p class="card-text">
                                        Super key : Satu atau lebih atribut (kumpulan atribut) yang dapat membedakan setiap baris data dalam table secara unik.
                                        Contohnya : table customer memiliki atribut customer-id, customer-Name, customer-Street, customer-City...\
                                </p>
                                <a href="{{route('materi.bagian2')}}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <h3 class="card-title">Kardinalitas, Modalitas & Agregasi</h3>
                                <p class="card-text">
                                        Kardinalitas adalah penunjuk untuk menentukan jumlah entitas yg dpt berelasi dgn entitas lainnya
                                        1 ke 1 atau one to one
                                        Setiap entitas hanya depat berelasi ke satu entitas saja...

                                </p>
                                <a href="{{route('materi.bagian3')}}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <h3 class="card-title">Generalisasi dan spesifikasi</h3>
                                <p class="card-text mt-3">
                                    Generalisasi dan spesifikasi
                                    Generalisasi adalah proses untuk menggabungkan sejumlah himpunan entitas yang memiliki fitur yang sama menjadi himpunan-himpunan atas. Contoh : entitas dosen...
                                </p>
                                <a href="{{route('materi.bagian3')}}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection
