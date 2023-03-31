@extends('layouts.app')

@section('title')
    Produk - Ohayou.Co
@endsection

@section('content')
    <main>
        <section class="container container-fluid about">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="Project/assets/images/about-img.png" alt="About" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2>
                        Tentang Ohayou.co
                    </h2>
                    <p>
                        Kami merupakan salah satu UMKM yang bergerak pada bidang jasa konveksi yang sudah berjalan sejak tahun 2016
                        dengan pemilik Muhammad Hasby yang berlokasi di Perum Pesona Wibawa Praja G3/5, Kecamatan Cisoka, Kabupaten Tangerang, Banten.
                    </p>
                    <p>
                        Kami menawarkan produk-produk fashion seperti kaos, polo shirt, hoodie, sweater, topi, dan lain-lain dengan
                        bahan yang
                        berkualitas dengan harga yang kompetitif. Selain itu, kami juga menyediakan bagi siapapun yang ingin menjadi
                        reseller
                        atau dropshipper yang tentunya akan sangat menguntungkan untuk kamu.
                    </p>
                    <a href="http://wa.me/6289525958301" target="_blank" class="btn btn-primary"><img src="Project/assets/icon/ri-whatsapp-line.svg" alt="Whatsapp" class="img-fluid">
                        Hubungi Whatsapp Kami</a>
                </div>
            </div>
        </section>
        <section class="container container-fluid location text-center">
            <img src="Project/assets/images/location.png" alt="location">
            <h3>Lokasi Kami</h3>
            <span>Perum Pesona Wibawa Praja G3/5, Kecamatan Cisoka, <br/>
            Kabupaten Tangerang, Banten</span>
        </section>
        <section class=" container container-fluid keunggulan text-center">
            <h2><span>Keunggulan</span> Kami</h2>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4">
                    <img src="Project/assets/images/thumbs.png" alt="Produk Berkualitas" class="img-fluid">
                    <h3>Produk Berkualitas</h3>
                    <caption>Kami selalu menjaga dan memakai bahan yang berkualitas untuk produk kami</caption>
                </div>
                <div class="col-lg-4">
                    <img src="Project/assets/images/design.png" alt="Free Jasa Desain" class="img-fluid">
                    <h3>Free Jasa Desain</h3>
                    <caption>Kami menyediakan jasa konsultasi dan pembuatan desain secara gratis loh!</caption>
                </div>
                <div class="col-lg-4">
                    <img src="Project/assets/images/package.png" alt="Tidak Ada Minimal Order" class="img-fluid">
                    <h3>Tidak Ada Minimal Order</h3>
                    <caption>Kamu bisa order satuan ataupun banyak, pokoknya suka-suka kamu deh hehe</caption>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4">
                    <img src="Project/assets/images/product.png" alt="Sample Produk" class="img-fluid">
                    <h3>Sample Produk</h3>
                    <caption>Kami akan mengirimkan gambaran sample produk yang di order untuk di cek kembali</caption>
                </div>
                <div class="col-lg-4">
                    <img src="Project/assets/images/price.png" alt="Harga Kompetitif" class="img-fluid">
                    <h3>Harga Kompetitif</h3>
                    <caption>Selalu ada harga khusus untuk kamu yang membeli secara grosir</caption>
                </div>
                <div class="col-lg-4">
                    <img src="Project/assets/images/warranty.png" alt="Garansi Produk" class="img-fluid">
                    <h3>Garansi Produk</h3>
                    <caption>Kami memberikan garansi terhadap kualitas produk yang baik</caption>
                </div>
            </div>
        </section>
        <section class="container container-fluid client text-center">
            <h2><span>Client</span> Kami</h2>
            <div class="row align-items-center justify-content-center">
                @foreach ($items as $item)
                    <div class="col-3">
                        <img src="{{Storage::url($item->image)}}" alt="{{$item->name}}" class="img-fluid">
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