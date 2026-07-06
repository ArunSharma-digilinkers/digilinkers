@extends('layouts.main')
@section('content')

<div class="admin-blog-wrapper section-entry">
    <div class="container">
        <h1>Blog Section</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create a Blog Post</a>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mt-4">
                    <div class="card h-100">
                        @if($post->featured_image && file_exists(public_path('storage/post/' . $post->featured_image)))
                            <img src="{{ asset('storage/post/' . $post->featured_image) }}" class="card-img-top" alt="Uploaded Image">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->post_title }}</h4>
                            <p class="card-text">{!! Str::words(strip_tags($post->blog_post), 20, '...') !!}</p>
                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 mt-4">
                    <div class="alert alert-info">No posts found.</div>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
