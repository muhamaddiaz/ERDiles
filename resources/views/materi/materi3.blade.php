@extends('layouts.app')

@section('title', 'Materi 2')

@section('content')
    <div class="jumbotron home-quotes mt-3">
        <div class="container">
            <h1>Materi 3</h1>
            <p>Kardinalitas, Modalitas & Agregasi</p>
        </div>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('materi.index')}}"><i class="fas fa-book"></i> Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi 3</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="row mb-4" style="text-align:justify">
                    <div class="col-md-8">
                        <h3>Penjelasan</h3>
                        <hr>
                        <h4>Kardinalitas</h4>
                        <p>
                            Kardinalitas adalah penunjuk untuk menentukan jumlah entitas yg dpt berelasi dgn entitas lainnya
                        </p>
                        <ol>
                            <li>
                                <p> 
                                    1.	1 ke 1 atau one to one
                                    Setiap entitas hanya depat berelasi ke satu entitas saja                                        
                                    <div class="text-center m-3">
                                        <img src="{{asset('image/1to1.png')}}" style="width: 100%" alt="Binary image">
                                    </div>    
                                    Mengapa gambar diatas termasuk one to one ,karena satu mahasiswa pasti memiliki satu NIM
                                </p>
                            </li>
                            <li>
                                <p>
                                    1 ke n atau one to many <br>
                                    Satu entitas dapat berhubungan ke banyak entitas
                                    <div class="text-center m-3">
                                        <img src="{{asset('image/nt1.png')}}" style="width: 100%" alt="Binary image">
                                    </div>    
                                    Mengapa gambar diatas termasuk many to one karena lebih dari satu mahasiswa /banyak mahasiswa memiliki satu dosen wali                                   
                                </p>
                            </li>
                            <li>
                                <p>
                                    N ke n atau many to many
                                    <br>Beberapa entitas dapat berhubungan dengan entitas lainnya
                                    <div class="text-center m-3">
                                        <img src="{{asset('image/mtn.png')}}" style="width: 100%" alt="Binary image">
                                    </div>      
                                    Mengapa gambar diatas termasuk many to many ,karena lebih dari satu mahasiswa /banyak mahasiswa memiliki lebih dari satu/banyak nilai
                                </p>
                            </li>
                        </ol>
                        <h4>Modalitas</h4>
                        <p>
                            Modalitas adalah partisipasi sebuah entitas pada satu relasi, relasi yang bisa dibedakan atas :
                        </p>
                        <ul>
                            <li>
                                <p>
                                    0 jika partisipasi bersifat opsional atau tidak wajib, contoh :  mahasiswa dapat mengambil mata kuliah ataupun tidak mengambil mata kuliah sama sekali (cuti)
                                </p>
                            </li>
                            <li>
                                <p>
                                    1 jika partisipasi bersifat wajib, contoh : mahasisw harus membayar BPP sebelum melakukan registrasi mata kuliah
                                </p>
                            </li>
                        </ul>
                        <div class="text-center m-3">
                            <img src="{{asset('image/modalitas1.png')}}" style="width: 100%" alt="Binary image">
                        </div>      
                        <div class="text-center m-3">
                            <img src="{{asset('image/modalitas2.png')}}" style="width: 100%" alt="Binary image">
                        </div>   
                        <h4>Agregasi</h4>
                        <p>
                            Agregasi adalah suatu keadaan dimana suatu realasi hanya dapat direalisasikan setelah relasi yg lain ada terlebih dahulu
                        </p>   
                        <div class="text-center m-3">
                            <img src="{{asset('image/agregasi1.png')}}" style="width: 100%" alt="Binary image">
                        </div>   
                    </div>
                    <div class="col-md-4 mt-3">
                        <h3>Video</h3>
                        <br>
                        <iframe src="https://www.youtube.com/embed/jMwfGILwf70" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#soal">
                            <i class="far fa-edit"></i> Latihan soal
                        </button>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%">
                    <a href="{{route('materi.bagian2')}}" class="btn btn-outline-primary">Sebelumnya</a>
                    <a href="{{route('materi.bagian4')}}" class="btn btn-outline-primary">Selanjutnya</a>
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
                        <p>1. Terdapat entitas WargaNegara dengan entitas NIK yang memiliki relasi “Memiliki”. Maka ini termasuk kedalam kardinalitas?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="a" id="j1"> A. Many to Many</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="b" id="j1"> B. One to Many</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="c" id="j1"> C. One to One</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="d" id="j1"> D. 1..N</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s2">
                        <p>2. Kardinalitas many to many adalah ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="a" id="j2"> A. Beberapa entitas dapat berhubungan dengan entitas lainnya</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="b" id="j2"> B. Satu entitas dapat berhubungan dengan entitas lainnya</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="c" id="j2"> C. Setiap entitas hanya dapat berelasi ke satu entitas saja</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="d" id="j2"> D. Satu buah relasi menghubungkan 2 buah entitas</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s3">
                        <p>2. Jika modalitas bersifat 1, maka partisipasi bersifat?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="a" id="j3"> A. Sunnah</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="b" id="j3"> B. Opsional</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="c" id="j3"> C. Wajib</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="d" id="j3"> D. Parsial</label> </div>
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
            let kunjaw = ['c', 'a', 'c'];
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