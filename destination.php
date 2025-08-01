<?php
session_start();
require "api/connection.php";

$categoryFilter = $_GET["category"] ?? null;
$provinceFilter = $_GET["province"] ?? null;

$query = "SELECT 
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

$conditions = [];

if ($categoryFilter && $categoryFilter !== "all") {
    $conditions[] = "dc.name = '" . Database::$connection->real_escape_string($categoryFilter) . "'";
}
if ($provinceFilter && $provinceFilter !== "0") {
    $conditions[] = "p.id = " . intval($provinceFilter);
}

if (count($conditions) > 0) {
    $query .= " WHERE " . implode(" AND ", $conditions);
}

$results = Database::search($query);
?>
<!-- .. -->


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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
                <h5 class="section-title px-3">Discover</h5>
                <h1 class="mb-0">All Destinations in Sri Lanka</h1>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <form class="input-group" method="GET" action="destination.php">
                        <input type="text" class="form-control rounded-pill border-primary py-3 ps-4 pe-5" placeholder="Search anything..." name="search">
                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-primary py-3 px-4" name="category">
                                <option selected value="all">Filter by Category - All</option>
                                <option value="destination">Destination</option>
                                <option value="food">Food</option>
                                <option value="culture">Culture</option>
                            </select>
                        </div>

                        <div class="input-group-append ms-3">
                            <select class="form-select rounded-pill border-primary py-3 px-4" name="province">
                                <option selected>Select Province</option>
                                <option value="0">All</option>
                                <option value="1">Central Province</option>
                                <option value="2">Eastern Province</option>
                                <option value="3">Northern Province</option>
                                <option value="4">North Central Province</option>
                                <option value="5">North Western Province</option>
                                <option value="6">Sabaragamuwa Province</option>
                                <option value="7">Southern Province</option>
                                <option value="8">Uva Province</option>
                                <option value="9">Western Province</option>
                            </select>
                        </div>

                        <div class="input-group-append ms-3">
                            <button class="btn btn-primary rounded-pill py-3 px-4" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4" id="destination-cards-container">

                            <!-- <div class="col-lg-4 col-md-6 destination-card">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/home/sigiria.jpg" alt="Sigiriya">
                                    <div class="destination-overlay p-4">
                                        <a href="destination-detail.php?id=sigiriya" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                        <h4 class="text-white mb-2 mt-3">Sigiriya</h4>
                                        <p class="text-white-50 mb-0">Ancient rock fortress with frescoes and stunning views.</p>
                                    </div>
                                </div>
                            </div> -->

                            <?php while ($row = $results->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6 destination-card">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="<?= $row['url'] ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                                        <div class="destination-overlay p-4">
                                            <a href="destination-detail.php?id=<?= $row['id'] ?>" class="btn btn-primary text-white rounded-pill border py-2 px-3">View Details</a>
                                            <h4 class="text-white mb-2 mt-3"><?= htmlspecialchars($row['name']) ?></h4>
                                            <p class="text-white-50 mb-0"><?= htmlspecialchars($row['description']) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>



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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>