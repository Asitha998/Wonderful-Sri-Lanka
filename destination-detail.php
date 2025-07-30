<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Destination Details - Wonderful Sri Lanka</title>
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
    <style>
        .hero-destination-detail {
            position: relative;
            width: 100%;
            height: 500px;
            /* Adjust height as needed */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bs-white);
            text-align: center;
        }

        .hero-destination-detail::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
        }

        .hero-destination-detail .container {
            position: relative;
            z-index: 1;
        }

        .booking-options-box {
            background-color: var(--bs-light);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .booking-options-box h4 {
            color: var(--bs-primary);
            margin-bottom: 20px;
        }

        .booking-options-box .btn {
            margin-bottom: 10px;
            width: 100%;
        }

        .rating-stars .fas {
            color: #FFD700;
            /* Gold color for stars */
            margin-right: 2px;
        }

        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .travel-tips-list {
            list-style: none;
            padding: 0;
        }

        .travel-tips-list li {
            background-color: var(--bs-light);
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .travel-tips-list li i {
            color: var(--bs-primary);
            margin-right: 15px;
            font-size: 1.5rem;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }
    </style>
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

    <?php
    $destination_id = isset($_GET['id']) ? $_GET['id'] : 'sigiriya'; // Default to Sigiriya

    $destinations = [
        'sigiriya' => [
            'name' => 'Sigiriya Rock Fortress',
            'subtitle' => 'Historic Landmark & Architectural Marvel',
            'hero_image' => 'img/home/sigiriya.jpg',
            'description' => 'Sigiriya, also known as Lion Rock, is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. It is a site of historical and archaeological significance that is dominated by a massive column of rock nearly 200 metres (660 ft) high. According to the ancient Sri Lankan chronicle the Culavamsa, this site was selected by King Kasyapa (477 – 495 CE) for his new capital. He built his palace on the top of this rock and decorated its sides with colourful frescoes. On a small plateau about halfway up the side of the rock he built a gateway in the form of an enormous lion. The name of this place is derived from this structure — Sīhāgiri, the Lion Rock. The capital and the royal palace were abandoned after the king\'s death. It was used as a Buddhist monastery until the 14th century.',
            'gallery_images' => [
                'img/home/sigiria.jpg',
                'img/home/sigiriya2.jpg',
                'img/home/Sigiriya3.jpg',
                'img/home/sigiriya4.jpg'
            ],
            'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.054048740523!2d80.75940731477755!3d7.957077992160938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4a91936c31139%3A0x1d4364020a59b66a!2sSigiriya!5e0!3m2!1sen!2slk!4v1678901234567!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>',
            'rating' => 4.8,
            'reviews_count' => 1250,
            'services' => ['Tour Guide', 'Accommodation nearby', 'Vehicle Rental'],
            'tips' => [
                ['icon' => 'fa-sun', 'text' => 'Best time to visit: Early morning or late afternoon.'],
                ['icon' => 'fa-ticket-alt', 'text' => 'Entry fee applies for foreign visitors.'],
                ['icon' => 'fa-tshirt', 'text' => 'Dress modestly, especially when visiting the temple area.'],
                ['icon' => 'fa-walking', 'text' => 'Wear comfortable shoes for climbing.']
            ],
            'related_destinations' => ['dambulla', 'polonnaruwa', 'kandy']
        ],
        'ella' => [
            'name' => 'Ella',
            'subtitle' => 'Scenic Hill Country Retreat',
            'hero_image' => 'https://placehold.co/1920x500/84A98C/FFFFFF?text=Ella+Hero',
            'description' => 'Ella is a small, charming town nestled in the Badulla District of Uva Province, Sri Lanka. It is surrounded by hills, tea plantations, and boasts a cooler climate than the coastal areas. Ella is a popular spot for hikers and nature lovers, offering breathtaking views of the Ella Gap, Little Adam\'s Peak, and the famous Nine Arch Bridge. The town has a laid-back atmosphere, with plenty of cafes and guesthouses. The train journey to Ella is considered one of the most scenic in the world, passing through lush green landscapes, waterfalls, and tunnels.',
            'gallery_images' => [
                'https://placehold.co/600x400/35682D/FFFFFF?text=Ella+Gallery+1',
                'https://placehold.co/600x400/84A98C/FFFFFF?text=Ella+Gallery+2',
                'https://placehold.co/600x400/35682D/FFFFFF?text=Ella+Gallery+3',
                'https://placehold.co/600x400/84A98C/FFFFFF?text=Ella+Gallery+4'
            ],
            'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.671372338048!2d81.0450593147716!3d6.903738995000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae463c634c0e443%3A0x86134b92b6140f06!2sElla!5e0!3m2!1sen!2slk!4v1678901234567!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>',
            'rating' => 4.7,
            'reviews_count' => 980,
            'services' => ['Hiking Guide', 'Homestays', 'Scooter Rental'],
            'tips' => [
                ['icon' => 'fa-train', 'text' => 'Take the scenic train ride to or from Ella.'],
                ['icon' => 'fa-cloud-sun', 'text' => 'Mornings are best for hiking to avoid heat.'],
                ['icon' => 'fa-utensils', 'text' => 'Explore local cafes and restaurants.']
            ],
            'related_destinations' => ['nuwara-eliya', 'haputale', 'kandy']
        ]
    ];

    $current_destination = $destinations[$destination_id] ?? $destinations['sigiriya']; // Fallback

    // Placeholder for related destinations data (can be expanded)
    $all_destinations_for_related = [
        'sigiriya' => ['name' => 'Sigiriya', 'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Sigiriya'],
        'ella' => ['name' => 'Ella', 'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Ella'],
        'galle-fort' => ['name' => 'Galle Fort', 'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Galle+Fort'],
        'nuwara-eliya' => ['name' => 'Nuwara Eliya', 'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Nuwara+Eliya'],
        'kandy' => ['name' => 'Kandy', 'image' => 'img/home/kandy.jpg'],
        'dambulla' => ['name' => 'Dambulla', 'image' => 'img/home/dambulla.jpg'],
        'polonnaruwa' => ['name' => 'Polonnaruwa', 'image' => 'img/home/polonnaruwa.jpg'],
        'haputale' => ['name' => 'Haputale', 'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Haputale']
    ];
    ?>

    <div class="hero-destination-detail" style="background-image: url('<?php echo $current_destination['hero_image']; ?>');">
        <div class="container">
            <h1 class="display-1 text-white mb-3"><?php echo $current_destination['name']; ?></h1>
            <p class="fs-4 text-white-50"><?php echo $current_destination['subtitle']; ?></p>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="text-primary mb-4">About <?php echo $current_destination['name']; ?></h2>
                    <p class="mb-4"><?php echo nl2br($current_destination['description']); ?></p>

                    <h3 class="text-primary mt-5 mb-4">Image Gallery</h3>
                    <div class="row g-4">
                        <?php foreach ($current_destination['gallery_images'] as $img_src): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="gallery-item">
                                    <img class="img-fluid rounded w-100" src="<?php echo $img_src; ?>" alt="<?php echo $current_destination['name']; ?> Gallery Image">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <h3 class="text-primary mt-5 mb-4">Location Map</h3>
                    <div class="map-container">
                        <?php echo $current_destination['map_embed']; ?>
                    </div>

                    <h3 class="text-primary mt-5 mb-4">Travel Tips & Highlights</h3>
                    <ul class="travel-tips-list">
                        <?php foreach ($current_destination['tips'] as $tip): ?>
                            <li><i class="fas <?php echo $tip['icon']; ?>"></i> <?php echo $tip['text']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="booking-options-box">
                        <h4 class="mb-4">Plan Your Visit</h4>
                        <div class="rating-stars mb-3">
                            <?php
                            $full_stars = floor($current_destination['rating']);
                            $half_star = ($current_destination['rating'] - $full_stars) >= 0.5;
                            for ($i = 0; $i < $full_stars; $i++) {
                                echo '<i class="fas fa-star"></i>';
                            }
                            if ($half_star) {
                                echo '<i class="fas fa-star-half-alt"></i>';
                            }
                            for ($i = 0; $i < (5 - ceil($current_destination['rating'])); $i++) {
                                echo '<i class="far fa-star"></i>'; // Empty star
                            }
                            ?>
                            <span class="text-muted ms-2">(<?php echo $current_destination['rating']; ?> / 5.0) - <?php echo $current_destination['reviews_count']; ?> Reviews</span>
                        </div>
                        <p class="text-dark mb-3">Available Services:</p>
                        <ul class="list-unstyled mb-4">
                            <?php foreach ($current_destination['services'] as $service): ?>
                                <li class="text-primary"><i class="fas fa-check-circle me-2"></i><?php echo $service; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="booking.php" class="btn btn-primary rounded-pill py-3 px-5 mb-3">Book a Guide</a>
                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5 mb-3">Reserve a Vehicle</a>
                        <a href="#" class="btn btn-outline-primary rounded-pill py-3 px-5">Add to Trip Planner</a>
                    </div>
                </div>
            </div>

            <?php if (!empty($current_destination['related_destinations'])): ?>
                <div class="mt-5">
                    <h3 class="text-primary mb-4 text-center">Related Destinations</h3>
                    <div class="row g-4 justify-content-center">
                        <?php
                        foreach ($current_destination['related_destinations'] as $related_id):
                            if (isset($all_destinations_for_related[$related_id])):
                                $related_dest = $all_destinations_for_related[$related_id];
                        ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="<?php echo $related_dest['image']; ?>" alt="<?php echo $related_dest['name']; ?>">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=<?php echo $related_id; ?>" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo $related_dest['name']; ?></h4>
                                            <p class="text-white-50 mb-0">Explore more wonders of Sri Lanka.</p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            <?php endif; ?>

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