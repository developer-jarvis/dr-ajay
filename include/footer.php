<style>
    .footer-section {
        background: var(--tertiary-color);
        color: var(--secondary-color);
        padding: 40px 0;
        font-size: 14px;
    }

    .footer-section h4 {
        color: var(--secondary-color);
        font-weight: bold;
        margin-bottom: 15px;
    }

    .footer-section p {
        line-height: 1.8;
        color: var(--primary-color);
    }

    .footer-section .contact-info a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .footer-section .contact-info a:hover {
        color: var(--secondary-color);
        transform: scale(1.04);
        transition: 0.3s ease;
    }

    .footer-section .contact-info i {
        margin-right: 10px;
        color: var(--primary-color);
    }

    .footer-section .social-media-icons {
        margin-top: 20px;
    }

    .footer-section .social-media-icons ul {
        padding: 0;
        list-style: none;
    }

    .footer-section .social-media-icons li {
        display: inline-block;
        margin-right: 15px;
    }

    .footer-section .social-media-icons a {
        font-size: 20px;
        color: var(--tertiary-color);
        transition: color 0.3s ease;
    }

    .footer-section .social-media-icons a:hover {
        color: var(--tertiary-color);

    }

    .footer-section .contact-info a {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .footer-section .contact-info i {
        color: var(--primary-color);
        font-size: 25px;
    }

    .footer-bottom {
        border-top: 1px solid var(--secondary-color);
        padding: 15px 0;
        text-align: center;
        font-size: 15px;
    }

    .footer-bottom a {
        font-weight: bold;
        color: var(--primary-color);
    }

    .footer-bottom a:hover {
        color: var(--tertiary-color);
    }

    .social-media-icons i {
        background: var(--secondary-color);
        padding: 15px;
        border-radius: 15px;
        color: var(--accent-color);
    }

    .social-media-icons i:hover {
        transform: scale(1.04);
        transition: 0.3s ease;
        rotate: 360deg;
    }

    .footer-section {
        position: relative;
        overflow: hidden;
    }

    .wave-container {
        position: relative;
        width: 100%;
        height: 100px;
        overflow: hidden;
    }

    .wave-container svg {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        animation: wave-animation 10s linear infinite;
    }

    @keyframes wave-animation {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<section class="footer-section">
    <div class="container">
        <div class="row justify-content-between">
            <!-- About Company -->
            <div class="col-md-4 mb-4">
                <h4>About </h4>
                <p class="mt-3">Dr. Ajay Kumar is a renowned specialist in diabetes care, dedicated to empowering
                    patients with advanced treatment strategies and personalized care. With years of expertise and a
                    commitment to improving lives, he combines medical innovation with compassionate guidance to ensure
                    optimal health outcomes.
                </p>
            </div>

            <!-- Company Logo & Social Links -->
            <div class="col-md-4 mb-4 text-center">
                <div class="py-2">
                    <a href="index.php"> <img src="assets/images/logo/logo.png" alt="Logo" class="img-fluid"
                            style="width: 200px;"></a>
                </div>
                <div class="social-media-icons">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-md-4 mb-4 contact-info">
                <h4>Get in Touch</h4>
                <p><a href="#"><i class="fa fa-map-marker-alt"></i>Park, C50/2F, Boring Rd, beside Healthy Minds Clinic,
                        near SK Puri, Sri Krishna Puri, Patna, Bihar 800001
                    </a></p>
                <hr>
                <p><a href="tel:+91 9899461700"><i class="fa fa-phone-alt"></i>+91 98994 61700</a></p>
                <hr>
                <p><a href="mailto:saurabhksingh.singh@gmail.com"><i
                            class="fa fa-envelope"></i>saurabhksingh.singh@gmail.com</a></p>
                <hr>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2024 All Rights Reserved. Made with ❤️ by <a href="https://genmish.com/"
                    class="text-danger">Genmish.com</a></p>
        </div>
    </div>
</section>