const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.documentElement.classList.add('js');

/* Navbar: solid after scrolling, plus dropdowns and mobile menu */
const header = document.querySelector('[data-header]');
const updateHeader = () => {
    header?.toggleAttribute('data-scrolled', window.scrollY > 40);
};
updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

const closeDropdowns = (except = null) => {
    document.querySelectorAll('[data-dropdown]').forEach((dropdown) => {
        if (dropdown === except) {
            return;
        }
        dropdown.removeAttribute('data-open');
        dropdown.querySelector('[data-dropdown-trigger]')?.setAttribute('aria-expanded', 'false');
    });
};

document.querySelectorAll('[data-dropdown]').forEach((dropdown) => {
    const trigger = dropdown.querySelector('[data-dropdown-trigger]');
    let timer;

    const open = () => {
        clearTimeout(timer);
        closeDropdowns(dropdown);
        dropdown.setAttribute('data-open', '');
        trigger.setAttribute('aria-expanded', 'true');
    };
    const close = () => {
        dropdown.removeAttribute('data-open');
        trigger.setAttribute('aria-expanded', 'false');
    };

    trigger.addEventListener('click', (event) => {
        event.preventDefault();
        dropdown.hasAttribute('data-open') ? close() : open();
    });
    dropdown.addEventListener('mouseenter', () => {
        if (window.matchMedia('(hover: hover)').matches) {
            open();
        }
    });
    dropdown.addEventListener('mouseleave', () => {
        if (window.matchMedia('(hover: hover)').matches) {
            timer = setTimeout(close, 120);
        }
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('[data-dropdown]')) {
        closeDropdowns();
    }
});

const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const setMenu = (open) => {
    if (!menuButton || !mobileMenu) {
        return;
    }
    menuButton.setAttribute('aria-expanded', String(open));
    mobileMenu.toggleAttribute('data-open', open);
    document.body.classList.toggle('overflow-hidden', open);
};
menuButton?.addEventListener('click', () => setMenu(menuButton.getAttribute('aria-expanded') !== 'true'));
mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenu(false)));

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeDropdowns();
        setMenu(false);
    }
});

/* Scroll reveal */
const revealables = document.querySelectorAll('[data-reveal]');
if ('IntersectionObserver' in window && !reduceMotion) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -6% 0px' },
    );
    revealables.forEach((el) => observer.observe(el));
} else {
    revealables.forEach((el) => el.classList.add('is-visible'));
}

/* Hero slideshow */
const slides = [...document.querySelectorAll('[data-hero-slide]')];
const labels = document.querySelector('[data-hero-label]');
const dots = [...document.querySelectorAll('[data-hero-dot]')];
if (slides.length > 1 && !reduceMotion) {
    let current = 0;
    const show = (index) => {
        slides[current].classList.remove('is-active');
        dots[current]?.removeAttribute('data-active');
        current = index;
        slides[current].classList.add('is-active');
        dots[current]?.setAttribute('data-active', '');
        if (labels) {
            labels.textContent = slides[current].dataset.heroSlide;
        }
    };
    let timer = setInterval(() => show((current + 1) % slides.length), 7000);
    dots.forEach((dot, index) =>
        dot.addEventListener('click', () => {
            clearInterval(timer);
            show(index);
            timer = setInterval(() => show((current + 1) % slides.length), 7000);
        }),
    );
}

/* Hero parallax */
const parallax = document.querySelector('[data-parallax]');
if (parallax && !reduceMotion) {
    window.addEventListener(
        'scroll',
        () => {
            if (window.scrollY < window.innerHeight) {
                parallax.style.transform = `translateY(${window.scrollY * 0.25}px)`;
            }
        },
        { passive: true },
    );
}

/* Counters */
const counters = document.querySelectorAll('[data-count]');
if (counters.length) {
    const run = (el) => {
        const target = Number(el.dataset.count);
        if (reduceMotion) {
            el.textContent = target;
            return;
        }
        const start = performance.now();
        const tick = (now) => {
            const progress = Math.min((now - start) / 1600, 1);
            el.textContent = Math.round(target * (1 - Math.pow(1 - progress, 4)));
            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        };
        requestAnimationFrame(tick);
    };
    const counterObserver = new IntersectionObserver(
        (entries) =>
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    run(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            }),
        { threshold: 0.6 },
    );
    counters.forEach((el) => counterObserver.observe(el));
}

/* Carousel buttons */
document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-carousel-track]');
    carousel.querySelectorAll('[data-carousel-step]').forEach((button) =>
        button.addEventListener('click', () => {
            const step = Number(button.dataset.carouselStep);
            track.scrollBy({ left: step * track.clientWidth * 0.8, behavior: reduceMotion ? 'auto' : 'smooth' });
        }),
    );
});

/* Hero destination picker */
document.querySelector('[data-country-picker]')?.addEventListener('submit', (event) => {
    event.preventDefault();
    const value = event.currentTarget.elements.country.value;
    if (value) {
        window.location.href = value;
    }
});

/* Section scrollspy (country pages) */
const spyLinks = [...document.querySelectorAll('[data-spy-link]')];
if (spyLinks.length && 'IntersectionObserver' in window) {
    const targets = spyLinks
        .map((link) => document.getElementById(link.getAttribute('href').slice(1)))
        .filter(Boolean);
    const spy = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    spyLinks.forEach((link) =>
                        link.toggleAttribute('data-active', link.getAttribute('href') === `#${entry.target.id}`),
                    );
                }
            });
        },
        { rootMargin: '-35% 0px -55% 0px' },
    );
    targets.forEach((target) => spy.observe(target));
}
