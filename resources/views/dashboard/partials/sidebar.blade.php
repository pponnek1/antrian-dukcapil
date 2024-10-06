<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="padding-top: 15px">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo">
                <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" alt="logo" width="42" height="52" />
            </span>
            <span class="app-brand-text demo menu-text fw-bold">DUKCAPIL.</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Divider -->
        <li class="menu-divider"></li>

        <!-- Dashboard -->
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon fas fa-tachometer-alt"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Divider -->
        <li class="menu-divider"></li>

        <!-- Heading: Menu Antrian -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu Antrian</span>
        </li>

        <!-- Antrian -->
        <li class="menu-item">
            <a href="/dashboard/antrian" class="menu-link">
                <i class="menu-icon fas fa-list-alt"></i>
                <div>Antrian</div>
            </a>
        </li>

        <!-- Antrian Masuk (Collapse Menu) -->
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="menu-icon fas fa-users"></i>
                <div>Antrian Masuk</div>
            </a>
            <ul id="collapseTwo" class="menu-sub collapse" aria-labelledby="headingTwo" data-bs-parent="#layout-menu">
                <li class="menu-item">
                    <h6 class="menu-header">Berdasarkan Layanan</h6>
                </li>
                @foreach ($antrians as $antrian)
                    <li class="menu-item">
                        <a href="/dashboard/antrian-masuk/{{ $antrian->slug }}" class="menu-link">
                            <div>{{ $antrian->nama_layanan }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <!-- Divider -->
        <li class="menu-divider"></li>

        <!-- Heading: Data Master -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Master</span>
        </li>

        <!-- Layanan -->
        <li class="menu-item">
            <a href="/dashboard/layanan" class="menu-link">
                <i class="menu-icon fas fa-headset"></i>
                <div>Layanan</div>
            </a>
        </li>

        <!-- Laporan -->
        <li class="menu-item">
            <a href="/laporan" class="menu-link">
                <i class="menu-icon fas fa-book"></i>
                <div>Laporan</div>
            </a>
        </li>

        <!-- Divider -->
        <li class="menu-divider"></li>

        <!-- Sidebar Toggler -->
        <li class="menu-item text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </li>
    </ul>
</aside>
