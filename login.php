<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login / Signup - Wonderful Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/auth-styles.css" rel="stylesheet">

</head>

<body onload="loadLogin()">

    <?php include 'components/topbar.php'; ?>

    <div class="container-fluid position-relative p-0">

    </div>

    <div class="auth-page-wrapper" id="authPageWrapper">
        <div class="auth-image-panel auth-panel" id="authImagePanel">
        </div>
        <div class="auth-form-panel-wrapper auth-panel">
            <div class="auth-form-section" id="loginFormSection">
                <h2>Login to Your Account</h2>
                <form action="api/loginProcess.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="loginEmail" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <a href="#" class="toggle-link" onclick="showSignup()">Don't have an account? Sign Up</a>

                <div class="google-auth-container">
                    <div class="divider">
                        <span>or</span>
                    </div>
                    <button type="button" class="btn btn-google">
                        <i class="fab fa-google me-2"></i>
                        Continue with Google
                    </button>
                </div>
            </div>

            <div class="auth-form-section" id="signupFormSection">
                <h2>Create Your Account</h2>

                <form action="api/signupProcess.php" method="post">
                    <div class="form-group">
                        <input type="text" name="signupName" class="form-control" id="signupName" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="signupEmail" class="form-control" id="signupEmail" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="signupPhone" class="form-control" maxlength="10" id="signupPhone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="signupPassword" class="form-control" id="signupPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <a href="#" class="toggle-link" onclick="showLogin()">Already have an account? Login</a>
                <div class="google-auth-container">
                    <div class="divider">
                        <span>or</span>
                    </div>
                    <button type="button" class="btn btn-google">
                        <i class="fab fa-google me-2"></i>
                        Continue with Google
                    </button>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        var loginimg = "img/new/loginbkg.jpg";
        var signupimg = "img/new/signupbkg.jpg";

        function showSignup() {
            const authPageWrapper = document.getElementById("authPageWrapper");
            const authImagePanel = document.getElementById("authImagePanel");

            authPageWrapper.classList.add("signup-active");
            authImagePanel.style.backgroundImage = "url('" + signupimg + "')";
        }

        function showLogin() {
            const authPageWrapper = document.getElementById("authPageWrapper");
            const authImagePanel = document.getElementById("authImagePanel");

            authPageWrapper.classList.remove("signup-active");
            authImagePanel.style.backgroundImage = "url('" + loginimg + "')";
        }

        function loadLogin() {
            let headerHeight = 0;
            const topbar = document.querySelector(".container-fluid.bg-primary");
            const navbar = document.querySelector(
                ".container-fluid.position-relative.p-0"
            );
            const copyright = document.querySelector(".container-fluid.copyright");

            if (topbar && window.getComputedStyle(topbar).display !== "none")
                headerHeight += topbar.offsetHeight;
            if (navbar) headerHeight += navbar.offsetHeight;

            let footerHeight = 0;
            if (copyright) footerHeight += copyright.offsetHeight;

            document.documentElement.style.setProperty(
                "--header-height",
                `${headerHeight}px`
            );
            document.documentElement.style.setProperty(
                "--footer-height",
                `${footerHeight}px`
            );

            const authImagePanel = document.getElementById("authImagePanel");
            authImagePanel.style.backgroundImage = "url('" + loginimg + "')";
        }
    </script>

</body>

</html>