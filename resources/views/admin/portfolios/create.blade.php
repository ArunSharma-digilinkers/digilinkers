@extends('layouts.main')
@section('content')

<main>
    
<div class="admin-form-wrapper section-entry">
    <div class="container">
        <form action="{{ route('portfolios.store') }}" class="admin-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Type Selector -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Portfolio Type</label>
                        <select class="form-control" name="type" required>
                            <option value="">Select Type</option>
                            <option value="website">Website</option>
                            <option value="design">Graphic Design</option>
                        </select>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type='file' class="form-control" name="image" required />
                    </div>
                </div>

                <!-- Title -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Name / Title</label>
                        <input type='text' class="form-control" name="title" placeholder="Name or Title" required />
                    </div>
                </div>

                <!-- Website Link (optional) -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Website Link</label>
                        <input type='text' class="form-control" name="link" placeholder="https://..." />
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <br>
                        <div class="save-button-wrap">
                            <button class="btn c-btn">Add New Portfolio</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


</main>

@endsection
