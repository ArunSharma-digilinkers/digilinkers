@extends('layouts.main')
@section('title', 'Boost Your Furniture Brand | Expert Digital Marketing')

@section('description', 'Grow your furniture business with targeted digital marketing. Increase visibility, attract customers & drive sales with proven strategies.')
@section('content')

<main>

    <div class="furniture-form-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 mb-4">
                    <div class="furniture-banner-txt-wrap">
                        <h2>Transform Your Furniture Brand with Targeted Digital Marketing</h2>
                        <h3>
                            Boost your furniture brand with targeted digital marketing strategies to increase
                            visibility, attract the right customers, and drive sales effectively.
                        </h3>
                        
                        <div class="default-btn mt-4">
                            <a href="tel:+91-9818000334" class="btn about-btn">Call to Us</a>
                        </div>
                    </div>
                </div>
                @include('components.request_quote')
            </div>
        </div>
    </div>

    <div class="furniture-info-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 mb-5">
                    <div class="furniture-info-box">
                        <h2>Digital Marketing Solution for the Furniture Industry</h2>
                        <p>
                            We specialize in empowering furniture brands to dominate the digital landscape. From
                            elegant dining sets to luxurious sofas, we ensure your products are showcased to the
                            right audience with precision and creativity. Our tailored digital marketing solutions
                            for the furniture industry, helping brands reach new heights by boosting online
                            visibility, engagement, and sales. From crafting compelling content to optimizing your
                            online presence, we deliver strategies that highlight your brand’s unique offerings and
                            connect you with customers who value quality and design. Let us help you dominate the
                            digital landscape and stand out in a competitive market.
                        </p>
                        <div class="furniture-service-box">
                            <h4 class="mrb20">Why Choose Us for Your Furniture Business ?</h4>
                            <div class="value-points">
                                <p class="ab-points">
                                    <span>Tailored Strategies :</span> We design customized campaigns
                                    that align with your business goals. Whether you're targeting local customers or
                                    global markets, we've got you covered.
                                </p>
                            </div>
                            <div class="value-points">
                                <p class="ab-points">
                                    <span>Stunning Visuals :</span>We create captivating content that
                                    highlights the craftsmanship and beauty of your furniture.
                                </p>
                            </div>
                            <div class="value-points">
                                <p class="ab-points">
                                    <span>Proven Results :</span> Our data-driven approach ensures
                                    higher website traffic, increased leads, and improved ROI.
                                </p>
                            </div>
                            <div class="value-points">
                                <p class="ab-points">
                                    <span>Comprehensive Solutions :</span> From social media management
                                    to SEO and PPC, we offer end-to-end digital marketing services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mb-5">
                    <img src="img/furniture-info-img.jpg" class="img-fluid br15">
                </div>
            </div>
        </div>
    </div>

    <div class="connect-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 clol-md-12 col-sm-12">
                    <div class="connect-box">
                        <h2>Let’s Build Your Digital Empire</h2>
                        <h5>
                            Don’t let your competitors steal the spotlight. Partner with Digilinkers and take your
                            furniture business to new heights with our Digital Marketing Services for Furniture
                            Industry.
                        </h5>
                        <div class="connect-btn">
                            <a href="tel:+91-9818000334">Call Us Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="furniture-why-choose section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="furniture-why-head-box">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="furniture-card-wrap">
                        <div class="furniture-img-box">
                            <img src="{{ asset('img/web-service-img.jpg'); }}" class="img-fluid">
                        </div>
                        <div class="furniture-txt-box">
                            <h4>Website Development</h4>
                            <p>Showcase your furniture with a sleek, user-friendly website that turns visitors into
                                customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="furniture-card-wrap">
                        <div class="furniture-img-box">
                            <img src="{{ asset('img/smo-service-img.jpg'); }}" class="img-fluid">
                        </div>
                        <div class="furniture-txt-box">
                            <h4>Social Media Advertising</h4>
                            <p>Reach your audience on platforms like Instagram, Facebook with visually appealing
                                ads.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="furniture-card-wrap">
                        <div class="furniture-img-box">
                            <img src="{{ asset('img/seo-img.jpg'); }}" class="img-fluid">
                        </div>
                        <div class="furniture-txt-box">
                            <h4>SEO & Content Marketing</h4>
                            <p>Rank higher in search results and drive organic traffic with strategic keyword
                                targeting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="furniture-card-wrap ">
                        <div class="furniture-img-box">
                            <img src="{{ asset('img/ppc-service-img.jpg'); }}" class="img-fluid">
                        </div>
                        <div class="furniture-txt-box">
                            <h4>PPC Campaigns</h4>
                            <p>Get immediate results with high-converting pay-per-click campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
