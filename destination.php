<?php
session_start();
require "api/connection.php";

//Discover Section
$categoryFilter = $_GET["category"] ?? null;
$provinceFilter = $_GET["province"] ?? null;
$discoverSearch = $_GET["discover_search"] ?? null;

$discoverQuery = "SELECT 
            d.*, 
            dc.name AS category, 
            p.name AS province, 
            m.url 
          FROM discover d
          INNER JOIN discover_category dc ON d.discover_category_id = dc.id
          INNER JOIN province p ON d.province_id = p.id
          LEFT JOIN (
              SELECT discover_id, MIN(id) AS media_id
              FROM media
              GROUP BY discover_id
          ) first_media ON d.id = first_media.discover_id
          LEFT JOIN media m ON m.id = first_media.media_id";

$discoverConditions = [];
if ($categoryFilter && $categoryFilter !== "0") {
    $discoverConditions[] = "dc.id = '" . intval($categoryFilter) . "'";
}
if ($provinceFilter && $provinceFilter !== "0") {
    $discoverConditions[] = "p.id = " . intval($provinceFilter);
}
if ($discoverSearch) {
    $discoverConditions[] = "(d.name LIKE '%{$discoverSearch}%' OR d.description LIKE '%{$discoverSearch}%')";
}
if (count($discoverConditions) > 0) {
    $discoverQuery .= " WHERE " . implode(" AND ", $discoverConditions);
}

$discoverResults = Database::search($discoverQuery);

// Vehicle Section
$vehicleCategoryFilter = $_GET["vehicle_category"] ?? null;
$vehicleSearch = $_GET["vehicle_search"] ?? null;

$vehicleQuery = "SELECT v.*, vt.name AS vehicle_type, m.url
                 FROM vehicles v
                 JOIN vehicle_type vt ON v.vehicle_type_id = vt.id
                 LEFT JOIN (
                     SELECT vehicles_id, MIN(id) AS media_id
                     FROM media
                     WHERE vehicles_id IS NOT NULL
                     GROUP BY vehicles_id
                 ) first_media ON v.id = first_media.vehicles_id
                 LEFT JOIN media m ON m.id = first_media.media_id";


$vehicleConditions = [];

if ($vehicleCategoryFilter && $vehicleCategoryFilter !== "0") {
    $vehicleConditions[] = "v.vehicle_type_id = " . intval($vehicleCategoryFilter);
}

if ($vehicleSearch) {
    $vehicleConditions[] = "v.model LIKE '%$vehicleSearch%'";
}

if (count($vehicleConditions) > 0) {
    $vehicleQuery .= " WHERE " . implode(" AND ", $vehicleConditions);
}

$vehicleResults = Database::search($vehicleQuery);


//Guide Section
$guideSortBy = $_GET["guide_sort"] ?? "default";
$guideSearch = $_GET["guide_search"] ?? null;

$guideQuery = "SELECT g.*, m.url
FROM guides g
LEFT JOIN (
    SELECT guides_id, MIN(id) AS media_id
    FROM media
    WHERE guides_id IS NOT NULL
    GROUP BY guides_id
) first_media ON g.id = first_media.guides_id
LEFT JOIN media m ON m.id = first_media.media_id;
";
$guideConditions = [];

if ($guideSearch) {
    $guideConditions[] = "(guide_name LIKE '%{$guideSearch}%' OR languages LIKE '%{$guideSearch}%')";
}

if (count($guideConditions) > 0) {
    $guideQuery .= " WHERE " . implode(" AND ", $guideConditions);
}

if ($guideSortBy === "experience") {
    $guideQuery .= " ORDER BY experience_years DESC";
}

$guideResults = Database::search($guideQuery);


