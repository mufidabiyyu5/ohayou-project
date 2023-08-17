<!doctype html>
<html lang="id-ID">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kami menawarkan produk-produk fashion seperti kaos, polo shirt, hoodie, sweater, topi, dan lain-lain dengan bahan yang berkualitas dengan harga yang kompetitif.">
    <meta name="keywords" content="Konveksi, Kaos, Pakaian Custom, Jaket, Kemeja">
    
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
    <title>@yield('title')</title>
    
    <link rel="shortcut icon" href="{{url('frontend/assets/images/Logo.png')}}">
</head>

<body class="landingpage">
    <!-- Navbar -->
    @include('includes.navbar')
    
    @yield('content')

    @include('includes.footer')

    <!-- Floating button -->
    <a href="#" class="float">
        <img src="{{url('frontend/assets/icon/ri-whatsapp-notif.svg')}}" alt="" class="my-float" width="24" height="24">
        chat with us
    </a>

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</body>

</html>