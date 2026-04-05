<!-- ===================== BACKGROUND ===================== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap');

  :root {
    --primary: #2563EB;
    --primary-dark: #1d4ed8;
    --primary-light: #dbeafe;
    --primary-glow: rgba(37,99,235,0.18);
    --accent: #22C55E;
    --accent-dark: #16a34a;
    --accent-light: #dcfce7;
    --bg: #FFFFFF;
    --surface: #f8faff;
    --surface2: #f1f5ff;
    --border: #e2eaf8;
    --text: #0f172a;
    --text-muted: #64748b;
    --text-light: #94a3b8;
    --shadow-sm: 0 1px 3px rgba(37,99,235,0.08);
    --shadow-md: 0 4px 24px rgba(37,99,235,0.12);
    --shadow-lg: 0 16px 60px rgba(37,99,235,0.16);
    --radius: 20px;
    --radius-sm: 12px;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    overflow-x: hidden;
  }

  /* ===== BACKGROUND ===== */
  .sf-bg {
    position: fixed;
    inset: 0;
    z-index: 0;
    overflow: hidden;
    background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 50%, #f0fdf4 100%);
  }

  /* Animated grid */
  .sf-grid {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(37,99,235,0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(37,99,235,0.06) 1px, transparent 1px);
    background-size: 48px 48px;
    animation: gridDrift 20s linear infinite;
  }
  @keyframes gridDrift {
    0% { transform: translate(0,0); }
    100% { transform: translate(48px, 48px); }
  }

  /* Gradient blobs */
  .sf-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.45;
    animation: blobFloat 8s ease-in-out infinite alternate;
  }
  .sf-blob-1 {
    width: 560px; height: 560px;
    background: radial-gradient(circle, #2563EB44, #2563EB11);
    top: -120px; left: -120px;
    animation-duration: 9s;
  }
  .sf-blob-2 {
    width: 420px; height: 420px;
    background: radial-gradient(circle, #22C55E33, #22C55E0a);
    bottom: -100px; right: -80px;
    animation-duration: 11s;
    animation-delay: -3s;
  }
  .sf-blob-3 {
    width: 300px; height: 300px;
    background: radial-gradient(circle, #2563EB22, transparent);
    top: 50%; right: 15%;
    animation-duration: 7s;
    animation-delay: -5s;
  }
  @keyframes blobFloat {
    0% { transform: translate(0,0) scale(1); }
    100% { transform: translate(30px,40px) scale(1.08); }
  }

  /* Radar / ripple rings */
  .search-ring {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
    border-radius: 50%;
    border: 1.5px solid rgba(37,99,235,0.15);
    animation: radarPulse 4s ease-out infinite;
  }
  .search-ring:nth-child(4) { width: 300px; height: 300px; animation-delay: 0s; }
  .search-ring:nth-child(5) { width: 500px; height: 500px; animation-delay: 1.3s; }
  .search-ring:nth-child(6) { width: 700px; height: 700px; animation-delay: 2.6s; }
  @keyframes radarPulse {
    0%   { transform: translate(-50%,-50%) scale(0.6); opacity: 0.5; }
    80%  { opacity: 0.1; }
    100% { transform: translate(-50%,-50%) scale(1.4); opacity: 0; }
  }

  /* Floating service icons */
  .floating-icon {
    position: absolute;
    width: 44px; height: 44px;
    border-radius: 12px;
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(8px);
    border: 1px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
    color: var(--primary);
    box-shadow: var(--shadow-md);
    animation: iconFloat 6s ease-in-out infinite alternate;
  }
  .floating-icon:nth-child(7)  { top: 12%; left: 6%;  animation-delay: 0s;    animation-duration: 7s; }
  .floating-icon:nth-child(8)  { top: 22%; right: 7%; animation-delay: -2s;   animation-duration: 8s; color: var(--accent); }
  .floating-icon:nth-child(9)  { bottom: 30%; left: 5%; animation-delay: -1s; animation-duration: 6s; }
  .floating-icon:nth-child(10) { top: 60%; right: 6%; animation-delay: -3.5s; animation-duration: 9s; color: var(--accent); }
  .floating-icon:nth-child(11) { bottom: 12%; left: 18%; animation-delay: -4s; animation-duration: 7s; }
  .floating-icon:nth-child(12) { top: 8%; right: 22%;  animation-delay: -0.5s; animation-duration: 8s; color: var(--accent); }
  @keyframes iconFloat {
    0%   { transform: translateY(0px) rotate(-4deg); }
    100% { transform: translateY(-20px) rotate(4deg); }
  }

  /* ===== WRAPPER ===== */
  .sf-wrapper {
    position: relative;
    z-index: 1;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 16px;
    gap: 0;
  }

  /* ===== BRAND TOP ===== */
  .sf-brand-top {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-bottom: 28px;
    animation: fadeDown 0.7s ease both;
  }
  @keyframes fadeDown {
    from { opacity: 0; transform: translateY(-24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .sf-logo-wrap {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
  }
  .sf-logo-icon {
    width: 54px; height: 54px;
    border-radius: 16px;
    background: linear-gradient(135deg, var(--primary), #1e40af);
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; color: #fff;
    box-shadow: 0 8px 28px rgba(37,99,235,0.4);
    animation: logoPulse 3s ease-in-out infinite;
  }
  @keyframes logoPulse {
    0%, 100% { box-shadow: 0 8px 28px rgba(37,99,235,0.4); }
    50%       { box-shadow: 0 8px 40px rgba(37,99,235,0.65); }
  }
  .sf-logo-text {
    font-family: 'Syne', sans-serif;
    font-size: 30px;
    font-weight: 800;
    color: var(--text);
    letter-spacing: -0.5px;
  }
  .sf-logo-text span { color: var(--primary); }
  .sf-logo-text em   { color: var(--accent); font-style: normal; }

  .sf-tagline {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12.5px;
    font-weight: 500;
    color: var(--text-muted);
    letter-spacing: 0.3px;
  }
  .sf-tagline i { color: var(--accent); font-size: 11px; }

  /* ===== CARD ===== */
  .sf-card {
    width: 100%;
    max-width: 480px;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(37,99,235,0.12);
    border-radius: 24px;
    box-shadow: var(--shadow-lg), 0 0 0 1px rgba(255,255,255,0.8) inset;
    overflow: hidden;
    animation: fadeUp 0.8s cubic-bezier(.22,.68,0,1.2) 0.1s both;
  }
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px) scale(0.97); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
  }

  /* ===== STRIP HEADER ===== */
  .sf-card-strip {
    background: linear-gradient(105deg, var(--primary) 0%, #1d4ed8 60%, #1e40af 100%);
    padding: 22px 28px 20px;
    position: relative;
    overflow: hidden;
  }
  .sf-card-strip::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 140px; height: 140px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
  }
  .sf-card-strip::after {
    content: '';
    position: absolute;
    bottom: -50px; left: 30%;
    width: 180px; height: 180px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
  }
  .sf-strip-inner {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sf-strip-left h2 {
    font-family: 'Syne', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 3px;
  }
  .sf-strip-left p {
    font-size: 13px;
    color: rgba(255,255,255,0.75);
  }
  .sf-strip-badge {
    display: flex;
    align-items: center;
    gap: 7px;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.25);
    border-radius: 30px;
    padding: 6px 14px;
    font-size: 12px;
    color: #fff;
    font-weight: 500;
    backdrop-filter: blur(4px);
  }
  .sf-live-dot {
    width: 8px; height: 8px;
    background: var(--accent);
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(34,197,94,0.5);
    animation: livePing 1.5s ease-in-out infinite;
  }
  @keyframes livePing {
    0%, 100% { box-shadow: 0 0 0 0 rgba(34,197,94,0.5); }
    50%       { box-shadow: 0 0 0 6px rgba(34,197,94,0); }
  }

  /* ===== SCROLLING PILLS ===== */
  .sf-pills-wrap {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    overflow: hidden;
    padding: 12px 0;
  }
  .sf-pills-track {
    display: flex;
    gap: 10px;
    width: max-content;
    animation: pillScroll 28s linear infinite;
  }
  .sf-pills-wrap:hover .sf-pills-track { animation-play-state: paused; }
  @keyframes pillScroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .sf-pill {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 30px;
    background: #fff;
    border: 1px solid var(--border);
    font-size: 12.5px;
    font-weight: 500;
    color: var(--text);
    white-space: nowrap;
    cursor: default;
    transition: border-color 0.2s, background 0.2s;
    box-shadow: var(--shadow-sm);
  }
  .sf-pill i { color: var(--primary); font-size: 13px; }
  .sf-pill.accent {
    background: var(--primary-light);
    border-color: rgba(37,99,235,0.2);
    color: var(--primary-dark);
  }
  .sf-pill.accent i { color: var(--accent); }

  /* ===== CARD BODY ===== */
  .sf-card-body {
    padding: 28px 32px 24px;
  }

  .sf-section-label {
    font-family: 'Syne', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .sf-section-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, var(--border), transparent);
  }

  /* ===== FORM FIELDS ===== */
  .sf-field {
    margin-bottom: 18px;
  }
  .sf-label {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 8px;
  }
  .sf-label i { color: var(--primary); font-size: 14px; }

  .sf-input-wrap {
    position: relative;
  }
  .sf-input {
    width: 100%;
    height: 48px;
    padding: 0 46px 0 16px;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-sm);
    background: var(--surface);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--text);
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
  }
  .sf-input::placeholder { color: var(--text-light); }
  .sf-input:focus {
    border-color: var(--primary);
    background: #fff;
    box-shadow: 0 0 0 4px rgba(37,99,235,0.1);
  }
  .sf-input.is-invalid {
    border-color: #ef4444;
    box-shadow: 0 0 0 4px rgba(239,68,68,0.1);
  }

  .sf-input-icon {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 16px;
    pointer-events: none;
  }
  .sf-toggle-btn {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    color: var(--text-muted);
    font-size: 16px;
    display: flex;
    align-items: center;
    padding: 4px;
    border-radius: 6px;
    transition: color 0.2s;
  }
  .sf-toggle-btn:hover { color: var(--primary); }

  .invalid-feedback {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    color: #ef4444;
    margin-top: 6px;
    font-weight: 500;
  }

  /* ===== ROW OPTIONS ===== */
  .sf-row-options {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
  }
  .sf-check-label {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    color: var(--text-muted);
    cursor: pointer;
    user-select: none;
  }
  .sf-check-label input[type=checkbox] {
    width: 16px; height: 16px;
    accent-color: var(--primary);
    cursor: pointer;
  }
  .sf-forgot {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    font-weight: 500;
    color: var(--primary);
    text-decoration: none;
    transition: color 0.2s;
  }
  .sf-forgot:hover { color: var(--primary-dark); text-decoration: underline; }

  /* ===== SUBMIT BUTTON ===== */
  .sf-submit-btn {
    width: 100%;
    height: 50px;
    border: none;
    border-radius: var(--radius-sm);
    background: linear-gradient(105deg, var(--primary) 0%, #1d4ed8 100%);
    color: #fff;
    font-family: 'Syne', sans-serif;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    box-shadow: 0 6px 24px rgba(37,99,235,0.35);
    transition: transform 0.18s, box-shadow 0.18s, background 0.18s;
    position: relative;
    overflow: hidden;
  }
  .sf-submit-btn::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(105deg, rgba(255,255,255,0.15), transparent);
    opacity: 0;
    transition: opacity 0.2s;
  }
  .sf-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 32px rgba(37,99,235,0.45);
  }
  .sf-submit-btn:hover::after { opacity: 1; }
  .sf-submit-btn:active { transform: translateY(0); }

  .btn-spinner {
    display: none;
    animation: spin 0.7s linear infinite;
  }
  .sf-submit-btn.loading .btn-main-icon { display: none; }
  .sf-submit-btn.loading .btn-spinner   { display: inline-block; }
  @keyframes spin {
    from { transform: rotate(0deg); }
    to   { transform: rotate(360deg); }
  }

  /* ===== DIVIDER ===== */
  .sf-divider {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    color: var(--text-light);
    margin: 22px 0;
    font-weight: 500;
  }
  .sf-divider::before,
  .sf-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
  }

  /* ===== REGISTER BOX ===== */
  .sf-register-box {
    background: linear-gradient(105deg, var(--surface), #edfff5);
    border: 1px solid rgba(34,197,94,0.2);
    border-radius: var(--radius-sm);
    padding: 18px 20px;
    text-align: center;
    margin-bottom: 20px;
  }
  .sf-register-box p {
    font-size: 13px;
    color: var(--text-muted);
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
  }
  .sf-register-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 24px;
    border-radius: 10px;
    background: linear-gradient(105deg, var(--accent), var(--accent-dark));
    color: #fff;
    font-family: 'Syne', sans-serif;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(34,197,94,0.3);
    transition: transform 0.18s, box-shadow 0.18s;
  }
  .sf-register-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(34,197,94,0.42);
    color: #fff;
  }

  /* ===== TRUST BADGES ===== */
  .sf-trust-row {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
  }
  .sf-trust-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    font-weight: 500;
    color: var(--text-muted);
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 5px 12px;
  }
  .sf-trust-item i { color: var(--primary); font-size: 12px; }
  .sf-trust-item:nth-child(2) i { color: #f59e0b; }

  /* ===== CARD FOOTER ===== */
  .sf-card-footer {
    padding: 14px 28px;
    background: var(--surface);
    border-top: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 8px;
  }
  .sf-footer-brand {
    display: flex;
    align-items: center;
    gap: 7px;
    font-family: 'Syne', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: var(--primary);
  }
  .sf-footer-links {
    display: flex;
    gap: 16px;
  }
  .sf-footer-links a {
    font-size: 12px;
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.2s;
  }
  .sf-footer-links a:hover { color: var(--primary); }

  /* ===== STATS ROW ===== */
  .sf-stats-row {
    display: flex;
    gap: 32px;
    margin-top: 28px;
    animation: fadeUp 0.9s cubic-bezier(.22,.68,0,1.2) 0.35s both;
  }
  .sf-stat { text-align: center; }
  .sf-stat-num {
    font-family: 'Syne', sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
  }
  .sf-stat-num span { color: var(--accent); font-size: 18px; }
  .sf-stat-label {
    font-size: 11px;
    color: var(--text-muted);
    font-weight: 500;
    margin-top: 3px;
  }

  .sf-location-tag {
    margin-top: 14px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--text-light);
    animation: fadeUp 1s cubic-bezier(.22,.68,0,1.2) 0.45s both;
  }
  .sf-location-tag i { color: var(--accent); }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 520px) {
    .sf-card-body { padding: 22px 20px 20px; }
    .sf-card-footer { padding: 12px 20px; }
    .sf-card-strip { padding: 18px 20px 16px; }
    .sf-stats-row { gap: 20px; }
    .sf-logo-text { font-size: 24px; }
  }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- ===================== BACKGROUND ===================== -->
