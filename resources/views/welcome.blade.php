<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Center Indonesia — Bimbel & Kursus Terpercaya #1</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --ink:#08080F;--ink2:#141428;--navy:#0F172A;--blue:#1D4ED8;--indigo:#4338CA;
  --violet:#6D28D9;--violet2:#8B5CF6;--violet3:#C4B5FD;--gold:#D97706;--gold2:#F59E0B;
  --gold3:#FCD34D;--emerald:#059669;--emerald2:#10B981;--rose:#E11D48;--cream:#FAFAF7;
  --cream2:#F3F2EC;--warm:#EDE9FE;--border:#E4E1D8;--muted:#64748B;--muted2:#94A3B8;
  --white:#FFFFFF;--r:14px;--r2:20px;--r3:28px;
  --sh:0 2px 24px rgba(8,8,15,.06);--sh2:0 8px 56px rgba(67,56,202,.14);--sh3:0 20px 80px rgba(8,8,15,.18);
  --trans:.28s cubic-bezier(.4,0,.2,1);
}
html{scroll-behavior:smooth;font-size:16px}
body{font-family:'Plus Jakarta Sans',sans-serif;color:var(--ink);background:var(--cream);overflow-x:hidden;-webkit-font-smoothing:antialiased}
img{display:block;max-width:100%}
a{text-decoration:none;color:inherit}
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:var(--cream)}
::-webkit-scrollbar-thumb{background:var(--violet2);border-radius:99px}

/* ═══ RUNNING PROMO BAR ═══ */
.promo-bar{
  background:linear-gradient(90deg,#D97706,#F59E0B,#FCD34D,#F59E0B,#D97706);
  background-size:300% 100%;animation:shimmerPromo 4s linear infinite;
  color:var(--ink);padding:9px 0;overflow:hidden;position:relative;z-index:1003;
}
@keyframes shimmerPromo{0%{background-position:0% 50%}100%{background-position:300% 50%}}
.promo-track{display:flex;gap:0;white-space:nowrap;animation:runningText 28s linear infinite}
.promo-track:hover{animation-play-state:paused}
.promo-item{
  display:inline-flex;align-items:center;gap:10px;padding:0 48px;
  font-size:13px;font-weight:800;letter-spacing:.02em;white-space:nowrap;
}
.promo-item .p-sep{color:var(--ink);opacity:.35;font-size:20px;font-weight:300}
@keyframes runningText{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}

/* ═══ ANNOUNCEMENT BAR ═══ */
.ann-bar{
  background:linear-gradient(90deg,#0F172A 0%,#1D4ED8 50%,#6D28D9 100%);
  color:#fff;text-align:center;padding:12px 20px;
  font-size:13px;font-weight:500;letter-spacing:.02em;
  position:relative;z-index:1002;
  display:flex;align-items:center;justify-content:center;gap:8px;
}
.ann-pill{background:rgba(255,255,255,.15);padding:3px 12px;border-radius:99px;font-weight:700;font-size:12px;letter-spacing:.06em}
.ann-dot{width:7px;height:7px;border-radius:50%;background:var(--gold3);animation:blink 2s infinite;flex-shrink:0}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}

/* ═══ NAV ═══ */
nav{
  position:sticky;top:0;z-index:1000;height:70px;
  display:flex;align-items:center;
  padding:0 clamp(16px,5vw,64px);
  background:rgba(250,250,247,.93);
  backdrop-filter:blur(24px);
  border-bottom:1px solid rgba(228,225,216,.8);
  transition:all var(--trans);
}
nav.scrolled{box-shadow:0 4px 40px rgba(8,8,15,.08);background:rgba(250,250,247,.97)}
.nav-logo{display:flex;align-items:center;gap:12px;flex-shrink:0}
.nav-logo-mark{
  width:42px;height:42px;border-radius:11px;
  background:linear-gradient(135deg,#1D4ED8,#6D28D9);
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-weight:800;font-size:12.5px;letter-spacing:.5px;
  flex-shrink:0;position:relative;overflow:hidden;
}
.nav-logo-mark::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,.2),transparent)}
.nav-logo-text{line-height:1.2}
.nav-logo-text b{font-size:14px;font-weight:800;color:var(--ink);display:block}
.nav-logo-text span{font-size:11.5px;color:var(--violet2);font-weight:600}
.nav-links{display:flex;align-items:center;gap:1px;margin-left:auto;margin-right:12px}
.nav-links a{font-size:13px;font-weight:600;color:var(--muted);padding:7px 11px;border-radius:9px;transition:all var(--trans);white-space:nowrap}
.nav-links a:hover{color:var(--violet);background:var(--warm)}
.nav-auth{display:flex;align-items:center;gap:8px;margin-right:12px;flex-shrink:0}
.nav-auth-btn{
  font-size:12.5px;font-weight:700;padding:8px 16px;border-radius:9px;
  border:1.5px solid var(--border);color:var(--ink);background:var(--white);
  transition:all var(--trans);white-space:nowrap;display:flex;align-items:center;gap:6px;cursor:pointer;
}
.nav-auth-btn:hover{border-color:var(--violet2);color:var(--violet);background:var(--warm)}
.nav-auth-btn.guru{background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;border-color:transparent}
.nav-auth-btn.guru:hover{transform:translateY(-1px);box-shadow:0 4px 16px rgba(109,40,217,.35);color:#fff}
.nav-cta{
  flex-shrink:0;background:linear-gradient(135deg,var(--indigo),var(--violet));
  color:#fff;padding:11px 20px;border-radius:10px;font-weight:700;font-size:13px;
  transition:all var(--trans);white-space:nowrap;position:relative;overflow:hidden;
}
.nav-cta::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,.15),transparent);opacity:0;transition:opacity var(--trans)}
.nav-cta:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(109,40,217,.4)}
.nav-cta:hover::before{opacity:1}
.hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:9px;border-radius:9px;background:none;border:none;margin-left:auto}
.hamburger span{display:block;width:22px;height:2px;background:var(--ink);border-radius:99px;transition:all .3s}
.hamburger.open span:nth-child(1){transform:rotate(45deg) translate(5px,5px)}
.hamburger.open span:nth-child(2){opacity:0}
.hamburger.open span:nth-child(3){transform:rotate(-45deg) translate(5px,-5px)}
.mobile-menu{
  display:none;position:fixed;inset:0;top:0;z-index:999;
  background:var(--cream);padding:88px 28px 40px;
  flex-direction:column;gap:4px;
  transform:translateX(100%);transition:transform .35s cubic-bezier(.4,0,.2,1);
}
.mobile-menu.open{transform:translateX(0)}
.mobile-menu a{font-size:18px;font-weight:700;color:var(--ink);padding:16px 0;border-bottom:1px solid var(--border);display:block}
.mobile-menu .mob-auth{display:flex;gap:10px;margin-top:12px}
.mobile-menu .mob-auth a{border:1.5px solid var(--border);border-radius:12px;padding:13px 16px;font-size:14px;flex:1;text-align:center}
.mobile-menu .mob-auth a.m-guru{background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;border-color:transparent}
.mobile-menu .mob-cta{
  background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;
  text-align:center;border-radius:14px;border:none;padding:18px;margin-top:8px;font-size:16px;
}

