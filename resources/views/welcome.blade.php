<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT. Gosyen Polinator Indonesia - Konsultasi Bisnis, Audit, Laporan Keuangan, dan Mentoring Perusahaan.">
    <title>PT. Gosyen Polinator Indonesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="page-bg"></div>

    <header class="site-header" data-header>
        <div class="container nav-wrap">
            <a href="#home" class="brand">GOSYEN<span>.</span></a>
            <nav class="main-nav" data-nav>
                <a href="#about">Tentang</a>
                <a href="#services">Layanan</a>
                <a href="#clients">Klien</a>
                <a href="#process">Proses</a>
            </nav>
            <a href="#contact" class="btn btn-small">Konsultasi</a>
            <button class="menu-toggle" data-menu-toggle aria-label="Toggle menu">Menu</button>
        </div>
    </header>

    <main id="home">
        <section class="hero section">
            <div class="container hero-grid">
                <div class="hero-copy reveal">
                    <p class="eyebrow">PT. Gosyen Polinator Indonesia</p>
                    <h1>Mitra Strategis untuk Pertumbuhan Bisnis yang Terukur</h1>
                    <p>
                        Gosyen hadir sebagai mitra yang kuat dan terpercaya dalam Konsultasi Bisnis, Audit,
                        Laporan Keuangan, dan Mentoring Perusahaan. Kami menggabungkan pendekatan personal
                        dengan ketajaman analisis untuk mendorong bisnis Anda tumbuh berkelanjutan.
                    </p>
                    <div class="hero-actions">
                        <a href="#services" class="btn">Lihat Layanan</a>
                        <a href="#clients" class="btn btn-ghost">Klien Kami</a>
                    </div>
                </div>
                <div class="hero-panel reveal" data-tilt>
                    <div class="hero-orb hero-orb-a"></div>
                    <div class="hero-orb hero-orb-b"></div>
                    <div class="metric-card" data-counter="120">0<span>+</span><small>Company Growth Projects</small></div>
                    <div class="metric-card" data-counter="98">0<span>%</span><small>Client Retention</small></div>
                    <div class="metric-card" data-counter="14">0<span>+</span><small>Sector Expertise</small></div>
                </div>
            </div>
        </section>

        <section id="about" class="section">
            <div class="container about-grid">
                <div class="reveal">
                    <p class="eyebrow">Tentang Gosyen</p>
                    <h2>Lebih dari Penyedia Jasa, Kami Partner Jangka Panjang Anda</h2>
                </div>
                <div class="reveal">
                    <p>
                        Sejak berdiri, Gosyen telah menjadi mitra penting bagi perusahaan yang sedang berkembang
                        hingga organisasi besar yang telah mapan. Tim ahli kami membantu klien mengoptimalkan strategi,
                        meningkatkan efisiensi operasional, dan memastikan kepatuhan terhadap regulasi.
                    </p>
                    <p>
                        Kami percaya bahwa solusi terbaik lahir dari pemahaman mendalam terhadap karakter industri
                        dan tantangan spesifik tiap perusahaan. Itulah mengapa pendekatan kami selalu personal,
                        terukur, dan relevan terhadap tujuan bisnis Anda.
                    </p>
                </div>
            </div>
        </section>

        <section id="services" class="section">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">What We Serve</p>
                    <h2>Menu Layanan Profesional</h2>
                </div>

                <div class="service-tabs reveal" data-tabs>
                    <button class="tab active" data-service="consulting">Konsultasi Bisnis</button>
                    <button class="tab" data-service="audit">Audit</button>
                    <button class="tab" data-service="finance">Laporan Keuangan</button>
                    <button class="tab" data-service="mentoring">Mentoring Perusahaan</button>
                </div>

                <div class="service-panels">
                    <article class="service-panel active reveal" data-panel="consulting">
                        <h3>Konsultasi Bisnis</h3>
                        <p>Strategi pertumbuhan, perbaikan model bisnis, optimalisasi organisasi, dan roadmap ekspansi berbasis data.</p>
                        <ul>
                            <li>Business strategy workshop</li>
                            <li>Operational efficiency blueprint</li>
                            <li>Performance KPI alignment</li>
                        </ul>
                    </article>
                    <article class="service-panel reveal" data-panel="audit">
                        <h3>Audit</h3>
                        <p>Proses audit menyeluruh untuk menjaga akurasi, transparansi, serta kredibilitas keputusan bisnis dan pelaporan.</p>
                        <ul>
                            <li>Internal audit</li>
                            <li>Compliance review</li>
                            <li>Risk diagnostics</li>
                        </ul>
                    </article>
                    <article class="service-panel reveal" data-panel="finance">
                        <h3>Laporan Keuangan</h3>
                        <p>Penyusunan dan analisis laporan yang membantu manajemen memahami performa dan kesehatan bisnis secara jelas.</p>
                        <ul>
                            <li>Financial reporting</li>
                            <li>Cash flow analysis</li>
                            <li>Executive financial summary</li>
                        </ul>
                    </article>
                    <article class="service-panel reveal" data-panel="mentoring">
                        <h3>Mentoring Perusahaan</h3>
                        <p>Pendampingan manajemen untuk memperkuat kepemimpinan, ketahanan bisnis, dan akselerasi eksekusi strategi.</p>
                        <ul>
                            <li>Leadership advisory</li>
                            <li>Founder-to-board mentoring</li>
                            <li>Business sustainability coaching</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="clients" class="section">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Trusted By</p>
                    <h2>Client & Industry Network</h2>
                </div>
                <div class="marquee" data-marquee>
                    <div class="marquee-track">
                        <span>PT Arunika Retail Nusantara</span>
                        <span>Nusadaya Manufacturing Group</span>
                        <span>Atlas Energi Persada</span>
                        <span>Optima Foods Indonesia</span>
                        <span>Sahabat Digital Ventura</span>
                        <span>Urban Konstruksi Mandiri</span>
                        <span>Prima Logistik Nasional</span>
                        <span>Karya Medika Solusindo</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="section">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">How We Work</p>
                    <h2>Pendekatan Kerja yang Terstruktur</h2>
                </div>
                <div class="process-grid">
                    <article class="process-card reveal">
                        <h3>01. Discovery</h3>
                        <p>Mengidentifikasi kondisi bisnis, tantangan, dan peluang spesifik perusahaan Anda.</p>
                    </article>
                    <article class="process-card reveal">
                        <h3>02. Strategic Mapping</h3>
                        <p>Menyusun strategi dan prioritas aksi berbasis target bisnis dan risk profile.</p>
                    </article>
                    <article class="process-card reveal">
                        <h3>03. Execution Support</h3>
                        <p>Mendampingi implementasi dan memastikan setiap inisiatif berjalan efektif.</p>
                    </article>
                    <article class="process-card reveal">
                        <h3>04. Growth Review</h3>
                        <p>Evaluasi hasil secara berkala untuk peningkatan berkelanjutan dan keputusan berikutnya.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="section cta-section">
            <div class="container cta-card reveal">
                <p class="eyebrow">Ready to Scale</p>
                <h2>Bangun Fondasi Bisnis yang Lebih Kuat bersama Gosyen</h2>
                <p>Kami siap menjadi strategic partner Anda untuk keputusan yang presisi, operasional yang sehat, dan pertumbuhan yang berkelanjutan.</p>
                <a href="mailto:hello@gosyen.co.id" class="btn">Book Initial Session</a>
            </div>
        </section>
    </main>
</body>
</html>
