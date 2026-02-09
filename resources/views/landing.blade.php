<!-- resources/views/landing.blade.php -->
<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>I Turniej e-sportowy ZSP Witkowo — CS 1.6</title>

  <style>
    :root{
      --bg:#050608;
      --text:#e8e8e8;
      --muted:#b7b7b7;
      --max:1100px;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: radial-gradient(1200px 600px at 50% 0%, #0e1118 0%, var(--bg) 55%, #030305 100%);
      color:var(--text);
      overflow-x:hidden;
    }

    /* Layout */
    .wrap{max-width:var(--max); margin:0 auto; padding:0 16px;}
    .section{position:relative; padding:48px 0;}
    .divider{display:flex; justify-content:center; margin:34px 0;}
    .divider img{max-width:100%; height:auto; opacity:.95; filter: drop-shadow(0 0 10px rgba(255,200,40,.15));}

    /* Corner lines (decor) */
    .corner{
      position:absolute; inset:auto; pointer-events:none; opacity:.9;
      filter: drop-shadow(0 0 14px rgba(0,255,200,.08));
    }
    .corner.top-right{top:-10px; right:-20px; width:min(520px,60vw);}
    .corner.bottom-left{bottom:-20px; left:-30px; width:min(520px,60vw); transform:scaleX(-1) scaleY(-1);}
    .corner.top-left{top:-10px; left:-20px; width:min(520px,60vw); transform:scaleX(-1);}
    .corner.bottom-right{bottom:-20px; right:-30px; width:min(520px,60vw); transform:scaleY(-1);}

    /* Top bar */
    .topbar{
      display:flex; align-items:center; justify-content:space-between;
      padding:18px 0 10px;
    }
    .brand{display:flex; gap:12px; align-items:center;}
    .brand img{width:48px; height:48px; object-fit:contain;}
    .brand .t1{font-weight:800; letter-spacing:.3px;}
    .brand .t2{color:var(--muted); font-size:13px; margin-top:2px;}
    .nav{
      display:flex; gap:10px; flex-wrap:wrap; justify-content:flex-end;
    }
    .nav a{
      color:#d7d7d7; text-decoration:none; font-size:14px;
      padding:8px 10px; border-radius:10px;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.06);
    }
    .nav a:hover{background: rgba(255,255,255,.07);}

    /* Hero */
    .hero{
      display:grid;
      grid-template-columns: 1.2fr .8fr;
      gap:22px;
      align-items:center;
      padding-top:18px;
    }
    @media (max-width: 900px){
      .hero{grid-template-columns:1fr; }
    }
    .heroCard{
      position:relative;
      padding:24px;
      border-radius:18px;
      background: rgba(0,0,0,.35);
      border:1px solid rgba(255,255,255,.08);
      box-shadow: 0 12px 40px rgba(0,0,0,.55);
      overflow:hidden;
    }
    .kicker{color:#9fdc78; font-weight:700; letter-spacing:.25px;}
    .h1{font-size:36px; line-height:1.06; font-weight:900; margin:10px 0 10px;}
    .sub{color:var(--muted); margin:0 0 18px; font-size:16px; max-width:60ch;}
    .badges{display:flex; gap:10px; flex-wrap:wrap; margin:12px 0 18px;}
    .badge{
      font-size:13px; color:#eaeaea;
      padding:8px 10px; border-radius:999px;
      background: rgba(255,255,255,.05);
      border:1px solid rgba(255,255,255,.08);
    }

    .ctaRow{display:flex; gap:12px; flex-wrap:wrap; margin-top:10px;}
    .btn{
      display:inline-flex; align-items:center; justify-content:center;
      padding:12px 14px; border-radius:14px;
      text-decoration:none; font-weight:800; letter-spacing:.2px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.06);
      color:#f3f3f3;
      min-width: 180px;
    }
    .btn.primary{
      background: linear-gradient(180deg, rgba(175,255,90,.22), rgba(120,255,80,.08));
      border-color: rgba(170,255,80,.35);
      box-shadow: 0 0 0 1px rgba(90,255,120,.08), 0 16px 40px rgba(60,255,140,.10);
    }
    .btn:hover{transform:translateY(-1px); transition:.15s;}
    .poster{
      width:100%;
      border-radius:18px;
      border:1px solid rgba(255,255,255,.10);
      box-shadow: 0 18px 60px rgba(0,0,0,.65);
      overflow:hidden;
      background: rgba(0,0,0,.22);
    }
    .poster img{display:block; width:100%; height:auto;}

    /* Framed blocks */
    .grid3{
      display:grid;
      grid-template-columns: repeat(3, 1fr);
      gap:14px;
    }
    @media (max-width: 900px){ .grid3{grid-template-columns:1fr;} }

    .frameBox{
      position:relative;
      min-height: 190px;
      padding:22px 24px;
      border-radius:18px;
      overflow:hidden;
      background: rgba(0,0,0,.25);
      border:1px solid rgba(255,255,255,.08);
    }
    .frameBox{
    position:relative;
    padding:20px 22px 22px;
    border-radius:18px;
    background: rgba(0,0,0,.25);
    border:1px solid rgba(255,255,255,.08);
    }
    .frameTitle{
    font-weight:900;
    font-size:18px;
    margin:0;
    letter-spacing:.3px;
    }
    .content{
    color:var(--muted);
    line-height:1.55;
    font-size:14px;
    }
    .frameBox .frameImg{
    display:block;
    width:100%;
    max-width:100%;
    height:auto;
    margin:10px 0 14px;
    filter: drop-shadow(0 8px 20px rgba(0,0,0,.45));
    }
    .frameBox .content{position:relative; z-index:2;}
    .frameTitle{font-weight:900; font-size:18px; margin:0 0 10px;}
    .frameText{margin:0; color:var(--muted); line-height:1.55; font-size:14px;}
    .list{margin:10px 0 0; padding-left:18px; color:var(--muted); line-height:1.6; font-size:14px;}
    .list li{margin:4px 0;}

    /* Split */
    .split{
      display:grid; grid-template-columns: 1fr 1fr; gap:16px; align-items:stretch;
    }
    @media (max-width: 900px){ .split{grid-template-columns:1fr;} }

    /* Footer */
    footer{
      padding:26px 0 40px;
      border-top:1px solid rgba(255,255,255,.08);
      color:var(--muted);
      font-size:13px;
    }
    .mini{
      display:flex; gap:10px; flex-wrap:wrap; align-items:center; justify-content:space-between;
    }

    /* Helpers */
    .anchor{scroll-margin-top:18px;}
    .muted{color:var(--muted);}
    .note{font-size:13px; color:#cfcfcf; opacity:.85;}

    .frameBox{
  position:relative;
  padding:18px;
  border-radius:18px;
  background: rgba(0,0,0,.25);
  border:1px solid rgba(255,255,255,.08);
}

/* HEADER Z RAMKĄ */
.frameHeader{
  position:relative;
  margin:-6px -6px 14px;
  padding:35px 20px;
  overflow:hidden;
  border-radius:14px;
}

.frameHeaderImg {
  max-width: 100%;
  width: 250px;
  margin: auto;
  display: block;
}

/* RAMKA JAKO TŁO */
.frameBg{
  position:absolute;
  top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
  width:100%;
  height:190px;
  object-fit:contain;
  z-index:1;
  pointer-events:none;
  filter: drop-shadow(0 10px 25px rgba(0,0,0,.55));
}

/* TYTUŁ NAD RAMKĄ */
.frameTitle{
  position:relative;
  z-index:2;
  margin:0;
  text-align:center;
  font-weight:900;
  font-size:18px;
  letter-spacing:.4px;
  color:#f5f5f5;
  text-shadow:
    0 0 8px rgba(120,255,160,.25),
    0 2px 10px rgba(0,0,0,.85);
}

/* CONTENT */
.content{
  color:var(--muted);
  font-size:14px;
  line-height:1.55;
}
  </style>
</head>

<body>

  <header class="wrap">
    <div class="topbar">
      <div class="brand">
        <img src="/assets/zsp-logo.png" alt="ZSP Witkowo" />
        <div>
          <div class="t1">I Turniej e-sportowy ZSP Witkowo</div>
          <div class="t2">CS 1.6 • 19 marca 2026 • Witkowo</div>
        </div>
      </div>

      <nav class="nav">
        <a href="#info">Informacje</a>
        <a href="#harmonogram">Harmonogram</a>
        <a href="#zasady">Zasady</a>
        <a href="#kierunki">Kierunki</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="section wrap">
    <!-- dekoracje narożne -->
    <!-- <img class="corner top-right" src="/assets/linie-zielone.png" alt="" />
    <img class="corner bottom-left" src="/assets/linie-niebieskie.png" alt="" /> -->

    <div class="hero">
      <div class="heroCard">
        <div class="kicker">TURNIEJ SZKOLNY / DNI OTWARTE ZSP</div>
        <h1 class="h1">I Turniej E-sportowy — CS 1.6</h1>
        <p class="sub">
          Spotykamy się w ZSP im. Dezyderego Chłapowskiego w Witkowie.<br>
          Gramy na miejscu, w klimacie LAN.<br>
          Wpadaj kibicować albo dołączyć do rozgrywek.
        </p>

        <div class="badges">
          <div class="badge"><b>Data:</b> 18-19.03.2026</div>
          <div class="badge"><b>Start:</b> 9:00</div>
          <div class="badge"><b>Miejsce:</b> sala gimnastyczna</div>
          <div class="badge"><b>Adres:</b> Warszawska 29, 62-230 Witkowo</div>
        </div>

        <div class="ctaRow">
          <a class="btn primary" href="#kontakt">Zgłoś drużynę</a>
          <a class="btn" href="#harmonogram">Zobacz harmonogram</a>
        </div>

        <!-- <p class="note" style="margin-top:14px">
          *W MVP możesz podpiąć link do formularza Google / prostego formularza w Laravelu.
        </p> -->
      </div>

      <div class="poster">
        <img src="/assets/plakat2.png" alt="Plakat turnieju" />
      </div>
    </div>

    <div class="divider">
      <img src="/assets/linia-zolta.png" alt="" />
    </div>
  </section>

  <!-- INFO / 3 BOXES -->
  <section id="info" class="section wrap anchor">
    <!-- <img class="corner top-left" src="/assets/linie-zielone.png" alt="" />
    <img class="corner bottom-right" src="/assets/linie-niebieskie.png" alt="" /> -->

    <div class="grid3">
      <article class="frameBox">
        <div class="frameHeader">
            <img class="frameBg" src="/assets/frame-green.png" alt="" />
            <h3 class="frameTitle">Dla kogo?</h3>
        </div>
        <div class="content">
          <p class="frameText">Uczniowie, absolwenci, zaproszone szkoły i kibice. Atmosfera „LAN-party” + rywalizacja.</p>
          <ul class="list">
            <li>Drużyny 5v5 (CS 1.6)</li>
            <li>Publiczność na miejscu</li>
            <li>Strefa szkoły / kierunki / rekrutacja</li>
          </ul>
        </div>
      </article>

      <article class="frameBox">
        <div class="frameHeader">
          <h3 class="frameTitle">Co dostajesz?</h3>
        <img class="frameBg" src="/assets/frame-blue.png" alt="" />
        </div>
        <div class="content">
          <p class="frameText">Turniej, oprawa, identyfikatory, stanowiska i ranking live.</p>
          <ul class="list">
            <li>Turniej na miarę GamingKings</li>
            <li>System turniejowy</li>
            <li>Wyniki na żywo</li>
            <li>Materiały promocyjne ZSP</li>
          </ul>
        </div>
      </article>

      <article class="frameBox">
        <div class="frameHeader">
          <h3 class="frameTitle">Nagrody / wyróżnienia</h3>
          <img class="frameBg" src="/assets/frame-orange.png" alt="" />
        </div>
        <div class="content">
          <p class="frameText">
            Sponsorzy:
            ZSP Witkowo
            Rada Radziców ZSP Witkowo
            Starostwo Powiatowe Gniezno
            Gmina Witkowo
          </p>
          <ul class="list">
            <li>Medale dla kazdego gracza za 1, 2 i 3 miejsce</li>
            <li>Puchar przechodzni dla najlepszej drużyny</li>
            <li>Upominki rzeczowe (sponsorzy)</li>
            <li>Dyplomy za 1, 2 i 3 miejsce i za udział w turnieju</li>
          </ul>
        </div>
      </article>
    </div>

    <div class="divider">
      <img src="/assets/linia-zolta.png" alt="" />
    </div>
  </section>

  <!-- HARMONOGRAM + ZASADY (split) -->
  <section class="section wrap">
    <div class="split">
      <article id="harmonogram" class="frameBox anchor" style="min-height:260px;">
        <div class="frameHeader">
          <h3 class="frameTitle">Harmonogram</h3>
        <img class="frameBg" src="/assets/frame-blue.png" alt="" />
        </div>
        <div class="content">
          <p class="frameText">
            Ostateczny Harmonogram bedzie dostępny po potwierdzeniu przyjazdu przez szkoły
          </p>
          <p class="frameText">
            18.03.2026
          </p>
          <ul class="list">
            <li>09:00 — Przyjazd SP Niechanowo</li>
            <li>09:10 — start / odprawa</li>
            <li>09:30 — faza grupowa / przedstawienie kierunków kształcenia</li>
            <li>11:00 — Przyjazd SP Powidź</li>
            <li>11:10 — start / odprawa</li>
            <li>11:30 — faza grupowa / przedstawienie kierunków kształcenia</li>
            <li>13:00 — Przyjazd SP Mielżyn</li>
            <li>13:10 — start / odprawa</li>
            <li>13:30 — faza grupowa / przedstawienie kierunków kształcenia</li>
          </ul>
          <p class="frameText">
            19.03.2026
          </p>
          <ul class="list">
            <li>09:00 — Przyjazd SP1</li>
            <li>09:10 — start / odprawa</li>
            <li>09:30 — faza grupowa / przedstawienie kierunków kształcenia</li>
            <li>11:00 — Przyjazd SP2</li>
            <li>11:10 — start / odprawa</li>
            <li>11:30 — faza grupowa / przedstawienie kierunków kształcenia</li>
            <li>13:00 — playoffy</li>
            <li>13:30 — finał</li>
            <li>14:00 — wręczenie nagród</li>
          </ul>
        </div>
      </article>

      <article id="zasady" class="frameBox anchor" style="min-height:260px;">
        <div class="frameHeader">
          <h3 class="frameTitle">Zasady (skrót)</h3>
        <img class="frameBg" src="/assets/frame-green.png" alt="" />
        </div>
        <div class="content">
          <!-- <p class="frameText">W MVP pokaż tylko najważniejsze punkty, pełny regulamin jako PDF później.</p> -->
          <ul class="list">
            <li>Fair play + kultura</li>
            <li>Zakaz cheatów / zakaz modyfikacji</li>
            <li>Decyzja sędziego ostateczna</li>
            <li>Spóźnienia = walkower (5min)</li>
          </ul>
        </div>
      </article>
    </div>

    <div class="divider">
      <img src="/assets/linia-zolta.png" alt="" />
    </div>
  </section>

  <!-- TEAMS (optional) -->
  <section class="section wrap">
    <!-- <img class="corner top-right" src="/assets/linie-niebieskie.png" alt="" />
    <img class="corner bottom-left" src="/assets/linie-zielone.png" alt="" /> -->

    <div class="split">
      <article class="frameBox" style="min-height:260px;">
        <div class="frameHeader">
          <h3 class="frameTitle">Drużyny</h3>
        <img class="frameBg" src="/assets/frame-orange.png" alt="" />
        </div>
        <div class="content">
          <!-- <p class="frameText">W MVP możesz wrzucić listę zgłoszonych ekip „na sztywno” lub z bazy.</p> -->
          <ul class="list">
            <li>Team #1 — (placeholder)</li>
            <li>Team #2 — (placeholder)</li>
            <li>Team #3 — (placeholder)</li>
            <li>…</li>
          </ul>
        </div>
      </article>

      <article class="frameBox" style="min-height:260px;">
        <div class="frameHeader">
          <h3 class="frameTitle">Tryby / Strony</h3>
        <img class="frameBg" src="/assets/frame-blue.png" alt="" />
        </div>
        <div class="content">
          <!-- <p class="frameText">Opcjonalnie: grafiki frakcji (Twoje PNG terrorysta/antyterrorysta).</p> -->
          <div style="display:flex; gap:12px; flex-wrap:wrap; align-items:flex-end; margin-top:12px;">
            <img src="/assets/terrorysta.png" alt="Terrorysta" style="width:120px; height:auto; filter: drop-shadow(0 10px 20px rgba(0,0,0,.45));" />
            <img src="/assets/antyterrorysta.png" alt="Antyterrorysta" style="width:120px; height:auto; filter: drop-shadow(0 10px 20px rgba(0,0,0,.45));" />
          </div>
          <!-- <p class="note" style="margin-top:10px;">*Jeśli nie używasz tych PNG, usuń dwa obrazki.</p> -->
        </div>
      </article>
    </div>

    <div class="divider">
      <img src="/assets/linia-zolta.png" alt="" />
    </div>
  </section>

  <section id="kierunki" class="section wrap anchor">

  <div class="frameHeader" style="margin-bottom:24px;">
    <img class="frameBg" src="/assets/frame-green.png" alt="">
    <h2 class="frameTitle" style="font-size:22px;">Nasze kierunki</h2>
  </div>

  <div class="split">

    <!-- TECHNIK INFORMATYK -->
    <article class="frameBox">
      <img class="frameHeaderImg" src="/assets/technik-informatyk.png" alt="">
      <div class="frameHeader">
        <img class="frameBg" src="/assets/frame-blue.png" alt="">
        <h3 class="frameTitle">Technik informatyk</h3>
      </div>
      <div class="content">
        <p class="frameText">
          Sieci komputerowe, systemy operacyjne, programowanie i administracja IT.
        </p>
        <ul class="list">
          <li>INF.02 – Administracja i eksploatacja systemów komputerowych, urządzeń peryferyjnych i lokalnych sieci komputerowych</li>
          <li>INF.03 – Tworzenie i administrowanie stronami i aplikacjami internetowymi oraz bazami danych</li>
        </ul>
      </div>
    </article>

    <!-- TECHNIK STYLISTA -->
    <article class="frameBox">
      <img class="frameHeaderImg" src="/assets/technik-stylista.png" alt="">
      <div class="frameHeader">
        <img class="frameBg" src="/assets/frame-green.png" alt="">
        <h3 class="frameTitle">Technik stylista</h3>
      </div>
      <div class="content">
        <p class="frameText">
          Moda, projektowanie ubioru, stylizacja i kreowanie wizerunku.
        </p>
        <ul class="list">
          <li>MOD.03 – Projektowanie i wytwarzanie wyrobów odzieżowych</li>
          <li>MOD.15 – Stylizacja ubioru i kreacja wizerunku</li>
        </ul>
      </div>
    </article>

    <!-- TECHNIK LOGISTYK -->
    <article class="frameBox">
      <img class="frameHeaderImg" src="/assets/technik-logistyk.png" alt="">
      <div class="frameHeader">
        <img class="frameBg" src="/assets/frame-blue.png" alt="">
        <h3 class="frameTitle">Technik logistyk</h3>
      </div>
      <div class="content">
        <p class="frameText">
          Transport, magazynowanie, planowanie dostaw i nowoczesna logistyka.
        </p>
        <ul class="list">
          <li>SPL.01 – Obsługa magazynów</li>
          <li>SPL.04 – Organizacja transportu</li>
        </ul>
      </div>
    </article>

    <!-- TECHNIK ŻYWIENIA -->
    <article class="frameBox">
      <img class="frameHeaderImg" src="/assets/technik-zywienia-i-uslug-gastronomicznych.png" alt="">
      <div class="frameHeader">
        <img class="frameBg" src="/assets/frame-orange.png" alt="">
        <h3 class="frameTitle">Technik żywienia<br>i usług gastronomicznych</h3>
      </div>
      <div class="content">
        <p class="frameText">
          Gastronomia, dietetyka, obsługa konsumenta i organizacja usług żywieniowych.
        </p>
        <ul class="list">
          <li>HGT.02 – Przygotowanie i wydawanie dań</li>
          <li>HGT.12 – Organizacja żywienia i usług gastronomicznych</li>
        </ul>
      </div>
    </article>

    <!-- SZKOŁA BRANŻOWA -->
    <article class="frameBox">
      <img class="frameHeaderImg" src="/assets/szkola-branzowa.png" alt="">
      <div class="frameHeader">
        <img class="frameBg" src="/assets/frame-green.png" alt="">
        <h3 class="frameTitle">Szkoła branżowa<br>I stopnia</h3>
      </div>
      <div class="content">
        <p class="frameText">
          Nauka zawodu, praktyczne umiejętności i szybkie wejście na rynek pracy.
        </p>
        <ul class="list">
          <li>Zajęcia praktyczne</li>
          <li>Współpraca z pracodawcami</li>
          <li>Przygotowanie do zawodu</li>
        </ul>
      </div>
    </article>

  </div>

</section>


  <!-- CONTACT -->
  <section id="kontakt" class="section wrap anchor">
    <article class="frameBox" style="min-height:240px;">
        <div class="frameHeader">
        <h3 class="frameTitle">Kontakt / Zgłoszenia</h3>
      <img class="frameBg" src="/assets/frame-green.png" alt="" />
        </div>
      <div class="content">
        <p class="frameText">
          UWAGA! NIE MA LIMITU DRUŻYN NA SZKOŁE.<br/>
          Każda szkoła może zglosić tyle drużyn ilu ma uczniów
        </p>

        <div class="badges" style="margin-top:14px;">
          <div class="badge"><b>Email:</b> turniej@zspwitkowo.pl</div>
          <div class="badge"><b>Adres:</b> Warszawska 29, 62-230 Witkowo</div>
        </div>

        <div class="ctaRow">
          <a class="btn primary" href="mailto:turniej@zspwitkowo.pl">Napisz mail</a>
          <a class="btn" href="#info">Wróć do góry</a>
        </div>

        <!-- <p class="note" style="margin-top:12px;">
          Tip: jak tylko postawisz domenę, dodaj rekordy SPF/DKIM dla maila — inaczej zgłoszenia będą wpadać do spamu.
        </p> -->
      </div>
    </article>
  </section>

  <footer class="wrap">
    <div class="mini">
      <div>© {{ date('Y') }} ZSP Witkowo — I Turniej e-sportowy</div>
      <!-- <div class="muted">MVP: Laravel + Blade • Docelowo: panel turnieju + ranking live (Socket.IO)</div> -->
    </div>
  </footer>

</body>
</html>
