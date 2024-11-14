<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=base_url()?>assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>E - FIFO</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url('favicon.ico')?>" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="<?=base_url()?>assets/vendor/js/helpers.js"></script>
    <script src="<?=base_url()?>assets/js/config.js"></script>
    <style>
        .active {
            color: purple;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?= base_url('home');?>" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?=base_url('assets/img/cpi-logo.png')?>" alt="CPI Logo" style="max-width: 50px;">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">E-FIFO</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="<?= base_url('home');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">WAREHOUSE</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('add_item');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"  ></i>
                    <div data-i18n="Analytics">TAMBAH BARANG</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('transfer_to_rak');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">TRANSFER KE RAK</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('transfer_between_rak');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">TRANSFER ANTAR RAK</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('offload');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">OFFLOAD</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('barcode');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">BARCODE</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= base_url('history');?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">HISTORY</div>
                </a>
            </li>
            <!-- Master User -->
            <?php if ($this->session->userdata('type') == '0') : ?>
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Master User</span></li>
              <!-- Forms -->
              <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-detail"></i>
                      <div data-i18n="Form Elements">Master Data</div>
                  </a>
                  <ul class="menu-sub">
                      <li class="menu-item">
                          <a href="<?= base_url('pegawai') ?>" class="menu-link">
                              <div data-i18n="Basic Inputs">Pegawai</div>
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="<?= base_url('departemen') ?>" class="menu-link">
                              <div data-i18n="Basic Inputs">Departemen</div>
                          </a>
                      </li>
                      
                  </ul>
              </li>
            <?php endif ?> 
            
           
            
            
            <?php if ($this->session->userdata('type') == '0') : ?>
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Reports</span></li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx bxs-file-doc"></i>
                  <div data-i18n="Form Layouts">Report Data</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="<?= base_url('report');?>" class="menu-link">
                      <div data-i18n="Vertical Form">Report Data E-FIFO</div>
                    </a>
                  </li>
                </ul>
            <?php endif ?> 
              </li>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <?php
                  $username = $this->session->userdata('username');
                  $greeting = "";

                  date_default_timezone_set('Asia/Jakarta'); // Atur zona waktu sesuai kebutuhan
                  
                  $current_hour = date('H');
                  
                  if ($current_hour < 12) {
                      $greeting = "Selamat Pagi";
                  } elseif ($current_hour < 18) {
                      $greeting = "Selamat Siang";
                  } else {
                      $greeting = "Selamat Malam";
                  }
              ?>
              <span class="fw-semibold d-block">Halo, <?= $username; ?> <?= $greeting; ?> 🤗</span>
              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=base_url()?>assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=base_url()?>assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Hi, <?= $this->session->userdata('username');?></span>
                            <small class="text-muted">Selamat Bergabung</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('my_profile');?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('setting');?>">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=base_url('logout')?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url()?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url()?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="<?=base_url()?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=base_url()?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?=base_url()?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=base_url()?>assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
