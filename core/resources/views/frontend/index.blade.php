@extends('frontend.app')

@section('content')

@if(session('success'))
<div class="alert-success-custom">
    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
</div>
@endif

<!-- ===== HERO SECTION ===== -->
<section class="sf-hero">
    <!-- Animated Background Grid -->
    <div class="sf-hero-bg">
        <div class="sf-grid-lines"></div>
        <!-- Floating Service Icons -->
        <div class="sf-float-icon" style="top:15%;left:8%;animation-delay:0s;"><i class="bi bi-wrench-adjustable-circle-fill"></i></div>
        <div class="sf-float-icon" style="top:25%;right:10%;animation-delay:1.2s;"><i class="bi bi-lightning-charge-fill"></i></div>
        <div class="sf-float-icon" style="top:60%;left:5%;animation-delay:2.1s;"><i class="bi bi-droplet-fill"></i></div>
        <div class="sf-float-icon" style="top:70%;right:8%;animation-delay:0.8s;"><i class="bi bi-house-gear-fill"></i></div>
        <div class="sf-float-icon" style="top:40%;left:15%;animation-delay:1.8s;"><i class="bi bi-paint-bucket"></i></div>
        <div class="sf-float-icon" style="top:50%;right:18%;animation-delay:3s;"><i class="bi bi-truck-front-fill"></i></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="sf-hero-badge">
                    <span class="sf-live-dot"></span>
                    <i class="bi bi-geo-alt-fill"></i> বাংলাদেশের সেরা সেবা প্ল্যাটফর্ম
                </div>

                <h1 class="sf-hero-title">
                    আপনার কাছের
                    <span class="sf-highlight-wrap">
                        <span class="sf-highlight" id="heroTyped"></span>
                    </span>
                    খুঁজুন এখনই
                </h1>

                <p class="sf-hero-desc">
                    বিশ্বস্ত প্লাম্বার, ইলেকট্রিশিয়ান, পরিষ্কার-পরিচ্ছন্নতা সেবা,
                    এবং আরও শত শত স্থানীয় সেবা — মাত্র কয়েক সেকেন্ডে বুক করুন।
                </p>

                <!-- Stats Row -->
                <div class="sf-hero-stats">
                    <div class="sf-stat-item">
                        <strong class="sf-stat-num" data-count="5000">0</strong>
                        <span>+ সেবা প্রদানকারী</span>
                    </div>
                    <div class="sf-stat-divider"></div>
                    <div class="sf-stat-item">
                        <strong class="sf-stat-num" data-count="50000">0</strong>
                        <span>+ সন্তুষ্ট গ্রাহক</span>
                    </div>
                    <div class="sf-stat-divider"></div>
                    <div class="sf-stat-item">
                        <strong class="sf-stat-num" data-count="64">0</strong>
                        <span>+ জেলায় সেবা</span>
                    </div>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="col-lg-5 d-none d-lg-block">
                <div class="sf-hero-visual">
                    <div class="sf-visual-card sf-vc-main">
                        <div class="sf-vc-header">
                            <div class="sf-vc-avatar"><i class="bi bi-person-fill"></i></div>
                            <div>
                                <div class="sf-vc-name">রাহুল মিস্ত্রি</div>
                                <div class="sf-vc-role"><i class="bi bi-wrench-adjustable-circle-fill"></i> প্লাম্বিং বিশেষজ্ঞ</div>
                            </div>
                            <div class="sf-vc-badge ms-auto"><i class="bi bi-patch-check-fill"></i> যাচাইকৃত</div>
                        </div>
                        <div class="sf-vc-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span>4.8 (240 রিভিউ)</span>
                        </div>
                        <div class="sf-vc-tags">
                            <span class="sf-vc-tag">পাইপ মেরামত</span>
                            <span class="sf-vc-tag">ট্যাপ ফিটিং</span>
                            <span class="sf-vc-tag">ড্রেনেজ</span>
                        </div>
                        <div class="sf-vc-footer">
                            <span><i class="bi bi-geo-alt-fill"></i> মিরপুর, ঢাকা</span>
                            <button class="sf-vc-book">বুক করুন</button>
                        </div>
                    </div>

                    <div class="sf-visual-card sf-vc-notify">
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <strong>বুকিং নিশ্চিত!</strong>
                            <small>আজ ৩টায় আসছেন</small>
                        </div>
                    </div>

                    <div class="sf-visual-card sf-vc-trust">
                        <i class="bi bi-shield-fill-check"></i>
                        <div>
                            <strong>১০০% বিশ্বস্ত সেবা</strong>
                            <small>সকল সেবাদাতা যাচাইকৃত</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="sf-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none"><path fill="#F8FAFC" d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z"/></svg>
    </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section class="sf-how-section">
    <div class="container">
        <div class="sf-section-head text-center">
            <div class="sf-section-badge"><i class="bi bi-info-circle-fill"></i> কিভাবে কাজ করে</div>
            <h2>৩টি সহজ ধাপে সেবা পান</h2>
            <p>বাড়িতে বসেই আপনার পছন্দের সেবা বুক করুন</p>
        </div>
        <div class="row g-4 justify-content-center mt-2">
            <div class="col-md-4 reveal-up">
                <div class="sf-how-card">
                    <div class="sf-how-num">১</div>
                    <div class="sf-how-icon"><i class="bi bi-search"></i></div>
                    <h4>সেবা খুঁজুন</h4>
                    <p>আপনার প্রয়োজনীয় সেবা সার্চ করুন অথবা ক্যাটাগরি থেকে বেছে নিন</p>
                    <div class="sf-how-arrow"><i class="bi bi-arrow-right-circle-fill"></i></div>
                </div>
            </div>
            <div class="col-md-4 reveal-up" style="transition-delay:0.15s">
                <div class="sf-how-card sf-how-card--accent">
                    <div class="sf-how-num">২</div>
                    <div class="sf-how-icon"><i class="bi bi-person-badge-fill"></i></div>
                    <h4>সেবাদাতা বেছে নিন</h4>
                    <p>রেটিং, রিভিউ ও দাম দেখে আপনার পছন্দের পেশাদার বেছে নিন</p>
                    <div class="sf-how-arrow"><i class="bi bi-arrow-right-circle-fill"></i></div>
                </div>
            </div>
            <div class="col-md-4 reveal-up" style="transition-delay:0.3s">
                <div class="sf-how-card">
                    <div class="sf-how-num">৩</div>
                    <div class="sf-how-icon"><i class="bi bi-calendar2-check-fill"></i></div>
                    <h4>বুকিং নিশ্চিত করুন</h4>
                    <p>সময় ও তারিখ বেছে নিয়ে বুকিং দিন — সেবাদাতা আসবেন নির্ধারিত সময়ে</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICE CATEGORIES ===== -->
