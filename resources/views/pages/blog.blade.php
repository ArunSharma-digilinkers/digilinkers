@extends('layouts.main')
@section('title', 'Digital Marketing Blogs | Tips & Strategies by Digilinkers')

@section('description', 'Stay ahead with Digilinkers’ expert blogs covering SEO, PPC, social media, and web strategies—your go-to source for digital marketing tips and trends.')

@section('content')

<div class="main-wrapper">
       <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-wrapper section-entry">
        <div class="container">
            <div class="row">
                @foreach ($posts as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                            <a href="{{route('details.show', $item->slug)}}">
                            <div class="blog-main-card-wrapper">
                                <div class="blog-card-img">
                                    <img src="{{ asset('storage/post/' . $item->featured_image) }}" alt="Uploaded Image" class="img-fluid">
                                </div>
                                <div class="blog-details">
                                    <div class="blog-card-title mt-3">
                                        <p><i class="fa-regular fa-calendar"></i>  {{$item->created_at->format('d-m-Y')}}</p>
                                        <h5>{{$item->post_title}}</h5>
                                    </div>
                                    <div class="blog-crd-details">
                                  <p>{!! Str::words(strip_tags($item->blog_post), 25, '...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
            </div>

        </div>
    </div>
</div>

@endsection
