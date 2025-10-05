# BCN Child Theme - Quick Start Guide

This guide will help you set up the BCN Child Theme with custom Gutenberg blocks.

## Prerequisites

1. **WordPress Installation** - You need a working WordPress site
2. **Astra Theme** - Install and activate the [Astra](https://wordpress.org/themes/astra/) parent theme
3. **ACF Pro Plugin** - Purchase and install [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro/)

## Installation Steps

### 1. Install Parent Theme
```
1. Go to WordPress Admin > Appearance > Themes
2. Click "Add New"
3. Search for "Astra"
4. Install and Activate Astra theme
```

### 2. Install ACF Pro
```
1. Download ACF Pro from your account
2. Go to WordPress Admin > Plugins > Add New
3. Click "Upload Plugin"
4. Upload the ACF Pro zip file
5. Activate the plugin
```

### 3. Install BCN Child Theme
```
1. Upload the 'bcn' folder to /wp-content/themes/
2. Go to WordPress Admin > Appearance > Themes
3. Find "BCN" theme and click "Activate"
```

### 4. Verify ACF Field Groups
```
1. Go to WordPress Admin > Custom Fields
2. You should see 7 field groups:
   - BCN Hero Section
   - BCN Values Grid
   - BCN Testimonials
   - BCN Membership Tiers
   - BCN Team Members
   - BCN Stats
   - BCN CTA Section
3. If they don't appear, they will auto-sync from the /acf-json/ directory
```

## Creating Your First Page

### Example: Homepage

1. **Create a new page:**
   - Go to Pages > Add New
   - Title: "Home"

2. **Select template:**
   - In the right sidebar, find "Page Attributes"
   - Template dropdown: Select "BCN Home Page"

3. **Add blocks:**
   - Click the "+" button to add blocks
   - Find "BCN Blocks" category
   - Add blocks in this order for a typical homepage:
     - BCN Hero Section
     - BCN Stats
     - BCN Values Grid
     - BCN Membership Tiers (or link to membership page)
     - BCN Testimonials
     - BCN CTA Section

4. **Configure each block:**
   - Click on a block to edit it
   - Fill in the fields in the right sidebar
   - Use the default values as a starting point

5. **Publish:**
   - Click "Publish" when ready
   - Set this page as your homepage in Settings > Reading

## Block Examples

### Hero Section
Perfect for page headers with calls-to-action:
- **Heading:** "Building Buffalo's Cannabis Future, Together"
- **Tagline:** "Connect. Support. Elevate."
- **Subtitle:** Brief description
- **Primary Button:** "Join the Network" → #membership
- **Secondary Button:** "Learn More" → #about

### Values Grid
Display core values or features:
- Add 4-6 value cards
- Each with an icon (single letter), title, and description
- Examples: Community-First, Value-Driven, Authenticity, etc.

### Testimonials
Show member testimonials:
- Add 2-4 testimonials
- Include quote, author name, and role/membership type

### Membership Tiers
Display pricing plans:
- Add 3 tiers: Student, Professional, Premier
- Include icon, name, price, period, description, benefits list
- Mark one as "Popular"
- Add button with link to signup form

### Team Members
Showcase your team:
- Add team member cards with avatar (initials), name, role, bio

### Stats
Display key metrics:
- Add 3-4 statistics with number and label
- Examples: "500+ Active Members", "50+ Events Per Year"

### CTA Section
Call-to-action sections:
- Heading and description
- 1-2 buttons
- Background color customization

## Customization

### Theme Customizer
Go to Appearance > Customize:
- **Site Identity:** Upload logo
- **Colors:** Set brand colors
- **Header Builder:** Configure header layout
- **Footer Builder:** Configure footer
- **Typography:** Set fonts
- **Layout:** Set content width and spacing

### Styling
- Main styles are in `project.css`
- Customize colors, fonts, spacing as needed
- Changes persist across updates

### ACF Fields
- Modify field groups in Custom Fields section
- Changes auto-save to /acf-json/ directory
- Version control friendly

## Tips

1. **Start Simple:** Begin with one page and a few blocks
2. **Use Defaults:** ACF fields have sensible default values
3. **Preview Often:** Use the preview feature to check your work
4. **Save Drafts:** Save regularly while building pages
5. **Reusable Content:** Create similar pages by duplicating and editing

## Troubleshooting

### Blocks not appearing?
- Verify ACF Pro is activated
- Check that the theme is activated
- Clear any caching plugins

### Fields not showing?
- Go to Custom Fields and check if field groups exist
- Sync field groups if needed

### Styles not loading?
- Clear browser cache
- Clear WordPress cache if using a cache plugin
- Check that project.css file exists

## Support

For questions or issues:
- Email: info@buffalocannabisnetwork.com
- Review the README.md for detailed documentation

## Next Steps

1. Create all your main pages (Home, About, Membership, Events, News, Contact)
2. Add content using BCN blocks
3. Configure Astra theme settings
4. Set up menus and navigation
5. Install and configure AIOSEO for SEO
6. Add your logo and brand colors
7. Test on mobile devices
8. Launch! 🚀
