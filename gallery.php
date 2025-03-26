<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/link.php'; ?>
    <title>Gallery | Glimpse of Dr. Ajay’s Clinic in Patna - Care & Excellence</title>

    <meta name="description"
        content="Explore the gallery of Dr. Ajay’s Clinic in Patna. View clinic photos, patient care highlights, and facilities showcasing our dedication to healthcare excellence.">
    <meta name="keywords"
        content="Dr. Ajay clinic photos, medical clinic gallery Patna, healthcare facility images, clinic infrastructure, patient care gallery, Dr. Ajay Boring Road, clinic interior images, doctor consultation room photos">
    <meta name="author" content="Dr. Ajay">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Gallery | Glimpse of Dr. Ajay’s Clinic in Patna">
    <meta property="og:description"
        content="Take a virtual tour through the gallery of Dr. Ajay’s Clinic — showcasing clinic facilities, patient care, and modern healthcare infrastructure in Patna.">
    <meta property="og:image" content="https://drajaysclinic.com/assets/images/gallery-banner.jpg">
    <meta property="og:url" content="https://drajaysclinic.com/gallery.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gallery | Glimpse of Dr. Ajay’s Clinic in Patna">
    <meta name="twitter:description"
        content="View photos of Dr. Ajay’s Clinic in Patna — a showcase of patient care, clinic infrastructure, and healthcare services.">
    <meta name="twitter:image" content="https://drajaysclinic.com/assets/images/gallery-banner.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://drajaysclinic.com/gallery.php" />

</head>
<!-- ========================================= -->
<?php include 'include/header.php'; ?>
<!-- ======================================== -->

<body>
    <style>
        .gallery-breadcrumb-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(assets/images/banner/gallery-banner.jpg);
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
            .gallery-breadcrumb-banner {
                height: 300px;
                background-size: cover;
                background-position: center;
            }
        }

        .gallery-breadcrumb-banner .breadcrumb {
            margin-bottom: 10px;
            font-weight: 700;
            text-align: center;
        }

        .gallery-breadcrumb-banner h1 {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .gallery-breadcrumb-banner h1 {
                font-size: 2.5rem;
            }

            .breadcrumb-item {
                font-size: 0.9rem;
            }
        }
    </style>
    <section class="gallery-breadcrumb-banner">
        <div class="container">
            <h1 class="breadcrumb-title text-white">Gallery</h1>
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ===========section starts from here=========================== -->
    <!-- ==================================================================================================== -->

    <style>
        .gallery .cards img {
            cursor: pointer;
            transition: transform 0.2s;
            height: 300px;
            width: 100%;
            object-fit: cover;
            /* Better fit for image dimensions */
            background-color: var(--primary-color, #f8f9fa);
            /* Default color if variable isn't set */
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .gallery {
            background-image: url(assets/images/banner/gallery-background.avif);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 50px 0;
        }

        .gallery h2 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .gallery img {
            border: 4px solid #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="gallery" id="imageGallery">
        <div class="container">
            <div class="row justify-content-center align-items-center" id="imageGallery">
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery"
                        href="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg">
                        <img src="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg"
                            class="img-fluid img-thumbnail" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/drajay-clinic-patna-4.jpg">
                        <img src="assets/images/gallery/drajay-clinic-patna-4.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr-saurabh-7.jpg">
                        <img src="assets/images/gallery/dr-saurabh-7.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/drajay-clinic-patna.jpg">
                        <img src="assets/images/gallery/drajay-clinic-patna.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/drajay-clinic-patna2.jpg">
                        <img src="assets/images/gallery/drajay-clinic-patna2.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr-ajay-gallery-patna.jpg">
                        <img src="assets/images/gallery/dr-ajay-gallery-patna.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr.ajay awards.jpg">
                        <img src="assets/images/gallery/dr.ajay awards.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr-ajay-1-more-award.jpg">
                        <img src="assets/images/gallery/dr-ajay-1-more-award.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr._ajay_award-2.jpg">
                        <img src="assets/images/gallery/dr._ajay_award-2.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div>
                <!-- <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                    <a data-fancybox="gallery" href="assets/images/gallery/dr._ajay_award_3.jpg">
                        <img src="assets/images/gallery/dr._ajay_award_3.jpg" class="img-fluid img-thumbnail"
                            alt="Gallery Image 3">
                    </a>
                </div> -->

            </div>
        </div>
    </section>
    <!-- =============================================================== -->
     <?php include 'include/footer.php'; ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-fancybox="gallery"]').fancybox({
            loop: true,
            buttons: [
                'slideShow',
                'thumbs',
                'close'
            ]
        });
    });
</script>

</html>