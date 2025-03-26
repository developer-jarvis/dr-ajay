<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- GLightbox CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<style>
    .gallery img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px;
    }
</style>
<style>
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #777;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: var(--primary-color);
    }
</style>

<section id="imageGallery" class="py-5 gallery background">
    <div class="container">
        <h2 class="text-center mb-4 title">Our Gallery</h2>
        <div class="swiper myGallerySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-1-more-award.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-1-more-award.jpg" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg"
                        class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg"
                            alt="Gallery Image 2">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-gallery-patna.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-gallery-patna.jpg" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-saurabh-7.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-saurabh-7.jpg" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-award-3.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-award-3.jpg" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr._ajay_award-2.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr._ajay_award-2.jpg" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr.ajay awards.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr.ajay awards.jpg" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/drajay-clinic-patna-4.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/drajay-clinic-patna-4.jpg" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/drajay-clinic-patna.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/drajay-clinic-patna.jpg" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/drajay-clinic-patna2.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/drajay-clinic-patna2.jpg" alt="Gallery Image 10">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-new.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-new.jpg" alt="Gallery Image 10">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="assets/images/gallery/dr-ajay-new-1.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/dr-ajay-new-1.jpg" alt="Gallery Image 10">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="assets/images/gallery/bia-program.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/bia-program.jpg" alt="Gallery Image 10">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="assets/images/gallery/bia-program-8.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/bia-program-8.jpg" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/bia-program-3.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/bia-program-3.jpg" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/bia-program-2.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/bia-program-2.jpg" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/gallery/bia-program-1.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="assets/images/gallery/bia-program-1.jpg" alt="Gallery Image 10">
                    </a>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>

<!-- ==================================================================================== -->
<script>
    var swiper = new Swiper(".myGallerySwiper", {
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            0: { slidesPerView: 1 },      // Mobile
            768: { slidesPerView: 2 },    // Tablet
            992: { slidesPerView: 4 },    // Desktop
        },
    });

    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
</script>