import './bootstrap';

const header = document.querySelector('[data-header]');
const nav = document.querySelector('[data-nav]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const navLinks = [...document.querySelectorAll('[data-nav-link]')];
const langButtons = [...document.querySelectorAll('[data-lang-set]')];
const i18nTextNodes = [...document.querySelectorAll('[data-i18n]')];
const i18nContentNodes = [...document.querySelectorAll('[data-i18n-content]')];
const revealNodes = [...document.querySelectorAll('.reveal')];
const metricNodes = [...document.querySelectorAll('[data-counter]')];
const tabButtons = [...document.querySelectorAll('[data-service-tab]')];
const panels = [...document.querySelectorAll('[data-service-panel]')];
const tiltCard = document.querySelector('[data-tilt]');
const marqueeTracks = [...document.querySelectorAll('[data-marquee-track]')];
const globeCanvas = document.querySelector('[data-globe]');

const translations = {
    id: {
        'meta.title': 'Gosyen Group',
        'meta.description': 'Gosyen Group - PT. Gosyen Polinator Indonesia & CV. Miracle Office Solution. Layanan Administrasi.',
        'nav.about': 'Tentang',
        'nav.services': 'Layanan',
        'nav.clients': 'Klien',
        'nav.process': 'Proses',
        'cta.consult': 'Konsultasi',
        'common.menu': 'Menu',
        'hero.title': 'Mitra Strategis untuk Pertumbuhan Bisnis yang Terukur',
        'hero.desc':
            'Gosyen Group menaungi PT. Gosyen Polinator Indonesia dan CV. Miracle Office Solution sebagai mitra yang kuat dan terpercaya dalam Audit, Accounting, Management, Tax, Human Capital, dan Information Technology. Kami menggabungkan pendekatan personal dengan ketajaman analisis untuk mendorong bisnis Anda tumbuh berkelanjutan.',
        'hero.primary': 'Lihat Layanan',
        'hero.secondary': 'Klien Kami',
        'about.eyebrow': 'Tentang Gosyen Group',
        'about.title': 'Lebih dari Penyedia Jasa, Kami Partner Jangka Panjang Anda',
        'about.p1':
            'Sejak berdiri, Gosyen Group telah menjadi mitra penting bagi perusahaan yang sedang berkembang hingga organisasi besar yang telah mapan. Tim ahli kami membantu klien mengoptimalkan strategi, meningkatkan efisiensi operasional, dan memastikan kepatuhan terhadap regulasi.',
        'about.p2':
            'Kami percaya bahwa solusi terbaik lahir dari pemahaman mendalam terhadap karakter industri dan tantangan spesifik tiap perusahaan. Itulah mengapa pendekatan kami selalu personal, terukur, dan relevan terhadap tujuan bisnis Anda.',
        'visionMission.eyebrow': 'Vision & Mission',
        'visionMission.title': 'Arah Strategis Gosyen Group',
        'vision.g.desc': 'Kemitraan strategis untuk pertumbuhan bisnis yang terukur dan berkelanjutan.',
        'vision.o.desc': 'Tanggung jawab penuh atas setiap pekerjaan dan hasil yang diberikan.',
        'vision.s.desc': 'Layanan responsif, solutif, dan berorientasi pada kebutuhan klien.',
        'vision.y.desc': 'Didukung oleh profesional muda yang adaptif, progresif, dan memahami dinamika bisnis generasi modern.',
        'vision.e.desc': 'Menjunjung tinggi kejujuran, kepatuhan, dan profesionalisme.',
        'vision.n.desc': 'Komitmen untuk terus berkembang dan meningkatkan kualitas layanan.',
        'mission.p1.desc':
            'Memberikan layanan audit, manajemen, akuntansi, dan perpajakan yang akurat, patuh regulasi, serta bernilai strategis bagi pertumbuhan klien.',
        'mission.p2.desc': 'Membangun sistem kerja yang terstruktur, terukur, dan berkelanjutan dalam setiap perusahaan klien.',
        'mission.p3.desc': 'Mendampingi klien dalam mengelola risiko, meningkatkan efisiensi, dan menjaga stabilitas bisnis.',
        'mission.p4.desc': 'Mengembangkan profesional muda yang kompeten, adaptif, dan berintegritas untuk mendukung kualitas layanan.',
        'mission.p5.desc':
            'Bertumbuh secara seimbang melalui kemitraan jangka panjang dengan klien serta pengembangan tim yang berkelanjutan.',
        'services.eyebrow': 'Divisi Layanan',
        'services.title': 'Menu Layanan Profesional',
        'services.aam.title': 'AAM (Audit, Accounting, and Management)',
        'services.aam.desc':
            'Divisi AAM membantu Anda melihat kondisi bisnis secara jernih, mengamankan kontrol internal, dan mengambil keputusan manajerial dengan lebih percaya diri.',
        'services.aam.card1.title': 'Audit Administrasi & Kepatuhan',
        'services.aam.card1.desc':
            'Untuk perusahaan dengan dokumen belum rapih atau sedang persiapan audit/investor/bank/pajak, kami menata kelengkapan administrasi dan risiko pajak agar kondisi bisnis lebih aman, terukur, dan siap diperiksa.',
        'services.aam.card2.title': 'Audit Operasional & Proses Kerja',
        'services.aam.card2.desc':
            'Untuk tim yang sibuk tetapi hasil belum maksimal, kami memetakan proses nyata untuk menemukan bottleneck, duplikasi, dan biaya terbuang; hasilnya adalah proses kerja yang lebih ringkas, realistis, dan efisien.',
        'services.aam.card3.title': 'Audit Fraud & Forensik',
        'services.aam.card3.desc':
            'Untuk kasus sensitif, layanan ini bekerja secara diskret, objektif, dan berbasis bukti untuk menghasilkan kronologi kejadian, estimasi potensi kerugian, serta penguatan kontrol internal.',
        'services.aam.card4.title': 'Pembentukan & Pelatihan Tim Audit Internal',
        'services.aam.card4.desc':
            'Untuk perusahaan yang ingin tim audit mandiri, kami membantu dari struktur, pelatihan, simulasi, hingga implementasi awal agar tim siap operasional dan berkelanjutan.',
        'services.aam.card5.title': 'Pembukuan & Laporan Keuangan',
        'services.aam.card5.desc':
            'Layanan ini membuat owner memahami kesehatan bisnis secara praktis melalui pencatatan rapi, rekonsiliasi, dan laporan yang siap dipakai untuk pengambilan keputusan.',
        'services.aam.card6.title': 'Perencanaan Anggaran & Keuangan',
        'services.aam.card6.desc':
            'Kami menyusun anggaran, proyeksi cashflow, dan evaluasi realisasi agar keuangan bisnis tidak berjalan berdasarkan perkiraan, melainkan arah yang jelas dan terkontrol.',
        'services.tax.title': 'TAX MANAGEMENT & PROTECTION',
        'services.tax.desc':
            'Divisi Tax dirancang untuk menjaga bisnis tetap patuh, menekan risiko, dan melindungi perusahaan melalui strategi pajak yang legal dan terarah.',
        'services.tax.card1.title': 'Kepatuhan Pajak',
        'services.tax.card1.desc':
            'Value: Tenang dari sanksi & denda. Fokus pada hitung-lapor pajak rutin, Coretax, e-Faktur/e-Bupot, serta SPT Masa & Tahunan agar kepatuhan berjalan konsisten dan aman.',
        'services.tax.card2.title': 'Peninjauan Pajak & Penilaian Risiko',
        'services.tax.card2.desc':
            'Value: Tenang dari sanksi & denda. Kami meninjau pelaporan pajak dan menilai risiko sejak awal agar potensi masalah dapat dicegah sebelum menjadi temuan besar.',
        'services.tax.card3.title': 'Konsultasi & Perencanaan Pajak',
        'services.tax.card3.desc':
            'Value: Bayar pajak secukupnya, bukan sebanyak-banyaknya. Layanan mencakup efisiensi pajak legal, pendampingan pemeriksaan, dan dukungan sengketa administratif.',
        'services.tax.card4.title': 'Audit Pra-Pajak, Pertahanan & Pemulihan',
        'services.tax.card4.desc':
            'Mencakup pre-tax audit, pembetulan, tax defense, negosiasi, hingga business recovery. Unique Value: kombinasi pajak + bisnis + operasional dengan fokus damage control, bukan teori.',
        'services.hc.title': 'HR SYSTEM & PERFORMANCE',
        'services.hc.desc':
            'Divisi Human Capital membangun fondasi tim yang kuat melalui struktur peran, proses kerja, dan sistem kinerja yang objektif serta berkelanjutan.',
        'services.hc.card1.title': 'Job Description & Struktur Organisasi',
        'services.hc.card1.desc':
            'Value Utama: setiap karyawan tahu peran dan batas tanggung jawab dengan jelas. Hasilnya adalah struktur organisasi, job description tertulis, dan alur koordinasi yang rapi.',
        'services.hc.card2.title': 'Penyusunan SOP',
        'services.hc.card2.desc':
            'Value Utama: cara kerja lebih konsisten dan mudah dikontrol. Kami menyusun SOP operasional, keuangan, administrasi, pajak, dan HR berbasis kondisi nyata perusahaan.',
        'services.hc.card3.title': 'KPI & Performance Management',
        'services.hc.card3.desc':
            'Value Utama: penilaian kinerja objektif dan berbasis target. Output utama berupa KPI individu/divisi, sistem evaluasi berkala, dan dasar insentif/evaluasi.',
        'services.dp.title': 'GOSYEN DIGITAL PARTNER',
        'services.dp.desc':
            'Gosyen Digital Partner mempercepat transformasi digital bisnis Anda lewat website, sistem internal, dan integrasi AI yang relevan dengan kebutuhan nyata perusahaan.',
        'services.dp.card1.title': 'Situs Web Perusahaan + Pemeliharaan',
        'services.dp.card1.desc':
            'Paket meliputi website company profile, domain-hosting, update konten, dan maintenance teknis. Value: bukan proyek sekali jalan, tetapi kanal digital yang bisa tumbuh mengikuti bisnis.',
        'services.dp.card2.title': 'Sistem Bisnis Internal',
        'services.dp.card2.desc':
            'Membangun sistem internal seperti dashboard keuangan, arsip digital, monitoring pajak, dan reporting manajemen agar owner mendapatkan data real-time untuk pengambilan keputusan cepat.',
        'services.dp.card3.title': 'Integrasi Artificial Intelligence (AI)',
        'services.dp.card3.desc':
            'Mulai dari model AI/ML personal hingga bimbingan integrasi LLM (ChatGPT, Gemini, dan lainnya) untuk efisiensi terukur, dengan evaluasi kelayakan berdasarkan dataset dan kesiapan teknologi.',
        'services.pdf.title': 'Butuh info & detail lebih lanjut?',
        'services.pdf.cta': 'Get the Detailed Module (PDF)',
        'clients.eyebrow': 'Trusted By',
        'clients.title': 'Client & Industry Network',
        'process.eyebrow': 'How We Work',
        'process.title': 'Pendekatan Kerja yang Terstruktur',
        'process.card1.desc': 'Mengidentifikasi kondisi bisnis, tantangan, dan peluang spesifik perusahaan Anda.',
        'process.card2.desc': 'Menyusun strategi dan prioritas aksi berbasis target bisnis dan risk profile.',
        'process.card3.desc': 'Mendampingi implementasi dan memastikan setiap inisiatif berjalan efektif.',
        'process.card4.desc': 'Evaluasi hasil secara berkala untuk peningkatan berkelanjutan dan keputusan berikutnya.',
        'contact.eyebrow': 'Ready to Scale',
        'contact.title': 'Bangun Fondasi Bisnis yang Lebih Kuat bersama Gosyen Group',
        'contact.cta': 'Book Initial Session',
    },
    en: {
        'meta.title': 'Gosyen Group',
        'meta.description': 'Gosyen Group - PT. Gosyen Polinator Indonesia & CV. Miracle Office Solution. Audit, Accounting, Management, Tax, Human Capital, and Information Technology services.',
        'nav.about': 'About',
        'nav.services': 'Services',
        'nav.clients': 'Clients',
        'nav.process': 'Process',
        'cta.consult': 'Consult',
        'common.menu': 'Menu',
        'hero.title': 'Strategic Partner for Measurable Business Growth',
        'hero.desc':
            'Gosyen Group consists of PT. Gosyen Polinator Indonesia and CV. Miracle Office Solution, delivering trusted Audit, Accounting, Management, Tax, Human Capital, and Information Technology services to support sustainable growth.',
        'hero.primary': 'View Services',
        'hero.secondary': 'Our Clients',
        'about.eyebrow': 'About Gosyen Group',
        'about.title': 'More Than a Service Provider, We Are Your Long-Term Partner',
        'about.p1':
            'Since its establishment, Gosyen Group has become a trusted partner for growing businesses and established organizations alike. Our expert team helps clients optimize strategy, improve operational efficiency, and maintain regulatory compliance.',
        'about.p2':
            'We believe the best solutions come from a deep understanding of each industry and each company’s specific challenges. That is why our approach is always personal, measurable, and aligned with your business goals.',
        'visionMission.eyebrow': 'Vision & Mission',
        'visionMission.title': 'Gosyen Group Strategic Direction',
        'vision.g.desc': 'Strategic partnerships designed for measurable and sustainable business growth.',
        'vision.o.desc': 'Full ownership and accountability in every assignment and every result delivered.',
        'vision.s.desc': 'Responsive, solution-oriented services built around client needs.',
        'vision.y.desc':
            'Supported by adaptive and progressive young professionals who understand modern business dynamics.',
        'vision.e.desc': 'Upholding honesty, compliance, and professional integrity at all times.',
        'vision.n.desc': 'A continuous commitment to growth and service quality improvement.',
        'mission.p1.desc':
            'Deliver accurate, regulation-compliant audit, management, accounting, and tax services with strategic value for client growth.',
        'mission.p2.desc':
            'Build structured, measurable, and sustainable working systems across every client organization.',
        'mission.p3.desc': 'Support clients in managing risk, improving efficiency, and maintaining business stability.',
        'mission.p4.desc':
            'Develop competent, adaptive, and high-integrity young professionals to sustain service excellence.',
        'mission.p5.desc':
            'Grow in balance through long-term client partnerships and continuous team development.',
        'services.eyebrow': 'Service Divisions',
        'services.title': 'Professional Service Menu',
        'services.aam.title': 'AAM (Audit, Accounting, and Management)',
        'services.aam.desc':
            'The AAM division helps you see business conditions clearly, strengthen internal controls, and make management decisions with confidence.',
        'services.aam.card1.title': 'Administrative & Compliance Audit',
        'services.aam.card1.desc':
            'For companies with disorganized documentation or upcoming audit/investor/bank/tax reviews, we improve administrative readiness and tax-risk control so your business is safer, measurable, and inspection-ready.',
        'services.aam.card2.title': 'Operational & Workflow Audit',
        'services.aam.card2.desc':
            'For teams that stay busy but underperform, we map real workflows to identify bottlenecks, duplicated work, and wasted costs, then redesign processes to be leaner, realistic, and efficient.',
        'services.aam.card3.title': 'Fraud & Forensic Audit',
        'services.aam.card3.desc':
            'For sensitive cases, this service applies a discreet, objective, evidence-based approach to produce incident chronology, loss estimates, and stronger internal control recommendations.',
        'services.aam.card4.title': 'Internal Audit Team Setup & Training',
        'services.aam.card4.desc':
            'For companies building independent internal audit capability, we support structure design, training, simulations, and early implementation for long-term operational readiness.',
        'services.aam.card5.title': 'Bookkeeping & Financial Reporting',
        'services.aam.card5.desc':
            'This service gives business owners practical financial clarity through clean records, reconciliations, and decision-ready reporting.',
        'services.aam.card6.title': 'Budgeting & Financial Planning',
        'services.aam.card6.desc':
            'We prepare budgets, cashflow projections, and realization reviews so your financial direction is controlled and data-driven, not based on assumptions.',
        'services.tax.title': 'TAX MANAGEMENT & PROTECTION',
        'services.tax.desc':
            'The Tax division keeps your business compliant, lowers exposure, and protects your company through legal and well-structured tax strategy.',
        'services.tax.card1.title': 'Tax Compliance',
        'services.tax.card1.desc':
            'Value: peace of mind from sanctions and penalties. We cover routine tax calculations and reporting, Coretax, e-Faktur/e-Bupot, and monthly/annual tax returns for consistent compliance.',
        'services.tax.card2.title': 'Tax Review & Risk Assessment',
        'services.tax.card2.desc':
            'Value: peace of mind from sanctions and penalties. We review tax reporting and assess risks early so potential issues are addressed before becoming major findings.',
        'services.tax.card3.title': 'Tax Consultation & Planning',
        'services.tax.card3.desc':
            'Value: pay the right amount of tax, not the maximum amount. Includes legal tax efficiency planning, audit assistance, and administrative dispute support.',
        'services.tax.card4.title': 'Pre-Tax Audit, Defense & Recovery',
        'services.tax.card4.desc':
            'Covers pre-tax audit, corrections, tax defense, negotiation, and business recovery. Unique value: integrated tax, business, and operational perspective focused on practical damage control.',
        'services.hc.title': 'HR SYSTEM & PERFORMANCE',
        'services.hc.desc':
            'The Human Capital division builds a stronger team foundation through role clarity, solid work systems, and objective performance management.',
        'services.hc.card1.title': 'Job Description & Organization Structure',
        'services.hc.card1.desc':
            'Core value: every employee understands roles and responsibility boundaries clearly. Deliverables include organization structure, documented job descriptions, and clear coordination flow.',
        'services.hc.card2.title': 'SOP Development',
        'services.hc.card2.desc':
            'Core value: consistent, controllable operations. We develop operational, financial, administrative, tax, and HR SOPs based on your real company conditions.',
        'services.hc.card3.title': 'KPI & Performance Management',
        'services.hc.card3.desc':
            'Core value: objective, target-based performance assessment. Main outputs include individual/division KPIs, periodic evaluation systems, and compensation review foundations.',
        'services.dp.title': 'GOSYEN DIGITAL PARTNER',
        'services.dp.desc':
            'Gosyen Digital Partner accelerates your digital transformation through business websites, internal systems, and AI integration tailored to real operational needs.',
        'services.dp.card1.title': 'Company Website + Maintenance',
        'services.dp.card1.desc':
            'Package includes company profile website, domain-hosting, content updates, and technical maintenance. Value: not a one-off project, but a digital channel that grows with your business.',
        'services.dp.card2.title': 'Internal Business Systems',
        'services.dp.card2.desc':
            'Build internal solutions such as financial dashboards, digital administration archives, tax monitoring, and management reporting so owners can act on real-time data.',
        'services.dp.card3.title': 'Artificial Intelligence (AI) Integration',
        'services.dp.card3.desc':
            'From custom AI/ML model development to LLM integration guidance (ChatGPT, Gemini, and others), focused on measurable efficiency with feasibility checks for data and technology readiness.',
        'services.pdf.title': 'Need full service details?',
        'services.pdf.cta': 'Get the Detailed Module (PDF)',
        'clients.eyebrow': 'Trusted By',
        'clients.title': 'Client & Industry Network',
        'process.eyebrow': 'How We Work',
        'process.title': 'Structured Working Approach',
        'process.card1.desc':
            'We identify your company’s specific business conditions, pain points, and growth opportunities.',
        'process.card2.desc':
            'We design strategy and action priorities based on business targets and risk profile.',
        'process.card3.desc': 'We support implementation and ensure each initiative runs effectively.',
        'process.card4.desc':
            'We conduct periodic reviews for continuous improvement and better next-step decisions.',
        'contact.eyebrow': 'Ready to Scale',
        'contact.title': 'Build a Stronger Business Foundation with Gosyen Group',
        'contact.cta': 'Book Initial Session',
    },
};

const applyLanguage = (lang) => {
    const activeLang = translations[lang] ? lang : 'id';
    const dict = translations[activeLang];

    i18nTextNodes.forEach((node) => {
        const key = node.dataset.i18n;
        if (!key || !dict[key]) return;
        node.textContent = dict[key];
    });

    i18nContentNodes.forEach((node) => {
        const key = node.dataset.i18nContent;
        if (!key || !dict[key]) return;
        node.setAttribute('content', dict[key]);
    });

    document.documentElement.lang = activeLang;
    window.localStorage.setItem('gosyen_lang', activeLang);

    langButtons.forEach((button) => {
        const isActive = button.dataset.langSet === activeLang;
        button.classList.toggle('bg-cyan-300', isActive);
        button.classList.toggle('border-cyan-300', isActive);
        button.classList.toggle('text-slate-900', isActive);
        button.classList.toggle('border-white/25', !isActive);
        button.classList.toggle('text-slate-200', !isActive);
    });
};

if (langButtons.length > 0) {
    const storedLang = window.localStorage.getItem('gosyen_lang') || 'id';
    applyLanguage(storedLang);
    langButtons.forEach((button) => {
        button.addEventListener('click', () => applyLanguage(button.dataset.langSet || 'id'));
    });
}

if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('hidden');
        nav.classList.toggle('flex');
    });
}

