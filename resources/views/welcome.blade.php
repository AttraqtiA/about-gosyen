<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gosyen Group - PT. Gosyen Polinator Indonesia & CV. Miracle Office Solution. Layanan Administrasi.">
    <title>Gosyen Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/GosyenLogo-removebg-preview.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/GosyenLogo-removebg-preview.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen overflow-x-hidden bg-slate-950 text-slate-100 antialiased">
    <div class="pointer-events-none fixed inset-0 -z-20 bg-[radial-gradient(circle_at_85%_8%,rgba(31,54,90,0.65)_0%,transparent_32%),radial-gradient(circle_at_10%_92%,rgba(15,95,97,0.55)_0%,transparent_30%)]"></div>
    <div class="pointer-events-none fixed inset-0 -z-10 opacity-30 [background-image:linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] [background-size:48px_48px]"></div>

    <header class="site-header sticky top-0 z-30 border-b border-transparent bg-slate-950/60 backdrop-blur-md transition" data-header>
        <div class="mx-auto flex min-h-[74px] w-[min(1160px,calc(100%-2.4rem))] items-center justify-between gap-4">
            <a href="#home" class="inline-flex items-center gap-3">
                <span class="inline-flex h-11 w-11 shrink-0 items-center justify-center overflow-hidden rounded-xl border border-white/20 bg-white/5 p-1.5">
                    <img src="{{ asset('images/GosyenLogo-removebg-preview.png') }}" alt="Logo Gosyen Group" class="h-full w-full object-contain">
                </span>
            </a>

            <nav class="main-nav absolute left-5 right-5 top-[74px] hidden flex-col gap-3 rounded-xl border border-white/15 bg-slate-950/95 p-3 md:static md:flex md:flex-row md:items-center md:gap-6 md:border-0 md:bg-transparent md:p-0" data-nav>
                <a href="#about" data-nav-link class="text-sm text-slate-300 transition hover:text-cyan-300">Tentang</a>
                <a href="#services" data-nav-link class="text-sm text-slate-300 transition hover:text-cyan-300">Layanan</a>
                <a href="#clients" data-nav-link class="text-sm text-slate-300 transition hover:text-cyan-300">Klien</a>
                <a href="#process" data-nav-link class="text-sm text-slate-300 transition hover:text-cyan-300">Proses</a>
            </nav>

            <a href="#contact" class="hidden rounded-full bg-cyan-300 px-4 py-2 text-sm font-bold text-slate-900 shadow-[0_10px_24px_rgba(53,190,255,0.24)] transition hover:-translate-y-0.5 md:inline-flex">Konsultasi</a>
            <button class="menu-toggle rounded-full border border-white/15 px-4 py-2 text-sm text-slate-200 md:hidden" data-menu-toggle aria-label="Toggle menu">Menu</button>
        </div>
    </header>

    <main id="home">
        <section class="px-0 pb-20 pt-24 md:pt-28">
            <div class="mx-auto grid w-[min(1160px,calc(100%-2.4rem))] items-center gap-8 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Gosyen Group</p>
                    <h1 class="font-display text-4xl leading-[1.12] tracking-[-0.02em] md:text-5xl xl:text-6xl">Mitra Strategis untuk Pertumbuhan Bisnis yang Terukur</h1>
                    <p class="mt-4 max-w-3xl text-slate-300">
                        Gosyen Group menaungi PT. Gosyen Polinator Indonesia dan CV. Miracle Office Solution
                        sebagai mitra yang kuat dan terpercaya dalam Audit, Accounting, Management, Tax, Human Capital,
                        dan Information Technology. Kami menggabungkan pendekatan personal
                        dengan ketajaman analisis untuk mendorong bisnis Anda tumbuh berkelanjutan.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="#services" class="inline-flex rounded-full bg-cyan-300 px-5 py-3 text-sm font-bold text-slate-900 shadow-[0_10px_24px_rgba(53,190,255,0.24)] transition hover:-translate-y-0.5">Lihat Layanan</a>
                        <a href="#clients" class="inline-flex rounded-full border border-white/15 px-5 py-3 text-sm font-semibold text-slate-100 transition hover:border-cyan-300 hover:text-cyan-300">Klien Kami</a>
                    </div>
                </div>

                <div class="reveal relative min-h-[320px] rounded-3xl border border-white/15 bg-gradient-to-b from-white/15 to-white/5 p-5 md:min-h-[380px]" data-tilt>
                    <div class="pointer-events-none absolute -right-5 -top-5 h-[220px] w-[220px] rounded-full bg-[radial-gradient(circle,rgba(70,200,255,0.55),transparent_70%)]"></div>
                    <div class="pointer-events-none absolute -bottom-5 -left-5 h-[200px] w-[200px] rounded-full bg-[radial-gradient(circle,rgba(37,233,181,0.4),transparent_70%)]"></div>

                    <div class="relative z-10 mb-3 rounded-2xl border border-white/15 bg-slate-950/70 px-4 py-4 font-display text-4xl font-bold text-cyan-100" data-counter="120">0<span class="text-emerald-300">+</span><small class="mt-1 block text-xs font-medium text-slate-400">Company Growth Projects</small></div>
                    <div class="relative z-10 mb-3 rounded-2xl border border-white/15 bg-slate-950/70 px-4 py-4 font-display text-4xl font-bold text-cyan-100" data-counter="98">0<span class="text-emerald-300">%</span><small class="mt-1 block text-xs font-medium text-slate-400">Client Retention</small></div>
                    <div class="relative z-10 rounded-2xl border border-white/15 bg-slate-950/70 px-4 py-4 font-display text-4xl font-bold text-cyan-100" data-counter="14">0<span class="text-emerald-300">+</span><small class="mt-1 block text-xs font-medium text-slate-400">Sector Expertise</small></div>
                </div>
            </div>
        </section>

        <section id="about" class="relative py-20">
            <div class="pointer-events-none absolute inset-0 overflow-hidden">
                <img src="https://bradfordjacobs.com/wp-content/uploads/2023/06/Business-Consulting-Services.png" alt="" aria-hidden="true" class="absolute -right-24 top-8 h-[420px] w-[620px] object-cover opacity-15 mix-blend-screen [mask-image:linear-gradient(to_left,black,transparent)]">
            </div>
            <div class="relative mx-auto grid w-[min(1160px,calc(100%-2.4rem))] items-start gap-6 lg:grid-cols-[0.95fr_1.05fr]">
                <div class="reveal">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Tentang Gosyen Group</p>
                    <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Lebih dari Penyedia Jasa, Kami Partner Jangka Panjang Anda</h2>
                </div>
                <div class="reveal space-y-4 text-slate-300">
                    <p>
                        Sejak berdiri, Gosyen Group telah menjadi mitra penting bagi perusahaan yang sedang berkembang
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

        <section id="vision-mission" class="py-20">
            <div class="mx-auto w-[min(1160px,calc(100%-2.4rem))]">
                <div class="reveal mb-8">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Vision & Mission</p>
                    <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Arah Strategis Gosyen Group</h2>
                </div>

                <div class="grid gap-6 xl:grid-cols-2">
                    <article class="reveal rounded-3xl border border-white/15 bg-white/5 p-6 md:p-7">
                        <div class="mb-4 flex items-end justify-between gap-3">
                            <div>
                                <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Vision</p>
                                <h3 class="font-display text-2xl">G.O.S.Y.E.N</h3>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900/40" data-auto-carousel data-interval="3000" data-carousel-accent="cyan">
                            <div class="min-h-[270px] p-5 md:min-h-[300px] md:p-6">
                                <article class="vision-slide transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">G</p>
                                    <h4 class="mt-4 font-display text-2xl">Growth Partnership</h4>
                                    <p class="mt-3 text-slate-300">Kemitraan strategis untuk pertumbuhan bisnis yang terukur dan berkelanjutan.</p>
                                </article>
                                <article class="vision-slide hidden transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">O</p>
                                    <h4 class="mt-4 font-display text-2xl">Ownership & Accountability</h4>
                                    <p class="mt-3 text-slate-300">Tanggung jawab penuh atas setiap pekerjaan dan hasil yang diberikan.</p>
                                </article>
                                <article class="vision-slide hidden transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">S</p>
                                    <h4 class="mt-4 font-display text-2xl">Service Excellence</h4>
                                    <p class="mt-3 text-slate-300">Layanan responsif, solutif, dan berorientasi pada kebutuhan klien.</p>
                                </article>
                                <article class="vision-slide hidden transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">Y</p>
                                    <h4 class="mt-4 font-display text-2xl">Youth Professional Excellence</h4>
                                    <p class="mt-3 text-slate-300">Didukung oleh profesional muda yang adaptif, progresif, dan memahami dinamika bisnis generasi modern.</p>
                                </article>
                                <article class="vision-slide hidden transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">E</p>
                                    <h4 class="mt-4 font-display text-2xl">Ethics & Integrity</h4>
                                    <p class="mt-3 text-slate-300">Menjunjung tinggi kejujuran, kepatuhan, dan profesionalisme.</p>
                                </article>
                                <article class="vision-slide hidden transition duration-500" data-carousel-item>
                                    <p class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-300 text-2xl font-bold text-slate-900">N</p>
                                    <h4 class="mt-4 font-display text-2xl">Never Stop Improving</h4>
                                    <p class="mt-3 text-slate-300">Komitmen untuk terus berkembang dan meningkatkan kualitas layanan.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>

                    <article class="reveal rounded-3xl border border-white/15 bg-white/5 p-6 md:p-7">
                        <div class="mb-4 flex items-end justify-between gap-3">
                            <div>
                                <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Mission</p>
                                <h3 class="font-display text-2xl">5 Strategic Pillars</h3>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900/40" data-auto-carousel data-interval="3000" data-carousel-accent="emerald">
                            <div class="min-h-[270px] p-5 md:min-h-[300px] md:p-6">
                                <article class="mission-slide transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Pillar 1</p>
                                    <p class="mt-4 text-lg leading-relaxed text-slate-200">Memberikan layanan audit, manajemen, akuntansi, dan perpajakan yang akurat, patuh regulasi, serta bernilai strategis bagi pertumbuhan klien.</p>
                                </article>
                                <article class="mission-slide hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Pillar 2</p>
                                    <p class="mt-4 text-lg leading-relaxed text-slate-200">Membangun sistem kerja yang terstruktur, terukur, dan berkelanjutan dalam setiap perusahaan klien.</p>
                                </article>
                                <article class="mission-slide hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Pillar 3</p>
                                    <p class="mt-4 text-lg leading-relaxed text-slate-200">Mendampingi klien dalam mengelola risiko, meningkatkan efisiensi, dan menjaga stabilitas bisnis.</p>
                                </article>
                                <article class="mission-slide hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Pillar 4</p>
                                    <p class="mt-4 text-lg leading-relaxed text-slate-200">Mengembangkan profesional muda yang kompeten, adaptif, dan berintegritas untuk mendukung kualitas layanan.</p>
                                </article>
                                <article class="mission-slide hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Pillar 5</p>
                                    <p class="mt-4 text-lg leading-relaxed text-slate-200">Bertumbuh secara seimbang melalui kemitraan jangka panjang dengan klien serta pengembangan tim yang berkelanjutan.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="services" class="py-20">
            <div class="mx-auto w-[min(1160px,calc(100%-2.4rem))]">
                <div class="reveal mb-6">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Divisi Layanan</p>
                    <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Menu Layanan Profesional</h2>
                </div>

                <div class="reveal mb-4 flex flex-wrap gap-2" data-service-tabs>
                    <button class="service-tab rounded-full border border-white/15 px-4 py-2 text-sm text-slate-200 transition hover:border-emerald-300 hover:bg-emerald-300 hover:text-slate-900" data-service-tab="aam">AAM</button>
                    <button class="service-tab rounded-full border border-white/15 px-4 py-2 text-sm text-slate-200 transition hover:border-emerald-300 hover:bg-emerald-300 hover:text-slate-900" data-service-tab="tax">Tax</button>
                    <button class="service-tab rounded-full border border-white/15 px-4 py-2 text-sm text-slate-200 transition hover:border-emerald-300 hover:bg-emerald-300 hover:text-slate-900" data-service-tab="human-capital">Human Capital</button>
                    <button class="service-tab rounded-full border border-white/15 px-4 py-2 text-sm text-slate-200 transition hover:border-emerald-300 hover:bg-emerald-300 hover:text-slate-900" data-service-tab="digital-partner">Digital Partner</button>
                </div>

                <div>
                    <article class="service-panel hidden rounded-3xl border border-white/15 bg-white/10 p-6" data-service-panel="aam">
                        <h3 class="font-display text-2xl">AAM (Audit, Accounting, and Management)</h3>
                        <p class="mt-3 text-slate-300">Divisi AAM membantu Anda melihat kondisi bisnis secara jernih, mengamankan kontrol internal, dan mengambil keputusan manajerial dengan lebih percaya diri.</p>

                        <div class="mt-6 relative overflow-hidden rounded-2xl border border-white/10 bg-slate-950/40" data-auto-carousel data-interval="4800" data-carousel-accent="cyan">
                            <div class="min-h-[320px] p-5 md:min-h-[300px] md:p-6">
                                <article class="transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Internal Audit & Business Diagnostic</p>
                                    <h4 class="mt-3 font-display text-2xl">Audit Administrasi & Kepatuhan</h4>
                                    <p class="mt-3 text-slate-300">Untuk perusahaan dengan dokumen belum rapih atau sedang persiapan audit/investor/bank/pajak, kami menata kelengkapan administrasi dan risiko pajak agar kondisi bisnis lebih aman, terukur, dan siap diperiksa.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Internal Audit & Business Diagnostic</p>
                                    <h4 class="mt-3 font-display text-2xl">Audit Operasional & Proses Kerja</h4>
                                    <p class="mt-3 text-slate-300">Untuk tim yang sibuk tetapi hasil belum maksimal, kami memetakan proses nyata untuk menemukan bottleneck, duplikasi, dan biaya terbuang; hasilnya adalah proses kerja yang lebih ringkas, realistis, dan efisien.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Internal Audit & Business Diagnostic</p>
                                    <h4 class="mt-3 font-display text-2xl">Audit Fraud & Forensik</h4>
                                    <p class="mt-3 text-slate-300">Untuk kasus sensitif, layanan ini bekerja secara diskret, objektif, dan berbasis bukti untuk menghasilkan kronologi kejadian, estimasi potensi kerugian, serta penguatan kontrol internal.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Internal Audit & Business Diagnostic</p>
                                    <h4 class="mt-3 font-display text-2xl">Pembentukan & Pelatihan Tim Audit Internal</h4>
                                    <p class="mt-3 text-slate-300">Untuk perusahaan yang ingin tim audit mandiri, kami membantu dari struktur, pelatihan, simulasi, hingga implementasi awal agar tim siap operasional dan berkelanjutan.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Accounting & Financial Clarity</p>
                                    <h4 class="mt-3 font-display text-2xl">Pembukuan & Laporan Keuangan</h4>
                                    <p class="mt-3 text-slate-300">Layanan ini membuat owner memahami kesehatan bisnis secara praktis melalui pencatatan rapi, rekonsiliasi, dan laporan yang siap dipakai untuk pengambilan keputusan.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Accounting & Financial Clarity</p>
                                    <h4 class="mt-3 font-display text-2xl">Perencanaan Anggaran & Keuangan</h4>
                                    <p class="mt-3 text-slate-300">Kami menyusun anggaran, proyeksi cashflow, dan evaluasi realisasi agar keuangan bisnis tidak berjalan berdasarkan perkiraan, melainkan arah yang jelas dan terkontrol.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>

                    <article class="service-panel hidden rounded-3xl border border-white/15 bg-white/10 p-6" data-service-panel="tax">
                        <h3 class="font-display text-2xl">TAX MANAGEMENT & PROTECTION</h3>
                        <p class="mt-3 text-slate-300">Divisi Tax dirancang untuk menjaga bisnis tetap patuh, menekan risiko, dan melindungi perusahaan melalui strategi pajak yang legal dan terarah.</p>
                        <div class="mt-6 relative overflow-hidden rounded-2xl border border-white/10 bg-slate-950/40" data-auto-carousel data-interval="5000" data-carousel-accent="emerald">
                            <div class="min-h-[320px] p-5 md:min-h-[300px] md:p-6">
                                <article class="transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Tax Management & Protection</p>
                                    <h4 class="mt-3 font-display text-2xl">Kepatuhan Pajak</h4>
                                    <p class="mt-3 text-slate-300">Value: Tenang dari sanksi & denda. Fokus pada hitung-lapor pajak rutin, Coretax, e-Faktur/e-Bupot, serta SPT Masa & Tahunan agar kepatuhan berjalan konsisten dan aman.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Tax Management & Protection</p>
                                    <h4 class="mt-3 font-display text-2xl">Peninjauan Pajak & Penilaian Risiko</h4>
                                    <p class="mt-3 text-slate-300">Value: Tenang dari sanksi & denda. Kami meninjau pelaporan pajak dan menilai risiko sejak awal agar potensi masalah dapat dicegah sebelum menjadi temuan besar.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Tax Management & Protection</p>
                                    <h4 class="mt-3 font-display text-2xl">Konsultasi & Perencanaan Pajak</h4>
                                    <p class="mt-3 text-slate-300">Value: Bayar pajak secukupnya, bukan sebanyak-banyaknya. Layanan mencakup efisiensi pajak legal, pendampingan pemeriksaan, dan dukungan sengketa administratif.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">Tax Management & Protection</p>
                                    <h4 class="mt-3 font-display text-2xl">Audit Pra-Pajak, Pertahanan & Pemulihan</h4>
                                    <p class="mt-3 text-slate-300">Mencakup pre-tax audit, pembetulan, tax defense, negosiasi, hingga business recovery. Unique Value: kombinasi pajak + bisnis + operasional dengan fokus damage control, bukan teori.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>

                    <article class="service-panel hidden rounded-3xl border border-white/15 bg-white/10 p-6" data-service-panel="human-capital">
                        <h3 class="font-display text-2xl">HR SYSTEM & PERFORMANCE</h3>
                        <p class="mt-3 text-slate-300">Divisi Human Capital membangun fondasi tim yang kuat melalui struktur peran, proses kerja, dan sistem kinerja yang objektif serta berkelanjutan.</p>
                        <div class="mt-6 relative overflow-hidden rounded-2xl border border-white/10 bg-slate-950/40" data-auto-carousel data-interval="5000" data-carousel-accent="emerald">
                            <div class="min-h-[320px] p-5 md:min-h-[300px] md:p-6">
                                <article class="transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">HR System & Performance</p>
                                    <h4 class="mt-3 font-display text-2xl">Job Description & Struktur Organisasi</h4>
                                    <p class="mt-3 text-slate-300">Value Utama: setiap karyawan tahu peran dan batas tanggung jawab dengan jelas. Hasilnya adalah struktur organisasi, job description tertulis, dan alur koordinasi yang rapi.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">HR System & Performance</p>
                                    <h4 class="mt-3 font-display text-2xl">Penyusunan SOP</h4>
                                    <p class="mt-3 text-slate-300">Value Utama: cara kerja lebih konsisten dan mudah dikontrol. Kami menyusun SOP operasional, keuangan, administrasi, pajak, dan HR berbasis kondisi nyata perusahaan.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-emerald-300">HR System & Performance</p>
                                    <h4 class="mt-3 font-display text-2xl">KPI & Performance Management</h4>
                                    <p class="mt-3 text-slate-300">Value Utama: penilaian kinerja objektif dan berbasis target. Output utama berupa KPI individu/divisi, sistem evaluasi berkala, dan dasar insentif/evaluasi.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-emerald-300 hover:text-emerald-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>

                    <article class="service-panel hidden rounded-3xl border border-white/15 bg-white/10 p-6" data-service-panel="digital-partner">
                        <h3 class="font-display text-2xl">GOSYEN DIGITAL PARTNER</h3>
                        <p class="mt-3 text-slate-300">Gosyen Digital Partner mempercepat transformasi digital bisnis Anda lewat website, sistem internal, dan integrasi AI yang relevan dengan kebutuhan nyata perusahaan.</p>
                        <div class="mt-6 relative overflow-hidden rounded-2xl border border-white/10 bg-slate-950/40" data-auto-carousel data-interval="5000" data-carousel-accent="cyan">
                            <div class="min-h-[320px] p-5 md:min-h-[300px] md:p-6">
                                <article class="transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Gosyen Digital Partner</p>
                                    <h4 class="mt-3 font-display text-2xl">Situs Web Perusahaan + Pemeliharaan</h4>
                                    <p class="mt-3 text-slate-300">Paket meliputi website company profile, domain-hosting, update konten, dan maintenance teknis. Value: bukan proyek sekali jalan, tetapi kanal digital yang bisa tumbuh mengikuti bisnis.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Gosyen Digital Partner</p>
                                    <h4 class="mt-3 font-display text-2xl">Sistem Bisnis Internal</h4>
                                    <p class="mt-3 text-slate-300">Membangun sistem internal seperti dashboard keuangan, arsip digital, monitoring pajak, dan reporting manajemen agar owner mendapatkan data real-time untuk pengambilan keputusan cepat.</p>
                                </article>
                                <article class="hidden transition duration-500" data-carousel-item>
                                    <p class="text-sm font-semibold uppercase tracking-[0.12em] text-cyan-300">Gosyen Digital Partner</p>
                                    <h4 class="mt-3 font-display text-2xl">Integrasi Artificial Intelligence (AI)</h4>
                                    <p class="mt-3 text-slate-300">Mulai dari model AI/ML personal hingga bimbingan integrasi LLM (ChatGPT, Gemini, dan lainnya) untuk efisiensi terukur, dengan evaluasi kelayakan berdasarkan dataset dan kesiapan teknologi.</p>
                                </article>
                            </div>
                            <div class="flex items-center justify-between border-t border-white/10 px-5 py-3 md:px-6">
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-prev type="button">Prev</button>
                                <div class="flex items-center gap-2" data-carousel-dots></div>
                                <button class="rounded-full border border-white/20 px-3 py-1 text-xs text-slate-200 transition hover:border-cyan-300 hover:text-cyan-300" data-carousel-next type="button">Next</button>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="reveal mt-8 rounded-2xl border border-dashed border-cyan-300/50 bg-cyan-300/10 px-6 py-8 text-center md:px-10">
                    <p class="font-display text-xl text-cyan-200">Butuh detail lengkap semua divisi?</p>
                    <a href="{{ asset('modules/Company Profile & Modul Gosyen.pdf') }}" target="_blank" rel="noopener" class="mt-5 inline-flex rounded-full bg-cyan-300 px-7 py-3 text-base font-bold text-slate-900 shadow-[0_10px_24px_rgba(53,190,255,0.24)] transition hover:-translate-y-0.5">Get the Detailed Module (PDF)</a>
                </div>
            </div>
        </section>

        <section id="clients" class="relative py-20">
            <div class="pointer-events-none absolute inset-0 overflow-hidden">
                <div class="absolute -right-32 -top-24 h-[640px] w-[640px] opacity-55 [mask-image:radial-gradient(circle_at_center,black_45%,transparent_75%)]">
                    <canvas data-globe class="h-full w-full"></canvas>
                </div>
            </div>
            <div class="relative mx-auto w-[min(1160px,calc(100%-2.4rem))]">
                <div class="reveal mb-6">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Trusted By</p>
                    <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Client & Industry Network</h2>
                </div>

                <div class="space-y-3" data-marquee>
                    <div class="overflow-hidden rounded-full border border-white/15 bg-white/5 py-3">
                        <div class="marquee-track flex w-max items-center gap-9 px-5 [--marquee-duration:95s]" data-marquee-track data-marquee-direction="left">
                            <span class="font-display whitespace-nowrap text-slate-100">PT. SAKTI INTIMEGAH PRATAMA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Putraguna Indopersada</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Panen Anugerah Nusindo</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Dwi Tunggal Mulia Kimia</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Reconcile Indonesia Sejahtera</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Karya Indonesia Bisa</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Bersama Bisa Bangga</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Graha Indonesia Hebat</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. PURO CHEM INDO</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. OTO BERKAT SENTOSA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. LIMA DUA JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. TRIMEGAH SARANA PRIMA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. TRINITI SUMBER PANGHURIPAN</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. KARYO TANI MULYO</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. ANUGRAH MAASEH JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. HIMEKA MANDIRI</span>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-full border border-white/15 bg-white/5 py-3">
                        <div class="marquee-track flex w-max items-center gap-9 px-5 [--marquee-duration:105s]" data-marquee-track data-marquee-direction="right">
                            <span class="font-display whitespace-nowrap text-slate-100">PT. QANDO QOACHING</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. POLINATOR SUKSES SEJATI</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. KARYA BINA CEMERLANG</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. BERSAMA BINA BANGSA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. KARYA INSAN SEJAHTERA (YKIS)</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. KARYA BISNIS CEMERLANG</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. KARYA SATRIA ADVERTISING</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. Tantirta Andalan Niaga</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. PINUS MAKMUR NIAGA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. FERTO GALANG BERSAMA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PT. FENGWO GENERAL ELECTRIC</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. ASAH MA'ASEH JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. SETIAWAN PRIMA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. Mechanic Shop</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. Mamora</span>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-full border border-white/15 bg-white/5 py-3">
                        <div class="marquee-track flex w-max items-center gap-9 px-5 [--marquee-duration:100s]" data-marquee-track data-marquee-direction="left">
                            <span class="font-display whitespace-nowrap text-slate-100">CV. SANTOSA JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. RAJA JAYA TEHNIK</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. MUPAKAT JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. GRASIA JAYA GUNA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. SENTOSA SEHAT SEJAHTERA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. SEHAT BAHAGIA BERSAMA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. REELS DIGITAL</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. REELS TECHNOLOGY</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. HIMEKA PERKASA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. MENTAKA SEJAHTERA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">CV. SENTOSA MAKMUR JAYA</span>
                            <span class="font-display whitespace-nowrap text-slate-100">WIZZME KEDUNGMUNDU</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PENDIDIKAN DAN PUSAT KAJIAN GEOPOLITIK DAN GEOSTRATEGI INDONESIA (CGSI)</span>
                            <span class="font-display whitespace-nowrap text-slate-100">PENGAMAT PERPAJAKAN INDONESIA (ITW)</span>
                            <span class="font-display whitespace-nowrap text-slate-100">KOMUNITAS INDONESIA SEJATI (YKIN)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="py-20">
            <div class="mx-auto w-[min(1160px,calc(100%-2.4rem))]">
                <div class="reveal mb-6">
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">How We Work</p>
                    <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Pendekatan Kerja yang Terstruktur</h2>
                </div>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <article class="reveal rounded-2xl border border-white/15 bg-white/5 p-5">
                        <h3 class="font-display text-lg">01. Discovery</h3>
                        <p class="mt-2 text-slate-300">Mengidentifikasi kondisi bisnis, tantangan, dan peluang spesifik perusahaan Anda.</p>
                    </article>
                    <article class="reveal rounded-2xl border border-white/15 bg-white/5 p-5">
                        <h3 class="font-display text-lg">02. Strategic Mapping</h3>
                        <p class="mt-2 text-slate-300">Menyusun strategi dan prioritas aksi berbasis target bisnis dan risk profile.</p>
                    </article>
                    <article class="reveal rounded-2xl border border-white/15 bg-white/5 p-5">
                        <h3 class="font-display text-lg">03. Execution Support</h3>
                        <p class="mt-2 text-slate-300">Mendampingi implementasi dan memastikan setiap inisiatif berjalan efektif.</p>
                    </article>
                    <article class="reveal rounded-2xl border border-white/15 bg-white/5 p-5">
                        <h3 class="font-display text-lg">04. Growth Review</h3>
                        <p class="mt-2 text-slate-300">Evaluasi hasil secara berkala untuk peningkatan berkelanjutan dan keputusan berikutnya.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="pb-24 pt-16">
            <div class="reveal mx-auto w-[min(1160px,calc(100%-2.4rem))] rounded-[30px] border border-white/15 bg-gradient-to-br from-cyan-300/20 to-emerald-300/10 px-6 py-9 text-center md:px-10">
                <p class="mb-3 text-xs font-bold uppercase tracking-[0.13em] text-emerald-300">Ready to Scale</p>
                <h2 class="font-display text-3xl leading-tight tracking-[-0.02em] md:text-4xl">Bangun Fondasi Bisnis yang Lebih Kuat bersama Gosyen Group</h2>
                <a href="mailto:hello@gosyen.co.id" class="mt-6 inline-flex rounded-full bg-cyan-300 px-5 py-3 text-sm font-bold text-slate-900 shadow-[0_10px_24px_rgba(53,190,255,0.24)] transition hover:-translate-y-0.5">Book Initial Session</a>
            </div>
        </section>
    </main>
</body>
</html>
