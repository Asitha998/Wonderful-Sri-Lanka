<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login - Wonderful Sri Lanka</title>
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
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/kandy.jpg') center center no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: var(--bs-light);
            padding: 40px;
            border-radius: 15px;
            /* No box-shadow */
            max-width: 500px;
            width: 100%;
        }

        .login-container h1 {
            color: var(--bs-primary);
            margin-bottom: 30px;
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            padding: 1rem 0.75rem;
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-primary:hover {
            background-color: #2a5324;
            border-color: #2a5324;
        }

        .modal-content {
            border-radius: 15px;
            /* No box-shadow */
        }

        .modal-header {
            background-color: var(--bs-primary);
            color: var(--bs-white);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .modal-footer {
            justify-content: center;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            display: none;
        }
    </style>
</head>

<body>

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container">
        <div class="login-container text-center">
            <h1 class="mb-4">Administrator Login</h1>
            <form id="adminLoginForm">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="adminEmail" placeholder="name@example.com" required>
                    <label for="adminEmail">Email address</label>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-3">Send Verification Code</button>
            </form>
        </div>
    </div>

    <!-- Verification Code Modal -->
    <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verificationModalLabel">Enter Verification Code</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">A 6-digit verification code has been sent to your email. Please enter it below to continue.</p>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="verificationCode" placeholder="######" maxlength="6" required pattern="\d{6}">
                        <label for="verificationCode">Verification Code</label>
                    </div>
                    <div id="verificationError" class="alert-danger text-center">
                        Incorrect code. Please try again.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="verifyCodeBtn" onclick="verifyCode()">Verify & Login</button>
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
        function verifyCode() {
            window.location.href = 'admin-dashboard.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const adminLoginForm = document.getElementById('adminLoginForm');
            const verificationModal = new bootstrap.Modal(document.getElementById('verificationModal'));
            const verificationCodeInput = document.getElementById('verificationCode');
            const verifyCodeBtn = document.getElementById('verifyCodeBtn');
            const verificationError = document.getElementById('verificationError');
            let sentCode = '123456'; // Simulated verification code

            adminLoginForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent actual form submission
                if (adminLoginForm.checkValidity()) {
                    // Simulate sending email and showing modal
                    verificationModal.show();
                    verificationCodeInput.value = ''; // Clear previous input
                    verificationError.style.display = 'none'; // Hide error message
                }
                adminLoginForm.classList.add('was-validated');
            });

            verifyCodeBtn.addEventListener('click', function() {
                const enteredCode = verificationCodeInput.value;
                if (enteredCode === sentCode) {
                    // Simulate successful login
                    alert('Login successful! Redirecting to dashboard.');
                    window.location.href = 'admin-dashboard.php'; // Redirect to admin dashboard
                } else {
                    verificationError.style.display = 'block'; // Show error message
                }
            });

            // Clear validation on modal close
            document.getElementById('verificationModal').addEventListener('hidden.bs.modal', function() {
                adminLoginForm.classList.remove('was-validated');
            });
        });
    </script>
</body>

</html>