<section class="sf-categories" id="products">
    <div class="container">
        <div class="sf-section-head text-center">
            <div class="sf-section-badge"><i class="bi bi-grid-3x3-gap-fill"></i> সেবার ধরন</div>
            <h2>সব ধরনের সেবা এক জায়গায়</h2>
            <p>আপনার যে কোনো প্রয়োজনে আমরা আছি — বাড়ি, অফিস বা যেকোনো স্থানে</p>
        </div>

        <!-- Category Tabs -->
        <div class="sf-cat-tabs">
            <button class="sf-cat-tab active" data-filter="all"><i class="bi bi-grid-fill"></i> সব সেবা</button>
            <button class="sf-cat-tab" data-filter="home"><i class="bi bi-house-fill"></i> বাড়ির সেবা</button>
            <button class="sf-cat-tab" data-filter="tech"><i class="bi bi-cpu-fill"></i> প্রযুক্তি</button>
            <button class="sf-cat-tab" data-filter="beauty"><i class="bi bi-scissors"></i> বিউটি</button>
        </div>

        <div class="sf-cat-grid mt-4">
            @foreach($categories as $index => $category)
            <div class="sf-cat-card reveal-up" style="transition-delay: {{ ($index % 8) * 0.07 }}s">
                <a href="{{ url('category/'.$category->id) }}" class="sf-cat-link">
                    <div class="sf-cat-icon-wrap">
                        <i class="bi {{ ['bi-wrench-adjustable-circle-fill','bi-lightning-charge-fill','bi-droplet-fill','bi-house-gear-fill','bi-paint-bucket','bi-truck-front-fill','bi-scissors','bi-cpu-fill','bi-shield-fill-check','bi-camera-fill','bi-book-fill','bi-music-note-beamed'][$index % 12] }}"></i>
                        <div class="sf-cat-icon-ring"></div>
                    </div>
                    <h5>{{ $category->name }}</h5>
                    <p>{{ $category->description ?? 'পেশাদার সেবা পান' }}</p>
                    <div class="sf-cat-footer">
                        <span class="sf-cat-count"><i class="bi bi-people-fill"></i> সেবাদাতা আছেন</span>
                        <span class="sf-cat-arrow"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== TRUST SECTION ===== -->
