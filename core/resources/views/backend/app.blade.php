<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ShebaFinder Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563EB; --primary-dark: #1d4ed8;
            --accent: #22C55E; --sidebar-bg: #0F172A;
            --sidebar-width: 260px;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #F1F5F9; }

        .sf-admin-sidebar {
            width: var(--sidebar-width); position: fixed;
            top: 0; left: 0; bottom: 0;
            background: var(--sidebar-bg); z-index: 100;
            overflow-y: auto;
        }
        .sf-admin-main { margin-left: var(--sidebar-width); min-height: 100vh; }
        .sf-admin-topbar {
            background: white; padding: 16px 28px;
            border-bottom: 2px solid #E2E8F0;
            display: flex; align-items: center; justify-content: space-between;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            position: sticky; top: 0; z-index: 50;
        }
        .sf-admin-content { padding: 28px; }

        .sf-admin-brand {
            display: flex; align-items: center; gap: 12px;
            padding: 24px 20px; border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .sf-admin-brand-icon {
            width: 42px; height: 42px; border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex; align-items: center; justify-content: center;
            color: white; font-size: 20px;
        }
        .sf-admin-brand-text { color: white; font-size: 18px; font-weight: 800; }
        .sf-admin-brand-text span { color: var(--accent); }
        .sf-admin-brand small { display: block; color: rgba(255,255,255,0.4); font-size: 11px; }

        @media (max-width: 991px) {
            .sf-admin-sidebar { transform: translateX(-100%); }
            .sf-admin-main { margin-left: 0; }
        }
    </style>
</head>
<body>
    <aside class="sf-admin-sidebar">
        @include('backend.partials.sidebar')
    </aside>
    <main class="sf-admin-main">
        <div class="sf-admin-topbar">
            <h6 class="mb-0 fw-700" style="font-weight:700;color:#1E293B;">
                <i class="bi bi-speedometer2 me-2" style="color:#2563EB;"></i> অ্যাডমিন প্যানেল
            </h6>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-house-fill me-1"></i> ওয়েবসাইট দেখুন
                </a>
            </div>
        </div>
        <div class="sf-admin-content">
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
