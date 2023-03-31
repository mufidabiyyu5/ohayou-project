@extends('layouts.app')

@section('title')
    {{$items->title}} - Ohayou.Co
@endsection

@section('content')
    <main>
        <nav class="container container-fluid" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('products')}}">Produk</a></li>
                <li class="breadcrumb-item"><a href="{{route('products')}}">{{$items->categories->name}}</a></li>
                <li class="breadcrumb-item active">{{$items->title}}</li>
            </ol>
        </nav>
        <section class="container container-fluid detail-title">
            <div class="row align-items-start">
                <div class="col-lg-4">
                    <div class="card-details">
                        <div class="xzoom-container">
                            <img src="{{Storage::url($items->galleries->first()->image)}}" class="xzoom img-fluid" id="xzoom-default" height="350"
                                xoriginal="{{Storage::url($items->galleries->first()->image)}}">
                        </div>
                        <div class="xzoom-thumbs">
                            @foreach ($items->galleries as $item)
                                <a href="{{Storage::url($item->image)}}">
                                    <img src="{{Storage::url($item->image)}}" class="xzoom-gallery" width="64" height="60"
                                        xpreview="{{Storage::url($item->image)}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2>{{$items->title}}</h2>
                    <h4>Mulai dari</h4>
                    <h1>Rp {{number_format($items->price)}} / pcs</h1>
                    @if ($items->isbestselling)
                        <div class="d-flex align-items-center badge-product">
                            <img src="{{url('Project/assets/icon/thumbs.svg')}}" alt="thumbs">
                            <span>Produk paling laku</span>
                        </div>
                    @endif
                    @if ($items->sold >= 500)
                        <p>Terjual 500+ pcs</p>
                    @else
                        <p>Terjual {{$items->sold}} pcs</p>
                    @endif
                    <p>Bahan: {{$items->material}}</p>
                </div>
                <div class="col-lg-3">
                    <div class="card-contact d-block">
                        <p>Kamu dapat melakukan konsultasi terlebih dahulu atau pesan melalui Whatsapp kami</p>
                        <a href="http://wa.me/6289525958301?text=Halo, Saya ingin memesan {{$items->title}}" target="_blank" class="btn btn-primary d-block">
                            <img src="{{url('Project/assets/icon/ri-whatsapp-line.svg')}}" alt="Pesan"> Pesan
                        </a>
                        <a href="http://wa.me/6289525958301?text=Halo, Saya ingin menanyakan terkait produk {{$items->title}}" target="_blank" class="btn btn-outline-primary d-block">
                            <img src="{{url('Project/assets/icon/message.svg')}}" alt="konsultasi"> Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="container container-fluid description">
            <h3>Deskripsi Produksi</h3>
            <p>{{$items->description}}</p>
        </section>
        <section class="container container-fluid price-list">
            <h3>Daftar Harga</h3>
            <div class="row align-items-center">
                @foreach ($items->price_list->sortBy('price') as $key => $item)
                    @if ($key == 0)
                        <div class="col-lg-3">
                            <div class="card-main-price">
                                <h4>{{$item->title}}</h4>
                                <h3>Rp {{number_format($item->price)}} / pcs</h3>
                                <hr>
                                <div class="d-block featured">
                                    @foreach ($item->description as $desc)
                                        <div>
                                            <img src="{{url('Project/assets/icon/check-white.svg')}}" alt="check">
                                            <span>{{$desc['value']}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3">
                            <div class="card-price">
                                <h4>{{$item->title}}</h4>
                                <h3>Rp {{number_format($item->price)}} / pcs</h3>
                                <hr>
                                <div class="d-block featured">
                                    @foreach ($item->description as $desc)
                                        <div>
                                            <img src="{{url('Project/assets/icon/check-yellow.svg')}}" alt="check">
                                            <span>{{$desc['value']}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
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