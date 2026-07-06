@extends('layouts.main')
@section('title', 'Real Estate Digital Marketing | Generate More Leads & Sales')

@section('description', 'Boost your real estate business with expert digital marketing. Drive quality leads, increase sales & dominate the market with proven strategies.')
@section('content')

<main>
<div class="realstate-form-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 mb-4">
                <div class="realstate-banner-txt-wrap">
                    <h1>
                        Elevate Your Real Estate <br>Success with Powerful <br>Digital Marketing Services
                    </h1>
                    <p>
                        Take your real estate business to new heights with strategic digital marketing attract more
                        buyers, generate quality leads, and close deals faster!
                    </p>
                </div>
            </div>
            @include('components.request_quote')
        </div>
    </div>
</div>
<div class="hm-info-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="hm-info-box">
                    <h1>
                        Dominate the Real Estate Market Online : Digital Marketing Strategies for Real Estate
                        Industry 
                    </h1>
                    <p>
                        Partner with Digilinkers and future-proof your real estate business with data-driven
                        digital marketing solutions designed for Real Estate increased lead generation and
                        sales.In today's competitive real estate market, simply listing properties isn't enough.
                        With rising ad costs, increased competition, and evolving buyer behavior, a robust
                        digital strategy is crucial for success. Digilinkers helps real estate developers,
                        builders, and architects navigate this complex landscape, turning online visitors into
                        qualified leads and ultimately, happy homeowners.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="service-head-box">
                    <h2>Our Real Estate Digital Marketing Services</h2>
                    <p>Drive More Sales with Our Proven Real Estate Digital Marketing Services</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mrt40">
                <div class="service-box">
                    <div class="service-icon-box">
                        <img src="{{ asset('img/service-icon-1.png'); }}" class="img-fluid icon-width">
                    </div>
                    <div class="service-txt-box ml-25">
                        <h4>High-Performing Real Estate Websites</h4>
                        <p>
                            Attract and engage potential buyers with interactive, responsive websites optimized
                            for speed and performance across all devices. Showcase your properties with stunning
                            visuals and user-friendly navigation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mrt40">
                <div class="service-box">
                    <div class="service-icon-box">
                        <img src="{{ asset('img/service-icon-2.png'); }}" class="img-fluid icon-width">
                    </div>
                    <div class="service-txt-box ml-25">
                        <h4>SEO for Real Estate</h4>
                        <p>
                            Reach qualified buyers actively searching for properties online. Our localized SEO
                            strategies target relevant keywords and improve your search engine rankings, driving
                            organic traffic to your website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mrt40">
                <div class="service-box">
                    <div class="service-icon-box">
                        <img src="{{ asset('img/service-icon-3.png'); }}" class="img-fluid icon-width">
                    </div>
                    <div class="service-txt-box ml-25">
                        <h4>Targeted PPC & Paid Advertising</h4>
                        <p>
                            Generate immediate leads with precisely targeted advertising campaigns on Google Ads
                            and other platforms. We maximize your ROI by focusing on high-intent keywords and
                            demographics.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mrt40">
                <div class="service-box">
                    <div class="service-icon-box">
                        <img src="{{ asset('img/service-icon-4.png'); }}" class="img-fluid icon-width">
                    </div>
                    <div class="service-txt-box ml-25">
                        <h4>Social Media Marketing</h4>
                        <p>
                            Connect with your target audience on social media platforms like Facebook, Instagram,
                            LinkedIn, and Twitter. We create engaging content that drives brand awareness,
                            generates leads, and fosters community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="why-us-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="why-real-state">
                    <h2>Why Choose Digilinkers for Real Estate Digital Marketing Services</h2>
                    <p>Your Strategic Partner for Real Estate Digital Success</p>
                    <ul>
                        <li>
                            <span>Data-Driven Strategies :</span> <br>We use data and analytics to inform our
                            strategies and optimize campaigns for maximum results.
                        </li>
                        <li>
                            <span>Full-Service Agency :</span><br> We offer a complete suite of digital marketing
                            services, from branding and website development to SEO, PPC, and social media
                            marketing.
                        </li>
                        <li>
                            <span>250+ Projects Delivered with Proven Results :</span><br> We have a track record of
                            successfully delivering over 250 projects, demonstrating our ability to meet diverse
                            client needs and achieve tangible outcomes.
                        </li>
                        <li>
                            <span>6 Years of Expertise :</span><br> With six years of dedicated experience, we
                            possess in-depth knowledge and a refined skill set to navigate industry challenges
                            and provide effective solutions.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="real-why-img">
                <img src="{{ asset('img/why-choose-img.jpg'); }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection