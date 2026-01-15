---
description: Initialize the development environment for landing-gratex
---

# Initialize Development Environment

This workflow sets up your local development environment for the **landing-gratex** PHP landing page application.

## Project Overview

The landing page is a simple PHP-based website using:
- **PHP routing** via `index.php`
- **Bootstrap 4.4.1** for styling
- **Font Awesome 5.10.0** for icons
- **jQuery 3.4.1** for JavaScript functionality
- **Multiple libraries**: Owl Carousel, Lightbox, Slick, etc.

## Prerequisites

### ✅ Already Installed
- **PHP 8.5.1** - Verified and ready to use

### ⚠️ No Additional Requirements
This is a static/PHP landing page with no database or backend dependencies.

## Setup Steps

### 1. Verify PHP Installation
// turbo
```powershell
php --version
```

### 2. Start PHP Development Server
// turbo
```powershell
php -S localhost:8001
```

**Note**: Using port `8001` to avoid conflicts with the API running on port `8000`.

### 3. Test the Landing Page

**Test in browser**: http://localhost:8001

**Available Routes**:
- `/` - Home page
- `/blog` - Blog page
- `/contact` - Contact page

### 4. Verify All Assets Load

Open the browser developer console and verify:
- No 404 errors for CSS/JS libraries
- All images load correctly
- JavaScript animations work

## Project Structure

```
landing-gratex/
├── index.php          # Main entry point with routing
├── pages/            # Page templates
│   ├── home.php
│   ├── blog.php
│   ├── contact.php
│   └── 404.php
├── layout/           # Shared layouts
│   ├── header.php
│   └── footer.php
├── css/              # Stylesheets
├── js/               # JavaScript files
├── img/              # Images
└── lib/              # Third-party libraries
```

## Troubleshooting

**Issue**: "Port 8001 is already in use"
- Stop other applications using port 8001
- Or use a different port: `php -S localhost:8002`

**Issue**: CSS/JS not loading
- Verify all library files exist in the `lib/` directory
- Check browser console for 404 errors

**Issue**: Images not displaying
- Verify image files exist in the `img/` directory
- Check file permissions

## Next Steps

Once the server is running:
1. Review the landing page in your browser
2. Test all navigation links
3. Verify responsive design on different screen sizes
4. Check contact form functionality (if applicable)
