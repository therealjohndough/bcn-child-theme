# BCN Astra Child Theme

Buffalo Cannabis Network branded child theme for Astra.

---

## Setup

**1. Upload this folder to `/wp-content/themes/bcn/`**
**2. Activate “BCN” in WP admin > Appearance > Themes**
**3. Use Astra Customizer for logo, menu, colors, footer**
**4. Assign page templates for Home, Membership, Events, News, About, Contact in Page editor (Template dropdown)**

---

## CSS

All branded CSS is in `project.css` and auto-loaded via `functions.php`.

---

## Theme Structure

- `style.css` - Main theme stylesheet with WordPress theme header
- `functions.php` - Theme functions that enqueue styles  
- `project.css` - All branded CSS styles (auto-loaded)
- `template-*.php` - Custom page templates
- `README.md` - Documentation
- `LICENSE` - MIT License

---

## SEO Schema Setup (AIOSEO)

1. Install [AIOSEO](https://aioseo.com/) plugin.
2. For each page, set schema type:
   - Home: WebPage
   - About: AboutPage
   - Membership: WebPage
   - Events: Event
   - News: NewsArticle
   - Contact: ContactPage

---

## Page Templates

Each template matches your branded HTML layout:
- Home: `template-home.php`
- Membership: `template-membership.php`
- Events: `template-events.php`
- News: `template-news.php`
- About: `template-about.php`
- Contact: `template-contact.php`

Assign them in the WP Page editor.

---

## Customization

Use WP Customizer for Astra header, footer, logo, colors, menu.  
Edit page content in WP editor or by updating templates.

---

## Support

info@buffalocannabisnetwork.com