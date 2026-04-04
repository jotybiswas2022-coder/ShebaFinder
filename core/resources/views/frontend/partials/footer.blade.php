@php
use App\Models\Setting;
$settings = Setting::first();
$email = $settings?->email ?? 'hello@shebafinder.com.bd';
$phone = $settings?->phone ?? '+880 1700-000000';
$location = $settings?->location ?? 'ঢাকা, বাংলাদেশ';
@endphp

<!-- ===== FOOTER ===== -->
<footer class="sf-footer">
    <!-- Main Footer -->
    <div class="sf-footer-main">
        <div class="container">
            <div class="row g-5">
                <!-- Brand Column -->
                <div class="col-lg-4">
                    <div class="sf-footer-brand">
                        <div class="sf-footer-logo">
                            <div class="sf-footer-logo-icon"><i class="bi bi-search-heart-fill"></i></div>
                            <span>Sheba<span>Finder</span></span>
                        </div>
                        <p>বাংলাদেশের সবচেয়ে বিশ্বস্ত স্থানীয় সেবা খোঁজার প্ল্যাটফর্ম। আপনার কাছের যাচাইকৃত পেশাদারদের সাথে সংযুক্ত হন।</p>
                        <div class="sf-footer-info">
                            <div class="sf-fi-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>{{ $location }}</span>
                            </div>
                            <div class="sf-fi-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $phone }}</span>
                            </div>
                            <div class="sf-fi-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>{{ $email }}</span>
                            </div>
                        </div>
                        <div class="sf-social-links">
                            <a href="#" class="sf-social-btn facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="sf-social-btn whatsapp"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="sf-social-btn youtube"><i class="bi bi-youtube"></i></a>
                            <a href="#" class="sf-social-btn linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="sf-footer-col">
                        <h5><i class="bi bi-link-45deg"></i> দ্রুত লিংক</h5>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="bi bi-chevron-right"></i> হোম</a></li>
                            <li><a href="#products"><i class="bi bi-chevron-right"></i> সব সেবা</a></li>
                            <li><a href="{{ url('/contact') }}"><i class="bi bi-chevron-right"></i> যোগাযোগ</a></li>
                            <li><a href="{{ url('/register') }}"><i class="bi bi-chevron-right"></i> রেজিস্ট্রেশন</a></li>
                            <li><a href="{{ url('/login') }}"><i class="bi bi-chevron-right"></i> লগইন</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Popular Services -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="sf-footer-col">
                        <h5><i class="bi bi-tools"></i> জনপ্রিয় সেবা</h5>
                        <ul>
                            <li><a href="#"><i class="bi bi-wrench-adjustable-circle-fill"></i> প্লাম্বিং সেবা</a></li>
                            <li><a href="#"><i class="bi bi-lightning-charge-fill"></i> ইলেকট্রিক কাজ</a></li>
                            <li><a href="#"><i class="bi bi-paint-bucket"></i> রং ও পেইন্টিং</a></li>
                            <li><a href="#"><i class="bi bi-house-gear-fill"></i> এসি মেরামত</a></li>
                            <li><a href="#"><i class="bi bi-stars"></i> গৃহপরিষ্কার</a></li>
                        </ul>
                    </div>
                </div>

                <!-- App Download -->
                <div class="col-lg-3 col-md-4">
                    <div class="sf-footer-col">
                        <h5><i class="bi bi-phone-fill"></i> অ্যাপ ডাউনলোড</h5>
                        <p class="sf-app-desc">আমাদের মোবাইল অ্যাপ দিয়ে আরও সহজে সেবা বুক করুন</p>
                        <div class="sf-app-btns">
                            <a href="#" class="sf-app-btn">
                                <i class="bi bi-google-play"></i>
                                <div>
                                    <small>এখনই পান</small>
                                    <span>Google Play</span>
                                </div>
                            </a>
                            <a href="#" class="sf-app-btn">
                                <i class="bi bi-apple"></i>
                                <div>
                                    <small>ডাউনলোড করুন</small>
                                    <span>App Store</span>
                                </div>
                            </a>
                        </div>
                        <div class="sf-badges">
                            <div class="sf-badge"><i class="bi bi-shield-fill-check"></i> ১০০% নিরাপদ</div>
                            <div class="sf-badge"><i class="bi bi-patch-check-fill"></i> যাচাইকৃত সেবা</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="sf-footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p>&copy; {{ date('Y') }} <span>ShebaFinder</span> — সর্বস্বত্ব সংরক্ষিত। বাংলাদেশে তৈরি <i class="bi bi-heart-fill text-danger"></i></p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <a href="#">গোপনীয়তা নীতি</a>
                    <span class="sf-sep">|</span>
                    <a href="#">সেবার শর্তাবলী</a>
                    <span class="sf-sep">|</span>
                    <a href="#">সহায়তা কেন্দ্র</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.sf-footer { background: #0F172A; }

/* Newsletter Bar */
.sf-footer-newsletter {
    background: linear-gradient(135deg, #1e3a8a, #2563EB);
    padding: 40px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}
.sf-nl-content { display: flex; align-items: center; gap: 16px; color: white; }
.sf-nl-icon { font-size: 40px; color: rgba(255,255,255,0.7); flex-shrink: 0; }
.sf-nl-content h4 { font-size: 18px; font-weight: 700; margin-bottom: 4px; }
.sf-nl-content p { font-size: 14px; color: rgba(255,255,255,0.7); margin: 0; }
.sf-nl-form {
    display: flex; gap: 0; border-radius: 10px; overflow: hidden;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
}
.sf-nl-form input {
    flex: 1; padding: 14px 20px; border: none;
    background: rgba(255,255,255,0.1); color: white;
    font-size: 14px; outline: none; font-family: inherit;
    border: 1px solid rgba(255,255,255,0.2);
    border-right: none;
}
.sf-nl-form input::placeholder { color: rgba(255,255,255,0.5); }
.sf-nl-form button {
    background: #22C55E; color: white; border: none;
    padding: 14px 24px; font-weight: 700; font-size: 14px;
    cursor: pointer; display: flex; align-items: center; gap: 8px;
    transition: background 0.3s; font-family: inherit; white-space: nowrap;
}
.sf-nl-form button:hover { background: #16a34a; }

/* Main Footer */
.sf-footer-main { padding: 80px 0 48px; }

.sf-footer-logo {
    display: flex; align-items: center; gap: 12px;
    margin-bottom: 20px;
}
.sf-footer-logo-icon {
    width: 44px; height: 44px; border-radius: 10px;
    background: linear-gradient(135deg, #2563EB, #22C55E);
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 20px;
}
.sf-footer-logo span { font-size: 22px; font-weight: 800; color: white; }
.sf-footer-logo span span { color: #22C55E; }

.sf-footer-brand p { color: rgba(255,255,255,0.55); font-size: 14.5px; line-height: 1.8; margin-bottom: 24px; }

.sf-footer-info { display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px; }
.sf-fi-item { display: flex; align-items: center; gap: 10px; color: rgba(255,255,255,0.6); font-size: 14px; }
.sf-fi-item i { color: #22C55E; font-size: 14px; width: 16px; }

.sf-social-links { display: flex; gap: 10px; }
.sf-social-btn {
    width: 40px; height: 40px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; color: white; transition: all 0.3s;
    border: 1px solid rgba(255,255,255,0.15);
}
.sf-social-btn:hover { transform: translateY(-3px); }
.sf-social-btn.facebook { background: rgba(24,119,242,0.2); }
.sf-social-btn.facebook:hover { background: #1877f2; border-color: #1877f2; }
.sf-social-btn.whatsapp { background: rgba(37,211,102,0.2); }
.sf-social-btn.whatsapp:hover { background: #25d366; border-color: #25d366; }
.sf-social-btn.youtube { background: rgba(255,0,0,0.2); }
.sf-social-btn.youtube:hover { background: #ff0000; border-color: #ff0000; }
.sf-social-btn.linkedin { background: rgba(10,102,194,0.2); }
.sf-social-btn.linkedin:hover { background: #0a66c2; border-color: #0a66c2; }

.sf-footer-col h5 {
    color: white; font-size: 16px; font-weight: 700;
    margin-bottom: 20px; display: flex; align-items: center; gap: 8px;
    padding-bottom: 12px; border-bottom: 2px solid rgba(37,99,235,0.4);
    position: relative;
}
.sf-footer-col h5::after {
    content: ''; position: absolute; bottom: -2px; left: 0;
    width: 36px; height: 2px; background: #22C55E;
}
.sf-footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 8px; }
.sf-footer-col ul li a {
    color: rgba(255,255,255,0.55); font-size: 14.5px;
    display: flex; align-items: center; gap: 7px;
    transition: all 0.3s; padding: 2px 0;
}
.sf-footer-col ul li a i { font-size: 11px; color: #2563EB; transition: transform 0.3s; }
.sf-footer-col ul li a:hover { color: white; padding-left: 4px; }
.sf-footer-col ul li a:hover i { transform: translateX(3px); color: #22C55E; }

.sf-app-desc { color: rgba(255,255,255,0.55); font-size: 13.5px; margin-bottom: 16px; line-height: 1.6; }
.sf-app-btns { display: flex; flex-direction: column; gap: 10px; margin-bottom: 16px; }
.sf-app-btn {
    display: flex; align-items: center; gap: 12px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 10px; padding: 10px 16px;
    color: white; transition: all 0.3s;
}
.sf-app-btn i { font-size: 22px; }
.sf-app-btn small { font-size: 10px; color: rgba(255,255,255,0.5); display: block; }
.sf-app-btn span { font-size: 14px; font-weight: 700; display: block; }
.sf-app-btn:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.3); color: white; transform: translateX(4px); }

.sf-badges { display: flex; gap: 8px; flex-wrap: wrap; }
.sf-badge {
    display: inline-flex; align-items: center; gap: 5px;
    background: rgba(34,197,94,0.1); color: #4ade80;
    border: 1px solid rgba(34,197,94,0.25);
    padding: 5px 12px; border-radius: 99px; font-size: 12px; font-weight: 600;
}

/* Footer Bottom */
.sf-footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.08);
    padding: 20px 0;
    background: rgba(0,0,0,0.3);
}
.sf-footer-bottom p { color: rgba(255,255,255,0.4); font-size: 13.5px; margin: 0; }
.sf-footer-bottom p span { color: #22C55E; font-weight: 700; }
.sf-footer-bottom a { color: rgba(255,255,255,0.5); font-size: 13px; transition: color 0.3s; }
.sf-footer-bottom a:hover { color: #22C55E; }
.sf-sep { color: rgba(255,255,255,0.2); margin: 0 8px; }

@media (max-width: 991px) {
    .sf-nl-content { margin-bottom: 16px; }
    .sf-nl-form { max-width: 400px; }
}
@media (max-width: 576px) {
    .sf-nl-form { flex-direction: column; }
    .sf-nl-form button { justify-content: center; }
}
</style>

<script>
function handleNewsletterSubmit(e) {
    e.preventDefault();
    const input = e.target.querySelector('input');
    const btn = e.target.querySelector('button');
    btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> সম্পন্ন!';
    btn.style.background = '#22C55E';
    setTimeout(() => {
        btn.innerHTML = '<i class="bi bi-send-fill"></i> সাবস্ক্রাইব';
        btn.style.background = '';
        input.value = '';
    }, 3000);
}

// Fade in footer elements
const ftObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) { e.target.style.animation = 'fadeInUp 0.6s ease-out both'; ftObs.unobserve(e.target); }
    });
}, { threshold: 0.1 });
document.querySelectorAll('.sf-footer-col, .sf-footer-brand').forEach(el => ftObs.observe(el));
</script>
