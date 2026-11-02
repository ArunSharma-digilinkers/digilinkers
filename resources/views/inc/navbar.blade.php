<header>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-infos">
              <span><i class="fas fa-phone"></i><a href="tel:+91-9818000334"> +91-9818000334</a></span>
                <span><i class="fas fa-envelope"></i><a href="mailto:contactus@digilinkers.com"> contactus@digilinkers.com</a></span>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/Digilinkers" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/digilinkers/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/digilinkers" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.youtube.com/@Digilinkers" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://x.com/digilinkers" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('about-us') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#be-found">Be Found</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#be-built">Be Built</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#be-organized">Be Organized</a></li>
                <li class="nav-item nav-item-cta">
                    <a class="nav-cta-btn" href="{{ url('contact-us') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</header>