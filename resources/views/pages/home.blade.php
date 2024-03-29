@extends('layouts.app')

@section('title')
    Ohayou.Co - Konveksi Fashion Tangerang Terpercaya & Berkualitas
@endsection

@php
    $iterate = 0;
@endphp

@section('content')
    <header class="container container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 data-aos="fade-up" data-aos-duration="500">
                    Mau Bikin <span id="typewriter"></span> <br/> Custom?
                    di Ohayou aja!
                </h1>
                <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Ohayou.co membantumu dalam membuat semua pakaian <br/> custom untuk apapun keperluanmu</p>
                <a data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="btn btn-primary" href="{{route('products')}}">Cek Katalog Produk</a>
                <div class="d-flex align-items-center rate">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="d-flex align-items-center rate-comp">
                        <img src="frontend/assets/images/Tokopedia.png" alt="Tokopedia" width="44" height="44">
                        <div class="d-block rate-title">
                            <div class="d-flex rate-caption">
                                <img src="frontend/assets/icon/star.svg" alt="star">
                                <span id="caption">4.9 Rating</span>
                            </div>
                            <span>di Tokopedia</span>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" class="d-flex align-items-center rate-comp">
                        <img src="frontend/assets/images/Shopee.png" alt="Shopee" width="44" height="44">
                        <div class="d-block rate-title">
                            <div class="d-flex rate-caption">
                                <img src="frontend/assets/icon/star.svg" alt="star">
                                <span id="caption">4.7 Rating</span>
                            </div>
                            <span>di Shopee</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-flex">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="container">
                    <input type="radio" name="slider" id="item-1" checked>
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <div class="cards">
                        <label class="card-hero-img" for="item-1" id="song-1">
                            <img src="frontend/assets/images/image-hero-1.jpg"
                                alt="song">
                        </label> 
                        <label class="card-hero-img" for="item-2" id="song-2">
                            <img src="frontend/assets/images/image-hero-2.jpg"
                                alt="song">
                        </label>
                        <label class="card-hero-img" for="item-3" id="song-3">
                            <img src="frontend/assets/images/image-hero-3.jpg"
                                alt="song">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container container-fluid info d-sm-block d-md-flex align-items-center justify-content-center">
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="d-block text-center info-item">
                <h3>12K+</h3>
                <span>Produk Terjual</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="d-block text-center info-item">
                <h3>5.3K+</h3>
                <span>Pelanggan</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="d-block text-center info-item">
                <h3>3.1K+</h3>
                <span>Testimoni</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="d-block text-center info-item">
                <h3>2016</h3>
                <span>Berdiri</span>
            </div>
        </section>
        <section class="container container-fluid hot-products">
            <h2 class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">Hot Products 🔥</h2>
            <div class="row align-items-center justify-content-center">
                @foreach ($products as $item)
                    @if ($item->isbestselling)
                        <div class="col-lg-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <a href="{{route('detail', $item->id)}}">
                                <div class="card-product">
                                    <img src="{{Storage::url($item->galleries->first()->image)}}" alt="product" class="img-fluid img-product">
                                    <div class="tag">
                                        HOT
                                    </div>
                                    <div class="quick-view">
                                        <img src="frontend/assets/icon/Eye.svg" alt="eye" class="img-fluid"> View Detail
                                    </div>
                                    <h5>{{$item->title}}</h5>
                                    <p>Mulai dari {{number_format($item->price)}}</p>
                                    <span>Bisa beli satuan</span>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            <div class="text-center">
                <a href="{{route('products')}}" class="btn btn-primary">Lihat Semua Produk</a>
            </div>
        </section>
        <section class="container container-fluid categories">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4">
                    <a href="{{route('products')}}" class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        <div class="card-categories-main d-flex flex-column" style="background-image: url(frontend/assets/images/tshirt.png);">
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="row-lg">
                        <a href="{{route('products')}}" class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <div class="card-categories d-flex flex-column" style="background-image: url(frontend/assets/images/outer.png);">
                        
                            </div>
                        </a>
                        <a href="{{route('products')}}" class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <div class="card-categories d-flex flex-column" style="background-image: url(frontend/assets/images/hat.png);">
                        
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row-lg">
                        <a href="{{route('products')}}" class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <div class="card-categories d-flex flex-column" style="background-image: url(frontend/assets/images/shirt.png);">
                
                            </div>
                        </a>
                        <a href="{{route('products')}}" class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                            <div class="card-categories d-flex flex-column" style="background-image: url(frontend/assets/images/acc.png);">
                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="container container-fluid keunggulan text-center">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"><span>Keunggulan</span> Kami</h2>
            <div class="row align-items-center justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-4">
                    <img src="frontend/assets/icon/thumbsup.gif" alt="Produk Berkualitas" class="img-fluid">
                    <h3>Produk Berkualitas</h3>
                    <caption>Kami selalu menjaga dan memakai bahan yang berkualitas untuk produk kami</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-4">
                    <img src="frontend/assets/icon/design.gif" alt="Free Jasa Desain" class="img-fluid">
                    <h3>Free Jasa Desain</h3>
                    <caption>Kami menyediakan jasa konsultasi dan pembuatan desain secara gratis loh!</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-4">
                    <img src="frontend/assets/icon/package.gif" alt="Tidak Ada Minimal Order" class="img-fluid">
                    <h3>Tidak Ada Minimal Order</h3>
                    <caption>Kamu bisa order satuan ataupun banyak, pokoknya suka-suka kamu deh hehe</caption>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-4">
                    <img src="frontend/assets/icon/cloth.gif" alt="Sample Produk" class="img-fluid">
                    <h3>Sample Produk</h3>
                    <caption>Kami akan mengirimkan gambaran sample produk yang di order untuk di cek kembali</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-4">
                    <img src="frontend/assets/icon/pricetag.gif" alt="Harga Kompetitif" class="img-fluid">
                    <h3>Harga Kompetitif</h3>
                    <caption>Selalu ada harga khusus untuk kamu yang membeli secara grosir</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-4">
                    <img src="frontend/assets/icon/warranty.gif" alt="Garansi Produk" class="img-fluid">
                    <h3>Garansi Produk</h3>
                    <caption>Kami memberikan garansi terhadap kualitas produk yang baik</caption>
                </div>
            </div>
        </section>
        <section class="container container-fluid text-center order">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"><span>Cara Pemesanan</span> Produk</h2>
            <div class="row align-items-start justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-3">
                    <img src="frontend/assets/icon/design-tools.svg" alt="Design" class="img-fluid">
                    <h4>Tentukan Desain</h4>
                    <p>Kalau kamu belum menentukan desainnya, tenang aja kita bantu bikin desainnya buat kamu</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-3 text-center">
                    <img src="frontend/assets/icon/plain-credit-card.svg" alt="Payment" class="img-fluid">
                    <h4>Pembayaran DP</h4>
                    <p>Sebelum ke produksi, kamu bayar DP (Down Payment) dulu ya sebesar 50% aja kok</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-3 text-center">
                    <img src="frontend/assets/icon/hand-sewing.svg" alt="Production" class="img-fluid">
                    <h4>Proses Produksi</h4>
                    <p>Setelah pembayaran DP, kami akan langsung memproduksi pesanan kamu</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-lg-3 text-center">
                    <img src="frontend/assets/icon/mail-sent.svg" alt="Design" class="img-fluid">
                    <h4>Pelunasan dan Pengiriman</h4>
                    <p>Setelah kamu melunaskan pesanan, kami akan mengirimkan pesananmu ke alamat pengiriman</p>
                </div>
            </div>
        </section>
        <section class="container container-fluid text-center galeri">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">Our <span>Happy</span> Customer</h2>
            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Berikut adalah galeri dari beberapa pelanggan <br/>yang puas dengan produk ohayou.co</p>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="row align-items-center justify-content-center">
                <div class="col-lg-3">
                    <img src="frontend/assets/images/galeri-1.png" alt="galeri-1" class="img-fluid">
                </div>
                <div class="col-lg-2">
                    <img src="frontend/assets/images/galeri-2.png" alt="galeri-2" class="img-fluid">
                    <div class="row">
                        <div class="col-sm">
                            <img src="frontend/assets/images/galeri-3.png" alt="galeri-3" class="img-fluid">
                        </div>
                        <div class="col-sm">
                            <img src="frontend/assets/images/galeri-4.png" alt="galeri-4" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <img src="frontend/assets/images/galeri-5.png" alt="galeri-5" class="img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="frontend/assets/images/galeri-6.png" alt="galeri-6" class="img-fluid">
                </div>
                <div class="col-lg-2">
                    <div class="row-lg">
                        <img src="frontend/assets/images/galeri-7.png" alt="galeri-7" class="img-fluid">
                    </div>
                    <div class="row-lg">
                        <img src="frontend/assets/images/galeri-8.png" alt="galeri-8" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="container container-fluid text-center testimoni">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">Apa <span>Kata Mereka</span> Tentang <span>Ohayou.co</span></h2>
            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Berikut adalah testimoni dari beberapa pelanggan ohayou.co <br/>yang puas dengan pelayanan dan produk kami</p>
            <div class="row align-items-center justify-content-center">
                @for ($i = 0; $i < 3; $i++)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{200 * $i}}" class="col-lg-4">
                        <div class="card-testimoni text-start">
                            <p>{{$items[$i]->testimoni}}</p>
                            <div class="d-flex">
                                <img src="{{Storage::url($items[$i]->image)}}" alt="Customer" class="img-fluid rounded-circle">
                                <div class="d-block">
                                    <h6>{{$items[$i]->customer}}</h6>
                                    <span>{{$items[$i]->about_customer}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
        <section class="container container-fluid payment-method text-center">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">Beragam <span>Metode Pembayaran</span></h2>
            <div class="row align-items-center justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-3">
                    <img src="frontend/assets/images/BNI.png" alt="BNI" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-3">
                    <img src="frontend/assets/images/BRI.png" alt="BRI" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-3">
                    <img src="frontend/assets/images/BCA.png" alt="BCA" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-3">
                    <img src="frontend/assets/images/Mandiri.png" alt="Mandiri" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-3">
                    <img src="frontend/assets/images/Gopay.png" alt="Gopay" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-3">
                    <img src="frontend/assets/images/Shopeepay.png" alt="Shopeepay" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-3">
                    <img src="frontend/assets/images/Ovo.png" alt="Ovo" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-3">
                    <img src="frontend/assets/images/Dana.png" alt="Dana" class="img-fluid">
                </div>
            </div>
        </section>
        <section data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="contact">
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