@extends('layouts.app')

@section('title')
    Testimoni - Ohayou.Co
@endsection

@section('content')
    <main>
        <section class="head-bg text-center">
            <div class="container container-fluid">
                <h2>Testimoni</h2>
                <p>Inilah cerita dari mereka yang puas dengan kualitas produk dan pelayanan kami</p>
            </div>
        </section>
        <section class="container container-fluid text-center testimoni">
            <div class="row align-items-center justify-content-center">
                @foreach ($items as $item)
                    <div class="col-lg-4">
                        <div class="card-testimoni text-start">
                            <p>{{$item->testimoni}}</p>
                            <div class="d-flex">
                                <img src="{{Storage::url($item->image)}}" alt="Customer" class="img-fluid rounded-circle">
                                <div class="d-block">
                                    <h6>{{$item->customer}}</h6>
                                    <span>{{$item->about_customer}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="contact">
            <div class="container container-fluid d-block">
                <h2 class="text-center">
                    Yuk! Tunggu Apalagi? <br />
                    Langsung Pesan Ke Ohayou.co, Kami Selalu Siap Membantu
                </h2>
                <div class="text-center">
                    <a href="http://wa.me/6289525958301" target="_blank" class="btn btn-white">
                        <img src="Project/assets/icon/ri-whatsapp-line-black.svg" alt="Whatsapp">
                        Hubungi Whatsapp Kami
                    </a>
                    <br/>
                    <a href="https://www.instagram.com/ohayou_co/" target="_blank" class="btn btn-outline-white">
                        <img src="Project/assets/icon/ri-instagram-line.svg" alt="Instagram">
                        Cek Instagram Kami
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection