<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
  font-family:'Segoe UI',sans-serif;
  background:#f0f7ff;
  min-height:100vh;
  overflow-x:hidden;
  overflow-y:auto;
}

.sf-page{
  position:relative;
  min-height:100vh;
  padding:2rem 1rem 3rem;
  overflow:hidden;
}

/* Floating Service Snippets */
.floating-service{
  position:fixed;
  background:#fff;
  border:1px solid #bfdbfe;
  border-radius:12px;
  padding:8px 14px;
  font-size:12px;
  color:#1d4ed8;
  font-weight:500;
  white-space:nowrap;
  animation:floatAnim linear infinite;
  opacity:0.75;
  display:flex;
  align-items:center;
  gap:6px;
  pointer-events:none;
  box-shadow:0 2px 8px rgba(37,99,235,0.08);
  z-index:0;
}
.floating-service i{color:#22c55e;font-size:13px}

@keyframes floatAnim{
  0%  {transform:translateY(0px)   translateX(0px)  rotate(-2deg)}
  25% {transform:translateY(-18px) translateX(8px)  rotate(1deg)}
  50% {transform:translateY(-8px)  translateX(-5px) rotate(-1deg)}
  75% {transform:translateY(-22px) translateX(4px)  rotate(2deg)}
  100%{transform:translateY(0px)   translateX(0px)  rotate(-2deg)}
}

.fs1{top:6%;  left:2%;  animation-duration:7s}
.fs2{top:12%; right:2%; animation-duration:9s;   animation-delay:-2s}
.fs3{top:38%; left:1%;  animation-duration:8s;   animation-delay:-4s}
.fs4{top:55%; right:2%; animation-duration:10s;  animation-delay:-1s}
.fs5{top:72%; left:3%;  animation-duration:6.5s; animation-delay:-3s}
.fs6{top:82%; right:3%; animation-duration:8.5s; animation-delay:-5s}

/* Wrapper */
.sf-wrapper{
  max-width:480px;
  margin:0 auto;
  position:relative;
  z-index:10;
}

/* Card */
.sf-card{
  background:#fff;
  border-radius:20px;
  border:1px solid #bfdbfe;
  overflow:hidden;
  box-shadow:0 8px 32px rgba(37,99,235,0.10);
}

/* Header */
.sf-header{
  background:#2563EB;
  padding:2rem 2rem 1.5rem;
  text-align:center;
  position:relative;
  overflow:hidden;
}
.sf-header::before{
  content:'';
  position:absolute;
  top:-30px;right:-30px;
  width:120px;height:120px;
  border-radius:50%;
  background:rgba(255,255,255,0.07);
}
.sf-header::after{
  content:'';
  position:absolute;
  bottom:-20px;left:-20px;
  width:80px;height:80px;
  border-radius:50%;
  background:rgba(34,197,94,0.15);
}

.sf-edition{
  display:flex;
  align-items:center;
  justify-content:space-between;
  background:rgba(255,255,255,0.12);
  border-radius:8px;
  padding:6px 12px;
  margin-bottom:1rem;
  font-size:11px;
  color:rgba(255,255,255,0.85);
  position:relative;
  z-index:1;
}
.sf-edition i{color:#22c55e}

.sf-logo-wrap{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  margin-bottom:0.75rem;
  position:relative;
  z-index:1;
}
.sf-logo-icon{
  width:48px;height:48px;
  background:#fff;
  border-radius:14px;
  display:flex;
  align-items:center;
  justify-content:center;
  box-shadow:0 2px 10px rgba(0,0,0,0.12);
}
.sf-logo-icon i{font-size:24px;color:#2563EB}
.sf-brand{font-size:22px;font-weight:700;color:#fff;letter-spacing:-0.5px}
.sf-brand span{color:#22c55e}

.sf-separator{
  display:flex;
  align-items:center;
  gap:8px;
  margin-bottom:1rem;
  position:relative;
  z-index:1;
}
.sf-sep-line{flex:1;height:1px;background:rgba(255,255,255,0.25)}
.sf-sep-icons{display:flex;gap:6px;color:rgba(255,255,255,0.6);font-size:10px}

.service-badges{
  display:flex;
  flex-wrap:wrap;
  gap:6px;
  justify-content:center;
  margin-bottom:1rem;
  position:relative;
  z-index:1;
}
.sb{
  display:flex;
  align-items:center;
  gap:4px;
  background:#eff6ff;
  border:1px solid #bfdbfe;
  border-radius:20px;
  padding:4px 10px;
  font-size:11px;
  color:#1d4ed8;
  font-weight:500;
}
.sb i{color:#22c55e;font-size:11px}

.sf-tagline{font-size:14px;color:rgba(255,255,255,0.9);font-weight:500;position:relative;z-index:1}
.sf-tagline strong{color:#22c55e}

/* Body */
.sf-body{padding:1.75rem}

.sf-section-title{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:8px;
  font-size:13px;
  font-weight:600;
  color:#2563EB;
  letter-spacing:0.5px;
  text-transform:uppercase;
  margin-bottom:1.25rem;
}
.sf-section-title i{color:#22c55e;font-size:14px}

.sf-field{margin-bottom:1rem}

.sf-label{
  display:flex;
  align-items:center;
  gap:6px;
  font-size:13px;
  font-weight:500;
  color:#374151;
  margin-bottom:6px;
}
.sf-label i{color:#2563EB;font-size:13px}

.sf-input-wrap{position:relative}

.sf-input-icon{
  position:absolute;
  left:12px;top:50%;
  transform:translateY(-50%);
  color:#2563EB;
  font-size:14px;
  pointer-events:none;
}
.sf-input{
  width:100%;
  padding:10px 40px 10px 38px;
  border:1.5px solid #bfdbfe;
  border-radius:10px;
  font-size:14px;
  color:#111827;
  background:#f8faff;
  outline:none;
  transition:border-color 0.2s,background 0.2s;
}
.sf-input:focus{
  border-color:#2563EB;
  background:#fff;
  box-shadow:0 0 0 3px rgba(37,99,235,0.10);
}
.sf-input::placeholder{color:#9ca3af}

.sf-toggle{
  position:absolute;
  right:10px;top:50%;
  transform:translateY(-50%);
  background:none;
  border:none;
  cursor:pointer;
  color:#6b7280;
  padding:4px;
  font-size:14px;
  display:flex;
  align-items:center;
}
.sf-toggle:hover{color:#2563EB}

.sf-divider{
  display:flex;
  align-items:center;
  gap:10px;
  margin:1.25rem 0;
}
.sf-div-line{flex:1;height:1px;background:#e5e7eb}
.sf-div-text{
  font-size:12px;
  color:#9ca3af;
  display:flex;
  align-items:center;
  gap:5px;
  white-space:nowrap;
}
.sf-div-text i{color:#22c55e;font-size:11px}

.sf-btn{
  width:100%;
  padding:12px;
  background:#2563EB;
  color:#fff;
  border:none;
  border-radius:12px;
  font-size:15px;
  font-weight:600;
  cursor:pointer;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:8px;
  transition:background 0.2s,transform 0.1s;
}
.sf-btn:hover{background:#1d4ed8}
.sf-btn:active{transform:scale(0.98)}
.sf-btn i{font-size:16px}

.sf-link-wrap{text-align:center;margin-top:1rem}
.sf-link{
  color:#2563EB;
  text-decoration:none;
  font-size:13px;
  display:inline-flex;
  align-items:center;
  gap:5px;
  font-weight:500;
}
.sf-link:hover{color:#1d4ed8;text-decoration:underline}

/* Footer */
.sf-footer{
  background:#f0f7ff;
  border-top:1px solid #bfdbfe;
  padding:12px 1.75rem;
  text-align:center;
  font-size:12px;
  color:#6b7280;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:6px;
}
.sf-footer i{color:#22c55e;font-size:11px}
.sf-footer strong{color:#2563EB}

/* Pulse dot */
.pulse-dot{
  width:8px;height:8px;
  background:#22c55e;
  border-radius:50%;
  display:inline-block;
  animation:pulse 2s infinite;
}
@keyframes pulse{
  0%,100%{opacity:1;transform:scale(1)}
  50%    {opacity:0.5;transform:scale(1.4)}
}

/* Invalid feedback */
.invalid-feedback{display:block;font-size:12px;color:#dc2626;margin-top:4px}
.is-invalid{border-color:#dc2626 !important}
</style>


<div class="sf-page">

  <div class="floating-service fs1"><i class="bi bi-wrench-adjustable"></i> Plumbing Services</div>
  <div class="floating-service fs2"><i class="bi bi-lightning-charge"></i> Electrician</div>
  <div class="floating-service fs3"><i class="bi bi-house-gear"></i> AC Repair</div>
  <div class="floating-service fs4"><i class="bi bi-car-front"></i> Car Service</div>
  <div class="floating-service fs5"><i class="bi bi-scissors"></i> Beauty & Salon</div>
  <div class="floating-service fs6"><i class="bi bi-building-check"></i> Cleaning Pro</div>

  <div class="sf-wrapper">
    <div class="sf-card">

      <div class="sf-header">
        <div class="sf-edition">
          <span><i class="bi bi-geo-alt-fill"></i> Bangladesh</span>
          <span style="display:flex;align-items:center;gap:5px">
            <span class="pulse-dot"></span> Live Services
          </span>
          <span>Est. 2025</span>
        </div>
        <div class="sf-logo-wrap">
          <div class="sf-logo-icon"><i class="bi bi-tools"></i></div>
          <div class="sf-brand">Sheba<span>Finder</span></div>
        </div>
        <div class="sf-separator">
          <div class="sf-sep-line"></div>
          <div class="sf-sep-icons">
            <i class="bi bi-diamond-fill"></i>
            <i class="bi bi-hexagon-fill"></i>
            <i class="bi bi-diamond-fill"></i>
          </div>
          <div class="sf-sep-line"></div>
        </div>
        <div class="service-badges">
          <span class="sb"><i class="bi bi-patch-check-fill"></i> Verified Pros</span>
          <span class="sb"><i class="bi bi-shield-check"></i> Trusted</span>
          <span class="sb"><i class="bi bi-clock-history"></i> On-Time</span>
        </div>
        <div class="sf-tagline"><strong>Create Your Account</strong> — Find Local Services</div>
      </div>

      <div class="sf-body">
        <div class="sf-section-title">
          <i class="bi bi-person-lines-fill"></i>
          Reader Registration
          <i class="bi bi-person-lines-fill"></i>
        </div>

        {{-- ✅ FIXED: আসল route + @csrf যুক্ত করা হয়েছে --}}
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
          @csrf

          <!-- NAME -->
          <div class="sf-field">
            <label for="name" class="sf-label">
              <i class="bi bi-person"></i> Full Name
            </label>
            <div class="sf-input-wrap">
              <i class="bi bi-person-fill sf-input-icon"></i>
              <input
                id="name"
                type="text"
                class="sf-input @error('name') is-invalid @enderror"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter your full name"
                required
                autofocus
                autocomplete="name"
              >
            </div>
            @error('name')
              <span class="sf-error"><i class="bi bi-exclamation-circle"></i> {{ $message }}</span>
            @enderror
          </div>

          <!-- EMAIL -->
          <div class="sf-field">
            <label for="email" class="sf-label">
              <i class="bi bi-envelope"></i> Email Address
            </label>
            <div class="sf-input-wrap">
              <i class="bi bi-envelope-fill sf-input-icon"></i>
              <input
                id="email"
                type="email"
                class="sf-input @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') }}"
                placeholder="you@shebafinder.com.bd"
                required
                autocomplete="email"
              >
            </div>
            @error('email')
              <span class="sf-error"><i class="bi bi-exclamation-circle"></i> {{ $message }}</span>
            @enderror
          </div>

          <!-- PASSWORD -->
          <div class="sf-field">
            <label for="password" class="sf-label">
              <i class="bi bi-shield-lock"></i> Password
            </label>
            <div class="sf-input-wrap">
              <i class="bi bi-lock-fill sf-input-icon"></i>
              <input
                id="password"
                type="password"
                class="sf-input @error('password') is-invalid @enderror"
                name="password"
                placeholder="••••••••"
                required
                autocomplete="new-password"
              >
              <button type="button" class="sf-toggle" onclick="togglePassword('password', this)">
                <i class="bi bi-eye-slash"></i>
              </button>
            </div>
            @error('password')
              <span class="sf-error"><i class="bi bi-exclamation-circle"></i> {{ $message }}</span>
            @enderror
          </div>

          <!-- CONFIRM PASSWORD -->
          <div class="sf-field">
            <label for="password-confirm" class="sf-label">
              <i class="bi bi-shield-check"></i> Confirm Password
            </label>
            <div class="sf-input-wrap">
              <i class="bi bi-lock-fill sf-input-icon"></i>
              <input
                id="password-confirm"
                type="password"
                class="sf-input"
                name="password_confirmation"
                placeholder="••••••••"
                required
                autocomplete="new-password"
              >
              <button type="button" class="sf-toggle" onclick="togglePassword('password-confirm', this)">
                <i class="bi bi-eye-slash"></i>
              </button>
            </div>
          </div>

          <div class="sf-divider">
            <div class="sf-div-line"></div>
            <div class="sf-div-text">
              <i class="bi bi-tools"></i> Find Trusted Services
            </div>
            <div class="sf-div-line"></div>
          </div>

          <button type="submit" class="sf-btn">
            <i class="bi bi-person-plus-fill"></i> Register Now
          </button>

          <div class="sf-link-wrap">
            <a href="{{ route('login') }}" class="sf-link">
              <i class="bi bi-box-arrow-in-right"></i>
              Already have an account? Sign In
            </a>
          </div>

        </form>
      </div>

      <div class="sf-footer">
        <i class="bi bi-geo-alt-fill"></i>
        <strong>ShebaFinder</strong>
        <i class="bi bi-heart-fill"></i>
        Trusted Local Services · Bangladesh
      </div>

    </div>
  </div>
</div>

<script>
function togglePassword(id, btn) {
  var input = document.getElementById(id);
  if (input.type === 'password') {
    input.type = 'text';
    btn.querySelector('i').className = 'bi bi-eye';
  } else {
    input.type = 'password';
    btn.querySelector('i').className = 'bi bi-eye-slash';
  }
}
</script>
