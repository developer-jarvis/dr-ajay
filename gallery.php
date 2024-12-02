<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<style>
    .gallery .cards img {
        cursor: pointer;
        transition: transform 0.2s;
        height: 300px;
        width: 100%;
        object-fit: cover; /* Better fit for image dimensions */
        background-color: var(--primary-color, #f8f9fa); /* Default color if variable isn't set */
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
        <div class="row">
            <div class="col-12 text-center py-4">
                <h2 class="">Our Gallery</h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center" id="imageGallery">
            <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                <a data-fancybox="gallery" href="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg">
                    <img src="assets/images/gallery/dr-ajay-extra-ordinary-contribution-in-medical-field.jpg" class="img-fluid img-thumbnail"
                        alt="Gallery Image 1">
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
            <div class="col-md-4 col-sm-6 cards pb-4 position-relative">
                <a data-fancybox="gallery" href="assets/images/gallery/dr._ajay_award_3.jpg">
                    <img src="assets/images/gallery/dr._ajay_award_3.jpg" class="img-fluid img-thumbnail"
                        alt="Gallery Image 3">
                </a>
            </div>
            
        </div>
    </div>
</section>

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