<section class="sf-trust-section">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div class="sf-section-badge mb-3"><i class="bi bi-shield-fill-check"></i> কেন ShebaFinder?</div>
                <h2 class="sf-trust-title">বাংলাদেশের সবচেয়ে বিশ্বস্ত সেবা প্ল্যাটফর্ম</h2>
                <p class="sf-trust-desc">আমরা প্রতিটি সেবাদাতার পরিচয়, দক্ষতা এবং অভিজ্ঞতা যাচাই করি — যাতে আপনি নিশ্চিন্তে সেবা নিতে পারেন।</p>

                <div class="sf-trust-list">
                    <div class="sf-trust-item">
                        <div class="sf-trust-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div>
                            <strong>যাচাইকৃত পেশাদার</strong>
                            <p>প্রতিটি সেবাদাতার NID ও দক্ষতা যাচাই করা হয়</p>
                        </div>
                    </div>
                    <div class="sf-trust-item">
                        <div class="sf-trust-icon"><i class="bi bi-cash-coin"></i></div>
                        <div>
                            <strong>ন্যায্য মূল্য গ্যারান্টি</strong>
                            <p>কোনো লুকানো চার্জ নেই — আগেই মূল্য জানুন</p>
                        </div>
                    </div>
                    <div class="sf-trust-item">
                        <div class="sf-trust-icon"><i class="bi bi-headset"></i></div>
                        <div>
                            <strong>২৪/৭ সহায়তা</strong>
                            <p>যেকোনো সমস্যায় আমরা সর্বদা আপনার পাশে</p>
                        </div>
                    </div>
                    <div class="sf-trust-item">
                        <div class="sf-trust-icon"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <strong>রেটিং সিস্টেম</strong>
                            <p>গ্রাহকদের রিভিউ দেখে সেরা সেবাদাতা বেছে নিন</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sf-stats-grid">
                    <div class="sf-stats-card sf-sc-1">
                        <i class="bi bi-people-fill"></i>
                        <div class="sf-sc-num" data-count="5000">0</div>
                        <div class="sf-sc-label">যাচাইকৃত সেবাদাতা</div>
                    </div>
                    <div class="sf-stats-card sf-sc-2">
                        <i class="bi bi-emoji-smile-fill"></i>
                        <div class="sf-sc-num" data-count="50000">0</div>
                        <div class="sf-sc-label">সন্তুষ্ট গ্রাহক</div>
                    </div>
                    <div class="sf-stats-card sf-sc-3">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div class="sf-sc-num" data-count="64">0</div>
                        <div class="sf-sc-label">জেলায় সেবা</div>
                    </div>
                    <div class="sf-stats-card sf-sc-4">
                        <i class="bi bi-star-fill"></i>
                        <div class="sf-sc-num">৪.৯</div>
                        <div class="sf-sc-label">গড় রেটিং</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="sf-cta-section">
    <div class="sf-cta-bg">
        <div class="sf-cta-circle c1"></div>
        <div class="sf-cta-circle c2"></div>
        <div class="sf-cta-circle c3"></div>
    </div>
    <div class="container text-center position-relative">
        <i class="bi bi-megaphone-fill sf-cta-icon"></i>
        <h2 class="sf-cta-title">আজই শুরু করুন ShebaFinder-এ</h2>
        <p class="sf-cta-desc">রেজিস্ট্রেশন করুন এবং হাজারো যাচাইকৃত সেবাদাতার সাথে সংযুক্ত হন</p>
        <div class="sf-cta-btns">
            <a href="{{ url('/register') }}" class="sf-cta-btn-primary">
                <i class="bi bi-person-plus-fill"></i> বিনামূল্যে রেজিস্ট্রেশন
            </a>
            <a href="#products" class="sf-cta-btn-outline">
                <i class="bi bi-grid-3x3-gap-fill"></i> সেবা দেখুন
            </a>
        </div>
    </div>
