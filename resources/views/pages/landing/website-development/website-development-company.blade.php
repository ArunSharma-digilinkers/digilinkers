@extends('layouts.landing-main')

@section('title', 'Digilinkers – Trusted Website Development Company in Delhi')

@section('description', 'Digilinkers is a website development company creating smooth, SEO-friendly, and mobile-ready
websites designed to reflect your brand and grow your business.')

@section('keywords', 'website development services,website development company,web development agency,e commerce website
development,shopify website development')

@section('content')

<main>
    <div class="main-wrapper">
        <div class="main-cover">
            <div class="home-banner-wrapper section-entry-banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 mb-3">
                            <div class="carousel-captions dg-carousel-caption">
                                <p class="banner-heading">
                                    Running a business without a website?
                                </p>
                                <!-- <p class="banner-text">
                                We’ve Got You Covered!
                            </p> -->
                                <div class="mrb30">
                                    <p class="banner-text">
                                        Let’s fix that <span> professionally</span>
                                    </p>

                                </div>
                                <!-- <p class="banner-text banner-text-bold">
                                Digilinkers is here to fix that! We’ve Got You Covered!
                            </p> -->
                                <div class="mrb30">
                                    <p class="banner-text banner-text-bold">
                                        Fast and custom websites for growing brands and startups
                                    </p>
                                </div>
                                <ul class="points-list">
                                    <li>Full website setup starting at just <span>₹6,999</span></li>
                                    <li>WhatsApp, Call, and Lead Form Integration</li>
                                    <li>SEO-ready & mobile-friendly design</li>
                                    <li>FREE Hosting for 3 Months</li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="form-wrapper">
                                <div class="quote-form-container">
                                    <h2>Get Expert Help – Fill the Form in Just 1 Minute!</h2>
                                    <p>
                                        Our website development expert will contact you shortly to discuss your project
                                        and offer the best solution for your business needs.
                                    </p>


                                    <form class="quote-form"
                                        action="https://script.google.com/macros/s/AKfycbxvIJU-pEjxmb4HZQXubjSfzYjH2X2IzDneh2oqNfT4oQ71YxSTwc7yfopTLsEWSz94EQ/exec"
                                        onsubmit="return handleSubmit(this)" method="POST">
                                        <div class="form-group">
                                            <input type="text" placeholder="Full Name*" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" id="mobile" maxlength="10" pattern="\d{10}"
                                                inputmode="numeric" placeholder="Enter 10-digit number*" name="mobile"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address*" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" placeholder="Your Requirement/Query"
                                                name="message"></textarea>
                                        </div>
                                        <button type="submit" class="submit-btn" name="form_submit_two">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clients-page mt-5">
                <div class="container">
                    <!-- Clients Logos Section -->
                    <div class="row clients-logos">
                        <div class="col-lg-12">
                            <h2>
                                Our Clientele
                            </h2>
                        </div>

                        <div class="col-lg-12">
                            <div class="client-boxs">
                                <div class="client-logo-landing owl-carousel owl-theme">
                                    @foreach ($clients as $item)
                                    <div class="item">
                                        <img src="{{ asset('storage/client/' . $item->image) }}"
                                            class="img-fluid client-logo" alt="Client 1" loading="lazy">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ////////// services ///////////     -->
            <section class="services-wrapper section-entry py-5">
                <div class="container text-center">
                    <!-- Section Heading -->
                    <div class="mb-5">
                        <h1 class="fw-bold">Explore Our Website Development Services</h1>
                        <p class="text-muted">
                            At Digilinkers, we provide full-cycle web development solutions that blend design,
                            performance, and growth.
                            From business websites to scalable eCommerce stores, our services are tailored to boost your
                            brand and connect with your audience.
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="row g-4">
                        <!-- Service Card -->
                        <div class="col-md-6 col-lg-3">
                            <div class="service-card p-4 h-100">
                                <div class="icon mb-3">
                                    <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                                </div>
                                <h4 class="fw-semibold">eCommerce Development</h4>
                                <p class="small text-muted">
                                    Launch secure and user-friendly online stores with WooCommerce or Shopify, built for
                                    scalability and conversions.
                                </p>
                                      <div class="web-btn">
                                     <button type="button" class="btn mt-3" data-bs-toggle="modal"
                                    data-bs-target="#myModalThree">
                                    Get Started
                                </button>
                                </div>
                            </div>
                        </div>

                        <!-- Shopify -->
                        <div class="col-md-6 col-lg-3">
                            <div class="service-card p-4 h-100">
                                <div class="icon mb-3">
                                    <i class="fab fa-shopify fa-2x text-success"></i>
                                </div>
                                <h4 class="fw-semibold">Shopify Development</h4>
                                <p class="small text-muted">
                                    Build sleek, high-converting Shopify stores with custom themes, app integrations,
                                    and full store setup.
                                </p>
                                      <div class="web-btn">
                                     <button type="button" class="btn mt-3" data-bs-toggle="modal"
                                    data-bs-target="#myModalThree">
                                    Get Started
                                </button>
                                </div>
                            </div>
                        </div>

                        <!-- WordPress -->
                        <div class="col-md-6 col-lg-3">
                            <div class="service-card p-4 h-100">
                                <div class="icon mb-3">
                                    <i class="fab fa-wordpress fa-2x text-info"></i>
                                </div>
                                <h4 class="fw-semibold">WordPress Development</h4>
                                <p class="small text-muted">
                                    Fast, SEO-optimized, and mobile-responsive WordPress websites designed to match your
                                    brand perfectly.
                                </p>
                                     <div class="web-btn">
                                     <button type="button" class="btn mt-3" data-bs-toggle="modal"
                                    data-bs-target="#myModalThree">
                                    Get Started
                                </button>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel -->
                        <div class="col-md-6 col-lg-3">
                            <div class="service-card p-4 h-100">
                                <div class="icon mb-3">
                                    <i class="fab fa-laravel fa-2x text-danger"></i>
                                </div>
                                <h4 class="fw-semibold">Laravel Development</h4>
                                <p class="small text-muted">
                                    Robust, scalable web platforms with clean code, smart architecture, and room to
                                    grow.
                                </p>
                                <div class="web-btn">
                                     <button type="button" class="btn mt-3" data-bs-toggle="modal"
                                    data-bs-target="#myModalThree">
                                    Get Started
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- //////// SEO CTA section ///////// -->
            <div class="smo-cta-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="seo-cta-txt-box">
                                <h2>First impressions happen in seconds</h2>
                                <h3>Make yours count with a stunning website</h3>
                                <div class="cta-nav-btn mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModalThree">
                                        Let’s Get Started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-wrapper mt-2 mt-5 mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="info-wrap">
                                <div class="heading-box-wrap">
                                    <h3>
                                        Stop Chasing Clients, Start Impressing Them With Digilinkers – A Leading Website
                                        Development Company in Delhi
                                    </h3>
                                    <p>
                                        In today’s digital-first world, your website is your identity. Whether you're a
                                        small business owner, a startup, or an established brand, having a
                                        well-designed,
                                        functional, and fast-loading website is non-negotiable. That’s where our website
                                        development services come in. We build websites that not only look great but
                                        also
                                        perform flawlessly—helping you convert visitors into loyal customers.
                                    </p>
                                    <p>
                                        At Digilinkers, we offer complete website development services tailored to your
                                        business goals. From responsive design to SEO optimization, we ensure that your
                                        website works smoothly across all devices and ranks better on search engines.
                                        Whether you’re starting from scratch or revamping an existing site, we’ve got
                                        the
                                        tools and the team to make it happen.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-1-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-12">

                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-12">
                            <div class="cta-wrap">
                                <h5>You Deserve a Website That Converts, Engages, and Grows Your Business—We’ll Make It
                                    Happen</h5>
                                <p>We don’t just build websites—we build digital experiences that drive results. As your
                                    trusted web development partner in Delhi, we create high-performing, responsive, and
                                    visually striking websites designed to help your business thrive. In fact, we’re so
                                    confident in our work that we offer:</p>

                                <ul class="cta-feature">
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Free Website
                                            Consultation</strong></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Speed & UX
                                            Audit
                                            Included</strong></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Call Now: +91
                                            9818000334</strong></li>
                                </ul>
                                <div class="cta-nav-btn mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModalThree">
                                        Let's Build It
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //////// SEO CTA section ///////// -->
            <div class="seo-cta-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="seo-cta-txt-box">
                                <h2>Need a website for your business?</h2>
                                <h3>We build fast, mobile-friendly websites that work</h3>
                                <!-- CTA Button -->
                                <div class="cta-nav-btn mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModalThree">
                                        Let’s Do This
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //////// why choose section ///////// -->
            <div class="why-us-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                            <div class="heading-box-wrap section-spacer">
                                <h3><span>Why Choose Digilinkers?</span></h3>
                                <p>
                                    With over 6 years of experience, Digilinkers offers reliable and result-driven
                                    website
                                    development services tailored to every business type. We have the right team and
                                    resources to design, develop, and deploy websites that are fast, functional, and
                                    mobile-friendly. Our website development services are not just about building a site
                                    —
                                    they’re about building your brand’s online identity. Whether you're starting fresh
                                    or
                                    looking to revamp, our expert team ensures every element supports your growth. If
                                    you're
                                    searching for trusted website development services that combine creativity,
                                    technology,
                                    and strategy — you're in the right place.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one hm-mrg-icon">
                                <div class="icon">
                                    <img src="{{ asset('img/campaign.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>500+ Websites Delivered</h4>
                                <p class="hm-txt">
                                    Trusted by startups & enterprises across industries
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one mt30">
                                <div class="icon">
                                    <img src="{{ asset('img/wealth.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>Conversion-Focused Designs</h4>
                                <p class="hm-txt">Websites built to engage and convert visitors</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one mt30">
                                <div class="icon">
                                    <img src="{{ asset('img/managers.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>Dedicated Project Manager</h4>
                                <p class="hm-txt">One point of contact from start to launch</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one">
                                <div class="icon">
                                    <img src="{{ asset('img/innovation.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>Cutting-Edge Technologies</h4>
                                <p>We use the latest tech stacks for secure, scalable websites</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one mt30">
                                <div class="icon">
                                    <img src="{{ asset('img/24-hour-service.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>24/7 Technical Support</h4>
                                <p>We're here to resolve any issues—anytime!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-wrap-one mt30">
                                <div class="icon">
                                    <img src="{{ asset('img/business.png') }}" class="img-fluid" alt="">
                                </div>
                                <h4>Built for Business Growth</h4>
                                <p>Web solutions that scale with your goals</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- //////// SEO CTA section ///////// -->
            <div class="web-cta-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="seo-cta-txt-box">
                                <h2>Your website isn’t converting visitors into paying customers?</h2>
                                <div class="cta-nav-btn mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModalThree">
                                        Make My Website
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //////// faq section ///////// -->

            <div class="faq-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="heading-box-wrap">
                                <h6>Frequently Asked Questions</h6>
                                <h3>What Makes Us Different From Other Web Development Agencies</h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="accordion" id="faqAccordion">

                                <!-- Accordion Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How long does it take to build a website?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Timelines vary depending on complexity, but most business websites are
                                            completed
                                            within 2 to 6 weeks.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Do you offer a free consultation?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes! Click [Get a Free Consultation] to discuss your website needs, goals,
                                            and
                                            the best development approach.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What industries do you work with?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We develop websites for e-commerce, healthcare, real estate, education,
                                            startups, service-based businesses, and more.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What makes your web development services different?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We focus on performance, user experience, mobile responsiveness, and
                                            SEO-ready
                                            coding using the latest technologies like WordPress, Laravel, and custom
                                            PHP.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Can you work within my budget?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely! We offer flexible packages and custom development solutions that
                                            match your budget and business size.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            Will my website be mobile-friendly and SEO-optimized?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, all our websites are responsive across devices and follow on-page SEO
                                            best
                                            practices to help with visibility.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            How do you measure website success?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We measure success through load speed, usability, design quality, user
                                            engagement, lead generation, and conversions.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Item 8 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            Will I have a dedicated project manager?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes! Every client gets a dedicated project manager to ensure clear
                                            communication
                                            and timely project updates throughout the development process.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="faq-img-bg">
                                <!-- Optional image or background -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-3-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cta-wrap-3">
                                <h5>Ready to Build Your Dream Website?</h5>
                                <p>
                                    Let’s turn your vision into a digital reality. With our professional website
                                    development
                                    services, you don’t just get a website—you get a high-performing online asset that
                                    works
                                    as hard as you do. Whether it’s a custom-built site, e commerce website development,
                                    or
                                    seamless Shopify website development, we’ve got you covered.
                                </p>

                                <ul class="cta-feature">
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;No Hidden Fees </li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;100%
                                        Performance-Focused
                                        Development </li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Call Now: +91
                                        9818000334
                                    </li>
                                </ul>

                                <!-- CTA Button -->
                                <div class="cta-nav-btn mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModalThree">
                                        Contact us today for a free consultation.
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!--  .main-cover -->
        <!-- Modal -->
        <div class="modal fade" id="myModalThree" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Fill Your Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body modal-one">
                        <form id="popupFormthree"
                            action="https://script.google.com/macros/s/AKfycbxvIJU-pEjxmb4HZQXubjSfzYjH2X2IzDneh2oqNfT4oQ71YxSTwc7yfopTLsEWSz94EQ/exec"
                            onsubmit="return handleSubmit(this)" method="POST">

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name*" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email*" required>
                            </div>

                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" maxlength="10"
                                    pattern="\d{10}" inputmode="numeric" placeholder="Enter 10-digit number*" required>
                            </div>

                            <div class="mb-3">
                                <label for="website_type" class="form-label">Website Type</label>
                                <select class="form-select" id="website_type" name="website_type" required>
                                    <option value="" disabled selected>Select Website Type</option>
                                    <option value="Business">Business Website</option>
                                    <option value="E-commerce">E-commerce Website</option>
                                    <option value="Portfolio">Portfolio Website</option>
                                    <option value="Landing Page">Landing Page</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="cta-nav-btn1">
                                <button type="submit" class="btn btn-primary" name="form_submit_four">Submit</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <a href="https://api.whatsapp.com/send?phone=+91-9818000334&text=Hi, there" target="_blank">
            <div class="whatsapp-fixed">
                <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat Now
            </div>
        </a>

        <a href="tel:+91-9818000334">
            <div class="call-now-fixed">
                <i class="fas fa-phone"></i> Call Now
            </div>
        </a>

        <script>
        function handleSubmit(form) {
            setTimeout(() => {
                window.location.href = "{{ url('/website-development-company/thankyou') }}";
            }, 1000);
            return true;
        }
        </script>

    </div> <!--  .main-wrapper -->
</main>

@endsection