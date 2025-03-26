<style>
    .accordion-button {
        background-color: #fff;
        font-weight: 600;
        font-size: 18px;
        color: #333;
        border: none;
        box-shadow: none;
        transition: all 0.3s ease;
        padding: 18px 20px;
        border-radius: 10px !important;
    }

    .accordion-button:not(.collapsed) {
        background-color: #007bff;
        color: #fff;
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: transparent;
    }

    .accordion-item {
        background-color: #fff;
        border: none;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .accordion-body {
        padding: 20px;
        font-size: 16px;
        color: #555;
        line-height: 1.7;
        border-top: 1px solid #eee;
    }

    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.5 4.5l6 6 6-6L14.5 6l-6 6-6-6z'/%3E%3C/svg%3E");
        transform: rotate(0deg);
        transition: transform 0.3s ease;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(180deg);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23fff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.5 4.5l6 6 6-6L14.5 6l-6 6-6-6z'/%3E%3C/svg%3E");
    }

    @media screen and (max-width: 768px) {
        .faq-section h2.title {
            font-size: 26px;
        }

        .accordion-button {
            font-size: 16px;
            padding: 16px 18px;
        }
    }
</style>
<section class="faq-section my-5">
    <div class="container">
        <div class="py-2">
            <h2 class="text-center title">Frequently Asked Questions</h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What services does Dr. Ajay provide?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Dr. Ajay</strong> offers comprehensive psychiatric consultations, counseling, and
                        therapeutic treatments for mental health issues, including anxiety, depression, stress
                        management, and more.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where is Dr. Ajay’s clinic located?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dr. Ajay’s clinic is conveniently located in <strong>Boring Road, Patna, Bihar</strong>. Visit
                        the contact page for the exact address and directions.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How can I book an appointment with Dr. Ajay?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Booking an appointment with <strong>Dr. Ajay</strong> is simple. You can call the clinic
                        directly or fill out the appointment form available on our website for a hassle-free booking
                        experience.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What are the clinic’s operating hours?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The clinic is open from <strong>09:00 AM to 11:00 AM to 04:30 PM to 07:30 PM</strong>, Monday to Saturday. Prior
                        appointments are recommended.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>