@extends('layouts.landing-main')

@section('title', 'Social Media Marketing Services | Digilinkers')

@section('description', 'Grow your brand with expert social media marketing. Digilinkers offers content, ads & ROI-driven strategies. Book your free audit today!')

@section('keywords', 'social media marketing services,social media marketing,social media marketing agency,social media marketing companies,performance marketing agencies,facebook ads agency,smma,facebook advertising companies')

@section('content')

<main>
    <div class="social-media-marketing-banner section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 mb-3">
                    <div class="banner-text">
                        <h1>Social media services that connect, convert and grow your brand</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 offset-lg-1 mb-3">
                    <div class="form-wrapper">
                        <div class="quote-form-container-socialmedia">
                            <h3>Get a <span>FREE</span> Consultation </h3>
                            <p>
                                We Help Brands To Optimize Their Digital Marketing Performance !
                            </p>
                            <form class="quote-form" action="https://script.google.com/macros/s/AKfycbwZuJ1e6W29S9pqAcl3JND2yk8f6gveCQb1zVHI5t2vDlR53P1OtnYhb1WjZXDwG-R22Q/exec" onsubmit="return handleSubmit(this)" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name*" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" id="mobile" maxlength="10" pattern="\d{10}" inputmode="numeric"
                                        placeholder="Enter 10-digit number*" name="mobile" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address*" required>
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" placeholder="Your Requirement/Query" name="message"></textarea>
                                </div>
                                <button type="submit" class="submit-btn" name="form_submit_two">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="clients-page social-clients">
        <div class="container">
            <!-- Clients Logos Section -->
            <div class="row text-center pt-4">
                <div class="col-lg-12">
                    <h2>
                        Our Clientele
                    </h2>
                </div>
                
                <div class="col-lg-12 social-clients-logo">
                    <div class="client-boxs">
                        <div class="client-logo-landing owl-carousel owl-theme">
                             @foreach ($clients as $item)
                    <div class="item">
                        <img src="{{ asset('storage/client/' . $item->image) }}" class="img-fluid client-logo" alt="Client 1" loading="lazy">
                    </div>
                     @endforeach
                   </div>         
                </div>
            </div>
        </div>
    </div>
 </div>
    <div class="social-media-marketing-wrapper-first section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <h2>
                        Grow Your Brand with Expert Social Media Services
                    </h2>
                    <p>
                        In today’s fast-scrolling digital world, attention is the new currency—and your brand deserves a
                        bigger share of it. At Digilinkers, we specialize in turning casual scrollers into loyal
                        customers through strategic, creative, and data-driven social media services.
                    </p>
                    <p>
                        And here’s the best part: we’ve been doing it since 2018. So we have significant experience in
                        navigating trends, cracking algorithms, and delivering real results for businesses of all sizes.
                    </p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="{{ asset('img/social-media-landing-img.webp') }}" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="social-media-marketing-wrapper-two section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="bg-socialmarketing"></div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <h2>
                        Why Social Media for your brand?
                    </h2>
                    <p>
                        Wondering why social media? Because it’s where your customers are. Whether it’s Instagram,
                        Facebook, LinkedIn, or Twitter—your audience is scrolling, liking, sharing, and engaging. The
                        right strategy ensures they’re doing all that with your content.
                    </p>
                    <p>
                        It is the palace to be in! It’s in a fast-moving, ever-changing landscape. That’s where we come
                        in. With our expert social media services, we ensure that you reach your audience with the
                        perfect mix of creativity and strategy.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="social-marketing-what-we-offer section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h3>What We Offer</h3>
                    <p>
                        At Digilinkers, we offer complete social media marketing services tailored to your business
                        goals:
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card content-card">
                        <img src="{{ asset('img/social-content.webp') }}"
                            alt="Content Creation Image" class="img-fluid">
                        <div class="gradient-bg">
                            <h5>Content Creation</h5>
                            <p>High-quality graphics, reels, carousels, and captions that resonate with your audience.
                            </p>
                            <a href="#" class="btn btn-glow" data-bs-toggle="modal" data-bs-target="#myModalThree">Start My Social Makeover</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card content-card">
                        <img src="{{ asset('img/account-management.webp') }}"
                            alt="Content Creation Image" class="img-fluid">
                        <div class="gradient-bg">
                            <h5>Account Management</h5>
                            <p>
                                We post, engage, and monitor so you can focus on running your business.
                            </p>
                            <a href="#" class="btn btn-glow" data-bs-toggle="modal" data-bs-target="#myModalThree">Start My Social Makeover</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card content-card">
                        <img src="{{ asset('img/ads.webp') }}"
                            alt="Content Creation Image" class="img-fluid">
                        <div class="gradient-bg">
                            <h5>Ad Campaigns</h5>
                            <p>
                                Paid media that doesn’t just reach—it converts.
                            </p>
                            <a href="#" class="btn btn-glow" data-bs-toggle="modal" data-bs-target="#myModalThree">Start My Social Makeover</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card content-card">
                        <img src="{{ asset('img/reporting.webp') }}"
                            alt="Content Creation Image" class="img-fluid">
                        <div class="gradient-bg">
                            <h5>Analytics & Reporting</h5>
                            <p>
                                Real-time data that helps us fine-tune your strategy for better ROI.
                            </p>
                            <a href="#" class="btn btn-glow" data-bs-toggle="modal" data-bs-target="#myModalThree">Start My Social Makeover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="socialmedia-why-choose-wrapper section-entry">
            <div class="container">
                <div class="col-lg-12">
                    <h3>
                        Since 2018: 7+ Years of proven expertise
                    </h3>
                    <p>
                        100+ Brands Served: We have served industries like battery manufacturer, printing, appliances, and more
                    </p>
                    <p>
                        In-House Creative Team: Fast turnarounds and original ideas. Our team of designers, copywriters, and social media managers work together—under one roof—with complete clarity on your brand vision.
                    </p>
                    <p>
                         Performance-Driven: Because likes are nice, but leads are better
                        Being a creative social media marketing agency, we don’t offer one-size-fits-all solutions. We study your audience, your competitors, and your product. Then, we craft campaigns that bring you visibility, engagement, and conversions—day after day.

                    </p>
                </div>
            </div>
    </div>
        <div class="cta-3-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="cta-wrap-3">
                            <h5>Let’s Make Your Brand Unmissable</h5>
                            <p>
                               Thousands of posts. Millions of impressions. Real business results.
                               If you’re ready to go from being seen to being remembered—Digilinkers, a social media marketing agency in Delhi is your perfect partner.
                                </p>

                            <ul class="cta-feature-social">
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Book your free social media audit today </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Call Now: +91-9818000334
                                </li>
                            </ul>
                           
                          <!-- CTA Button -->
                            <div class="cta-nav-btn-social mt-4">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                                    Let’s Go Viral
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
    <!-- Modal -->
<div class="modal fade" id="myModalThree" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Fill Your Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body modal-one">
                <form id="popupFormthree" action="https://script.google.com/macros/s/AKfycbwZuJ1e6W29S9pqAcl3JND2yk8f6gveCQb1zVHI5t2vDlR53P1OtnYhb1WjZXDwG-R22Q/exec"  onsubmit="return handleSubmit(this)" method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name*" required>
                    </div>
                     <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" maxlength="10" pattern="\d{10}" inputmode="numeric" placeholder="Enter 10-digit number*" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email*" required>
                    </div>
                    <div class="mb-3">
                        <label for="website_type" class="form-label">Your Requirement/Query</label>
                        <textarea rows="4" placeholder="Your Requirement/Query" class="form-control" name="message"></textarea>
                    </div>
                    <div class="cta-nav-btn-socialmedia">
                        <button type="submit" class="btn" name="form_submit_four">Submit</button>
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
      window.location.href = "{{ url('/social-media-marketing-company/thankyou') }}";
    }, 1000);
    return true;
  }
</script>

@endsection
