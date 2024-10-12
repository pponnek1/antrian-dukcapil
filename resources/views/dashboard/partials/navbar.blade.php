<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="ti ti-menu-2 ti-md"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item navbar-search-wrapper mb-0">
            <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal = date('d-m-Y');
                        $jam = date('H:i:s');
                    ?>

        <button type="button" class="btn btn-outline-primary" id="jam">Jam : {{ $jam }} || Tanggal : {{ $tanggal
            }}</button>
        <script>
            function updateJam() {
                      var jam = new Date().toLocaleTimeString('en-US', { hour12: false });
                      document.getElementById("jam").innerHTML = "Jam : " + jam + " || Tanggal : {{ $tanggal }}";
                    }
                    setInterval(updateJam, 1000); // memperbarui setiap 1 detik
        </script>
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../../assets/img/avatars/1.png" alt="" class="rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item mt-0 waves-effect" href="pages-account-settings-account.html">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar avatar-online">
                      <img src="" alt="" class="rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider my-1 mx-n2"></div>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="pages-profile-user.html">
                <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="pages-account-settings-account.html">
                <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="pages-account-settings-billing.html">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                  <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider my-1 mx-n2"></div>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="pages-pricing.html">
                <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="pages-faq.html">
                <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
              </a>
            </li>
            <li>
              <div class="d-grid px-2 pt-2 pb-1">
                <a class="btn btn-sm btn-danger d-flex waves-effect waves-light" href="auth-login-cover.html" target="_blank">
                  <small class="align-middle">Logout</small>
                  <i class="ti ti-logout ms-2 ti-14px"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
      <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
      <i class="ti ti-x search-toggler cursor-pointer"></i>
    </div>
  </nav>
