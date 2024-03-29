@extends('layouts.app')

@section('title')
    Produk - Ohayou.Co
@endsection

@section('content')
    <main>
        <section class="head-product">
            <div class="container container-fluid">
                <h2>Selamat Datang di Katalog Produk Kami!</h2>
                <p>Pilih produk yang kamu inginkan, kemudian chat ke kontak Whatsapp kami ya</p>
            </div>
        </section>
        <section class="container container-fluid">
            @foreach ($category as $items)
                @if ($items->products)
                    <div class="products" id="{{$items->id}}">
                        <h2>{{$items->name}}</h2>
                        <div class="row align-items-start">
                        @forelse ($items->products as $item)
                            <div class="col-lg-3">
                                <a href="{{route('detail', $item->id)}}">
                                    <div class="card-product">
                                        <img src="{{Storage::url($item->galleries->first()->image)}}" alt="product" class="img-fluid img-product">
                                        @if ($item->isbestselling)
                                            <div class="tag">
                                                HOT
                                            </div>
                                        @endif
                                        <div class="quick-view">
                                            <img src="frontend/assets/icon/Eye.svg" alt="eye" class="img-fluid"> View Detail
                                        </div>
                                        <h5>{{$item->title}}</h5>
                                        <p>Mulai dari {{number_format($item->price)}}</p>
                                        <span>Bisa beli satuan</span>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>
                                Tidak Ada Produk
                            </p>
                        @endforelse
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
        <section class="contact">
            <div class="container container-fluid d-block">
                <h2 class="text-center">
                    Yuk! Tunggu Apalagi? <br />
                    Langsung Pesan Ke Ohayou.co, Kami Selalu Siap Membantu
                </h2>
                <div class="text-center">
                    <a href="http://wa.me/6289525958301" target="_blank" class="btn btn-white">
                        <img src="frontend/assets/icon/ri-whatsapp-line-black.svg" alt="Whatsapp">
                        Hubungi Whatsapp Kami
                    </a>
                    <br/>
                    <a href="https://www.instagram.com/ohayou_co/" target="_blank" class="btn btn-outline-white">
                        <img src="frontend/assets/icon/ri-instagram-line.svg" alt="Instagram">
                        Cek Instagram Kami
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection