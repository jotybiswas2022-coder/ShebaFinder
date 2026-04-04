@extends('frontend.app')

@section('content')

<div class="container-fluid profile-container">

    <!-- Success Alert -->
    @if (session('success'))
        <div class="alert custom-alert">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Profile Card -->
    <div class="profile-card">

        <!-- Header -->
        <div class="card-header text-center">
            <i class="bi bi-person-circle header-icon"></i>
            <h4>Profile Overview</h4>
        </div>

        <div class="card-body">

            @if($profile)

            <!-- Avatar -->
            <div class="avatar-section">
                <div class="avatar">
                    {{ strtoupper(substr($profile->title ?? 'U', 0, 1)) }}
                </div>
                <div>
                    <h5>{{ $profile->title ?? 'Not set' }}</h5>

                    <!-- ✅ Category Safe -->
                    <span class="badge blood-badge">
                        <i class="bi bi-tag-fill"></i>
                        {{ $profile->PostCategory->name ?? 'No Category' }}
                    </span>
                </div>
            </div>

            <!-- Info Fields -->
            <div class="info-list">

                <!-- Mobile -->
                <div class="info-item">
                    <label><i class="bi bi-telephone"></i> Mobile</label>
                    <p>{{ $profile->contact_number ?? 'Not set' }}</p>
                </div>

                <!-- Image -->
                <div class="info-item">
                    <label><i class="bi bi-image"></i> Profile Image</label>

                    @if(!empty($profile->file))
                        <img src="{{ config('app.storage_url') }}{{ $profile->file }}"
                             alt="Profile Image"
                             class="img-fluid rounded mb-3">
                    @else
                        <p>No Image</p>
                    @endif
                </div>

                <!-- Division -->
                <div class="info-item">
                    <label><i class="bi bi-geo-alt"></i> Division</label>
                    <p>{{ $profile->division ?? 'Not set' }}</p>
                </div>

            </div>

            @else

            <!-- প্রোফাইল এখনো তৈরি হয়নি -->
            <div class="text-center py-4">
                <i class="bi bi-person-x" style="font-size:3rem; color:#aaa;"></i>
                <p class="mt-3 text-muted">আপনার প্রোফাইল এখনো তৈরি হয়নি।<br>নিচের বাটনে ক্লিক করে প্রোফাইল তৈরি করুন।</p>
            </div>

            @endif

            <!-- Button -->
            <a href="{{ url('/profile/edit') }}" class="btn btn-primary w-100 mt-3">
                <i class="bi bi-pencil-square"></i> {{ $profile ? 'Edit Profile' : 'Create Profile' }}
            </a>

        </div>
    </div>

</div>

@endsection