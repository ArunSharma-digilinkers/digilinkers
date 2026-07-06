@extends('layouts.main')

@section('title', 'Digilinkers: Top Digital Marketing Agency in India')

@section('description', 'Discover Digilinkers, a leading digital marketing agency in India, specializing in SEO, web
design, and development for unique online success.')

@section('keywords', 'Digital Marketing Company Delhi, SEO Company Delhi, Digital Marketing Agency, Digital Marketing
Company India, Best SEO Services, Best SEO Services Company India, Best SEO Services in India, Web Development Company,
Top SEO Services in India')

@section('content')

<main>
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="about-wrapper section-entry">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-sm-12 about-content mb-4">
                    <h6 class="experience-text">
                        Your trusted partner for digital success — the best digital marketing company in Delhi.
                    </h6>
                    <h1 class="about-title">We Build Brands That Grow Online</h1>
                    <p class="about-description">
                       Digilinkers is a results-focused <strong>digital marketing company based in Delhi</strong>, helping businesses succeed in the digital space. From startups to large enterprises, our goal is to deliver campaigns that bring real, scalable growth. With a perfect mix of creativity, tech, and marketing strategies, we have earned a reputation as the No. 1 digital marketing service provider Delhi relies on.
                    </p>
                    <a href="{{ url('/contact-us') }}" class="btn about-btn">Get in Touch</a>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('img/about.jpg') }}" alt="About Us" class="about-image">
                        <div class="about-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 text-white mb-4">
                    <h6 class="highlight-text">Why Choose Us?</h6>
                    <h2 class="section-title">We Provide Truly Prominent IT Solutions.</h2>
                    <p class="section-description">
                        Choosing Digilinkers means choosing a team that truly cares about your success. We don’t believe
                        in one-size-fits-all solutions—we create strategies that are tailored just for you, ensuring
                        your brand gets the attention it deserves.
                    </p>

                    <div class="feature-box">
                        <div class="feature-item">
                            <i class="fa-solid fa-atom"></i>
                            <div>
                                <h5>Experience</h5>
                                <p>Backed by years of expertise, we deliver reliable and innovative solutions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fa-solid fa-headset"></i>
                            <div>
                                <h5>Quick Support</h5>
                                <p>Fast, responsive support to keep your business running without interruptions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 mb-4">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/choose-img.jpg') }}" alt="Why Choose Us"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-wrapper section-entry">
        <div class="container">
            <div class="row align-items-center">
                <!-- Right Image -->
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="about-bg-img">
                    </div>
                </div>
                <!-- Left Content -->
                <div class="col-lg-6 col-sm-12 about-content mb-4">
                    <h2 class="about-title">We Create, We Market, <span>You Grow!</span></h2>
                    <p class="about-description">
                        At Digilinkers, we go beyond traditional marketing. We craft digital experiences that make an
                        impact. Our approach is not just about increasing traffic—it’s about building a brand that
                        people trust and remember. With a team of experienced professionals, we analyze your business,
                        understand your target audience, and implement data-driven strategies to deliver exceptional
                        results. We believe in transparency, innovation, and continuous improvement to keep your brand
                        ahead of the competition.
                    </p>
                    <p class="about-description">
                        Every business deserves a strong digital presence, and we make it happen. Whether you’re a
                        startup looking to build your brand or an established company wanting to expand your reach,
                        Digilinkers is here to help.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    @include('components.cta')


</main>

@endsection
