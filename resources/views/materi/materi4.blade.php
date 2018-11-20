@extends('layouts.app')

@section('title', 'Materi 4')

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Materi 4</h1>
            <p>Generalisasi dan spesifikasi</p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4" style="text-align:justify">
                    <div class="col-md-8">
                        <h3>Penjelasan</h3>
                        <hr>
                        <h4>Generalisasi dan spesifikasi</h4>
                        <p>
                                Generalisasi adalah proses untuk menggabungkan sejumlah himpunan entitas yang memiliki fitur yang sama menjadi himpunan-himpunan atas. Contoh : entitas dosen (NIP, No.KTP, Nama,Almaat, Gol.Darah), dan entitas mahasiswa (NIP, No.KTP, Nama, Alamat, Gol.Darah). 
                                dikarenakan ada atribut yang mirip diantara keduanya maka dapat kita generalisasi menjadi entitas manusia dgn atribut (No.KTP, alamat, Gol.Darah)
                        </p>
                        <div class="text-center m-3">
                            <img src="{{asset('image/agregasi1.png')}}" style="width: 100%" alt="Binary image">
                        </div>   
                        <p>
                                Spesialisasi  adalah proses menentukan sejumlah sekelompok dr suatu himpunan entitas yang dapat dibedakan dari entitas lain dari himpunan tersebut. Contohnya adalah dari entitas manusia dapat di spesialisasikan menjadi mahasiswa 
                                dan dosen dengan perbedaan atribut NIM pada mahasiswa dan NIP pada dosen
                        </p>
                        <div class="text-center m-3">
                            <img src="{{asset('image/agregasi1.png')}}" style="width: 100%" alt="Binary image">
                        </div>   
                    </div>
                    
                    <div class="col-md-4 mt-3">
                        <h3>Video</h3>
                        <br>
                        <iframe src="https://www.youtube.com/embed/6SSdpSC3UAQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%">
                    <a href="{{route('materi.bagian3')}}" class="btn btn-outline-primary">Sebelumnya</a>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection