<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center">
          <p><i class="fa fa-envelope mr-2"></i>avatravel@gmail.com</p>
          <p class="text-body px-3">|</p>
          <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <a class="text-primary px-3" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-primary px-3" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-primary px-3" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-primary px-3" href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="text-primary pl-3" href="">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
  <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
      <a href="" class="navbar-brand">
        <h1 class="m-0 text-primary d-inline-block">
          <span class="text-dark">AVAT</span>AR
        </h1>
        <small class="d-inline-block font-weight-bold">.com</small>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
          <a href="index.php?hal=home" class="nav-item nav-link <?php if (!isset($_GET['hal']) || $_GET['hal'] == 'home')
            echo 'active'; ?>">Home</a>
          <a href="index.php?hal=about" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'about')
            echo 'active'; ?>">About
            Us</a>
          <a href="index.php?hal=team" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'team')
            echo 'active'; ?>">Our Team</a>
          <a href="index.php?hal=package" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'package')
            echo 'active'; ?>">Tour Packages</a>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- Navbar End -->