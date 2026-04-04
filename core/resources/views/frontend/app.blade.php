<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ShebaFinder - আপনার বিশ্বস্ত সেবা খুঁজুন</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563EB;
            --primary-dark: #1d4ed8;
            --primary-light: #dbeafe;
            --accent: #22C55E;
            --accent-dark: #16a34a;
            --accent-light: #dcfce7;
            --white: #FFFFFF;
            --gray-50: #F8FAFC;
            --gray-100: #F1F5F9;
            --gray-200: #E2E8F0;
            --gray-400: #94A3B8;
            --gray-600: #475569;
            --gray-800: #1E293B;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #fff; color: var(--gray-800); overflow-x: hidden; }
        a { text-decoration: none; color: inherit; }

        #pageLoader {
            position: fixed; inset: 0; background: var(--white);
            display: flex; flex-direction: column; align-items: center;
            justify-content: center; z-index: 99999;
            transition: opacity 0.6s ease, visibility 0.6s;
        }
        #pageLoader.hidden { opacity: 0; visibility: hidden; }
        .loader-logo { font-size: 32px; font-weight: 800; color: var(--primary); margin-bottom: 24px; }
        .loader-logo span { color: var(--accent); }
        .loader-bar { width: 200px; height: 4px; background: var(--gray-100); border-radius: 99px; overflow: hidden; }
        .loader-bar-fill { height: 100%; background: linear-gradient(90deg, var(--primary), var(--accent)); border-radius: 99px; animation: loaderFill 1.2s ease-in-out infinite; }
        @keyframes loaderFill { 0% { width: 0%; } 100% { width: 100%; } }

        #scrollTop {
            position: fixed; bottom: 30px; right: 30px; width: 48px; height: 48px;
            background: var(--primary); color: white; border: none; border-radius: 12px;
            display: flex; align-items: center; justify-content: center; font-size: 20px;
            cursor: pointer; z-index: 999; opacity: 0; visibility: hidden; transition: all 0.3s;
            box-shadow: 0 8px 24px rgba(37,99,235,0.4);
        }
        #scrollTop.visible { opacity: 1; visibility: visible; }
        #scrollTop:hover { background: var(--primary-dark); transform: translateY(-3px); }

        .alert-success-custom {
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: white; padding: 16px 24px; text-align: center;
            font-weight: 600; position: relative; z-index: 1000;
            animation: slideDownAlert 0.5s ease-out;
        }
        @keyframes slideDownAlert { from { transform: translateY(-100%); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>
    <div id="pageLoader">
        <div class="loader-logo">Sheba<span>Finder</span></div>
        <div class="loader-bar"><div class="loader-bar-fill"></div></div>
    </div>
    <button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="bi bi-chevron-up"></i></button>

    @include('frontend.partials.menu')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', () => { setTimeout(() => { document.getElementById('pageLoader').classList.add('hidden'); }, 900); });
        window.addEventListener('scroll', () => {
            const s = document.getElementById('scrollTop');
            window.scrollY > 400 ? s.classList.add('visible') : s.classList.remove('visible');
        });
    </script>
</body>
</html>