/* ═══ HERO SLIDER ═══ */
.hero{position:relative;min-height:100svh;display:flex;align-items:center;overflow:hidden}
.hero-slides{position:absolute;inset:0;z-index:0}
.hero-slide{
  position:absolute;inset:0;opacity:0;transition:opacity 1.2s cubic-bezier(.4,0,.2,1);
}
.hero-slide.active{opacity:1}
.hero-slide img{width:100%;height:100%;object-fit:cover}
.hero-slide-ov{position:absolute;inset:0;background:linear-gradient(135deg,rgba(8,8,15,.92) 0%,rgba(29,78,216,.7) 45%,rgba(109,40,217,.5) 100%)}
.hero-ov2{position:absolute;inset:0;z-index:2;background:linear-gradient(to bottom,transparent 60%,rgba(8,8,15,.6) 100%);pointer-events:none}
.hero-grain{
  position:absolute;inset:0;z-index:3;opacity:.025;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  background-size:200px;animation:grainMove 8s steps(10) infinite;pointer-events:none;
}
@keyframes grainMove{0%{transform:translate(0,0)}10%{transform:translate(-5%,-5%)}20%{transform:translate(-10%,5%)}30%{transform:translate(5%,-10%)}40%{transform:translate(-5%,15%)}50%{transform:translate(-10%,5%)}60%{transform:translate(15%,0%)}70%{transform:translate(0%,10%)}80%{transform:translate(-15%,0)}90%{transform:translate(10%,5%)}100%{transform:translate(5%,0)}}
.hero-inner{
  position:relative;z-index:4;width:100%;
  max-width:1200px;margin:0 auto;
  padding:clamp(80px,12vw,120px) clamp(20px,5vw,64px) clamp(60px,8vw,80px);
  display:grid;grid-template-columns:1.15fr .85fr;gap:48px;align-items:center;
}
.hero-eyebrow{
  display:inline-flex;align-items:center;gap:9px;
  border:1px solid rgba(255,255,255,.2);border-radius:99px;
  padding:8px 16px 8px 10px;margin-bottom:28px;
  background:rgba(255,255,255,.08);backdrop-filter:blur(10px);
  color:#fff;font-size:12.5px;font-weight:700;letter-spacing:.05em;
  text-transform:uppercase;
}
.eyebrow-dot{width:8px;height:8px;background:var(--gold2);border-radius:50%;animation:pulse 2.5s infinite;flex-shrink:0}
@keyframes pulse{0%,100%{box-shadow:0 0 0 0 rgba(245,158,11,.6)}70%{box-shadow:0 0 0 9px rgba(245,158,11,0)}}
.hero h1{
  font-family:'Playfair Display',serif;
  font-size:clamp(48px,6.5vw,82px);color:#fff;
  line-height:1.02;margin-bottom:24px;letter-spacing:-.02em;
}
.hero h1 em{font-style:italic;color:var(--gold3)}
.hero-desc{font-size:clamp(15px,2vw,17.5px);color:rgba(255,255,255,.72);line-height:1.8;margin-bottom:38px;max-width:500px;font-weight:400}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap}
.btn-primary{
  background:linear-gradient(135deg,var(--gold2),var(--gold3));
  color:var(--ink);padding:16px 32px;border-radius:12px;font-weight:800;font-size:15px;
  display:inline-flex;align-items:center;gap:9px;
  transition:all var(--trans);position:relative;overflow:hidden;
}
.btn-primary::before{content:'';position:absolute;inset:0;background:rgba(255,255,255,.2);transform:translateX(-100%);transition:transform .4s}
.btn-primary:hover::before{transform:translateX(100%)}
.btn-primary:hover{transform:translateY(-3px);box-shadow:0 12px 36px rgba(245,158,11,.45)}
.btn-outline{
  background:rgba(255,255,255,.1);color:#fff;border:1.5px solid rgba(255,255,255,.28);
  padding:14px 28px;border-radius:12px;font-weight:700;font-size:15px;
  backdrop-filter:blur(8px);transition:all var(--trans);
  display:inline-flex;align-items:center;gap:9px;
}
.btn-outline:hover{background:rgba(255,255,255,.2);border-color:rgba(255,255,255,.6);transform:translateY(-2px)}
.hero-stats{display:flex;gap:clamp(28px,4vw,52px);margin-top:52px;flex-wrap:wrap;align-items:flex-start}
.h-stat strong{font-family:'Playfair Display',serif;font-size:clamp(32px,4vw,46px);color:#fff;display:block;line-height:1;margin-bottom:5px}
.h-stat span{font-size:12.5px;color:rgba(255,255,255,.6);white-space:nowrap;font-weight:500}
.stat-sep{width:1px;background:rgba(255,255,255,.18);align-self:stretch;margin-top:4px}
/* Hero right panel */
.hero-panel{position:relative}
.hero-panel-card{
  background:rgba(255,255,255,.1);backdrop-filter:blur(24px);
  border:1px solid rgba(255,255,255,.18);border-radius:24px;overflow:hidden;
  box-shadow:0 24px 80px rgba(0,0,0,.3);
}
.hp-img{width:100%;height:310px;object-fit:cover;display:block}
.hp-body{padding:22px 24px}
.hp-badge{display:inline-block;background:var(--gold2);color:var(--ink);font-size:11px;font-weight:800;padding:4px 12px;border-radius:99px;margin-bottom:12px;letter-spacing:.06em}
.hp-body h4{color:#fff;font-weight:800;font-size:16px;margin-bottom:4px}
.hp-body p{color:rgba(255,255,255,.6);font-size:13px}
.hero-chip{
  position:absolute;background:rgba(255,255,255,.97);
  border-radius:16px;padding:13px 17px;
  box-shadow:0 16px 56px rgba(0,0,0,.25);
  display:flex;align-items:center;gap:11px;
  animation:chipFloat 4s ease-in-out infinite;
}
.hero-chip-1{top:-18px;right:-18px}
.hero-chip-2{bottom:24px;left:-22px;animation-delay:.8s}
@keyframes chipFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-9px)}}
.chip-ico{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.chip-t b{font-size:13px;color:var(--ink);font-weight:700;display:block}
.chip-t span{font-size:11.5px;color:var(--muted)}
.chip-stars{font-size:11px;color:var(--gold2);margin-top:2px}
/* Hero slider dots */
.hero-dots{
  position:absolute;bottom:90px;left:50%;transform:translateX(-50%);
  z-index:5;display:flex;gap:9px;
}
.hero-dot{
  width:8px;height:8px;border-radius:99px;background:rgba(255,255,255,.35);
  cursor:pointer;transition:all .4s;border:none;padding:0;
}
.hero-dot.active{width:28px;background:#fff}
/* Hero slider arrows */
.hero-arrow{
  position:absolute;top:50%;transform:translateY(-50%);z-index:5;
  width:48px;height:48px;border-radius:50%;
  background:rgba(255,255,255,.15);border:1.5px solid rgba(255,255,255,.3);
  color:#fff;cursor:pointer;font-size:18px;
  display:flex;align-items:center;justify-content:center;
  backdrop-filter:blur(8px);transition:all var(--trans);
}
.hero-arrow:hover{background:rgba(255,255,255,.3)}
.hero-arrow.prev{left:clamp(12px,3vw,32px)}
.hero-arrow.next{right:clamp(12px,3vw,32px)}
/* Scroll indicator */
.scroll-hint{
  position:absolute;bottom:32px;left:50%;transform:translateX(-50%);
  z-index:4;display:flex;flex-direction:column;align-items:center;gap:6px;
  color:rgba(255,255,255,.5);font-size:11px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;
  animation:fadeInUp 1s 1.5s both;
}
.scroll-arrow{width:24px;height:24px;border-bottom:2px solid rgba(255,255,255,.4);border-right:2px solid rgba(255,255,255,.4);transform:rotate(45deg);animation:bounce 2s infinite}
@keyframes bounce{0%,100%{transform:rotate(45deg) translateY(0)}50%{transform:rotate(45deg) translateY(4px)}}
@keyframes fadeInUp{from{opacity:0;transform:translateX(-50%) translateY(20px)}to{opacity:1;transform:translateX(-50%) translateY(0)}}

/* ═══ SECTIONS ═══ */
.sec{padding:clamp(72px,9vw,112px) clamp(20px,5vw,64px)}
.sec-inner{max-width:1200px;margin:0 auto}
.sec-tag{
  display:inline-flex;align-items:center;gap:7px;
  font-size:11.5px;font-weight:800;color:var(--violet);
  text-transform:uppercase;letter-spacing:.14em;margin-bottom:14px;
}
.sec-tag::before{content:'';width:20px;height:2px;background:currentColor;border-radius:99px}
.sec-h{font-family:'Playfair Display',serif;font-size:clamp(32px,4.5vw,50px);color:var(--ink);line-height:1.08;margin-bottom:16px}
.sec-h em{font-style:italic;color:var(--violet)}
.sec-p{font-size:16px;color:var(--muted);max-width:560px;line-height:1.8;margin-bottom:64px;font-weight:400}
.centered{text-align:center}
.centered .sec-tag{justify-content:center}
.centered .sec-p{margin-left:auto;margin-right:auto}

/* ═══ CARI GURU ═══ */
.cari-guru-sec{
  background:linear-gradient(135deg,#0F172A 0%,#1D2B6B 50%,#2D1B69 100%);
  position:relative;overflow:hidden;padding:clamp(56px,7vw,88px) clamp(20px,5vw,64px);
}
.cari-guru-sec::before{
  content:'';position:absolute;width:700px;height:700px;border-radius:50%;
  background:radial-gradient(circle,rgba(109,40,217,.2),transparent 70%);
  top:-250px;right:-200px;pointer-events:none;
}
.cari-guru-sec::after{
  content:'';position:absolute;width:400px;height:400px;border-radius:50%;
  background:radial-gradient(circle,rgba(29,78,216,.15),transparent 70%);
  bottom:-150px;left:-100px;pointer-events:none;
}
.cg-inner{max-width:1100px;margin:0 auto;position:relative;z-index:1}
.cg-header{text-align:center;margin-bottom:44px}
.cg-tag{
  display:inline-flex;align-items:center;gap:7px;
  font-size:11.5px;font-weight:800;color:var(--violet3);
  text-transform:uppercase;letter-spacing:.14em;margin-bottom:14px;
}
.cg-tag::before{content:'';width:20px;height:2px;background:currentColor;border-radius:99px}
.cg-header h2{font-family:'Playfair Display',serif;font-size:clamp(28px,4vw,46px);color:#fff;margin-bottom:12px;line-height:1.1}
.cg-header h2 em{font-style:italic;color:var(--gold3)}
.cg-header p{font-size:15px;color:rgba(255,255,255,.55);max-width:520px;margin:0 auto;line-height:1.75}
.cg-form{
  background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);
  border-radius:24px;padding:36px;backdrop-filter:blur(20px);
}
.cg-grid{display:grid;grid-template-columns:1fr 1fr 1fr auto;gap:16px;align-items:end}
.cg-field{display:flex;flex-direction:column;gap:8px}
.cg-field label{
  font-size:11px;font-weight:800;color:rgba(255,255,255,.6);
  text-transform:uppercase;letter-spacing:.1em;
  display:flex;align-items:center;gap:6px;
}
.cg-field label span{font-size:14px}
.cg-field select,.cg-field input{
  padding:14px 18px;border-radius:12px;
  border:1.5px solid rgba(255,255,255,.12);
  background:rgba(255,255,255,.08);
  font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;color:#fff;
  outline:none;transition:all var(--trans);cursor:pointer;
  appearance:none;-webkit-appearance:none;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='rgba(255,255,255,0.4)' stroke-width='2' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat:no-repeat;background-position:right 16px center;
  padding-right:42px;
}
.cg-field select:focus,.cg-field input:focus{border-color:var(--violet2);background:rgba(255,255,255,.12)}
.cg-field select option{background:#1D2B6B;color:#fff}
.cg-field select::placeholder,.cg-field input::placeholder{color:rgba(255,255,255,.3)}
.cg-btn{
  background:linear-gradient(135deg,var(--gold2),var(--gold3));
  color:var(--ink);padding:15px 32px;border-radius:12px;border:none;
  font-family:'Plus Jakarta Sans',sans-serif;font-size:15px;font-weight:800;
  cursor:pointer;transition:all var(--trans);white-space:nowrap;
  display:flex;align-items:center;gap:9px;
  box-shadow:0 6px 24px rgba(245,158,11,.3);
}
.cg-btn:hover{transform:translateY(-3px);box-shadow:0 12px 36px rgba(245,158,11,.5)}
.cg-trust{display:flex;align-items:center;justify-content:center;gap:28px;margin-top:28px;flex-wrap:wrap}
.cg-trust-item{display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.5);font-size:13px;font-weight:600}
.cg-trust-item span:first-child{font-size:16px}
.cg-trust-sep{width:1px;height:18px;background:rgba(255,255,255,.15)}

/* ═══ ABOUT ═══ */
.about-sec{background:var(--white);position:relative;overflow:hidden}
.about-sec::before{
  content:'';position:absolute;right:-200px;top:-200px;
  width:600px;height:600px;border-radius:50%;
  background:radial-gradient(circle,rgba(139,92,246,.06),transparent 70%);
  pointer-events:none;
}
.about-grid{display:grid;grid-template-columns:1fr 1.1fr;gap:clamp(48px,7vw,96px);align-items:center}
.about-imgs{position:relative;flex-shrink:0}
.about-img-main{width:100%;height:480px;object-fit:cover;border-radius:var(--r3);box-shadow:var(--sh3)}
.about-img-sm{position:absolute;bottom:-28px;right:-28px;width:190px;height:190px;object-fit:cover;border-radius:var(--r2);border:5px solid var(--white);box-shadow:var(--sh3)}
.about-badge{position:absolute;top:28px;left:-24px;background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;border-radius:18px;padding:18px 22px;text-align:center;box-shadow:var(--sh3)}
.about-badge strong{font-family:'Playfair Display',serif;font-size:34px;display:block;line-height:1}
.about-badge span{font-size:11px;opacity:.85;line-height:1.5;display:block;margin-top:3px;font-weight:600}
.about-chips{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:22px}
.chip-sm{background:var(--warm);color:var(--violet);padding:7px 16px;border-radius:99px;font-size:13px;font-weight:700;border:1px solid rgba(109,40,217,.15)}
.about-copy h2{font-family:'Playfair Display',serif;font-size:clamp(30px,4vw,44px);color:var(--ink);margin-bottom:20px;line-height:1.12}
.about-copy h2 em{font-style:italic;color:var(--violet)}
.about-copy p{font-size:15px;color:var(--muted);line-height:1.85;margin-bottom:16px}
.about-feats{display:grid;grid-template-columns:1fr 1fr;gap:13px;margin-top:30px}
.feat-item{display:flex;align-items:center;gap:10px;padding:12px 16px;background:var(--cream);border-radius:10px;border:1px solid var(--border);transition:all var(--trans)}
.feat-item:hover{background:var(--warm);border-color:rgba(109,40,217,.2)}
.feat-ico{width:28px;height:28px;border-radius:8px;background:linear-gradient(135deg,var(--indigo),var(--violet));display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.feat-item span{font-size:13px;font-weight:700;color:var(--ink)}

/* ═══ JENJANG ═══ */
.jenjang-sec{background:var(--cream2);position:relative;overflow:hidden}
.jenjang-sec::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(29,78,216,.03),rgba(109,40,217,.04));pointer-events:none}
.jenjang-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.jenjang-card{
  background:var(--white);border-radius:var(--r2);padding:36px 24px 30px;text-align:center;
  border:1.5px solid var(--border);transition:all var(--trans);cursor:default;position:relative;overflow:hidden;
}
.jenjang-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(29,78,216,.04),rgba(109,40,217,.06));opacity:0;transition:opacity var(--trans)}
.jenjang-card:hover{border-color:rgba(109,40,217,.3);transform:translateY(-8px);box-shadow:var(--sh2)}
.jenjang-card:hover::before{opacity:1}
.jenjang-img-wrap{width:88px;height:88px;border-radius:50%;margin:0 auto 22px;position:relative;overflow:hidden;box-shadow:0 8px 24px rgba(109,40,217,.15);border:3px solid var(--warm)}
.jenjang-img{width:100%;height:100%;object-fit:cover}
.jenjang-num{position:absolute;bottom:-2px;right:-2px;width:24px;height:24px;border-radius:50%;background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;font-size:11px;font-weight:800;display:flex;align-items:center;justify-content:center;border:2px solid var(--white)}
.jenjang-card h3{font-weight:800;font-size:18px;color:var(--ink);margin-bottom:6px}
.jenjang-card p{font-size:13px;color:var(--muted);line-height:1.6;margin-bottom:16px}
.jenjang-detail{font-size:12px;font-weight:700;color:var(--violet);display:flex;align-items:center;justify-content:center;gap:5px;cursor:pointer;transition:gap var(--trans)}
.jenjang-card:hover .jenjang-detail{gap:9px}
.jenjang-expand{background:var(--warm);border-radius:12px;padding:16px;margin-top:14px;text-align:left;display:none;border:1px solid rgba(109,40,217,.15)}
.jenjang-card.open .jenjang-expand{display:block}
.jenjang-card.open .jenjang-detail{color:var(--indigo)}
.jenjang-expand ul{list-style:none;display:flex;flex-direction:column;gap:6px}
.jenjang-expand li{font-size:12.5px;color:var(--ink);font-weight:600;display:flex;align-items:center;gap:7px}
.jenjang-expand li::before{content:'✓';color:var(--emerald);font-weight:800;font-size:12px}

