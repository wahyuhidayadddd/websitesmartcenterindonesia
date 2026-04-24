<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Siswa — Smart Center Indonesia</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --ink:#08080F;--navy:#0F172A;--blue:#1D4ED8;--indigo:#4338CA;
  --violet:#6D28D9;--violet2:#8B5CF6;--violet3:#C4B5FD;--gold:#D97706;--gold2:#F59E0B;
  --gold3:#FCD34D;--emerald:#059669;--emerald2:#10B981;--rose:#E11D48;--cream:#FAFAF7;
  --warm:#EDE9FE;--border:#E4E1D8;--muted:#64748B;--white:#FFFFFF;
  --trans:.28s cubic-bezier(.4,0,.2,1);
}
html{font-size:16px;height:100%}
body{font-family:'Plus Jakarta Sans',sans-serif;color:var(--ink);background:var(--cream);min-height:100vh;-webkit-font-smoothing:antialiased;display:flex;flex-direction:column}
a{text-decoration:none;color:inherit}

.page{display:grid;grid-template-columns:1fr 1fr;min-height:100vh}

/* LEFT PANEL — identik dengan login guru (violet/navy) */
.left{
  background:linear-gradient(160deg,#0F172A 0%,#1D2B6B 45%,#2D1B69 100%);
  position:relative;overflow:hidden;padding:clamp(40px,6vw,72px);
  display:flex;flex-direction:column;justify-content:space-between;
}
.left::before{content:'';position:absolute;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(109,40,217,.25),transparent 70%);top:-250px;right:-200px;pointer-events:none}
.left::after{content:'';position:absolute;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(29,78,216,.18),transparent 70%);bottom:-150px;left:-100px;pointer-events:none}
.left-content{position:relative;z-index:1}

.logo{display:flex;align-items:center;gap:14px;margin-bottom:64px}
.logo-mark{width:48px;height:48px;border-radius:13px;background:linear-gradient(135deg,#1D4ED8,#6D28D9);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:14px;flex-shrink:0;position:relative;overflow:hidden}
.logo-mark::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,.2),transparent)}
.logo-text b{font-size:16px;font-weight:800;color:#fff;display:block}
.logo-text span{font-size:12px;color:rgba(255,255,255,.5);font-weight:500}

.left-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);border-radius:99px;padding:8px 16px 8px 10px;color:rgba(255,255,255,.75);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;margin-bottom:24px}
.badge-dot{width:8px;height:8px;background:var(--gold2);border-radius:50%;animation:pulse 2.5s infinite;flex-shrink:0}
@keyframes pulse{0%,100%{box-shadow:0 0 0 0 rgba(245,158,11,.6)}70%{box-shadow:0 0 0 8px rgba(245,158,11,0)}}

