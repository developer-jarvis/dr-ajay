<!-- ================== Notification Bar ================== -->
<style>
    .doctor-notification-bar {
        width: 100%;
        background: linear-gradient(90deg, #c8b6ff, #b8e0ff, #ffd6e0);
        color: var(--primary-color);
        padding: 8px 0;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        box-shadow: 0 2px 10px rgba(200, 182, 255, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .doctor-notification-text {
        white-space: nowrap;
        display: inline-block;
        animation: scrollLeft 15s linear infinite;
        font-weight: 700;
        font-size: 14px;
        text-shadow: 0 0 4px rgba(44, 0, 62, 0.2);
        letter-spacing: 0.3px;
    }

    @keyframes scrollLeft {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<div class="doctor-notification-bar" id="notificationBar">
    <div class="doctor-notification-text">
        Dr. Ajay's clinic is open for consultations on diabetes, hypertension, and general health care. Book your
        appointment today!
    </div>
</div>

<!-- ======================== Navbar ======================== -->
<style>
    .navbar {
        transition: background-color 0.3s ease-in-out;
        background-color: var(--tertiary-color);
        padding: 0;
        width: 100%;
        z-index: 998;
        margin-top: 40px;
    }

    .navbar.fixed-top {
        background-color: var(--tertiary-color);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        margin-top: 35px;
    }

    .navbar .nav-item .nav-link {
        font-size: 18px;
        font-weight: 600;
        color: var(--primary-color);
        transition: color 0.3s ease-in-out;
        padding: 10px;
        position: relative;
    }

    .nav-item .nav-link:hover {
        color: var(--primary-color);
    }

    .navbar .nav-item:not(.dropdown) .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background-color: var(--secondary-color);
        left: 0;
        bottom: 0;
        transition: width 0.3s ease;
    }

    .navbar .nav-item:not(.dropdown):hover .nav-link::after {
        width: 100%;
    }

    @media (min-width: 992px) {

        .navbar-toggler,
        .d-lg-none {
            display: none !important;
        }

        .navbar-collapse {
            display: flex !important;
        }
    }

    .dropdown .dropdown-menu .dropdown-item {
        font-size: 16px;
        padding: 7px 15px;
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }
</style>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo/logo.png" alt="Dr Ajay Clinic Logo" style="width: 130px;">
        </a>

        <!-- Toggler button (only visible on md and below) -->
        <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Nav-items for lg and above (hide on md) -->
        <div class="collapse navbar-collapse d-none d-lg-block">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-2"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item me-2"><a class="nav-link" href="about-us.php">About</a></li>
                <li class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdownLg" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdownLg">
                        <li><a class="dropdown-item" href="diabetes-management.php">Diabetes Management</a></li>
                        <li><a class="dropdown-item" href="hypertension-management.php">Hypertension Management</a></li>
                        <li><a class="dropdown-item" href="thyroid-disorder-management.php">Thyroid Disorders
                                Management</a></li>
                        <li><a class="dropdown-item" href="common-seasonal-infections.php">Common Seasonal
                                Infections</a></li>
                        <li><a class="dropdown-item" href="general-medical-services.php">General Medical Services</a>
                        </li>
                        <li><a class="dropdown-item" href="diagnostic-services.php">Diagnostic Services</a></li>
                        <li><a class="dropdown-item" href="patient-education-and-support.php">Patient Education and
                                Support</a></li>
                    </ul>
                </li>
                <li class="nav-item me-2"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item me-2"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                <li class="nav-item me-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalId"><span>Get
                            Appointment</span></button>
                </li>
            </ul>
        </div>

        <!-- Offcanvas for md and below only -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel" style="margin-top: 36px;">
            <div class="offcanvas-header">
                <img src="assets/images/logo/logo.png" alt="Dr Ajay Clinic Logo" style="width: 130px;">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdownSm" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdownSm">
                            <li><a class="dropdown-item" href="diabetes-management.php">Diabetes Management</a></li>
                            <li><a class="dropdown-item" href="hypertension-management.php">Hypertension Management</a>
                            </li>
                            <li><a class="dropdown-item" href="thyroid-disorder-management.php">Thyroid Disorders
                                    Management</a></li>
                            <li><a class="dropdown-item" href="common-seasonal-infections.php">Common Seasonal
                                    Infections</a></li>
                            <li><a class="dropdown-item" href="general-medical-services.php">General Medical
                                    Services</a></li>
                            <li><a class="dropdown-item" href="diagnostic-services.php">Diagnostic Services</a></li>
                            <li><a class="dropdown-item" href="patient-education-and-support.php">Patient Education and
                                    Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#imageGallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item mt-3">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#modalId">Get Appointment</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php include 'modal.php'; ?>

<script>
    window.onscroll = function () { scrollFunction(); };

    function scrollFunction() {
        const navbar = document.querySelector('.navbar');
        if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
            navbar.classList.add("fixed-top");
        } else {
            navbar.classList.remove("fixed-top");
        }
    }
</script>