/* ═══ PROGRAM ═══ */
.program-sec{background:var(--white)}
.program-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.prog-card{border-radius:var(--r2);overflow:hidden;border:1.5px solid var(--border);background:var(--white);transition:all var(--trans);cursor:pointer;position:relative}
.prog-card:hover{transform:translateY(-8px);box-shadow:var(--sh2);border-color:rgba(109,40,217,.25)}
.prog-img-wrap{position:relative;overflow:hidden}
.prog-img{width:100%;height:200px;object-fit:cover;display:block;transition:transform .6s cubic-bezier(.4,0,.2,1)}
.prog-card:hover .prog-img{transform:scale(1.07)}
.prog-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(8,8,15,.7) 0%,transparent 50%);opacity:0;transition:opacity var(--trans)}
.prog-card:hover .prog-overlay{opacity:1}
.prog-body{padding:22px 22px 24px}
.prog-tag{display:inline-block;background:var(--warm);color:var(--violet);font-size:11px;font-weight:800;padding:4px 13px;border-radius:99px;letter-spacing:.05em;margin-bottom:12px;border:1px solid rgba(109,40,217,.15)}
.prog-body h3{font-weight:800;font-size:16.5px;color:var(--ink);margin-bottom:9px}
.prog-body p{font-size:13.5px;color:var(--muted);line-height:1.7;margin-bottom:16px}
.prog-detail-btn{font-size:13px;font-weight:700;color:var(--violet);display:inline-flex;align-items:center;gap:6px;cursor:pointer;transition:gap var(--trans)}
.prog-card:hover .prog-detail-btn{gap:10px}
.prog-detail-panel{max-height:0;overflow:hidden;transition:max-height .45s cubic-bezier(.4,0,.2,1);padding:0 22px}
.prog-card.open .prog-detail-panel{max-height:300px;padding-bottom:20px}
.prog-detail-inner{background:var(--cream);border-radius:12px;padding:16px;border:1px solid var(--border)}
.prog-detail-inner h4{font-size:13px;font-weight:800;color:var(--ink);margin-bottom:10px}
.prog-detail-inner ul{list-style:none;display:flex;flex-direction:column;gap:7px}
.prog-detail-inner li{font-size:13px;color:var(--muted);display:flex;align-items:flex-start;gap:8px;line-height:1.5}
.prog-detail-inner li::before{content:'→';color:var(--violet);font-weight:800;flex-shrink:0;margin-top:1px}

/* ═══ KEUNGGULAN ═══ */
.keunggulan-sec{
  background:linear-gradient(135deg,#08080F 0%,#0F172A 40%,#1D2B6B 80%,#2D1B69 100%);
  position:relative;overflow:hidden;
}
.keunggulan-sec::before{content:'';position:absolute;width:800px;height:800px;border-radius:50%;background:radial-gradient(circle,rgba(109,40,217,.18),transparent 70%);top:-300px;right:-300px;pointer-events:none}
.keunggulan-sec::after{content:'';position:absolute;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(29,78,216,.15),transparent 70%);bottom:-200px;left:-200px;pointer-events:none}
.keunggulan-sec .sec-tag{color:rgba(196,181,253,.8)}
.keunggulan-sec .sec-h{color:#fff}
.keunggulan-sec .sec-p{color:rgba(255,255,255,.5)}
/* DESKTOP: 5 columns */
.keunggulan-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:18px;position:relative;z-index:1}
.ku-card{
  background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.09);
  border-radius:var(--r2);padding:32px 20px 28px;text-align:center;
  transition:all var(--trans);position:relative;overflow:hidden;cursor:default;
}
.ku-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(109,40,217,.15),rgba(29,78,216,.1));opacity:0;transition:opacity var(--trans)}
.ku-card:hover{border-color:rgba(196,181,253,.3);transform:translateY(-8px);box-shadow:0 24px 64px rgba(0,0,0,.4)}
.ku-card:hover::before{opacity:1}
.ku-icon-wrap{width:68px;height:68px;border-radius:50%;margin:0 auto 20px;position:relative;overflow:hidden;border:2px solid rgba(255,255,255,.12);transition:border-color var(--trans)}
.ku-card:hover .ku-icon-wrap{border-color:rgba(196,181,253,.4)}
.ku-img{width:100%;height:100%;object-fit:cover}
.ku-num{position:absolute;bottom:-2px;right:-2px;width:22px;height:22px;border-radius:50%;background:linear-gradient(135deg,var(--gold2),var(--gold3));color:var(--ink);font-size:10px;font-weight:900;display:flex;align-items:center;justify-content:center;border:2px solid rgba(8,8,15,.8)}
.ku-card h3{font-weight:800;font-size:14.5px;color:#fff;margin-bottom:9px}
.ku-card p{font-size:12.5px;color:rgba(255,255,255,.5);line-height:1.7}

/* ═══ HORIZONTAL SCROLL WRAPPER ═══ */
.hscroll-wrap{position:relative}
.hscroll-container{
  display:flex;gap:22px;
  overflow-x:auto;overflow-y:visible;
  scroll-snap-type:x mandatory;
  -webkit-overflow-scrolling:touch;
  scrollbar-width:none;
  padding:8px 4px 24px;
  cursor:grab;
}
.hscroll-container::-webkit-scrollbar{display:none}
.hscroll-container.dragging{cursor:grabbing;user-select:none}
.hscroll-container > *{scroll-snap-align:start;flex-shrink:0}
.hscroll-nav{
  display:flex;justify-content:center;gap:10px;margin-top:8px;
}
.hs-arrow{
  width:44px;height:44px;border-radius:50%;border:1.5px solid var(--border);
  background:var(--white);color:var(--ink);cursor:pointer;font-size:16px;
  display:flex;align-items:center;justify-content:center;transition:all var(--trans);
}
.hs-arrow:hover{background:var(--violet);border-color:var(--violet);color:#fff}
/* Dark variant for dark sections */
.dark-hs .hs-arrow{background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.15);color:#fff}
.dark-hs .hs-arrow:hover{background:var(--violet);border-color:var(--violet)}

/* ═══ TESTIMONI SLIDER ═══ */
.testi-sec{background:var(--cream);position:relative;overflow:hidden}
.testi-sec::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(109,40,217,.04),transparent 60%);pointer-events:none}
.testi-card{
  background:var(--white);border-radius:var(--r2);
  padding:30px;border:1.5px solid var(--border);
  transition:all var(--trans);position:relative;overflow:hidden;
  width:360px;
}
.testi-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--indigo),var(--violet));transform:scaleX(0);transform-origin:left;transition:transform var(--trans)}
.testi-card:hover{border-color:rgba(109,40,217,.22);box-shadow:var(--sh2);transform:translateY(-6px)}
.testi-card:hover::before{transform:scaleX(1)}
.testi-quote-mark{font-family:'Playfair Display',serif;font-size:72px;line-height:.7;color:var(--violet2);opacity:.15;position:absolute;top:20px;right:22px}
.testi-stars{color:var(--gold2);font-size:14px;margin-bottom:16px;letter-spacing:1px}
.testi-text{font-size:14.5px;color:var(--muted);line-height:1.8;margin-bottom:24px;position:relative;z-index:1}
.testi-author{display:flex;align-items:center;gap:14px}
.testi-av{width:48px;height:48px;border-radius:50%;object-fit:cover;flex-shrink:0;border:2px solid var(--warm)}
.testi-name{font-weight:800;font-size:14px;color:var(--ink)}
.testi-role{font-size:12px;color:var(--muted);margin-top:2px;font-weight:500}
.testi-verified{font-size:11px;color:var(--emerald2);font-weight:700;margin-top:3px;display:flex;align-items:center;gap:4px}
.testi-verified::before{content:'✓';font-weight:900}

/* ═══ GALERI SLIDER + LIGHTBOX ═══ */
.galeri-sec{background:var(--white)}
.galeri-card{
  border-radius:var(--r);overflow:hidden;
  position:relative;cursor:pointer;
  width:320px;flex-shrink:0;
}
.galeri-card img{width:100%;height:220px;object-fit:cover;transition:transform .6s cubic-bezier(.4,0,.2,1);display:block}
.galeri-card:hover img{transform:scale(1.08)}
.galeri-ov{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(8,8,15,.7) 0%,rgba(109,40,217,.3) 100%);
  display:flex;align-items:flex-end;padding:18px;
  opacity:0;transition:opacity var(--trans);
}
.galeri-card:hover .galeri-ov{opacity:1}
.galeri-ov-content{color:#fff}
.galeri-ov span{font-size:13.5px;font-weight:700;display:block;margin-bottom:4px}
.galeri-ov-icon{font-size:20px}
/* Lightbox */
#lightbox{
  position:fixed;inset:0;z-index:99999;
  background:rgba(8,8,15,.95);backdrop-filter:blur(12px);
  display:flex;align-items:center;justify-content:center;
  opacity:0;pointer-events:none;transition:opacity .3s;
}
#lightbox.show{opacity:1;pointer-events:all}
.lb-img-wrap{position:relative;max-width:90vw;max-height:85vh}
#lb-img{max-width:90vw;max-height:80vh;border-radius:var(--r2);object-fit:contain;display:block;box-shadow:0 32px 80px rgba(0,0,0,.8)}
.lb-caption{color:rgba(255,255,255,.7);font-size:14px;font-weight:600;text-align:center;margin-top:16px}
#lb-close{
  position:absolute;top:-18px;right:-18px;
  width:44px;height:44px;border-radius:50%;
  background:rgba(255,255,255,.15);border:1.5px solid rgba(255,255,255,.2);
  color:#fff;cursor:pointer;font-size:22px;display:flex;align-items:center;justify-content:center;
  transition:all var(--trans);
}
#lb-close:hover{background:var(--rose)}
.lb-nav{position:absolute;top:50%;transform:translateY(-50%);z-index:1;display:flex;width:calc(100% + 100px);left:-50px;justify-content:space-between;pointer-events:none}
.lb-arrow{
  width:50px;height:50px;border-radius:50%;
  background:rgba(255,255,255,.12);border:1.5px solid rgba(255,255,255,.2);
  color:#fff;cursor:pointer;font-size:20px;display:flex;align-items:center;justify-content:center;
  transition:all var(--trans);pointer-events:all;
}
.lb-arrow:hover{background:rgba(255,255,255,.25)}

/* ═══ TUTOR SLIDER ═══ */
.tutor-sec{background:var(--cream)}
.tutor-card{
  text-align:center;transition:all var(--trans);
  background:var(--white);border-radius:var(--r2);
  padding:32px 22px 28px;border:1.5px solid var(--border);
  position:relative;overflow:hidden;width:220px;flex-shrink:0;
}
.tutor-card::before{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--indigo),var(--violet));transform:scaleX(0);transition:transform var(--trans)}
.tutor-card:hover{transform:translateY(-8px);box-shadow:var(--sh2);border-color:rgba(109,40,217,.25)}
.tutor-card:hover::before{transform:scaleX(1)}
.tutor-img-wrap{position:relative;width:96px;height:96px;margin:0 auto 20px}
.tutor-img{width:100%;height:100%;border-radius:50%;object-fit:cover;border:3px solid var(--white);box-shadow:0 6px 24px rgba(0,0,0,.12);transition:border-color var(--trans)}
.tutor-card:hover .tutor-img{border-color:var(--violet2)}
.tutor-badge{position:absolute;bottom:-2px;right:-2px;width:26px;height:26px;border-radius:50%;background:linear-gradient(135deg,var(--gold2),var(--gold3));color:var(--ink);font-size:10px;display:flex;align-items:center;justify-content:center;border:2px solid var(--white);font-weight:900}
.tutor-name{font-weight:800;font-size:14.5px;color:var(--ink);margin-bottom:6px}
.tutor-subj{font-size:12px;color:var(--violet);font-weight:700;margin-bottom:10px;background:var(--warm);padding:4px 14px;border-radius:99px;display:inline-block}
.tutor-rating{font-size:14px;color:var(--gold2);font-weight:800;margin-bottom:5px}
.tutor-exp{font-size:12px;color:var(--muted);font-weight:500}

