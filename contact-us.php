<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/link.php'; ?>
    <title>Contact Dr. Ajay | Book Appointment & Clinic Location in Patna</title>

    <meta name="description"
        content="Contact Dr. Ajay’s Clinic in Patna for expert consultation in diabetes, hypertension, and general medicine. Find our address, phone number, and book appointments easily.">
    <meta name="keywords"
        content="Contact Dr. Ajay, Book appointment Patna, Physician contact Patna, Doctor consultation Boring Road, Clinic address Patna, Dr. Ajay phone number, medical appointment Patna, visit doctor Patna">
    <meta name="author" content="Dr. Ajay">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Contact Dr. Ajay | Appointment & Location in Patna">
    <meta property="og:description"
        content="Get in touch with Dr. Ajay’s Clinic on Boring Road, Patna. Book your appointment, call us, or find clinic directions.">
    <meta property="og:image" content="https://drajaysclinic.com/assets/images/contact-banner.jpg">
    <meta property="og:url" content="https://drajaysclinic.com/contact-us.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Dr. Ajay | Appointment & Location in Patna">
    <meta name="twitter:description"
        content="Reach out to Dr. Ajay’s Clinic in Patna — book appointments, call directly, or visit the clinic for expert medical care.">
    <meta name="twitter:image" content="https://drajaysclinic.com/assets/images/contact-banner.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://drajaysclinic.com/contact-us.php" />

</head>
<!-- ==================================================================== -->
<?php include 'include/header.php'; ?>

<body>
    <style>
        .contact-breadcrumb-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(assets/images/banner/contact-banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 15px;
        }

        @media screen and (max-width: 768px) {
            .contact-breadcrumb-banner {
                height: 300px;
                background-size: cover;
                background-position: center;
            }
        }

        .contact-breadcrumb-banner .breadcrumb {
            margin-bottom: 10px;
            font-weight: 700;
            text-align: center;
        }

        .contact-breadcrumb-banner h1 {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .contact-breadcrumb-banner h1 {
                font-size: 2.5rem;
            }

            .breadcrumb-item {
                font-size: 0.9rem;
            }
        }
    </style>
    <section class="contact-breadcrumb-banner">
        <div class="container">
            <h1 class="breadcrumb-title text-white">Patient Education & Support</h1>
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patient Education & Support</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =========================================================== -->
    <?php include 'mail.php'; ?>
    <!-- ===========section starts from here=========================== -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="title mb-2">Get in Touch with Dr. Ajay</h2>
                <p class="subtitle">Have questions or need to book an appointment? We're always happy to assist you!</p>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-md-5 contact-det">
                    <div class="contact-details p-4  shadow rounded-3 bg-white">
                        <h3 class="subtitle mb-4 card-header bg-primary text-white">Contact Information</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3"><strong>Address:</strong> Boring Road, Patna</li>
                            <li class="mb-3"><strong>Phone:</strong> <a href="tel:+919876543210">+91 9876543210</a></li>
                            <li class="mb-3"><strong>Email:</strong> <a
                                    href="mailto:info@drajaysclinic.com">info@drajaysclinic.com</a></li>
                            <li><strong>Clinic Hours:</strong> Sunday: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form p-4 shadow rounded-3 bg-white">
                        <h3 class="subtitle mb-4 card-header text-white bg-primary">Send a Message</h3>
                        <form id="contactForm" action="" method="POST" class="needs-validation" novalidate>
                            <div class="form-group mb-3">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone *</label>
                                <input type="tel" class="form-control" id="phone" name="number" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Date *</label>
                                <input type="date" class="form-control" id="date" name="date" required
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message </label>
                                <textarea class="form-control" id="message" name="message" rows="5" ></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                            </div>
                            <button type="submit" class="btn w-100 py-2" name="send"><span>Submit</span></button>
                        </form>
                        <div id="contactFormSuccess" class="alert alert-success d-none mt-3" role="alert"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .contact-section {
            background: linear-gradient(135deg, #f8f9fc, #ffffff);
        }

        .contact-details a {
            color: #0d6efd;
            text-decoration: none;
        }

        .contact-det {
            position: sticky;
            top: 120px;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        .contact-form form input,
        .contact-form form textarea {
            border-radius: 0.5rem;
            border: 1px solid var(--primary-color);
            padding: 10px 12px;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }

        .contact-form form input:focus,
        .contact-form form textarea:focus {
            border-color: #0d6efd;
            outline: none;
        }

        .contact-form form button {
            background: #0d6efd;
            border: none;
            border-radius: 0.5rem;
            transition: background-color 0.3s;
        }

        .contact-form form button:hover {
            background: #0b5ed7;
        }
    </style>
    <!-- ============================================================================= -->
    <!-- ============================================================================ -->
    <?php include 'include/footer.php'; ?>
    <!-- ========================================================================== -->
</body>
<script>
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();

                    var firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</html>