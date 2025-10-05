# Deployment Guide for Staging

## Pre-Deployment Checklist

- [x] All files follow WordPress naming conventions
- [x] PHP syntax validated for all templates
- [x] CSS properly organized and enqueued
- [x] Theme headers complete in style.css
- [x] Documentation up to date

## Installation Steps

### 1. Upload Theme to WordPress
```bash
# Option A: Upload via FTP/SFTP
# Upload the entire 'bcn-child-theme' folder to:
# /wp-content/themes/bcn/

# Option B: Upload via WordPress Admin
# 1. Zip the theme folder
# 2. Go to Appearance > Themes > Add New > Upload Theme
# 3. Select the zip file and install
```

### 2. Activate the Theme
1. Log in to WordPress admin
2. Navigate to **Appearance > Themes**
3. Find "BCN" theme
4. Click **Activate**

### 3. Assign Page Templates
For each page that needs a custom template:
1. Edit the page in WordPress
2. In the Page Attributes panel (right sidebar)
3. Select the appropriate template from the Template dropdown:
   - **BCN Home Page** for homepage
   - **BCN Membership Page** for membership
   - **BCN Events Page** for events
   - **BCN News Page** for news
   - **BCN About Page** for about
   - **BCN Contact Page** for contact
4. Update the page

### 4. Configure Astra Theme
1. Go to **Appearance > Customize**
2. Configure:
   - Site Identity (logo, site title)
   - Header Builder (menu, layout)
   - Footer Builder
   - Colors & Typography
   - Global settings

### 5. Optional: Install AIOSEO Plugin
1. Install and activate **All in One SEO** plugin
2. For each page, configure schema type:
   - Home: WebPage
   - About: AboutPage
   - Membership: WebPage
   - Events: Event
   - News: NewsArticle
   - Contact: ContactPage

## Verification Steps

After deployment, verify:
1. Theme is active and displays correctly
2. All custom CSS is loaded (check project.css in page source)
3. Page templates are assigned and working
4. Navigation menu is functional
5. Responsive design works on mobile
6. No PHP errors in debug.log
7. All links work correctly

## Troubleshooting

### Theme doesn't activate
- Ensure parent theme "Astra" is installed
- Check PHP version (minimum 7.0 required)

### CSS not loading
- Clear WordPress cache
- Check that functions.php is present
- Verify file permissions (644 for files, 755 for directories)

### Templates not showing
- Re-save permalinks (Settings > Permalinks > Save)
- Check that template files have correct headers
- Ensure theme is properly activated

## Support

For issues or questions:
- Email: info@buffalocannabisnetwork.com
- Check CHANGELOG.md for version history
- Review README.md for theme documentation

## Staging Environment Notes

- Test all functionality before production deployment
- Verify responsive design on multiple devices
- Check browser compatibility (Chrome, Firefox, Safari, Edge)
- Test with WordPress 5.8+ and latest Astra version
- Ensure PHP 7.4+ for optimal performance
