<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Guru — Smart Center Indonesia</title>
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

/* Layout */
.page{display:grid;grid-template-columns:1fr 1fr;min-height:100vh}

/* LEFT PANEL */
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

/* Feature list */
.feature-list{display:flex;flex-direction:column;gap:16px;margin-bottom:48px}
.feat{display:flex;align-items:center;gap:14px}
.feat-ico{width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.feat-text b{font-size:14px;font-weight:700;color:#fff;display:block}
.feat-text span{font-size:12.5px;color:rgba(255,255,255,.45);font-weight:500}

/* Tutor card */
.tutor-showcase{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:20px;padding:20px 22px;display:flex;align-items:center;gap:16px;position:relative;z-index:1}
.tutor-showcase-av{width:56px;height:56px;border-radius:50%;object-fit:cover;border:2px solid rgba(255,255,255,.2);flex-shrink:0}
.tutor-showcase-info .name{font-size:15px;font-weight:800;color:#fff;margin-bottom:3px}
.tutor-showcase-info .subj{font-size:12.5px;color:var(--violet3);font-weight:600;margin-bottom:6px}
.tutor-showcase-info .stats{display:flex;gap:14px}
.tutor-showcase-info .stat{font-size:12px;color:rgba(255,255,255,.5);font-weight:600;display:flex;align-items:center;gap:4px}
.tutor-showcase-info .stat span{color:var(--gold2)}
.live-indicator{position:absolute;top:14px;right:16px;display:flex;align-items:center;gap:6px;font-size:11px;color:var(--emerald2);font-weight:700}
.live-dot{width:6px;height:6px;background:var(--emerald2);border-radius:50%;animation:blink 1.5s infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}

/* RIGHT PANEL */
.right{background:var(--white);display:flex;align-items:center;justify-content:center;padding:clamp(32px,5vw,64px)}
.form-wrap{width:100%;max-width:420px}

.form-top{margin-bottom:40px}
.form-top .greeting{font-size:13px;font-weight:700;color:var(--violet);letter-spacing:.08em;text-transform:uppercase;margin-bottom:10px}
.form-top h2{font-family:'Playfair Display',serif;font-size:clamp(28px,3.5vw,36px);color:var(--ink);line-height:1.1;margin-bottom:10px}
.form-top p{font-size:14.5px;color:var(--muted);line-height:1.7}

/* Tabs */
.login-tabs{display:flex;background:var(--cream);border-radius:12px;padding:4px;margin-bottom:32px;gap:4px}
.login-tab{flex:1;padding:11px 8px;border-radius:9px;border:none;font-family:'Plus Jakarta Sans',sans-serif;font-size:13.5px;font-weight:700;color:var(--muted);background:none;cursor:pointer;transition:all var(--trans)}
.login-tab.active{background:var(--white);color:var(--violet);box-shadow:0 2px 12px rgba(0,0,0,.08)}

/* Form */
.f-group{margin-bottom:20px}
.f-label{font-size:12px;font-weight:800;color:var(--muted);letter-spacing:.07em;text-transform:uppercase;margin-bottom:7px;display:block}
.f-input-wrap{position:relative}
.f-input-wrap .ico{position:absolute;left:16px;top:50%;transform:translateY(-50%);font-size:16px;pointer-events:none;z-index:1}
.f-input{width:100%;padding:14px 16px 14px 46px;border-radius:12px;border:1.5px solid var(--border);background:var(--cream);font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;color:var(--ink);outline:none;transition:all var(--trans)}
.f-input:focus{border-color:var(--violet2);background:var(--white);box-shadow:0 0 0 4px rgba(139,92,246,.1)}
.f-input::placeholder{color:#94A3B8}
.f-input-wrap .eye{position:absolute;right:16px;top:50%;transform:translateY(-50%);cursor:pointer;font-size:16px;color:var(--muted);border:none;background:none;padding:4px;transition:color var(--trans)}
.f-input-wrap .eye:hover{color:var(--violet)}

/* NIP hint */
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

.btn-wa{
  width:100%;background:#fff;color:var(--ink);padding:14px;border-radius:12px;
  border:1.5px solid var(--border);font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;
  font-weight:700;cursor:pointer;transition:all var(--trans);
  display:flex;align-items:center;justify-content:center;gap:9px;
}
.btn-wa:hover{border-color:#1DA851;color:#1DA851;background:rgba(29,168,81,.04)}
.btn-wa .wa-ico{width:20px;height:20px}

.register-link{text-align:center;margin-top:28px;font-size:14px;color:var(--muted)}
.register-link a{font-weight:700;color:var(--violet);transition:color var(--trans)}
.register-link a:hover{color:var(--indigo)}

/* Back to main */
.back-link{display:inline-flex;align-items:center;gap:7px;font-size:13px;font-weight:700;color:rgba(255,255,255,.5);transition:color var(--trans);position:relative;z-index:1}
.back-link:hover{color:#fff}

/* Toast */
#toast{position:fixed;top:24px;right:24px;z-index:9999;background:var(--white);border-radius:14px;box-shadow:0 8px 40px rgba(0,0,0,.15);padding:16px 20px;display:flex;align-items:center;gap:13px;max-width:340px;border-left:4px solid var(--violet);opacity:0;transform:translateX(120%);transition:all .4s cubic-bezier(.34,1.56,.64,1)}
#toast.show{opacity:1;transform:translateX(0)}
.toast-ico{font-size:24px;flex-shrink:0}
.toast-text p{font-size:14px;font-weight:800;color:var(--ink)}
.toast-text span{font-size:12.5px;color:var(--muted)}

/* Password strength */
.pw-strength{margin-top:8px;display:none}
.pw-bars{display:flex;gap:4px;margin-bottom:4px}
.pw-bar{height:3px;flex:1;border-radius:99px;background:var(--border);transition:background .3s}
.pw-label{font-size:11px;font-weight:700;color:var(--muted)}

/* Mobile */
@media(max-width:768px){
  .page{grid-template-columns:1fr}
  .left{display:none}
  .right{padding:40px 24px}
}
@media(max-width:400px){
  .right{padding:28px 18px}
}

/* Smooth appearance */
.form-wrap{animation:fadeUp .6s cubic-bezier(.4,0,.2,1) both}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
</style>
</head>
<body>

<div id="toast">
  <div class="toast-ico">🎉</div>
  <div class="toast-text"><p>Login Berhasil!</p><span>Selamat datang kembali di portal guru SCI.</span></div>
</div>

<div class="page">
  <!-- LEFT -->
  <div class="left">
    <div class="left-content">
      <a href="index.html" class="logo">
        <div class="logo-mark">SCI</div>
        <div class="logo-text"><b>Smart Center Indonesia</b><span>Portal Guru</span></div>
      </a>
      <div class="left-badge"><span class="badge-dot"></span>Portal Eksklusif Guru SCI</div>
      <h1>Selamat Datang,<br><em>Tutor Terbaik</em> Kami!</h1>
      <p class="left-desc">Akses dashboard guru Anda — kelola jadwal, pantau perkembangan siswa, dan raih bonus menarik dari SCI.</p>
      <div class="feature-list">
        <div class="feat">
          <div class="feat-ico">📅</div>
          <div class="feat-text"><b>Kelola Jadwal Mengajar</b><span>Atur sesi, reschedule, dan notifikasi otomatis</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">📊</div>
          <div class="feat-text"><b>Pantau Progress Siswa</b><span>Laporan nilai, kehadiran, dan evaluasi real-time</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">💰</div>
          <div class="feat-text"><b>Monitoring Penghasilan</b><span>Cek honor, bonus, dan riwayat pembayaran</span></div>
        </div>
        <div class="feat">
          <div class="feat-ico">💬</div>
          <div class="feat-text"><b>Chat dengan Orang Tua</b><span>Komunikasi langsung dan laporan belajar siswa</span></div>
        </div>
      </div>
    </div>
    <div>
      <div class="tutor-showcase">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=120&h=120&q=80&auto=format&fit=crop&crop=face" class="tutor-showcase-av" alt="Tutor">
        <div class="tutor-showcase-info">
          <div class="name">Ms. Anisa Putri, S.Pd</div>
          <div class="subj">Matematika & Fisika</div>
          <div class="stats">
            <div class="stat"><span>★</span> 4.9</div>
            <div class="stat">👨‍🎓 42 Siswa</div>
            <div class="stat">📚 7 Tahun</div>
          </div>
        </div>
        <div class="live-indicator"><div class="live-dot"></div>Aktif</div>
      </div>
      <a href="index.html" class="back-link" style="margin-top:20px;display:inline-flex">← Kembali ke Beranda</a>
    </div>
  </div>

  <!-- RIGHT -->
  <div class="right">
    <div class="form-wrap">
      <div class="form-top">
        <div class="greeting">👨‍🏫 Login Guru</div>
        <h2>Masuk ke Akun<br>Guru Anda</h2>
        <p>Gunakan NIP / email dan password yang telah diberikan oleh admin SCI.</p>
      </div>

      <div class="login-tabs">
        <button class="login-tab active" onclick="switchTab('nip',this)">NIP / ID Guru</button>
        <button class="login-tab" onclick="switchTab('email',this)">Email</button>
      </div>

      <!-- NIP Tab -->
      <div id="tab-nip">
        <div class="f-group">
          <label class="f-label">NIP / ID Guru</label>
          <div class="f-input-wrap">
            <span class="ico">🪪</span>
            <input type="text" class="f-input" id="inp-nip" placeholder="Contoh: SCI-2024-001234" autocomplete="username">
          </div>
          <div class="f-hint">💡 NIP dapat ditemukan di surat kontrak atau email onboarding dari SCI.</div>
        </div>
        <div class="f-group">
          <label class="f-label">Password</label>
          <div class="f-input-wrap">
            <span class="ico">🔒</span>
            <input type="password" class="f-input" id="inp-pw-nip" placeholder="Masukkan password Anda">
            <button class="eye" onclick="togglePw('inp-pw-nip',this)" type="button">👁</button>
          </div>
        </div>
      </div>

      <!-- Email Tab -->
      <div id="tab-email" style="display:none">
        <div class="f-group">
          <label class="f-label">Email</label>
          <div class="f-input-wrap">
            <span class="ico">📧</span>
            <input type="email" class="f-input" id="inp-email-guru" placeholder="guru@smartcenterindonesia.com">
          </div>
        </div>
        <div class="f-group">
          <label class="f-label">Password</label>
          <div class="f-input-wrap">
            <span class="ico">🔒</span>
            <input type="password" class="f-input" id="inp-pw-email" placeholder="Masukkan password Anda">
            <button class="eye" onclick="togglePw('inp-pw-email',this)" type="button">👁</button>
          </div>
        </div>
      </div>

      <div class="f-row-opt">
        <label class="remember"><input type="checkbox" id="remember-me"> Ingat saya</label>
        <a href="#" class="forgot">Lupa password?</a>
      </div>

      <button class="btn-login" onclick="doLogin('guru')">
        <span>👨‍🏫</span> Masuk ke Dashboard Guru
      </button>

      <div class="divider"><span>atau masuk dengan</span></div>

      <button class="btn-wa" onclick="loginWa()">
        <svg class="wa-ico" viewBox="0 0 24 24" fill="#1DA851"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        Verifikasi via WhatsApp OTP
      </button>

      <div class="register-link">
        Ingin bergabung sebagai tutor? <a href="https://wa.me/6281234567890">Daftar di sini →</a>
      </div>

      <div style="margin-top:16px;text-align:center">
        <a href="login-siswa.html" style="font-size:13.5px;color:var(--muted);font-weight:600">Login sebagai <span style="color:var(--violet);font-weight:700">Siswa →</span></a>
      </div>
    </div>
  </div>
</div>

<script>
function switchTab(tab, btn) {
  document.querySelectorAll('.login-tab').forEach(t => t.classList.remove('active'))
  btn.classList.add('active')
  document.getElementById('tab-nip').style.display = tab === 'nip' ? 'block' : 'none'
  document.getElementById('tab-email').style.display = tab === 'email' ? 'block' : 'none'
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
  t.style.borderLeftColor = success ? 'var(--violet)' : 'var(--rose)'
  t.classList.add('show')
  setTimeout(() => t.classList.remove('show'), 4000)
}

function doLogin(type) {
  const activeTab = document.querySelector('.login-tab.active').textContent
  const isNip = activeTab.includes('NIP')
  const val = isNip
    ? document.getElementById('inp-nip').value.trim()
    : document.getElementById('inp-email-guru').value.trim()
  const pw = isNip
    ? document.getElementById('inp-pw-nip').value.trim()
    : document.getElementById('inp-pw-email').value.trim()

  if (!val || !pw) {
    showToast('Lengkapi semua field!', 'NIP/Email dan password wajib diisi.', false)
    return
  }

  const btn = document.querySelector('.btn-login')
  btn.textContent = '⏳ Memverifikasi...'
  btn.disabled = true

  setTimeout(() => {
    btn.innerHTML = '<span>👨‍🏫</span> Masuk ke Dashboard Guru'
    btn.disabled = false
    showToast('Login Berhasil!', 'Selamat datang kembali di portal guru SCI.')
    setTimeout(() => { window.location.href = 'dashboard-guru.html' }, 1800)
  }, 1800)
}

function loginWa() {
  showToast('OTP Dikirim!', 'Cek WhatsApp Anda untuk kode verifikasi.')
}

// Keyboard enter
document.addEventListener('keydown', e => { if (e.key === 'Enter') doLogin('guru') })
</script>
</body>
</html>