const sectionMap = navLinks
    .map((link) => {
        const id = link.getAttribute('href');
        if (!id || !id.startsWith('#')) return null;
        return {
            link,
            section: document.querySelector(id),
        };
    })
    .filter(Boolean);

const setActiveLink = () => {
    const scrollY = window.scrollY + 110;

    sectionMap.forEach(({ link, section }) => {
        if (!section) return;
        const top = section.offsetTop;
        const bottom = top + section.offsetHeight;
        const isActive = scrollY >= top && scrollY < bottom;

        link.classList.toggle('text-cyan-300', isActive);
        link.classList.toggle('font-semibold', isActive);
    });

    if (header) {
        header.classList.toggle('border-white/15', window.scrollY > 10);
        header.classList.toggle('bg-slate-950/80', window.scrollY > 10);
    }
};

setActiveLink();
window.addEventListener('scroll', setActiveLink);

const smoothScrollToSection = (selector) => {
    const target = document.querySelector(selector);
    if (!target) return;

    const headerHeight = header ? header.offsetHeight : 0;
    const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 12;
    window.scrollTo({ top, behavior: 'smooth' });
};

navLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
        const selector = link.getAttribute('href');
        if (!selector?.startsWith('#')) return;
        event.preventDefault();
        smoothScrollToSection(selector);

        if (nav) {
            nav.classList.add('hidden');
            nav.classList.remove('flex');
        }
    });
});

const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
        });
    },
    { threshold: 0.14 },
);

revealNodes.forEach((node) => revealObserver.observe(node));

const animateCount = (node) => {
    const target = Number(node.dataset.counter || 0);
    const duration = 1400;
    const start = performance.now();

    const update = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - (1 - progress) ** 3;
        node.firstChild.textContent = Math.floor(target * eased);
        if (progress < 1) {
            requestAnimationFrame(update);
        }
    };

    requestAnimationFrame(update);
};

const counterObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            animateCount(entry.target);
            counterObserver.unobserve(entry.target);
        });
    },
    { threshold: 0.8 },
);

metricNodes.forEach((node) => counterObserver.observe(node));

const setTabState = (button, isActive) => {
    button.classList.toggle('bg-emerald-300', isActive);
    button.classList.toggle('text-slate-900', isActive);
    button.classList.toggle('border-emerald-300', isActive);
};

const setPanelState = (panel, isActive) => {
    panel.classList.toggle('hidden', !isActive);
    panel.classList.toggle('block', isActive);
};

const togglePanel = (serviceKey) => {
    tabButtons.forEach((button) => {
        setTabState(button, button.dataset.serviceTab === serviceKey);
    });

    panels.forEach((panel) => {
        setPanelState(panel, panel.dataset.servicePanel === serviceKey);
    });
};

