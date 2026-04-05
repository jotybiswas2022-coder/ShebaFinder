@extends('frontend.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
  :root {
    --primary: #2563EB;
    --primary-dark: #1d4ed8;
    --primary-light: #dbeafe;
    --accent: #22C55E;
    --accent-dark: #16a34a;
    --accent-light: #dcfce7;
    --white: #ffffff;
    --gray-50: #f8fafc;
    --gray-100: #f1f5f9;
    --gray-200: #e2e8f0;
    --gray-400: #94a3b8;
    --gray-600: #475569;
    --gray-800: #1e293b;
    --shadow-sm: 0 1px 3px rgba(37,99,235,0.08), 0 1px 2px rgba(37,99,235,0.05);
    --shadow-md: 0 4px 20px rgba(37,99,235,0.12), 0 2px 8px rgba(37,99,235,0.06);
    --shadow-lg: 0 10px 40px rgba(37,99,235,0.15), 0 4px 16px rgba(37,99,235,0.08);
    --radius: 16px;
    --radius-sm: 10px;
  }

  body {
    font-family: 'Poppins', 'Hind Siliguri', sans-serif;
    background: var(--gray-50);
  }

  /* ===== FLOATING BACKGROUND ICONS ===== */
  .bg-icons {
    position: fixed;
    inset: 0;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
  }

  .bg-icon {
    position: absolute;
    font-size: 1.4rem;
    color: var(--primary);
    opacity: 0.04;
    animation: floatUp linear infinite;
  }

  .bg-icon:nth-child(1)  { left: 5%;  animation-duration: 12s; animation-delay: 0s;   font-size: 1.2rem; }
  .bg-icon:nth-child(2)  { left: 14%; animation-duration: 15s; animation-delay: 2s;   font-size: 1.6rem; }
  .bg-icon:nth-child(3)  { left: 23%; animation-duration: 10s; animation-delay: 4s;   font-size: 1rem; }
  .bg-icon:nth-child(4)  { left: 33%; animation-duration: 18s; animation-delay: 1s;   font-size: 1.8rem; }
  .bg-icon:nth-child(5)  { left: 43%; animation-duration: 13s; animation-delay: 6s;   font-size: 1.3rem; }
  .bg-icon:nth-child(6)  { left: 54%; animation-duration: 16s; animation-delay: 3s;   font-size: 1.5rem; }
  .bg-icon:nth-child(7)  { left: 63%; animation-duration: 11s; animation-delay: 5s;   font-size: 1.1rem; }
  .bg-icon:nth-child(8)  { left: 73%; animation-duration: 14s; animation-delay: 7s;   font-size: 1.7rem; }
  .bg-icon:nth-child(9)  { left: 83%; animation-duration: 17s; animation-delay: 2.5s; font-size: 1.4rem; }
  .bg-icon:nth-child(10) { left: 92%; animation-duration: 9s;  animation-delay: 4.5s; font-size: 1.2rem; }

  @keyframes floatUp {
    0%   { transform: translateY(110vh) rotate(0deg);   opacity: 0; }
    10%  { opacity: 0.04; }
    90%  { opacity: 0.04; }
    100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
  }

  /* ===== CONTAINER ===== */
  .profile-container {
    position: relative;
    z-index: 1;
    max-width: 560px;
    margin: 0 auto;
    padding: 28px 16px 40px;
  }

  /* ===== SUCCESS ALERT ===== */
  .custom-alert {
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--accent-light);
    border: 1.5px solid var(--accent);
    color: var(--accent-dark);
    border-radius: var(--radius-sm);
    padding: 14px 18px;
    margin-bottom: 20px;
    font-weight: 500;
    font-size: 0.875rem;
    animation: slideDown 0.4s cubic-bezier(.22,1,.36,1);
    box-shadow: 0 2px 12px rgba(34,197,94,0.12);
  }

  .custom-alert i { font-size: 1.1rem; color: var(--accent); }
  .custom-alert .btn-close {
    margin-left: auto;
    opacity: 0.6;
    cursor: pointer;
    background: none;
    border: none;
    font-size: 1rem;
    color: var(--accent-dark);
  }

  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-16px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ===== PROFILE CARD ===== */
  .profile-card {
    background: var(--white);
    border-radius: 24px;
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    animation: cardRise 0.6s cubic-bezier(.22,1,.36,1);
  }

  @keyframes cardRise {
    from { opacity: 0; transform: translateY(32px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ===== CARD HEADER ===== */
  .card-header {
    background: linear-gradient(135deg, var(--primary) 0%, #1d4ed8 60%, #1e40af 100%);
    padding: 36px 24px 48px;
    position: relative;
    overflow: hidden;
    text-align: center;
    border-bottom: none;
  }

  .card-header::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      radial-gradient(circle at 20% 30%, rgba(255,255,255,0.08) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(34,197,94,0.15) 0%, transparent 50%);
  }

  .card-header::after {
    content: '';
    position: absolute;
    bottom: -2px; left: 0; right: 0;
    height: 28px;
    background: var(--white);
    clip-path: ellipse(55% 100% at 50% 100%);
  }

  .header-service-icons {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
  }

  .header-service-icons span {
    position: absolute;
    font-size: 1.1rem;
    color: rgba(255,255,255,0.12);
    animation: headerIconFloat 6s ease-in-out infinite;
  }
  .header-service-icons span:nth-child(1) { top: 12%; left: 8%;   animation-delay: 0s; }
  .header-service-icons span:nth-child(2) { top: 20%; right: 10%; animation-delay: 1s; }
  .header-service-icons span:nth-child(3) { bottom: 30%; left: 15%; animation-delay: 2s; }
  .header-service-icons span:nth-child(4) { bottom: 25%; right: 12%; animation-delay: 0.5s; }
  .header-service-icons span:nth-child(5) { top: 50%; left: 4%;   animation-delay: 1.5s; }
  .header-service-icons span:nth-child(6) { top: 55%; right: 5%;  animation-delay: 2.5s; }

  @keyframes headerIconFloat {
    0%, 100% { transform: translateY(0) scale(1); }
    50%       { transform: translateY(-6px) scale(1.1); }
  }

  .header-brand {
    position: relative;
    z-index: 1;
    margin-bottom: 6px;
  }

  .brand-logo {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50px;
    padding: 5px 14px 5px 8px;
    margin-bottom: 16px;
  }

  .brand-logo .logo-icon {
    width: 28px; height: 28px;
    background: var(--white);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
  }

  .brand-logo .logo-icon i { color: var(--primary); font-size: 0.9rem; }
  .brand-logo span { color: rgba(255,255,255,0.9); font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; }

  .header-icon-wrap {
    width: 64px; height: 64px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(12px);
    border: 2px solid rgba(255,255,255,0.25);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 12px;
    position: relative; z-index: 1;
    animation: pulse 3s ease-in-out infinite;
  }

  @keyframes pulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(255,255,255,0.2); }
    50%       { box-shadow: 0 0 0 12px rgba(255,255,255,0); }
  }

  .header-icon-wrap i { color: var(--white); font-size: 1.8rem; }

  .card-header h4 {
    color: var(--white);
    font-size: 1.25rem;
    font-weight: 700;
    position: relative; z-index: 1;
    letter-spacing: -0.3px;
    margin: 0;
  }

  /* ===== CARD BODY ===== */
  .card-body {
    padding: 24px 24px 28px;
  }

  /* ===== AVATAR SECTION ===== */
  .avatar-section {
    display: flex;
    align-items: center;
    gap: 16px;
    background: linear-gradient(135deg, var(--primary-light) 0%, #eff6ff 100%);
    border: 1.5px solid rgba(37,99,235,0.1);
    border-radius: var(--radius);
    padding: 18px 20px;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    animation: fadeInLeft 0.5s 0.2s cubic-bezier(.22,1,.36,1) both;
  }

  .avatar-section::before {
    content: '';
    position: absolute;
    top: -20px; right: -20px;
    width: 80px; height: 80px;
    background: radial-gradient(circle, rgba(37,99,235,0.08) 0%, transparent 70%);
    border-radius: 50%;
  }

  @keyframes fadeInLeft {
    from { opacity: 0; transform: translateX(-20px); }
    to   { opacity: 1; transform: translateX(0); }
  }

  .avatar {
    width: 58px; height: 58px;
    background: linear-gradient(135deg, var(--primary) 0%, #1d4ed8 100%);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: var(--white);
    font-size: 1.5rem;
    font-weight: 800;
    flex-shrink: 0;
    box-shadow: 0 4px 14px rgba(37,99,235,0.35);
    position: relative;
  }

  .avatar::after {
    content: '';
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    border: 2px dashed rgba(37,99,235,0.3);
    animation: spin 10s linear infinite;
  }

  @keyframes spin { to { transform: rotate(360deg); } }

  .avatar-info h5 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--gray-800);
    margin-bottom: 6px;
    line-height: 1.3;
  }

  .blood-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    color: var(--white);
    border-radius: 50px;
    padding: 4px 12px;
    font-size: 0.75rem;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(34,197,94,0.3);
  }

  /* ===== SERVICE STATS ===== */
  .service-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 20px;
    animation: fadeInUp 0.5s 0.3s cubic-bezier(.22,1,.36,1) both;
  }

  .stat-item {
    background: var(--gray-50);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-sm);
    padding: 14px 10px;
    text-align: center;
    transition: all 0.25s ease;
    cursor: default;
  }

  .stat-item:hover {
    border-color: var(--primary);
    background: var(--primary-light);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37,99,235,0.12);
  }

  .stat-item i {
    font-size: 1.3rem;
    color: var(--primary);
    display: block;
    margin-bottom: 4px;
  }

  .stat-item .stat-value {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--gray-800);
    line-height: 1;
  }

  .stat-item .stat-label {
    font-size: 0.68rem;
    color: var(--gray-400);
    font-weight: 500;
    margin-top: 2px;
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ===== INFO LIST ===== */
  .info-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
    animation: fadeInUp 0.5s 0.35s cubic-bezier(.22,1,.36,1) both;
  }

  .info-item {
    display: flex;
    align-items: center;
    gap: 14px;
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-sm);
    padding: 14px 16px;
    transition: all 0.25s ease;
    position: relative;
    overflow: hidden;
  }

  .info-item:hover {
    border-color: var(--primary);
    box-shadow: 0 2px 12px rgba(37,99,235,0.08);
    transform: translateX(3px);
  }

  .info-item::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 3px;
    background: linear-gradient(180deg, var(--primary), var(--accent));
    opacity: 0;
    transition: opacity 0.25s ease;
  }

  .info-item:hover::before { opacity: 1; }

  .info-icon {
    width: 40px; height: 40px;
    background: var(--primary-light);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    transition: all 0.25s ease;
  }

  .info-item:hover .info-icon {
    background: var(--primary);
  }

  .info-icon i {
    font-size: 1rem;
    color: var(--primary);
    transition: color 0.25s ease;
  }

  .info-item:hover .info-icon i { color: var(--white); }

  .info-content label {
    font-size: 0.72rem;
    font-weight: 600;
    color: var(--gray-400);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    display: block;
    margin-bottom: 2px;
  }

  .info-content p {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--gray-800);
    margin: 0;
  }

  /* Image inside info */
  .profile-image-wrap {
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 6px;
    box-shadow: var(--shadow-sm);
  }

  .profile-image-wrap img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.4s ease;
  }

  .profile-image-wrap:hover img { transform: scale(1.03); }

  /* ===== NO PROFILE STATE ===== */
  .no-profile {
    text-align: center;
    padding: 32px 20px;
    animation: fadeInUp 0.5s 0.2s cubic-bezier(.22,1,.36,1) both;
  }

  .no-profile-icon-wrap {
    width: 80px; height: 80px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
    position: relative;
  }

  .no-profile-icon-wrap::after {
    content: '';
    position: absolute;
    inset: -6px;
    border-radius: 50%;
    border: 2px dashed rgba(37,99,235,0.2);
    animation: spin 8s linear infinite;
  }

  .no-profile-icon-wrap i { font-size: 2.2rem; color: var(--primary); }

  .no-profile p {
    color: var(--gray-400);
    font-size: 0.9rem;
    line-height: 1.7;
    margin: 0;
  }

  /* ===== BUTTON ===== */
  .btn-primary-sheba {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, var(--primary) 0%, #1d4ed8 100%);
    color: var(--white);
    border: none;
    border-radius: 14px;
    font-size: 0.95rem;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(.22,1,.36,1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(37,99,235,0.35);
    animation: fadeInUp 0.5s 0.4s cubic-bezier(.22,1,.36,1) both;
    letter-spacing: 0.2px;
  }

  .btn-primary-sheba::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    opacity: 0;
    transition: opacity 0.35s ease;
  }

  .btn-primary-sheba:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(37,99,235,0.4);
    color: var(--white);
  }

  .btn-primary-sheba:hover::before { opacity: 1; }
  .btn-primary-sheba i,
  .btn-primary-sheba span { position: relative; z-index: 1; }
  .btn-primary-sheba:active { transform: scale(0.98); }
