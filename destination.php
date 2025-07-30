<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Explore Sri Lanka - Wonderful Sri Lanka</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>

    <body onload="loadDestinations()">

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <?php include 'components/topbar.php'; ?>

        <div class="container-fluid position-relative p-0">
            <?php include 'components/header.php'; ?>
        </div>

        <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/desti.jpg') center center no-repeat; background-size: cover;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Explore Sri Lanka</h3> 
                <p class="text-white mb-0">Browse destinations, discover history, nature, and coastal wonders</p>
            </div>
        </div>

        <div class="container-fluid destination py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destinations</h5>
                    <h1 class="mb-0">All Destinations in Sri Lanka</h1>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill border-primary py-3 ps-4 pe-5" placeholder="Search destinations...">
                            <div class="input-group-append ms-3">
                                <select class="form-select rounded-pill border-primary py-3 px-4">
                                    <option selected>Filter by Category</option>
                                    <option value="Nature">Nature</option>
                                    <option value="Beach">Beach</option>
                                    <option value="Historic">Historic</option>
                                    <option value="City">City</option>
                                </select>
                            </div>
                            <div class="input-group-append ms-3">
                                <button class="btn btn-primary rounded-pill py-3 px-4" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-class text-center">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4" id="destination-cards-container">
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/sigiria.jpg" alt="Sigiriya">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=sigiriya" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Sigiriya</h4>
                                            <p class="text-white-50 mb-0">Ancient rock fortress with frescoes and stunning views.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/gallefort.jpg" alt="Galle Fort">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=galle-fort" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Galle Fort</h4>
                                            <p class="text-white-50 mb-0">Historic Dutch fort, a UNESCO World Heritage site.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/ella.jpg" alt="Ella">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=ella" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Ella</h4>
                                            <p class="text-white-50 mb-0">Charming hill country town with stunning views and hikes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/nuwaraeliya.jpg" alt="Nuwara Eliya">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=nuwara-eliya" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Nuwara Eliya</h4>
                                            <p class="text-white-50 mb-0">"Little England" with tea plantations and cool climate.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/kandy.jpg" alt="Kandy">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=kandy" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Kandy</h4>
                                            <p class="text-white-50 mb-0">Home to the sacred Temple of the Tooth Relic.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/mirissa.jpg" alt="Mirissa">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=mirissa" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Mirissa</h4>
                                            <p class="text-white-50 mb-0">Popular for whale watching and beautiful beaches.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/yala.jpg" alt="Yala National Park">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=yala" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Yala National Park</h4>
                                            <p class="text-white-50 mb-0">Famous for leopards and diverse wildlife.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/anuradhapura.jpg" alt="Anuradhapura">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=anuradhapura" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Anuradhapura</h4>
                                            <p class="text-white-50 mb-0">Ancient city with well-preserved ruins and stupas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/gallefort.jpg" alt="Polonnaruwa">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=polonnaruwa" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Polonnaruwa</h4>
                                            <p class="text-white-50 mb-0">Medieval capital with impressive archaeological sites.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/jaffna.jpg" alt="Jaffna">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=jaffna" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Jaffna</h4>
                                            <p class="text-white-50 mb-0">Northern capital with unique cultural heritage.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/Trinkomali.jpg" alt="Trincomalee">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=trincomalee" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Trincomalee</h4>
                                            <p class="text-white-50 mb-0">Eastern coastal city with beautiful beaches and Koneswaram Temple.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/adampeak.jpg" alt="Adam's Peak">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=adams-peak" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Adam's Peak</h4>
                                            <p class="text-white-50 mb-0">Sacred mountain pilgrimage site with stunning sunrise views.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/dambulla.jpg" alt="Dambulla Cave Temple">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=dambulla" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Dambulla Cave Temple</h4>
                                            <p class="text-white-50 mb-0">A UNESCO World Heritage site known for its cave paintings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/Ritigala.jpg" alt="Ritigala">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=ritigala" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Ritigala</h4>
                                            <p class="text-white-50 mb-0">Ancient Buddhist monastery ruins amidst a dense forest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/haputhale.jpg" alt="Haputale">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=haputale" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Haputale</h4>
                                            <p class="text-white-50 mb-0">Hill station offering panoramic views and tea estates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/udawalawe.jpg" alt="Udawalawe National Park">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=udawalawe" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Udawalawe National Park</h4>
                                            <p class="text-white-50 mb-0">Known for its large elephant population and birdwatching.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/bentota.jpg" alt="Bentota">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=bentota" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Bentota</h4>
                                            <p class="text-white-50 mb-0">Coastal town famous for water sports and golden beaches.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/home/arugambayjpg.jpg" alt="Arugam Bay">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=arugam-bay" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Arugam Bay</h4>
                                            <p class="text-white-50 mb-0">Top surfing destination on the East Coast.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/84A98C/FFFFFF?text=Batticaloa" alt="Batticaloa">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=batticaloa" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Batticaloa</h4>
                                            <p class="text-white-50 mb-0">Known for its singing fish and tranquil lagoon.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/35682D/FFFFFF?text=Negombo" alt="Negombo">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=negombo" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Negombo</h4>
                                            <p class="text-white-50 mb-0">Coastal city with a large fishing industry and beaches.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/84A98C/FFFFFF?text=Kitulgala" alt="Kitulgala">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=kitulgala" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Kitulgala</h4>
                                            <p class="text-white-50 mb-0">White-water rafting and adventure sports hub.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/35682D/FFFFFF?text=Sinharaja" alt="Sinharaja Forest Reserve">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=sinharaja" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Sinharaja Forest Reserve</h4>
                                            <p class="text-white-50 mb-0">UNESCO World Heritage rainforest, rich in biodiversity.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/84A98C/FFFFFF?text=Hikkaduwa" alt="Hikkaduwa">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=hikkaduwa" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Hikkaduwa</h4>
                                            <p class="text-white-50 mb-0">Vibrant beach town popular for coral reefs and nightlife.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/35682D/FFFFFF?text=Pasikudah" alt="Pasikudah">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=pasikudah" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Pasikudah</h4>
                                            <p class="text-white-50 mb-0">Shallow, calm waters ideal for swimming and relaxation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/84A98C/FFFFFF?text=Mannar" alt="Mannar">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=mannar" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Mannar</h4>
                                            <p class="text-white-50 mb-0">Historic island with baobab trees and a causeway to India.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/35682D/FFFFFF?text=Kalpitiya" alt="Kalpitiya">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=kalpitiya" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Kalpitiya</h4>
                                            <p class="text-white-50 mb-0">Best for dolphin and whale watching, and kitesurfing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="https://placehold.co/600x400/84A98C/FFFFFF?text=Knuckles" alt="Knuckles Mountain Range">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=knuckles" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3">Knuckles Mountain Range</h4>
                                            <p class="text-white-50 mb-0">A UNESCO World Heritage site ideal for trekking and nature.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="pagination d-flex justify-content-center mt-5" id="pagination-links">
                                    <!-- Pagination links will be generated by JavaScript -->
                                </div>
                            </div>
                        </div>
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
