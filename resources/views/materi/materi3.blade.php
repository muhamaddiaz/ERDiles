@extends('layouts.app')

@section('title', 'Materi 2')

@section('content')
    <div class="jumbotron home-quotes">
        <div class="container">
            <h1>Materi 3</h1>
            <p>Kardinalitas, Modalitas & Agregasi</p>
        </div>
    </div>
    <div class="container">
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
@endsection