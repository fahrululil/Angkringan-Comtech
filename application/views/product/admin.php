<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Material Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('include/admin/node_modules/mdi/css/materialdesignicons.min.css')?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('include/admin/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('include/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('include/css/bootstrap.min.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('include/admin/images/logo.png')?>" />
</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="admin.php" class="brand-logo">
            <img src="<?php echo base_url('include/admin/images/logo1.png')?>" alt="logo">
          </a>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" href="<?php echo site_url('Admin') ?>"> 
              Dashboard 
            </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" href="<?php echo site_url('Admin/barang') ?>">
                Product
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" href="<?php echo site_url('Admin/category') ?>">
                Category
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" href="<?php echo site_url('Admin/artikel') ?>">
                Artikel
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" href="<?php echo site_url('Admin/user') ?>">
                Admin
              </a>
            </div>
          </nav>
        </div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:../../partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
      <div class="mdc-toolbar__row">
        <a  class="mdc-button mdc-button--unelevated secondary-filled-button" href="<?php echo base_url('Login/logout'); ?>">Logout</a>
      </div>
    </header>
            <!-- End Page Header -->


            <!-- Default Light Table -->
   <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <main class="content-wrapper">
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-10">
                    <center>
                    <h2>Selamat Datang Di Bagian Admin Guys.....!!!!</h2>
                    </center>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
              <span class="text-muted">Copyright © 2018 <a class="text-green" href="#" target="_blank">Github</a>. All rights reserved.</span>
            </div>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
              <span class="mt-0 text-right">Fahrul ulil &amp; Tim 8 smkn1bangsri <i class="mdi mdi-heart text-red"></i></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
  </div>
  <!-- body wrapper -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('include/admin/node_modules/material-components-web/dist/material-components-web.min.js')?>"></script>
  <script src="<?php echo base_url('include/admin/node_modules/jquery/dist/jquery.min.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url('include/admin/node_modules/chart.js/dist/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('include/admin/node_modules/progressbar.js/dist/progressbar.min.js')?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('include/admin/js/misc.js')?>"></script>
  <script src="<?php echo base_url('include/admin/js/material.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('include/admin/js/dashboard.js')?>"></script>
  <!-- End custom js for this page-->
</body>

</html>