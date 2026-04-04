@extends('frontend.app')

@section('content')

@if(session('success'))
<div class="alert-success-custom">
    {{ session('success') }}
</div>
@endif

<!-- TOP BAR -->
<div class="news-top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><i class="bi bi-calendar3"></i> <span id="currentDate"></span></span>
            <span><i class="bi bi-clock"></i> <span id="currentTime"></span></span>
            <span><i class="bi bi-geo-alt"></i> Worldwide</span>
        </div>
    </div>
</div>

<!-- MASTHEAD -->
<header class="masthead newspaper-fold">
    <div class="masthead-date" id="mastheadDate"></div>
    <div class="masthead-logo">News <span>Portal</span></div>
    <div class="masthead-tagline">Your Trusted Source for Breaking News & Stories</div>
    <div class="edition-badge"><i class="bi bi-lightning-fill"></i> Online Edition</div>
</header>

<!-- MAIN NAVIGATION -->
<nav class="main-nav">
    <div class="container">
        <ul class="nav-links">
            <li><a href="#" class="active"><i class="bi bi-house-door"></i> Home</a></li>
            <li><a href="#products"><i class="bi bi-grid"></i> Categories</a></li>
        </ul>
    </div>
</nav>

<div class="cafe-wrapper">

    <!-- ================= HERO SLIDER ================= -->
    <div class="slider-container">
        @if($slider && ($slider->slider1 || $slider->slider2))
            @if($slider->slider1)
            <div class="slide active">
                <img src="{{ config('app.storage_url') }}{{ $slider->slider1 }}" alt="News Portal Slide">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <span class="badge-tag"><i class="bi bi-newspaper"></i> Breaking News</span>
                    <h1>Welcome to <span>News Portal</span></h1>
                    <p>Stay informed with the latest headlines, in-depth reports, and stories from around the world.</p>
                    <div class="slide-btns">
                        <a href="#products" class="btn-primary-custom">Read News <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endif

            @if($slider->slider2)
            <div class="slide {{ !$slider->slider1 ? 'active' : '' }}">
                <img src="{{ config('app.storage_url') }}{{ $slider->slider2 }}" alt="News Portal Slide">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <span class="badge-tag"><i class="bi bi-stars"></i> Latest Updates</span>
                    <h1>Discover <span>Latest Stories</span></h1>
                    <p>Explore breaking news, trending topics, and in-depth coverage from trusted sources.</p>
                    <div class="slide-btns">
                        <a href="#products" class="btn-primary-custom">Explore Stories <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
        @endif

        <!-- Slider Arrows -->
        <button class="slider-arrow prev" onclick="changeSlide(-1)"><i class="bi bi-chevron-left"></i></button>
        <button class="slider-arrow next" onclick="changeSlide(1)"><i class="bi bi-chevron-right"></i></button>

        <!-- Slider Dots -->
        <div class="slider-dots">
            @if($slider && ($slider->slider1 || $slider->slider2))
                @if($slider->slider1)
                <button class="slider-dot active" onclick="goToSlide(0)"></button>
                @endif
                @if($slider->slider2)
                <button class="slider-dot {{ !$slider->slider1 ? 'active' : '' }}" onclick="goToSlide(1)"></button>
                @endif
            @endif
        </div>
    </div>

    <!-- ================= NEWS CATEGORIES SECTION ================= -->
    <section class="category-section paper-texture" id="products">
        <div class="container" style="position: relative;">
            <div class="coffee-ring coffee-ring-1"></div>
            <div class="coffee-ring coffee-ring-2"></div>
            <div class="coffee-ring coffee-ring-3"></div>
            <div class="pour-line"></div>

            <div class="newspaper-divider" style="margin-bottom: 20px;">
                <i class="bi bi-diamond-fill"></i>
            </div>

            <h2 class="section-title text-center mb-3 print-reveal" style="display: block;">Browse News Categories</h2>
            <p class="section-subtitle text-center">
                Stay updated with the latest news, trending stories, and important reports from different categories.
            </p>

            <div class="latte-art-loader">
                <div class="latte-swirl"></div>
            </div>

            <div class="menu-grid d-flex flex-wrap justify-content-center gap-4 mt-4">
                @foreach($categories as $category)
                <div class="menu-card-wrapper reveal-on-scroll">
                    <a href="{{ url('category/'.$category->id) }}" class="category-box d-block">
                        <h5>{{ $category->name }}</h5>
                        <span class="menu-desc">{{ $category->description ?? 'Latest news and reports' }}</span>
                        <div class="menu-arrow mt-2">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@include('frontend.partials.footer')

@endsection