<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Profile - Wonderful Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="icon" href="img/logo.png">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <style>
        .profile-sidebar {
            background-color: var(--bs-light);
            padding: 20px;
            border-radius: 15px;
        }

        .profile-sidebar .list-group-item {
            border: none;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
            color: var(--bs-dark);
        }

        .profile-sidebar .list-group-item.active {
            background-color: var(--bs-primary);
            color: var(--bs-white);
        }

        .profile-sidebar .list-group-item:hover:not(.active) {
            background-color: var(--bs-gray-200);
            color: var(--bs-primary);
        }

        .profile-sidebar .list-group-item i {
            margin-right: 10px;
            width: 20px;
        }

        .profile-content {
            background-color: var(--bs-light);
            padding: 30px;
            border-radius: 15px;
        }

        .profile-content h2 {
            color: var(--bs-primary);
            margin-bottom: 25px;
            border-bottom: 2px solid var(--bs-secondary);
            padding-bottom: 10px;
        }

        .profile-overview-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--bs-primary);
            margin-bottom: 20px;
        }

        .booking-card,
        .destination-card,
        .listing-card {
            background-color: var(--bs-white);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .booking-card h5,
        .destination-card h5,
        .listing-card h5 {
            color: var(--bs-primary);
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            padding: 1rem 0.75rem;
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

    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/gallefort.jpg') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">User Profile</h3>
            <p class="text-white mb-0">Manage your travel experiences with Wonderful Sri Lanka.</p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3">
                <nav class="profile-sidebar p-3">
                    <div class="d-block d-lg-none mb-3">
                        <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse">
                            <i class="fas fa-bars me-2"></i> Menu
                        </button>
                    </div>
                    <div class="collapse d-lg-block" id="sidebarCollapse">
                        <div class="list-group list-group-flush">
                            <a href="#profileOverview" class="list-group-item list-group-item-action active" data-bs-toggle="tab">
                                <i class="fas fa-user-circle"></i> Profile Overview
                            </a>
                            <a href="#myBookings" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-calendar-alt"></i> My Bookings
                            </a>
                            <a href="#savedDestinations" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-heart"></i> Saved Destinations
                            </a>
                            <a href="#languageSettings" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-language"></i> Language Settings
                            </a>
                            <a href="#changePassword" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-key"></i> Change Password
                            </a>

                            <!-- Separator -->
                            <div class="my-3 border-top"></div>

                            <!-- Seller Features Section Heading -->
                            <div class="list-group-item text-primary fw-bold">
                                <i class="fas fa-store"></i> Seller Features
                            </div>
                            <!-- Seller Features Menu Items -->
                            <a href="#sellerDashboard" class="list-group-item list-group-item-action ps-5" data-bs-toggle="tab">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                            <a href="#vehicleManagement" class="list-group-item list-group-item-action ps-5" data-bs-toggle="tab">
                                <i class="fas fa-car"></i> Vehicle Listings
                            </a>
                            <a href="#guideManagement" class="list-group-item list-group-item-action ps-5" data-bs-toggle="tab">
                                <i class="fas fa-user-tie"></i> Tour Guide Services
                            </a>
                            <a href="#accommodationManagement" class="list-group-item list-group-item-action ps-5" data-bs-toggle="tab">
                                <i class="fas fa-hotel"></i> Accommodation Listings
                            </a>
                            <a href="#bookingInquiries" class="list-group-item list-group-item-action ps-5" data-bs-toggle="tab">
                                <i class="fas fa-receipt"></i> Booking Inquiries
                            </a>

                            <!-- Separator -->
                            <div class="my-3 border-top"></div>

                            <a href="#" class="list-group-item list-group-item-action text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-9">
                <div class="profile-content p-4 tab-content">
                    <!-- Profile Overview Section -->
                    <div class="tab-pane fade show active" id="profileOverview">
                        <h2 class="mb-4">Profile Overview</h2>
                        <div class="text-center mb-4">
                            <img src="https://placehold.co/150x150/35682D/FFFFFF?text=User" alt="User Profile Picture" class="profile-overview-img">
                            <h5>John Doe</h5>
                            <p class="text-muted">johndoe@example.com</p>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="profileName" value="John Doe">
                                        <label for="profileName">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="profileEmail" value="johndoe@example.com" readonly>
                                        <label for="profileEmail">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="profilePhone" value="+94 71 123 4567">
                                        <label for="profilePhone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary py-3 px-5">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- My Bookings Section -->
                    <div class="tab-pane fade" id="myBookings">
                        <h2 class="mb-4">My Bookings</h2>
                        <div class="booking-card">
                            <h5>Sigiriya Rock Fortress - Tour & Accommodation</h5>
                            <p class="mb-1 text-muted">Booking ID: #WSL2024001</p>
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i>Dates: 2024-08-10 to 2024-08-12 (3 days)</p>
                            <p class="mb-1"><i class="fas fa-concierge-bell me-2"></i>Services: Guide (John Doe), The Green Paradise Resort</p>
                            <p class="mb-1"><i class="fas fa-check-circle text-success me-2"></i>Status: Confirmed</p>
                            <a href="destination-detail.php?id=sigiriya" class="btn btn-sm btn-outline-primary mt-2">View Details</a>
                        </div>
                        <div class="booking-card">
                            <h5>Ella - Vehicle Rental</h5>
                            <p class="mb-1 text-muted">Booking ID: #WSL2024002</p>
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i>Dates: 2024-09-01 to 2024-09-03 (3 days)</p>
                            <p class="mb-1"><i class="fas fa-car me-2"></i>Services: Car Rental</p>
                            <p class="mb-1"><i class="fas fa-hourglass-half text-warning me-2"></i>Status: Pending Payment</p>
                            <a href="booking.php?place=ella" class="btn btn-sm btn-outline-primary mt-2">Complete Payment</a>
                        </div>
                        <div class="booking-card">
                            <h5>Galle Fort - Self-Guided Tour</h5>
                            <p class="mb-1 text-muted">Booking ID: #WSL2024003</p>
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i>Dates: 2024-07-20 (1 day)</p>
                            <p class="mb-1"><i class="fas fa-info-circle me-2"></i>Services: Destination Info Only</p>
                            <p class="mb-1"><i class="fas fa-check-circle text-success me-2"></i>Status: Completed</p>
                            <a href="destination-detail.php?id=galle-fort" class="btn btn-sm btn-outline-primary mt-2">View Details</a>
                        </div>
                    </div>

                    <!-- Saved Destinations Section -->
                    <div class="tab-pane fade" id="savedDestinations">
                        <h2 class="mb-4">Saved Destinations</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="destination-card d-flex align-items-center">
                                    <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Sigiriya" class="img-fluid rounded me-3" alt="Sigiriya">
                                    <div>
                                        <h5 class="mb-1">Sigiriya Rock Fortress</h5>
                                        <p class="text-muted mb-1"><small>Historic Landmark</small></p>
                                        <a href="destination-detail.php?id=sigiriya" class="btn btn-sm btn-primary">View Details</a>
                                        <button class="btn btn-sm btn-outline-danger ms-2">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-card d-flex align-items-center">
                                    <img src="https://placehold.co/100x70/35682D/FFFFFF?text=Ella" class="img-fluid rounded me-3" alt="Ella">
                                    <div>
                                        <h5 class="mb-1">Ella</h5>
                                        <p class="text-muted mb-1"><small>Scenic Hill Country</small></p>
                                        <a href="destination-detail.php?id=ella" class="btn btn-sm btn-primary">View Details</a>
                                        <button class="btn btn-sm btn-outline-danger ms-2">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-card d-flex align-items-center">
                                    <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Kandy" class="img-fluid rounded me-3" alt="Kandy">
                                    <div>
                                        <h5 class="mb-1">Kandy</h5>
                                        <p class="text-muted mb-1"><small>Cultural Capital</small></p>
                                        <a href="destination-detail.php?id=kandy" class="btn btn-sm btn-primary">View Details</a>
                                        <button class="btn btn-sm btn-outline-danger ms-2">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Language Settings Section -->
                    <div class="tab-pane fade" id="languageSettings">
                        <h2 class="mb-4">Language Settings</h2>
                        <p class="mb-3">Select your preferred language for the website:</p>
                        <div class="d-flex gap-3">
                            <button class="btn btn-primary py-2 px-4" id="langEnglish">English</button>
                            <button class="btn btn-outline-primary py-2 px-4" id="langSinhala">සිංහල (Sinhala)</button>
                        </div>
                        <p class="mt-4 text-muted">Note: Language preference will be saved for future visits.</p>
                    </div>

                    <!-- Change Password Section -->
                    <div class="tab-pane fade" id="changePassword">
                        <h2 class="mb-4">Change Password</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="currentPassword" placeholder="Current Password" required>
                                        <label for="currentPassword">Current Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="newPassword" placeholder="New Password" required>
                                        <label for="newPassword">New Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password" required>
                                        <label for="confirmPassword">Confirm New Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary py-3 px-5">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Seller Dashboard -->
                    <div class="tab-pane fade" id="sellerDashboard">
                        <h2 class="mb-4">Seller Dashboard</h2>
                        <p>Welcome, Seller! Here's a quick overview of your services and recent activities.</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 bg-white rounded text-center">
                                    <i class="fas fa-car fa-3x text-primary mb-2"></i>
                                    <h5 class="mb-1">Vehicles Listed</h5>
                                    <p class="fs-4 fw-bold">3</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white rounded text-center">
                                    <i class="fas fa-user-tie fa-3x text-primary mb-2"></i>
                                    <h5 class="mb-1">Guides Listed</h5>
                                    <p class="fs-4 fw-bold">1</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white rounded text-center">
                                    <i class="fas fa-hotel fa-3x text-primary mb-2"></i>
                                    <h5 class="mb-1">Accommodations Listed</h5>
                                    <p class="fs-4 fw-bold">2</p>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-4 text-primary">Recent Inquiries</h4>
                        <div class="listing-card">
                            <h6>New Booking for Sigiriya Tour</h6>
                            <p class="mb-1"><small class="text-muted">From: Jane Smith | Date: 2024-07-30</small></p>
                            <p class="mb-1"><small>Service: Tour Guide (John Doe)</small></p>
                            <button class="btn btn-sm btn-success">Accept</button>
                            <button class="btn btn-sm btn-danger ms-2">Decline</button>
                        </div>
                    </div>

                    <!-- Vehicle Listings Management -->
                    <div class="tab-pane fade" id="vehicleManagement">
                        <h2 class="mb-4">Vehicle Listings Management</h2>
                        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addVehicleModal">Add New Vehicle</button>

                        <h4 class="text-primary mb-3">Your Listed Vehicles</h4>
                        <div class="listing-card">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-3">
                                    <img src="https://placehold.co/100x70/84A98C/FFFFFF?text=Car" class="img-fluid rounded" alt="Vehicle">
                                </div>
                                <div class="col-md-6">
                                    <h5>Toyota Aqua (Car)</h5>
                                    <p class="mb-1"><small>Capacity: 4 | Price: LKR 2500/day</small></p>
                                    <p class="mb-0"><small class="text-success">Status: Available</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="listing-card">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-3">
                                    <img src="https://placehold.co/100x70/35682D/FFFFFF?text=Van" class="img-fluid rounded" alt="Vehicle">
                                </div>
                                <div class="col-md-6">
                                    <h5>Toyota Hiace (Van)</h5>
                                    <p class="mb-1"><small>Capacity: 8 | Price: LKR 4000/day</small></p>
                                    <p class="mb-0"><small class="text-success">Status: Available</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Guide Services Management -->
                    <div class="tab-pane fade" id="guideManagement">
                        <h2 class="mb-4">Tour Guide Services Management</h2>
                        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addGuideModal">Add New Guide Profile</button>

                        <h4 class="text-primary mb-3">Your Guide Profiles</h4>
                        <div class="listing-card">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-3">
                                    <img src="https://placehold.co/100x100/84A98C/FFFFFF?text=JD" class="img-fluid rounded-circle" alt="Guide Profile">
                                </div>
                                <div class="col-md-6">
                                    <h5>John Doe</h5>
                                    <p class="mb-1"><small>Languages: English, Sinhala | Experience: 5+ Years</small></p>
                                    <p class="mb-0"><small>Areas: Kandy, Sigiriya | Price: LKR 1500/day</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accommodation Listings Management -->
                    <div class="tab-pane fade" id="accommodationManagement">
                        <h2 class="mb-4">Accommodation Listings Management</h2>
                        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addAccommodationModal">Add New Accommodation</button>

                        <h4 class="text-primary mb-3">Your Listed Accommodations</h4>
                        <div class="listing-card">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-3">
                                    <img src="https://placehold.co/100x70/35682D/FFFFFF?text=Hotel1" class="img-fluid rounded" alt="Accommodation">
                                </div>
                                <div class="col-md-6">
                                    <h5>The Green Paradise Resort</h5>
                                    <p class="mb-1"><small>Location: Ella | Price: LKR 3500/night</small></p>
                                    <p class="mb-0"><small>Room Types: Standard, Deluxe | Max Guests: 40</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booking & Inquiry Dashboard -->
                    <div class="tab-pane fade" id="bookingInquiries">
                        <h2 class="mb-4">Booking & Inquiry Dashboard</h2>
                        <p>Manage incoming booking requests for your services.</p>
                        <div class="listing-card">
                            <h6>Vehicle Booking Request - Toyota Aqua</h6>
                            <p class="mb-1"><small class="text-muted">From: Alice Johnson | Dates: 2024-08-15 to 2024-08-18</small></p>
                            <p class="mb-0"><small>Status: Pending</small></p>
                            <button class="btn btn-sm btn-success mt-2">Accept</button>
                            <button class="btn btn-sm btn-danger ms-2 mt-2">Decline</button>
                        </div>
                        <div class="listing-card">
                            <h6>Accommodation Inquiry - Green Paradise Resort</h6>
                            <p class="mb-1"><small class="text-muted">From: Bob Williams | Dates: 2024-09-01 to 2024-09-05</small></p>
                            <p class="mb-0"><small>Status: Pending</small></p>
                            <button class="btn btn-sm btn-success mt-2">Accept</button>
                            <button class="btn btn-sm btn-danger ms-2 mt-2">Decline</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate seller role (true for seller, false for regular user)
            const isSeller = true; // Set to true to show seller features

            // Get the seller features heading element
            const sellerFeaturesHeading = document.querySelector('.list-group-item.text-primary.fw-bold');

            if (isSeller) {
                // If seller, display the seller features heading
                sellerFeaturesHeading.style.display = 'block';
            } else {
                // If not seller, hide the seller features heading and its associated menu items
                sellerFeaturesHeading.style.display = 'none';
                const sellerMenuItems = document.querySelectorAll('#sidebarCollapse .list-group-item.ps-5');
                sellerMenuItems.forEach(item => item.style.display = 'none');
            }

            // Handle sidebar tab switching
            var triggerTabList = [].slice.call(document.querySelectorAll('#sidebarCollapse .list-group-item[data-bs-toggle="tab"]'))
            triggerTabList.forEach(function(triggerEl) {
                var tabTrigger = new bootstrap.Tab(triggerEl)

                triggerEl.addEventListener('click', function(event) {
                    event.preventDefault()
                    tabTrigger.show()
                })
            });

            // Language settings toggle (example - actual language change would need more logic)
            document.getElementById('langEnglish').addEventListener('click', function() {
                alert('Language set to English (functionality to be implemented)');
                this.classList.add('btn-primary');
                this.classList.remove('btn-outline-primary');
                document.getElementById('langSinhala').classList.remove('btn-primary');
                document.getElementById('langSinhala').classList.add('btn-outline-primary');
            });

            document.getElementById('langSinhala').addEventListener('click', function() {
                alert('Language set to Sinhala (functionality to be implemented)');
                this.classList.add('btn-primary');
                this.classList.remove('btn-outline-primary');
                document.getElementById('langEnglish').classList.remove('btn-primary');
                document.getElementById('langEnglish').classList.add('btn-outline-primary');
            });
        });
    </script>
</body>

</html>