<div class="sf-bg">
    <div class="sf-grid"></div>
    <div class="sf-blob sf-blob-1"></div>
    <div class="sf-blob sf-blob-2"></div>
    <div class="sf-blob sf-blob-3"></div>

    <!-- Ripple rings -->
    <div class="search-ring"></div>
    <div class="search-ring"></div>
    <div class="search-ring"></div>

    <!-- Floating service icons -->
    <div class="floating-icon"><i class="bi bi-wrench-adjustable"></i></div>
    <div class="floating-icon"><i class="bi bi-plug-fill"></i></div>
    <div class="floating-icon"><i class="bi bi-droplet-half"></i></div>
    <div class="floating-icon"><i class="bi bi-brush-fill"></i></div>
    <div class="floating-icon"><i class="bi bi-shield-check"></i></div>
    <div class="floating-icon"><i class="bi bi-house-gear-fill"></i></div>
</div>

<!-- ===================== MAIN WRAPPER ===================== -->
<div class="sf-wrapper">

    <!-- Brand above card -->
    <div class="sf-brand-top">
        <a href="#" class="sf-logo-wrap">
            <div class="sf-logo-icon">
                <i class="bi bi-search-heart-fill"></i>
            </div>
            <div class="sf-logo-text">
                <span>Sheba</span><em>Finder</em>
            </div>
        </a>
        <div class="sf-tagline">
            <i class="bi bi-geo-alt-fill"></i>
            Bangladesh's #1 Local Service Directory
            <i class="bi bi-geo-alt-fill"></i>
        </div>
    </div>

    <!-- Card -->
    <div class="sf-card">

        <!-- Strip header -->
        <div class="sf-card-strip">
            <div class="sf-strip-inner">
                <div class="sf-strip-left">
                    <h2>Welcome Back!</h2>
                    <p>Sign in to find services near you</p>
                </div>
                <div class="sf-strip-badge">
                    <div class="sf-live-dot"></div>
                    Live Services
                </div>
            </div>
        </div>

        <!-- Scrolling service pills -->
        <div class="sf-pills-wrap">
            <div class="sf-pills-track">
                <div class="sf-pill"><i class="bi bi-wrench-adjustable"></i> AC Repair</div>
                <div class="sf-pill accent"><i class="bi bi-droplet-half"></i> Plumbing</div>
                <div class="sf-pill"><i class="bi bi-plug-fill"></i> Electrician</div>
                <div class="sf-pill accent"><i class="bi bi-brush-fill"></i> Painting</div>
                <div class="sf-pill"><i class="bi bi-truck"></i> Moving</div>
                <div class="sf-pill accent"><i class="bi bi-house-gear"></i> Home Cleaning</div>
                <div class="sf-pill"><i class="bi bi-laptop"></i> IT Support</div>
                <div class="sf-pill accent"><i class="bi bi-scissors"></i> Salon</div>
                <div class="sf-pill"><i class="bi bi-tree"></i> Gardening</div>
                <div class="sf-pill accent"><i class="bi bi-camera"></i> Photography</div>
                <!-- Duplicate for seamless loop -->
                <div class="sf-pill"><i class="bi bi-wrench-adjustable"></i> AC Repair</div>
                <div class="sf-pill accent"><i class="bi bi-droplet-half"></i> Plumbing</div>
                <div class="sf-pill"><i class="bi bi-plug-fill"></i> Electrician</div>
                <div class="sf-pill accent"><i class="bi bi-brush-fill"></i> Painting</div>
                <div class="sf-pill"><i class="bi bi-truck"></i> Moving</div>
                <div class="sf-pill accent"><i class="bi bi-house-gear"></i> Home Cleaning</div>
                <div class="sf-pill"><i class="bi bi-laptop"></i> IT Support</div>
                <div class="sf-pill accent"><i class="bi bi-scissors"></i> Salon</div>
                <div class="sf-pill"><i class="bi bi-tree"></i> Gardening</div>
                <div class="sf-pill accent"><i class="bi bi-camera"></i> Photography</div>
            </div>
        </div>

        <!-- Body -->
        <div class="sf-card-body">

            <div class="sf-section-label">Subscriber Login</div>

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <!-- EMAIL -->
                <div class="sf-field">
                    <label for="email" class="sf-label">
                        <i class="bi bi-envelope-fill"></i>
                        Email Address
                    </label>
                    <div class="sf-input-wrap">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="sf-input @error('email') is-invalid @enderror"
                            placeholder="you@example.com"
                            required
                            autocomplete="email"
                            autofocus>
                        <i class="bi bi-envelope sf-input-icon"></i>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="sf-field">
                    <label for="password" class="sf-label">
                        <i class="bi bi-shield-lock-fill"></i>
                        Password
                    </label>
                    <div class="sf-input-wrap">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="sf-input @error('password') is-invalid @enderror"
                            placeholder="••••••••"
                            required
                            autocomplete="current-password">
                        <button type="button" class="sf-toggle-btn" id="togglePassword" aria-label="Toggle password visibility">
                            <i class="bi bi-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <!-- REMEMBER + FORGOT -->
                <div class="sf-row-options">
                    <label class="sf-check-label" for="remember">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <i class="bi bi-bookmark-check" style="color:var(--primary);font-size:13px;"></i>
                        Remember Me
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="sf-forgot">
                            <i class="bi bi-key-fill"></i>
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <!-- SUBMIT -->
                <button type="submit" class="sf-submit-btn" id="loginBtn">
                    <i class="bi bi-box-arrow-in-right btn-main-icon"></i>
                    <i class="bi bi-arrow-repeat btn-spinner"></i>
                    Sign In to ShebaFinder
                </button>

            </form>

            <!-- DIVIDER -->
            <div class="sf-divider">
                New to ShebaFinder?
            </div>

            <!-- REGISTER -->
            <div class="sf-register-box">
                <p>
                    <i class="bi bi-people-fill" style="color:var(--accent);"></i>
                    Join thousands finding trusted local services across Bangladesh
                </p>
                <a href="{{ route('register') }}" class="sf-register-btn">
                    <i class="bi bi-person-plus-fill"></i>
                    Create Free Account
                </a>
            </div>

            <!-- TRUST BADGES -->
            <div class="sf-trust-row">
                <div class="sf-trust-item">
                    <i class="bi bi-shield-fill-check"></i> Verified Providers
                </div>
                <div class="sf-trust-item">
                    <i class="bi bi-star-fill"></i> Rated &amp; Reviewed
                </div>
                <div class="sf-trust-item">
                    <i class="bi bi-lock-fill"></i> Secure Login
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="sf-card-footer">
            <div class="sf-footer-brand">
                <i class="bi bi-search-heart-fill"></i>
                ShebaFinder &copy; 2025
            </div>
            <div class="sf-footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Support</a>
            </div>
        </div>

    </div>
    <!-- /sf-card -->

    <!-- Stats below card -->
    <div class="sf-stats-row">
        <div class="sf-stat">
            <div class="sf-stat-num">10K<span>+</span></div>
            <div class="sf-stat-label">Service Providers</div>
        </div>
        <div class="sf-stat">
            <div class="sf-stat-num">64<span>+</span></div>
            <div class="sf-stat-label">Districts Covered</div>
        </div>
        <div class="sf-stat">
            <div class="sf-stat-num">50K<span>+</span></div>
            <div class="sf-stat-label">Happy Customers</div>
        </div>
    </div>

    <div class="sf-location-tag">
        <i class="bi bi-geo-alt-fill"></i>
        Serving all across Bangladesh — Dhaka, Chattogram, Sylhet &amp; more
    </div>

</div>
<!-- /sf-wrapper -->

<script>
  // Password toggle
  const toggleBtn = document.getElementById('togglePassword');
  const pwInput   = document.getElementById('password');
  const toggleIcon = document.getElementById('toggleIcon');
  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const isText = pwInput.type === 'text';
      pwInput.type = isText ? 'password' : 'text';
      toggleIcon.className = isText ? 'bi bi-eye' : 'bi bi-eye-slash';
    });
  }

  // Submit loading state
  const form = document.getElementById('loginForm');
  const btn  = document.getElementById('loginBtn');
  if (form && btn) {
    form.addEventListener('submit', () => {
      btn.classList.add('loading');
      btn.disabled = true;
    });
  }
</script>