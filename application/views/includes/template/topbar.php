<main class="main-content position-relative max-height-vh-100 h-100">
  <!-- Navbar -->
  <!-- <nav class="navbar navbar-top navbar-expand navbar-dark bg-danger border-bottom"> -->

  <nav class="navbar navbar-top navbar-expand bg-danger border-bottom" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <h6 class="font-weight-bolder text-white mb-0">User : <?php echo $_SESSION['UsEmp_ID'] . ' ' . $_SESSION['UsName_EN']; ?></h6>
        </ol>
        <?php $role = $_SESSION['Usrole'];
        if ($role == 1) { ?>
          <h6 class="font-weight-bolder text-white mb-0">Role : Assessor</h6>
          <?php } else { ?>
            <h6 class="font-weight-bolder text-white mb-0">Role : Admin</h6>
          <?php } ?>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="<?php echo site_url() . 'Login/Login/logout' ?>" class="nav-link text-body font-weight-bold px-0">
              <i class="fas fa-sign-out-alt me-sm-1" style="color:white"></i>
              <span class="d-sm-inline d-none text-white">Logout</span>
            </a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->