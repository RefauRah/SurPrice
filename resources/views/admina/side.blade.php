<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="index.html">
            <img src="{{url('/assets/admin/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a href="index.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{url('/admin/admin')}}">
                        <i class="fas fa-user"></i>Admin</a>
                </li>
                <li>
                    <a href="{{url('/admin/produk')}}">
                        <i class="fas fa-table"></i>Produk</a>
                </li>
                <li>
                    <a href="{{url('/admin/kategori')}}">
                        <i class="fas fa-table"></i>Kategori Produk</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>