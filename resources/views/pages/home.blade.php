@extends('layouts.app')

@section('title')
    Home - Ohayou.Co
@endsection

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
                        <img src="Project/assets/images/Tokopedia.png" alt="Tokopedia" width="44" height="44">
                        <div class="d-block rate-title">
                            <div class="d-flex rate-caption">
                                <img src="Project/assets/icon/star.svg" alt="star">
                                <span id="caption">4.9 Rating</span>
                            </div>
                            <span>di Tokopedia</span>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" class="d-flex align-items-center rate-comp">
                        <img src="Project/assets/images/Shopee.png" alt="Shopee" width="44" height="44">
                        <div class="d-block rate-title">
                            <div class="d-flex rate-caption">
                                <img src="Project/assets/icon/star.svg" alt="star">
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
                            <img src="Project/assets/images/image-hero-1.jpg"
                                alt="song">
                        </label>
                        <label class="card-hero-img" for="item-2" id="song-2">
                            <img src="Project/assets/images/image-hero-2.jpg"
                                alt="song">
                        </label>
                        <label class="card-hero-img" for="item-3" id="song-3">
                            <img src="Project/assets/images/image-hero-3.jpg"
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
        <section class="container container-fluid keunggulan text-center">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"><span>Keunggulan</span> Kami</h2>
            <div class="row align-items-center justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-4">
                    <img src="Project/assets/images/thumbs.png" alt="Produk Berkualitas" class="img-fluid">
                    <h3>Produk Berkualitas</h3>
                    <caption>Kami selalu menjaga dan memakai bahan yang berkualitas untuk produk kami</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-4">
                    <img src="Project/assets/images/design.png" alt="Free Jasa Desain" class="img-fluid">
                    <h3>Free Jasa Desain</h3>
                    <caption>Kami menyediakan jasa konsultasi dan pembuatan desain secara gratis loh!</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-4">
                    <img src="Project/assets/images/package.png" alt="Tidak Ada Minimal Order" class="img-fluid">
                    <h3>Tidak Ada Minimal Order</h3>
                    <caption>Kamu bisa order satuan ataupun banyak, pokoknya suka-suka kamu deh hehe</caption>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-4">
                    <img src="Project/assets/images/product.png" alt="Sample Produk" class="img-fluid">
                    <h3>Sample Produk</h3>
                    <caption>Kami akan mengirimkan gambaran sample produk yang di order untuk di cek kembali</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-4">
                    <img src="Project/assets/images/price.png" alt="Harga Kompetitif" class="img-fluid">
                    <h3>Harga Kompetitif</h3>
                    <caption>Selalu ada harga khusus untuk kamu yang membeli secara grosir</caption>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-4">
                    <img src="Project/assets/images/warranty.png" alt="Garansi Produk" class="img-fluid">
                    <h3>Garansi Produk</h3>
                    <caption>Kami memberikan garansi terhadap kualitas produk yang baik</caption>
                </div>
            </div>
        </section>
        <section class="container container-fluid about">
            <div class="row align-items-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-6">
                    <img src="Project/assets/images/about-img.png" alt="About" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        Tentang Ohayou.co
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        Kami merupakan salah satu UMKM yang bergerak pada bidang jasa konveksi yang sudah berjalan sejak tahun 2016
                        dengan pemilik Muhammad Hasby yang berlokasi di Perum Pesona Wibawa Praja G3/5, Kecamatan Cisoka, Kabupaten Tangerang, Banten.
                    </p>
                    <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        Kami menawarkan produk-produk fashion seperti kaos, polo shirt, hoodie, sweater, topi, dan lain-lain dengan
                        bahan yang
                        berkualitas dengan harga yang kompetitif. Selain itu, kami juga menyediakan bagi siapapun yang ingin menjadi
                        reseller
                        atau dropshipper yang tentunya akan sangat menguntungkan untuk kamu.
                    </p>
                    <a data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" href="http://wa.me/6289525958301" target="_blank" class="btn btn-primary"><img src="Project/assets/icon/ri-whatsapp-line.svg" alt="Whatsapp" class="img-fluid">
                        Hubungi Whatsapp Kami</a>
                </div>
            </div>
        </section>
        <section class="container container-fluid text-center order">
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"><span>Cara Pemesanan</span> Produk</h2>
            <div class="row align-items-start justify-content-center">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-lg-3">
                    <img src="Project/assets/icon/design-tools.svg" alt="Design" class="img-fluid">
                    <h4>Tentukan Desain</h4>
                    <p>Kalau kamu belum menentukan desainnya, tenang aja kita bantu bikin desainnya buat kamu</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-lg-3 text-center">
                    <img src="Project/assets/icon/plain-credit-card.svg" alt="Payment" class="img-fluid">
                    <h4>Pembayaran DP</h4>
                    <p>Sebelum ke produksi, kamu bayar DP (Down Payment) dulu ya sebesar 50% aja kok</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-lg-3 text-center">
                    <img src="Project/assets/icon/hand-sewing.svg" alt="Production" class="img-fluid">
                    <h4>Proses Produksi</h4>
                    <p>Setelah pembayaran DP, kami akan langsung memproduksi pesanan kamu</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-lg-3 text-center">
                    <img src="Project/assets/icon/mail-sent.svg" alt="Design" class="img-fluid">
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
                    <img src="Project/assets/images/galeri-1.png" alt="galeri-1" class="img-fluid">
                </div>
                <div class="col-lg-2">
                    <img src="Project/assets/images/galeri-2.png" alt="galeri-2" class="img-fluid">
                    <div class="row">
                        <div class="col-sm">
                            <img src="Project/assets/images/galeri-3.png" alt="galeri-3" class="img-fluid">
                        </div>
                        <div class="col-sm">
                            <img src="Project/assets/images/galeri-4.png" alt="galeri-4" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <img src="Project/assets/images/galeri-5.png" alt="galeri-5" class="img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="Project/assets/images/galeri-6.png" alt="galeri-6" class="img-fluid">
                </div>
                <div class="col-lg-2">
                    <div class="row-lg">
                        <img src="Project/assets/images/galeri-7.png" alt="galeri-7" class="img-fluid">
                    </div>
                    <div class="row-lg">
                        <img src="Project/assets/images/galeri-8.png" alt="galeri-8" class="img-fluid">
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
                    <img src="Project/assets/images/BNI.png" alt="BNI" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-3">
                    <img src="Project/assets/images/BRI.png" alt="BRI" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-3">
                    <img src="Project/assets/images/BCA.png" alt="BCA" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-3">
                    <img src="Project/assets/images/Mandiri.png" alt="Mandiri" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" class="col-3">
                    <img src="Project/assets/images/Gopay.png" alt="Gopay" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="col-3">
                    <img src="Project/assets/images/Shopeepay.png" alt="Shopeepay" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="col-3">
                    <img src="Project/assets/images/Ovo.png" alt="Ovo" class="img-fluid">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" class="col-3">
                    <img src="Project/assets/images/Dana.png" alt="Dana" class="img-fluid">
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