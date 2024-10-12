<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo" style="padding-top: 15px">
        <span class="app-brand-logo">
            <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" alt="logo" width="42" height="52" />
        </span>
        <span class="app-brand-text demo menu-text fw-bold">DUKCAPIL.</span>
    </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow" style="display: none;"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item" style="">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Menu Antrian">Menu Antrian</span>
        </li>
        <li class="menu-item">
            <a href="/dashboard/antrian" class="menu-link">
                <i class="menu-icon tf-icons ti ti-list-numbers"></i>
                <div data-i18n="Antrian">Antrian</div>
            </a>
        </li>
        <li class="menu-item active:">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div data-i18n="Panggil Antrian">Panggil Antrian</div>
            </a>
            <ul class="menu-sub">
                <h6 class="menu-header">Berdasarkan Layanan</h6>
                @foreach ($antrians as $antrian)
                <li class="menu-item">
                    <a href="/dashboard/antrian-masuk/{{ $antrian->slug }}" class="menu-link">
                        <div>{{ $antrian->nama_layanan }}</div>
                    </a>
                </li>
                @endforeach
            </ul>
        </li>

            <!-- Data Master -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Data Master">Data Master</span>
        </li>
        <li class="menu-item">
            <a href="/dashboard/layanan" class="menu-link">
                <i class="menu-icon tf-icons ti ti-align-box-bottom-right"></i>
                <div data-i18n="Layanan">Layanan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/dashboard/laporan" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                <div data-i18n="Laporan">Laporan</div>
            </a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 1136px; right: 4px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 809px;"></div>
        </div>
    </ul>
</aside>
