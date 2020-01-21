# Atlas Industries — WordPress Theme

A custom WordPress theme for an industrial‑engineering company's marketing site — a single‑page‑style
business/portfolio layout with a hero slider, services, projects/portfolio, team, testimonials, blog and
contact sections.

> **Context:** This is one of my early WordPress projects (2020). The front‑end HTML/CSS is based on the
> free [Colorlib "Industries"](https://colorlib.com/) template; the **WordPress side is my own work** —
> custom post types, shortcode‑driven sections, ACF integration, page templates and a Bootstrap‑4 SCSS
> build. I'm publishing it as a portfolio snapshot, warts and all. See
> [Known limitations & roadmap](#known-limitations--roadmap) for an honest list of what I'd improve today.

![Theme screenshot](screenshot.png)

## Tech stack

- **WordPress** (classic PHP theme, no block editor templates)
- **PHP** — custom post types, shortcodes, `WP_Query`
- **Bootstrap 4** compiled from **SCSS** (`scss/` → `style.css`)
- **Advanced Custom Fields (ACF)** — hero images, subtitles, service icons, project links
- **Contact Form 7** — contact page form
- **JS libraries:** jQuery 3.2.1, Popper, Owl Carousel, Waypoints, Fancybox
- **Icon fonts:** Font Awesome, Ionicons

## What it demonstrates

- **3 custom post types** registered in `functions.php`: `portfolio`, `members`, `services`.
- **6 shortcodes** that render full page sections from those CPTs via `WP_Query`:
  | Shortcode | Renders |
  |---|---|
  | `[portfolio_section]` | Latest projects grid |
  | `[services_section]` | Services with icons |
  | `[services_with_image_section]` | Services alongside a feature image |
  | `[members_section]` | Team members |
  | `[comments_section]` | Approved comments as client testimonials |
  | `[simple_section]` | Generic image + text call‑to‑action |
- **Custom page templates** — `template/blog.php` ("Blog") and `template/contact.php` ("Contact Page").
- **Theme setup** — nav menu locations (`header-menu`, `footer-menu`), `custom-header` and
  `post-thumbnails` support, and a full enqueue pipeline in `functions.php`.
- **ACF fields** used across templates: `slider_image_#1` / `slider_image_#2` (hero), `subtitle`
  (inner‑page header), `icon` (service icon class), `link_to_the_project_website` (portfolio single).

## Repository structure

```
.
├── style.css                 # Theme header + compiled Bootstrap 4 + custom styles
├── functions.php             # All custom logic: CPTs, shortcodes, enqueue, menus
├── front-page.php  index.php # Home / blog listing
├── header.php  header-category.php  footer.php
├── page.php  single.php  single-portfolio.php  category.php
├── template/                 # blog.php, contact.php (named page templates)
├── template-parts/           # Reusable section markup
├── scss/                     # Bootstrap 4 SCSS source + custom style.scss entry
├── css/  js/  fonts/  images/ # Compiled CSS, JS libs, icon fonts, demo images
├── screenshot.png
└── LICENSE                   # GPL-2.0
```

## Installation

1. Copy this folder into `wp-content/themes/` of a WordPress install (folder name e.g. `atlas-industries`).
2. In **Appearance → Themes**, activate **Atlas Industries**.
3. Install & activate **Advanced Custom Fields** and **Contact Form 7**.
4. Recreate the content model (see the note below), then drop the shortcodes above onto a front page.

> **Heads‑up:** the ACF field groups and the Contact Form 7 form were configured in the original site's
> database, so they are **not** included here. On a fresh install you'll need to recreate those ACF fields
> and a CF7 form for every section to render. This is the first thing on the roadmap to fix (export ACF to
> `acf-json/`).

## Known limitations & roadmap

This is deliberately published as an early‑career snapshot. Things I would change today:

- **Output escaping** — templates echo DB/ACF values directly. Add `esc_html()` / `esc_url()` /
  `esc_attr()` / `wp_kses()` throughout (currently the main security weakness).
- **PHP 8 compatibility** — several `post_type`, hook and callback arguments are passed as *bareword
  constants* (e.g. `'post_type' => portfolio`) relying on the removed "undefined constant → string"
  fallback. Quote them.
- **Hardcoded URLs** — a few shortcode defaults contain a hardcoded local dev domain `http://atlas/...`,
  and the contact template hardcodes a Contact Form 7 id (`185`). These should be dynamic / configurable.
- **ACF portability** — export field groups to `acf-json/` so the content model ships with the theme.
- **Build reproducibility** — add a `package.json` + npm script to compile `scss/` (the SCSS is here, but
  the build step isn't captured).
- **Deduplication** — `index.php` and `front-page.php` overlap heavily and could share a template part.

## Credits

- Front‑end template: **Colorlib "Industries"** (free HTML template) — https://colorlib.com/
- **Bootstrap** (MIT), **jQuery** (MIT), **Owl Carousel** (MIT), **Fancybox**, **Waypoints**,
  **Font Awesome**, **Ionicons** (MIT). Demo photos ship with the Colorlib template.

## License

Released under the **GNU General Public License v2.0 or later** — see [LICENSE](LICENSE). WordPress themes
inherit WordPress's GPL licensing.