/* ═══ FAQ + KONTAK ═══ */
.faq-sec{background:var(--white)}
.faq-contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:clamp(32px,5vw,64px)}
.faq-list{display:flex;flex-direction:column;gap:10px}
.faq-item{background:var(--cream);border-radius:14px;border:1.5px solid var(--border);overflow:hidden;transition:border-color var(--trans),box-shadow var(--trans)}
.faq-item.open{border-color:rgba(109,40,217,.3);background:var(--white);box-shadow:0 4px 20px rgba(109,40,217,.08)}
.faq-q{padding:18px 20px;display:flex;justify-content:space-between;align-items:center;cursor:pointer;font-weight:700;font-size:14.5px;color:var(--ink);gap:14px}
.faq-ico{width:28px;height:28px;border-radius:50%;flex-shrink:0;background:var(--white);color:var(--violet);border:1.5px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:700;transition:all .3s}
.faq-item.open .faq-ico{transform:rotate(45deg);background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;border-color:transparent}
.faq-a{max-height:0;overflow:hidden;padding:0 20px;font-size:14px;color:var(--muted);line-height:1.8;transition:max-height .4s cubic-bezier(.4,0,.2,1)}
.faq-item.open .faq-a{max-height:200px;padding-bottom:20px}
/* Form */
.contact-box{background:linear-gradient(140deg,#0F172A 0%,#1D2B6B 50%,#2D1B69 100%);border-radius:var(--r3);padding:clamp(28px,4vw,42px);position:relative;overflow:hidden}
.contact-box::before{content:'';position:absolute;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(109,40,217,.2),transparent 70%);top:-150px;right:-150px;pointer-events:none}
.contact-box-title{font-family:'Playfair Display',serif;font-size:28px;color:#fff;margin-bottom:8px;position:relative;z-index:1}
.contact-box-sub{font-size:14px;color:rgba(255,255,255,.5);margin-bottom:30px;position:relative;z-index:1}
.f-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:14px}
.f-group{display:flex;flex-direction:column;gap:6px;margin-bottom:14px;position:relative;z-index:1}
.f-group label{font-size:11.5px;font-weight:700;color:rgba(255,255,255,.65);letter-spacing:.07em;text-transform:uppercase}
.f-group input,.f-group select,.f-group textarea{padding:13px 16px;border-radius:11px;border:1.5px solid rgba(255,255,255,.1);background:rgba(255,255,255,.07);font-family:'Plus Jakarta Sans',sans-serif;font-size:14px;color:#fff;outline:none;transition:border-color var(--trans),background var(--trans)}
.f-group input::placeholder,.f-group textarea::placeholder{color:rgba(255,255,255,.3)}
.f-group input:focus,.f-group select:focus,.f-group textarea:focus{border-color:var(--violet2);background:rgba(255,255,255,.1)}
.f-group select option{background:#1D2B6B;color:#fff}
.f-group textarea{resize:vertical;min-height:100px}
.btn-submit{width:100%;background:linear-gradient(135deg,var(--gold2),var(--gold3));color:var(--ink);padding:16px;border-radius:12px;border:none;font-family:'Plus Jakarta Sans',sans-serif;font-size:15px;font-weight:800;cursor:pointer;transition:all var(--trans);display:flex;align-items:center;justify-content:center;gap:9px;letter-spacing:.01em;position:relative;z-index:1;box-shadow:0 6px 24px rgba(245,158,11,.3)}
.btn-submit:hover{transform:translateY(-2px);box-shadow:0 12px 36px rgba(245,158,11,.45)}

/* ═══ CABANG ═══ */
.cabang-sec{background:var(--cream2)}
.cabang-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
.cabang-card{border-radius:var(--r2);overflow:hidden;position:relative;cursor:pointer;transition:all var(--trans);box-shadow:var(--sh);border:1.5px solid var(--border)}
.cabang-card:hover{transform:translateY(-8px);box-shadow:var(--sh2);border-color:rgba(109,40,217,.25)}
.cabang-img-wrap{position:relative;height:210px;overflow:hidden}
.cabang-img{width:100%;height:100%;object-fit:cover;transition:transform .6s cubic-bezier(.4,0,.2,1)}
.cabang-card:hover .cabang-img{transform:scale(1.09)}
.cabang-info{position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent,rgba(8,8,15,.88));padding:32px 18px 18px}
.cabang-info h3{color:#fff;font-weight:800;font-size:17px;margin-bottom:3px}
.cabang-info p{color:rgba(255,255,255,.65);font-size:12.5px;margin-bottom:12px}
.cabang-btn{background:rgba(255,255,255,.12);color:#fff;border:1px solid rgba(255,255,255,.28);padding:7px 18px;border-radius:9px;font-size:12.5px;font-weight:700;cursor:pointer;font-family:'Plus Jakarta Sans',sans-serif;transition:all var(--trans);backdrop-filter:blur(6px)}
.cabang-btn:hover{background:var(--gold2);color:var(--ink);border-color:var(--gold2)}

/* ═══ FOOTER ═══ */
footer{background:var(--navy);color:rgba(255,255,255,.55);padding:clamp(56px,8vw,88px) clamp(20px,5vw,64px) 36px}
.footer-inner{max-width:1200px;margin:0 auto}
.footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1.5fr;gap:clamp(28px,5vw,56px);margin-bottom:52px}
.footer-brand{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.footer-logo-mark{width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,var(--indigo),var(--violet));display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:12px}
.footer-brand-name b{font-size:15px;font-weight:800;color:#fff;display:block}
.footer-brand-name span{font-size:12px;color:rgba(255,255,255,.45)}
footer .f-desc{font-size:13.5px;line-height:1.85;margin-bottom:24px}
.footer-socials{display:flex;gap:10px}
.f-soc{width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.55);font-size:13px;font-weight:700;transition:all var(--trans);border:1px solid rgba(255,255,255,.08)}
.f-soc:hover{background:var(--violet);color:#fff;border-color:var(--violet)}
.footer-col h4{font-weight:800;font-size:13.5px;color:#fff;margin-bottom:20px;letter-spacing:.02em}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:11px}
.footer-col ul li a{font-size:13.5px;color:rgba(255,255,255,.5);transition:color var(--trans);font-weight:500}
.footer-col ul li a:hover{color:#fff}
.f-contact-row{display:flex;align-items:center;gap:11px;font-size:13.5px;margin-bottom:14px;font-weight:500}
.f-contact-ico{font-size:15px;flex-shrink:0;opacity:.75}
.footer-bottom{border-top:1px solid rgba(255,255,255,.07);padding-top:28px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;font-size:13px;color:rgba(255,255,255,.3)}

/* ═══ WA FLOAT ═══ */
#wa-float{position:fixed;bottom:28px;right:28px;z-index:9000;background:#1DA851;color:#fff;border-radius:56px;padding:15px 24px;display:flex;align-items:center;gap:10px;font-weight:800;font-size:14px;box-shadow:0 8px 40px rgba(29,168,81,.5);animation:waFloat 3.5s ease-in-out infinite;transition:all .25s}
.wa-icon{width:22px;height:22px;flex-shrink:0}
#wa-float:hover{animation:none;transform:scale(1.07);box-shadow:0 14px 48px rgba(29,168,81,.6)}
@keyframes waFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-7px)}}

/* ═══ NOTIF ═══ */
#notif{position:fixed;bottom:100px;left:24px;z-index:9001;background:var(--white);border-radius:18px;box-shadow:0 8px 56px rgba(0,0,0,.16);padding:16px 20px;display:flex;align-items:center;gap:14px;max-width:300px;border-left:4px solid var(--violet);animation:slideIn .55s cubic-bezier(.34,1.56,.64,1) both;transition:opacity .4s,transform .4s}
#notif.hide{opacity:0;transform:translateX(-120%)}
@keyframes slideIn{from{opacity:0;transform:translateX(-110%)}to{opacity:1;transform:translateX(0)}}
.n-av{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--indigo),var(--violet));display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:15px;flex-shrink:0}
.n-text p{font-size:13px;font-weight:800;color:var(--ink);margin-bottom:2px}
.n-text span{font-size:12px;color:var(--muted)}
.n-pill{background:var(--warm);color:var(--violet);font-size:11px;font-weight:700;padding:3px 9px;border-radius:99px;margin-top:5px;display:inline-block}
#n-x{position:absolute;top:9px;right:11px;cursor:pointer;color:var(--muted);font-size:18px;background:none;border:none;font-family:inherit;line-height:1;transition:color var(--trans)}
#n-x:hover{color:var(--ink)}
.n-live{position:absolute;top:11px;right:28px;width:7px;height:7px;background:var(--emerald2);border-radius:50%;animation:pulse 2s infinite}

/* ═══ MODAL ═══ */
#modal{position:fixed;inset:0;z-index:9999;background:rgba(8,8,15,.6);backdrop-filter:blur(6px);display:flex;align-items:center;justify-content:center;opacity:0;pointer-events:none;transition:opacity .3s}
#modal.show{opacity:1;pointer-events:all}
.modal-box{background:var(--white);border-radius:var(--r3);padding:clamp(36px,5vw,56px) clamp(28px,5vw,48px);text-align:center;max-width:420px;width:90%;transform:scale(.86);transition:transform .35s cubic-bezier(.34,1.56,.64,1)}
#modal.show .modal-box{transform:scale(1)}
.modal-ico{font-size:60px;margin-bottom:20px;display:block;animation:pop .5s cubic-bezier(.34,1.56,.64,1) .1s both}
@keyframes pop{from{transform:scale(0)}to{transform:scale(1)}}
.modal-box h3{font-family:'Playfair Display',serif;font-size:28px;color:var(--ink);margin-bottom:14px}
.modal-box p{font-size:15px;color:var(--muted);line-height:1.75;margin-bottom:30px}
.modal-btn{background:linear-gradient(135deg,var(--indigo),var(--violet));color:#fff;padding:14px 40px;border-radius:12px;border:none;font-family:'Plus Jakarta Sans',sans-serif;font-size:15px;font-weight:800;cursor:pointer;transition:all var(--trans);box-shadow:0 6px 20px rgba(109,40,217,.35)}
.modal-btn:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(109,40,217,.45)}

/* ═══ REVEAL ═══ */
.reveal{opacity:0;transform:translateY(32px);transition:opacity .75s ease,transform .75s ease}
.reveal.visible{opacity:1;transform:translateY(0)}
.reveal-1{transition-delay:.1s}.reveal-2{transition-delay:.2s}.reveal-3{transition-delay:.3s}

/* ═══ RESPONSIVE ═══ */
@media(max-width:1100px){
  .hero-inner{grid-template-columns:1fr}
  .hero-panel{display:none}
  .tutor-card{width:200px}
  .cabang-grid{grid-template-columns:repeat(2,1fr)}
  .footer-grid{grid-template-columns:1fr 1fr;gap:40px}
  .cg-grid{grid-template-columns:1fr 1fr;gap:14px}
  .cg-btn{grid-column:span 2;justify-content:center}
}
@media(max-width:768px){
  .nav-links,.nav-cta,.nav-auth{display:none}
  .hamburger{display:flex}
  .about-grid{grid-template-columns:1fr}
  .about-img-sm,.about-badge{display:none}
  .about-img-main{height:320px}
  .jenjang-grid{grid-template-columns:repeat(2,1fr)}
  .program-grid{grid-template-columns:1fr 1fr}
  /* MOBILE: Keunggulan 2 columns */
  .keunggulan-grid{grid-template-columns:1fr 1fr !important;gap:14px !important}
  .ku-card{padding:28px 16px 24px;min-height:220px}
  .faq-contact-grid{grid-template-columns:1fr}
  .footer-grid{grid-template-columns:1fr}
  .cabang-grid{grid-template-columns:1fr 1fr}
  .f-row{grid-template-columns:1fr}
  .hero-stats{gap:24px}
  .stat-sep{display:none}
  .scroll-hint{display:none}
  .testi-card{width:300px}
  .galeri-card{width:260px}
  .tutor-card{width:185px}
  .cg-grid{grid-template-columns:1fr}
  .cg-btn{grid-column:span 1;justify-content:center}
  .cg-trust{gap:16px}
}
@media(max-width:520px){
  .program-grid{grid-template-columns:1fr}
  .keunggulan-grid{grid-template-columns:1fr 1fr !important}
  .ku-card{padding:24px 14px 20px}
  .cabang-grid{grid-template-columns:1fr 1fr}
  #wa-float span{display:none}
  #wa-float{padding:16px;border-radius:50%;width:58px;height:58px;justify-content:center}
  .jenjang-grid{grid-template-columns:1fr 1fr}
  .ann-bar{font-size:12px}
  .testi-card{width:280px}
  .galeri-card{width:240px}
  .tutor-card{width:170px}
  .cg-form{padding:24px 18px}
}
@media(max-width:400px){
  .cabang-grid{grid-template-columns:1fr}
  .keunggulan-grid{grid-template-columns:1fr 1fr !important}
}
</style>
</head>
<body>

<!-- NOTIF -->
<div id="notif">
  <div class="n-av">W</div>
  <div class="n-text">
    <p>Wahyu baru saja mendaftar! 🎉</p>
    <span>Kursus Akuntansi · Medan</span>
    <div class="n-pill">⏰ 5 menit lalu</div>
  </div>
  <button id="n-x" onclick="closeNotif()">×</button>
  <div class="n-live"></div>
</div>

<!-- WA FLOAT -->
<a id="wa-float" href="https://wa.me/6281234567890" target="_blank" rel="noopener">
  <svg class="wa-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  <span>Daftar Sekarang</span>
</a>

<!-- MODAL -->
<div id="modal">
  <div class="modal-box">
    <span class="modal-ico">🎉</span>
    <h3>Pesan Terkirim!</h3>
    <p>Terima kasih telah menghubungi SCI. Tim kami akan menghubungi Anda dalam 1×24 jam via WhatsApp.</p>
    <button class="modal-btn" onclick="closeModal()">Oke, Siap!</button>
  </div>
</div>

<!-- LIGHTBOX -->
<div id="lightbox">
  <div class="lb-img-wrap">
    <button id="lb-close" onclick="closeLightbox()">×</button>
    <div class="lb-nav">
      <button class="lb-arrow" onclick="lbNav(-1)">‹</button>
      <button class="lb-arrow" onclick="lbNav(1)">›</button>
    </div>
    <img id="lb-img" src="" alt="">
    <div class="lb-caption" id="lb-caption"></div>
  </div>
</div>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="#tentang" onclick="closeMenu()">Tentang Kami</a>
  <a href="#program" onclick="closeMenu()">Program</a>
  <a href="#keunggulan" onclick="closeMenu()">Keunggulan</a>
  <a href="#testimoni" onclick="closeMenu()">Testimoni</a>
  <a href="#tutor" onclick="closeMenu()">Tutor</a>
  <a href="#faq-kontak" onclick="closeMenu()">FAQ & Kontak</a>
  <a href="#cabang" onclick="closeMenu()">Cabang</a>
  <div class="mob-auth">
    <a href="loginguru" onclick="closeMenu()">👨‍🏫 Login Guru</a>
    <a href="loginsiswa" class="m-guru" onclick="closeMenu()">🎓 Login Siswa</a>
  </div>
  <a href="#faq-kontak" class="mob-cta" onclick="closeMenu()">Hubungi Kami →</a>
</div>





<!-- NAV -->
<nav id="navbar">
  <a href="#" class="nav-logo">
    <div class="nav-logo-mark">SCI</div>
    <div class="nav-logo-text"><b>Smart Center</b><span>Indonesia</span></div>
  </a>
  <div class="nav-links">
    <a href="#tentang">Tentang</a>
    <a href="#program">Program</a>
    <a href="#keunggulan">Keunggulan</a>
    <a href="#testimoni">Testimoni</a>
    <a href="#tutor">Tutor</a>
    <a href="#cabang">Cabang</a>
  </div>
  <div class="nav-auth">
    <a href="loginguru" class="nav-auth-btn">👨‍🏫 Login Guru</a>
    <a href="loginsiswa" class="nav-auth-btn guru">🎓 Login Siswa</a>
  </div>
  <a href="#faq-kontak" class="nav-cta">Hubungi Kami →</a>
  <button class="hamburger" id="hamburger" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ══════════════════ HERO SLIDER ══════════════════ -->
<section class="hero">
  <div class="hero-slides" id="heroSlides">
    <div class="hero-slide active">
      <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1600&q=80&auto=format&fit=crop" alt="SCI Banner 1">
      <div class="hero-slide-ov"></div>
    </div>
    <div class="hero-slide">
      <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1600&q=80&auto=format&fit=crop" alt="SCI Banner 2">
      <div class="hero-slide-ov" style="background:linear-gradient(135deg,rgba(8,8,15,.9) 0%,rgba(15,23,42,.75) 45%,rgba(67,56,202,.45) 100%)"></div>
    </div>
    <div class="hero-slide">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1600&q=80&auto=format&fit=crop" alt="SCI Banner 3">
      <div class="hero-slide-ov" style="background:linear-gradient(135deg,rgba(8,8,15,.92) 0%,rgba(45,27,105,.7) 45%,rgba(29,78,216,.45) 100%)"></div>
    </div>
    <div class="hero-slide">
      <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=1600&q=80&auto=format&fit=crop" alt="SCI Banner 4">
      <div class="hero-slide-ov" style="background:linear-gradient(135deg,rgba(8,8,15,.93) 0%,rgba(29,78,216,.65) 45%,rgba(5,150,105,.35) 100%)"></div>
    </div>
  </div>
  <div class="hero-ov2"></div>
  <div class="hero-grain"></div>

  <button class="hero-arrow prev" onclick="heroSlide(-1)">‹</button>
  <button class="hero-arrow next" onclick="heroSlide(1)">›</button>

  <div class="hero-inner">
    <div class="hero-content">
      <div class="hero-eyebrow">
        <span class="eyebrow-dot"></span>
        #1 Bimbel &amp; Kursus Terpercaya di Indonesia
      </div>
      <h1>Raih Prestasi<br>Terbaik Bersama<br><em>SCI</em></h1>
      <p class="hero-desc">Platform pendidikan modern berbasis offline &amp; online. Dari TK hingga umum — kami wujudkan mimpi, kamu raih prestasi!</p>

      <div class="hero-stats">
        <div class="h-stat"><strong>15K+</strong><span>Siswa Aktif</span></div>
        <div class="stat-sep"></div>
        <div class="h-stat"><strong>150+</strong><span>Cabang</span></div>
        <div class="stat-sep"></div>
        <div class="h-stat"><strong>14+</strong><span>Tahun</span></div>
        <div class="stat-sep"></div>
        <div class="h-stat"><strong>4.9★</strong><span>Rating</span></div>
      </div>
    </div>
    <div class="hero-panel">
      <div class="hero-panel-card">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=700&q=80&auto=format&fit=crop" class="hp-img" alt="Kelas SCI" loading="eager">
        <div class="hp-body">
          <div class="hp-badge">PROGRAM UNGGULAN</div>
          <h4>Les Privat 1-on-1 Terbaik</h4>
          <p>Belajar efektif dengan pendamping personal</p>
        </div>
      </div>
      <div class="hero-chip hero-chip-1">
        <div class="chip-ico" style="background:#FEF3C7">🏆</div>
        <div class="chip-t"><b>Rating Terbaik</b><span>Bimbel #1 Indonesia</span><div class="chip-stars">★★★★★</div></div>
      </div>
      <div class="hero-chip hero-chip-2">
        <div class="chip-ico" style="background:#EDE9FE">🎓</div>
        <div class="chip-t"><b>+2,847 Siswa</b><span>Bergabung bulan ini</span></div>
      </div>
    </div>
  </div>

  <div class="hero-dots" id="heroDots">
    <button class="hero-dot active" onclick="heroGoTo(0)"></button>
    <button class="hero-dot" onclick="heroGoTo(1)"></button>
    <button class="hero-dot" onclick="heroGoTo(2)"></button>
    <button class="hero-dot" onclick="heroGoTo(3)"></button>
  </div>
  <div class="scroll-hint">
    <span>Scroll</span>
    <div class="scroll-arrow"></div>
  </div>
</section>
<!-- ═══ RUNNING PROMO BAR ═══ -->
<div class="promo-bar" id="promoBar">
  <div class="promo-track" id="promoTrack">
    <!-- Items duplicated for seamless loop -->
    <span class="promo-item">🎉 Diskon Spesial! Gratis biaya pendaftaran bulan ini <span class="p-sep">|</span></span>
    <span class="promo-item">🏆 Daftar sekarang &amp; dapatkan sesi konsultasi GRATIS! <span class="p-sep">|</span></span>
    <span class="promo-item">📚 Promo Paket Hemat: Beli 10 sesi gratis 2 sesi ekstra <span class="p-sep">|</span></span>
    <span class="promo-item">🌟 Rating bintang 5 dari 10.000+ siswa se-Indonesia <span class="p-sep">|</span></span>
    <span class="promo-item">💻 Kursus Komputer & Desain Grafis: Promo spesial Rp150rb/bulan <span class="p-sep">|</span></span>
    <span class="promo-item">🎉 Diskon Spesial! Gratis biaya pendaftaran bulan ini <span class="p-sep">|</span></span>
    <span class="promo-item">🏆 Daftar sekarang &amp; dapatkan sesi konsultasi GRATIS! <span class="p-sep">|</span></span>
    <span class="promo-item">📚 Promo Paket Hemat: Beli 10 sesi gratis 2 sesi ekstra <span class="p-sep">|</span></span>
    <span class="promo-item">🌟 Rating bintang 5 dari 10.000+ siswa se-Indonesia <span class="p-sep">|</span></span>
    <span class="promo-item">💻 Kursus Komputer & Desain Grafis: Promo spesial Rp150rb/bulan <span class="p-sep">|</span></span>
  </div>
</div>
<!-- ══════════════════ TENTANG ══════════════════ -->
<section class="sec about-sec" id="tentang">
  <div class="sec-inner">
    <div class="about-grid reveal">
      <div class="about-imgs">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80&auto=format&fit=crop" class="about-img-main" alt="Gedung SCI" loading="lazy">
        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&q=80&auto=format&fit=crop" class="about-img-sm" alt="Belajar" loading="lazy">
        <div class="about-badge"><strong>#1</strong><span>Bimbel<br>Terpercaya</span></div>
      </div>
      <div class="about-copy">
        <div class="about-chips">
          <span class="chip-sm">📚 Tentang Kami</span>
          <span class="chip-sm">Sejak 2010</span>
          <span class="chip-sm">ISO Certified</span>
        </div>
        <h2>Tentang <em>Smart Center Indonesia</em></h2>
        <p>Smart Center Indonesia (SCI) adalah lembaga pendidikan yang bergerak di bidang bimbingan belajar, kursus, dan les privat (1 guru 1 siswa) berbasis offline dan online yang berkomitmen menjadi lembaga terbaik nomor 1 di Indonesia.</p>
        <p>Dengan metode pembelajaran efektif, pengajar berpengalaman, serta pendekatan personal, SCI hadir sebagai solusi pendidikan terpercaya. <em style="color:var(--violet);font-style:italic">"Wujudkan mimpi, raih prestasi!"</em></p>
        <div class="about-feats">
          <div class="feat-item"><div class="feat-ico">✅</div><span>Tutor Bersertifikat</span></div>
          <div class="feat-item"><div class="feat-ico">🏠</div><span>Bisa Home Visit</span></div>
          <div class="feat-item"><div class="feat-ico">💻</div><span>Kelas Online &amp; Offline</span></div>
          <div class="feat-item"><div class="feat-ico">📊</div><span>Evaluasi Rutin Bulanan</span></div>
          <div class="feat-item"><div class="feat-ico">💬</div><span>Konsultasi 24/7</span></div>
          <div class="feat-item"><div class="feat-ico">🎯</div><span>Target &amp; Hasil Terukur</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ══════════════════ CARI GURU ══════════════════ -->
<section class="cari-guru-sec" id="cari-guru">
  <div class="cg-inner">
    <div class="cg-header reveal">
      <div class="cg-tag">Temukan Pengajar Terbaik</div>
      <h2>Cari Guru <em>Terbaik</em>, Secepat Klik</h2>
      <p>Temukan tutor privat terbaik di kotamu — pilih berdasarkan mata pelajaran, lokasi, dan metode belajar yang kamu inginkan.</p>
    </div>
    <div class="cg-form reveal reveal-1">
      <div class="cg-grid">
        <div class="cg-field">
          <label><span>📍</span> Kota / Lokasi</label>
          <select id="cg-kota">
            <option value="">Semua Kota</option>
            <option>Medan</option><option>Jakarta</option><option>Bandung</option>
            <option>Surabaya</option><option>Pekanbaru</option><option>Palembang</option>
            <option>Jambi</option><option>Aceh</option><option>Makassar</option>
            <option>Yogyakarta</option><option>Semarang</option><option>Denpasar</option>
          </select>
        </div>
        <div class="cg-field">
          <label><span>📚</span> Mata Pelajaran</label>
          <select id="cg-mapel">
            <option value="">Semua Mata Pelajaran</option>
            <option>Matematika</option><option>Fisika</option><option>Kimia</option>
            <option>Biologi</option><option>Bahasa Inggris</option><option>Bahasa Indonesia</option>
            <option>Akuntansi</option><option>Komputer</option><option>Bahasa Jepang</option>
            <option>Bahasa Mandarin</option><option>IPA Terpadu</option><option>IPS Terpadu</option>
          </select>
        </div>
        <div class="cg-field">
          <label><span>💻</span> Metode Belajar</label>
          <select id="cg-metode">
            <option value="">Semua Metode</option>
            <option>Online (Via Zoom / Meet)</option>
            <option>Offline (Di Kantor SCI)</option>
            <option>Home Visit (Ke Rumah)</option>
            <option>Hybrid (Fleksibel)</option>
          </select>
        </div>
        <button class="cg-btn" onclick="cariGuru()">
          🔍 Cari Guru
        </button>
      </div>
      <div class="cg-trust">
        <div class="cg-trust-item"><span>✅</span> 500+ Tutor Bersertifikat</div>
        <div class="cg-trust-sep"></div>
        <div class="cg-trust-item"><span>⚡</span> Respon dalam 1 Jam</div>
        <div class="cg-trust-sep"></div>
        <div class="cg-trust-item"><span>🔒</span> Aman &amp; Terpercaya</div>
        <div class="cg-trust-sep"></div>
        <div class="cg-trust-item"><span>🎯</span> Garansi Hasil Belajar</div>
      </div>
    </div>
  </div>
</section>



<!-- ══════════════════ JENJANG ══════════════════ -->
<section class="sec jenjang-sec" id="jenjang">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Layanan Kami</div>
      <h2 class="sec-h">Jenjang <em>Pendidikan</em></h2>
      <p class="sec-p">Kami melayani semua jenjang dari TK hingga umum dengan pendekatan personal yang tepat untuk setiap tahap perkembangan.</p>
    </div>
    <div class="jenjang-grid reveal">
      <div class="jenjang-card" onclick="toggleJenjang(this)">
        <div class="jenjang-img-wrap"><img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=200&h=200&q=80&auto=format&fit=crop" class="jenjang-img" alt="TK" loading="lazy"><div class="jenjang-num">1</div></div>
        <h3>TK</h3><p>Taman Kanak-Kanak</p>
        <div class="jenjang-detail">Lihat Detail <span>→</span></div>
        <div class="jenjang-expand"><ul><li>Calistung (Baca Tulis Hitung)</li><li>Pengenalan Angka &amp; Huruf</li><li>Seni &amp; Kreativitas Anak</li><li>Persiapan Masuk SD</li></ul></div>
      </div>
      <div class="jenjang-card" onclick="toggleJenjang(this)">
        <div class="jenjang-img-wrap"><img src="https://images.unsplash.com/photo-1485546246426-74dc88dec4d9?w=200&h=200&q=80&auto=format&fit=crop" class="jenjang-img" alt="SD" loading="lazy"><div class="jenjang-num">2</div></div>
        <h3>SD</h3><p>Sekolah Dasar</p>
        <div class="jenjang-detail">Lihat Detail <span>→</span></div>
        <div class="jenjang-expand"><ul><li>Matematika Dasar &amp; Lanjut</li><li>Bahasa Indonesia &amp; Inggris</li><li>IPA, IPS, PKN</li><li>Persiapan Ujian Sekolah</li></ul></div>
      </div>
      <div class="jenjang-card" onclick="toggleJenjang(this)">
        <div class="jenjang-img-wrap"><img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=200&h=200&q=80&auto=format&fit=crop" class="jenjang-img" alt="SMP" loading="lazy"><div class="jenjang-num">3</div></div>
        <h3>SMP</h3><p>Sekolah Menengah Pertama</p>
        <div class="jenjang-detail">Lihat Detail <span>→</span></div>
        <div class="jenjang-expand"><ul><li>Matematika, Fisika, Kimia</li><li>Biologi, Sejarah, Geografi</li><li>Bahasa Inggris Intensif</li><li>Persiapan PPDB SMA Favorit</li></ul></div>
      </div>
      <div class="jenjang-card" onclick="toggleJenjang(this)">
        <div class="jenjang-img-wrap"><img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=200&h=200&q=80&auto=format&fit=crop" class="jenjang-img" alt="SMA" loading="lazy"><div class="jenjang-num">4</div></div>
        <h3>SMA / Umum</h3><p>SMA &amp; Karyawan</p>
        <div class="jenjang-detail">Lihat Detail <span>→</span></div>
        <div class="jenjang-expand"><ul><li>Persiapan UTBK / SNBT</li><li>Kursus Profesional Dewasa</li><li>Bahasa, Komputer, Akuntansi</li><li>Persiapan CPNS &amp; Tes Kerja</li></ul></div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ PROGRAM ══════════════════ -->
<section class="sec program-sec" id="program">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Program SCI</div>
      <h2 class="sec-h">Program <em>Unggulan</em></h2>
      <p class="sec-p">Pilih program yang sesuai kebutuhan Anda bersama para tutor terbaik kami — klik kartu untuk melihat detail lengkap.</p>
    </div>
    <div class="program-grid reveal">
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1518133910546-b6c2fb7d79e3?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Bimbel" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag">SEMUA JENJANG</span><h3>Bimbel Mata Pelajaran</h3><p>Bimbingan semua mata pelajaran sekolah dengan metode efektif dan menyenangkan.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>Semua mapel dari TK hingga SMA/Kuliah</li><li>Sesi privat 1-on-1 atau kelompok kecil</li><li>Laporan perkembangan tiap bulan</li><li>Bisa home visit atau di kantor SCI</li><li>Jadwal fleksibel sesuai keinginan</li></ul></div></div>
      </div>
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Ujian" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag">SMP · SMA</span><h3>Persiapan Ujian</h3><p>Persiapan UTS, UAS &amp; Ujian Sekolah agar nilai meningkat pesat dan lulus terbaik.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>Materi fokus sesuai kisi-kisi ujian</li><li>Try out berkala dengan pembahasan</li><li>Strategi menjawab soal cepat &amp; tepat</li><li>Mentoring intensif H-30 ujian</li><li>Garansi nilai meningkat minimal 15%</li></ul></div></div>
      </div>
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Tes Masuk" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag">INTENSIF</span><h3>Persiapan Tes &amp; SBMPTN</h3><p>Persiapan masuk sekolah favorit, PTN, CPNS &amp; tes lainnya secara intensif.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>UTBK/SNBT, PPDB, CPNS, BUMN</li><li>Modul soal eksklusif &amp; terbaru</li><li>Simulasi tes online terjadwal</li><li>Konsultasi pemilihan jurusan PTN</li><li>Rekam jejak alumnus lulus PTN terbaik</li></ul></div></div>
      </div>
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Bahasa" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag">SEMUA LEVEL</span><h3>Kursus Bahasa</h3><p>Inggris, Jepang, Mandarin, Arab — tingkatkan kemampuan bahasa Anda bersama kami.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>Bahasa Inggris, Jepang, Mandarin, Arab</li><li>Speaking, Writing, Grammar, Listening</li><li>Sertifikat kelulusan resmi SCI</li><li>Persiapan TOEFL, IELTS, JLPT, HSK</li><li>Native &amp; bilingual tutor tersedia</li></ul></div></div>
      </div>
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Komputer" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag" style="background:rgba(217,119,6,.1);color:#B45309;border-color:rgba(217,119,6,.2)">POPULER 🔥</span><h3>Kursus Komputer</h3><p>Microsoft Office, Desain Grafis, Programming — teknologi terkini untuk karir masa depan.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>MS Office (Word, Excel, PowerPoint)</li><li>Desain Grafis: Photoshop, Canva, Figma</li><li>Programming: Web, Python, Scratch</li><li>Sertifikat resmi berskala nasional</li><li>Langsung praktek &amp; project nyata</li></ul></div></div>
      </div>
      <div class="prog-card" onclick="toggleProg(this)">
        <div class="prog-img-wrap"><img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=280&q=80&auto=format&fit=crop" class="prog-img" alt="Akuntansi" loading="lazy"><div class="prog-overlay"></div></div>
        <div class="prog-body"><span class="prog-tag" style="background:rgba(5,150,105,.1);color:#047857;border-color:rgba(5,150,105,.2)">TERBARU ✨</span><h3>Kursus Akuntansi</h3><p>Akuntansi dasar hingga profesional, perpajakan &amp; keuangan untuk mahasiswa dan karyawan.</p><div class="prog-detail-btn">Lihat Detail <span>↓</span></div></div>
        <div class="prog-detail-panel"><div class="prog-detail-inner"><h4>📋 Yang Kamu Dapatkan:</h4><ul><li>Akuntansi Dasar hingga Profesional</li><li>Perpajakan (PPh, PPN, e-Faktur)</li><li>Software Akuntansi: MYOB, Accurate</li><li>Laporan Keuangan &amp; Analisis Bisnis</li><li>Sertifikat kompetensi akuntansi</li></ul></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ KEUNGGULAN ══════════════════ -->
<section class="sec keunggulan-sec" id="keunggulan">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Mengapa SCI?</div>
      <h2 class="sec-h">Keunggulan <em>SCI</em></h2>
      <p class="sec-p" style="color:rgba(255,255,255,.5)">Lima pilar yang membuat SCI menjadi pilihan terpercaya jutaan keluarga Indonesia selama 14+ tahun.</p>
    </div>
    <div class="keunggulan-grid reveal">
      <div class="ku-card">
        <div class="ku-icon-wrap"><img src="https://images.unsplash.com/photo-1544717305-2782549b5136?w=150&h=150&q=80&auto=format&fit=crop&crop=face" class="ku-img" alt="Tutor" loading="lazy"><div class="ku-num">1</div></div>
        <h3>Tutor Profesional</h3>
        <p>Pengajar ahli bersertifikat resmi dengan pengalaman bertahun-tahun dan rekam jejak membuktikan hasil nyata.</p>
      </div>
      <div class="ku-card">
        <div class="ku-icon-wrap"><img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&q=80&auto=format&fit=crop" class="ku-img" alt="Home Visit" loading="lazy"><div class="ku-num">2</div></div>
        <h3>Bisa Home Visit</h3>
        <p>Tutor kami siap datang ke rumah Anda kapan saja. Jadwal fleksibel, nyaman, dan tanpa perlu repot.</p>
      </div>
      <div class="ku-card">
        <div class="ku-icon-wrap"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=150&h=150&q=80&auto=format&fit=crop" class="ku-img" alt="Metode" loading="lazy"><div class="ku-num">3</div></div>
        <h3>Metode Modern</h3>
        <p>Sistem belajar interaktif yang disesuaikan dengan gaya belajar masing-masing siswa. Belajar itu menyenangkan!</p>
      </div>
      <div class="ku-card">
        <div class="ku-icon-wrap"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=150&h=150&q=80&auto=format&fit=crop" class="ku-img" alt="Hasil" loading="lazy"><div class="ku-num">4</div></div>
        <h3>Hasil Terukur</h3>
        <p>Evaluasi rutin, progress terpantau, laporan bulanan. Nilai meningkat signifikan — dijamin atau kami ulang!</p>
      </div>
      <div class="ku-card">
        <div class="ku-icon-wrap"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=150&h=150&q=80&auto=format&fit=crop" class="ku-img" alt="Support" loading="lazy"><div class="ku-num">5</div></div>
        <h3>Support Penuh</h3>
        <p>Bantuan belajar &amp; konsultasi 24/7 via WhatsApp. Kami selalu ada untuk mendukung perjalanan belajar Anda.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ TESTIMONI SLIDER ══════════════════ -->
<section class="sec testi-sec" id="testimoni">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Kata Mereka</div>
      <h2 class="sec-h">Testimoni <em>Siswa</em></h2>
      <p class="sec-p">Dengarkan cerita sukses ribuan siswa yang telah mempercayai SCI sebagai mitra belajar mereka.</p>
    </div>
    <div class="hscroll-wrap reveal">
      <div class="hscroll-container" id="testiScroll">
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Belajar di SCI sangat menyenangkan! Tutor menjelaskan dengan cara yang mudah dipahami dan nilai saya meningkat pesat. Sangat rekomendasikan untuk semua!</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Aisyah" loading="lazy"><div><div class="testi-name">Aisyah Rahma</div><div class="testi-role">Siswa SMA · Matematika</div><div class="testi-verified">Siswa Terverifikasi</div></div></div>
        </div>
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Program persiapan ujian di SCI sangat membantu. Akhirnya lolos ke kampus impian! Materinya lengkap banget dan tutornya super sabar dan profesional!</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Ricky" loading="lazy"><div><div class="testi-name">Ricky Pratama</div><div class="testi-role">Mahasiswa · Persiapan SBMPTN</div><div class="testi-verified">Siswa Terverifikasi</div></div></div>
        </div>
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Kursus akuntansi di SCI sangat bermanfaat untuk tugas kuliah dan persiapan kerja. Tutornya sabar, materi lengkap, dan nilai kuliah naik drastis!</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Dinda" loading="lazy"><div><div class="testi-name">Dinda Lestari</div><div class="testi-role">Mahasiswi · Akuntansi</div><div class="testi-verified">Siswa Terverifikasi</div></div></div>
        </div>
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Anakku yang awalnya kesulitan matematika, sekarang jadi juara kelas! Terima kasih SCI, metode belajarnya benar-benar cocok untuk anak saya.</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Sari" loading="lazy"><div><div class="testi-name">Bunda Sari</div><div class="testi-role">Orang Tua Siswa SD</div><div class="testi-verified">Orang Tua Terverifikasi</div></div></div>
        </div>
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Kursus bahasa Inggris SCI benar-benar mengubah kemampuan saya. Sekarang percaya diri berbicara dengan klien asing. Best investment ever!</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Farhan" loading="lazy"><div><div class="testi-name">Farhan Nugroho</div><div class="testi-role">Profesional · Bahasa Inggris</div><div class="testi-verified">Siswa Terverifikasi</div></div></div>
        </div>
        <div class="testi-card">
          <div class="testi-quote-mark">"</div><div class="testi-stars">★★★★★</div>
          <p class="testi-text">Les privat home visit SCI sangat nyaman. Tutornya datang tepat waktu, materi disesuaikan kebutuhan, dan anak saya semakin semangat belajar!</p>
          <div class="testi-author"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&q=80&auto=format&fit=crop&crop=face" class="testi-av" alt="Ratna" loading="lazy"><div><div class="testi-name">Ibu Ratna</div><div class="testi-role">Orang Tua Siswa SMP</div><div class="testi-verified">Orang Tua Terverifikasi</div></div></div>
        </div>
      </div>
      <div class="hscroll-nav">
        <button class="hs-arrow" onclick="scrollHS('testiScroll',-1)">‹</button>
        <button class="hs-arrow" onclick="scrollHS('testiScroll',1)">›</button>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ GALERI SLIDER + LIGHTBOX ══════════════════ -->
<section class="sec galeri-sec" id="galeri">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Dokumentasi</div>
      <h2 class="sec-h">Galeri <em>Kegiatan</em></h2>
      <p class="sec-p">Momen belajar menyenangkan bersama siswa dan tutor terbaik SCI di seluruh Indonesia.</p>
    </div>
    <div class="hscroll-wrap reveal">
      <div class="hscroll-container" id="galeriScroll">
        <div class="galeri-card" onclick="openLightbox(0)">
          <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80&auto=format&fit=crop" alt="Kelas Belajar Intensif" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Kelas Belajar Intensif</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(1)">
          <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80&auto=format&fit=crop" alt="Sesi Les Privat" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Sesi Les Privat</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(2)">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80&auto=format&fit=crop" alt="Belajar Kelompok" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Belajar Kelompok</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(3)">
          <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80&auto=format&fit=crop" alt="Kursus Komputer" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Kursus Komputer</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(4)">
          <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80&auto=format&fit=crop" alt="Kelas Online" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Kelas Online</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(5)">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&q=80&auto=format&fit=crop" alt="Wisuda Siswa" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Wisuda Siswa</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(6)">
          <img src="https://images.unsplash.com/photo-1476357471311-43c0db9fb2b4?w=600&q=80&auto=format&fit=crop" alt="Perayaan Prestasi" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Perayaan Prestasi</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
        <div class="galeri-card" onclick="openLightbox(7)">
          <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&q=80&auto=format&fit=crop" alt="Kelas SMP" loading="lazy">
          <div class="galeri-ov"><div class="galeri-ov-content"><span>Kelas SMP</span><div class="galeri-ov-icon">🔍</div></div></div>
        </div>
      </div>
      <div class="hscroll-nav">
        <button class="hs-arrow" onclick="scrollHS('galeriScroll',-1)">‹</button>
        <button class="hs-arrow" onclick="scrollHS('galeriScroll',1)">›</button>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ TUTOR SLIDER ══════════════════ -->
<section class="sec tutor-sec" id="tutor">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Tim Pengajar</div>
      <h2 class="sec-h">Tutor <em>Terbaik</em> Kami</h2>
      <p class="sec-p">Dilatih secara profesional dan berpengalaman di bidangnya masing-masing untuk memberikan hasil terbaik bagi setiap siswa.</p>
    </div>
    <div class="hscroll-wrap reveal">
      <div class="hscroll-container" id="tutorScroll">
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Anisa" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Ms. Anisa Putri</div><div class="tutor-subj">Matematika</div>
          <div class="tutor-rating">★ 4.9</div><div class="tutor-exp">7 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Budi" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Mr. Budi Santoso</div><div class="tutor-subj">Fisika</div>
          <div class="tutor-rating">★ 4.8</div><div class="tutor-exp">9 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Cindy" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Ms. Cindy Lestari</div><div class="tutor-subj">Bahasa Inggris</div>
          <div class="tutor-rating">★ 4.9</div><div class="tutor-exp">6 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Dimas" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Mr. Dimas Arif</div><div class="tutor-subj">Akuntansi</div>
          <div class="tutor-rating">★ 4.8</div><div class="tutor-exp">8 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Rina" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Ms. Rina Wulandari</div><div class="tutor-subj">Kimia</div>
          <div class="tutor-rating">★ 4.9</div><div class="tutor-exp">6 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1544717305-2782549b5136?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Hendra" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Mr. Hendra Putra</div><div class="tutor-subj">Biologi</div>
          <div class="tutor-rating">★ 4.7</div><div class="tutor-exp">5 Tahun Pengalaman</div>
        </div>
        <div class="tutor-card">
          <div class="tutor-img-wrap"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&q=80&auto=format&fit=crop&crop=face" class="tutor-img" alt="Maya" loading="lazy"><div class="tutor-badge">★</div></div>
          <div class="tutor-name">Ms. Maya Sari</div><div class="tutor-subj">Bahasa Jepang</div>
          <div class="tutor-rating">★ 4.9</div><div class="tutor-exp">4 Tahun Pengalaman</div>
        </div>
      </div>
      <div class="hscroll-nav">
        <button class="hs-arrow" onclick="scrollHS('tutorScroll',-1)">‹</button>
        <button class="hs-arrow" onclick="scrollHS('tutorScroll',1)">›</button>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ FAQ + KONTAK ══════════════════ -->
<section class="sec faq-sec" id="faq-kontak">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Bantuan &amp; Kontak</div>
      <h2 class="sec-h">Pertanyaan &amp; <em>Hubungi Kami</em></h2>
      <p class="sec-p">Punya pertanyaan atau ingin bergabung? Kami siap membantu Anda kapan saja.</p>
    </div>
    <div class="faq-contact-grid reveal">
      <div class="faq-list">
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Bagaimana cara mendaftar di SCI? <span class="faq-ico">+</span></div>
          <div class="faq-a">Pendaftaran sangat mudah! Hubungi kami via WhatsApp, isi formulir online di website ini, atau kunjungi cabang terdekat. Tim kami akan menghubungi Anda dalam 1×24 jam.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Apakah bisa datang ke rumah? <span class="faq-ico">+</span></div>
          <div class="faq-a">Ya! Layanan home visit tersedia di seluruh kota. Tutor kami siap datang ke rumah Anda dengan jadwal yang fleksibel sesuai kenyamanan Anda.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Jenjang apa saja yang dilayani? <span class="faq-ico">+</span></div>
          <div class="faq-a">Kami melayani dari TK, SD, SMP, SMA, Mahasiswa, hingga Umum &amp; Karyawan. Semua jenjang tersedia dengan kurikulum yang sesuai.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Berapa biaya les privat di SCI? <span class="faq-ico">+</span></div>
          <div class="faq-a">Biaya bervariasi tergantung jenjang, mata pelajaran, dan lokasi. Hubungi kami untuk mendapatkan informasi harga terbaik yang sesuai budget Anda.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Apakah ada garansi hasil belajar? <span class="faq-ico">+</span></div>
          <div class="faq-a">Kami memberikan jaminan evaluasi berkala dan laporan perkembangan belajar setiap bulan. Jika tidak ada peningkatan, kami siap melakukan penyesuaian metode pembelajaran.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Bagaimana sistem pembayaran di SCI? <span class="faq-ico">+</span></div>
          <div class="faq-a">Pembayaran dapat dilakukan per sesi, per bulan, atau per paket. Tersedia transfer bank, e-wallet (GoPay, OVO, Dana), dan tunai di cabang.</div>
        </div>
      </div>
      <div>
        <div class="contact-box">
          <div class="contact-box-title">Kirim Pesan 📩</div>
          <div class="contact-box-sub">Isi form di bawah ini, kami akan segera menghubungi Anda.</div>
          <div class="f-row">
            <div class="f-group"><label>Nama Lengkap</label><input type="text" placeholder="Nama Anda" id="inp-nama"></div>
            <div class="f-group"><label>No. WhatsApp</label><input type="text" placeholder="08xxxxxxxxxx" id="inp-wa"></div>
          </div>
          <div class="f-row">
            <div class="f-group"><label>Email</label><input type="email" placeholder="email@gmail.com" id="inp-email"></div>
            <div class="f-group"><label>Kota / Cabang</label>
              <select id="inp-kota">
                <option value="">Pilih kota</option>
                <option>Medan</option><option>Jakarta</option><option>Bandung</option><option>Surabaya</option>
                <option>Pekanbaru</option><option>Palembang</option><option>Jambi</option><option>Aceh</option><option>Makassar</option>
              </select>
            </div>
          </div>
          <div class="f-group" style="margin-bottom:22px"><label>Pesan / Kebutuhan Anda</label><textarea placeholder="Ceritakan kebutuhan belajar Anda..." id="inp-pesan"></textarea></div>
          <button class="btn-submit" onclick="submitForm()">Kirim Pesan 🚀</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════ CABANG ══════════════════ -->
<section class="sec cabang-sec" id="cabang">
  <div class="sec-inner">
    <div class="centered">
      <div class="sec-tag">Hadir di Seluruh Indonesia</div>
      <h2 class="sec-h">Cabang SCI <em>Seluruh Indonesia</em></h2>
      <p class="sec-p" style="color:var(--muted)">Dengan 150+ cabang di berbagai kota, SCI selalu dekat dengan Anda dan keluarga.</p>
    </div>
    <div class="cabang-grid reveal">
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Medan" loading="lazy"></div><div class="cabang-info"><h3>Medan</h3><p>Jasa Les Privat Medan</p><button class="cabang-btn">Lihat Detail</button></div></div>
<div class="cabang-card">
  <div class="cabang-img-wrap">
    <img src="https://images.unsplash.com/photo-1581922819941-6ab31ab79afc?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Pekanbaru" loading="lazy">
  </div>
  <div class="cabang-info">
    <h3>Pekanbaru</h3>
    <p>Jasa Les Privat Pekanbaru</p>
    <a href="lesprivatpekanbaru">
      <button class="cabang-btn">Lihat Detail</button>
    </a>
  </div>
</div>      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Palembang" loading="lazy"></div><div class="cabang-info"><h3>Palembang</h3><p>Jasa Les Privat Palembang</p><button class="cabang-btn">Lihat Detail</button></div></div>
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1564596823821-79b335a76a82?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Aceh" loading="lazy"></div><div class="cabang-info"><h3>Aceh</h3><p>Jasa Les Privat Aceh</p><button class="cabang-btn">Lihat Detail</button></div></div>
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1529016977882-5017d69f43da?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Jakarta" loading="lazy"></div><div class="cabang-info"><h3>Jakarta</h3><p>Jasa Les Privat Jakarta</p><button class="cabang-btn">Lihat Detail</button></div></div>
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1568632234157-ce7aecd03d0d?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Bandung" loading="lazy"></div><div class="cabang-info"><h3>Bandung</h3><p>Jasa Les Privat Bandung</p><button class="cabang-btn">Lihat Detail</button></div></div>
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1556001934-b7f70a99c11c?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Surabaya" loading="lazy"></div><div class="cabang-info"><h3>Surabaya</h3><p>Jasa Les Privat Surabaya</p><button class="cabang-btn">Lihat Detail</button></div></div>
      <div class="cabang-card"><div class="cabang-img-wrap"><img src="https://images.unsplash.com/photo-1598257007024-8c61c7e2c72f?w=600&q=80&auto=format&fit=crop" class="cabang-img" alt="Makassar" loading="lazy"></div><div class="cabang-info"><h3>Makassar</h3><p>Jasa Les Privat Makassar</p><button class="cabang-btn">Lihat Detail</button></div></div>
    </div>
  </div>
</section>

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-brand">
          <div class="footer-logo-mark">SCI</div>
          <div class="footer-brand-name"><b>Smart Center Indonesia</b><span>Wujudkan Mimpi, Raih Prestasi</span></div>
        </div>
        <p class="f-desc">Platform pendidikan modern untuk semua jenjang. Dari TK hingga profesional — kami selalu ada untuk mendukung perjalanan belajar Anda.</p>
        <div class="footer-socials">
          <a href="#" class="f-soc">f</a>
          <a href="#" class="f-soc" style="font-size:12px">ig</a>
          <a href="#" class="f-soc" style="font-size:12px">yt</a>
          <a href="#" class="f-soc" style="font-size:12px">tt</a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Navigasi</h4>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#tentang">Tentang Kami</a></li>
          <li><a href="#program">Program</a></li>
          <li><a href="#keunggulan">Keunggulan</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#tutor">Tutor</a></li>
          <li><a href="#faq-kontak">FAQ</a></li>
          <li><a href="#cabang">Cabang</a></li>
          <li><a href="#faq-kontak">Kontak</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Kontak</h4>
        <div class="f-contact-row"><span class="f-contact-ico">📞</span><span>+62 812-3456-7890</span></div>
        <div class="f-contact-row"><span class="f-contact-ico">📧</span><span>info@smartcenterindonesia.com</span></div>
        <div class="f-contact-row"><span class="f-contact-ico">🕐</span><span>Senin–Sabtu (08.00–20.00)</span></div>
        <div class="f-contact-row"><span class="f-contact-ico">📍</span><span>150+ Cabang di Indonesia</span></div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2025 Smart Center Indonesia (SCI). All Rights Reserved.</span>
      <span>Made with ❤️ for Indonesian Education</span>
    </div>
  </div>
</footer>

<script>
// ══ NAV SCROLL
const navbar=document.getElementById('navbar')
window.addEventListener('scroll',()=>{navbar.classList.toggle('scrolled',window.scrollY>60)})

// ══ SCROLL REVEAL
const io=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');io.unobserve(e.target)}})
},{threshold:.06})
document.querySelectorAll('.reveal').forEach(r=>io.observe(r))

