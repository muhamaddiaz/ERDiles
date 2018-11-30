@extends('layouts.app')

@section('title', 'Materi 2')

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Materi 2</h1>
            <p>Key</p>
        </div>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('materi.index')}}"><i class="fas fa-book"></i> Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi 2</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="row mb-4" style="text-align:justify">
                    <div class="col-md-8">
                        <h3>Penjelasan</h3>
                        <hr>
                        <h4>Key</h4>
                        <ul>
                            <li>
                                <p> 
                                    Super key : Satu atau lebih atribut (kumpulan atribut) yang dapat membedakan setiap baris data dalam table secara unik.
                                    Contohnya : table customer memiliki atribut customer-id, customer-Name, customer-Street, customer-City <br>
                                    Maka super keynya :
                                    <ul>
                                        <li>
                                            <p>
                                                customer-id, customer-Name, customer-Street, customer-City
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                customer-id, customer-Name, customer-Street
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                customer-id, customer-Name
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                customer-id
                                            </p>
                                        </li>
                                    </ul>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Candidat Key : super key yang sudah diminimalkan
                                    Dari super key kita ambil yang sudah diminimalkan, maka menjadi :   
                                    <ul>
                                        <li>
                                            <p>
                                                customer-id
                                            </p>
                                        </li>
                                    </ul>                                     
                                </p>
                            </li>
                            <li>
                                <p>
                                    Primary Key : salah satu dari super key yang dianggap paling unik 
                                    <ul>
                                        <li>
                                            <p>
                                                customer-id
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="text-center m-3">
                                        <img src="{{asset('image/key.png')}}" style="width: 100%" alt="Binary image">
                                    </div>                               
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-3">
                        <h3>Video</h3>
                        <br>
                        <h4 class="text-secondary">Video tidak tersedia</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#soal">
                            <i class="far fa-edit"></i> Latihan soal
                        </button>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%">
                    <a href="{{route('materi.bagian1')}}" class="btn btn-outline-primary">Sebelumnya</a>
                    <a href="{{route('materi.bagian3')}}" class="btn btn-outline-primary">Selanjutnya</a>
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
                        <img src="{{asset('image/soal2.jpg')}}" style="width: 100%" alt="Binary image">
                        <p>1. Gambar diatas merupakan notasi ERD ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="a" id="j1"> A. Entitas kuat</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="b" id="j1"> B. Relasi</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="c" id="j1"> C. Atribut</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="d" id="j1"> D. Atribut ganda</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s2">
                        <p>2. Manakah yang bukan termasuk key ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="a" id="j2"> A. Super key</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="b" id="j2"> B. Candidat key</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="c" id="j2"> C. Primary key</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="d" id="j2"> D. Secondary key</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s3">
                        <p>3. Dalam entitas mahasiswa terdapat atribut Nama, NIM, Alamat, Jenis Kelamin. Manakah yang termasuk primary key?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="a" id="j3"> A. Nama</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="b" id="j3"> B. NIM</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="c" id="j3"> C. Alamat</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="d" id="j3"> D. Jenis kelamin</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s4">
                        <img src="{{asset('image/soal2-1.jpg')}}" style="width: 100%" alt="Binary image">
                        <p>4. Dari ERD diatas yang seharusnya dijadikan primary key untuk Entitas Departemen dan Karyawan adalah ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="a" id="j4"> A. namaDepartemen,idKaryawan</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="b" id="j4"> B. nama Departemen,namaKaryawan</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="c" id="j4"> C. noDepartemen,noHPKaryawan</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="d" id="j4"> D. noDepartemen,idKaryawan</label> </div>
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
            let kunjaw = ['d', 'c', 'd', 'd'];
            let benar = $('<label class="text-success"></label>').text('benar');
            let salah = $('<label class="text-danger"></label>').text('salah');
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