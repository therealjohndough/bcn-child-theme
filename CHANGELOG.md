# Changelog

## Version 1.0.0 - Theme Cleanup for Staging (2025-01-XX)

### Changes Made
- **Standardized file naming**: Removed all version numbers (Version3, Version4) and redundant prefixes (BCN_bcn_)
- **WordPress-compliant structure**: 
  - Created proper `style.css` with WordPress theme headers
  - Added `functions.php` to properly enqueue styles
  - Renamed all templates to standard WordPress naming (template-*.php)
- **Consolidated CSS files**:
  - Removed duplicate `bcn_project_Version4.css` (had typo)
  - Kept clean `project.css` with all branded styles
  - Maintained proper `style.css` for theme metadata
- **Improved documentation**:
  - Renamed README to standard `README.md`
  - Updated installation instructions
  - Added theme structure documentation
- **Added development files**:
  - Created `.gitignore` for WordPress development best practices

### Files Structure
```
bcn-child-theme/
├── style.css                    # WordPress theme header
├── functions.php                # Theme functions (enqueues styles)
├── project.css                  # All branded CSS
├── template-home.php           # Home page template
├── template-membership.php     # Membership page template
├── template-events.php         # Events page template
├── template-news.php           # News page template
├── template-about.php          # About page template
├── template-contact.php        # Contact page template
├── README.md                   # Documentation
├── LICENSE                     # MIT License
└── .gitignore                  # Git ignore rules
```

### Removed Files
- `BCN_bcn_README_Version3.md` → renamed to `README.md`
- `bcn_style_Version3.css` → renamed to `style.css`
- `BCN_bcn_project_Version3.css` → renamed to `project.css`
- `bcn_project_Version4.css` → removed (duplicate with typo)
- All `BCN_bcn_template-*_Version3.php` → renamed to `template-*.php`

### Technical Notes
- All PHP files validated for syntax errors
- CSS follows WordPress child theme best practices
- Theme properly extends Astra parent theme
- All custom styles are properly enqueued via functions.php
