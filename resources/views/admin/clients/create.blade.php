@extends('layouts.main')
@section('content')

<main>
    
<div class="admin-form-wrapper section-entry">
    <div class="container">
        <form action="{{ route('clients.store') }}" class="admin-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Client Image</label>
                        <input type='file' class="form-control" name="image" placeholder="Client Image"/>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <br>
                        <div class="save-button-wrap">
                            <button class="btn c-btn">Add New Clients</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</main>

@endsection
