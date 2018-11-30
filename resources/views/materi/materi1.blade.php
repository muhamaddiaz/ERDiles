@extends('layouts.app')

@section('title', 'Materi 1')

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Materi 1</h1>
            <p>Pengertian ERD</p>
        </div>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('materi.index')}}"><i class="fas fa-book"></i> Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi 1</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="row mb-4" style="text-align:justify">
                    <div class="col-md-8">
                        <h3>Penjelasan</h3>
                        <hr>
                        <p>
                            ERD adalah permodelan data berdasarkan persepsi pada dunia nyata yang terdiri dari objek yang disebut entitas, dan hubungan antar entitas yang biasa disebut relasi. Contohnya seperti ini : mahasiswa, dosen, mata kuliah merupakan entitas dari lingkungan kampus, hubungan diantara ketiganya merupakan relasi. <br><br>
                            Entitas di deskripsiikan pada sebuah database dengan kumpulan antribut, misalnya seperti NIM, nama, alamat, dll. Dari atribut diatas dapat kita simpulkan bahwa atribut diatas merupkan atribut milik entitas mahasiswa.
                        </p>
                        <h4>Komponen dari ERD</h4>
                        <ul>
                            <li>
                                <p>Entitas : Objek didunia nyata yang dapat dibedakan dgn objek lainnya. Disini entitas terbagi menjadi 3 :</p>
                                <ul>
                                    <li>
                                        <p>Entitas kuat, entitas yangg tidak bergantung pada entitas lain, contohnya adalah terdapat entitas manusia dengan entitas laptop, jika entitas laptop dihapus maka entitas manusia masih tetap ada. Kenapa? Karena manusia tidak ada laptop masih tetap bisa menggunakan yang lainnya seperti handphone ataupun komputer</p>
                                    </li>
                                    <li>
                                        <p>Entitas lemah, entitas yang memiliki ketergantungan, contohnya adalah terdapat entitas komputer dengan entitas listrik, jika entitas listrik dihapus maka entitas komputer pun ikut terhapus, kenapa?, karena jika komputer tidak ada listrik, komputer tidak akan bisa menyala</p>
                                    </li>
                                    <li>
                                        <p>Entitas asosiatif, entitas yang tebentuk dari relasi banyak ke banyak dan memiliki 1 atribut primary key. Contohnya  adalah terdapat entitas manusia dengan entitas penjualan. Beberapa manusia dapat membeli banyak produk dan satu produk dapat dibeli banyak manusia</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p>Atribut, deskripsi sifat atau keterangan dari sebuah entitas. Atribut dapat dibedakan menjadi lima bagian :</p>
                                <ul>
                                    <li>
                                        <p>
                                            Simple atribut, atribut yang tidak bisa dipecah kembali. Contohnya adalah No.KTP, kenapa dapat dikatakan simple atribut? Karena tidak dapat dibagi menjadi lebih rinci lagi
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Komposit atribut, atribut yang dapat dipecah jadi beberapa bagian. Contohnya adalah Nama, kenapa Nama dikatakan komposit atribut?, karena nama dapat dipecah kembali menjadi FirstName dan LastName
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Single valued atribut, hanya memiliki 1 value atau memiliki satu nilai. Contohnya adalah NIM seorang mahasiswa. Kenapa dapat dikatakan single valued atribut?, karena NIM hanya memiliki satu nomor, seperti misalnya seorang mahasiswa mendapatkan NIM 1301175223, tidak mungkin mahasiswa lain memiliki NIM yang sama
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Multi valued atribut, hanya memiliki 2 value atau memiliki dua nilai. Contohnya adalah hobi. Kenapa? Karena hobi dapat memiliki banyak nilai, misalnya hobi bisa saja bersepedah atau berenang atau bermain badminton, sehingga hobi tersebut memiliki banyak nilai
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Derived valued atribut, atribut yang didapatkan dari pengolahan atribut lain. Contohnya adalah atribut umur yang nilainya didapatkan dari atribut tanggal_lahir
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p>Relasi, asosiasi antar satu entitas dgn entitas lainnya, biasanya relasi ini berbentuk kata kerja seperti Bekerja, Memiliki, Membawahi Macam-macam relasi :</p>
                                <ul>
                                    <li>
                                        <p>
                                            Relasi, asosiasi antar satu entitas dgn entitas lainnya, biasanya relasi ini berbentuk kata kerja seperti Bekerja, Memiliki, Membawahi Macam-macam relasi :
                                            <div class="text-center m-3">
                                                <img src="{{asset('image/Unary.png')}}" style="width: 50%;" alt="Unary image">
                                            </div>
                                            Karyawan membawahi karyawan lain contoh seperti manager membawahi karyawan, dan dalam hal ini manager adalah karyawan juga.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Binary (derajat dua), satu buah relasi menghubungkan dua buah entitas
                                            <div class="text-center m-3">
                                                <img src="{{asset('image/Binary.png')}}" style="width: 100%" alt="Binary image">
                                            </div>
                                            Pegawai dan kendaraan dua entitas yang berbeda sehingga perlu ada relasi yang menghubugkan keduanya yaitu memiliki, maka terbentuk erd pegawai memiliki kendaraan 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Ternary (derajat tiga), satu buah relasi menghubungkan tiga buah entitas
                                            <div class="text-center m-3">
                                                <img src="{{asset('image/Ternary.png')}}" style="width: 100%" alt="Binary image">
                                            </div>
                                            Pegawai pada kota tertentu memiliki proyek, sehinga relasi bekerja menghubungkan entity  pegawai, proyek,kota.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Notasi ERD</h4>
                                <ul>
                                    <li>
                                        <p>
                                            <div class="text-center m-3">
                                                <img src="{{asset('image/notasi1.jpg')}}" style="width: 100%" alt="Binary image">
                                            </div>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <div class="text-center m-3">
                                                <img src="{{asset('image/notasi2.jpg')}}" style="width: 100%" alt="Binary image">
                                            </div>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-3">
                        <h3>Video</h3>
                        <br>
                        <iframe style="width: auto; height: auto" src="https://www.youtube.com/embed/OXvhfq1V84c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#soal">
                            <i class="far fa-edit"></i> Latihan soal
                        </button>
                    </div>
                </div>
                <div class="display: flex; justify-content: right; width: 100%">
                    <a href="{{route('materi.bagian2')}}" style="float: right" class="btn btn-outline-primary">Selanjutnya</a>
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
                       <p>1. Kampus memiliki seorang Dosen, di  dalam ERD Dosen termasuk komponen apa?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="a" id="j1"> A. Atribut</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="b" id="j1"> B. Entitas</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="c" id="j1"> C. Key</label> </div>
                            <div class="col-md-6"><label for="j1"><input type="radio" name="j1" value="d" id="j1"> D. Relasi</label> </div>
                        </div> 
                    </div>
                    
                    <div class="soal mb-4" id="s2">
                        <p>2. Terdapat entitas motor dengan entitas bensin. Jika entitas bensin dihapus maka entitas motor pun akan ikut terhapus. Maka ini termasuk pada bagian ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="a" id="j2"> A. Entitas kuat</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="b" id="j2"> B. Entitas Asosiatif</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="c" id="j2"> C. Entitas lemah</label> </div>
                            <div class="col-md-6"><label for="j2"><input type="radio" name="j2" value="d" id="j2"> D. Simple atribut</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s3">
                        <p>3. Berikut ini yang termasuk pada Atribut Composite adalah ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="a" id="j3"> A. NIM</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="b" id="j3"> B. Nomer telepon</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="c" id="j3"> C. Alamat</label> </div>
                            <div class="col-md-6"><label for="j3"><input type="radio" name="j3" value="d" id="j3"> D. Jenis kelamin</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s4">
                        <p>4. Pengertian relasi unary adalah ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="a" id="j4"> A. Satu buah relasi yang menghubungkan satu buah entitas</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="b" id="j4"> B. Satu buah relasi menghubungkan tiga buah entitas</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="c" id="j4"> C. Satu buah relasi menghubungkan dua buah entitas</label> </div>
                            <div class="col-md-6"><label for="j4"><input type="radio" name="j4" value="d" id="j4"> D. Satu buah relasi menghubungkan empat buah entitas</label> </div>
                        </div> 
                    </div>

                    <div class="soal mb-4" id="s5">
                        <img src="{{asset('image/Ternary.png')}}" style="width: 100%" alt="Binary image"><br><br>
                        <p>5. Dari gambar diatas dapat disimpulkan ERD ini memiliki derajat relasi ?</p>
                        <div class="row">
                            <div class="col-md-6"><label for="j5"><input type="radio" name="j5" value="a" id="j5"> A. Unary</label> </div>
                            <div class="col-md-6"><label for="j5"><input type="radio" name="j5" value="b" id="j5"> B. Binary</label> </div>
                            <div class="col-md-6"><label for="j5"><input type="radio" name="j5" value="c" id="j5"> C. Ternary</label> </div>
                            <div class="col-md-6"><label for="j5"><input type="radio" name="j5" value="d" id="j5"> D. Quadnary</label> </div>
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
            let kunjaw = ['b', 'c', 'c', 'a', 'c'];
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