// ══ NOTIF
setTimeout(()=>{document.getElementById('notif').style.display='flex'},2000)
function closeNotif(){const n=document.getElementById('notif');n.classList.add('hide');setTimeout(()=>n.style.display='none',400)}
setTimeout(closeNotif,7500)

// ══ MOBILE MENU
function toggleMenu(){
  const m=document.getElementById('mobileMenu'),b=document.getElementById('hamburger')
  m.classList.toggle('open');b.classList.toggle('open')
  document.body.style.overflow=m.classList.contains('open')?'hidden':''
  m.style.display=m.classList.contains('open')?'flex':''
}
function closeMenu(){
  const m=document.getElementById('mobileMenu'),b=document.getElementById('hamburger')
  m.classList.remove('open');b.classList.remove('open')
  document.body.style.overflow=''
  setTimeout(()=>{if(!m.classList.contains('open'))m.style.display=''},350)
}

// ══ FAQ
function toggleFaq(el){const was=el.classList.contains('open');document.querySelectorAll('.faq-item').forEach(f=>f.classList.remove('open'));if(!was)el.classList.add('open')}

// ══ JENJANG
function toggleJenjang(card){const was=card.classList.contains('open');document.querySelectorAll('.jenjang-card').forEach(c=>c.classList.remove('open'));if(!was)card.classList.add('open')}

