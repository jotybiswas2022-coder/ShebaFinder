@extends('frontend.app')

@section('content')

<!-- ShebaFinder CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
  :root {
    --primary: #2563EB;
    --primary-light: #3B82F6;
    --primary-dark: #1D4ED8;
    --primary-faint: #EFF6FF;
    --accent: #22C55E;
    --accent-light: #4ADE80;
    --accent-dark: #16A34A;
    --bg: #FFFFFF;
    --surface: #F8FAFF;
    --border: #DBEAFE;
    --text: #1E293B;
    --muted: #64748B;
    --shadow-blue: rgba(37, 99, 235, 0.15);
  }

  body {
    background: linear-gradient(135deg, #EFF6FF 0%, #F0FDF4 50%, #EFF6FF 100%);
    background-attachment: fixed;
    font-family: 'Sora', 'Hind Siliguri', sans-serif;
    min-height: 100vh;
  }

  /* ── Animated background grid ── */
  .sf-bg-canvas {
    position: fixed;
    inset: 0;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
  }
  .sf-bg-canvas::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(37,99,235,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(37,99,235,.04) 1px, transparent 1px);
    background-size: 44px 44px;
    animation: gridDrift 20s linear infinite;
  }
  @keyframes gridDrift {
    0%   { transform: translateY(0); }
    100% { transform: translateY(44px); }
  }

  /* Floating service bubbles */
  .sf-bubble {
    position: fixed;
    border-radius: 50%;
    opacity: 0;
    animation: bubbleFloat linear infinite;
    pointer-events: none;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    font-size: 1.4rem;
    background: rgba(255,255,255,0.85);
    box-shadow: 0 4px 20px rgba(37,99,235,.12);
    backdrop-filter: blur(4px);
    border: 1.5px solid rgba(37,99,235,.1);
  }
  @keyframes bubbleFloat {
    0%   { transform: translateY(110vh) scale(0.7); opacity: 0; }
    8%   { opacity: 1; }
    90%  { opacity: 0.7; }
    100% { transform: translateY(-12vh) scale(1.1); opacity: 0; }
  }

  /* ── Page wrapper ── */
  .sf-page {
    position: relative;
    z-index: 1;
    padding: 2.5rem 0 4rem;
  }

  /* ── Top brand strip ── */
  .sf-brand-strip {
    display: flex;
    align-items: center;
    gap: .75rem;
    margin-bottom: 2rem;
    animation: slideDown .55s cubic-bezier(.22,1,.36,1) both;
  }
  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-22px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .sf-logo-icon {
    width: 46px; height: 46px;
    background: var(--primary);
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 1.4rem;
    box-shadow: 0 4px 16px var(--shadow-blue);
    flex-shrink: 0;
  }
  .sf-brand-text {
    font-size: 1.55rem;
    font-weight: 800;
    color: var(--primary);
    letter-spacing: -.03em;
    line-height: 1;
  }
  .sf-brand-text span { color: var(--accent); }
  .sf-brand-sub {
    font-size: .75rem;
    color: var(--muted);
    font-weight: 500;
    letter-spacing: .05em;
    text-transform: uppercase;
    margin-top: 2px;
  }

  /* ── Card ── */
  .sf-card {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 8px 40px rgba(37,99,235,.10), 0 2px 8px rgba(0,0,0,.04);
    border: 1.5px solid var(--border);
    overflow: hidden;
    animation: cardRise .65s cubic-bezier(.22,1,.36,1) .1s both;
  }
  @keyframes cardRise {
    from { opacity: 0; transform: translateY(32px) scale(.98); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
  }

  /* ── Card header ── */
  .sf-card-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    padding: 1.5rem 2rem;
    position: relative;
    overflow: hidden;
  }
  .sf-card-header::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 160px; height: 160px;
    background: rgba(255,255,255,.06);
    border-radius: 50%;
  }
  .sf-card-header::after {
    content: '';
    position: absolute;
    bottom: -60px; right: 60px;
    width: 120px; height: 120px;
    background: rgba(34,197,94,.18);
    border-radius: 50%;
  }
  .sf-card-header-inner {
    position: relative; z-index: 1;
    display: flex; align-items: center; gap: .85rem;
  }
  .sf-header-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,.18);
    border: 1.5px solid rgba(255,255,255,.3);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem;
    color: #fff;
    backdrop-filter: blur(6px);
  }
  .sf-header-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #fff;
    margin: 0;
    letter-spacing: -.01em;
  }
  .sf-header-sub {
    font-size: .75rem;
    color: rgba(255,255,255,.7);
    margin: 0;
    font-weight: 400;
  }

  /* Progress indicator */
  .sf-progress-dots {
    display: flex; gap: 6px;
    margin-left: auto;
  }
  .sf-progress-dots span {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: rgba(255,255,255,.35);
  }
  .sf-progress-dots span.active {
    background: var(--accent);
    width: 24px;
    border-radius: 4px;
    animation: dotPulse 1.8s ease-in-out infinite;
  }
  @keyframes dotPulse {
    0%,100% { opacity: 1; } 50% { opacity: .6; }
  }

  /* ── Card body ── */
  .sf-card-body {
    padding: 2rem;
  }

  /* ── Alerts ── */
  .sf-alert {
    border-radius: 14px;
    padding: .9rem 1.1rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: flex-start;
    gap: .7rem;
    font-size: .875rem;
    font-weight: 500;
    animation: alertPop .4s cubic-bezier(.34,1.56,.64,1) both;
  }
  @keyframes alertPop {
    from { opacity: 0; transform: scale(.94); }
    to   { opacity: 1; transform: scale(1); }
  }
  .sf-alert-success {
    background: #F0FDF4;
    border: 1.5px solid #BBF7D0;
    color: #166534;
  }
  .sf-alert-danger {
    background: #FFF1F2;
    border: 1.5px solid #FECDD3;
    color: #9F1239;
  }
  .sf-alert-icon {
    font-size: 1.15rem;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* ── Section label ── */
  .sf-section-label {
    display: flex;
    align-items: center;
    gap: .5rem;
    font-size: .72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: var(--primary);
    margin: 1.8rem 0 1rem;
    padding-bottom: .5rem;
    border-bottom: 2px dashed var(--border);
  }
  .sf-section-label:first-child { margin-top: 0; }

  /* ── Form fields ── */
  .sf-field-wrap {
    position: relative;
    animation: fieldIn .45s cubic-bezier(.22,1,.36,1) both;
  }
  /* Staggered field animation delays */
  .sf-field-wrap:nth-child(1) { animation-delay: .15s; }
  .sf-field-wrap:nth-child(2) { animation-delay: .2s; }
  .sf-field-wrap:nth-child(3) { animation-delay: .25s; }
  .sf-field-wrap:nth-child(4) { animation-delay: .3s; }
  .sf-field-wrap:nth-child(5) { animation-delay: .35s; }

  @keyframes fieldIn {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .sf-label {
    display: flex;
    align-items: center;
    gap: .4rem;
    font-size: .8rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: .45rem;
    letter-spacing: .01em;
  }
  .sf-label i {
    color: var(--primary);
    font-size: .95rem;
  }

  .sf-input {
    width: 100%;
    border: 1.5px solid #E2E8F0;
    border-radius: 12px;
    padding: .75rem 1rem;
    font-size: .9rem;
    font-family: inherit;
    background: var(--surface);
    color: var(--text);
    transition: border-color .2s, box-shadow .2s, background .2s, transform .15s;
    outline: none;
    appearance: none;
  }
  .sf-input:focus {
    border-color: var(--primary);
    background: #fff;
    box-shadow: 0 0 0 4px rgba(37,99,235,.12);
    transform: translateY(-1px);
  }
  .sf-input:hover:not(:focus) {
    border-color: var(--primary-light);
  }

  select.sf-input {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%232563EB' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
    cursor: pointer;
  }

  /* ── File upload ── */
  .sf-upload-area {
    border: 2px dashed var(--border);
    border-radius: 14px;
    background: var(--surface);
    padding: 1.4rem 1rem;
    text-align: center;
    cursor: pointer;
    transition: border-color .2s, background .2s;
    position: relative;
  }
  .sf-upload-area:hover {
    border-color: var(--primary);
    background: var(--primary-faint);
  }
  .sf-upload-area input[type="file"] {
    position: absolute;
    inset: 0;
    opacity: 0;
    cursor: pointer;
    width: 100%;
    height: 100%;
  }
  .sf-upload-icon {
    font-size: 2rem;
    color: var(--primary);
    display: block;
    margin-bottom: .4rem;
    animation: iconBounce 2.4s ease-in-out infinite;
  }
  @keyframes iconBounce {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-6px); }
  }
  .sf-upload-text {
    font-size: .82rem;
    color: var(--muted);
    font-weight: 500;
  }
  .sf-upload-text strong { color: var(--primary); }

  .sf-preview-img {
    width: 72px; height: 72px;
    border-radius: 12px;
    object-fit: cover;
    border: 2.5px solid var(--primary);
    box-shadow: 0 4px 12px var(--shadow-blue);
    margin-bottom: .75rem;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  /* ── Submit button ── */
  .sf-btn-submit {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: .6rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: #fff;
    border: none;
    border-radius: 14px;
    padding: .85rem 2.2rem;
    font-size: .95rem;
    font-weight: 700;
    font-family: inherit;
    cursor: pointer;
    overflow: hidden;
    transition: transform .2s, box-shadow .2s;
    box-shadow: 0 4px 18px var(--shadow-blue);
    letter-spacing: .01em;
  }
  .sf-btn-submit::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,.15) 0%, transparent 60%);
  }
  .sf-btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 28px var(--shadow-blue);
  }
  .sf-btn-submit:active {
    transform: translateY(0);
    box-shadow: 0 2px 10px var(--shadow-blue);
  }
  .sf-btn-submit .ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,.35);
    transform: scale(0);
    animation: rippleOut .6s linear;
    pointer-events: none;
  }
  @keyframes rippleOut {
    to { transform: scale(4); opacity: 0; }
  }

  /* Accent accent badge */
  .sf-badge {
    display: inline-flex;
    align-items: center;
    gap: .3rem;
    background: #F0FDF4;
    color: var(--accent-dark);
    border: 1px solid #BBF7D0;
    border-radius: 20px;
    padding: .25rem .75rem;
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .04em;
    margin-left: auto;
  }

  /* ── Divider ── */
  .sf-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--border), transparent);
    margin: 1.8rem 0;
  }

  /* ── Responsive ── */
  @media (max-width: 576px) {
    .sf-card-body { padding: 1.25rem; }
    .sf-card-header { padding: 1.2rem 1.25rem; }
    .sf-brand-text { font-size: 1.25rem; }
    .sf-btn-submit { width: 100%; justify-content: center; }
  }