if (tabButtons.length > 0) {
    togglePanel('aam');
    tabButtons.forEach((button) => {
        button.addEventListener('click', () => togglePanel(button.dataset.serviceTab));
    });
}

const carousels = [...document.querySelectorAll('[data-auto-carousel]')];
carousels.forEach((carousel) => {
    const slides = [...carousel.querySelectorAll('[data-carousel-item]')];
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    const dotsWrap = carousel.querySelector('[data-carousel-dots]');
    const accent = carousel.dataset.carouselAccent || 'cyan';
    let activeIndex = 0;

    if (slides.length === 0) return;

    const dots = slides.map((_, index) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'h-2.5 w-2.5 rounded-full border border-white/35 bg-transparent transition';
        dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
        dot.addEventListener('click', () => {
            activeIndex = index;
            render();
        });
        dotsWrap?.appendChild(dot);
        return dot;
    });

    const render = () => {
        slides.forEach((slide, index) => {
            slide.classList.toggle('hidden', index !== activeIndex);
        });

        dots.forEach((dot, index) => {
            const isActive = index === activeIndex;
            dot.classList.toggle('bg-cyan-300', isActive && accent === 'cyan');
            dot.classList.toggle('border-cyan-300', isActive && accent === 'cyan');
            dot.classList.toggle('bg-emerald-300', isActive && accent === 'emerald');
            dot.classList.toggle('border-emerald-300', isActive && accent === 'emerald');
            dot.classList.toggle('bg-transparent', !isActive);
        });
    };

    const next = () => {
        activeIndex = (activeIndex + 1) % slides.length;
        render();
    };

    const prev = () => {
        activeIndex = (activeIndex - 1 + slides.length) % slides.length;
        render();
    };

    prevButton?.addEventListener('click', () => {
        prev();
    });

    nextButton?.addEventListener('click', () => {
        next();
    });

    render();
});