// ══ PROGRAM
function toggleProg(card){const was=card.classList.contains('open');document.querySelectorAll('.prog-card').forEach(c=>c.classList.remove('open'));if(!was)card.classList.add('open')}

// ══ FORM
function submitForm(){
  const nama=document.getElementById('inp-nama').value.trim()
  const wa=document.getElementById('inp-wa').value.trim()
  if(!nama||!wa){
    const btn=document.querySelector('.btn-submit')
    btn.style.background='linear-gradient(135deg,#E11D48,#F43F5E)'
    setTimeout(()=>{btn.style.background='linear-gradient(135deg,#D97706,#FCD34D)'},600)
    alert('Mohon isi nama dan nomor WhatsApp terlebih dahulu.')
    return
  }
  document.getElementById('modal').classList.add('show')
  ;['inp-nama','inp-wa','inp-email','inp-pesan'].forEach(id=>document.getElementById(id).value='')
  document.getElementById('inp-kota').value=''
}
function closeModal(){document.getElementById('modal').classList.remove('show')}
document.getElementById('modal').addEventListener('click',function(e){if(e.target===this)closeModal()})

// ══ HERO SLIDER
let heroIdx=0
const heroSlides=document.querySelectorAll('.hero-slide')
const heroDots=document.querySelectorAll('.hero-dot')
let heroTimer=null

