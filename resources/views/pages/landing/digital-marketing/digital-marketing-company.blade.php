@extends('layouts.landing-main-digital')

@section('title', 'Best Digital Marketing Services in Delhi | Digilinkers')

@section('description', 'Result-driven SEO, PPC, and Social Media Marketing services in Delhi. Get more leads & sales with Digilinkers – your trusted digital growth partner.')

@section('keywords', 'digital marketing,digital marketing agency,digital marketing services,best digital marketing agencies,digital marketing agency near me,digital marketing company in delhi,affordable digital marketing services')

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
                              Your Customers Are Online. Are You Visible?
                            </p>
                            <div class="mrb30">
                                <p class="banner-text">
                               Grow Fast with India’s <span> Trusted Digital Marketing Experts</span>
                                </p>
                               
                            </div>
                        <ul class="points-list">
                            <li>One-stop agency: Ads, SEO, Social Media </li>
                            <li>7+ Years | 250+ Brands | Package staring from<span> ₹9,999</span></li>
                            <li>Get Your Free Strategy <span><a href="tel:+91-9818000334">Call Now</a></span></li>
                        </ul>
                                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="form-wrapper">
                            <div class="quote-form-container">
                                <h2>Get Expert Help – Fill the Form in Just 1 Minute!</h2>
                                <p>
                                   Our digital marketing expert will contact you shortly for a quick and easy consultation.
                                </p>


                                <form class="quote-form"action="https://script.google.com/macros/s/AKfycbwXG2ffVz14h8ogs2dzXzOCqCkUAiB_6YZAEFnHGZIy3--gwFqGD1fnzFUp3CMwej7Ohw/exec"  onsubmit="return handleSubmit(this)" method="POST">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Full Name*" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel"id="mobile" maxlength="10" pattern="\d{10}" inputmode="numeric" placeholder="Enter 10-digit number*" name="mobile" required>
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
                        <img src="{{ asset('storage/client/' . $item->image) }}" class="img-fluid client-logo" alt="Client 1" loading="lazy">
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
    <div class="container">
        <!-- Heading -->
        <div class="service-heading mb-5">
            <h1>Explore Our Digital Marketing Services</h1>
            <h4>
                Partner with the No. 1 Digital Marketing Company that Delivers Real Growth!
            </h4>
            <h5>
                You’re showing up online, but no one’s clicking? Or worse—clicking but not buying? We get it. That’s where we come in.

            </h5>
            <p>
               At Digilinkers, we’re not just a digital marketing agency—we’re your growth partner. Our full-suite digital marketing services are designed to put your brand where it matters the most. We help your brand show up in the right places, at the right time, with the right message that actually gets results. From clicks to conversions, we make sure your marketing means something. We make sure every click counts—and every lead lands.
            </p>
        </div>

        <!-- SEO -->
        <div class="row align-items-center mb-5">
            <div class="col-md-5 order-md-2 mb-4 mb-md-0">
                <img src="{{ asset('img/service-seo.jpg') }}" class="img-fluid" alt="SEO Service">
            </div>
            <div class="col-md-7 landing-info order-md-1">
                <h3>SEO (Search Engine Optimization) Services</h3>
                <h5>Be Found Where It Matters Most</h5>
                <p>
                     Climb to the top of Google with our expert SEO services. We optimize your website with the right keywords, content, and backlinks to ensure higher rankings and consistent organic traffic. Whether it's local SEO or technical audits, we help you stay visible and competitive in a crowded digital space. Drive traffic that converts—organically.
                </p>
                  <div class="cta-nav-btn mt-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                       Start Your Online Growth
                    </button>
                  </div>
            </div>
        </div>

        <!-- PPC -->
        <div class="row align-items-center mb-5">
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('img/service-ppc.jpg') }}" class="img-fluid" alt="PPC Service">
            </div>
            <div class="col-md-7 landing-info">
                <h3>Search Engine Marketing (PPC Services)</h3>
                <p>
                    Get Instant Traffic & Real-Time Results
                    Don’t wait months for results—our high-impact search engine marketing and PPC services put your business in front of ready-to-buy customers instantly. From Google Ads to Display campaigns, we manage every click to ensure maximum ROI with minimum waste. Reach, retarget, and convert with paid precision.
                </p>
                 <div class="cta-nav-btn mt-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                       Start Your Online Growth
                    </button>
                  </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="row align-items-center mb-5">
            <div class="col-md-5 order-md-2 mb-4 mb-md-0">
                <img src="{{ asset('img/service-smo.jpg') }}" class="img-fluid" alt="Social Media Marketing">
            </div>
            <div class="col-md-7 landing-info order-md-1">
                <h3>Social Media Marketing</h3>
                <h5>Turn Followers into Loyal Customers</h5>
                <p>
                    Social media is more than just posts—it’s a powerful tool to build relationships and grow your brand. Our social media marketing services craft engaging content, reels, and campaigns tailored for platforms like Instagram, Facebook, LinkedIn, and YouTube. We help you connect, influence, and convert—organically and creatively.
                </p>
                 <div class="cta-nav-btn mt-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                       Start Your Online Growth
                    </button>
                  </div>
            </div>
        </div>

        <!-- Content Marketing -->  
        <div class="row align-items-center mb-5">
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('img/service-content.jpg') }}" class="img-fluid" alt="Content Marketing">
            </div>
            <div class="col-md-7 landing-info">
                <h3>Content Marketing</h3>
                <h5>
                    Create. Connect. Convert.
                </h5>
                <p>
                    People don’t just buy products—they buy stories, trust, and value.
                    That’s where great content comes in. We create SEO-friendly blogs, videos, infographics, and web copy that feel real, sound like you, and connect with your audience. Whether you're trying to build trust, grow your brand, or turn leads into loyal customers—our content does the talking (and the selling).
                </p>
                 <div class="cta-nav-btn mt-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                       Start Your Online Growth
                    </button>
                  </div>
            </div>
        </div>

        <!-- Website Development -->
        <div class="row align-items-center mb-5">
            <div class="col-md-5 order-md-2 mb-4 mb-md-0">
                <img src="{{ asset('img/service-website.jpg') }}" class="img-fluid" alt="Website Development">
            </div>
            <div class="col-md-7 order-md-1 landing-info">
                <h3>Website Development Services</h3>
                <p>
                    Your website is your digital storefront—make it unforgettable. Our website development services deliver fast, mobile-friendly, and beautifully designed websites optimized for performance and conversions. From custom layouts to eCommerce integration, we create experiences that reflect your brand and drive business. Look good. Load fast. Convert better.
                </p>
                 <div class="cta-nav-btn mt-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                       Start Your Online Growth
                    </button>
                  </div>
            </div>
        </div>
    </div>
