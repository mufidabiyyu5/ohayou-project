@extends('layouts.app')

@section('title')
    Cara Order - Ohayou.Co
@endsection

@section('content')
    <main>
        <section class="container container-fluid text-center order">
            <h2><span>Cara Pemesanan</span> Produk</h2>
            <div class="row align-items-start justify-content-center">
                <div class="col-lg-3">
                    <img src="Project/assets/icon/design-tools.svg" alt="Design" class="img-fluid">
                    <h4>Tentukan Desain</h4>
                    <p>Kalau kamu belum menentukan desainnya, tenang aja kita bantu bikin desainnya buat kamu</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="Project/assets/icon/plain-credit-card.svg" alt="Payment" class="img-fluid">
                    <h4>Pembayaran DP</h4>
                    <p>Sebelum ke produksi, kamu bayar DP (Down Payment) dulu ya sebesar 50% aja kok</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="Project/assets/icon/hand-sewing.svg" alt="Production" class="img-fluid">
                    <h4>Proses Produksi</h4>
                    <p>Setelah pembayaran DP, kami akan langsung memproduksi pesanan kamu</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="Project/assets/icon/mail-sent.svg" alt="Design" class="img-fluid">
                    <h4>Pelunasan dan Pengiriman</h4>
                    <p>Setelah kamu melunaskan pesanan, kami akan mengirimkan pesananmu ke alamat pengiriman</p>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="container container-fluid">
                <h3 class="text-center">Apa Aja Nih Yang Sering Ditanyain Oleh Pelanggan?</h3>
                <div class="row accordion"id="accordionExample">
                    <div class="col-lg-6">
                        <div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Apakah ada minimal order untuk produk custom?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Tidak ada ya, jadi kamu bisa order berapapun yang kamu mau
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Kalau order banyak, apakah dapat harga khusus?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ohh tentu dong! Di Ohayou akan selalu ada harga khusus untuk kamu, silahkan hubungi whatsapp kami ya
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Kalau mau order gimana cara pembayarannya?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Untuk cara pembayaran kamu bisa melakukan pembayaran DP sebesar 50% terlebih dahulu ya melalui 
                                        Transfer bank, Gopay, Ovo, Dana, atau Shopeepay. Nah setelah selesai produksi, kamu bisa langsung melunaskan pembayaran sisanya
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Ohayou.co lokasinya dimana
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Saat ini alamat kami di Perum Pesona Wibawa Praja G3/5, Kecamatan Cisoka, Kabupaten Tangerang, Banten.
                                        Untuk kamu yang mau datang langsung boleh banget kok
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Untuk proses produksi berapa lama?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Untuk proses produksi tergantung banyaknya pesanan ya, kira-kira estimasinya 1-4 minggu
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Kalau mau jadi reseller gimana caranya ya?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Untuk kamu yang mau jadi reseller produk kami, boleh banget langsung hubungi whatsapp kami ya
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <img src="{{url('Project/assets/icon/ri-whatsapp-line-black.svg')}}" alt="Whatsapp">
                        Hubungi Whatsapp Kami
                    </a>
                    <br/>
                    <a href="https://www.instagram.com/ohayou_co/" target="_blank" class="btn btn-outline-white">
                        <img src="{{url('Project/assets/icon/ri-instagram-line.svg')}}" alt="Instagram">
                        Cek Instagram Kami
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection