<?php
// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0 d-flex align-items-center">
        <img src="img/logo.png" alt="Logo" style="height: 200x; width: auto;" class="me-2">
        <h1 class="m-0">&nbsp;&nbsp;Wonderful Sri Lanka</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
            <a href="destination.php" class="nav-item nav-link <?php echo ($currentPage == 'destination.php') ? 'active' : ''; ?>">Discover</a>
            <a href="services.php" class="nav-item nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">services</a>
            <a href="about.php" class="nav-item nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a>
            <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">contact us</a>

        </div>
        <a href="trip-planner.php" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Plan trip</a>
    </div>
</nav>