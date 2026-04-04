@extends('frontend.app')

@section('content')

<section class="sf-contact-hero">
    <div class="container">
        <div class="text-center">
            <div class="sf-section-badge mb-3"><i class="bi bi-envelope-fill"></i> আমাদের সাথে যোগাযোগ</div>
            <h1>আমরা সাহায্য করতে প্রস্তুত</h1>
            <p>যেকোনো প্রশ্ন বা সমস্যায় আমরা সর্বদা আপনার পাশে আছি</p>
        </div>
    </div>
</section>

<section class="sf-contact-section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="sf-contact-info">
                    <div class="sf-ci-card">
                        <div class="sf-ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <h5>ঠিকানা</h5>
                            <p>ঢাকা, বাংলাদেশ</p>
                        </div>
                    </div>
                    <div class="sf-ci-card">
                        <div class="sf-ci-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <h5>ফোন</h5>
                            <p>+880 1700-000000</p>
                        </div>
                    </div>
                    <div class="sf-ci-card">
                        <div class="sf-ci-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <h5>ইমেইল</h5>
                            <p>hello@shebafinder.com.bd</p>
                        </div>
                    </div>
                    <div class="sf-ci-card">
                        <div class="sf-ci-icon sf-green"><i class="bi bi-clock-fill"></i></div>
                        <div>
                            <h5>সার্ভিস সময়</h5>
                            <p>২৪/৭ — সর্বদা উপলব্ধ</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="sf-contact-form-card">
                    <h3><i class="bi bi-chat-dots-fill"></i> বার্তা পাঠান</h3>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label><i class="bi bi-person-fill"></i> আপনার নাম</label>
                                <input type="text" name="name" class="sf-form-input" placeholder="পূর্ণ নাম লিখুন" required>
                            </div>
                            <div class="col-md-6">
                                <label><i class="bi bi-envelope-fill"></i> ইমেইল</label>
                                <input type="email" name="email" class="sf-form-input" placeholder="your@email.com" required>
                            </div>
                            <div class="col-12">
                                <label><i class="bi bi-chat-quote-fill"></i> বার্তা</label>
                                <textarea name="message" class="sf-form-input" placeholder="আপনার বার্তা এখানে লিখুন..." rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="sf-submit-btn">
                                    <i class="bi bi-send-fill"></i> বার্তা পাঠান
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.footer')

<style>
.sf-contact-hero {
    background: linear-gradient(135deg, #1e3a8a, #2563EB);
    padding: 80px 0 60px; text-align: center; color: white;
}
.sf-contact-hero .sf-section-badge { background: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.2); }
.sf-contact-hero h1 { font-size: 40px; font-weight: 800; margin-bottom: 12px; }
.sf-contact-hero p { color: rgba(255,255,255,0.75); font-size: 17px; }

.sf-contact-section { padding: 80px 0; background: #F8FAFC; }

.sf-contact-info { display: flex; flex-direction: column; gap: 16px; }
.sf-ci-card {
    display: flex; align-items: center; gap: 16px;
    background: white; border-radius: 14px; padding: 20px;
    border: 2px solid #E2E8F0;
    transition: all 0.3s; box-shadow: 0 2px 12px rgba(0,0,0,0.04);
}
.sf-ci-card:hover { border-color: #2563EB; transform: translateX(4px); box-shadow: 0 8px 24px rgba(37,99,235,0.12); }
.sf-ci-icon {
    width: 50px; height: 50px; border-radius: 12px; flex-shrink: 0;
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 20px;
}
.sf-ci-icon.sf-green { background: linear-gradient(135deg, #22C55E, #16a34a); }
.sf-ci-card h5 { font-size: 14px; font-weight: 700; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
.sf-ci-card p { font-size: 16px; font-weight: 600; color: #1E293B; margin: 0; }

.sf-contact-form-card {
    background: white; border-radius: 20px; padding: 40px;
    border: 2px solid #E2E8F0;
    box-shadow: 0 4px 24px rgba(0,0,0,0.06);
}
.sf-contact-form-card h3 { font-size: 22px; font-weight: 800; color: #1E293B; margin-bottom: 28px; display: flex; align-items: center; gap: 10px; }
.sf-contact-form-card h3 i { color: #2563EB; }
.sf-contact-form-card label { display: block; font-size: 14px; font-weight: 600; color: #475569; margin-bottom: 8px; display: flex; align-items: center; gap: 6px; }
.sf-contact-form-card label i { color: #2563EB; }
.sf-form-input {
    width: 100%; padding: 13px 16px; border-radius: 10px;
    border: 2px solid #E2E8F0; font-size: 15px;
    font-family: inherit; outline: none; transition: all 0.3s;
    background: #F8FAFC; color: #1E293B;
}
.sf-form-input:focus { border-color: #2563EB; background: white; box-shadow: 0 0 0 4px rgba(37,99,235,0.1); }
textarea.sf-form-input { resize: vertical; min-height: 120px; }
.sf-submit-btn {
    background: linear-gradient(135deg, #2563EB, #1d4ed8);
    color: white; border: none; padding: 14px 36px;
    border-radius: 10px; font-size: 16px; font-weight: 700;
    cursor: pointer; display: inline-flex; align-items: center; gap: 8px;
    transition: all 0.3s; font-family: inherit;
    box-shadow: 0 4px 14px rgba(37,99,235,0.35);
}
.sf-submit-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(37,99,235,0.4); }

.sf-section-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: #dbeafe; color: #2563EB;
    padding: 6px 16px; border-radius: 99px; font-size: 13px; font-weight: 700;
}
</style>

@endsection