</section>

@include('frontend.partials.footer')

<style>
/* ===== HERO ===== */
.sf-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
    min-height: 92vh;
    display: flex; align-items: center;
    position: relative; overflow: hidden;
    padding: 100px 0 140px;
}

.sf-hero-bg { position: absolute; inset: 0; pointer-events: none; }
.sf-grid-lines {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
    background-size: 60px 60px;
}

.sf-float-icon {
    position: absolute; font-size: 28px;
    color: rgba(255,255,255,0.08);
    animation: floatUpDown 6s ease-in-out infinite;
}
@keyframes floatUpDown {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-18px) rotate(8deg); }
}

.sf-hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(34,197,94,0.15); color: #4ade80;
    border: 1px solid rgba(34,197,94,0.3);
    padding: 8px 18px; border-radius: 99px;
    font-size: 13px; font-weight: 600;
    margin-bottom: 28px;
    animation: slideInLeft 0.8s ease-out both;
}

.sf-live-dot {
    width: 8px; height: 8px; background: #4ade80;
    border-radius: 50%; display: inline-block;
    animation: liveGlow 1.5s ease-in-out infinite;
    box-shadow: 0 0 6px #4ade80;
}
@keyframes liveGlow { 0%,100%{opacity:1;transform:scale(1);} 50%{opacity:0.4;transform:scale(1.4);} }

.sf-hero-title {
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 800; color: white; line-height: 1.2;
    margin-bottom: 20px;
    animation: slideInLeft 0.9s ease-out 0.1s both;
}

