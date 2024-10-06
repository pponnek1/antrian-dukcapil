<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" alt="">
            <h1 class="sitename">DUKCAPIL</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home<br></a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown"><a href="#"><span>Antrian Online</span> <i class="bi bi-chevron-bar-down"></i></a>
                <ul>
                    <li><a href="/antrian">Ambil Antrian</a></li>
                    <li><a href="/registrasi-antrian">Registrasi Antrian</a></li>
                </ul>
                </li>
                <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @auth
        <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hallo, {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu">
            @if (auth()->user()->role === 'admin')
            <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
            @else
            <li><a class="dropdown-item" href="/antrian/detail">Antrian Saya </a></li>
            @endif
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    <span class="align-middle">Keluar</span>
                </button>
            </form>
        </ul>

        @else
        <a href="/login" class="btn-getstarted">Login</a>
        @endauth


    </div>
</header><!-- End Header -->
