<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Us - Wonderful Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
     <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/home/gaide.jpg') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Contact Us</h3>
            <p class="text-white mb-0">Reach out with any inquiries or in case of an emergency.</p>
        </div>
    </div>
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Contact Us</h5>
                <h1 class="mb-0">Contact For Any Query</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="text-center mb-4">
                            <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                            <h4 class="text-primary">Address</h4>
                            <p class="mb-0">123 Main Street, <br> Colombo, Sri Lanka</p>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">+94 71 234 5678</p>
                            <p class="mb-0">+94 77 876 5432</p>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0">info@wonderfulsrilanka.com</p>
                            <p class="mb-0">support@wonderfulsrilanka.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-2 text-primary">Send us a message</h3>
                    <p class="mb-4">Have a question, need support, or want to provide feedback? Fill out the form below and we'll get back to you as soon as possible.</p>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select border-0" id="subject" required>
                                        <option value="">Select Subject</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Support">Support</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div id="contactSuccessMessage" class="alert alert-success mt-4 text-center" style="display: none;">
                        Thanks! Your message has been sent. We'll get back to you soon.
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded w-100"
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7960000000003!2d79.85966461477145!3d6.908000000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591605b0a377%3A0x6e7e0d3c0d8b0c8!2sColombo!5e0!3m2!1sen!2slk!4v1678901234567!5m2!1sen!2slk"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Emergency Services Section -->
    <div class="container-fluid py-5 bg-light" id="emergencyServices">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Stay Safe</h5>
                <h1 class="mb-0">Emergency Contacts</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="bg-white rounded p-4 shadow-sm">
                        <h4 class="text-primary mb-3 text-center">Important Hotlines in Sri Lanka</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-ambulance fa-2x text-danger me-3"></i>
                                <div>
                                    <strong>1990 - Suwa Seriya Ambulance Service</strong><br>
                                    <small class="text-muted">24/7 Free Emergency Medical Service</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-shield fa-2x text-dark me-3"></i>
                                <div>
                                    <strong>119 - Sri Lanka Police Emergency</strong><br>
                                    <small class="text-muted">For all police emergencies</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-secret fa-2x text-info me-3"></i>
                                <div>
                                    <strong>1912 - Tourist Police</strong><br>
                                    <small class="text-muted">Dedicated support for tourists</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-info-circle fa-2x text-primary me-3"></i>
                                <div>
                                    <strong>011-2437061 - Sri Lanka Tourism Information Desk</strong><br>
                                    <small class="text-muted">General tourism inquiries</small>
                                </div>
                            </li>
                        </ul>
                        <p class="mt-4 text-center text-muted">
                            For quick assistance, remember our platform also features an SOS system on the homepage for immediate help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WhatsApp/Chat Assistant Note -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="bg-white rounded p-4 shadow-sm">
                        <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                        <h3 class="text-primary mb-3">Need Quick Help While Traveling?</h3>
                        <p class="mb-4">
                            Chat with us directly on WhatsApp for instant assistance, travel tips, or any urgent queries. Our chat assistant is available to help you make the most of your trip!
                        </p>
                        <a href="https://wa.me/94712345678" target="_blank" class="btn btn-success rounded-pill py-3 px-5">
                            <i class="fab fa-whatsapp me-2"></i> Chat on WhatsApp
                        </a>
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
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent actual form submission
            // Basic validation (HTML5 'required' handles most)
            if (this.checkValidity()) {
                document.getElementById('contactSuccessMessage').style.display = 'block';
                this.reset(); // Clear the form
                this.classList.remove('was-validated'); // Remove validation styles
            } else {
                this.classList.add('was-validated'); // Add Bootstrap's validation styles
            }
        });
    </script>
</body>
</html>