.sf-highlight-wrap { position: relative; display: inline-block; }
.sf-highlight { color: #4ade80; }

.sf-hero-desc {
    font-size: 17px; color: rgba(255,255,255,0.75);
    line-height: 1.8; margin-bottom: 36px; max-width: 540px;
    animation: slideInLeft 0.9s ease-out 0.2s both;
}

/* Hero Search */
.sf-hero-search { animation: slideInLeft 0.9s ease-out 0.3s both; }
.sf-hero-search-box {
    background: white; border-radius: 14px; display: flex;
    align-items: center; overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}
.sf-hs-field {
    display: flex; align-items: center; gap: 10px;
    padding: 0 20px; flex: 1;
}
.sf-hs-field i { color: #94A3B8; font-size: 18px; }
.sf-hs-field input {
    border: none; outline: none; width: 100%;
    padding: 18px 0; font-size: 15px; font-family: inherit;
}
.sf-hs-divider { width: 1px; height: 36px; background: #E2E8F0; flex-shrink: 0; }
.sf-hs-btn {
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    color: white; border: none;
    padding: 18px 32px; font-size: 15px;
    font-weight: 700; cursor: pointer;
    display: flex; align-items: center; gap: 8px;
    transition: all 0.3s; white-space: nowrap;
    font-family: inherit;
}
.sf-hs-btn:hover { background: linear-gradient(135deg, #1d4ed8, #1e40af); }

.sf-hero-tags { margin-top: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
.sf-tag-label { color: rgba(255,255,255,0.6); font-size: 13px; display: flex; align-items: center; gap: 4px; }
.sf-tag-label i { color: #fbbf24; }
.sf-quick-tag {
    background: rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.85);
    padding: 5px 14px; border-radius: 99px;
    font-size: 13px; font-weight: 500;
    border: 1px solid rgba(255,255,255,0.15);
    transition: all 0.3s; cursor: pointer;
}
.sf-quick-tag:hover { background: rgba(34,197,94,0.2); border-color: rgba(34,197,94,0.4); color: #4ade80; }

/* Hero Stats */
.sf-hero-stats {
    display: flex; align-items: center; gap: 24px;
    margin-top: 40px;
    animation: slideInLeft 0.9s ease-out 0.4s both;
}
.sf-stat-item { color: white; }
.sf-stat-num { font-size: 28px; font-weight: 800; display: block; color: white; }
.sf-stat-item span { font-size: 13px; color: rgba(255,255,255,0.6); }
.sf-stat-divider { width: 1px; height: 40px; background: rgba(255,255,255,0.15); }

/* Hero Visual */
.sf-hero-visual {
    position: relative; height: 460px;
    animation: slideInRight 0.9s ease-out 0.3s both;
}
@keyframes slideInRight { from{opacity:0;transform:translateX(40px);} to{opacity:1;transform:translateX(0);} }
@keyframes slideInLeft { from{opacity:0;transform:translateX(-40px);} to{opacity:1;transform:translateX(0);} }

.sf-visual-card {
    background: white; border-radius: 16px;
    padding: 20px; position: absolute;
    box-shadow: 0 20px 60px rgba(0,0,0,0.25);
    animation: cardFloat 4s ease-in-out infinite;
}
@keyframes cardFloat {
    0%,100%{transform:translateY(0);} 50%{transform:translateY(-10px);}
}
.sf-vc-main { width: 300px; top: 40px; right: 0; animation-delay: 0s; }
.sf-vc-notify {
    width: 240px; bottom: 80px; left: 0;
    display: flex; align-items: center; gap: 12px;
    font-size: 14px; animation-delay: 0.5s;
    border-left: 4px solid #22C55E;
}
.sf-vc-notify i { font-size: 28px; color: #22C55E; }
.sf-vc-notify strong { display: block; font-weight: 700; color: #1E293B; }
.sf-vc-notify small { color: #94A3B8; }

.sf-vc-trust {
    width: 220px; bottom: 180px; right: -20px;
    display: flex; align-items: center; gap: 12px;
    font-size: 13px; animation-delay: 1s;
    border-left: 4px solid #2563EB;
}
.sf-vc-trust i { font-size: 26px; color: #2563EB; }
.sf-vc-trust strong { display: block; font-weight: 700; color: #1E293B; font-size: 13px; }
.sf-vc-trust small { color: #94A3B8; }

.sf-vc-header { display: flex; align-items: center; gap: 10px; margin-bottom: 12px; }
.sf-vc-avatar {
    width: 44px; height: 44px; border-radius: 50%;
    background: linear-gradient(135deg, #2563EB, #22C55E);
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 20px; flex-shrink: 0;
}
.sf-vc-name { font-weight: 700; font-size: 15px; color: #1E293B; }
.sf-vc-role { font-size: 12px; color: #64748B; display: flex; align-items: center; gap: 4px; }
.sf-vc-role i { color: #2563EB; }
.sf-vc-badge {
    font-size: 11px; color: #22C55E;
    background: #dcfce7; padding: 3px 8px; border-radius: 6px;
    font-weight: 600; display: flex; align-items: center; gap: 3px;
}
.sf-vc-stars { color: #f59e0b; font-size: 13px; display: flex; align-items: center; gap: 2px; margin-bottom: 12px; }
.sf-vc-stars span { color: #64748B; font-size: 12px; margin-left: 6px; }
.sf-vc-tags { display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 14px; }
.sf-vc-tag { background: #dbeafe; color: #2563EB; font-size: 11px; padding: 3px 10px; border-radius: 6px; font-weight: 600; }
.sf-vc-footer { display: flex; align-items: center; justify-content: space-between; }
.sf-vc-footer span { font-size: 12px; color: #64748B; display: flex; align-items: center; gap: 4px; }
.sf-vc-footer i { color: #22C55E; }
.sf-vc-book {
    background: #2563EB; color: white; border: none;
    padding: 7px 16px; border-radius: 8px; font-size: 13px;
    font-weight: 600; cursor: pointer; transition: all 0.3s;
}
.sf-vc-book:hover { background: #1d4ed8; transform: scale(1.05); }

/* Wave */
.sf-wave { position: absolute; bottom: -1px; left: 0; right: 0; }
.sf-wave svg { display: block; width: 100%; height: 80px; }

/* ===== HOW IT WORKS ===== */
.sf-how-section { padding: 100px 0; background: #F8FAFC; }
.sf-section-head { margin-bottom: 48px; }
.sf-section-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: #dbeafe; color: #2563EB;
    padding: 6px 16px; border-radius: 99px;
    font-size: 13px; font-weight: 700;
    margin-bottom: 14px; text-transform: uppercase; letter-spacing: 0.5px;
}
.sf-section-head h2 { font-size: clamp(28px, 4vw, 40px); font-weight: 800; color: #1E293B; margin-bottom: 12px; }
.sf-section-head p { color: #64748B; font-size: 17px; max-width: 600px; margin: 0 auto; }

.sf-how-card {
    background: white; border-radius: 20px;
    padding: 36px 28px; text-align: center;
    border: 2px solid #E2E8F0;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative; overflow: hidden;
    height: 100%;
}
.sf-how-card::before {
    content: ''; position: absolute;
    top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, #2563EB, #22C55E);
    transform: scaleX(0); transform-origin: left;
    transition: transform 0.4s;
}
.sf-how-card:hover { transform: translateY(-8px); border-color: #bfdbfe; box-shadow: 0 20px 48px rgba(37,99,235,0.12); }
.sf-how-card:hover::before { transform: scaleX(1); }
.sf-how-card--accent { border-color: #bbf7d0; background: linear-gradient(145deg, white, #f0fdf4); }
.sf-how-card--accent .sf-how-icon { background: linear-gradient(135deg, #22C55E, #16a34a); }
.sf-how-num {
    position: absolute; top: 16px; right: 20px;
    font-size: 48px; font-weight: 900; color: #F1F5F9; line-height: 1;
}
.sf-how-icon {
    width: 72px; height: 72px; border-radius: 18px;
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 28px; margin: 0 auto 20px;
    transition: transform 0.3s;
}
.sf-how-card:hover .sf-how-icon { transform: rotate(-8deg) scale(1.1); }
.sf-how-card h4 { font-size: 20px; font-weight: 700; color: #1E293B; margin-bottom: 10px; }
.sf-how-card p { color: #64748B; font-size: 15px; line-height: 1.7; }
.sf-how-arrow {
    font-size: 28px; color: #CBD5E1; margin-top: 20px;
    transition: color 0.3s;
}
.sf-how-card:hover .sf-how-arrow { color: #2563EB; }

/* ===== CATEGORIES ===== */
.sf-categories { padding: 100px 0; background: white; }
.sf-cat-tabs {
    display: flex; gap: 10px; justify-content: center;
    flex-wrap: wrap; margin-top: 40px;
}
.sf-cat-tab {
    padding: 10px 22px; border-radius: 10px; border: 2px solid #E2E8F0;
    background: white; color: #64748B;
    font-size: 14px; font-weight: 600; cursor: pointer;
    display: flex; align-items: center; gap: 6px;
    transition: all 0.3s; font-family: inherit;
}
.sf-cat-tab:hover, .sf-cat-tab.active {
    background: #2563EB; color: white; border-color: #2563EB;
    box-shadow: 0 4px 14px rgba(37,99,235,0.3);
}

.sf-cat-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

.sf-cat-card {
    opacity: 0; transform: translateY(24px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}
.sf-cat-card.visible { opacity: 1; transform: translateY(0); }

.sf-cat-link {
    display: block; background: white;
    border: 2px solid #E2E8F0; border-radius: 16px;
    padding: 28px 20px; text-align: center;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative; overflow: hidden; height: 100%;
}
.sf-cat-link::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(37,99,235,0.03), rgba(34,197,94,0.03));
    opacity: 0; transition: opacity 0.4s;
}
.sf-cat-link:hover { border-color: #2563EB; transform: translateY(-6px); box-shadow: 0 16px 40px rgba(37,99,235,0.12); }
.sf-cat-link:hover::after { opacity: 1; }

.sf-cat-icon-wrap {
    position: relative; width: 68px; height: 68px;
    margin: 0 auto 18px;
}
.sf-cat-icon-wrap i {
    width: 68px; height: 68px; border-radius: 18px;
    background: linear-gradient(135deg, #dbeafe, #bfdbfe);
    display: flex; align-items: center; justify-content: center;
    color: #2563EB; font-size: 26px;
    transition: all 0.4s; position: relative; z-index: 1;
}
.sf-cat-icon-ring {
    position: absolute; inset: -4px; border-radius: 22px;
    border: 2px solid #bfdbfe; opacity: 0;
    transition: opacity 0.3s, transform 0.3s;
    transform: scale(0.8);
}
.sf-cat-link:hover .sf-cat-icon-wrap i {
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    color: white; transform: rotate(-8deg) scale(1.08);
    box-shadow: 0 8px 24px rgba(37,99,235,0.35);
}
.sf-cat-link:hover .sf-cat-icon-ring { opacity: 1; transform: scale(1); }

.sf-cat-link h5 { font-size: 16px; font-weight: 700; color: #1E293B; margin-bottom: 6px; transition: color 0.3s; }
.sf-cat-link:hover h5 { color: #2563EB; }
.sf-cat-link p { font-size: 13px; color: #94A3B8; line-height: 1.5; margin-bottom: 16px; }
.sf-cat-footer {
    display: flex; align-items: center; justify-content: space-between;
    padding-top: 12px; border-top: 1px solid #F1F5F9;
}
.sf-cat-count { font-size: 12px; color: #64748B; display: flex; align-items: center; gap: 4px; }
.sf-cat-count i { color: #22C55E; }
.sf-cat-arrow { font-size: 20px; color: #CBD5E1; transition: all 0.3s; }
.sf-cat-link:hover .sf-cat-arrow { color: #2563EB; transform: translateX(4px); }

/* ===== TRUST SECTION ===== */
.sf-trust-section { padding: 100px 0; background: #F8FAFC; }
.sf-trust-title { font-size: clamp(26px, 3.5vw, 38px); font-weight: 800; color: #1E293B; margin-bottom: 16px; line-height: 1.3; }
.sf-trust-desc { color: #64748B; font-size: 16px; line-height: 1.8; margin-bottom: 36px; }
.sf-trust-list { display: flex; flex-direction: column; gap: 20px; }
.sf-trust-item { display: flex; align-items: flex-start; gap: 16px; }
.sf-trust-icon {
    width: 48px; height: 48px; border-radius: 12px; flex-shrink: 0;
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 20px;
    box-shadow: 0 4px 14px rgba(37,99,235,0.3);
    transition: transform 0.3s;
}
.sf-trust-item:hover .sf-trust-icon { transform: rotate(-8deg) scale(1.1); }
.sf-trust-item strong { font-size: 16px; font-weight: 700; color: #1E293B; display: block; margin-bottom: 4px; }
.sf-trust-item p { font-size: 14px; color: #64748B; margin: 0; line-height: 1.6; }

.sf-stats-grid {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;
}
.sf-stats-card {
    border-radius: 20px; padding: 36px 24px; text-align: center;
    position: relative; overflow: hidden;
    transition: transform 0.3s;
}
.sf-stats-card:hover { transform: translateY(-6px); }
.sf-stats-card i { font-size: 32px; display: block; margin-bottom: 12px; }
.sf-sc-num { font-size: 42px; font-weight: 900; line-height: 1; margin-bottom: 6px; }
.sf-sc-label { font-size: 14px; font-weight: 600; }

.sf-sc-1 { background: linear-gradient(135deg, #2563EB, #1d4ed8); color: white; }
.sf-sc-1 i { color: rgba(255,255,255,0.85); }
.sf-sc-2 { background: linear-gradient(135deg, #22C55E, #16a34a); color: white; }
.sf-sc-2 i { color: rgba(255,255,255,0.85); }
.sf-sc-3 { background: white; border: 2px solid #E2E8F0; color: #1E293B; }
.sf-sc-3 i { color: #2563EB; }
.sf-sc-4 { background: #1E293B; color: white; }
.sf-sc-4 i { color: #fbbf24; }

/* ===== CTA ===== */
.sf-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1e3a8a, #1e40af);
    position: relative; overflow: hidden;
}
.sf-cta-bg { position: absolute; inset: 0; pointer-events: none; }
.sf-cta-circle {
    position: absolute; border-radius: 50%;
    background: rgba(255,255,255,0.05);
    animation: ctaFloat 8s ease-in-out infinite;
}
.c1 { width: 300px; height: 300px; top: -100px; left: -80px; }
.c2 { width: 200px; height: 200px; bottom: -60px; right: 15%; animation-delay: 2s; }
.c3 { width: 150px; height: 150px; top: 30%; right: -40px; animation-delay: 4s; }
@keyframes ctaFloat { 0%,100%{transform:scale(1);} 50%{transform:scale(1.1);} }

.sf-cta-icon { font-size: 52px; color: rgba(255,255,255,0.3); display: block; margin-bottom: 20px; animation: iconBounce 2s ease-in-out infinite; }
@keyframes iconBounce { 0%,100%{transform:translateY(0) rotate(0deg);} 50%{transform:translateY(-12px) rotate(-5deg);} }
.sf-cta-title { font-size: clamp(28px, 4vw, 44px); font-weight: 800; color: white; margin-bottom: 16px; }
.sf-cta-desc { color: rgba(255,255,255,0.75); font-size: 17px; max-width: 520px; margin: 0 auto 40px; line-height: 1.7; }
.sf-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.sf-cta-btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #22C55E; color: white;
    padding: 16px 36px; border-radius: 12px; font-weight: 700; font-size: 16px;
    transition: all 0.3s;
    box-shadow: 0 8px 24px rgba(34,197,94,0.4);
}
.sf-cta-btn-primary:hover { background: #16a34a; transform: translateY(-3px); box-shadow: 0 16px 40px rgba(34,197,94,0.5); color: white; }
.sf-cta-btn-outline {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,0.1); color: white;
    padding: 16px 36px; border-radius: 12px; font-weight: 700; font-size: 16px;
    border: 2px solid rgba(255,255,255,0.3);
    transition: all 0.3s;
}
.sf-cta-btn-outline:hover { background: rgba(255,255,255,0.2); color: white; transform: translateY(-3px); }

/* ===== REVEAL ANIMATION ===== */
.reveal-up {
    opacity: 0; transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal-up.visible { opacity: 1; transform: translateY(0); }

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .sf-hero { padding: 70px 0 120px; min-height: auto; }
    .sf-hero-search-box { flex-direction: column; }
    .sf-hs-divider { display: none; }
    .sf-hs-btn { width: 100%; justify-content: center; padding: 14px; }
    .sf-hero-stats { gap: 16px; }
    .sf-stat-num { font-size: 22px; }
    .sf-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .sf-sc-num { font-size: 32px; }
    .sf-cat-grid { grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); }
}
</style>

<script>
// ===== Typed Text Animation =====
const words = ['প্লাম্বার', 'ইলেকট্রিশিয়ান', 'পেইন্টার', 'ক্লিনার', 'AC টেকনিশিয়ান'];
let wi = 0, ci = 0, deleting = false;
const typed = document.getElementById('heroTyped');
function typeEffect() {
    const word = words[wi];
    if (!deleting) {
        typed.textContent = word.slice(0, ++ci);
        if (ci === word.length) { deleting = true; setTimeout(typeEffect, 1800); return; }
    } else {
        typed.textContent = word.slice(0, --ci);
        if (ci === 0) { deleting = false; wi = (wi + 1) % words.length; }
    }
    setTimeout(typeEffect, deleting ? 60 : 100);
}
typeEffect();

// ===== Scroll Reveal =====
const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); }
    });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal-up, .sf-cat-card').forEach(el => revealObs.observe(el));

// ===== Counter Animation =====
const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            const el = e.target;
            const target = parseInt(el.dataset.count);
            const dur = 2000, step = target / (dur / 16);
            let cur = 0;
            const t = setInterval(() => {
                cur += step;
                if (cur >= target) { cur = target; clearInterval(t); }
                el.textContent = Math.floor(cur).toLocaleString('bn-BD');
            }, 16);
            counterObs.unobserve(el);
        }
    });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(el => counterObs.observe(el));

// ===== Category Filter Tabs =====
document.querySelectorAll('.sf-cat-tab').forEach(tab => {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.sf-cat-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

@endsection
