<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/css/vendor.bundle.base.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/js/select.dataTables.min.css"> -->
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/star-admin2/css/vertical-layout-light/style.css">  
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/star-admin2/images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?= $this->include('layout/_navbar'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="padding-top:55px">
      <!-- partial:partials/_settings-panel.html -->
      <?= $this->include('layout/_settings-panel'); ?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?= $this->include('layout/_sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <?= $this->renderSection('content'); ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?= $this->include('layout/_footer'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/assets/star-admin2/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url(); ?>/assets/star-admin2/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/assets/star-admin2/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/js/template.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/js/settings.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/js/todolist.js"></script>
  <?= $this->renderSection('injectJS'); ?>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>/assets/star-admin2/js/dashboard.js"></script>
  <script src="<?= base_url(); ?>/assets/star-admin2/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  
  <?= $this->renderSection('injectCSS'); ?>
</body>

</html>

