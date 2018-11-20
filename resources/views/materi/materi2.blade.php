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
@endsection