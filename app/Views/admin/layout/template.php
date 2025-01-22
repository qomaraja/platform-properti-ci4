<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <base href="<?= base_url(); ?>">

  <!-- Favicons -->
  <link href="admin/dist/img/ini-properti.png" rel="icon" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
  <!-- my css -->
  <link rel="stylesheet" href="admin/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="admin/dist/img/ini-properti.png" alt="AdminLTELogo" height="100" width="100">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-sm-inline-block">
          <a href="" class="nav-link" target="_blank">Beranda</a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="/dashboard" class="brand-link">
        <img src="admin/dist/img/ini-properti.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">IniProperti.</span>
      </a>
      <div class="sidebar">
        <div class="form-inline mt-2">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/dashboard" class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item <?= in_array($active, ['data_tipe', 'tmbh_tipe']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_tipe', 'tmbh_tipe']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Tipe
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tipe" class="nav-link <?= $active == 'data_tipe' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Tipe</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tipe/tambah-tipe" class="nav-link <?= $active == 'tmbh_tipe' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Tipe</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= in_array($active, ['data_prop', 'tmbh_prop']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_prop', 'tmbh_prop']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Properti
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/properti/data-properti" class="nav-link <?= $active == 'data_prop' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Properti</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/properti/tambah-properti" class="nav-link <?= $active == 'tmbh_prop' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Properti</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= in_array($active, ['data_kat', 'tmbh_kat']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_kat', 'tmbh_kat']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Kategori
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/kategori" class="nav-link <?= $active == 'data_kat' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kategori</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/kategori/tambah-kategori" class="nav-link <?= $active == 'tmbh_kat' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Kategori</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= in_array($active, ['data_plat', 'tmbh_plat']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_plat', 'tmbh_plat']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Platform
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/platform" class="nav-link <?= $active == 'data_plat' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Platform</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/platform/tambah-platform" class="nav-link <?= $active == 'tmbh_plat' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Platform</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= in_array($active, ['data_toko', 'tmbh_toko']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_toko', 'tmbh_toko']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Toko
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/toko/data-toko" class="nav-link <?= $active == 'data_toko' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Toko</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/toko/tambah-toko" class="nav-link <?= $active == 'tmbh_toko' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Toko</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= in_array($active, ['data_iklan', 'tmbh_iklan']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= in_array($active, ['data_iklan', 'tmbh_iklan']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Iklan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/iklan'); ?>" class="nav-link <?= $active == 'data_iklan' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Iklan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/iklan/tambah-iklan" class="nav-link <?= $active == 'tmbh_iklan' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Iklan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item mt-5">
              <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Keluar
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <?= $this->renderSection('content'); ?>

    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="">IniProperti</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1.0
      </div>
    </footer>

  </div>

  <!-- jQuery -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Select2 -->
  <script src="admin/plugins/select2/js/select2.full.min.js"></script>
  <!-- Summernote -->
  <script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.js"></script>
  <script>
    $(function() {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    $(function() {
      bsCustomFileInput.init();
    });

    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })

    $(function() {
      // Summernote
      $('#summernote').summernote()
    })

    // Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
    $.widget.bridge('uibutton', $.ui.button)
  </script>
</body>

</html>