@extends('layouts.app')

@section('title')
    Portfolio - Ohayou.Co
@endsection

@section('content')
    <main>
        <section class="container container-fluid text-center portfolio">
            <h2><span>Portfolio</span> Ohayou.co</h2>
            <p>Berikut adalah produk-produk yang telah kami kerjakan</p>
            <div class="row align-items-center justify-content-center">
                @foreach ($items as $item)
                    <div class="col-lg-3 img-portfolio">
                        <img src="{{Storage::url($item->image)}}" alt="{{$item->name}}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </section>
        <section class="head-bg text-center">
            <div class="container container-fluid">
                <h2>Layanan Ohayou.co</h2>
                <p>Ini adalah fasilitas dan layanan kami untuk selalu menjaga kualitas produk kami</p>
            </div>
        </section>
        <section class="container container-fluid service-section">
            <div class="d-none d-lg-flex align-items-center service-content">
                <img src="Project/assets/images/service-1.png" alt="Vendor" class="img-fluid" width="400" height="400">
                <div class="d-block text-content">
                    <h3>Vendor</h3>
                    <p>Lagi cari vendor untuk brand kamu? Kamilah solusinya, kami siap melayani pesanan dari satuan sampai ribuan dengan harga
                    yang bersaing dan kualitas yang terbaik, baik dari bahan maupun sablon.</p>
                    <p>Kami menyediakan banyak sekali bahan yang tentunya bisa kamu request, dan untuk sablon kami menyediakan dari mulai
                    sablon plastisol, rubber, sampai DTF. Bahan-bahan ini sangat cocok untuk kamu yang ingin membuat brand clothing brand.</p>
                </div>
            </div>
            <div class="d-block d-lg-none text-content">
                <h3>Vendor</h3>
                <p>Lagi cari vendor untuk brand kamu? Kamilah solusinya, kami siap melayani pesanan dari satuan sampai ribuan dengan
                    harga
                    yang bersaing dan kualitas yang terbaik, baik dari bahan maupun sablon.</p>
                <p>Kami menyediakan banyak sekali bahan yang tentunya bisa kamu request, dan untuk sablon kami menyediakan dari
                    mulai
                    sablon plastisol, rubber, sampai DTF. Bahan-bahan ini sangat cocok untuk kamu yang ingin membuat brand clothing
                    brand.</p>
            </div>
            <div class="d-none d-lg-flex align-items-center service-content">
                <div class="d-block text-content">
                    <h3>Reseller</h3>
                    <p>Kami selalu terbuka untuk kamu yang ingin menjadi reseller dari produk-produk yang ditawarkan ohayou.co, tentunya dengan
                    harga yang menjanjikan dan kompetitif.</p>
                    <p>Kamu bisa menjadi reseller dari kaos atau jaket atau kaos kaki atau apapun yang kamu mau di produk ohayou.co, hasil dari
                    reseller tentunya sangat menguntungkan untuk kamu yang ingin mendapatkan uang tambahan. Jadi tunggu apalagi? Yuk jadi
                    reseller di ohayou.co!</p>
                </div>
                <img src="Project/assets/images/service-1.png" alt="Vendor" class="img-fluid" width="400" height="400">
            </div>
            <div class="d-block d-lg-none text-content">
                <h3>Reseller</h3>
                    <p>Kami selalu terbuka untuk kamu yang ingin menjadi reseller dari produk-produk yang ditawarkan ohayou.co, tentunya dengan
                    harga yang menjanjikan dan kompetitif.</p>
                    <p>Kamu bisa menjadi reseller dari kaos atau jaket atau kaos kaki atau apapun yang kamu mau di produk ohayou.co, hasil dari
                    reseller tentunya sangat menguntungkan untuk kamu yang ingin mendapatkan uang tambahan. Jadi tunggu apalagi? Yuk jadi
                    reseller di ohayou.co!</p>
            </div>
            <div class="d-none d-lg-flex align-items-center service-content">
                <img src="Project/assets/images/service-3.png" alt="Vendor" class="img-fluid" width="400" height="400">
                <div class="d-block text-content">
                    <h3>Satuan & Paket Custom</h3>
                    <p>Pengen order baju custom tapi cuma pengen satuan? Tenang aja, bisa kok di ohayou.co. Disini kamu bisa order suka-suka
                        kamu, sesuai kebutuhan kamu, entah kamu butuh baju satuan, couple, maupun dalam jumlah yang banyak.</p>
                    <p>Eitss, tentunya akan selalu ada harga yang super spesial untuk kamu yang order dalam jumlah tertentu. Kamu boleh
                        banget
                        untuk konsultasi terkait harga dan bahan kepada kami, caranya kamu tinggal chat aja melalui kontak Whatsapp kami ya!
                    </p>
                </div>
            </div>
            <div class="d-block d-lg-none text-content">
                <h3>Satuan & Paket Custom</h3>
                <p>Pengen order baju custom tapi cuma pengen satuan? Tenang aja, bisa kok di ohayou.co. Disini kamu bisa order suka-suka
                    kamu, sesuai kebutuhan kamu, entah kamu butuh baju satuan, couple, maupun dalam jumlah yang banyak.</p>
                <p>Eitss, tentunya akan selalu ada harga yang super spesial untuk kamu yang order dalam jumlah tertentu. Kamu boleh
                    banget
                    untuk konsultasi terkait harga dan bahan kepada kami, caranya kamu tinggal chat aja melalui kontak Whatsapp kami ya!
                </p>
            </div>
            <div class="d-none d-lg-flex align-items-center service-content">
                <div class="d-block text-content">
                    <h3>Gratis Jasa Desain</h3>
                    <p>Mau buat kaos custom tapi bingung desainnya kaya gimana? Tenang aja, kami menyediakan jasa desain secara gratis tis tis
                    untuk kamu yang masih bingung-bingung desainnya mau seperti apa atau cara bikinnya gimana.</p>
                    <p>Kamu tinggal bilang aja desain yang kamu mau seperti apa, cukup sketsa kasarnya aja atau tunjukin referensi desain yang
                    kamu mau. Nanti kami yang akan poles desainnya menjadi rapih dan bagus sampai kamu bilang oke ke kami.</p>
                </div>
                <img src="Project/assets/images/service-4.png" alt="Vendor" class="img-fluid" width="400" height="400">
            </div>
            <div class="d-block d-lg-none text-content">
                <h3>Gratis Jasa Desain</h3>
                <p>Mau buat kaos custom tapi bingung desainnya kaya gimana? Tenang aja, kami menyediakan jasa desain secara gratis tis
                    tis
                    untuk kamu yang masih bingung-bingung desainnya mau seperti apa atau cara bikinnya gimana.</p>
                <p>Kamu tinggal bilang aja desain yang kamu mau seperti apa, cukup sketsa kasarnya aja atau tunjukin referensi desain
                    yang
                    kamu mau. Nanti kami yang akan poles desainnya menjadi rapih dan bagus sampai kamu bilang oke ke kami.</p>
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