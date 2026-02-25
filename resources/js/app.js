import './bootstrap';

const header = document.querySelector('[data-header]');
const nav = document.querySelector('[data-nav]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const navLinks = [...document.querySelectorAll('[data-nav-link]')];
const revealNodes = [...document.querySelectorAll('.reveal')];
const metricNodes = [...document.querySelectorAll('[data-counter]')];
const tabButtons = [...document.querySelectorAll('[data-service-tab]')];
const panels = [...document.querySelectorAll('[data-service-panel]')];
const tiltCard = document.querySelector('[data-tilt]');
const marqueeTracks = [...document.querySelectorAll('[data-marquee-track]')];
const globeCanvas = document.querySelector('[data-globe]');

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
