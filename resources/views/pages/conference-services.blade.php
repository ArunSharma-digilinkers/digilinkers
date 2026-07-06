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
                    <h2>Conference Services</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="conference-hero section-entry">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 mb-3">
                <h1 class="hero-title">
                    Conference Website & Management Services
                </h1>

                <p class="hero-subtitle">
                    Complete end-to-end solutions for conferences including 
                    website development, registration with payment gateway integration, 
                    submission systems, e-marketing, and on-spot management.
                </p>

                <ul class="hero-features">
                    <li> Conference Website Development</li>
                    <li> Registration with Payment Gateway Integration</li>
                    <li> Abstract & Submission Software</li>
                    <li> E-Marketing & Custom Mailing Systems</li>
                    <li> Analytics & Reporting</li>
                    <li> Spot Registration & Conference Aids</li>
                </ul>

                <div class="hero-buttons">
                    <a href="{{ url('contact-us') }}" class="btn btn-primary-custom">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 text-center mb-3">
                <img src="{{ asset('img/Conference-500.jpg') }}" alt="Conference Services" class="img-fluid ">
            </div>

        </div>
    </div>
</section>
<section class="conference-services section-entry" id="services">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="section-title">Our Conference Solutions</h2>
            <p class="section-subtitle">
                We provide complete digital and on-ground solutions to manage your conference efficiently.
            </p>
        </div>

        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-globe"></i>
                    <h5>Conference Website Development</h5>
                    <p>Custom-designed, responsive, and SEO-friendly websites tailored for your conference needs.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-credit-card"></i>
                    <h5>Registration & Payment Integration</h5>
                    <p>Seamless registration system with secure payment gateway integration for easy attendee management.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-file-upload"></i>
                    <h5>Submission Software</h5>
                    <p>Abstract and paper submission systems with reviewer management and tracking features.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <h5>E-Marketing & Mailing</h5>
                    <p>Custom email campaigns and automated mailing systems to boost engagement and participation.</p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-chart-line"></i>
                    <h5>Analytics & Reporting</h5>
                    <p>Real-time analytics and detailed reports to monitor registrations, traffic, and engagement.</p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <i class="fa-solid fa-id-badge"></i>
                    <h5>Spot Registration & Aids</h5>
                    <p>On-site registration support, badge printing, and conference assistance tools.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="conference-process section-entry">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="section-title">Our Conference Management Process</h2>
            <p class="section-subtitle">
                A streamlined approach to ensure your conference runs smoothly from start to finish.
            </p>
        </div>

        <div class="row g-4">

            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="process-card">
                    
                    <i class="fa-solid fa-comments"></i>
                    <h5>Requirement Analysis</h5>
                    <p>We understand your conference goals, audience, and technical requirements.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="process-card">
                  
                    <i class="fa-solid fa-laptop-code"></i>
                    <h5>Development & Setup</h5>
                    <p>We build your website, registration system, and submission platform.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="process-card">
                  
                    <i class="fa-solid fa-bullhorn"></i>
                    <h5>Marketing & Promotion</h5>
                    <p>We execute email campaigns and digital marketing strategies.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="process-card">
                   
                    <i class="fa-solid fa-clipboard-check"></i>
                    <h5>Execution & Support</h5>
                    <p>On-site support, registration handling, and real-time monitoring.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="conference-why section-entry">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center mb-3">
                <img src="{{ asset('img/conference-choose.jpg') }}" alt="Why Choose Us" class="img-fluid why-img">
            </div>

            <!-- Right Content -->
            <div class="col-lg-6 mb-3">

                <h2 class="section-title">Why Choose Digilinkers?</h2>
                <p class="section-subtitle">
                    We combine technology, experience, and innovation to deliver seamless conference solutions.
                </p>

                <div class="why-list">

                    <div class="why-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <div>
                            <h6>End-to-End Solutions</h6>
                            <p>From website development to on-spot management, we handle everything.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <div>
                            <h6>Secure & Scalable Systems</h6>
                            <p>Robust platforms with secure payment gateways and high performance.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <div>
                            <h6>Customizable Features</h6>
                            <p>Tailor-made solutions based on your conference requirements.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <div>
                            <h6>Expert Support Team</h6>
                            <p>Dedicated team for technical and on-site assistance.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <div>
                            <h6>Data & Analytics Driven</h6>
                            <p>Detailed reports and insights to track performance and engagement.</p>
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <a href="{{ url('contact-us') }}" class="btn btn-custom-conference mt-3">
                    Start Your Conference
                </a>

            </div>
        </div>
    </div>
</section>
    @include('components.cta')
    </main>

@endsection
