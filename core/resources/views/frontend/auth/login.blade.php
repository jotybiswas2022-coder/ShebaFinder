 <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
 
    <style>
        /* =========================================
           CSS VARIABLES & RESET
        ========================================= */
        :root {
            --primary:     #2563EB;
            --primary-light: #3B82F6;
            --primary-dark: #1D4ED8;
            --primary-ghost: rgba(37, 99, 235, 0.08);
            --accent:      #22C55E;
            --accent-light: #4ADE80;
            --accent-dark:  #16A34A;
            --white:       #FFFFFF;
            --bg:          #F0F6FF;
            --card-bg:     #FFFFFF;
            --text-dark:   #0F172A;
            --text-mid:    #334155;
            --text-soft:   #64748B;
            --text-light:  #94A3B8;
            --border:      #E2E8F0;
            --border-focus: #2563EB;
            --shadow-sm:   0 1px 3px rgba(37,99,235,0.08);
            --shadow-md:   0 4px 20px rgba(37,99,235,0.12);
            --shadow-lg:   0 20px 60px rgba(37,99,235,0.18);
            --radius-sm:   8px;
            --radius-md:   14px;
            --radius-lg:   24px;
            --radius-xl:   32px;
            --font-head:   'Sora', sans-serif;
            --font-body:   'DM Sans', sans-serif;
        }
 
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
        body {
            font-family: var(--font-body);
            background: var(--bg);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
 
        /* =========================================
           ANIMATED BACKGROUND
        ========================================= */
        .sf-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            overflow: hidden;
        }
 
        /* Mesh gradient blobs */
        .sf-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.18;
            animation: blobFloat 12s ease-in-out infinite alternate;
        }
        .sf-blob-1 {
            width: 520px; height: 520px;
            background: var(--primary);
            top: -160px; left: -120px;
            animation-delay: 0s;
        }
        .sf-blob-2 {
            width: 400px; height: 400px;
            background: var(--accent);
            bottom: -100px; right: -80px;
            animation-delay: -4s;
        }
        .sf-blob-3 {
            width: 280px; height: 280px;
            background: var(--primary-light);
            top: 50%; right: 10%;
            animation-delay: -8s;
        }
 
        @keyframes blobFloat {
            0%   { transform: translate(0, 0) scale(1); }
            50%  { transform: translate(30px, -20px) scale(1.06); }
            100% { transform: translate(-20px, 30px) scale(0.96); }
        }
 
        /* Grid dots pattern */
        .sf-grid {
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle, rgba(37,99,235,0.12) 1px, transparent 1px);
            background-size: 36px 36px;
        }
 
        /* Floating service icons */
        .floating-icon {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 52px; height: 52px;
            background: var(--white);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            color: var(--primary);
            font-size: 22px;
            animation: iconFloat 8s ease-in-out infinite;
            opacity: 0.85;
        }
        .floating-icon:nth-child(1)  { top: 8%;  left: 6%;  animation-delay: 0s;    animation-duration: 7s; }
        .floating-icon:nth-child(2)  { top: 18%; right: 7%; animation-delay: -2s;   animation-duration: 9s; color: var(--accent); }
        .floating-icon:nth-child(3)  { top: 55%; left: 4%;  animation-delay: -1s;   animation-duration: 8s; }
        .floating-icon:nth-child(4)  { bottom: 18%; right: 5%; animation-delay: -3s; animation-duration: 10s; color: var(--accent); }
        .floating-icon:nth-child(5)  { bottom: 8%;  left: 8%;  animation-delay: -4s; animation-duration: 7.5s; }
        .floating-icon:nth-child(6)  { top: 40%; right: 4%;   animation-delay: -5s; animation-duration: 11s; color: var(--accent); }
 
        @keyframes iconFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33%       { transform: translateY(-16px) rotate(3deg); }
            66%       { transform: translateY(8px) rotate(-2deg); }
        }
 
        /* Animated search ring */
        .search-ring {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 700px; height: 700px;
            border: 1.5px solid rgba(37,99,235,0.06);
            border-radius: 50%;
            animation: ringPulse 6s ease-in-out infinite;
        }
        .search-ring:nth-child(2) {
            width: 900px; height: 900px;
            animation-delay: -2s;
            border-color: rgba(34,197,94,0.05);
        }
        .search-ring:nth-child(3) {
            width: 1100px; height: 1100px;
            animation-delay: -4s;
        }
 
        @keyframes ringPulse {
            0%, 100% { opacity: 0.6; transform: translate(-50%, -50%) scale(1); }
            50%       { opacity: 1;   transform: translate(-50%, -50%) scale(1.03); }
        }
 
        /* =========================================
           MAIN WRAPPER
        ========================================= */
        .sf-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 480px;
            padding: 20px 16px;
            animation: wrapperIn 0.7s cubic-bezier(0.22,1,0.36,1) both;
        }
 
        @keyframes wrapperIn {
            from { opacity: 0; transform: translateY(32px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }
 
        /* =========================================
           BRAND HEADER (above card)
        ========================================= */
        .sf-brand-top {
            text-align: center;
            margin-bottom: 24px;
            animation: fadeInDown 0.6s 0.1s cubic-bezier(0.22,1,0.36,1) both;
        }
 
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
 
        .sf-logo-wrap {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
 
        .sf-logo-icon {
            width: 48px; height: 48px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border-radius: var(--radius-sm);
            display: flex; align-items: center; justify-content: center;
            color: #fff;
            font-size: 24px;
            box-shadow: 0 4px 16px rgba(37,99,235,0.3);
            position: relative;
            overflow: hidden;
        }
        .sf-logo-icon::after {
            content: '';
            position: absolute;
            top: -40%; left: -40%;
            width: 60%; height: 60%;
            background: rgba(255,255,255,0.25);
            border-radius: 50%;
        }
 
        .sf-logo-text {
            font-family: var(--font-head);
            font-size: 26px;
            font-weight: 800;
            color: var(--text-dark);
            letter-spacing: -0.5px;
        }
        .sf-logo-text span { color: var(--primary); }
        .sf-logo-text em {
            color: var(--accent);
            font-style: normal;
        }
 
        .sf-tagline {
            margin-top: 6px;
            font-size: 13px;
            color: var(--text-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            font-weight: 400;
        }
        .sf-tagline i { color: var(--accent); font-size: 11px; }
 
        /* =========================================
           CARD
        ========================================= */
        .sf-card {
            background: var(--card-bg);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            border: 1px solid rgba(37,99,235,0.06);
            animation: cardIn 0.7s 0.15s cubic-bezier(0.22,1,0.36,1) both;
        }
 
        @keyframes cardIn {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
 
        /* =========================================
           CARD TOP STRIP
        ========================================= */
        .sf-card-strip {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 50%, var(--primary-light) 100%);
            padding: 22px 28px 18px;
            position: relative;
            overflow: hidden;
        }
        .sf-card-strip::before {
            content: '';
            position: absolute;
            top: -30px; right: -30px;
            width: 140px; height: 140px;
            background: rgba(255,255,255,0.07);
            border-radius: 50%;
        }
        .sf-card-strip::after {
            content: '';
            position: absolute;
            bottom: -40px; left: 30px;
            width: 100px; height: 100px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }
 
        .sf-strip-inner {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
 
        .sf-strip-left h2 {
            font-family: var(--font-head);
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }
        .sf-strip-left p {
            font-size: 12.5px;
            color: rgba(255,255,255,0.72);
            margin-top: 3px;
            font-weight: 400;
        }
 
        .sf-strip-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 5px 11px;
            font-size: 11.5px;
            color: #fff;
            font-weight: 500;
            backdrop-filter: blur(4px);
        }
        .sf-live-dot {
            width: 6px; height: 6px;
            background: var(--accent-light);
            border-radius: 50%;
            animation: livePulse 1.4s ease-in-out infinite;
        }
        @keyframes livePulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50%       { opacity: 0.5; transform: scale(0.7); }
        }
 
        /* =========================================
           SERVICE PILLS (animated scroll)
        ========================================= */
        .sf-pills-wrap {
            background: #F8FBFF;
            border-bottom: 1px solid var(--border);
            padding: 10px 0;
            overflow: hidden;
        }
        .sf-pills-track {
            display: flex;
            gap: 8px;
            animation: pillScroll 22s linear infinite;
            width: max-content;
        }
        @keyframes pillScroll {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .sf-pill {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 11.5px;
            color: var(--text-mid);
            font-weight: 500;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .sf-pill i { color: var(--primary); font-size: 12px; }
        .sf-pill.accent i { color: var(--accent); }
 
        /* =========================================
           CARD BODY
        ========================================= */
        .sf-card-body {
            padding: 28px 32px 24px;
        }
 
        .sf-section-label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            font-weight: 600;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        .sf-section-label::before,
        .sf-section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }
 
        /* =========================================
           FORM ELEMENTS
        ========================================= */
        .sf-field {
            margin-bottom: 18px;
            animation: fieldIn 0.5s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-field:nth-child(1) { animation-delay: 0.25s; }
        .sf-field:nth-child(2) { animation-delay: 0.35s; }
 
        @keyframes fieldIn {
            from { opacity: 0; transform: translateX(-12px); }
            to   { opacity: 1; transform: translateX(0); }
        }
 
        .sf-label {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-mid);
            margin-bottom: 7px;
            font-family: var(--font-body);
        }
        .sf-label i { color: var(--primary); font-size: 13px; }
 
        .sf-input-wrap {
            position: relative;
        }
 
        .sf-input {
            width: 100%;
            height: 48px;
            padding: 0 44px 0 16px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--text-dark);
            background: #FAFCFF;
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
            outline: none;
        }
        .sf-input::placeholder { color: var(--text-light); }
        .sf-input:focus {
            border-color: var(--border-focus);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
        }
        .sf-input.is-invalid {
            border-color: #EF4444;
            box-shadow: 0 0 0 3px rgba(239,68,68,0.1);
        }
 
        .sf-input-icon {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 16px;
            pointer-events: none;
            transition: color 0.2s;
        }
        .sf-input:focus ~ .sf-input-icon { color: var(--primary); }
 
        .sf-toggle-btn {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-light);
            font-size: 16px;
            padding: 4px;
            border-radius: 4px;
            transition: color 0.2s;
            z-index: 2;
        }
        .sf-toggle-btn:hover { color: var(--primary); }
 
        .invalid-feedback {
            font-size: 12px;
            color: #EF4444;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
 
        /* =========================================
           REMEMBER + FORGOT
        ========================================= */
        .sf-row-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            animation: fieldIn 0.5s 0.45s cubic-bezier(0.22,1,0.36,1) both;
        }
 
        .sf-check-label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            color: var(--text-mid);
            cursor: pointer;
            font-weight: 400;
            user-select: none;
        }
        .sf-check-label input[type="checkbox"] {
            width: 15px; height: 15px;
            accent-color: var(--primary);
            cursor: pointer;
        }
 
        .sf-forgot {
            font-size: 12.5px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 4px;
            transition: color 0.2s;
        }
        .sf-forgot:hover { color: var(--primary-dark); }
 
        /* =========================================
           SUBMIT BUTTON
        ========================================= */
        .sf-submit-btn {
            width: 100%;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary) 50%, var(--primary-light));
            background-size: 200% 100%;
            border: none;
            border-radius: var(--radius-sm);
            color: #fff;
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            letter-spacing: 0.2px;
            transition: background-position 0.4s, box-shadow 0.3s, transform 0.2s;
            box-shadow: 0 4px 16px rgba(37,99,235,0.3);
            animation: fieldIn 0.5s 0.5s cubic-bezier(0.22,1,0.36,1) both;
            position: relative;
            overflow: hidden;
        }
        .sf-submit-btn::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            transition: left 0.5s;
        }
        .sf-submit-btn:hover::before { left: 100%; }
        .sf-submit-btn:hover {
            background-position: right center;
            box-shadow: 0 6px 24px rgba(37,99,235,0.4);
            transform: translateY(-1px);
        }
        .sf-submit-btn:active { transform: translateY(0); }
 
        .btn-spinner { display: none; }
        .sf-submit-btn.loading .btn-spinner { display: inline-block; animation: spin 0.8s linear infinite; }
        .sf-submit-btn.loading .btn-main-icon { display: none; }
        @keyframes spin { to { transform: rotate(360deg); } }
 
        /* =========================================
           DIVIDER
        ========================================= */
        .sf-divider {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
            color: var(--text-light);
            font-size: 12px;
            font-weight: 500;
            animation: fieldIn 0.5s 0.55s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-divider::before,
        .sf-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }
 
        /* =========================================
           REGISTER SECTION
        ========================================= */
        .sf-register-box {
            background: linear-gradient(135deg, rgba(34,197,94,0.06), rgba(37,99,235,0.05));
            border: 1px solid rgba(34,197,94,0.2);
            border-radius: var(--radius-md);
            padding: 16px 20px;
            text-align: center;
            animation: fieldIn 0.5s 0.6s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-register-box p {
            font-size: 13px;
            color: var(--text-soft);
            margin-bottom: 10px;
        }
        .sf-register-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, var(--accent-dark), var(--accent));
            color: #fff;
            border: none;
            border-radius: var(--radius-sm);
            padding: 9px 22px;
            font-family: var(--font-head);
            font-size: 13.5px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: box-shadow 0.3s, transform 0.2s;
            box-shadow: 0 3px 12px rgba(34,197,94,0.3);
        }
        .sf-register-btn:hover {
            box-shadow: 0 5px 20px rgba(34,197,94,0.4);
            transform: translateY(-1px);
            color: #fff;
        }
 
        /* =========================================
           TRUST BADGES
        ========================================= */
        .sf-trust-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            margin-top: 18px;
            flex-wrap: wrap;
            animation: fieldIn 0.5s 0.65s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-trust-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 11px;
            color: var(--text-light);
            font-weight: 500;
        }
        .sf-trust-item i { color: var(--accent); font-size: 13px; }
 
        /* =========================================
           FOOTER
        ========================================= */
        .sf-card-footer {
            background: #F8FBFF;
            border-top: 1px solid var(--border);
            padding: 12px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 6px;
        }
        .sf-footer-brand {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            color: var(--text-light);
            font-weight: 500;
        }
        .sf-footer-brand i { color: var(--primary); font-size: 13px; }
        .sf-footer-links {
            display: flex;
            gap: 14px;
        }
        .sf-footer-links a {
            font-size: 11.5px;
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.2s;
        }
        .sf-footer-links a:hover { color: var(--primary); }
 
        /* =========================================
           BELOW CARD STATS
        ========================================= */
        .sf-stats-row {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 20px;
            animation: fieldIn 0.5s 0.7s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-stat {
            text-align: center;
        }
        .sf-stat-num {
            font-family: var(--font-head);
            font-size: 18px;
            font-weight: 800;
            color: var(--primary);
        }
        .sf-stat-num span { color: var(--accent); }
        .sf-stat-label {
            font-size: 11px;
            color: var(--text-light);
            font-weight: 400;
        }
 
        /* =========================================
           LOCATION TAG
        ========================================= */
        .sf-location-tag {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 10px;
            font-size: 11.5px;
            color: var(--text-light);
            animation: fieldIn 0.5s 0.75s cubic-bezier(0.22,1,0.36,1) both;
        }
        .sf-location-tag i { color: var(--primary); font-size: 12px; }
 
        /* =========================================
           RESPONSIVE
        ========================================= */
        @media (max-width: 520px) {
            .sf-card-body { padding: 22px 20px 18px; }
            .sf-card-strip { padding: 18px 20px 14px; }
            .sf-logo-text { font-size: 22px; }
            .sf-stats-row { gap: 16px; }
            .sf-card-footer { flex-direction: column; align-items: center; text-align: center; }
        }
 
        @media (max-width: 360px) {
            .sf-wrapper { padding: 16px 10px; }
            .floating-icon { display: none; }
        }
    </style>
 
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
                    <i class="bi bi-diamond-fill" style="font-size:7px;color:var(--border);"></i>
                    New to ShebaFinder?
                    <i class="bi bi-diamond-fill" style="font-size:7px;color:var(--border);"></i>
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
                        <i class="bi bi-star-fill"></i> Rated & Reviewed
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
            Serving all across Bangladesh — Dhaka, Chattogram, Sylhet & more
        </div>
 
    </div>
    <!-- /sf-wrapper -->
 
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const input = document.getElementById('password');
            const icon  = document.getElementById('toggleIcon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        });
 
        // Loading state on submit
        document.getElementById('loginForm').addEventListener('submit', function () {
            document.getElementById('loginBtn').classList.add('loading');
        });
 
        // Live date display (if needed anywhere)
        (function () {
            const el = document.getElementById('currentDate');
            if (el) {
                const d = new Date();
                el.textContent = d.toLocaleDateString('en-BD', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            }
        })();
    </script>