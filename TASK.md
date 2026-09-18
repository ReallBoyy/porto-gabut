# Portfolio Landing Page — Laravel Build Prompt

## Objective and Audience

Build a single-page portfolio landing website for a professional individual. The primary goal is to present personal brand identity, professional background, and past work in an approachable, warm, and human way. The audience is prospective employers, clients, or collaborators who want to quickly understand who you are, what you do, and how to contact you. The site should feel personal and authentic—not template-like or machine-generated.

## Pages and Sections

Build one page with the following sections, in this order:

1. **Hero** — Full-width introduction with your name, a short tagline/title, and a call-to-action button (e.g., "View My Work" or "Get in Touch"). Include a friendly, natural photo of you or an abstract soft-tone visual.
2. **About** — A short, human-written paragraph about your background, values, and what drives you. Avoid clichés. Write in first person.
3. **Skills / Services** — A grid of 3–6 key skills or services you offer, each with a short description. Use simple icons or emojis.
4. **Portfolio / Selected Work** — A grid of 3–6 past projects. Each card must include a project image, title, short description, and a link (use `#` placeholders if real URLs are unavailable). Hover states should subtly lift the card.
5. **Testimonials** (optional but recommended) — 2–3 short quotes from past clients/colleagues. Use placeholder names and roles in brackets, e.g., `[Name], [Role]`.
6. **Contact** — A simple contact form (name, email, message) plus your email address and optional social links. No backend integration is required—use a `mailto:` action or a placeholder form handler.
7. **Footer** — Small copyright line and a back-to-top link.

## Content Requirements

- Write all content in first person, as a real human speaking directly to the visitor.
- Avoid marketing fluff, buzzwords (e.g., "synergy," "innovative solutions"), or generic filler.
- Use short paragraphs and scannable structure.
- Include placeholders in square brackets for any personal details you don't provide, e.g., `[Your Name]`, `[Job Title]`, `[Company Name]`, `[Email Address]`, `[LinkedIn URL]`, `[Project Name]`, `[Project Description]`.
- Add a subtle personal touch—e.g., a fun fact, a hobby mention, or a short "currently" line—to reinforce authenticity.

## Layout and Visual System

- **Overall Style:** Pastel, soft, gentle. The site must feel calm and inviting, never loud or neon.
- **Color Palette:** Use a soft pastel base—e.g., powder pink, baby blue, mint green, lavender, cream, or peach. Choose 2–3 harmonious pastel colors for the main palette, plus a dark gray or soft charcoal for body text to maintain readability. Avoid pure black and pure white.
- **Typography:** Use a clean, humanist sans-serif font for body text (e.g., system fonts or a Google Font like Inter, Nunito Sans, or Poppins). Optionally use a serif or handwriting accent font for headings to add warmth. Ensure a clear visual hierarchy.
- **Spacing:** Use generous whitespace—sections should breathe; do not cram content.
- **Shapes:** Use rounded corners (border-radius) on cards, buttons, images, and form fields. Subtle soft shadows (low opacity, blurred) for depth.
- **Backgrounds:** Use soft pastel gradient or solid pastel section backgrounds. Alternate section backgrounds subtly (e.g., white/cream vs. very light pastel) to separate sections.
- **Natural, Not AI-Slop:** Avoid anything that looks like a generic AI template—no overused stock photos of handshakes or generic office scenes, no excessive gradients, no weird text, no overuse of emojis. Use real-looking, warm, candid-style photos if possible. If stock photos are used, make them soft-focus and lifestyle-oriented.
- **Responsive:** The layout must be fully responsive—on mobile, stack sections vertically; on desktop, use multi-column grids for skills and portfolio.

## Interactions

- **Smooth Scrolling:** Implement smooth scrolling for anchor links within the page.
- **Hover Effects:** Subtle lift (translateY + shadow) on portfolio cards and buttons. Slight color shift on links.
- **Scroll Reveal (optional, tasteful):** Fade-in sections on scroll, but keep it subtle and non-intrusive. Do not over-animate.
- **Form Interaction:** On submit, show a simple client-side success message (e.g., "Thanks! I'll get back to you soon.") without a page reload.
- **Back-to-Top:** A small floating button appears after scrolling down.

## Responsive and Accessibility Behavior

- **Mobile-First:** Design for small screens first, then enhance for larger screens.
- **Breakpoints:** Use standard breakpoints (e.g., 640px, 768px, 1024px).
- **Accessibility:**
  - Use semantic HTML5 tags: `<header>`, `<main>`, `<section>`, `<footer>`, `<nav>`, `<article>`.
  - Ensure all images have descriptive `alt` text.
  - Use proper heading hierarchy (`h1` → `h2` → `h3`).
  - Ensure sufficient color contrast (pastel backgrounds require dark text).
  - Make all interactive elements keyboard-focusable with visible focus states.
  - Use `aria-label` where appropriate (e.g., for icon-only links).
  - Respect `prefers-reduced-motion` by disabling heavy animations.

## Assets and Technical Requirements

- **Stack:** Laravel (PHP framework). Use Blade templates. The site is a static-content landing page—no complex database or auth needed.
- **Structure:**
  - Use a layout file (e.g., `resources/views/layouts/app.blade.php`) with header/footer partials.
  - Create a single view for the landing page (e.g., `resources/views/landing.blade.php`) that includes section partials.
  - Put all data (name, skills, projects, testimonials) in a config file or a simple array in the controller to keep the Blade template clean and maintainable.
- **CSS:** Use plain CSS or a preprocessor (Sass/SCSS). Consider using CSS variables for the color palette for easy theming. No heavy CSS frameworks required—custom CSS is preferred for a unique, hand-crafted feel.
- **JavaScript:** Minimal vanilla JS for interactions (smooth scroll, scroll reveal, form submit handler, back-to-top). No external libraries unless necessary.
- **Images:** Provide image assets as placeholders. Use `https://placehold.co` or similar for placeholders if no real images are available. Use `srcset` for responsive images if possible.
- **Icons:** Use an icon library (e.g., Font Awesome or a simple SVG set) for skill/service icons.
- **Fonts:** Load fonts via Google Fonts or a similar service.

## Acceptance Criteria

- The page loads as a single-page Laravel app with a clean, pastel, natural aesthetic.
- All sections listed above are present and filled with placeholder content wrapped in square brackets where needed.
- The design is fully responsive and accessible.
- Interactions (smooth scroll, hover effects, form feedback, back-to-top) work on modern browsers.
- No "AI slop" feel: copy is human, visual style is soft and intentional, no template-like clutter.
- Code is clean, commented, and follows Laravel best practices (Blade templating, config-driven data).
- The site is ready for a developer to replace placeholders with real content and assets.