function heroGoTo(n){
  heroSlides[heroIdx].classList.remove('active')
  heroDots[heroIdx].classList.remove('active')
  heroIdx=(n+heroSlides.length)%heroSlides.length
  heroSlides[heroIdx].classList.add('active')
  heroDots[heroIdx].classList.add('active')
}
function heroSlide(dir){
  clearInterval(heroTimer)
  heroGoTo(heroIdx+dir)
  startHeroTimer()
}
function startHeroTimer(){heroTimer=setInterval(()=>heroGoTo(heroIdx+1),5000)}
startHeroTimer()

// ══ HORIZONTAL SCROLL (drag + buttons)
function scrollHS(id,dir){
  const el=document.getElementById(id)
  const cardW=el.querySelector(':first-child')?.offsetWidth||320
  el.scrollBy({left:dir*(cardW+22),behavior:'smooth'})
}

// Drag scroll for all hscroll containers
document.querySelectorAll('.hscroll-container').forEach(el=>{
  let isDown=false,startX,scrollLeft
  el.addEventListener('mousedown',e=>{isDown=true;el.classList.add('dragging');startX=e.pageX-el.offsetLeft;scrollLeft=el.scrollLeft})
  el.addEventListener('mouseleave',()=>{isDown=false;el.classList.remove('dragging')})
  el.addEventListener('mouseup',()=>{isDown=false;el.classList.remove('dragging')})
  el.addEventListener('mousemove',e=>{if(!isDown)return;e.preventDefault();const x=e.pageX-el.offsetLeft;el.scrollLeft=scrollLeft-(x-startX)*1.2})
})