if (tiltCard) {
    const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    tiltCard.style.transition = 'transform 220ms ease';

    if (canHover) {
        tiltCard.addEventListener('mouseenter', () => {
            tiltCard.style.willChange = 'transform';
        });

        tiltCard.addEventListener('mousemove', (event) => {
            const rect = tiltCard.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            const rotateY = ((x / rect.width) - 0.5) * 10;
            const rotateX = ((y / rect.height) - 0.5) * -10;

            tiltCard.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        tiltCard.addEventListener('mouseleave', () => {
            tiltCard.style.transform = 'perspective(900px) rotateX(0deg) rotateY(0deg)';
            tiltCard.style.willChange = 'auto';
        });
    }
}

if (marqueeTracks.length > 0) {
    marqueeTracks.forEach((track) => {
        if (!track.dataset.cloned) {
            track.innerHTML += track.innerHTML;
            track.dataset.cloned = 'true';
        }
    });

    const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    const syncMotionPref = () => {
        marqueeTracks.forEach((track) => {
            track.style.animationPlayState = mediaQuery.matches ? 'paused' : 'running';
        });
    };

    syncMotionPref();
    mediaQuery.addEventListener('change', syncMotionPref);
}

if (globeCanvas) {
    const ctx = globeCanvas.getContext('2d');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const points = [];
    const pointCount = 200;
    let width = 0;
    let height = 0;
    let rafId = null;

    for (let i = 0; i < pointCount; i += 1) {
        const y = 1 - (i / (pointCount - 1)) * 2;
        const radius = Math.sqrt(1 - y * y);
        const theta = Math.PI * (3 - Math.sqrt(5)) * i;
        points.push({
            x: Math.cos(theta) * radius,
            y,
            z: Math.sin(theta) * radius,
        });
    }

    const resize = () => {
        const dpr = window.devicePixelRatio || 1;
        width = globeCanvas.clientWidth;
        height = globeCanvas.clientHeight;
        globeCanvas.width = Math.floor(width * dpr);
        globeCanvas.height = Math.floor(height * dpr);
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    };

    const draw = (time = 0) => {
        if (!ctx || width === 0 || height === 0) return;
        ctx.clearRect(0, 0, width, height);

        const cx = width * 0.5;
        const cy = height * 0.5;
        const sphereRadius = Math.min(width, height) * 0.28;
        const angle = time * 0.00024;
        const tilt = 0.5;

        const glow = ctx.createRadialGradient(cx, cy, sphereRadius * 0.2, cx, cy, sphereRadius * 1.35);
        glow.addColorStop(0, 'rgba(34,211,238,0.18)');
        glow.addColorStop(1, 'rgba(34,211,238,0)');
        ctx.fillStyle = glow;
        ctx.beginPath();
        ctx.arc(cx, cy, sphereRadius * 1.4, 0, Math.PI * 2);
        ctx.fill();

        points.forEach((point) => {
            const xzX = point.x * Math.cos(angle) - point.z * Math.sin(angle);
            const xzZ = point.x * Math.sin(angle) + point.z * Math.cos(angle);
            const yzY = point.y * Math.cos(tilt) - xzZ * Math.sin(tilt);
            const yzZ = point.y * Math.sin(tilt) + xzZ * Math.cos(tilt);

            const px = cx + xzX * sphereRadius;
            const py = cy + yzY * sphereRadius;
            const depth = (yzZ + 1) * 0.5;
            const size = 0.8 + depth * 2.1;
            const alpha = 0.2 + depth * 0.8;

            ctx.fillStyle = `rgba(103,232,249,${alpha})`;
            ctx.beginPath();
            ctx.arc(px, py, size, 0, Math.PI * 2);
            ctx.fill();
        });

        ctx.strokeStyle = 'rgba(103,232,249,0.24)';
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.arc(cx, cy, sphereRadius, 0, Math.PI * 2);
        ctx.stroke();
    };

    const animate = (time) => {
        draw(time);
        rafId = window.requestAnimationFrame(animate);
    };

    const start = () => {
        if (reducedMotion.matches) {
            draw(0);
            return;
        }
        if (rafId) return;
        rafId = window.requestAnimationFrame(animate);
    };

    const stop = () => {
        if (!rafId) return;
        window.cancelAnimationFrame(rafId);
        rafId = null;
    };

    resize();
    start();
    window.addEventListener('resize', resize);
    reducedMotion.addEventListener('change', () => {
        stop();
        start();
    });
}
