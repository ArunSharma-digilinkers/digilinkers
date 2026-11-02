@extends('layouts.main')
@section('title', 'Be Found. Be Built. Be Organized. | Digilinkers - Solar, Battery, Lithium & EV Charger Growth Partner')

@section('description', 'Digilinkers is a business growth platform for solar, battery, lithium and EV charger companies - digital marketing, website development and Groove HR software under one roof.')

@section('keywords', 'Digital Marketing Company Delhi, Solar Digital Marketing, Battery Industry Marketing, Lithium Industry SEO,
EV Charger Marketing, Website Development Company, Groove HR, SEO Company Delhi, Digital Marketing Agency India')
@section('content')

<main>

    <!-- 1.1 Hero Banner -->
    <section class="rb-hero">
        <span class="rb-glow-orb rb-glow-blue rb-glow-orb-1"></span>
        <span class="rb-glow-orb rb-glow-purple rb-glow-orb-2"></span>
        <span class="rb-glow-orb rb-glow-yellow rb-glow-orb-3"></span>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rb-hero-text">
                        <span class="rb-eyebrow">Business Growth Platform for Solar, Battery, Lithium &amp; EV Charger Brands</span>
                        <h1 class="rb-motto">
                            Be&nbsp;Found. <span>Be&nbsp;Built.</span> Be&nbsp;Organized.
                        </h1>
                        <p class="rb-hero-sub">
                            Digital marketing, website development, and HR software solutions for solar,
                            battery, lithium, and EV charger businesses.
                        </p>

                        <ul class="rb-industry-chips">
                            <li><i class="fa-solid fa-solar-panel"></i> Solar</li>
                            <li><i class="fa-solid fa-car-battery"></i> Battery</li>
                            <li><i class="fa-solid fa-atom"></i> Lithium</li>
                            <li><i class="fa-solid fa-charging-station"></i> EV Chargers</li>
                        </ul>

                        <div class="rb-hero-actions">
                            <a href="#contact" class="rb-btn rb-btn-primary">Contact Us</a>
                            <a href="#how-we-help" class="rb-btn rb-btn-secondary">Explore Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rb-hero-visual">
                        <a href="#be-found" class="rb-float-card rb-float-card-a">
                            <span class="rb-float-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <span class="rb-float-title">Be Found</span>
                            <span class="rb-float-sub">SEO · SMO · Ads</span>
                        </a>
                        <a href="#be-built" class="rb-float-card rb-float-card-b">
                            <span class="rb-float-icon"><i class="fa-solid fa-code"></i></span>
                            <span class="rb-float-title">Be Built</span>
                            <span class="rb-float-sub">Websites · E-commerce</span>
                        </a>
                        <a href="#be-organized" class="rb-float-card rb-float-card-c">
                            <span class="rb-float-icon"><i class="fa-solid fa-sitemap"></i></span>
                            <span class="rb-float-title">Be Organized</span>
                            <span class="rb-float-sub">Groove HR</span>
                        </a>
                        <span class="rb-hero-visual-ring"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.2 Why These 4 Industries Need Digital Marketing -->
    <section class="rb-section rb-why" id="why-digital">
        <span class="rb-glow-orb rb-glow-blue rb-glow-orb-soft rb-glow-orb-tr"></span>
        <span class="rb-glow-orb rb-glow-yellow rb-glow-orb-soft rb-glow-orb-bl"></span>

        <div class="container">
            <div class="rb-section-head text-center">
                <span class="rb-tag">Why It Matters</span>
                <h2>Why Solar, Battery, Lithium &amp; EV Charger Businesses Need a Strong Digital Presence</h2>
                <p class="rb-section-desc">
                    These industries are growing fast, but customers, dealers, distributors, and business
                    buyers almost always search online before making a decision.
                </p>
            </div>

            <div class="rb-checklist-grid">
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Customers search online before contacting a company</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Dealers and distributors compare brands digitally</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Product education is important in technical industries</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Search visibility helps generate qualified enquiries</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Good websites build trust before the first call</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Social media keeps the brand active and visible</div>
                <div class="rb-checklist-item"><i class="fa-solid fa-circle-check"></i> Blogs and SEO content help answer buyer questions</div>
            </div>

            <div class="rb-industry-grid">
                <div class="rb-industry-card rb-industry-card--solar">
                    <div class="rb-industry-icon"><i class="fa-solid fa-solar-panel"></i></div>
                    <h4>Solar</h4>
                    <p>Solar businesses need visibility for products, services, projects, and local enquiries.</p>
                </div>

                <a href="{{ url('battery-industry') }}" class="rb-industry-card rb-industry-card-link rb-industry-card--battery">
                    <div class="rb-industry-icon"><i class="fa-solid fa-car-battery"></i></div>
                    <h4>Battery</h4>
                    <p>Battery brands need stronger product discovery, dealer enquiries, and trust-building content.</p>
                    <span class="rb-card-link-txt">Learn more <i class="fa-solid fa-arrow-right-long"></i></span>
                </a>

                <div class="rb-industry-card rb-industry-card--lithium">
                    <div class="rb-industry-icon"><i class="fa-solid fa-atom"></i></div>
                    <h4>Lithium</h4>
                    <p>Lithium companies need clear technical explanation, SEO content, and B2B lead generation.</p>
                </div>

                <a href="{{ url('ev-charger') }}" class="rb-industry-card rb-industry-card-link rb-industry-card--ev">
                    <div class="rb-industry-icon"><i class="fa-solid fa-charging-station"></i></div>
                    <h4>EV Chargers</h4>
                    <p>EV Charger brands need awareness, installation enquiries, and product education.</p>
                    <span class="rb-card-link-txt">Learn more <i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- 1.3 How Digilinkers Helps -->
    <section class="rb-section rb-pillars-wrapper" id="how-we-help">
        <span class="rb-glow-orb rb-glow-blue rb-glow-orb-4"></span>
        <span class="rb-glow-orb rb-glow-purple rb-glow-orb-5"></span>
        <span class="rb-glow-orb rb-glow-yellow rb-glow-orb-6"></span>

        <div class="container">
            <div class="rb-section-head text-center">
                <span class="rb-tag rb-tag-light">How Digilinkers Helps</span>
                <h2 class="text-white">We Don't Just Market Your Business</h2>
                <p class="rb-section-desc rb-section-desc-light">
                    We help it become visible, build the right platform, and organize its internal workflow.
                </p>
            </div>

            <!-- Be Found -->
            <div class="rb-pillar rb-pillar--found" id="be-found">
                <div class="rb-pillar-head">
                    <span class="rb-pillar-index">01</span>
                    <div>
                        <h3>Be Found</h3>
                        <p>Digilinkers helps businesses become visible online through:</p>
                    </div>
                </div>
                <ul class="rb-pillar-chips">
                    <li><a href="{{ url('search-engine-optimization') }}">SEO</a></li>
                    <li><a href="{{ url('social-media-marketing') }}">SMO</a></li>
                    <li><a href="{{ url('social-media-marketing') }}">Social Media Marketing</a></li>
                    <li><span>Graphic Design</span></li>
                    <li><span>Content Creation</span></li>
                    <li><a href="{{ url('google-adword') }}">Google Ads</a></li>
                    <li><span>Meta Ads</span></li>
                    <li><a href="{{ url('brand-building') }}">Brand Visibility Campaigns</a></li>
                </ul>
            </div>

            <!-- Be Built -->
            <div class="rb-pillar rb-pillar--built" id="be-built">
                <div class="rb-pillar-head">
                    <span class="rb-pillar-index">02</span>
                    <div>
                        <h3>Be Built</h3>
                        <p>Digilinkers helps businesses build strong digital platforms through:</p>
                    </div>
                </div>
                <ul class="rb-pillar-chips">
                    <li><a href="{{ url('website-designing') }}">Website Design</a></li>
                    <li><a href="{{ url('website-designing') }}">Website Development</a></li>
                    <li><a href="{{ url('wordpress-development') }}">WordPress Development</a></li>
                    <li><a href="{{ url('shopify-development') }}">Shopify Development</a></li>
                    <li><a href="{{ url('landing-page-design') }}">Landing Pages</a></li>
                    <li><a href="{{ url('e-commerce-website') }}">E-commerce Websites</a></li>
                    <li><span>Product Catalogue Websites</span></li>
                    <li><span>Website Maintenance</span></li>
                </ul>
            </div>

            <!-- Be Organized -->
            <div class="rb-pillar rb-pillar--organized" id="be-organized">
                <div class="rb-pillar-head">
                    <span class="rb-pillar-index">03</span>
                    <div>
                        <h3>Be Organized</h3>
                        <p>Digilinkers helps businesses organize internal operations through <strong>Groove HR</strong>:</p>
                    </div>
                </div>
                <ul class="rb-pillar-chips">
                    <li><span>Employee Management</span></li>
                    <li><span>Attendance Management</span></li>
                    <li><span>Leave Management</span></li>
                    <li><span>HR Records</span></li>
                    <li><span>Team Organization</span></li>
                    <li><span>Reports</span></li>
                    <li><span>Workflow Tracking</span></li>
                </ul>
                <a href="#contact" class="rb-btn rb-btn-outline-light mt-3">Enquire About Groove HR</a>
            </div>
        </div>
    </section>

    <!-- 1.4 Portfolio / Clients -->
    <section class="rb-section rb-portfolio" id="portfolio">
        <div class="container">
            <div class="rb-section-head text-center">
                <span class="rb-tag">Our Work</span>
                <h2>Portfolio &amp; Clients Attended Till Now</h2>
                <p class="rb-section-desc">
                    A preview of websites, SEO, social media, and branding work Digilinkers has already handled.
                </p>
            </div>

            @if($portfolios->count())
            <div class="row">
                @foreach($portfolios as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="rb-portfolio-card">
                        <div class="rb-portfolio-img">
                            <img src="{{ asset('storage/portfolio/' . $item->image) }}" class="img-fluid" alt="{{ $item->title }}" loading="lazy">
                        </div>
                        <div class="rb-portfolio-body">
                            @if($item->type)
                            <span class="rb-portfolio-badge">{{ ucfirst($item->type) }}</span>
                            @endif
                            <h5>{{ $item->title }}</h5>
                            @if($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="rb-card-link-txt">View Work <i class="fa-solid fa-arrow-right-long"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <div class="text-center mt-3">
                <a href="{{ url('portfolio') }}" class="rb-btn rb-btn-outline">View Portfolio</a>
            </div>

            @if($clients->count())
            <div class="rb-clients-row">
                @foreach ($clients as $item)
                <div class="rb-client-logo">
                    <img src="{{ asset('storage/client/' . $item->image) }}" class="img-fluid" alt="Client" loading="lazy">
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- 1.5 Contact Enquiry -->
    <section class="rb-section rb-enquiry" id="contact">
        <span class="rb-glow-orb rb-glow-blue rb-glow-orb-7"></span>
        <span class="rb-glow-orb rb-glow-yellow rb-glow-orb-8"></span>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <span class="rb-tag rb-tag-light">Get In Touch</span>
                    <h2 class="text-white">Ready to grow your digital presence?</h2>
                    <p class="rb-enquiry-desc">
                        Let's build the right plan for your business. Tell us a bit about what you need and
                        our team will get back to you shortly.
                    </p>
                    <ul class="rb-enquiry-contact">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+91-9818000334">+91-9818000334</a></li>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:contactus@digilinkers.com">contactus@digilinkers.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="rb-enquiry-form-wrap">
                        <div id="formErrors" class="text-danger mb-3"></div>
                        <div id="formSuccess" class="text-success mb-3"></div>

                        <form id="quoteForm" action="{{ route('quote.send') }}" method="POST">
                            @csrf
                            <input type="hidden" name="source_page" value="{{ url()->current() }}">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" placeholder="Name*" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number*" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" name="email" placeholder="Email*" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="company" placeholder="Company Name">
                                </div>
                                <div class="col-md-12 form-group">
                                    <select name="service">
                                        <option value="">Service Required</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SMO">SMO</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Website Development">Website Development</option>
                                        <option value="Groove HR">Groove HR</option>
                                        <option value="Industry Marketing">Industry Marketing</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="requirement" rows="4" placeholder="Message*" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="rb-btn rb-btn-primary w-100">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.6 Links to Other Sections -->
    <section class="rb-links-strip">
        <div class="container">
            <ul>
                <li><a href="#be-found">Be Found</a></li>
                <li><a href="#be-built">Be Built</a></li>
                <li><a href="#be-organized">Be Organized</a></li>
                <li><a href="{{ url('about-us') }}">About Us</a></li>
                <li><a href="{{ url('blog') }}">Blogs</a></li>
                <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
            </ul>
        </div>
    </section>

</main>

@endsection
