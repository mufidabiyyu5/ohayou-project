<nav class="navbar navbar-expand-lg py-2" id="mynav">
    <div class="container container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('frontend/assets/images/Logo.png')}}" alt="Logo Ohayou" height="64"
                width="64"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products')}}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order')}}">Cara Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about')}}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimoni')}}">Testimoni</a>
                </li>

            </ul>
            {{-- <a class="btn btn-primary" href="http://wa.me/6289525958301" target="_blank">
                <img src="{{url('frontend/assets/icon/ri-whatsapp-line.svg')}}" alt="ri-whatsapp-line">
                <span>Hubungi Kami</span>
            </a> --}}
        </div>
    </div>
</nav>