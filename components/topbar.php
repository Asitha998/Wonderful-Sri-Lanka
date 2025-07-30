<?php
// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">

        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">

                <?php
                if ($currentPage == 'login.php') {
                ?>
                    <a href="index.php" class="me-3 text-light"><small><i class="fa fa-home me-2"></i>Home</small></a>
                <?php
                } else {
                ?>
                    <a href="login.php" class="me-3 text-light"><small><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-dashboard me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->