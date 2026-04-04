@extends('frontend.app')

@section('content')

<div class="container py-4">
    <div class="card shadow rounded-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Profile</h5>
        </div>

        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="profileForm" action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Name / Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">নাম (Name)</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', $profile->title ?? '') }}" required>
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">ক্যাটাগরি (Category)</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $profile->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">মোবাইল নম্বর (Contact Number)</label>
                        <input type="text" name="contact_number" class="form-control"
                               value="{{ old('contact_number', $profile->contact_number ?? '') }}" required>
                    </div>

                    <!-- Division -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">বিভাগ (Division)</label>
                        <select name="division" class="form-select" required>
                            <option value="">Select Division</option>
                            @foreach ($divisions as $div)
                                <option value="{{ $div }}"
                                    {{ old('division', $profile->division) == $div ? 'selected' : '' }}>
                                    {{ $div }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- File -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">প্রোফাইল ছবি / ভিডিও</label>
                        @if($profile->file)
                            <div class="mb-2">
                                @php
                                    $ext = strtolower(pathinfo($profile->file, PATHINFO_EXTENSION));
                                    $isImg = in_array($ext, ['jpg','jpeg','png','gif','webp']);
                                @endphp
                                @if($isImg)
                                    <img src="{{ config('app.storage_url') }}{{ $profile->file }}"
                                         class="img-thumbnail" style="width:80px;height:80px;object-fit:cover;">
                                @else
                                    <span class="text-muted small">Current file: {{ basename($profile->file) }}</span>
                                @endif
                            </div>
                        @endif
                        <input type="file" class="form-control" name="file" accept="image/*,video/mp4">
                        <small class="text-muted">ছবি (jpg, png, gif, webp) বা MP4 ভিডিও। নতুন ফাইল না দিলে আগেরটা থাকবে।</small>
                    </div>

                    <!-- Progress -->
                    <div class="col-12">
                        <div class="progress d-none" id="progressBox">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                 id="progressBar" style="width:0%">0%</div>
                        </div>
                    </div>

                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary" id="submitBtn">
                        <i class="bi bi-save me-1"></i> Update Profile
                    </button>
                    <a href="{{ url('/profile') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Back
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){

    const form = document.getElementById('profileForm');
    const btn = document.getElementById('submitBtn');
    const progressBox = document.getElementById('progressBox');
    const progressBar = document.getElementById('progressBar');

    // পুরোনো error alert সরাও
    function clearErrors() {
        const old = form.querySelector('.alert-danger');
        if (old) old.remove();
    }

    // Error alert দেখাও
    function showError(msg) {
        clearErrors();
        const div = document.createElement('div');
        div.className = 'alert alert-danger alert-dismissible fade show';
        div.innerHTML = '<i class="bi bi-exclamation-circle me-1"></i>' + msg +
            '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
        form.prepend(div);
        window.scrollTo({top: 0, behavior: 'smooth'});
    }

    form.addEventListener('submit', function(e){
        e.preventDefault();
        clearErrors();

        let formData = new FormData(form);
        // _method=PUT ইতিমধ্যে @method('PUT') থেকে আছে, তবু নিশ্চিত করো
        if (!formData.has('_method')) {
            formData.append('_method', 'PUT');
        }

        // CSRF token header যোগ করো
        const csrfToken = document.querySelector('meta[name="csrf-token"]')
                          ? document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                          : document.querySelector('input[name="_token"]')?.value;

        let xhr = new XMLHttpRequest();
        xhr.open("POST", form.action, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        if (csrfToken) {
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
        }

        btn.disabled = true;
        progressBox.classList.remove('d-none');

        xhr.upload.onprogress = function(e){
            if(e.lengthComputable){
                let percent = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percent + '%';
                progressBar.innerHTML = percent + '%';
            }
        };

        xhr.onload = function(){
            btn.disabled = false;
            progressBox.classList.add('d-none');
            progressBar.style.width = '0%';
            progressBar.innerHTML = '0%';

            // 419 = CSRF mismatch
            if (xhr.status === 419) {
                showError('Session expired. Please refresh the page and try again.');
                return;
            }

            try {
                let res = JSON.parse(xhr.responseText);
                if (res.status) {
                    const toast = document.createElement('div');
                    toast.className = 'alert alert-success alert-dismissible fade show mt-3';
                    toast.innerHTML = '<i class="bi bi-check-circle me-1"></i>' + res.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    form.prepend(toast);
                    setTimeout(() => { window.location.href = '/profile'; }, 1500);
                } else {
                    // Validation errors (422)
                    if (res.errors) {
                        const msgs = Object.values(res.errors).flat().join('<br>');
                        showError(msgs);
                    } else {
                        showError(res.message || 'Update failed!');
                    }
                }
            } catch(err) {
                // JSON না হলে — সরাসরি redirect (normal form submit response)
                if (xhr.status >= 200 && xhr.status < 400) {
                    window.location.href = '/profile';
                } else {
                    showError('Server error ('+xhr.status+'). Please try again.');
                }
            }
        };

        xhr.onerror = function(){
            showError('Network error! Please check your connection and try again.');
            btn.disabled = false;
            progressBox.classList.add('d-none');
        };

        xhr.send(formData);
    });

});
</script>

@endsection
