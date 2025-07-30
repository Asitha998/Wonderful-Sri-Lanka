<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wonderful Sri Lanka - Tourism Website</title>
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

        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/home/Sigiriya.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">Discover the Beauty of Sri Lanka</h1>
                                <p class="mb-5 fs-5">Plan your journey, explore hidden gems, and book trusted services</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/eliphant.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">Explore Hidden Gems</h1>
                                <p class="mb-5 fs-5">Uncover the rich history, vibrant culture, and breathtaking landscapes</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/faddy.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">Book Trusted Services</h1>
                                <p class="mb-5 fs-5">From expert guides to comfortable stays, everything you need in one place</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill mx-auto p-1" style="background: rgb(24, 71, 44);">
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Search destinations, hotels, or services...">
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 5px; transform: translateY(-50%);">Search</button>
            </div>
        </div>
    </div>

    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="background: url('img/home/sigiria.jpg') center center no-repeat; background-size: cover; border-radius: 25px;">
                        <img src="img/home/sigiria.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Wonderful Sri Lanka</span></h1>
                    <p class="mb-4">Sri Lanka, often called the "Pearl of the Indian Ocean," is a land of incredible diversity, from ancient ruins and lush tea plantations to pristine beaches and vibrant wildlife. Our platform is dedicated to showcasing the best of this island paradise.</p>
                    <p class="mb-4">We aim to provide a seamless travel experience, offering comprehensive resources and trusted services to help you explore the rich culture, breathtaking landscapes, and warm hospitality that Sri Lanka has to offer.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Curated Experiences</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Trusted Local Guides</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comfortable Stays</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Reliable Transportation</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Support</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Secure Bookings</p>
                        </div>
                    </div>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">How We Can Help You Explore Sri Lanka</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Book a Tour Guide</h5>
                                    <p class="mb-0">Connect with experienced local guides to enhance your exploration of Sri Lanka's wonders.</p>
                                    <a href="#" class="btn-hover text-primary">Explore Guides <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-user-tie fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Rent a Vehicle</h5>
                                    <p class="mb-0">Choose from a variety of vehicles for comfortable and convenient travel across the island.</p>
                                    <a href="#" class="btn-hover text-primary">View Vehicles <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-car fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Find Accommodation</h5>
                                    <p class="mb-0">Discover and book the perfect hotel, guesthouse, or resort for your stay in Sri Lanka.</p>
                                    <a href="#" class="btn-hover text-primary">Find Hotels <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-plane-departure fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Plan Your Itinerary</h5>
                                    <p class="mb-0">Create custom travel plans and save your favorite destinations and services.</p>
                                    <a href="#" class="btn-hover text-primary">Start Planning <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destinations</h5>
                <h1 class="mb-0">Popular Destinations in Sri Lanka</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#sriLankaTab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#sriLankaTab-2">
                            <span class="text-dark" style="width: 150px;">Cultural</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#sriLankaTab-3">
                            <span class="text-dark" style="width: 150px;">Beaches</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#sriLankaTab-4">
                            <span class="text-dark" style="width: 150px;">Nature</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="sriLankaTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="img/home/sigiria.jpg" alt="Sigiriya Rock Fortress">
                                            <div class="destination-overlay p-4">
                                                <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                                <h4 class="text-white mb-2 mt-3">Sigiriya</h4>
                                                <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/home/gallefort.jpg" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="img/home/gallefort.jpg" alt="Galle Fort">
                                            <div class="destination-overlay p-4">
                                                <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                                <h4 class="text-white mb-2 mt-3">Galle Fort</h4>
                                                <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="https://placehold.co/600x400/35682D/FFFFFF?text=Galle+Fort" data-lightbox="destination-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="img/home/ella.jpg" alt="Ella">
                                            <div class="destination-overlay p-4">
                                                <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                                <h4 class="text-white mb-2 mt-3">Ella</h4>
                                                <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="https://placehold.co/600x400/84A98C/FFFFFF?text=Ella" data-lightbox="destination-3"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="img/home/nuwaraeliya.jpg" alt="Nuwara Eliya">
                                            <div class="destination-overlay p-4">
                                                <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                                <h4 class="text-white mb-2 mt-3">Nuwara Eliya</h4>
                                                <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="https://placehold.co/600x400/35682D/FFFFFF?text=Nuwara+Eliya" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100" src="img/home/mirissa.jpg" style="object-fit: cover;" alt="Mirissa Beach">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Mirissa</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x800/84A98C/FFFFFF?text=Mirissa" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sriLankaTab-2" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/kandy.jpeg" alt="Kandy">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Kandy</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/84A98C/FFFFFF?text=Kandy" data-lightbox="cultural-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/anuradhapura.jpg" alt="Anuradhapura">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Anuradhapura</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/35682D/FFFFFF?text=Anuradhapura" data-lightbox="cultural-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sriLankaTab-3" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/unawatuna.jpg" alt="Unawatuna">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Unawatuna</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/84A98C/FFFFFF?text=Unawatuna" data-lightbox="beach-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/Tangalle.jpg" alt="Tangalle">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Tangalle</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/35682D/FFFFFF?text=Tangalle" data-lightbox="beach-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sriLankaTab-4" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/Horton.jpg" alt="Horton Plains">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Horton Plains</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/84A98C/FFFFFF?text=Horton+Plains" data-lightbox="nature-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/yala.jpg" alt="Yala National Park">
                                    <div class="destination-overlay p-4">
                                        <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Yala National Park</h4>
                                        <a href="#" class="btn-hover text-white">Explore <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="https://placehold.co/600x400/35682D/FFFFFF?text=Yala+National+Park" data-lightbox="nature-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background: linear-gradient(rgba(53, 104, 45, .8), rgba(53, 104, 45, 0.21)), url('img/home/lanka.jpg') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="text-white mb-4">Start Planning Your Trip to Sri Lanka!</h1>
            <p class="text-white mb-5">Create your personalized itinerary, save your favorite places, and get ready for an unforgettable adventure.</p>
            <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Open Trip Planner</a>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img src="img/home/sos1.jpg" class="img-fluid rounded" alt="SOS Feature">
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title pe-3">Safety First</h5>
                    <h1 class="mb-4">Travel Safe with Wonderful Sri Lanka</h1>
                    <p class="mb-4">Your safety is our priority. Our platform provides easy access to emergency contacts and a one-tap SOS feature, ensuring help is always within reach during your travels in Sri Lanka.</p>
                    <p class="mb-4">Local emergency numbers are readily available, giving you peace of mind as you explore the island's beauty.</p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 mt-2">Learn More About Safety</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonials</h5>
                <h1 class="mb-0">What Our Travelers Say About Sri Lanka</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"Wonderful Sri Lanka truly made our trip unforgettable! The local guides were fantastic, and the booking process was so smooth. Highly recommend!"</p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="https://placehold.co/60x60/84A98C/FFFFFF?text=P1" class="img-fluid rounded-circle" alt="Traveler 1">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">Alice Johnson</h5>
                        <p class="mb-0">London, UK</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"The most beautiful country with the friendliest people! This platform helped us discover so many hidden gems. We felt safe and well-supported throughout our journey."</p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="https://placehold.co/60x60/35682D/FFFFFF?text=P2" class="img-fluid rounded-circle" alt="Traveler 2">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">David Lee</h5>
                        <p class="mb-0">Singapore</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
