@extends('layouts.app')

@section('title', 'Materi 1')

@section('content')
    <div class="jumbotron home-quotes">
        <div class="container">
            <h1>Materi 1</h1>
            <p>Pengertian ERD</p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4" style="text-align:justify">
                    <div class="col-md-8">
                        <h3>Penjelasan</h3>
                        <hr>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERD adalah permodelan data berdasarkan persepsi pada dunia nyata yang terdiri dari objek yang disebut entitas, dan hubungan antar entitas yang biasa disebut relasi. Contohnya seperti ini : mahasiswa, dosen, mata kuliah merupakan entitas dari lingkungan kampus, hubungan diantara ketiganya merupakan relasi. <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entitas di deskripsiikan pada sebuah database dengan kumpulan antribut, misalnya seperti NIM, nama, alamat, dll. Dari atribut diatas dapat kita simpulkan bahwa atribut diatas merupkan atribut milik entitas mahasiswa.
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
                        <div class="display: flex; justify-content: space-between; width: 100%">
                            <a href="{{route('materi.bagian2')}}" class="btn btn-outline-primary">Selanjutnya</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Video</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection