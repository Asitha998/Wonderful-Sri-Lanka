<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Checkout - Wonderful Sri Lanka</title>
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
        .checkout-container {
            background-color: var(--bs-light);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .checkout-container h1,
        .checkout-container h3 {
            color: var(--bs-primary);
            margin-bottom: 25px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #ddd;
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--bs-primary);
            margin-top: 20px;
            text-align: right;
        }

        .btn-payhere {
            background-color: #1255ff;
            /* PayHere blue */
            border-color: #1255ff;
            color: white;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-payhere:hover {
            background-color: #003bb3;
            border-color: #003bb3;
            color: white;
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

    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://placehold.co/1920x600/35682D/FFFFFF?text=Checkout') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Confirm Your Booking</h3>
            <p class="text-white mb-0">Review your selections and proceed to payment</p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="checkout-container">
                    <h1 class="text-center mb-4">Booking Summary</h1>

                    <?php
                    // Retrieve data from GET parameters
                    $fullName = $_GET['fullName'] ?? 'N/A';
                    $email = $_GET['email'] ?? 'N/A';
                    $contactNumber = $_GET['contactNumber'] ?? 'N/A';
                    $destination = $_GET['destination'] ?? 'N/A';
                    $startDate = $_GET['startDate'] ?? 'N/A';
                    $endDate = $_GET['endDate'] ?? 'N/A';
                    $tourGuide = $_GET['tourGuide'] ?? 'none';
                    $accommodation = $_GET['accommodation'] ?? 'none';
                    $vehicle = $_GET['vehicle'] ?? 'none';
                    $specialRequests = $_GET['specialRequests'] ?? 'No special requests.';

                    $guideCost = floatval($_GET['guideCost'] ?? 0);
                    $accommodationCost = floatval($_GET['accommodationCost'] ?? 0);
                    $vehicleCost = floatval($_GET['vehicleCost'] ?? 0);
                    $numberOfDays = intval($_GET['numberOfDays'] ?? 0);

                    // Base destination booking cost (fixed)
                    $baseDestinationCost = 2000; // LKR

                    $totalAmount = $baseDestinationCost + $guideCost + $accommodationCost + $vehicleCost;

                    // PayHere details
                    $merchant_id = '121XXXX'; // Replace with your actual Merchant ID (test ID for sandbox)
                    $order_id = uniqid('booking_');
                    $items = [];
                    $items[] = "Destination Booking: " . ucwords(str_replace('-', ' ', $destination));
                    if ($tourGuide !== 'none') $items[] = "Guide: " . $tourGuide;
                    if ($accommodation !== 'none') $items[] = "Accommodation: " . $accommodation;
                    if ($vehicle !== 'none') $items[] = "Vehicle: " . $vehicle;
                    $item_description = implode(', ', $items);
                    ?>

                    <h3 class="mb-3">Your Details</h3>
                    <div class="row mb-4">
                        <div class="col-md-6"><strong>Name:</strong> <?php echo $fullName; ?></div>
                        <div class="col-md-6"><strong>Email:</strong> <?php echo $email; ?></div>
                        <div class="col-md-6"><strong>Contact:</strong> <?php echo $contactNumber; ?></div>
                    </div>

                    <h3 class="mb-3">Booking Details</h3>
                    <div class="row mb-4">
                        <div class="col-md-6"><strong>Destination:</strong> <?php echo ucwords(str_replace('-', ' ', $destination)); ?></div>
                        <div class="col-md-6"><strong>Travel Dates:</strong> <?php echo $startDate; ?> to <?php echo $endDate; ?> (<?php echo $numberOfDays; ?> days)</div>
                        <div class="col-md-6"><strong>Tour Guide:</strong> <?php echo ($tourGuide !== 'none') ? $tourGuide : 'None'; ?></div>
                        <div class="col-md-6"><strong>Accommodation:</strong> <?php echo ($accommodation !== 'none') ? $accommodation : 'None'; ?></div>
                        <div class="col-md-6"><strong>Vehicle:</strong> <?php echo ($vehicle !== 'none') ? $vehicle : 'None'; ?></div>
                        <div class="col-12"><strong>Special Requests:</strong> <?php echo $specialRequests; ?></div>
                    </div>

                    <h3 class="mb-3">Cost Breakdown</h3>
                    <div class="summary-item">
                        <span>Base Destination Booking</span>
                        <span>LKR <?php echo number_format($baseDestinationCost, 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span>Guide Service (<?php echo $numberOfDays; ?> days)</span>
                        <span>LKR <?php echo number_format($guideCost, 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span>Accommodation (<?php echo $numberOfDays; ?> nights)</span>
                        <span>LKR <?php echo number_format($accommodationCost, 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span>Vehicle Rental (<?php echo $numberOfDays; ?> days)</span>
                        <span>LKR <?php echo number_format($vehicleCost, 2); ?></span>
                    </div>
                    <div class="total-amount">
                        <span>Total Amount:</span>
                        <span>LKR <?php echo number_format($totalAmount, 2); ?></span>
                    </div>

                    <h3 class="mt-5 mb-3 text-center">Proceed to Payment</h3>
                    <form id="payhereForm" method="post" action="https://sandbox.payhere.lk/pay/checkout">
                        <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>">
                        <input type="hidden" name="return_url" value="http://localhost/wonderfulsrilanka/success.php">
                        <input type="hidden" name="cancel_url" value="http://localhost/wonderfulsrilanka/cancel.php">
                        <input type="hidden" name="notify_url" value="http://localhost/wonderfulsrilanka/notify.php">
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                        <input type="hidden" name="items" value="<?php echo $item_description; ?>">
                        <input type="hidden" name="currency" value="LKR">
                        <input type="hidden" name="amount" value="<?php echo number_format($totalAmount, 2, '.', ''); ?>">
                        <input type="hidden" name="first_name" value="<?php echo $fullName; ?>">
                        <input type="hidden" name="last_name" value="">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="phone" value="<?php echo $contactNumber; ?>">
                        <input type="hidden" name="address" value="">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="country" value="Sri Lanka">
                        <div class="text-center">
                            <button type="submit" class="btn btn-payhere w-75 py-3" id="payNowBtn">Pay with PayHere</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="booking.php?place=<?php echo $destination; ?>" class="btn btn-link text-primary">Go Back to Edit Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Payment Status Modal -->
    <div class="modal fade" id="paymentStatusModal" tabindex="-1" aria-labelledby="paymentStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="paymentStatusModalLabel">Payment Status</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
                    <h4 class="text-success mb-3">Payment Initiated!</h4>
                    <p>Your booking payment process has been initiated. You will be redirected to PayHere to complete the transaction.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='booking.php'">Make Another Booking</button>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Go to Home</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const payhereForm = document.getElementById('payhereForm');
            const payNowBtn = document.getElementById('payNowBtn');
            const paymentStatusModal = new bootstrap.Modal(document.getElementById('paymentStatusModal'));

            payNowBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent immediate form submission

                paymentStatusModal.show(); // Show the modal

                // After a short delay, submit the form to PayHere
                setTimeout(function() {
                    payhereForm.submit();
                }, 1500); // 1.5 second delay
            });
        });
    </script>
</body>

</html>