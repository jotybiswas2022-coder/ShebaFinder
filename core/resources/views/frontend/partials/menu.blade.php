<!-- ===== TOP INFO BAR ===== -->
<div class="sf-topbar">
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3 sf-topbar-left">
                <span><i class="bi bi-geo-alt-fill"></i> ঢাকা, বাংলাদেশ</span>
                <span class="d-none d-md-inline"><i class="bi bi-telephone-fill"></i> +880 1700-000000</span>
                <span class="d-none d-lg-inline"><i class="bi bi-clock-fill"></i> <span id="topTime"></span></span>
            </div>
            <div class="d-flex align-items-center gap-2 sf-topbar-right">
                <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                <a href="#" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ===== MAIN NAVBAR ===== -->
<nav class="sf-navbar navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-4">
        <!-- Brand -->
        <a class="navbar-brand sf-brand" href="{{ url('/') }}">
            <div class="sf-brand-icon">
                <i class="bi bi-search-heart-fill"></i>
            </div>
            <div>
                <span class="sf-brand-text">Sheba<span class="sf-brand-accent">Finder</span></span>
                <small class="sf-brand-sub d-block">সেবা খুঁজুন সহজে</small>
            </div>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler sf-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#sfNavCollapse">
            <i class="bi bi-list"></i>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="sfNavCollapse">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link sf-nav-link {{ request()->is('/') ? 'sf-active' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-house-door-fill"></i> হোম
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sf-nav-link {{ request()->is('profile') ? 'sf-active' : '' }}" href="{{ url('/profile') }}">
                        <i class="bi bi-person-circle"></i> প্রোফাইল
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sf-nav-link {{ request()->is('contact') ? 'sf-active' : '' }}" href="{{ url('/contact') }}">
                        <i class="bi bi-envelope-fill"></i> যোগাযোগ
                    </a>
                </li>

                @auth
                    @if(auth()->user()->is_admin == 1)
                    <li class="nav-item">
                        <a class="nav-link sf-nav-link {{ request()->is('admin') ? 'sf-active' : '' }}" href="{{ url('/admin') }}">
                            <i class="bi bi-speedometer2"></i> অ্যাডমিন
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="sf-btn-logout">
                                <i class="bi bi-box-arrow-right"></i> লগআউট
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link sf-nav-link" href="{{ url('/login') }}">
                            <i class="bi bi-person-check-fill"></i> লগইন
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="sf-register-btn" href="{{ url('/register') }}">
                            <i class="bi bi-person-plus-fill"></i> রেজিস্ট্রেশন
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<style>
/* ===== TOP BAR ===== */
.sf-topbar {
    background: var(--gray-800, #1E293B);
    color: rgba(255,255,255,0.75);
    padding: 7px 0;
    font-size: 12.5px;
    font-weight: 500;
}
.sf-topbar i { color: var(--accent, #22C55E); margin-right: 4px; font-size: 12px; }
.sf-topbar-right a {
    color: rgba(255,255,255,0.6);
    font-size: 15px;
    transition: color 0.3s;
    padding: 2px 4px;
}
.sf-topbar-right a:hover { color: var(--accent, #22C55E); }

/* ===== NAVBAR ===== */
.sf-navbar {
    background: #fff;
    border-bottom: 3px solid var(--primary, #2563EB);
    padding: 0 !important;
    z-index: 1040;
    box-shadow: 0 4px 20px rgba(37,99,235,0.08);
    transition: all 0.3s;
    animation: navSlideDown 0.6s ease-out;
}
.sf-navbar.scrolled {
    box-shadow: 0 8px 32px rgba(37,99,235,0.15);
}
@keyframes navSlideDown {
    from { transform: translateY(-100%); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* ===== BRAND ===== */
.sf-brand {
    display: flex !important;
    align-items: center;
    gap: 12px;
    padding: 10px 0 !important;
    text-decoration: none;
    transition: transform 0.3s;
}
.sf-brand:hover { transform: translateY(-1px); }
.sf-brand-icon {
    width: 46px; height: 46px;
    background: linear-gradient(135deg, var(--primary, #2563EB), #1d4ed8);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 22px;
    box-shadow: 0 4px 14px rgba(37,99,235,0.35);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.sf-brand:hover .sf-brand-icon {
    transform: rotate(-8deg) scale(1.1);
    box-shadow: 0 8px 24px rgba(37,99,235,0.4);
}
.sf-brand-text {
    font-size: 22px; font-weight: 800;
    color: var(--gray-800, #1E293B); line-height: 1;
    display: block;
}
.sf-brand-accent { color: var(--accent, #22C55E); }
.sf-brand-sub { font-size: 10.5px; color: var(--gray-400, #94A3B8); font-weight: 500; margin-top: 1px; }

/* ===== SEARCH BAR ===== */
.sf-search-bar { flex: 1; max-width: 480px; margin: 0 32px; }
.sf-search-wrap {
    display: flex; align-items: center;
    background: var(--gray-50, #F8FAFC);
    border: 2px solid var(--gray-200, #E2E8F0);
    border-radius: 10px; overflow: hidden;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.sf-search-wrap:focus-within {
    border-color: var(--primary, #2563EB);
    box-shadow: 0 0 0 4px rgba(37,99,235,0.1);
}
.sf-search-icon { padding: 0 12px; color: var(--gray-400, #94A3B8); font-size: 15px; }
.sf-search-input {
    flex: 1; border: none; background: transparent;
    padding: 10px 0; font-size: 13.5px; color: var(--gray-800, #1E293B);
    outline: none; font-family: inherit;
}
.sf-search-input::placeholder { color: var(--gray-400, #94A3B8); }
.sf-search-btn {
    background: var(--primary, #2563EB); color: white;
    border: none; padding: 10px 20px; font-size: 13px;
    font-weight: 600; cursor: pointer; transition: background 0.3s;
    font-family: inherit;
}
.sf-search-btn:hover { background: var(--primary-dark, #1d4ed8); }

/* ===== NAV LINKS ===== */
.sf-nav-link {
    color: var(--gray-600, #475569) !important;
    font-weight: 600; font-size: 13.5px;
    padding: 24px 14px !important;
    display: flex; align-items: center; gap: 5px;
    position: relative; transition: all 0.3s;
    white-space: nowrap;
}
.sf-nav-link::after {
    content: ''; position: absolute; bottom: 0;
    left: 50%; transform: translateX(-50%);
    width: 0; height: 3px; background: var(--primary, #2563EB);
    transition: width 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border-radius: 3px 3px 0 0;
}
.sf-nav-link:hover { color: var(--primary, #2563EB) !important; }
.sf-nav-link:hover::after { width: 70%; }
.sf-active { color: var(--primary, #2563EB) !important; font-weight: 700; }
.sf-active::after { width: 70% !important; }

.sf-toggler {
    padding: 8px !important; font-size: 24px;
    color: var(--gray-800, #1E293B);
}
.sf-toggler:focus { box-shadow: 0 0 0 3px rgba(37,99,235,0.2) !important; }

.sf-btn-logout {
    background: transparent; border: none; cursor: pointer;
    color: var(--gray-600, #475569); font-weight: 600; font-size: 13.5px;
    padding: 24px 14px; display: flex; align-items: center; gap: 5px;
    position: relative; transition: color 0.3s; font-family: inherit;
}
.sf-btn-logout::after {
    content: ''; position: absolute; bottom: 0; left: 50%;
    transform: translateX(-50%); width: 0; height: 3px;
    background: var(--primary, #2563EB); transition: width 0.3s;
}
.sf-btn-logout:hover { color: var(--primary, #2563EB); }
.sf-btn-logout:hover::after { width: 70%; }

.sf-register-btn {
    background: var(--accent, #22C55E); color: white !important;
    padding: 10px 22px; border-radius: 8px;
    font-weight: 700; font-size: 13px;
    display: inline-flex; align-items: center; gap: 6px;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 4px 14px rgba(34,197,94,0.3);
    white-space: nowrap;
}
.sf-register-btn:hover {
    background: var(--accent-dark, #16a34a) !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(34,197,94,0.4);
    color: white !important;
}

@media (max-width: 991px) {
    .sf-nav-link { padding: 12px 8px !important; }
    .sf-btn-logout { padding: 12px 8px; }
    .sf-navbar .navbar-collapse { padding: 12px 0; border-top: 1px solid var(--gray-100, #F1F5F9); margin-top: 8px; }
    .sf-register-btn { margin: 8px 0; }
}
</style>

<script>
// Time update
function updateTopTime() {
    const el = document.getElementById('topTime');
    if (el) {
        const now = new Date();
        el.textContent = now.toLocaleTimeString('bn-BD', { hour: '2-digit', minute: '2-digit' });
    }
}
updateTopTime();
setInterval(updateTopTime, 60000);

// Navbar scroll effect
const sfNavbar = document.querySelector('.sf-navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 20) sfNavbar.classList.add('scrolled');
    else sfNavbar.classList.remove('scrolled');
});
</script>
