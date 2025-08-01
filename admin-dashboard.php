<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard - Wonderful Sri Lanka</title>
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
        /* Styles for admin layout - no shadows/blurs */
        .admin-sidebar {
            background-color: var(--bs-light);
            padding: 20px;
            border-radius: 15px;
            /* No box-shadow */
        }

        .admin-sidebar .list-group-item {
            border: none;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
            color: var(--bs-dark);
        }

        .admin-sidebar .list-group-item.active {
            background-color: var(--bs-primary);
            color: var(--bs-white);
        }

        .admin-sidebar .list-group-item:hover:not(.active) {
            background-color: var(--bs-gray-200);
            color: var(--bs-primary);
        }

        .admin-sidebar .list-group-item i {
            margin-right: 10px;
            width: 20px;
            /* Ensure consistent icon alignment */
        }

        .admin-content {
            background-color: var(--bs-light);
            padding: 30px;
            border-radius: 15px;
            /* No box-shadow */
        }

        .admin-content h2 {
            color: var(--bs-primary);
            margin-bottom: 25px;
            border-bottom: 2px solid var(--bs-secondary);
            padding-bottom: 10px;
        }

        .stat-card {
            background-color: var(--bs-white);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            /* No box-shadow */
        }

        .stat-card i {
            font-size: 3rem;
            color: var(--bs-primary);
            margin-bottom: 10px;
        }

        .stat-card h5 {
            color: var(--bs-dark);
        }

        .stat-card p {
            font-size: 2rem;
            font-weight: bold;
            color: var(--bs-primary);
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table thead th {
            background-color: var(--bs-primary);
            color: var(--bs-white);
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            padding: 1rem 0.75rem;
        }

        /* Full-screen layout adjustments */
        html,
        body {
            height: 100%;
        }

        #main-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Ensure it takes full viewport height */
        }

        #content-area {
            flex-grow: 1;
            /* Allows this section to fill available vertical space */
            display: flex;
            flex-direction: column;
            /* Default to column for small screens */
        }

        @media (min-width: 992px) {

            /* Large screens and up */
            #content-area {
                flex-direction: row;
                /* Horizontal layout for sidebar and main content */
            }

            .admin-sidebar {
                flex: 0 0 250px;
                /* Fixed width sidebar on large screens */
                height: auto;
                /* Let content define height */
                min-height: calc(100vh - 100px);
                /* Adjust based on header/footer height */
            }

            .admin-content {
                flex-grow: 1;
                /* Main content fills remaining space */
                height: auto;
                /* Let content define height */
                min-height: calc(100vh - 100px);
                /* Adjust based on header/footer height */
            }
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

    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/polonnaruwa.jpg') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Admin Dashboard</h3>
            <p class="text-white mb-0">Manage the Wonderful Sri Lanka platform</p>
        </div>
    </div>

    <!-- Main Content Area -->
    <div id="main-wrapper" class="d-flex flex-column">
        <div id="content-area" class="container-fluid py-3 flex-grow-1">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3 px-3 mb-3 mb-lg-0">
                <nav class="admin-sidebar p-3">
                    <div class="d-block d-lg-none mb-3">
                        <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse">
                            <i class="fas fa-bars me-2"></i> Admin Menu
                        </button>
                    </div>
                    <div class="collapse d-lg-block" id="sidebarCollapse">
                        <div class="list-group list-group-flush">
                            <a href="#dashboardOverview" class="list-group-item list-group-item-action active" data-bs-toggle="tab">
                                <i class="fas fa-home"></i> Dashboard Overview
                            </a>
                            <a href="#manageUsers" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-users"></i> Manage Users
                            </a>
                            <a href="#manageSellers" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-store"></i> Manage Sellers & Listings
                            </a>
                            <a href="#manageDestinations" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-compass"></i> Manage Destinations
                            </a>
                            <a href="#manageBookings" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-receipt"></i> Manage Bookings
                            </a>
                            <a href="#galleryEditor" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-images"></i> Gallery / Homepage Editor
                            </a>
                            <a href="#emergencyPanel" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-exclamation-triangle"></i> SOS / Emergency Panel
                            </a>
                            <a href="#websiteSettings" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                                <i class="fas fa-cog"></i> Website Settings
                            </a>
                            <a href="#" class="list-group-item list-group-item-action text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Content Panels -->
            <div class="col-lg-9 px-3">
                <div class="admin-content p-4 tab-content">
                    <!-- Dashboard Overview -->
                    <div class="tab-pane fade show active" id="dashboardOverview">
                        <h2 class="mb-4">Dashboard Overview</h2>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <div class="stat-card">
                                    <i class="fas fa-users"></i>
                                    <h5>Total Users</h5>
                                    <p>1,250</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="stat-card">
                                    <i class="fas fa-store"></i>
                                    <h5>Total Sellers</h5>
                                    <p>85</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="stat-card">
                                    <i class="fas fa-list"></i>
                                    <h5>Total Listings</h5>
                                    <p>320</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="stat-card">
                                    <i class="fas fa-calendar-check"></i>
                                    <h5>Today's Bookings</h5>
                                    <p>12</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="stat-card">
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                    <h5>Emergency Reports</h5>
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Manage Users -->
                    <div class="tab-pane fade" id="manageUsers">
                        <h2 class="mb-4">Manage Users</h2>
                        <div class="mb-3">
                            <label for="userRoleFilter" class="form-label">Filter by Role:</label>
                            <select class="form-select w-auto d-inline-block" id="userRoleFilter">
                                <option value="all">All</option>
                                <option value="normal">Normal</option>
                                <option value="seller">Seller</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>Normal</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">Reset Pass</button>
                                            <button class="btn btn-sm btn-danger ms-2">Ban</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jane Smith</td>
                                        <td>jane@example.com</td>
                                        <td>Seller</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">Reset Pass</button>
                                            <button class="btn btn-sm btn-danger ms-2">Ban</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Admin User</td>
                                        <td>admin@example.com</td>
                                        <td>Admin</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">Reset Pass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Blocked User</td>
                                        <td>blocked@example.com</td>
                                        <td>Normal</td>
                                        <td>Banned</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Unban</button>
                                            <button class="btn btn-sm btn-danger ms-2">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Manage Sellers & Listings -->
                    <div class="tab-pane fade" id="manageSellers">
                        <h2 class="mb-4">Manage Sellers & Listings</h2>
                        <button class="btn btn-primary mb-4">Approve New Sellers (0)</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Seller Name</th>
                                        <th>Email</th>
                                        <th>Service Types</th>
                                        <th>Listings</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Travel Guide John</td>
                                        <td>guide.john@example.com</td>
                                        <td>Tour Guide</td>
                                        <td>1 Guide Profile</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">View Listings</button>
                                            <button class="btn btn-sm btn-danger ms-2">Remove Seller</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paradise Accommodations</td>
                                        <td>paradise@example.com</td>
                                        <td>Accommodation Host</td>
                                        <td>2 Properties</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">View Listings</button>
                                            <button class="btn btn-sm btn-danger ms-2">Remove Seller</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Island Rides</td>
                                        <td>rides@example.com</td>
                                        <td>Vehicle Rental</td>
                                        <td>3 Vehicles</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">View Listings</button>
                                            <button class="btn btn-sm btn-danger ms-2">Remove Seller</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Manage Destinations -->
                    <div class="tab-pane fade" id="manageDestinations">
                        <h2 class="mb-4">Manage Destinations</h2>
                        <button class="btn btn-primary mb-4">Add New Destination</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Featured</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sigiriya Rock Fortress</td>
                                        <td>Historic</td>
                                        <td>Yes</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">Edit</button>
                                            <button class="btn btn-sm btn-danger ms-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ella</td>
                                        <td>Nature</td>
                                        <td>Yes</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">Edit</button>
                                            <button class="btn btn-sm btn-danger ms-2">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Galle Fort</td>
                                        <td>Historic</td>
                                        <td>No</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">Edit</button>
                                            <button class="btn btn-sm btn-danger ms-2">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Manage Bookings -->
                    <div class="tab-pane fade" id="manageBookings">
                        <h2 class="mb-4">Manage Bookings</h2>
                        <div class="mb-3 row g-2">
                            <div class="col-md-4">
                                <label for="bookingDateFilter" class="form-label">Filter by Date:</label>
                                <input type="date" class="form-control" id="bookingDateFilter">
                            </div>
                            <div class="col-md-4">
                                <label for="bookingDestinationFilter" class="form-label">Filter by Destination:</label>
                                <select class="form-select" id="bookingDestinationFilter">
                                    <option value="all">All</option>
                                    <option value="sigiriya">Sigiriya</option>
                                    <option value="ella">Ella</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="bookingStatusFilter" class="form-label">Filter by Status:</label>
                                <select class="form-select" id="bookingStatusFilter">
                                    <option value="all">All</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="pending">Pending</option>
                                    <option value="canceled">Canceled</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>User</th>
                                        <th>Destination</th>
                                        <th>Services</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#WSL2024001</td>
                                        <td>John Doe</td>
                                        <td>Sigiriya</td>
                                        <td>Guide, Hotel</td>
                                        <td>2024-08-10</td>
                                        <td>LKR 7500.00</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info">View</button>
                                            <button class="btn btn-sm btn-danger ms-2">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#WSL2024002</td>
                                        <td>Jane Smith</td>
                                        <td>Ella</td>
                                        <td>Vehicle</td>
                                        <td>2024-09-01</td>
                                        <td>LKR 4000.00</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Confirm</button>
                                            <button class="btn btn-sm btn-danger ms-2">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Gallery / Homepage Editor -->
                    <div class="tab-pane fade" id="galleryEditor">
                        <h2 class="mb-4">Gallery / Homepage Editor</h2>
                        <h4 class="text-primary mb-3">Homepage Slider Images</h4>
                        <div class="mb-3">
                            <label for="sliderImageUpload" class="form-label">Upload New Slider Image:</label>
                            <input class="form-control" type="file" id="sliderImageUpload" accept="image/*">
                            <button class="btn btn-primary mt-2">Upload Image</button>
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <img src="https://placehold.co/200x150/84A98C/FFFFFF?text=Slider+1" class="img-fluid rounded mb-2" alt="Slider Image">
                                <button class="btn btn-sm btn-danger w-100">Remove</button>
                            </div>
                            <div class="col-md-4">
                                <img src="https://placehold.co/200x150/35682D/FFFFFF?text=Slider+2" class="img-fluid rounded mb-2" alt="Slider Image">
                                <button class="btn btn-sm btn-danger w-100">Remove</button>
                            </div>
                        </div>

                        <h4 class="text-primary mb-3">Homepage Text Blocks</h4>
                        <div class="mb-3">
                            <label for="homepageIntro" class="form-label">Homepage Introduction Text:</label>
                            <textarea class="form-control" id="homepageIntro" rows="5">Welcome to Wonderful Sri Lanka, your ultimate guide to exploring the Pearl of the Indian Ocean!</textarea>
                            <button class="btn btn-primary mt-2">Save Text</button>
                        </div>
                    </div>

                    <!-- SOS / Emergency Panel -->
                    <div class="tab-pane fade" id="emergencyPanel">
                        <h2 class="mb-4">SOS / Emergency Panel</h2>
                        <h4 class="text-primary mb-3">Emergency Contact List</h4>
                        <form class="mb-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactName" placeholder="Contact Name" value="Suwa Seriya Ambulance">
                                        <label for="contactName">Contact Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" value="1990">
                                        <label for="contactNumber">Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Add/Update Contact</button>
                                </div>
                            </div>
                        </form>

                        <h4 class="text-primary mb-3">Emergency Alerts / Announcements</h4>
                        <div class="mb-3">
                            <label for="emergencyAlert" class="form-label">Alert Message:</label>
                            <textarea class="form-control" id="emergencyAlert" rows="3" placeholder="Enter emergency message to display on homepage..."></textarea>
                            <button class="btn btn-danger mt-2">Publish Alert</button>
                            <button class="btn btn-secondary mt-2 ms-2">Clear Alert</button>
                        </div>
                    </div>

                    <!-- Website Settings -->
                    <div class="tab-pane fade" id="websiteSettings">
                        <h2 class="mb-4">Website Settings</h2>
                        <h4 class="text-primary mb-3">General Settings</h4>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="languageToggle" checked>
                            <label class="form-check-label" for="languageToggle">Enable Bilingual (Sinhala/English)</label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="chatbotToggle" checked>
                            <label class="form-check-label" for="chatbotToggle">Enable WhatsApp/Chatbot Support</label>
                        </div>
                        <div class="mb-3">
                            <label for="themeSelect" class="form-label">Website Theme:</label>
                            <select class="form-select w-auto" id="themeSelect">
                                <option value="light">Light</option>
                                <option value="dark">Dark (Not Implemented)</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-3">Save Settings</button>
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
            // Simulate admin role (true for admin, false for non-admin)
            const isAdmin = true; // Set to true to show admin features

            if (!isAdmin) {
                // Redirect or show access denied message if not admin
                // window.location.href = 'login.php'; // Example redirect
                alert('Access Denied: You do not have administrator privileges.');
                document.querySelector('#content-area').innerHTML = '<div class="col-12 text-center py-5"><h3>Access Denied!</h3><p>You do not have permission to view this page.</p><a href="index.php" class="btn btn-primary mt-3">Go to Home</a></div>';
                return;
            }

            // Handle sidebar tab switching
            var triggerTabList = [].slice.call(document.querySelectorAll('.admin-sidebar .list-group-item[data-bs-toggle="tab"]'))
            triggerTabList.forEach(function(triggerEl) {
                var tabTrigger = new bootstrap.Tab(triggerEl)

                triggerEl.addEventListener('click', function(event) {
                    event.preventDefault()
                    tabTrigger.show()
                })
            });
        });
    </script>
</body>

</html>