?>
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

    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="loadDestinations(); loadVehicles(); loadGuides();">

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
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

    <!-- Discover Section Start -->
    <div class="container-fluid destination py-5" id="discover-section">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Discover</h5>
                <h1 class="mb-0">All Destinations, Foods, Cultural Events in Sri Lanka</h1>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <form class="input-group" method="GET" action="destination.php#discover-section">
                        <input type="text" class="form-control rounded-pill border-success py-3 ps-4 pe-5" placeholder="Search anything..." name="discover_search" value="<?= $discoverSearch ?>">
                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-success py-3 px-4 pe-5" name="category">
                                <option value="0" <?= ($categoryFilter === "0" || is_null($categoryFilter)) ? 'selected' : '' ?>>Filter by Category - All</option>
                                <option value="1" <?= $categoryFilter === "1" ? 'selected' : '' ?>>Destination</option>
                                <option value="2" <?= $categoryFilter === "2" ? 'selected' : '' ?>>Food</option>
                                <option value="3" <?= $categoryFilter === "3" ? 'selected' : '' ?>>Culture</option>
                            </select>
                        </div>
                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-success py-3 px-4" name="province">
                                <option value="0" <?= ($provinceFilter === "0" || is_null($provinceFilter)) ? 'selected' : '' ?>>All Provinces</option>
                                <option value="1" <?= $provinceFilter === "1" ? 'selected' : '' ?>>Central Province</option>
                                <option value="2" <?= $provinceFilter === "2" ? 'selected' : '' ?>>Eastern Province</option>
                                <option value="3" <?= $provinceFilter === "3" ? 'selected' : '' ?>>Northern Province</option>
                                <option value="4" <?= $provinceFilter === "4" ? 'selected' : '' ?>>North Central Province</option>
                                <option value="5" <?= $provinceFilter === "5" ? 'selected' : '' ?>>North Western Province</option>
                                <option value="6" <?= $provinceFilter === "6" ? 'selected' : '' ?>>Sabaragamuwa Province</option>
                                <option value="7" <?= $provinceFilter === "7" ? 'selected' : '' ?>>Southern Province</option>
                                <option value="8" <?= $provinceFilter === "8" ? 'selected' : '' ?>>Uva Province</option>
                                <option value="9" <?= $provinceFilter === "9" ? 'selected' : '' ?>>Western Province</option>
                            </select>
                        </div>
                        <div class="input-group-append ms-3">
                            <button class="btn btn-success rounded-pill py-3 px-4" type="submit">Search</button>
                        </div>
                        <div class="input-group-append ms-3">
                            <a class="btn btn-danger rounded-pill py-3 px-4" type="button" href="destination.php#discover-section">Clear</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4" id="destination-card-container">
                            <?php while ($row = $discoverResults->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="<?php echo $row['url']; ?>" alt="<?= $row['name'] ?>">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?type=discover&id=<?= $row['id'] ?>" class="btn btn-success text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3"><?= $row['name'] ?></h4>
                                            <p class="text-white-50 mb-0"><?= $row['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="col-12 text-center">
                            <div class="pagination d-flex justify-content-center mt-5" id="discover-pagination-links">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Discover Section End -->

    <!-- Services Section Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            
            <!-- Vehicles Subsection -->
            <div class="mx-auto text-center mb-5" style="max-width: 900px;" id="vehicle-section">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Available Vehicles</h1>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <form class="input-group" method="GET" action="destination.php#vehicle-section">
                        <input type="text" class="form-control rounded-pill border-success py-3 ps-4 pe-5" placeholder="Search vehicles..." name="vehicle_search" value="<?= $vehicleSearch ?>">
                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-success py-3 px-4 pe-5" name="vehicle_category">
                                <option value="0" <?= ($vehicleCategoryFilter === "0" || is_null($vehicleCategoryFilter)) ? 'selected' : '' ?>>All Categories</option>
                                <option value="1" <?= $vehicleCategoryFilter === "1" ? 'selected' : '' ?>>Tuk Tuk</option>
                                <option value="2" <?= $vehicleCategoryFilter === "2" ? 'selected' : '' ?>>Car</option>
                                <option value="3" <?= $vehicleCategoryFilter === "3" ? 'selected' : '' ?>>Van</option>
                                <option value="4" <?= $vehicleCategoryFilter === "4" ? 'selected' : '' ?>>Bus</option>
                            </select>
                        </div>
                        <div class="input-group-append ms-3">
                            <button class="btn btn-success rounded-pill py-3 px-4" type="submit">Search</button>
                        </div>
                        <div class="input-group-append ms-3">
                            <a class="btn btn-danger rounded-pill py-3 px-4" type="button" href="destination.php#vehicle-section">Clear</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="vehicles-tab" class="tab-pane fade show p-0 active">
                        <div class="row g-4" id="vehicle-cards-container">
                            <?php while ($row = $vehicleResults->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6 vehicle-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="<?php echo $row['url']; ?>" alt="<?= $row['model'] ?>">
                                        <div class="destination-overlay p-4 ">
                                            <a href="destination-detail.php?type=vehicle&id=<?= $row['id'] ?>" class="btn btn-success text-white rounded-pill border py-2 px-3">Book Now</a>
                                            <h4 class="text-white mb-2 mt-3"><?= $row['model'] ?> (<?= $row['vehicle_type'] ?>)</h4>
                                            <p class="text-white-50 mb-0">Price: Rs. <?= $row['price_per_day'] ?> / day</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="col-12 text-center">
                            <div class="pagination d-flex justify-content-center mt-5" id="vehicle-pagination-links">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guides Subsection -->
            <div class="mx-auto text-center mt-5 mb-5" style="max-width: 900px;" id="guide-section">
                <h1 class="mb-0">Available Guides</h1>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <form class="input-group" method="GET" action="destination.php#guide-section">
                        <input type="text" class="form-control rounded-pill border-success py-3 ps-4 pe-5" placeholder="Search guides..." name="guide_search" value="<?= $guideSearch ?>">
                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-success py-3 px-4 pe-5" name="guide_sort">
                                <option value="default" <?= ($guideSortBy === "default" || is_null($guideSortBy)) ? 'selected' : '' ?>>Sort By</option>
                                <option value="rank" <?= $guideSortBy === "rank" ? 'selected' : '' ?>>Rank</option>
                                <option value="experience" <?= $guideSortBy === "experience" ? 'selected' : '' ?>>Experience</option>
                            </select>
                        </div>
                        <div class="input-group-append ms-3">
                            <button class="btn btn-success rounded-pill py-3 px-4" type="submit">Search</button>
                        </div>
                        <div class="input-group-append ms-3">
                            <a class="btn btn-danger rounded-pill py-3 px-4" type="button" href="destination.php#guide-section">Clear</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="guides-tab" class="tab-pane fade show p-0 active">
                        <div class="row g-4" id="guide-cards-container">
                            <?php while ($row = $guideResults->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6 guide-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="<?= $row['url'] ?>" alt="<?= $row['guide_name'] ?>">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?type=guide&id=<?= $row['id'] ?>" class="btn btn-success text-white rounded-pill border py-2 px-3">Hire Me</a>
                                            <h4 class="text-white mb-2 mt-3"><?= $row['guide_name'] ?></h4>
                                            <p class="text-white-50 mb-0">Languages: <?= $row['languages'] ?></p>
                                            <p class="text-white-50 mb-0">Experience: <?= $row['experience_years'] ?> years</p>
                                            <p class="text-white-50 mb-0">Rs. <?= $row['price_per_day'] ?>/day</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>
                        <div class="col-12 text-center">
                            <div class="pagination d-flex justify-content-center mt-5" id="guide-pagination-links">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

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