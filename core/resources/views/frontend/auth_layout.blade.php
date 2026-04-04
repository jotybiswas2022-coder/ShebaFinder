<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShebaFinder — @yield('title', 'লগইন')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563EB; --accent: #22C55E;
            --gray-800: #1E293B; --gray-100: #F1F5F9;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: var(--gray-100); min-height: 100vh; display: flex; flex-direction: column; }
        a { text-decoration: none; }

        .sf-auth-nav {
            background: white; padding: 14px 24px;
            border-bottom: 2px solid var(--primary);
            display: flex; align-items: center; justify-content: space-between;
        }
        .sf-auth-brand { display: flex; align-items: center; gap: 10px; }
        .sf-auth-brand-icon {
            width: 38px; height: 38px; border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), #1d4ed8);
            display: flex; align-items: center; justify-content: center;
            color: white; font-size: 18px;
        }
        .sf-auth-brand span { font-size: 20px; font-weight: 800; color: var(--gray-800); }
        .sf-auth-brand span span { color: var(--accent); }
    </style>
</head>
<body>
    <nav class="sf-auth-nav">
        <a href="{{ url('/') }}" class="sf-auth-brand">
            <div class="sf-auth-brand-icon"><i class="bi bi-search-heart-fill"></i></div>
            <span>Sheba<span>Finder</span></span>
        </a>
        <a href="{{ url('/') }}" class="btn btn-sm" style="color:#2563EB;font-weight:600;display:flex;align-items:center;gap:6px;">
            <i class="bi bi-house-fill"></i> হোমে ফিরুন
        </a>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
