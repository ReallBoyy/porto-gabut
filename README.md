# Portfolio landing page

A single-page personal portfolio for a **Software Engineer × AI Enthusiast**, built with
Laravel 13, Blade and hand-written CSS. Pastel palette, soft shadows, generous spacing —
nothing neon, no page builders, no CSS framework underneath.

```
composer install
npm install
npm run build          # or: npm run dev
php artisan serve
```

## Deploy to Vercel (free)

The repo is already wired for Vercel's free Hobby plan: `vercel.json` routes requests
to `api/index.php` (running `vercel-php@0.9.0`, PHP 8.5), builds the Vite assets on the
platform, and keeps the stateless runtime settings (cookie sessions, array cache,
`/tmp` for compiled views). There is no database, so nothing else is needed.

**Via the dashboard (recommended):**

1. Push this repository to GitHub.
2. Go to [vercel.com/new](https://vercel.com/new) and import the repository — Vercel
   picks up `vercel.json` automatically; keep all build settings as detected.
3. (Optional but recommended) In **Settings → Environment Variables**, add `APP_KEY`
   with the same value as in `vercel.json` — or a fresh `base64:…` key from
   `php artisan key:generate --show` — to override the committed one.
4. Click **Deploy**. Assets are built during deployment; no manual `npm run build` needed.

**Via the CLI:**

```bash
npm i -g vercel
vercel login
vercel --prod
```

The contact form has no backend, so a serverless host is a perfect fit — every route
is served by one PHP function, cold starts are the only cost, and the Hobby plan
covers a personal portfolio comfortably.

The page is served at `/` by `App\Http\Controllers\LandingController`.

## Where the content lives

All copy, images and links are in **`config/portfolio.php`**. The Blade templates contain
markup only, so replacing your details never means editing HTML.

Anything in square brackets — `[Your Name]`, `[Email Address]`, `[Project Name]` — is a
placeholder to be swapped for real content:

| What to change | Where |
| --- | --- |
| Name, role, location, email | `identity` |
| Hero headline, tagline, portrait, CTA labels | `hero` |
| About paragraphs, values, "currently" note | `about` |
| Skills and services | `skills.items` |
| Projects (image, stack, description, link) | `work.projects` |
| Quotes | `testimonials.items` |
| Form endpoint/labels, social links | `contact`, `footer.socials` |
| Browser title, meta description | `meta` |

Images currently point at `placehold.co` with `srcset` variants. Drop real files into
`public/` (e.g. `public/images/hero.jpg`) and point `src`/`srcset` at them; keep the
`width`/`height` attributes in `partials/hero.blade.php` and `partials/work.blade.php` in
sync so the layout does not shift while loading.

## Structure

```
app/Http/Controllers/LandingController.php   single invokable action
config/portfolio.php                         all page content
resources/views/layouts/app.blade.php        document shell, header/footer includes
resources/views/landing.blade.php            composes the section partials
resources/views/partials/                    header, hero, about, skills, work,
                                             testimonials, contact, footer, icon
resources/css/app.css                        design tokens + components
resources/js/app.js                          smooth scroll, reveal, form, back-to-top
```

## Design system

`resources/css/app.css` opens with the tokens: pastel families (`--blush`, `--mint`,
`--sky`, `--lavender`, `--peach`), a soft charcoal ink (`--ink`), a muted plum accent, one
set of radii and two shadows. Change the palette there and the whole page follows.

Fonts are **Instrument Sans** (body) and **Fraunces** (headings), self-hosted at build time
by the `laravel-vite-plugin` font resolver in `vite.config.js` and emitted through
`Vite::fonts()` in the layout. Add or swap families in that config.

Tailwind is installed as a Vite plugin but nothing in the page depends on it — the CSS is
plain, commented, and meant to be readable six months from now.

## Behaviour

- Smooth anchor scrolling that honours `prefers-reduced-motion`.
- Sections fade in on scroll via `IntersectionObserver`; without it (or without JS) they
  render immediately.
- The contact form has **no backend**: with JS enabled it validates client-side and shows
  an inline confirmation; without JS it falls back to its `mailto:` action.
- The back-to-top button appears after the hero scrolls away.

## Accessibility

Skip link, semantic landmarks, one `h1` with an ordered heading tree, `alt` text on every
image, labelled form controls, visible focus rings on all interactive elements, and body
text at or above WCAG AA contrast (lowest measured ratio on the page: 4.71:1).

## Tests

```bash
php artisan test
```