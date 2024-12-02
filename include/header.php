<?php include 'include/head.php'; ?>
<!-- =================================================== -->
<style>
    #checkbox {
        display: none;
    }

    .toggle {
        position: relative;
        width: 50px;
        height: 50px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: transform 0.5s ease-in-out;
    }

    .bars {
        width: 80%;
        height: 6px;
        background-color: var(--secondary-color);
        border-radius: 10px;
    }

    #bar2 {
        transition: transform 0.6s ease;
    }

    #bar1,
    #bar3 {
        width: 50%;
    }

    #checkbox:checked+.toggle .bars {
        position: absolute;
        transition: transform 0.5s ease-in-out;
    }

    #checkbox:checked+.toggle #bar2 {
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    #checkbox:checked+.toggle #bar1 {
        width: 100%;
        transform: rotate(45deg);
        transition: transform 0.5s ease-in-out;
    }

    #checkbox:checked+.toggle #bar3 {
        width: 100%;
        transform: rotate(-45deg);
        transition: transform 0.5s ease-in-out;
    }

    #checkbox:checked+.toggle {
        transform: rotate(360deg);
        transition: transform 0.6s ease-in-out;
    }

    .navbar {
        transition: background-color 0.3s ease-in-out;
        background-color: var(--tertiary-color);

        width: 100%;
        z-index: 999;
    }

    .navbar.fixed-top {
        background-color: var(--tertiary-color);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
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

    .navbar .nav-item .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background-color: var(--secondary-color);
        left: 0;
        bottom: -5px;
        transition: width 0.3s ease;
    }

    .navbar .nav-item:hover .nav-link::after {
        width: 100%;
    }

    .navbar.fixed-top .nav-item .nav-link {
        color: var(--primary-color);
    }
</style>
<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo/logo.png" alt="" style="width: 150px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="">
                <input type="checkbox" id="checkbox">
                <label for="checkbox" class="toggle">
                    <div class="bars" id="bar1"></div>
                    <div class="bars" id="bar2"></div>
                    <div class="bars" id="bar3"></div>
                </label>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#imageGallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn " data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        Get Appointment
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- =================================== -->
 <?php include 'modal.php'; ?>

 <!-- ================================== -->

<script>
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        const navbar = document.querySelector('.navbar');
        const navLinks = document.querySelectorAll('.navbar .nav-item .nav-link');

        if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
            navbar.classList.add("fixed-top");
            navLinks.forEach(link => {
                link.style.color = 'var(--primary-color)';
            });
        } else {
            navbar.classList.remove("fixed-top");
            navLinks.forEach(link => {
                link.style.color = 'var(--primary-color)';
            });
        }
    }
</script>