</section>
        <div class="info-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="info-wrap">
                            <div class="heading-box-wrap">
                                <h3>
                                    Let your business get found—right place, right time, right strategy.
                                </h3>
                                <h5>
                                    With Digilinkers, Your Trusted Digital Marketing Agency in Delhi
                                </h5>
                                <p>
                                    Tired of spending your time searching for customers? What if they could find you instead? At Digilinkers, a leading digital marketing company in Delhi, we make that happen. We help people discover your brand when they need it most—with a message that speaks to them. With expert-led SEO services, high-performance Google Ads management, engaging social media marketing, and tailored content strategies, we help your brand rise above the noise. No pressure. No guesswork. Just meaningful growth and real connections.  Whether you're a startup or growing brand, our goal is simple—to make your digital presence work for you.
                                </p>
                                <h5>
                                     📈 Ready to attract more leads, more traffic, and more sales? You’re in the right place. Let’s grow—together.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- //////// SEO CTA section ///////// -->  
        <div class="smo-cta-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="seo-cta-txt-box">
                            <h2>Your Growth, Our Strategy</h2>
                            <h3>Affordable digital marketing services tailored to your goals.</h3>
                             <div class="cta-nav-btn mt-4">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModalThree">
                                Start Your Campaign Today
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="cta-1-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="cta-wrap">
                            <h5>You Deserve Marketing That Converts, Connects & Grows Your Business — We’ll Make It Happen</h5>
                            <h6>We don’t just run ads — we build real, lasting growth.</h6>
                            <p>
                                At Digilinkers, we believe digital marketing should feel less like guesswork and more like real progress. As a trusted digital marketing company in Delhi, we help your business grow in ways that actually work — smarter, not louder.
                            </p>
                            <p>
                                Whether it’s getting you to the top of Google, bringing in leads through ads, or helping your brand connect better on social media — we build every campaign with care and a plan that fits your goals.
                            </p>
                            <p>
                                Because for us, it’s not just about marketing — it’s about making your brand matter.
                            </p>
                                <h4>
                                    What You Get with Digilinkers
                                </h4>
                            <ul class="cta-feature">
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Free Digital Marketing Consultation </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;SEO, Social Media & Ad Performance Audit </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Customized Growth Strategy</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Call Now: +91-98180 00334</li>
                            </ul>
                            <div class="cta-nav-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModalThree">
                                   Better visibility. Better leads. Real growth.
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
                            <h2>Grow Online, Smarter & Faster</h2>
                            <h3>Digital marketing that brings real results.</h3>
                           <!-- CTA Button -->
                            <div class="cta-nav-btn mt-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalThree">
                                   Book Your Free Strategy Call
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

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <div class="heading-box-wrap section-spacer">
                            <h3><span>Why Choose Digilinkers?</span></h3>
                            <p>
                                Not Just Another Digital Marketing Agency in Delhi—We’re Your Growth Partner. At Digilinkers, we do more than just run ads. We work closely with you to understand your business and create smart plans that help you grow.From getting your website to show up on Google, to running ads that bring real leads, and posting on social media to reach more people — we handle it all with care.
                            </p>
                            <h4>
                                You’ll get a team that’s honest, helpful, and focused on real results.
                            </h4>
                            <p>
                                🚀 Let’s work together and take your business to the next level.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one hm-mrg-icon">
                            <div class="icon">
                                <img src="{{ asset('img/campaign.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>500+ Successful Campaigns</h4>
                            <p class="hm-txt">
                                Proven success across industries
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one mt30">
                            <div class="icon">
                                <img src="{{ asset('img/wealth.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>ROI-Driven Strategies</h4>
                            <p class="hm-txt">Every campaign optimized for profits</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one mt30">
                            <div class="icon">
                                <img src="{{ asset('img/managers.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>Dedicated Account Manager</h4>
                            <p class="hm-txt">Personalized support for your brand</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one">
                            <div class="icon">
                                <img src="{{ asset('img/innovation.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>AI-Powered Insights</h4>
                            <p>Data-driven strategies for maximum impact</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one mt30">
                            <div class="icon">
                                <img src="{{ asset('img/24-hour-service.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>24x7 user support</h4>
                            <p>We're here for you anytime, anywhere!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-wrap-one mt30">
                            <div class="icon">
                                <img src="{{ asset('img/business.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>Business Growth</h4>
                            <p>Smart strategies to boost your brand</p>
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
                            <h2>Get Seen. Get Clicked. Get Sales.</h2>
                            <h3>Your trusted digital marketing agency in Delhi.</h3>
                           <div class="cta-nav-btn mt-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalThree">
                                   Let’s Build Your Online Presence
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
                    <h3>What Make Us Different From Other Web Development Agency</h3>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="accordion" id="faqAccordion">

                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long before I see results?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                SEO takes 3-6 months to show significant improvements, while PPC delivers instant results.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer a free consultation?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Click [Get a Free Consultation] to book your call and discuss your marketing goals.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What industries do you specialize in?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We work with e-commerce, real estate, healthcare, finance, local businesses, and many more.
                            </div>
                        </div>
                    </div>

                       <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 What makes your digital marketing strategies different? 
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We use AI-driven insights, data-backed strategies, and conversion-focused
                                marketing to maximize ROI.
                                        
                            </div>
                        </div>
                    </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can you help if I have a small budget? 
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We create customized marketing plans that fit your budget and
                                            deliver maximum impact.
                            </div>
                        </div>
                    </div>
                    
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Do I need both SEO and PPC for my business? 
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                           It depends on your goals! SEO is great for long-term growth, while PPC
                            drives instant leads. We often recommend a mix of both for the best results.         
                            </div>
                        </div>
                    </div>

                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                  How do you measure success? 
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            We track key metrics like traffic, engagement, conversions, and ROI to
                            ensure your marketing efforts deliver real results.
                                                 
                            </div>
                        </div>
                    </div>
                       <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                   Will I have a dedicated account manager? 
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                             We track key metrics like traffic, engagement, conversions, and ROI to
                                            ensure your marketing efforts deliver real results.         
                            </div>
                        </div>
                    </div>

                    <!-- Add more .accordion-item blocks here as needed -->

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
                            <h5>Ready to Take Your Business to New Heights?</h5>
                            <p>
                                Success starts with the right strategy. Let’s build a digital marketing plan that brings
                                real growth, more leads, and higher revenue. Don't let your competitors get ahead—act
                                now!
                                </p>

                            <ul class="cta-feature">
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;No Hidden Fees </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;100% ROI-Focused </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Call Now: +91-9818000334
                                </li>
                            </ul>
                           
                          <!-- CTA Button -->
                            <div class="cta-nav-btn mt-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalThree">
                                    Get the Custom Strategy
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
                <form id="popupFormthree" action="https://script.google.com/macros/s/AKfycbwXG2ffVz14h8ogs2dzXzOCqCkUAiB_6YZAEFnHGZIy3--gwFqGD1fnzFUp3CMwej7Ohw/exec"  onsubmit="return handleSubmit(this)" method="POST">

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
      window.location.href = "{{ url('/digital-marketing-company/thankyou') }}";
    }, 1000);
    return true;
  }
</script>
</div> <!--  .main-wrapper -->
</main>

@endsection