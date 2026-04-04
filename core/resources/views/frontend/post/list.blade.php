@extends('frontend.app')

@section('content')

{{-- ========== ALERTS ========== --}}
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show m-3 np-alert np-alert-success">
    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger alert-dismissible fade show m-3 np-alert np-alert-danger">
    <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
@endif

{{-- ========== BREAKING NEWS TICKER ========== --}}
<div class="np-breaking-bar">
  <div class="np-breaking-label">
    <i class="bi bi-lightning-charge-fill"></i> Breaking News
  </div>
  <div class="np-ticker-wrap">
    <div class="np-ticker-content">
      <span>Stay updated with the latest news from around the world</span>
      <span>News Portal brings you real-time coverage of events that matter</span>
      <span>Your trusted source for breaking news and in-depth analysis</span>
      <span>Subscribe now for exclusive stories and daily briefings</span>
    </div>
  </div>
</div>

<div class="container mb-4">
  <form method="GET" action="">
    <div class="row g-2">

      <!-- Name -->
      <div class="col-md-4">
        <input type="text" name="name" class="form-control"
               placeholder="Search by name..."
               value="{{ request('name') }}">
      </div>

      <!-- Category -->
      <div class="col-md-4">
        <select name="category_id" class="form-select">
          <option value="">All Category</option>
          @foreach($categories as $cat)
            <option value="{{ $cat->id }}"
              {{ request('category_id') == $cat->id ? 'selected' : '' }}>
              {{ $cat->name }}
            </option>
          @endforeach
        </select>
      </div>

      <!-- Division -->
      <div class="col-md-3">
        <select name="division" class="form-select">
          <option value="">All Division</option>
          @foreach (['Khulna','Dhaka','Chittagong','Rajshahi','Sylhet'] as $div)
            <option value="{{ $div }}"
              {{ request('division') == $div ? 'selected' : '' }}>
              {{ $div }}
            </option>
          @endforeach
        </select>
      </div>

      <!-- Button -->
      <div class="col-md-1 d-grid">
        <button class="btn btn-primary">
          <i class="bi bi-search"></i>
        </button>
      </div>

    </div>
  </form>
</div>

{{-- ========== NEWS POSTS SECTION ========== --}}
<main>
  <section class="np-news-section">
    <div class="np-section-container">

      {{-- Section Header --}}
      <div class="np-section-header np-animate np-press-line">
        <div class="np-edition-date">
          <i class="bi bi-calendar3 me-1"></i> Today's Edition &bull; {{ now()->timezone('Asia/Dhaka')->format('l, d F Y') }}
        </div>
        <div class="np-masthead-label">
          <i class="bi bi-newspaper"></i> News Portal
        </div>
        <h2 class="np-main-headline">Latest News</h2>
        <p class="np-sub-headline">
          Browse the latest news articles, stories, and updates from our newsroom
        </p>
        <div class="np-divider">
          <span class="np-divider-line"></span>
          <span class="np-divider-line thick"></span>
          <i class="bi bi-diamond-fill"></i>
          <span class="np-divider-line thick"></span>
          <span class="np-divider-line"></span>
        </div>
      </div>

      <hr class="np-double-rule">

      {{-- News Grid --}}
      <div class="np-news-grid">

        @forelse(($posts ?? collect())->sortByDesc('created_at') as $post)
          <div class="np-news-card np-animate">

            {{-- Media --}}
            <div class="np-card-media">

              @php
                $ext = strtolower(pathinfo($post->file, PATHINFO_EXTENSION));
                $videoExtensions = ['mp4','webm','ogg','avi','mkv'];
                $imageExtensions = ['jpg','jpeg','png','gif','webp'];
                $isImage = in_array($ext, $imageExtensions);
                $isVideo = in_array($ext, $videoExtensions);
              @endphp

              @if($post->file)

                @if($isImage)
                  <img
                    src="{{ config('app.storage_url') }}{{ $post->file }}"
                    alt="{{ $post->title }}"
                    loading="lazy">
                @elseif($isVideo)
                  <video controls>
                    <source src="{{ config('app.storage_url') }}{{ $post->file }}" type="video/mp4">
                  </video>
                @else
                  <div class="np-media-placeholder">
                    <i class="bi bi-file-earmark-x"></i>
                    <p>Unsupported Media</p>
                  </div>
                @endif

              @else
                <div class="np-media-placeholder">
                  <i class="bi bi-image"></i>
                  <p>No Media Available</p>
                </div>
              @endif

              {{-- Category ribbon --}}
              <span class="np-category-ribbon np-stamp-effect">
                <i class="bi bi-tag-fill me-1"></i> News
              </span>

              {{-- Hover overlay --}}
              <div class="np-card-overlay">
                <a href="{{ url('/post/'.$post->id) }}" class="np-read-btn">
                  <i class="bi bi-book-half"></i> Read Article
                </a>
              </div>

            </div>

            {{-- Card Body --}}
            <div class="np-card-body">
              <h3 class="np-card-title">Name: {{ $post->title }}</h3>
              <h3 class="np-card-title">Category: {{ $post->PostCategory->name ?? 'No Category' }}</h3>
              <h3 class="np-card-title">Division: {{ $post->division ?? 'No Division' }}</h3>
              <h3 class="np-card-title">Contact Number: {{ $post->contact_number ?? 'No Contact Number' }}</h3>

            </div>

            {{-- Ink spread effect --}}
            <div class="np-ink-spread"></div>

          </div>
        @empty
          <div class="np-empty-state np-animate">
            <div class="np-empty-icon">
              <i class="bi bi-newspaper"></i>
            </div>
            <h5>No News Articles Available</h5>
            <p>Please check back later for the latest updates and breaking stories.</p>
          </div>
        @endforelse

      </div>
    </div>
  </section>
</main>

{{-- ========== SCROLL ANIMATION SCRIPT ========== --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

  // Intersection Observer for scroll animations
  const animElements = document.querySelectorAll('.np-animate');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('np-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    animElements.forEach(function (el) { observer.observe(el); });
  } else {
    // Fallback
    animElements.forEach(function (el) { el.classList.add('np-visible'); });
  }

  // Auto-dismiss alerts after 5 seconds
  document.querySelectorAll('.np-alert').forEach(function (alert) {
    setTimeout(function () {
      var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
      if (bsAlert) bsAlert.close();
    }, 5000);
  });
});
</script>

@endsection
