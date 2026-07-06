@section('title', $posts->title)
@section('description', $posts->description)


@extends('layouts.main')
@section('content')

  <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$posts->post_title}}</h2>
                </div>
            </div>
        </div>
    </div>
<div class="details-blog-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              
                <div class="blog-img-wrap">
                    <img src="{{ asset('storage/post/' . $posts->featured_image) }}" alt="Uploaded Image" class="img-fluid">
                </div>
                <div class="blog-description-wrap mt-3">
                    <h5><i class="fa-regular fa-calendar"></i>  {{$posts->created_at->format('d-m-Y')}}</h5>
                    <p>{!! $posts->blog_post !!}</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
