/**
 * Landing page interactions — deliberately small and dependency-free.
 *
 * Everything here is progressive enhancement: with JavaScript disabled the page
 * still reads, links still work, and the contact form falls back to its
 * `mailto:` action. A `js` class on <html> gates the handful of styles that
 * only make sense once these scripts are running.
 *
 * Features:
 *   1. Slow down in-page anchor jumps a little (and keep the URL hash)
 *   2. Reveal sections as they scroll into view
 *   3. Client-side contact form feedback (no backend, per brief)
 *   4. Floating back-to-top button and sticky-header border
 */

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

document.documentElement.classList.add('js');

/* --------------------------------------------------- 1. Smooth anchor scrolling */

/**
 * Native `scroll-behavior: smooth` handles this in modern browsers, but it
 * jumps instantly for visitors who asked for reduced motion. Rather than
 * fighting the CSS, we only intercept the cases the browser gets wrong: we
 * respect the reduced-motion preference and keep the hash in the URL.
 */
document.addEventListener('click', (event) => {
    const link = event.target.closest('a[href^="#"]');

    if (!link || link.getAttribute('href') === '#') {
        return;
    }

    const target = document.querySelector(link.getAttribute('href'));

    if (!target) {
        return;
    }

    event.preventDefault();
    target.scrollIntoView({
        behavior: prefersReducedMotion.matches ? 'auto' : 'smooth',
        block: 'start',
    });

    // Keep the address bar and history usable without triggering a second jump.
    history.pushState(null, '', link.getAttribute('href'));
});

/* ----------------------------------------------------------- 2. Scroll reveal */

const revealTargets = document.querySelectorAll('.reveal');

if (revealTargets.length > 0) {
    if ('IntersectionObserver' in window && !prefersReducedMotion.matches) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            },
            { rootMargin: '0px 0px -12% 0px', threshold: 0.08 },
        );

        revealTargets.forEach((target) => observer.observe(target));
    } else {
        // No observer, or motion is unwelcome: show everything immediately.
        revealTargets.forEach((target) => target.classList.add('is-visible'));
    }
}

/* -------------------------------------------------------- 3. Contact form feedback */

const contactForm = document.querySelector('[data-contact-form]');

if (contactForm) {
    const status = contactForm.querySelector('[data-form-status]');

    const setFieldError = (field, message) => {
        const error = contactForm.querySelector(`[data-field-error="${field.name}"]`);

        if (!error) {
            return;
        }

        error.textContent = message ?? '';
        error.hidden = !message;
        field.toggleAttribute('aria-invalid', Boolean(message));
    };

    // Clear a field's error as soon as the visitor starts fixing it.
    contactForm.addEventListener('input', (event) => {
        if (event.target.name) {
            setFieldError(event.target, '');
        }
    });

    contactForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let firstInvalid = null;

        contactForm.querySelectorAll('input, textarea').forEach((field) => {
            const value = field.value.trim();
            let message = '';

            if (value === '') {
                message = 'This one is still empty.';
            } else if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                message = 'That email address looks incomplete.';
            }

            setFieldError(field, message);

            if (message && !firstInvalid) {
                firstInvalid = field;
            }
        });

        if (firstInvalid) {
            status.textContent = 'Almost there — a couple of fields need a look.';
            firstInvalid.focus();
            return;
        }

        // No backend in this build: replace the form with a confirmation so the
        // visitor is not left looking at fields they have already filled in.
        const confirmation = document.createElement('p');
        confirmation.className = 'card form-status';
        confirmation.setAttribute('role', 'status');
        confirmation.textContent = contactForm.dataset.successMessage;

        contactForm.replaceWith(confirmation);
    });
}

/* ----------------------------------- 4. Back-to-top button + header scroll state */

const toTopButton = document.querySelector('[data-to-top]');
const siteHeader = document.querySelector('.site-header');

// One scroll listener for both effects: the floating button appears once the
// hero is behind you, and the sticky header gains a hairline border.
if (toTopButton || siteHeader) {
    const onScroll = () => {
        const scrolled = window.scrollY;

        if (toTopButton) {
            toTopButton.hidden = scrolled < window.innerHeight * 0.6;
        }

        if (siteHeader) {
            siteHeader.classList.toggle('is-scrolled', scrolled > 8);
        }
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

if (toTopButton) {
    toTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: prefersReducedMotion.matches ? 'auto' : 'smooth',
        });
    });
}