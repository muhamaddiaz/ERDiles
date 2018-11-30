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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('materi.index')}}"><i class="fas fa-book"></i> Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi 4</li>
            </ol>
        </nav>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#soal">
                            <i class="far fa-edit"></i> Latihan soal
                        </button>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%">
                    <a href="{{route('materi.bagian3')}}" class="btn btn-outline-primary">Sebelumnya</a>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div id="soal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="primary-color card-title mb-0 mt-3">Latihan soal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="soal mb-4" id="s1">
                        <img src="{{asset('image/soal3-1.jpg')}}" style="width: 100%" alt="Binary image">
                        <p>1. Dari ERD diatas kedua entitas(Motor dan Mobil) bisa di generalisasi menjadi ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="a" id="j1"> A. Manusia</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="b" id="j1"> B. Kendaraan</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="c" id="j1"> C. Tanaman</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="d" id="j1"> D. Makanan</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s2">
                        <img src="{{asset('image/soal3.jpg')}}" style="width: 100%" alt="Binary image">
                        <p>2. Jika ERD diatas merupakan ERD dalam lingkungan sekolah,maka entitas Manusia dapat di spesialisasi menjadi entitas ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="a" id="j2"> A. Mobil dan Motor</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="b" id="j2"> B. Dosen dan Mahasiswa</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="c" id="j2"> C. Guru dan Murid</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="d" id="j2"> D. Tugas dan Nilai</label> </div>
                        </div> 
                    </div>

                    <br>
                    <button class="btn btn-success" onclick="kirim()">Kirim jawaban</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function kirim() {
            let kunjaw = ['b', 'd'];
            let benar = $('<p class="text-success"></p>').text('benar');
            let salah = $('<p class="text-danger"></p>').text('salah');
            kunjaw.map((v, i) => {
                let index = i + 1;
                let j = $('input[name="j'+ index +'"]:checked').val();
                let soal = $('#s' + index);
                if(v === j) {
                    soal.append(benar);
                } else {
                    soal.append(salah);
                } 
            });
        }
    </script>
@endsection