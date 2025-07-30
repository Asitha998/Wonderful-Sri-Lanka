<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Services - Wonderful Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?php include 'components/topbar.php'; ?>

    <div class="container-fluid position-relative p-0">
        <?php include 'components/header.php'; ?>
    </div>

    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://placehold.co/1920x600/35682D/FFFFFF?text=Our+Services') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Explore Our Services</h3>
            <p class="text-white mb-0">Access trusted services to enhance your journey across Sri Lanka.</p>
        </div>
    </div>

    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">What We Offer</h5>
                <h1 class="mb-0">Our Platform Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Tour Guide Booking</h4>
                        <p class="mb-0">Hire experienced local guides to enrich your travel experience.</p>
                        <a href="booking.php?service=guide" class="btn btn-primary btn-sm mt-3">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-car fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Vehicle Rentals</h4>
                        <p class="mb-0">Choose from tuk-tuks, cars, or vans with/without drivers.</p>
                        <a href="booking.php?service=vehicle" class="btn btn-primary btn-sm mt-3">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-hotel fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Accommodation Finder</h4>
                        <p class="mb-0">Find and book guest houses, hotels, and eco lodges.</p>
                        <a href="booking.php?service=accommodation" class="btn btn-primary btn-sm mt-3">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-mountain fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Attractions</h4>
                        <p class="mb-0">Discover historical sites, nature parks, and beautiful landscapes.</p>
                        <a href="destination.php" class="btn btn-primary btn-sm mt-3">View Attractions</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-utensils fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Food Services</h4>
                        <p class="mb-0">Explore local food, home-cooked experiences, and street food tours.</p>
                        <a href="#" class="btn btn-primary btn-sm mt-3">Explore Food</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded text-center p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="fa fa-suitcase-rolling fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Travel Agent Support</h4>
                        <p class="mb-0">Get assistance with custom travel planning and package deals.</p>
                        <a href="contact.php" class="btn btn-primary btn-sm mt-3">Contact Agent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Quick Access</h5>
                <h1 class="mb-0">Third-Party Service Shortcuts</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://pickme.lk" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #553C8B;">
                                <i class="fas fa-taxi fa-2x text-white"></i> <!-- Placeholder for PickMe icon -->
                            </div>
                            <h5 class="mb-1 text-dark">PickMe</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.uber.com/lk/en/" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #000000;">
                                <i class="fab fa-uber fa-2x text-white"></i>
                            </div>
                            <h5 class="mb-1 text-dark">Uber Sri Lanka</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.booking.com" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #003580;">
                                <i class="fas fa-building fa-2x text-white"></i>
                            </div>
                            <h5 class="mb-1 text-dark">Booking.com</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.agoda.com" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #4A90E2;">
                                <i class="fas fa-bed fa-2x text-white"></i>
                            </div>
                            <h5 class="mb-1 text-dark">Agoda</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.ubereats.com/lk" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #5CB85C;">
                                <i class="fas fa-hamburger fa-2x text-white"></i>
                            </div>
                            <h5 class="mb-1 text-dark">Uber Eats LK</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.srilankan.com" target="_blank" class="d-block text-decoration-none">
                        <div class="service-item bg-white rounded text-center p-4 shadow-sm">
                            <div class="service-icon d-flex align-items-center justify-content-center mx-auto mb-3" style="background-color: #800080;">
                                <i class="fas fa-plane fa-2x text-white"></i>
                            </div>
                            <h5 class="mb-1 text-dark">SriLankan Airlines</h5>
                            <small class="text-muted">Open in New Tab</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