</style>

<!-- Background canvas -->
<div class="sf-bg-canvas"></div>

<!-- Floating service bubbles (injected by JS below) -->

<div class="container sf-page">

  <!-- Brand strip -->
  <div class="sf-brand-strip">
    <div class="sf-logo-icon">
      <i class="bi bi-geo-alt-fill"></i>
    </div>
    <div>
      <div class="sf-brand-text">Sheba<span>Finder</span></div>
      <div class="sf-brand-sub">Bangladesh Local Service Directory</div>
    </div>
  </div>

  <!-- Main card -->
  <div class="sf-card">

    <!-- Header -->
    <div class="sf-card-header">
      <div class="sf-card-header-inner">
        <div class="sf-header-icon">
          <i class="bi bi-person-gear"></i>
        </div>
        <div>
          <p class="sf-header-title">Edit Service Profile</p>
          <p class="sf-header-sub">Update your service listing details</p>
        </div>
        <div class="sf-progress-dots">
          <span class="active"></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <!-- Body -->
    <div class="sf-card-body">

      @if (session('success'))
        <div class="sf-alert sf-alert-success">
          <i class="bi bi-patch-check-fill sf-alert-icon"></i>
          <div>{{ session('success') }}</div>
        </div>
      @endif

      @if ($errors->any())
        <div class="sf-alert sf-alert-danger">
          <i class="bi bi-exclamation-triangle-fill sf-alert-icon"></i>
          <div>
            @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
            @endforeach
          </div>
        </div>
      @endif

      <form action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Section: Basic Info -->
        <div class="sf-section-label">
          <i class="bi bi-card-text"></i> Basic Information
          <span class="sf-badge"><i class="bi bi-shield-check"></i> Public Listing</span>
        </div>

        <div class="row g-3">

          <!-- Name -->
          <div class="col-md-6">
            <div class="sf-field-wrap">
              <label class="sf-label">
                <i class="bi bi-person-fill"></i> Service / Business Name
              </label>
              <input type="text"
                     name="title"
                     class="sf-input"
                     placeholder="e.g. Rahim Electric Service"
                     value="{{ old('title', optional($profile)->title) }}">
            </div>
          </div>

          <!-- Category -->
          <div class="col-md-6">
            <div class="sf-field-wrap">
              <label class="sf-label">
                <i class="bi bi-grid-fill"></i> Service Category
              </label>
              <select name="category_id" class="sf-input">
                <option value="">— Select Category —</option>
                @foreach($categories as $cat)
                  <option value="{{ $cat->id }}"
                    {{ old('category_id', optional($profile)->category_id) == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                  </option>
                @endforeach
              </select>
            </div>
          </div>

        </div>

        <div class="sf-divider"></div>

        <!-- Section: Contact & Location -->
        <div class="sf-section-label">
          <i class="bi bi-geo-alt-fill"></i> Contact & Location
        </div>

        <div class="row g-3">

          <!-- Contact -->
          <div class="col-md-6">
            <div class="sf-field-wrap">
              <label class="sf-label">
                <i class="bi bi-telephone-fill"></i> Contact Number
              </label>
              <input type="text"
                     name="contact_number"
                     class="sf-input"
                     placeholder="e.g. 01700-000000"
                     value="{{ old('contact_number', optional($profile)->contact_number) }}">
            </div>
          </div>

          <!-- Division -->
          <div class="col-md-6">
            <div class="sf-field-wrap">
              <label class="sf-label">
                <i class="bi bi-map-fill"></i> Division
              </label>
              <select name="division" class="sf-input">
                <option value="">— Select Division —</option>
                @foreach(['Khulna','Dhaka','Chittagong','Rajshahi','Sylhet','Barishal','Mymensingh','Rangpur'] as $div)
                  <option value="{{ $div }}"
                    {{ old('division', optional($profile)->division) == $div ? 'selected' : '' }}>
                    {{ $div }}
                  </option>
                @endforeach
              </select>
            </div>
          </div>

        </div>

        <div class="sf-divider"></div>

        <!-- Section: Photo -->
        <div class="sf-section-label">
          <i class="bi bi-camera-fill"></i> Service Photo
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="sf-field-wrap">
              <label class="sf-label">
                <i class="bi bi-image-fill"></i> Upload / Change Photo
              </label>
              <div class="sf-upload-area">
                @if(optional($profile)->file)
                  <img src="{{ config('app.storage_url') }}{{ $profile->file }}"
                       class="sf-preview-img" alt="Current photo">
                @endif
                <i class="bi bi-cloud-arrow-up-fill sf-upload-icon"></i>
                <div class="sf-upload-text">
                  <strong>Click to upload</strong> or drag & drop<br>
                  PNG, JPG, WEBP — max 2MB
                </div>
                <input type="file" name="file" accept="image/*">
              </div>
            </div>
          </div>
        </div>

        <div class="sf-divider"></div>

        <!-- Submit -->
        <div class="d-flex align-items-center gap-3 flex-wrap">
          <button type="submit" class="sf-btn-submit" id="sfSubmitBtn">
            <i class="bi bi-check2-circle"></i>
            Update Profile
          </button>
          <span style="font-size:.8rem; color:var(--muted);">
            <i class="bi bi-lock-fill" style="color:var(--accent);"></i>
            Your data is safe &amp; secure
          </span>
        </div>

      </form>
    </div>
  </div>

</div>

<script>
(function () {

  /* ── Floating service bubbles ── */
  const icons = [
    'bi-wrench-adjustable','bi-lightning-charge-fill','bi-droplet-fill',
    'bi-house-gear-fill','bi-truck','bi-scissors','bi-hammer',
    'bi-fan','bi-brush-fill','bi-tree-fill','bi-telephone-fill',
    'bi-heartbeat','bi-shield-check','bi-camera-fill','bi-wifi'
  ];
  const container = document.querySelector('.sf-bg-canvas');
  const count = 14;

  for (let i = 0; i < count; i++) {
    const el = document.createElement('div');
    el.className = 'sf-bubble';
    const size = 42 + Math.random() * 26;
    el.style.cssText = `
      width:${size}px; height:${size}px;
      left:${Math.random() * 100}%;
      font-size:${size * .42}px;
      animation-duration:${12 + Math.random() * 16}s;
      animation-delay:${Math.random() * 14}s;
    `;
    el.innerHTML = `<i class="bi ${icons[i % icons.length]}"></i>`;
    container.appendChild(el);
  }

  /* ── Ripple on submit button ── */
  const btn = document.getElementById('sfSubmitBtn');
  if (btn) {
    btn.addEventListener('click', function (e) {
      const r = document.createElement('span');
      r.className = 'ripple';
      const rect = btn.getBoundingClientRect();
      const d = Math.max(rect.width, rect.height);
      r.style.width = r.style.height = d + 'px';
      r.style.left = (e.clientX - rect.left - d / 2) + 'px';
      r.style.top  = (e.clientY - rect.top  - d / 2) + 'px';
      btn.appendChild(r);
      setTimeout(() => r.remove(), 700);
    });
  }

  /* ── Live file preview ── */
  const fileInput = document.querySelector('input[type="file"][name="file"]');
  if (fileInput) {
    fileInput.addEventListener('change', function () {
      const file = this.files[0];
      if (!file) return;
      const area = this.closest('.sf-upload-area');
      let img = area.querySelector('.sf-preview-img');
      if (!img) {
        img = document.createElement('img');
        img.className = 'sf-preview-img';
        img.alt = 'Preview';
        area.insertBefore(img, area.querySelector('.sf-upload-icon'));
      }
      img.src = URL.createObjectURL(file);
    });
  }

})();
</script>

@endsection