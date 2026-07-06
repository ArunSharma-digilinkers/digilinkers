@extends('layouts.main')
@section('title', 'Boost Your Travel Business | Expert Digital Marketing')

@section('description', 'Grow your travel business with tailored digital marketing. Increase visibility, attract more customers & boost bookings with proven strategies.')
@section('content')

<main>

<div class="home-travel-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <h4>Supercharge Your Travel Business with Digital Marketing Excellence</h4>
                    <p>
                        Ready to elevate your travel business and attract more customers. Builds Your Tourism & Travel
                        Digital marketing machine to deliver growth.
                    </p>
                    <div class="default-btn mt-4">
                            <a href="tel:+91-9818000334" class="btn about-btn">Call to Us</a>
                    </div>
                </div>
                @include('components.request_quote')
            </div>
        </div>
    </div>
    <div class="hm-info-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="info-txt-box">
                        <h2>
                            Boost Your Travel Business with Cutting-Edge Digital Marketing
                        </h2>
                        <h4>
                            Tailored Digital Marketing for the Travel Industry
                        </h4>
                        <p>
                            At <strong>Digilinkers,</strong> we specialize in helping travel brands stand out in a
                            crowded market. Whether you're offering breathtaking beach vacations or cultural city
                            tours, we ensure your travel products are placed in front of the right audience with
                            precision and flair. Our expert digital marketing strategies are crafted to amplify
                            online visibility, foster engagement, and increase bookings. By blending creativity with
                            data-driven approaches,<strong> we tailor digital marketing solutions for the travel
                                industry </strong>that connect you to customers seeking unique and unforgettable
                            experiences. Together, we’ll help your brand dominate the digital space and thrive in a
                            competitive landscape.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="info-img-box">
                        <img src="{{ asset('img/hm-info-img.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="key-wrapper-travel section-entry">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Our Key Services</h2>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="travel-key">
                        <h3>Website <br>Development</h3>
                        <p>
                            Build a sleek, engaging website that captures
                            the essence of your travel offerings and converts visitors into loyal customers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="travel-key">
                        <h3>SEO & Content<br> Strategy</h3>
                        <p>
                            Improve your rankings on search engines
                            and attract organic traffic with carefully crafted content and keywords.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="travel-key">
                        <h3>Social Media <br>Marketing</h3>
                        <p>
                            Engage travelers on Instagram, Facebook,
                            Pinterest, and other platforms with visually captivating ads.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="travel-key">
                        <h3>PPC <br>Campaigns</h3>
                        <p>
                            Drive immediate traffic and results with
                            high-impact pay-per-click campaigns.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="travel-business-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="travel-business-box">
                        <h4 class="fs25">Why Work with Us for Your Travel Business ?</h4>
                        <ul class="lh30">
                            <li><span>Customized Campaigns :</span> We create digital marketing strategies that align
                                with your business vision, whether your focus is on local travelers or international
                                tourism.
                            </li>
                            <li><Span>Eye-Catching Visuals :</Span> Highlight the beauty and allure of your destinations
                                with striking, shareable content.
                            </li>
                            <li><span>Proven Success :</span> Our methods are proven to drive traffic, generate leads,
                                and maximize your ROI.
                            </li>
                            <li><span>End-to-End Solutions :</span> From SEO to social media management, we provide
                                all-in-one digital marketing services for the travel industry.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="form-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-travel-img">
                        <img src="{{ asset('img/travel-contact.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="travel-form-wrapper">
                        <form>
                            <div class="contact-form-inner-wrap mr-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mrb30">Take the First Step Toward Success <br> Start Now!</h3>
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-contact">
                                                        <label for="inputName">First Name</label>
                                                        <input type="text" class="form-control-box" id="inputName"
                                                            name="name" placeholder="Enter first name"
                                                            autocomplete="one-time-code">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group-contact">
                                                        <label for="inputPhone">Last Name</label>
                                                        <input type="text" class="form-control-box" id="inputPhone"
                                                            name="phone" placeholder="Enter last Name"
                                                            autocomplete="one-time-code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-contact">
                                                        <label for="inputName">Mobile Number</label>
                                                        <input type="text" class="form-control-box" id="inputName"
                                                            name="name" placeholder="Enter mobile number"
                                                            autocomplete="one-time-code">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group-contact">
                                                        <label for="inputPhone">Email</label>
                                                        <input type="text" class="form-control-box" id="inputPhone"
                                                            name="phone" placeholder="Enter your email"
                                                            autocomplete="one-time-code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-cont-travel">
                                                <button type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div> <!--  .col-md-10 -->
                                </div> <!--  .row -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

@endsection
