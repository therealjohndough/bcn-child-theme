# BCN Astra Child Theme

Buffalo Cannabis Network branded child theme for Astra with custom Gutenberg blocks powered by ACF Pro.

---

## Setup

**1. Install Required Plugins**
   - [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro/) (required for custom blocks)
   - [AIOSEO](https://aioseo.com/) (recommended for SEO)

**2. Upload Theme**
   - Upload `/bcn/` folder to `/wp-content/themes/`
   - Activate "BCN" in WP admin > Appearance > Themes

**3. Configure Theme**
   - Use Astra Customizer for logo, menu, colors, footer
   - ACF field groups will auto-import from `/acf-json/` directory

**4. Create Pages**
   - Create pages for: Home, Membership, Events, News, About, Contact
   - Assign the appropriate page template from the Template dropdown
   - Add custom blocks to build your page content

---

## Custom Gutenberg Blocks

The theme includes ACF-powered Gutenberg blocks for easy content management:

### Available Blocks

1. **BCN Hero Section** - Full-width hero banner with heading, tagline, subtitle, and CTA buttons
2. **BCN Values Grid** - Display core values or features in a responsive grid
3. **BCN Testimonials** - Showcase member testimonials with author and role
4. **BCN Membership Tiers** - Display membership plans with pricing and benefits
5. **BCN Team Members** - Showcase team members with avatars, roles, and bios
6. **BCN Stats** - Display key statistics in a grid layout
7. **BCN CTA Section** - Call-to-action section with heading and buttons

### Using Blocks

1. In the WordPress editor, click the **+** button to add a block
2. Find blocks under the **BCN Blocks** category
3. Configure block content using the ACF fields in the sidebar
4. Preview and publish your changes

All blocks are fully customizable through ACF fields - no code editing required!

---

## CSS

All branded CSS is in `project.css` and auto-loaded via `functions.php`.

---

## Page Templates

Each template provides a clean structure for building pages with blocks:
- Home: `template-home.php`
- Membership: `template-membership.php`
- Events: `template-events.php`
- News: `template-news.php`
- About: `template-about.php`
- Contact: `template-contact.php`

Assign them in the WP Page editor (Template dropdown).

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

## File Structure

```
bcn/
├── functions.php           # Theme functions and block registration
├── style.css              # Theme header and parent theme reference
├── project.css            # Custom BCN styles
├── template-*.php         # Page templates
├── blocks/                # ACF block templates
│   ├── hero.php
│   ├── values-grid.php
│   ├── testimonials.php
│   ├── membership-tiers.php
│   ├── team.php
│   ├── stats.php
│   └── cta-section.php
└── acf-json/              # ACF field group definitions (auto-sync)
    ├── group_bcn_hero.json
    ├── group_bcn_values_grid.json
    ├── group_bcn_testimonials.json
    ├── group_bcn_membership_tiers.json
    ├── group_bcn_team.json
    ├── group_bcn_stats.json
    └── group_bcn_cta_section.json
```

---

## Customization

### Theme Customizer
Use WP Customizer (Appearance > Customize) for:
- Logo
- Navigation menus
- Colors
- Footer
- Typography

### Content Management
Edit page content using Gutenberg blocks - no coding required! All content is managed through the WordPress editor using the custom BCN blocks.

### Advanced Customization
- Modify block templates in `/blocks/` directory
- Update ACF field groups in WordPress (changes auto-save to `/acf-json/`)
- Customize styles in `project.css`

---

## Support

info@buffalocannabisnetwork.com
