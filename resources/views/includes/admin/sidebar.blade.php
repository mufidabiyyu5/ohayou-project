<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-text mx-3">
                    Ohayou.co Admin
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <!-- Nav Item - Paket Travel -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="fas fa-fw fa-hotel"></i>
                    <span>Kategori Produk</span></a>
            </li>

            <!-- Nav Item - Galeri Travel -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('product.index')}}">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Transaksi -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('gallery.index')}}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galeri Produk</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('price_list.index')}}">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Daftar Paket Harga</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('testimonial.index')}}">
                    <i class="fas fa-fw fa-star"></i>
                    <span>Testimoni</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('portfolio.index')}}">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Portfolio</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('client.index')}}">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Klien</span></a>
            </li>

            @if (Auth::user()->role == "SUPERADMIN")
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('list_admin.index')}}">
                        <i class="fas fa-fw fa-users"></i>
                        <span>List Admin</span></a>
                </li>
            @endif

            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->