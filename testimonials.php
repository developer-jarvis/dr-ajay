<style>
  
    .testimonial-card {
        background: #fff;
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        text-align: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .quote-icon {
        font-size: 50px;
        color: #007bff;
        position: absolute;
        top: 20px;
        left: 20px;
        opacity: 0.2;
    }

    .testimonial-text {
        font-size: 18px;
        color: #333;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .testimonial-stars {
        color: #f5b301;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .testimonial-name {
        font-weight: 700;
        color: #007bff;
        margin-top: 10px;
    }

    .swiper-pagination.testimonial-pagination {
        position: relative;
        margin-top: 30px;
        text-align: center;
    }

    .swiper-pagination-bullet {
        background: #007bff !important;
        opacity: 0.4;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }

    @media(max-width:768px) {
        .testimonial-text {
            font-size: 16px;
        }

        .testimonial-card {
            padding: 30px 20px;
        }
    }
</style>

<section class="testimonial-section background py-5">
    <div class="container">
        <h2 class="text-center mb-4 title">What Our Patients Say</h2>
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">❝</div>
                        <p class="testimonial-text">"Dr. Ajay provided outstanding care. His calm nature and deep
                            knowledge helped me recover quickly."</p>
                        <div class="testimonial-stars">★★★★★</div>
                        <h5 class="testimonial-name">– Ramesh Kumar</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">❝</div>
                        <p class="testimonial-text">"Highly professional and empathetic doctor. The clinic is very clean
                            and well-managed."</p>
                        <div class="testimonial-stars">★★★★★</div>
                        <h5 class="testimonial-name">– Seema Gupta</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">❝</div>
                        <p class="testimonial-text">"One of the most trusted doctors in Patna. His treatment worked
                            wonders for me!"</p>
                        <div class="testimonial-stars">★★★★★</div>
                        <h5 class="testimonial-name">– Anjali Verma</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">❝</div>
                        <p class="testimonial-text">"Thank you, Dr. Ajay, for your guidance and support throughout my
                            treatment."</p>
                        <div class="testimonial-stars">★★★★★</div>
                        <h5 class="testimonial-name">– Vivek Singh</h5>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination testimonial-pagination"></div>
        </div>
    </div>
</section>

<script>
    var testimonialSwiper = new Swiper('.testimonialSwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: '.testimonial-pagination',
            clickable: true,
        },
        breakpoints: {
            0: { slidesPerView: 1 },
            768: { slidesPerView: 2 }
        }
    });
</script>