import './bootstrap';

const header = document.querySelector('[data-header]');
const nav = document.querySelector('[data-nav]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const navLinks = [...document.querySelectorAll('.main-nav a')];
const revealNodes = [...document.querySelectorAll('.reveal')];
const metricNodes = [...document.querySelectorAll('[data-counter]')];
const tabButtons = [...document.querySelectorAll('[data-service]')];
const panels = [...document.querySelectorAll('[data-panel]')];
const tiltCard = document.querySelector('[data-tilt]');
const marqueeTrack = document.querySelector('.marquee-track');

if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('open');
    });

    navLinks.forEach((link) => {
        link.addEventListener('click', () => nav.classList.remove('open'));
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
        link.classList.toggle('active', isActive);
    });

    if (header) {
        header.classList.toggle('scrolled', window.scrollY > 10);
    }
};

setActiveLink();
window.addEventListener('scroll', setActiveLink);

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

const togglePanel = (serviceKey) => {
    tabButtons.forEach((button) => {
        button.classList.toggle('active', button.dataset.service === serviceKey);
    });

    panels.forEach((panel) => {
        panel.classList.toggle('active', panel.dataset.panel === serviceKey);
    });
};

tabButtons.forEach((button) => {
    button.addEventListener('click', () => togglePanel(button.dataset.service));
});

if (tiltCard) {
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
    });
}

if (marqueeTrack) {
    marqueeTrack.innerHTML += marqueeTrack.innerHTML;

    const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    const syncMotionPref = () => {
        marqueeTrack.style.animationPlayState = mediaQuery.matches ? 'paused' : 'running';
    };

    syncMotionPref();
    mediaQuery.addEventListener('change', syncMotionPref);
}
