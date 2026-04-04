@extends('frontend.app')

@section('content')

<div class="container py-4">
    <div class="card shadow rounded-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Profile</h5>
        </div>

        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Name -->
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', optional($profile)->title) }}">
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ old('category_id', optional($profile)->category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-6">
                        <label>Contact</label>
                        <input type="text" name="contact_number" class="form-control"
                               value="{{ old('contact_number', optional($profile)->contact_number) }}">
                    </div>

                    <!-- Division -->
                    <div class="col-md-6">
                        <label>Division</label>
                        <select name="division" class="form-control">
                            <option value="">Select Division</option>

                            @foreach(['Khulna','Dhaka','Chittagong','Rajshahi','Sylhet','Barishal','Mymensingh','Rangpur'] as $div)
                                <option value="{{ $div }}"
                                    {{ old('division', optional($profile)->division) == $div ? 'selected' : '' }}>
                                    {{ $div }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <!-- File -->
                    <div class="col-md-6">
                        <label>File</label>

                        @if(optional($profile)->file)
                            <img src="{{ config('app.storage_url') }}{{ $profile->file }}"
                                 width="80">
                        @endif

                        <input type="file" name="file" class="form-control">
                    </div>

                </div>

                <button class="btn btn-primary mt-3">Update</button>
            </form>

        </div>
    </div>
</div>

@endsection