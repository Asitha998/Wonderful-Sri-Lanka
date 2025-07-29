<?php
// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Wonderful Sri Lanka</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a>
            <a href="services.php" class="nav-item nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">Services</a>
            <a href="packages.php" class="nav-item nav-link <?php echo ($currentPage == 'packages.php') ? 'active' : ''; ?>">Packages</a>
            <a href="blog.php" class="nav-item nav-link <?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>">Blog</a>
            <?php
            $pagesDropdownActive = in_array($currentPage, ['destination.php', 'tour.php', 'booking.php', 'gallery.php', 'guides.php', 'testimonial.php', '404.php']);
            ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php echo ($pagesDropdownActive) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="destination.php" class="dropdown-item <?php echo ($currentPage == 'destination.php') ? 'active' : ''; ?>">Destination</a>
                    <a href="tour.php" class="dropdown-item <?php echo ($currentPage == 'tour.php') ? 'active' : ''; ?>">Explore Tour</a>
                    <a href="booking.php" class="dropdown-item <?php echo ($currentPage == 'booking.php') ? 'active' : ''; ?>">Travel Booking</a>
                    <a href="gallery.php" class="dropdown-item <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>">Our Gallery</a>
                    <a href="guides.php" class="dropdown-item <?php echo ($currentPage == 'guides.php') ? 'active' : ''; ?>">Travel Guides</a>
                    <a href="testimonial.php" class="dropdown-item <?php echo ($currentPage == 'testimonial.php') ? 'active' : ''; ?>">Testimonial</a>
                    <a href="404.php" class="dropdown-item <?php echo ($currentPage == '404.php') ? 'active' : ''; ?>">404 Page</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
    </div>
</nav>