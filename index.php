<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lomart</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.html" class="text-nowrap logo-img">
            <img src="assets/images/logos/logo-LOMART.png" width="230" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="pesanan.html" aria-expanded="false">
                <span class="material-symbols-outlined">
                  local_laundry_service
                </span>
                <span class="hide-menu">Pesanan</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span>Sample Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="sample-page.html" aria-expanded="false">
                <span>
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle" />
                </span>
                <span class="hide-menu">Profile</span>
                <span class="hide-menu"><i class="ti ti-login"></i></span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">
                  Upgrade to pro
                </h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank"
                  class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="assets/images/backgrounds/rocket.png" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="ti ti-bell-ringing"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <h4 class="fw-bold mb-4">Dashboard</h4>
          <!-- Sales Overview Used to be Here -->
          <div class="col-sm-4 col-xl-3">
            <!-- Cuci -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Cuci</h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">
                          local_laundry_service
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xl-3">
            <!-- Setrika -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Setrika</h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined"> iron </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xl-3">
            <!-- Cuci & Setrika -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">
                      Cuci & Setrika
                    </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">
                          styler
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">
                  Gratis Ongkir & Voucher
                </h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigned</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Klaim</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Gratis Ongkir</h6>
                          <span class="fw-normal">Unlimited</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">
                            Tanpa Syarat & Ketentuan
                          </p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Klaim</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">2</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cashback 5%</h6>
                          <span class="fw-normal">6 Hari</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">
                            Tanpa Syarat & Ketentuan
                          </p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Klaim</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">3</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Diskon 10%</h6>
                          <span class="fw-normal">2 Hari</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">
                            Tanpa Syarat & Ketentuan
                          </p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Klaim</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">4</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cashback 20%</h6>
                          <span class="fw-normal">3 Hari</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">
                            Tanpa Syarat & Ketentuan
                          </p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Klaim</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent-transaction-dots used to be here -->
        </div>
        <div class="row">
          <div class="col-lg-10 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Riwayat Pesanan</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Pesanan</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Jumlah</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cuci & Setrika</h6>
                          <span class="fw-normal">2 hari yang lalu</span>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="fw-normal">Rp 35.000</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cuci & Setrika</h6>
                          <span class="fw-normal">2 hari yang lalu</span>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="fw-normal">Rp 35.000</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cuci & Setrika</h6>
                          <span class="fw-normal">2 hari yang lalu</span>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="fw-normal">Rp 35.000</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">4</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Cuci & Setrika</h6>
                          <span class="fw-normal">2 hari yang lalu</span>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="fw-normal">Rp 35.000</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent-transaction-dots used to be here -->
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">
            Design and Developed by
            <a href="https://adminmart.com/" target="_blank"
              class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>
            Distributed by <a href="https://themewagon.com">ThemeWagon</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>