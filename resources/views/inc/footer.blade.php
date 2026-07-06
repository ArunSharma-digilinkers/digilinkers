<!-- footer Start -->
<footer class="footer-wrapper text-white py-5">
    <div class="container">
        <div class="row">

            <!-- Contact Section -->
            <div class="col-lg-4 col-sm-12 mb-4">
                <h5 class="footer-links">Drop us a line</h5>
                <p>
                    <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a
                        href="mailto:info@digilinkers.com">info@digilinkers.com</a>
                </p>
                <p>
                    <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a
                        href="mailto:contactus@digilinkers.com">contactus@digilinkers.com</a>
                </p>
                <h5>Call us</h5>
                <p>
                    <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+91-9818000334">+91-9818000334</a>
                </p>
                <h5>Address</h5>
                <p>
                    RZ-1/A, 2nd Floor Sitapuri, Main Pankha Road, Delhi - 110045 (Near Dabri Mor Metro Station Gate No
                    3)
                </p>
                <div class="newsletter-subscribe">
                    <h5 class="footer-links">Subscribe to our <br>newsletter</h5>
                    <p>Get the latest updates and exclusive offers.</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form class="newsletter-form d-flex" method="POST" action="{{ route('newsletter.create') }}">
                @csrf
                    <div class="input-group">
                        <input type="email" class="form-control rounded-start" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn btn-gradient rounded-end" >
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Section -->
            <div class="col-lg-8 col-sm-12 mb-4">
                <div class="row">
                    <!-- Links Section -->
                    <div class="col-md-4 col-sm-12 mb-4">
                        <h5 class="footer-links">Useful Links</h5>
                        <ul class="list-links">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('about-us') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ url('portfolio') }}">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ url('contact-us') }}">Contact</a>
                            </li>
                              <li>
                                <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-12 mb-4">
                        <h5 class="footer-links">Marketing Services</h5>
                        <ul class="list-links">
                            <li>
                                <a href="{{ url('search-engine-optimization') }}">Seo Services</a>
                            </li>
                            <li>
                                <a href="{{ url('social-media-marketing') }}">Smo Services</a>
                            </li>
                            <li>
                                <a href="{{ url('google-adword') }}">Google Adword</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-12 mb-4">
                        <h5 class="footer-links">Development Services</h5>
                        <ul class="list-links">
                            <li>
                                <a href="{{ url('website-designing') }}">Website Designing</a>
                            </li>
                            <li>
                                <a href="{{ url('apps-development') }}">App Development</a>
                            </li>
                            <li>
                                <a href="{{ url('e-commerce-website') }}">E-commerce Website</a>
                            </li>
                            <li>
                                <a href="{{ url('landing-page-design') }}">Landing Page Design</a>
                            </li>
                            <li>
                                <a href="{{ url('shopify-development') }}">Shopify Development</a>
                            </li>
                            <li>
                                <a href="{{ url('wordpress-development') }}">Wordpress Development</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <p class="footer-copyright-text">
                &copy; copyright 2025 . All Rights Reserved. Site Created & Maintained By <a
                    href="https://www.digilinkers.com" target="_blank" class="creator-link">Digilinkers</a>
            </p>
        </div>
    </div>
</div>
<!-- footer End -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script src="https://digilinkers.com/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
<script src="https://digilinkers.com/js/main.js"></script>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div id="popupForm">
        
        <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                    <h3 class="modal-title" id="formModalLabel"> Enquiry Now</h3>
                    <p>
                    Our digital marketing expert will contact you shortly for a quick and easy consultation.  
                    </p> 
        
                    <form action="{{ route('send.popup') }}" id="popupform" method="POST">
                        @csrf
                       
                        <!-- Success Message -->
                        <div class="alert alert-success d-none" id="success-message"></div>
                        <!-- General Error Message -->
                        <div class="alert alert-danger d-none" id="error-message"></div>

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control modal-one-input" placeholder="Enter Name">
                            <span class="text-danger" id="error-name"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control modal-one-input" placeholder="Enter Email">
                            <span class="text-danger" id="error-email"></span>
                        </div>

                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="tel" id="mobile" name="mobile" class="form-control modal-one-input" placeholder="Enter Mobile">
                            <span class="text-danger" id="error-mobile"></span>
                        </div>

                        <div class="default-btn mt-4">
                            <button type="submit" name="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('img/popup-img.png') }}" alt="Popup Image" class="img-fluid">
                    </div>
                </div>
            </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('#popupform').on('submit', function(e) {
    e.preventDefault();

    // Clear messages
    $('#error-name, #error-email, #error-mobile').text('');
    $('#success-message, #error-message').addClass('d-none').text('');

    $.ajax({
        url: "{{ route('send.popup') }}",
        method: "POST",
        data: $(this).serialize(),
        success: function(response) {
            $('#success-message').removeClass('d-none').text("Your message has been sent successfully!");
            $('#popupform')[0].reset(); // Clear the form
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                if (errors.name) $('#error-name').text(errors.name[0]);
                if (errors.email) $('#error-email').text(errors.email[0]);
                if (errors.mobile) $('#error-mobile').text(errors.mobile[0]);
            } else {
                $('#error-message').removeClass('d-none').text("Something went wrong. Please try again.");
            }
        }
    });
});
    </script>
<script>
    $(document).ready(function(){

      $('.payment-logo').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout: 5000,
        autoplaySpeed: 5000,
        responsive:{
          0:{ items:2 },
          600:{ items:4 },
          1000:{ items:4 }
        }
      });

      $('.client-logo-landing').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        responsive:{
          0:{ items:2 },
          600:{ items:4 },
          1000:{ items:5 }
        }
      });

      $('.testimonial-review').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
          0:{ items:1 },
          600:{ items:1 },
          1000:{ items:1 }
        }
      });

    });
  </script>

</body>
</html>