// ══ LIGHTBOX
const galleryData=[
  {src:'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1200&q=90&auto=format&fit=crop',cap:'Kelas Belajar Intensif'},
  {src:'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&q=90&auto=format&fit=crop',cap:'Sesi Les Privat'},
  {src:'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&q=90&auto=format&fit=crop',cap:'Belajar Kelompok'},
  {src:'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=1200&q=90&auto=format&fit=crop',cap:'Kursus Komputer'},
  {src:'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1200&q=90&auto=format&fit=crop',cap:'Kelas Online'},
  {src:'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1200&q=90&auto=format&fit=crop',cap:'Wisuda Siswa'},
  {src:'https://images.unsplash.com/photo-1476357471311-43c0db9fb2b4?w=1200&q=90&auto=format&fit=crop',cap:'Perayaan Prestasi'},
  {src:'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=1200&q=90&auto=format&fit=crop',cap:'Kelas SMP'},
]
let lbIdx=0
function openLightbox(i){
  lbIdx=i
  document.getElementById('lb-img').src=galleryData[i].src
  document.getElementById('lb-caption').textContent=galleryData[i].cap
  document.getElementById('lightbox').classList.add('show')
  document.body.style.overflow='hidden'
}
function closeLightbox(){document.getElementById('lightbox').classList.remove('show');document.body.style.overflow=''}
function lbNav(dir){
  lbIdx=(lbIdx+dir+galleryData.length)%galleryData.length
  const img=document.getElementById('lb-img')
  img.style.opacity=0
  setTimeout(()=>{img.src=galleryData[lbIdx].src;document.getElementById('lb-caption').textContent=galleryData[lbIdx].cap;img.style.opacity=1},200)
}
document.getElementById('lb-img').style.transition='opacity .2s'
document.getElementById('lightbox').addEventListener('click',function(e){if(e.target===this)closeLightbox()})
document.addEventListener('keydown',e=>{
  if(!document.getElementById('lightbox').classList.contains('show'))return
  if(e.key==='Escape')closeLightbox()
  if(e.key==='ArrowLeft')lbNav(-1)
  if(e.key==='ArrowRight')lbNav(1)
})

// ══ CARI GURU
function cariGuru(){
  const kota=document.getElementById('cg-kota').value
  const mapel=document.getElementById('cg-mapel').value
  const metode=document.getElementById('cg-metode').value
  const parts=[]
  if(kota)parts.push('di '+kota)
  if(mapel)parts.push('mata pelajaran '+mapel)
  if(metode)parts.push('metode '+metode)
  const msg=parts.length
    ?'Mencarikan guru terbaik '+parts.join(', ')+' untuk Anda...'
    :'Menampilkan semua guru terbaik SCI...'
  alert('🔍 '+msg+'\n\nTim SCI akan menghubungi Anda dalam 1 jam melalui WhatsApp!')
}
</script>
</body>
</html>