</style>

<!-- Floating background service icons -->
<div class="bg-icons">
  <i class="bi bi-tools bg-icon"></i>
  <i class="bi bi-house-gear bg-icon"></i>
  <i class="bi bi-wrench-adjustable bg-icon"></i>
  <i class="bi bi-lightning-charge bg-icon"></i>
  <i class="bi bi-droplet bg-icon"></i>
  <i class="bi bi-brush bg-icon"></i>
  <i class="bi bi-truck bg-icon"></i>
  <i class="bi bi-shield-check bg-icon"></i>
  <i class="bi bi-person-gear bg-icon"></i>
  <i class="bi bi-hammer bg-icon"></i>
</div>

<div class="container-fluid profile-container">

    <!-- Success Alert -->
    @if (session('success'))
        <div class="alert custom-alert">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    @endif

    <!-- Profile Card -->
    <div class="profile-card">

        <!-- Header -->
        <div class="card-header">
            <div class="header-service-icons">
                <span><i class="bi bi-tools"></i></span>
                <span><i class="bi bi-house-gear"></i></span>
                <span><i class="bi bi-wrench-adjustable"></i></span>
                <span><i class="bi bi-lightning-charge"></i></span>
                <span><i class="bi bi-droplet"></i></span>
                <span><i class="bi bi-brush"></i></span>
            </div>

            <div class="header-brand">
                <div class="brand-logo">
                    <div class="logo-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <span>ShebaFinder</span>
                </div>
            </div>

            <div class="header-icon-wrap">
                <i class="bi bi-person-circle"></i>
            </div>
            <h4>Profile Overview</h4>
        </div>

        <div class="card-body">

            @if($profile)

            <!-- Avatar -->
            <div class="avatar-section">
                <div class="avatar">
                    {{ strtoupper(substr($profile->title ?? 'U', 0, 1)) }}
                </div>
                <div class="avatar-info">
                    <h5>{{ $profile->title ?? 'Not set' }}</h5>
                    <span class="blood-badge">
                        <i class="bi bi-tag-fill"></i>
                        {{ $profile->PostCategory->name ?? 'No Category' }}
                    </span>
                </div>
            </div>

            <!-- Info Fields -->
            <div class="info-list">

                <!-- Mobile -->
                <div class="info-item">
                    <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div class="info-content">
                        <label>Mobile</label>
                        <p>{{ $profile->contact_number ?? 'Not set' }}</p>
                    </div>
                </div>

                <!-- Image -->
                <div class="info-item" style="flex-direction: column; align-items: flex-start;">
                    <div style="display:flex; align-items:center; gap:14px; width:100%;">
                        <div class="info-icon"><i class="bi bi-image-fill"></i></div>
                        <div class="info-content">
                            <label>Profile Image</label>
                            @if(!empty($profile->file))
                                <p>{{ basename($profile->file) }}</p>
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    </div>
                    @if(!empty($profile->file))
                        <div class="profile-image-wrap" style="margin-top:12px;">
                            <img src="{{ config('app.storage_url') }}{{ $profile->file }}"
                                 alt="Profile Image">
                        </div>
                    @endif
                </div>

                <!-- Division -->
                <div class="info-item">
                    <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="info-content">
                        <label>Division</label>
                        <p>{{ $profile->division ?? 'Not set' }}</p>
                    </div>
                </div>

            </div>

            @else

            <!-- No Profile -->
            <div class="no-profile">
                <div class="no-profile-icon-wrap">
                    <i class="bi bi-person-x"></i>
                </div>
                <p>আপনার প্রোফাইল এখনো তৈরি হয়নি।<br>নিচের বাটনে ক্লিক করে প্রোফাইল তৈরি করুন।</p>
            </div>

            @endif

            <!-- Button -->
            <a href="{{ url('/profile/edit') }}" class="btn-primary-sheba">
                <i class="bi bi-pencil-square"></i>
                <span>{{ $profile ? 'Edit Profile' : 'Create Profile' }}</span>
            </a>

        </div>
    </div>

</div>

@endsection