.left h1{font-family:'Playfair Display',serif;font-size:clamp(36px,4.5vw,54px);color:#fff;line-height:1.08;margin-bottom:20px;letter-spacing:-.02em}
.left h1 em{font-style:italic;color:var(--gold3)}
.left-desc{font-size:16px;color:rgba(255,255,255,.55);line-height:1.8;max-width:400px;margin-bottom:48px}

.feature-list{display:flex;flex-direction:column;gap:16px;margin-bottom:48px}
.feat{display:flex;align-items:center;gap:14px}
.feat-ico{width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.feat-text b{font-size:14px;font-weight:700;color:#fff;display:block}
.feat-text span{font-size:12.5px;color:rgba(255,255,255,.45);font-weight:500}

/* Stats card — gaya sama dengan tutor-showcase di guru */
.stats-showcase{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:20px;padding:20px 22px;display:flex;align-items:center;justify-content:space-around;position:relative;z-index:1}
.stat-item{text-align:center;flex:1}
.stat-item:not(:last-child){border-right:1px solid rgba(255,255,255,.08)}
.stat-item strong{font-family:'Playfair Display',serif;font-size:26px;color:var(--gold3);display:block;line-height:1;margin-bottom:4px}
.stat-item span{font-size:11.5px;color:rgba(255,255,255,.45);font-weight:600;display:block}

.back-link{display:inline-flex;align-items:center;gap:7px;font-size:13px;font-weight:700;color:rgba(255,255,255,.5);transition:color var(--trans);margin-top:20px;position:relative;z-index:1}
.back-link:hover{color:#fff}

/* RIGHT PANEL */
.right{background:var(--white);display:flex;align-items:center;justify-content:center;padding:clamp(32px,5vw,64px)}
.form-wrap{width:100%;max-width:420px}

.form-top{margin-bottom:40px}
.form-top .greeting{font-size:13px;font-weight:700;color:var(--violet);letter-spacing:.08em;text-transform:uppercase;margin-bottom:10px}
.form-top h2{font-family:'Playfair Display',serif;font-size:clamp(28px,3.5vw,36px);color:var(--ink);line-height:1.1;margin-bottom:10px}
.form-top p{font-size:14.5px;color:var(--muted);line-height:1.7}

.login-tabs{display:flex;background:var(--cream);border-radius:12px;padding:4px;margin-bottom:32px;gap:4px}
.login-tab{flex:1;padding:11px 8px;border-radius:9px;border:none;font-family:'Plus Jakarta Sans',sans-serif;font-size:13.5px;font-weight:700;color:var(--muted);background:none;cursor:pointer;transition:all var(--trans)}
.login-tab.active{background:var(--white);color:var(--violet);box-shadow:0 2px 12px rgba(0,0,0,.08)}

.f-group{margin-bottom:20px}
.f-label{font-size:12px;font-weight:800;color:var(--muted);letter-spacing:.07em;text-transform:uppercase;margin-bottom:7px;display:block}
.f-input-wrap{position:relative}
.f-input-wrap .ico{position:absolute;left:16px;top:50%;transform:translateY(-50%);font-size:16px;pointer-events:none;z-index:1}
.f-input{width:100%;padding:14px 16px 14px 46px;border-radius:12px;border:1.5px solid var(--border);background:var(--cream);font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;color:var(--ink);outline:none;transition:all var(--trans)}
.f-input:focus{border-color:var(--violet2);background:var(--white);box-shadow:0 0 0 4px rgba(139,92,246,.1)}
.f-input::placeholder{color:#94A3B8}
.f-input-wrap .eye{position:absolute;right:16px;top:50%;transform:translateY(-50%);cursor:pointer;font-size:16px;color:var(--muted);border:none;background:none;padding:4px;transition:color var(--trans)}
.f-input-wrap .eye:hover{color:var(--violet)}

.f-hint{font-size:11.5px;color:var(--muted);margin-top:6px;padding:8px 12px;background:rgba(109,40,217,.06);border-radius:8px;border-left:3px solid var(--violet2)}

.f-row-opt{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px}
.remember{display:flex;align-items:center;gap:8px;font-size:13.5px;color:var(--muted);cursor:pointer}
.remember input[type=checkbox]{accent-color:var(--violet);width:16px;height:16px;cursor:pointer}
.forgot{font-size:13.5px;font-weight:700;color:var(--violet);transition:color var(--trans)}
.forgot:hover{color:var(--indigo)}

.btn-login{
  width:100%;background:linear-gradient(135deg,var(--indigo),var(--violet));
  color:#fff;padding:16px;border-radius:12px;border:none;
  font-family:'Plus Jakarta Sans',sans-serif;font-size:15px;font-weight:800;
  cursor:pointer;transition:all var(--trans);
  display:flex;align-items:center;justify-content:center;gap:9px;
  box-shadow:0 6px 20px rgba(109,40,217,.35);position:relative;overflow:hidden;
  letter-spacing:.01em;
}
.btn-login::before{content:'';position:absolute;inset:0;background:rgba(255,255,255,.1);transform:translateX(-100%);transition:transform .45s}
.btn-login:hover::before{transform:translateX(100%)}
.btn-login:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(109,40,217,.45)}

.divider{display:flex;align-items:center;gap:14px;margin:28px 0}
.divider::before,.divider::after{content:'';flex:1;height:1px;background:var(--border)}
.divider span{font-size:12px;color:var(--muted);font-weight:600;white-space:nowrap}

.btn-secondary{
  width:100%;background:#fff;color:var(--ink);padding:14px;border-radius:12px;
  border:1.5px solid var(--border);font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;
  font-weight:700;cursor:pointer;transition:all var(--trans);
  display:flex;align-items:center;justify-content:center;gap:9px;
}
.btn-secondary:hover{border-color:var(--violet2);color:var(--violet);background:rgba(109,40,217,.04)}

.register-link{text-align:center;margin-top:28px;font-size:14px;color:var(--muted)}
.register-link a{font-weight:700;color:var(--violet);transition:color var(--trans)}
.register-link a:hover{color:var(--indigo)}

/* New student card — pakai warna violet, bukan gold */
.new-student-card{background:rgba(109,40,217,.05);border:1.5px solid rgba(109,40,217,.15);border-radius:16px;padding:20px;margin-top:24px;text-align:center}
.new-student-card p{font-size:14px;color:var(--muted);margin-bottom:14px;font-weight:500;line-height:1.6}
.btn-register-new{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;padding:13px 28px;border-radius:10px;font-size:14px;font-weight:800;border:none;cursor:pointer;font-family:'Plus Jakarta Sans',sans-serif;transition:all var(--trans);box-shadow:0 4px 14px rgba(109,40,217,.3)}
.btn-register-new:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(109,40,217,.45)}

/* Toast */
#toast{position:fixed;top:24px;right:24px;z-index:9999;background:var(--white);border-radius:14px;box-shadow:0 8px 40px rgba(0,0,0,.15);padding:16px 20px;display:flex;align-items:center;gap:13px;max-width:340px;border-left:4px solid var(--violet);opacity:0;transform:translateX(120%);transition:all .4s cubic-bezier(.34,1.56,.64,1)}
#toast.show{opacity:1;transform:translateX(0)}
.toast-ico{font-size:24px;flex-shrink:0}
.toast-text p{font-size:14px;font-weight:800;color:var(--ink)}
.toast-text span{font-size:12.5px;color:var(--muted)}

@media(max-width:768px){
  .page{grid-template-columns:1fr}
  .left{display:none}
  .right{padding:40px 24px}
}
@media(max-width:400px){
  .right{padding:28px 18px}
}

.form-wrap{animation:fadeUp .6s cubic-bezier(.4,0,.2,1) both}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
</style>
</head>
<body>

<div id="toast">
  <div class="toast-ico">🎉</div>
  <div class="toast-text"><p>Login Berhasil!</p><span>Selamat belajar hari ini!</span></div>
</div>

<div class="page">
  <!-- LEFT -->
  <div class="left">
    <div class="left-content">
      <a href="index.html" class="logo">
        <div class="logo-mark">SCI</div>
        <div class="logo-text"><b>Smart Center Indonesia</b><span>Portal Siswa</span></div>
      </a>
      <div class="left-badge"><span class="badge-dot"></span>Portal Eksklusif Siswa SCI</div>
      <h1>Belajar Lebih<br>Cerdas Bersama<br><em>SCI!</em></h1>
      <p class="left-desc">Login ke dashboard siswa Anda untuk melihat jadwal les, laporan nilai, dan materi belajar eksklusif.</p>
      <div class="feature-list">
        <div class="feat">
          <div class="feat-ico">📅</div>
          <div class="feat-text"><b>Jadwal Les Saya</b><span>Lihat sesi hari ini, besok, dan bulan ini</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">📈</div>
          <div class="feat-text"><b>Laporan Nilai & Progress</b><span>Pantau perkembangan belajar secara real-time</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">📖</div>
          <div class="feat-text"><b>Materi & Modul Eksklusif</b><span>Akses ribuan soal dan rangkuman materi</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">🏆</div>
          <div class="feat-text"><b>Reward & Prestasi</b><span>Kumpulkan poin dan tukarkan hadiah menarik</span></div>
        </div>
      </div>
    </div>
    <div>
      <div class="stats-showcase">
        <div class="stat-item"><strong>15K+</strong><span>Siswa Aktif</span></div>
        <div class="stat-item"><strong>4.9★</strong><span>Rating SCI</span></div>
        <div class="stat-item"><strong>97%</strong><span>Naik Nilai</span></div>
      </div>
      <a href="index.html" class="back-link">← Kembali ke Beranda</a>
    </div>
  </div>

  <!-- RIGHT -->
  <div class="right">
    <div class="form-wrap">
      <div class="form-top">
        <div class="greeting">🎓 Login Siswa</div>
        <h2>Masuk ke Akun<br>Siswa Anda</h2>
        <p>Gunakan ID siswa atau email yang terdaftar di SCI bersama tutormu.</p>
      </div>

      <div class="login-tabs">
        <button class="login-tab active" onclick="switchTab('id',this)">ID Siswa</button>
        <button class="login-tab" onclick="switchTab('email',this)">Email</button>
        <button class="login-tab" onclick="switchTab('wa',this)">WhatsApp</button>
      </div>

      <!-- ID Siswa -->
      <div id="tab-id">
        <div class="f-group">
          <label class="f-label">ID Siswa</label>
          <div class="f-input-wrap">
            <span class="ico">🎓</span>
            <input type="text" class="f-input" id="inp-id" placeholder="Contoh: SCI-S-2024-001" autocomplete="username">
          </div>
          <div class="f-hint">💡 ID Siswa tertera di kartu siswa atau dikirim via WhatsApp saat pendaftaran.</div>
        </div>
        <div class="f-group">
          <label class="f-label">Password</label>
          <div class="f-input-wrap">
            <span class="ico">🔒</span>
            <input type="password" class="f-input" id="inp-pw-id" placeholder="Masukkan password Anda">
            <button class="eye" onclick="togglePw('inp-pw-id',this)" type="button">👁</button>
          </div>
        </div>
      </div>

      <!-- Email -->
      <div id="tab-email" style="display:none">
        <div class="f-group">
          <label class="f-label">Email</label>
          <div class="f-input-wrap">
            <span class="ico">📧</span>
            <input type="email" class="f-input" id="inp-email-s" placeholder="siswa@email.com">
          </div>
        </div>
        <div class="f-group">
          <label class="f-label">Password</label>
          <div class="f-input-wrap">
            <span class="ico">🔒</span>
            <input type="password" class="f-input" id="inp-pw-em" placeholder="Masukkan password Anda">
            <button class="eye" onclick="togglePw('inp-pw-em',this)" type="button">👁</button>
          </div>
        </div>
      </div>

      <!-- WhatsApp OTP -->
      <div id="tab-wa" style="display:none">
        <div class="f-group">
          <label class="f-label">Nomor WhatsApp Terdaftar</label>
          <div class="f-input-wrap">
            <span class="ico">📱</span>
            <input type="tel" class="f-input" id="inp-wa-s" placeholder="08xxxxxxxxxx">
          </div>
          <div class="f-hint">💡 Kode OTP akan dikirim ke nomor WhatsApp yang terdaftar di SCI.</div>
        </div>
        <div class="f-group" id="otp-group" style="display:none">
          <label class="f-label">Kode OTP (6 digit)</label>
          <div class="f-input-wrap">
            <span class="ico">🔢</span>
            <input type="text" class="f-input" id="inp-otp" placeholder="Masukkan kode OTP" maxlength="6">
          </div>
        </div>
      </div>

      <div class="f-row-opt">
        <label class="remember"><input type="checkbox" id="remember-s"> Ingat saya</label>
        <a href="#" class="forgot">Lupa password?</a>
      </div>

      <button class="btn-login" onclick="doLogin()" id="loginBtn">
        <span>🎓</span> Masuk ke Dashboard Siswa
      </button>

      <div class="divider"><span>atau masuk dengan</span></div>

      <button class="btn-secondary" onclick="loginGa()">
        <span style="font-size:18px">🌐</span> Lanjut dengan Google
      </button>

      <div class="new-student-card">
        <p>Belum punya akun siswa SCI? Daftar sekarang dan mulai belajar bersama tutor terbaik!</p>
        <button class="btn-register-new" onclick="daftar()">🚀 Daftar Siswa Baru</button>
      </div>

      <div style="margin-top:16px;text-align:center">
        <a href="login-guru.html" style="font-size:13.5px;color:var(--muted);font-weight:600">Login sebagai <span style="color:var(--violet);font-weight:700">Guru →</span></a>
      </div>
    </div>
  </div>
</div>

<script>
let waOtpSent = false

function switchTab(tab, btn) {
  document.querySelectorAll('.login-tab').forEach(t => t.classList.remove('active'))
  btn.classList.add('active')
  document.getElementById('tab-id').style.display = tab === 'id' ? 'block' : 'none'
  document.getElementById('tab-email').style.display = tab === 'email' ? 'block' : 'none'
  document.getElementById('tab-wa').style.display = tab === 'wa' ? 'block' : 'none'
  const b = document.getElementById('loginBtn')
  if (tab === 'wa') {
    b.innerHTML = !waOtpSent ? '<span>📱</span> Kirim OTP WhatsApp' : '<span>🎓</span> Verifikasi & Masuk'
  } else {
    b.innerHTML = '<span>🎓</span> Masuk ke Dashboard Siswa'
  }
}

function togglePw(id, btn) {
  const inp = document.getElementById(id)
  if (inp.type === 'password') { inp.type = 'text'; btn.textContent = '🙈' }
  else { inp.type = 'password'; btn.textContent = '👁' }
}

function showToast(msg, sub, success = true) {
  const t = document.getElementById('toast')
  t.querySelector('.toast-ico').textContent = success ? '🎉' : '❌'
  t.querySelector('p').textContent = msg
  t.querySelector('span').textContent = sub
  t.style.borderLeftColor = success ? 'var(--violet)' : '#E11D48'
  t.classList.add('show')
  setTimeout(() => t.classList.remove('show'), 4000)
}

function doLogin() {
  const activeTab = document.querySelector('.login-tab.active').textContent
  const isWa = activeTab.includes('WhatsApp')

  if (isWa && !waOtpSent) {
    const wa = document.getElementById('inp-wa-s').value.trim()
    if (!wa) { showToast('Nomor WA kosong!', 'Masukkan nomor WhatsApp terdaftar.', false); return }
    waOtpSent = true
    document.getElementById('otp-group').style.display = 'block'
    const btn = document.getElementById('loginBtn')
    btn.innerHTML = '<span>🎓</span> Verifikasi & Masuk'
    showToast('OTP Terkirim!', 'Cek WhatsApp Anda untuk kode 6 digit.')
    return
  }

  const btn = document.getElementById('loginBtn')
  btn.textContent = '⏳ Memverifikasi...'
  btn.disabled = true
  setTimeout(() => {
    btn.innerHTML = '<span>🎓</span> Masuk ke Dashboard Siswa'
    btn.disabled = false
    showToast('Login Berhasil!', 'Selamat belajar hari ini! 🎉')
    setTimeout(() => { window.location.href = 'dashboard-siswa.html' }, 1800)
  }, 1800)
}

function loginGa() {
  showToast('Google Login', 'Menghubungkan dengan akun Google Anda...')
}

function daftar() {
  window.location.href = 'index.html#faq-kontak'
}

document.addEventListener('keydown', e => { if (e.key === 'Enter') doLogin() })
</script>
</body>
</html>