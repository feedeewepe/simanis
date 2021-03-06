<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="height:0px">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="index.html">
        <img src="<?= base_url(); ?>/assets/img/logo_simanis.png" alt="logo" />SIMANIS
      </a>
      <a class="navbar-brand brand-logo-mini" href="index.html">
        <!-- <img src="<?= base_url(); ?>/assets/star-admin2/images/favicon.png" alt="logo" /> -->
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-top" style="height:0px">
    <ul class="navbar-nav">
      <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
        <h3 class="welcome-sub-text">Student Internship MANagement Information System </h3>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="dropdown-item-icon mdi mdi-account-circle me-2"></i>
          <!-- <img class="img-xs rounded-circle" src="<?= base_url(); ?>/assets/star-admin2/images/faces/face8.jpg" alt="Profile image"> </a> -->
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <i class="dropdown-item-icon mdi mdi-account-circle me-2"></i>
              <!-- <img class="img-md rounded-circle" src="<?= base_url(); ?>/assets/star-admin2/images/faces/face8.jpg" alt="Profile image"> -->
              <p class="mb-1 mt-3 font-weight-semibold"><?= user()->username; ?></p>
              <?php foreach ($usergroup as $act) : ?>
                <p class="fw-light text-muted mb-0"><a class="dropdown-item <?= ($act->rolename == $role) ? 'active' : ''; ?>" href="<?= base_url('/dashboard/changeRole/'.$act->rolename); ?>"><i class="dropdown-item-icon mdi mdi-account-arrow-right text-primary me-2"></i><?= $act->rolename; ?></a></p>
              <?php endforeach; ?>
            </div>
            <a class="dropdown-item" href="<?= base_url('/users/profile/'.user()->id); ?>"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
            <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages <span class="badge badge-pill badge-danger">1</span></a> -->
            <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a> -->
            <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> -->
            <a class="dropdown-item" href="<?= base_url('/logout'); ?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>