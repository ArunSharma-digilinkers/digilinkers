@extends('layouts.landing-main')

@section('title', 'Thanks for contacting')

@section('description', 'Discover Digilinkers, a leading digital marketing agency in India, specializing in SEO, web
design, and development for unique online success.')

@section('keywords', 'Digital Marketing Company Delhi, SEO Company Delhi, Digital Marketing Agency, Digital Marketing
Company India, Best SEO Services, Best SEO Services Company India, Best SEO Services in India, Web Development Company,
Top SEO Services in India')

@section('content')

<div class="main-wrapper">
    <div class="main-cover">
        <div class="thankyou-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                            <div class="thank-you-box">
                              <div class="thankyou-img">
                        <img src="{{ asset('img/thankyouimg.png') }}" alt="" class="img-fluid">
                      </div>
                                <h4>We’ve received your message and our team will connect with you shortly.While you wait, feel free to check out our portfolio: </h4>
                                <!-- <p>
                                    Thanks for reaching out we've got your message, and trust us, you're in for something good! Our team is already gearing up to connect with you and craft a solution that fits just right.
                                    While we get things moving, why not explore how others like you are growing faster with us? Stay tuned  the next step could change the way you think about digital!
                                    </p>
                                    -->
                                <a href="https://digilinkers.com/" target="_blank">Visit Website</a>
                                <a href="{{ asset('img/broschure.pdf') }}" target="_blank">Company  Catalouge</a><br>
                                <a href="https://digilinkers.com/digital-marketing-company">Back to Home</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 
        </div>





@endsection