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

            <!-- Avatar -->
            <div class="avatar-section">
                <div class="avatar">
                    {{ strtoupper(substr($profile->title ?? 'U', 0, 1)) }}
                </div>
                <div>
                    <h5>{{ $profile->title ?? 'Not set' }}</h5>
                    <span class="badge blood-badge">
                        <i class="bi bi-droplet-fill"></i>
                        {{ $profile->category ?? 'Not set' }}
                    </span>
                </div>
            </div>

            <!-- Info Fields -->
            <div class="info-list">

                <div class="info-item">
                    <label><i class="bi bi-telephone"></i> Mobile</label>
                    <p>{{ $profile->contact_number ?? 'Not set' }}</p>
                </div>

                 <img src="{{ config('app.storage_url') }}{{ $profile->file }}" alt="Profile Image" class="img-fluid rounded mb-3">

                <div class="info-item">
                    <label><i class="bi bi-geo-alt"></i> Division</label>
                    <p>{{ $profile->division ?? 'Not set' }}</p>
                </div>
                </div>

            </div>

            <!-- Button -->
            <a href="{{ url('/profile/edit') }}" class="btn btn-primary w-100 mt-3">
                <i class="bi bi-pencil-square"></i> Edit Profile
            </a>

        </div>
    </div>

</div>

<style>

/* Layout */
.profile-container{
    min-height: 90vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

/* Alert */
.custom-alert{
    background:#d1fae5;
    color:#065f46;
    border-radius:10px;
    padding:10px 15px;
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:15px;
}

/* Card */
.profile-card{
    width:100%;
    max-width:420px;
    border-radius:16px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    overflow:hidden;
    background:#fff;
}

/* Header */
.card-header{
    background:#4f46e5;
    color:#fff;
    padding:25px 20px;
}

.header-icon{
    font-size:40px;
    display:block;
    margin-bottom:5px;
}

/* Body */
.card-body{
    padding:20px;
}

/* Avatar */
.avatar-section{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
}

.avatar{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#4f46e5;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    font-weight:bold;
}

/* Badge */
.blood-badge{
    background:#fee2e2;
    color:#dc2626;
    padding:4px 10px;
    border-radius:20px;
    font-size:12px;
}

/* Info */
.info-list{
    display:flex;
    flex-direction:column;
    gap:12px;
}

.info-item{
    background:#f9fafb;
    padding:12px;
    border-radius:10px;
}

.info-item label{
    font-size:12px;
    color:#6b7280;
    display:block;
    margin-bottom:2px;
}

.info-item p{
    margin:0;
    font-weight:500;
}

.highlight{
    border:1px solid #fecaca;
}

.highlight .blood{
    color:#dc2626;
    font-size:18px;
    font-weight:bold;
}

/* Button */
.btn-primary{
    background:#4f46e5;
    border:none;
    border-radius:10px;
}

.btn-primary:hover{
    background:#4338ca;
}

</style>

@endsection