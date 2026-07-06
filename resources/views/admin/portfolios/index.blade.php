@extends('layouts.main')
@section('content')

<main>
    <div class="admin-blog-wrapper section-entry">
        <div class="container">
            <h1>Portfolio section</h1>
            <div class="admin-btn mt-4 mb-5">
                <a href="{{ route('portfolios.create') }}">Create a Portfolio</a>
            </div>
            <div class="row">
                @foreach($Portfolios as $item)
                    <div class="col-md-2 mb-4">
                        <div class="card">
                                <img src="{{ asset('storage/portfolio/' . $item->image) }}" alt="Image" >
                                <p class="text-center">
                                    {{ $item->title }}
                                </p>
                            <div class="card-footer">
                                <a href="{{ route('portfolios.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('portfolios.destroy', $item->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=""
                                        onclick="return confirm('Are you sure you want to delete?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
