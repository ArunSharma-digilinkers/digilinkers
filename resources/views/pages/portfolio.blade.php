@extends('layouts.main')

@section('title', 'Digilinkers Key Clients | Our Portfolio')

@section('description', 'Digilinkers has more than 500 happy client across India. 100% client retention. Call us now
    9818000334 and give new wings to your business')

@section('keywords', 'Digital Marketing Company Delhi, SEO Company Delhi, Digital Marketing Agency, Digital Marketing
    Company India, Best SEO Services, Best SEO Services Company India, Best SEO Services in India, SMO Services, Social
    Media Marketing, SMO Company in India, SMO Services provider in India, Digital Marketing Services, Best Digital
    Marketing Company, Digital Marketing Agency near me')

@section('content')

<main>

    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Portfolio</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="portfolio-section container py-5">
                    <ul class="nav nav-pills mb-4" id="portfolioTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="website-tab" data-bs-toggle="pill"
                                data-bs-target="#website" type="button" role="tab">
                                Website
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="design-tab" data-bs-toggle="pill" data-bs-target="#design"
                                type="button" role="tab">
                                Creatives
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="portfolioContent">
                        <!-- Website Projects -->
                        <div class="tab-pane fade show active" id="website" role="tabpanel">
                            <div class="row">
                               @foreach($portfolios['website'] ?? [] as $item)
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                                        <a href="{{ $item->link }}" target="_blank">
                                        <div class="portfolio-card">
                                            <img src="{{ asset('storage/portfolio/' . $item->image) }}"
                                                class="img-fluid" alt="{{ $item->title }}">
                                                <div class="title mt-3">
                                                    <h4> {{ $item->title }}</h4>
                                                </div>
                                        </div>
                                     </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Design Projects -->
                        <div class="tab-pane fade" id="design" role="tabpanel">
                            <div class="row">
                             @foreach($portfolios['design'] ?? [] as $item)
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                                        <div class="card h-100">
                                            <img src="{{ asset('storage/portfolio/' . $item->image) }}"
                                                class="card-img-top" alt="{{ $item->title }}">
                                          
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
</main>
@endsection
