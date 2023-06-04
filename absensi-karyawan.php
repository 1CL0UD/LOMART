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

    <!-- Sidebar scroll-->
    <?php
    include 'left-sidebar-kc.php'
      ?>
    <!-- End Sidebar scroll-->

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
                  <span class="material-symbols-outlined">
                    notifications
                  </span>
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
          <h4 class="fw-bold mb-4">Kehadiran</h4>
          <!-- Sales Overview Used to be Here -->
          <?php
          include "conn.php";
          $query_mysql = mysqli_query($mysqli, "SELECT * FROM rekap_pesanan WHERE id_rekap=1");
          while ($data = mysqli_fetch_array($query_mysql)) { ?>
            <div class="col-sm-4 col-lg-3">
              <!-- Cuci -->
              <a href="">
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">Cuci</h5>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                              person
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 col-lg-3">
              <!-- Setrika -->
              <a href="">
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">Setrika</h5>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined"> person </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-sm-4 col-lg-3">
              <!-- Cuci & Setrika -->
              <a href="">
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">
                          Cuci & Setrika
                        </h5>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                              person
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php
          }
          ?>
        <div class="row">
          <div class="col-lg-10 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">
                  Gratis Ongkir & Voucher
                </h5>
                <?php
                include "conn.php";
                $query_mysql = mysqli_query($mysqli, "SELECT * FROM voucher");
                ?>

                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Voucher</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Jumlah</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Klaim</h6>
                        </th>
                      </tr>
                    </thead>
                    <?php
                    while ($data = mysqli_fetch_array($query_mysql)) {
                      ?>
                      <tbody>
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">
                              <?php echo $data['id_voucher']; ?>
                            </h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">
                              <?php echo $data['voucher']; ?>
                            </h6>
                            <span class="fw-normal">
                              <?php echo $data['sisa_hari']; ?>
                            </span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">
                              <?php echo $data['jumlah']; ?>
                            </p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-primary rounded-3 fw-semibold">Klaim</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent-transaction-dots used to be here -->
        </div>
        <?php
        include "conn.php";
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM pesanan");
        ?>
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
                    <?php
                    while ($data = mysqli_fetch_array($query_mysql)) {
                      ?>
                      <tbody>
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">
                              <?php echo $data['id_pesanan']; ?>
                            </h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">
                              <?php echo $data['pesanan']; ?>
                            </h6>
                            <span class="fw-normal">
                              <?php echo $data['hari']; ?>
                            </span>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-normal">Rp
                                <?php echo $data['jumlah']; ?>
                              </span>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
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
            <a href="" target="_blank" class="pe-1 text-primary text-decoration-underline">Kelompok 1 ADSI
              Kelas A</a>
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