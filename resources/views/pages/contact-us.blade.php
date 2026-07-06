@extends('layouts.main')
@section('title', 'No. 1 Digital Marketing Service Provider Delhi | Digilinkers')

@section('description', 'We offers Online marketing service across India. Call us on 9818000334 to know our affordable SEO Packages and SMO Packages.')

@section('keywords', 'Digital Marketing Company Delhi, SEO Company Delhi, Digital Marketing Agency, Digital Marketing Company India, Best SEO Services, Best SEO Services Company India, Best SEO Services in India, SMO Services, Social Media Marketing, SMO Company in India, SMO Services provider in India, Digital Marketing Services, Best Digital Marketing Company, Digital Marketing Agency near me')
@section('content')
<main>
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section section-entry">
    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-4 col-md-12 col-sm-12 b-4">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>We’d love to hear from you! Fill out the form or reach us directly.</p>
                    
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>RZ-1/A, 2nd Floor Sitapuri, Main Pankha Road, Delhi - 110045 (Near Dabri Mor Metro Station Gate No 3)</p>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-phone"></i>
                        <p><a href="tel:+91-9818000334">+91 - 9818 00 0334</a></p>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:info@digilinkers.com">info@digilinkers.com</a></p>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:contactus@digilinkers.com">contactus@digilinkers.com</a></p>
                    </div>

                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
          
                <div class="contact-form form-wrap">
                   
                    <h2 class="mb-4">Send a Message</h2>
                    <div id="formSuccess" class="alert alert-success d-none"></div>
                        <div id="formErrors" class="alert d-none"></div>

                        <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="mobile" class="form-control" placeholder="Your Mobile">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>

                            <button type="submit" class="btn about-btn">Send Message</button>
                        </form>
                </div>
            </div>
        </div>
        <div class="map mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7005.072437714213!2d77.085307!3d28.613687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e4b3b5c3a1%3A0x7dac887432b854cf!2sDigilinkers%20-%20Best%20Digital%20Marketing%20Agency%20in%20Delhi%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1742299532835!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

</main>

@endsection
