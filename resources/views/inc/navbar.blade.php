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
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('about-us') }}">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Development
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('website-designing') }}">Custom Website Designing</a></li>
                        <li><a class="dropdown-item" href="{{ url('e-commerce-website') }}">E-commerce Website</a></li>
                        <li><a class="dropdown-item" href="{{ url('wordpress-development') }}">Wordpress Development</a></li>
                        <li><a class="dropdown-item" href="{{ url('apps-development') }}">App Development</a></li>
                        <li><a class="dropdown-item" href="{{ url('landing-page-design') }}">Landing Page Design</a></li>
                        <li><a class="dropdown-item" href="{{ url('shopify-development') }}">Shopify Development</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Digital Marketing
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('social-media-marketing') }}">Social Media Marketing(SMM)</a></li>
                        <li><a class="dropdown-item" href="{{ url('search-engine-optimization') }}">Search Engine Optimization(SEO)</a></li>
                        <li><a class="dropdown-item" href="{{ url('google-adword') }}">Google Adword Management</a></li>
                        <li><a class="dropdown-item" href="{{ url('brand-building') }}">Brand Building</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Industry
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('battery-industry') }}">Battery Industry</a></li>
                        <li><a class="dropdown-item" href="{{ url('ev-charger') }}">EV Charger</a></li>
                        <li><a class="dropdown-item" href="{{ url('travel-industry') }}">Travel Industry</a></li>
                        <li><a class="dropdown-item" href="{{ url('furniture-industry') }}">Furniture Industry</a></li>
                        <li><a class="dropdown-item" href="{{ url('real-state-industry') }}">Real State Industry</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('conference-services') }}">Conference Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

</header>