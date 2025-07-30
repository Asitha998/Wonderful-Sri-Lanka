<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Your Journey - Wonderful Sri Lanka</title>
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
        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            padding: 1rem 0.75rem;
        }

        .booking-form-container {
            background-color: var(--bs-light);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .booking-form-container h1 {
            color: var(--bs-primary);
            margin-bottom: 30px;
        }

        .booking-form-container .form-control,
        .booking-form-container .form-select {
            border-color: var(--bs-secondary);
            border-radius: 8px;
        }

        .booking-form-container .form-control:focus,
        .booking-form-container .form-select:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(53, 104, 45, 0.25);
        }

        .booking-form-container .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            border-radius: 8px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .booking-form-container .btn-primary:hover {
            background-color: #2a5324;
            border-color: #2a5324;
        }

        .alert-success-custom {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            display: none;
            /* Hidden by default */
        }

        .selection-card {
            border: 1px solid var(--bs-secondary);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: var(--bs-white);
        }

        .selection-card:hover {
            border-color: var(--bs-primary);
            box-shadow: 0 0 15px rgba(53, 104, 45, 0.2);
        }

        .selection-card.selected {
            border-color: var(--bs-primary);
            background-color: rgba(53, 104, 45, 0.1);
            box-shadow: 0 0 15px rgba(53, 104, 45, 0.3);
        }

        .selection-card img {
            border-radius: 8px;
            object-fit: cover;
        }

        .selection-card .form-check-input {
            float: right;
        }

        .section-heading {
            color: var(--bs-primary);
            margin-top: 40px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        /* Full-screen adjustments */
        .container-fluid.booking>.container {
            max-width: 100%;
            /* Allow container to take full width */
            padding-left: var(--bs-gutter-x, .75rem);
            padding-right: var(--bs-gutter-x, .75rem);
        }

        .booking-form-container {
            width: 100%;
            /* Ensure the form container fills its column */
        }

        /* Accommodation Details Display */
        #accommodation-details-display {
            margin-top: 30px;
            background-color: var(--bs-white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: none;
            /* Hidden by default */
        }

        #accommodation-details-display h4 {
            color: var(--bs-primary);
            margin-bottom: 20px;
        }

        #accommodation-details-display .video-responsive {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        #accommodation-details-display .video-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #accommodation-details-display img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* Responsive adjustments for columns */
        @media (min-width: 992px) {
            .col-lg-12 .row>div {
                /* Target direct children columns of the row inside col-lg-12 */
                flex: 0 0 auto;
                width: 50%;
                /* Make them take half width on large screens */
            }
        }

        /* New styles for left panel destination images */
        #destination-images-panel {
            background-color: var(--bs-light);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
            /* Fill height of its parent column */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center content vertically */
        }

        #destination-images-panel img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
            object-fit: cover;
        }

        #destination-images-panel h4 {
            color: var(--bs-primary);
        }

        @media (max-width: 991.98px) {
            #destination-images-panel {
                height: auto;
                /* Auto height on smaller screens */
                margin-bottom: 30px;
                /* Space between image panel and form */
            }
        }

        .cost-display {
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--bs-primary);
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

    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/nuwaraeliya.jpg') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Book Your Travel Experience</h3>
            <p class="text-white mb-0">Customize your journey by choosing from our top guides, stays, and rides</p>
            <?php
            $destination_name = isset($_GET['place']) ? htmlspecialchars($_GET['place']) : '';
            $destination_image = ''; // Placeholder for destination image
            $destination_display_name = '';

            // Dummy data for destinations (replace with actual data source)
            $destinations_data = [
                'sigiriya' => [
                    'name' => 'Sigiriya',
                    'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Sigiriya',
                    'gallery_images' => [
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Sigiriya+1',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Sigiriya+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Sigiriya+3'
                    ]
                ],
                'ella' => [
                    'name' => 'Ella',
                    'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Ella',
                    'gallery_images' => [
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Ella+1',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Ella+2',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Ella+3'
                    ]
                ],
                'galle-fort' => [
                    'name' => 'Galle Fort',
                    'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Galle+Fort',
                    'gallery_images' => [
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Galle+Fort+1',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Galle+Fort+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Galle+Fort+3'
                    ]
                ],
                'nuwara-eliya' => [
                    'name' => 'Nuwara Eliya',
                    'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Nuwara+Eliya',
                    'gallery_images' => [
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Nuwara+Eliya+1',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Nuwara+Eliya+2',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Nuwara+Eliya+3'
                    ]
                ],
                'kandy' => [
                    'name' => 'Kandy',
                    'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Kandy',
                    'gallery_images' => [
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Kandy+1',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Kandy+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Kandy+3'
                    ]
                ],
                'mirissa' => [
                    'name' => 'Mirissa',
                    'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Mirissa',
                    'gallery_images' => [
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Mirissa+1',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Mirissa+2',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Mirissa+3'
                    ]
                ],
                'yala-national-park' => [
                    'name' => 'Yala National Park',
                    'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Yala+National+Park',
                    'gallery_images' => [
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Yala+1',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Yala+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Yala+3'
                    ]
                ],
                'anuradhapura' => [
                    'name' => 'Anuradhapura',
                    'image' => 'https://placehold.co/600x400/35682D/FFFFFF?text=Anuradhapura',
                    'gallery_images' => [
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Anuradhapura+1',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Anuradhapura+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Anuradhapura+3'
                    ]
                ],
                'polonnaruwa' => [
                    'name' => 'Polonnaruwa',
                    'image' => 'https://placehold.co/600x400/84A98C/FFFFFF?text=Polonnaruwa',
                    'gallery_images' => [
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Polonnaruwa+1',
                        'https://placehold.co/400x300/35682D/FFFFFF?text=Polonnaruwa+2',
                        'https://placehold.co/400x300/84A98C/FFFFFF?text=Polonnaruwa+3'
                    ]
                ],
            ];

            if (!empty($destination_name) && isset($destinations_data[$destination_name])) {
                $destination_display_name = $destinations_data[$destination_name]['name'];
                $destination_image = $destinations_data[$destination_name]['image'];
                echo '<p class="text-white mt-3 fs-5">For: <span class="text-warning">' . $destination_display_name . '</span></p>';
            }
            ?>
        </div>
    </div>

    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row justify-content-center g-5">
                <!-- Left Column for Destination Images -->
                <div class="col-lg-5 col-md-10 mb-4 mb-lg-0">
                    <div id="destination-images-panel" class="p-4 rounded shadow">
                        <h4 class="text-primary mb-4">Photos of <span id="current-destination-name"><?php echo $destination_display_name; ?></span></h4>
                        <div id="destination-image-gallery" class="row g-3">
                            <!-- Images will be dynamically loaded here by JavaScript -->
                        </div>
                    </div>
                </div>
                <!-- Right Column for Booking Form -->
                <div class="col-lg-7 col-md-10">
                    <div class="booking-form-container">
                        <h1 class="text-center mb-4 text-primary">Confirm Your Travel Booking</h1>
                        <form id="bookingForm" action="checkout.php" method="GET">
                            <!-- A. Traveler Information -->
                            <h3 class="section-heading text-primary">1. Traveler Information</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required>
                                        <label for="fullName">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number" required>
                                        <label for="contactNumber">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="destinationSelect" name="destination" required>
                                            <option value="">Select Destination</option>
                                            <?php foreach ($destinations_data as $key => $dest): ?>
                                                <option value="<?php echo $key; ?>" <?php echo ($key === $destination_name) ? 'selected' : ''; ?>><?php echo $dest['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="destinationSelect">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required>
                                        <label for="startDate">Travel Start Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date" required>
                                        <label for="endDate">Travel End Date</label>
                                    </div>
                                </div>
                            </div>

                            <!-- B. Select a Tour Guide (Optional) -->
                            <h3 class="section-heading text-primary">2. Select a Tour Guide (Optional)</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="guide" data-value="none" data-price-per-day="0">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="tourGuide" id="guideNone" value="none" checked>
                                        <label class="form-check-label w-100" for="guideNone">
                                            <strong>No Tour Guide Needed</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="guide" data-value="guide1" data-price-per-day="1500">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="tourGuide" id="guide1" value="John Doe">
                                        <img src="https://placehold.co/60x60/84A98C/FFFFFF?text=JD" class="rounded-circle me-3" alt="John Doe">
                                        <label class="form-check-label w-100" for="guide1">
                                            <strong>John Doe</strong><br>
                                            <small class="text-muted">Languages: English, Sinhala | 5+ Years Experience</small><br>
                                            <span class="cost-display">LKR 1500/day</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="guide" data-value="guide2" data-price-per-day="1800">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="tourGuide" id="guide2" value="Maria Fernando">
                                        <img src="https://placehold.co/60x60/35682D/FFFFFF?text=MF" class="rounded-circle me-3" alt="Maria Fernando">
                                        <label class="form-check-label w-100" for="guide2">
                                            <strong>Maria Fernando</strong><br>
                                            <small class="text-muted">Languages: English, Tamil, German | Specializes in Culture</small><br>
                                            <span class="cost-display">LKR 1800/day</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- C. Select Nearby Accommodation (Optional) -->
                            <h3 class="section-heading text-primary">3. Select Nearby Accommodation (Optional)</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="accommodation" data-value="none" data-price-per-day="0">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="accommodation" id="accNone" value="none" checked>
                                        <label class="form-check-label w-100" for="accNone">
                                            <strong>No Accommodation Needed</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="accommodation" data-value="hotel1" data-price-per-day="3500">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="accommodation" id="hotel1" value="The Green Paradise Resort">
                                        <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Hotel1" class="rounded me-3" alt="The Green Paradise Resort">
                                        <label class="form-check-label w-100" for="hotel1">
                                            <strong>The Green Paradise Resort</strong><br>
                                            <small class="text-muted">Rating: 4.5/5 | 2km from center</small><br>
                                            <span class="cost-display">LKR 3500/night</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="accommodation" data-value="hotel2" data-price-per-day="4500">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="accommodation" id="hotel2" value="Cultural Heritage Hotel">
                                        <img src="https://placehold.co/100x70/35682D/FFFFFF?text=Hotel2" class="rounded me-3" alt="Cultural Heritage Hotel">
                                        <label class="form-check-label w-100" for="hotel2">
                                            <strong>Cultural Heritage Hotel</strong><br>
                                            <small class="text-muted">Rating: 4.0/5 | 1.5km from center</small><br>
                                            <span class="cost-display">LKR 4500/night</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Accommodation Details Display -->
                            <div class="col-12 p-4 rounded shadow" id="accommodation-details-display">
                                <h4 class="text-primary">Selected Accommodation Details</h4>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <img id="acc-detail-img" src="" class="img-fluid rounded mb-3" alt="Accommodation Image">
                                        <div id="acc-detail-video" class="video-responsive rounded">
                                            <!-- Video iframe will be inserted here -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 id="acc-detail-name" class="text-primary"></h5>
                                        <p id="acc-detail-description"></p>
                                        <p><i class="fas fa-star text-warning"></i> <span id="acc-detail-rating"></span></p>
                                        <p><i class="fas fa-map-marker-alt text-primary"></i> <span id="acc-detail-distance"></span></p>
                                        <p><i class="fas fa-bed text-primary"></i> <span id="acc-detail-amenities"></span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- D. Select Vehicle (Optional) -->
                            <h3 class="section-heading text-primary">4. Select Vehicle (Optional)</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="vehicle" data-value="none" data-price-per-day="0">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="vehicle" id="vehicleNone" value="none" checked>
                                        <label class="form-check-label w-100" for="vehicleNone">
                                            <strong>No Vehicle Needed</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="vehicle" data-value="car" data-price-per-day="2500">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="vehicle" id="vehicleCar" value="Car">
                                        <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Car" class="rounded me-3" alt="Car">
                                        <label class="form-check-label w-100" for="vehicleCar">
                                            <strong>Car</strong><br>
                                            <small class="text-muted">Capacity: 4 | Avg. Price: $50/day</small><br>
                                            <span class="cost-display">LKR 2500/day</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="vehicle" data-value="van" data-price-per-day="4000">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="vehicle" id="vehicleVan" value="Van">
                                        <img src="https://placehold.co/100x70/35682D/FFFFFF?text=Van" class="rounded me-3" alt="Van">
                                        <label class="form-check-label w-100" for="vehicleVan">
                                            <strong>Van</strong><br>
                                            <small class="text-muted">Capacity: 8 | Avg. Price: $80/day</small><br>
                                            <span class="cost-display">LKR 4000/day</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection-card d-flex align-items-center p-3 rounded border shadow-sm" data-service-type="vehicle" data-value="tuk-tuk" data-price-per-day="1000">
                                        <input class="form-check-input mt-0 me-3" type="radio" name="vehicle" id="vehicleTukTuk" value="Tuk Tuk">
                                        <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Tuk+Tuk" class="rounded me-3" alt="Tuk Tuk">
                                        <label class="form-check-label w-100" for="vehicleTukTuk">
                                            <strong>Tuk Tuk</strong><br>
                                            <small class="text-muted">Capacity: 3 | Avg. Price: $20/day</small><br>
                                            <span class="cost-display">LKR 1000/day</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Hidden fields for costs -->
                            <input type="hidden" id="guideCost" name="guideCost" value="0">
                            <input type="hidden" id="accommodationCost" name="accommodationCost" value="0">
                            <input type="hidden" id="vehicleCost" name="vehicleCost" value="0">
                            <input type="hidden" id="numberOfDays" name="numberOfDays" value="0">

                            <!-- E. Notes & Final Submission -->
                            <h3 class="section-heading text-primary">5. Additional Notes & Confirmation</h3>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Requests or Notes" id="specialRequests" name="specialRequests" style="height: 120px"></textarea>
                                        <label for="specialRequests">Notes or Special Requests</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" onclick="submitBooking();">Confirm Booking</button>
                                </div>
                            </div>
                        </form>
                        <div id="bookingConfirmation" class="alert-success-custom text-center">
                            Your customized booking has been submitted! Redirecting to checkout...
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
    <script>
        function submitBooking() {
            window.location.href = 'checkout.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Accommodation data for dynamic display
            const accommodationsData = {
                "hotel1": {
                    name: "The Green Paradise Resort",
                    description: "A luxurious resort nestled amidst lush greenery, offering a serene escape with modern amenities. Enjoy spacious rooms, a stunning pool, and exceptional service.",
                    rating: "4.5/5",
                    distance: "2km from destination center",
                    amenities: "Free WiFi, Swimming Pool, Restaurant, Spa, Gym",
                    image: "https://placehold.co/600x400/84A98C/FFFFFF?text=Green+Paradise+Resort",
                    video: "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1" // Example YouTube embed URL
                },
                "hotel2": {
                    name: "Cultural Heritage Hotel",
                    description: "Experience the rich heritage of Sri Lanka in this charming boutique hotel. It blends traditional architecture with modern comforts, providing an authentic and comfortable stay close to historical sites.",
                    rating: "4.0/5",
                    distance: "1.5km from destination center",
                    amenities: "Cultural Shows, Local Cuisine, Garden, Free Parking",
                    image: "https://placehold.co/600x400/35682D/FFFFFF?text=Cultural+Heritage+Hotel",
                    video: "https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&mute=1" // Example YouTube embed URL
                }
            };

            // Destination data for dynamic image display on the left panel
            const destinationsGalleryData = {
                'sigiriya': [
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Sigiriya+1',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Sigiriya+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Sigiriya+3'
                ],
                'ella': [
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Ella+1',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Ella+2',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Ella+3'
                ],
                'galle-fort': [
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Galle+Fort+1',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Galle+Fort+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Galle+Fort+3'
                ],
                'nuwara-eliya': [
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Nuwara+Eliya+1',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Nuwara+Eliya+2',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Nuwara+Eliya+3'
                ],
                'kandy': [
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Kandy+1',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Kandy+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Kandy+3'
                ],
                'mirissa': [
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Mirissa+1',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Mirissa+2',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Mirissa+3'
                ],
                'yala-national-park': [
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Yala+1',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Yala+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Yala+3'
                ],
                'anuradhapura': [
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Anuradhapura+1',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Anuradhapura+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Anuradhapura+3'
                ],
                'polonnaruwa': [
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Polonnaruwa+1',
                    'https://placehold.co/400x300/35682D/FFFFFF?text=Polonnawaruwa+2',
                    'https://placehold.co/400x300/84A98C/FFFFFF?text=Polonnaruwa+3'
                ]
            };

            const destinationSelect = document.getElementById('destinationSelect');
            const currentDestinationNameSpan = document.getElementById('current-destination-name');
            const destinationImageGallery = document.getElementById('destination-image-gallery');

            const startDateInput = document.getElementById('startDate');
            const endDateInput = document.getElementById('endDate');
            const guideCostInput = document.getElementById('guideCost');
            const accommodationCostInput = document.getElementById('accommodationCost');
            const vehicleCostInput = document.getElementById('vehicleCost');
            const numberOfDaysInput = document.getElementById('numberOfDays');

            // Function to calculate number of days
            function calculateNumberOfDays() {
                const start = new Date(startDateInput.value);
                const end = new Date(endDateInput.value);
                if (start && end && start < end) {
                    const diffTime = Math.abs(end - start);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                    numberOfDaysInput.value = diffDays;
                    return diffDays;
                }
                numberOfDaysInput.value = 0;
                return 0;
            }

            // Function to update destination images in the left panel
            function updateDestinationImages(selectedDestinationId) {
                destinationImageGallery.innerHTML = ''; // Clear previous images
                const images = destinationsGalleryData[selectedDestinationId];
                if (images) {
                    currentDestinationNameSpan.textContent = destinationSelect.options[destinationSelect.selectedIndex].text;
                    images.forEach(src => {
                        const colDiv = document.createElement('div');
                        colDiv.classList.add('col-12'); // Full width within its column
                        const img = document.createElement('img');
                        img.src = src;
                        img.alt = selectedDestinationId + ' image';
                        img.classList.add('img-fluid', 'rounded');
                        colDiv.appendChild(img);
                        destinationImageGallery.appendChild(colDiv);
                    });
                } else {
                    currentDestinationNameSpan.textContent = 'No Destination Selected';
                }
            }

            // Auto-fill destination if 'place' query parameter exists
            const urlParams = new URLSearchParams(window.location.search);
            const place = urlParams.get('place');
            if (place) {
                const formattedPlace = place.toLowerCase().replace(/ /g, '-');
                for (let i = 0; i < destinationSelect.options.length; i++) {
                    if (destinationSelect.options[i].value === formattedPlace) {
                        destinationSelect.value = formattedPlace;
                        updateDestinationImages(formattedPlace); // Load images for pre-selected destination
                        break;
                    }
                }
            }

            // Listen for changes in the destination dropdown
            destinationSelect.addEventListener('change', function() {
                updateDestinationImages(this.value);
            });

            // Handle selection card clicks
            document.querySelectorAll('.selection-card').forEach(card => {
                card.addEventListener('click', function() {
                    const radio = this.querySelector('input[type="radio"]');
                    if (radio) {
                        radio.checked = true;
                        // Remove 'selected' class from all cards of the same group
                        document.querySelectorAll(`.selection-card[data-service-type="${this.dataset.serviceType}"]`).forEach(sibling => {
                            sibling.classList.remove('selected');
                        });
                        // Add 'selected' class to the clicked card
                        this.classList.add('selected');

                        // Update hidden cost inputs
                        const pricePerDay = parseFloat(this.dataset.pricePerDay);
                        const days = calculateNumberOfDays();
                        const totalCost = pricePerDay * days;

                        if (this.dataset.serviceType === 'guide') {
                            guideCostInput.value = totalCost;
                        } else if (this.dataset.serviceType === 'accommodation') {
                            accommodationCostInput.value = totalCost;
                            displayAccommodationDetails(this.dataset.value);
                        } else if (this.dataset.serviceType === 'vehicle') {
                            vehicleCostInput.value = totalCost;
                        }
                    }
                });
            });

            // Listen for date changes to update costs
            startDateInput.addEventListener('change', updateCosts);
            endDateInput.addEventListener('change', updateCosts);

            function updateCosts() {
                const days = calculateNumberOfDays();

                // Update guide cost
                const selectedGuideCard = document.querySelector('input[name="tourGuide"]:checked').closest('.selection-card');
                if (selectedGuideCard) {
                    guideCostInput.value = parseFloat(selectedGuideCard.dataset.pricePerDay) * days;
                }

                // Update accommodation cost
                const selectedAccommodationCard = document.querySelector('input[name="accommodation"]:checked').closest('.selection-card');
                if (selectedAccommodationCard) {
                    accommodationCostInput.value = parseFloat(selectedAccommodationCard.dataset.pricePerDay) * days;
                    displayAccommodationDetails(selectedAccommodationCard.dataset.value); // Re-display details
                }

                // Update vehicle cost
                const selectedVehicleCard = document.querySelector('input[name="vehicle"]:checked').closest('.selection-card');
                if (selectedVehicleCard) {
                    vehicleCostInput.value = parseFloat(selectedVehicleCard.dataset.pricePerDay) * days;
                }
            }

            // Function to display accommodation details
            function displayAccommodationDetails(hotelId) {
                const detailsDisplay = document.getElementById('accommodation-details-display');
                const imgElement = document.getElementById('acc-detail-img');
                const videoContainer = document.getElementById('acc-detail-video');
                const nameElement = document.getElementById('acc-detail-name');
                const descriptionElement = document.getElementById('acc-detail-description');
                const ratingElement = document.getElementById('acc-detail-rating');
                const distanceElement = document.getElementById('acc-detail-distance');
                const amenitiesElement = document.getElementById('acc-detail-amenities');

                if (hotelId === 'none') {
                    detailsDisplay.style.display = 'none';
                    imgElement.src = '';
                    videoContainer.innerHTML = '';
                    nameElement.textContent = '';
                    descriptionElement.textContent = '';
                    ratingElement.textContent = '';
                    distanceElement.textContent = '';
                    amenitiesElement.textContent = '';
                } else {
                    const hotel = accommodationsData[hotelId];
                    if (hotel) {
                        imgElement.src = hotel.image;
                        imgElement.alt = hotel.name;

                        videoContainer.innerHTML = `<iframe src="${hotel.video}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;

                        nameElement.textContent = hotel.name;
                        descriptionElement.textContent = hotel.description;
                        ratingElement.textContent = hotel.rating;
                        distanceElement.textContent = hotel.distance;
                        amenitiesElement.textContent = hotel.amenities;
                        detailsDisplay.style.display = 'block';
                    }
                }
            }

            // Initialize selected state for default checked radios and display details if an accommodation is pre-selected
            document.querySelectorAll('input[type="radio"]:checked').forEach(radio => {
                const card = radio.closest('.selection-card');
                if (card) {
                    card.classList.add('selected');
                    if (card.dataset.serviceType === 'accommodation') {
                        displayAccommodationDetails(card.dataset.value);
                    }
                }
            });

            // Initial cost calculation on page load
            updateCosts();

            // Handle form submission
            const bookingForm = document.getElementById('bookingForm');
            const bookingConfirmation = document.getElementById('bookingConfirmation');

            bookingForm.addEventListener('submit', function(event) {
                // HTML5 validation will prevent submission if required fields are empty
                if (!bookingForm.checkValidity()) {
                    bookingForm.classList.add('was-validated');
                    return;
                }

                // The form will now naturally submit to checkout.php via GET
                // No need for event.preventDefault() or manual redirection here
            });
        });
    </script>
</body>

</html>