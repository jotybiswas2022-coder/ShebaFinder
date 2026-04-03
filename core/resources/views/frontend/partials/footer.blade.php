@php
use App\Models\Setting;

$settings = Setting::first();
$email = $settings?->email ?? 'hello@storynest.com';
$phone = $settings?->phone ?? '+1 800 STORY 01';
$location = $settings?->location ?? '123 Story Lane, Book City';
@endphp

<!-- ===== STORY WRITING SECTION ===== -->
<section id="storySection" class="story-section">

    <!-- Background Animations -->
    <div class="story-bg">
        <div class="particle particle-1"></div>
        <div class="particle particle-2"></div>
        <div class="particle particle-3"></div>
        <div class="particle particle-4"></div>
        <div class="particle particle-5"></div>
    </div>

    <div class="story-wrapper">

        <!-- Section Header -->
        <div class="section-header fade-in-up">
            <h2><i class="bi bi-feather"></i> Contact StoryNest</h2>
            <p><span class="glow-dot"></span> Share your ideas, stories, or feedback with us!</p>
        </div>

        <div class="story-grid">

            <!-- Form Card -->
            <div class="story-form-card fade-in-up">
                <div class="ink-splash" id="inkSplash"></div>

                <div class="success-overlay" id="successOverlay">
                    <div class="success-icon"><i class="bi bi-check-lg"></i></div>
                    <h4>Message Sent!</h4>
                    <p>Thanks for reaching out. We'll respond soon!</p>
                </div>

                <form action="{{ route('contact.send') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="form-group">
                        <label><i class="bi bi-person"></i> Name</label>
                        <input type="text" name="name" class="form-input" placeholder="Jane Austen" required>
                    </div>
                    <div class="form-group">
                        <label><i class="bi bi-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                    </div>
                    <div class="form-group">
                        <label><i class="bi bi-chat-quote"></i> Message</label>
                        <textarea name="message" class="form-input" placeholder="Share your story..." required></textarea>
                    </div>
                    <button type="submit" id="submitBtn" class="submit-btn">
                        <i class="bi bi-send"></i> Send
                    </button>
                </form>
            </div>

            <!-- Info Card -->
            <div class="story-info-card fade-in-up">
                <div class="info-box">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <h6>Location</h6>
                        <p>{{ $location }}</p>
                    </div>
                </div>
                <div class="info-box">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                        <h6>Phone</h6>
                        <p>{{ $phone }}</p>
                    </div>
                </div>
                <div class="info-box">
                    <i class="bi bi-envelope-fill"></i>
                    <div>
                        <h6>Email</h6>
                        <p>{{ $email }}</p>
                    </div>
                </div>
                <div class="info-box">
                    <i class="bi bi-clock-fill"></i>
                    <div>
                        <h6>Writing Hours</h6>
                        <p>24/7 — Stories never stop</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== STORY SECTION STYLES ===== -->
<style>
body {
    background-color: #000;
    color: #fff;
    font-family: 'Poppins', sans-serif;
}

/* Section */
.story-section {
    position: relative;
    padding: 80px 20px;
    overflow: hidden;
}

/* Background particles */
.story-bg .particle {
    position: absolute;
    width: 12px;
    height: 12px;
    background-color: #facc15;
    border-radius: 50%;
    opacity: 0.2;
    animation: float 20s linear infinite;
}

.particle-1 { top: 10%; left: 15%; animation-duration: 18s; }
.particle-2 { top: 60%; left: 25%; animation-duration: 22s; }
.particle-3 { top: 35%; left: 70%; animation-duration: 20s; }
.particle-4 { top: 80%; left: 10%; animation-duration: 25s; }
.particle-5 { top: 50%; left: 85%; animation-duration: 19s; }

@keyframes float {
    0% { transform: translateY(0px) translateX(0px); }
    50% { transform: translateY(-40px) translateX(20px); }
    100% { transform: translateY(0px) translateX(0px); }
}

/* Grid */
.story-wrapper {
    max-width: 1200px;
    margin: auto;
}
.story-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap: 2rem;
    margin-top: 50px;
}

/* Form Card */
.story-form-card {
    background-color: rgba(250, 204, 21, 0.05);
    padding: 30px;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
}
.story-form-card .form-group {
    margin-bottom: 20px;
}
.story-form-card .form-input {
    width: 100%;
    padding: 12px 15px;
    border-radius: 6px;
    border: 1px solid #facc15;
    background-color: transparent;
    color: #fff;
}
.story-form-card label { color: #facc15; margin-bottom: 6px; display: block; }
.story-form-card .submit-btn {
    background-color: #facc15;
    color: #000;
    padding: 10px 18px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}
.story-form-card .submit-btn:hover { background-color: #e6b800; }

/* Info Card */
.story-info-card {
    background-color: rgba(255,255,255,0.05);
    padding: 25px;
    border-radius: 12px;
}
.story-info-card .info-box {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    gap: 12px;
}
.story-info-card .info-box i {
    font-size: 1.6rem;
    color: #facc15;
}

/* Fade-in-up animation */
.fade-in-up {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease-out;
}
.fade-in-up.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Ink Splash */
.ink-splash {
    position: absolute;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(250,204,21,0.15) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
    transition: all 0.2s ease;
}

/* Success Overlay */
.success-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.85);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    border-radius: 12px;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
}
.success-overlay.show { opacity: 1; pointer-events: all; }
.success-overlay .success-icon { font-size: 2.2rem; color: #facc15; }

/* Glow Dot */
.glow-dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    background-color: #facc15;
    border-radius: 50%;
    margin-right: 8px;
}

/* Section Header */
.section-header h2 { color: #facc15; font-weight: 600; display: flex; align-items: center; gap: 8px; }
.section-header p { color: rgba(255,255,255,0.7); margin-top: 6px; font-size: 0.9rem; }

/* Responsive */
@media (max-width:768px) {
    .story-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ===== Bootstrap Icons ===== -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- ===== JS for Particles, Form & Fade-in ===== -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Fade-in observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
            if(entry.isIntersecting){
                setTimeout(()=>{entry.target.classList.add('visible')}, idx*150);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));

    // Form Submission
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function(e){
        const btn = document.getElementById('submitBtn');
        btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...';
        setTimeout(()=>{
            btn.innerHTML = '<i class="bi bi-send"></i> Send';
            document.getElementById('successOverlay').classList.add('show');
            form.reset();
            setTimeout(()=>{document.getElementById('successOverlay').classList.remove('show');}, 4000);
        }, 2000);
    });

    // Ink Splash
    const card = document.querySelector('.story-form-card');
    const splash = document.getElementById('inkSplash');
    card.addEventListener('mousemove', (e)=>{
        const rect = card.getBoundingClientRect();
        splash.style.left = (e.clientX - rect.left - 100)+'px';
        splash.style.top = (e.clientY - rect.top - 100)+'px';
    });
});
</script>