# RGB Rock Light Website Design

This is a code bundle for RGB Rock Light Website Design. The original project is available at https://www.figma.com/design/8PDqyH1wVvTwwv6uybFw2Q/RGB-Rock-Light-Website-Design.

## Project Structure

This repository contains two versions of the design:

1. **React Version** (`/src`) - The original Figma-to-React export
2. **WordPress Theme** (`/wp-content/themes/product-theme`) - A production-ready WordPress theme

---

## Running the React Version

Run `npm i` to install the dependencies.

Run `npm run dev` to start the development server.

---

## WordPress Theme Installation

The WordPress theme is located at `/wp-content/themes/product-theme`. Follow one of the methods below to install it on your WordPress site.

### Method 1: Upload via WordPress Admin Dashboard (Recommended)

1. **Create a ZIP file** of the theme folder:
   ```bash
   cd wp-content/themes
   zip -r product-theme.zip product-theme
   ```

2. **Log in** to your WordPress admin dashboard (usually at `yoursite.com/wp-admin`)

3. Navigate to **Appearance → Themes**

4. Click **Add New** at the top of the page

5. Click **Upload Theme**

6. Click **Choose File** and select the `product-theme.zip` file you created

7. Click **Install Now**

8. After installation completes, click **Activate**

### Method 2: Upload via FTP / File Manager

1. Connect to your web server using an FTP client (FileZilla, Cyberduck, etc.) or your hosting control panel's File Manager

2. Navigate to your WordPress installation directory:
   ```
   /public_html/wp-content/themes/
   ```
   (The exact path may vary depending on your hosting setup)

3. Upload the entire `product-theme` folder to the `themes` directory

4. Log in to your WordPress admin dashboard

5. Navigate to **Appearance → Themes**

6. Find "RGB Rock Light Theme" and click **Activate**

### Method 3: Using cPanel File Manager

1. Log in to your **cPanel** control panel

2. Open **File Manager**

3. Navigate to `public_html → wp-content → themes`

4. Click **Upload** and upload the `product-theme.zip` file

5. Right-click the uploaded ZIP file and select **Extract**

6. Go to your WordPress admin → **Appearance → Themes** → Activate the theme

---

## Theme Configuration

After activating the theme, customize it using the WordPress Customizer:

### Accessing the Customizer

1. Go to **Appearance → Customize** in the WordPress admin

2. You'll find the following customization options:

### Available Customization Options

| Section | Options |
|---------|---------|
| **Hero Section** | Hero Title, Description, Background Image, CTA Button Text & URL |
| **Pricing Section** | Regular Price, Sale Price, Savings Text |
| **Theme Colors** | Primary Color, Secondary Color, Accent Color |
| **Footer Settings** | Copyright Text |
| **Site Identity** | Custom Logo, Site Title, Tagline |

### Setting Up Navigation Menus

1. Go to **Appearance → Menus**
2. Create a new menu
3. Add your pages/links to the menu
4. Assign to one of the available locations:
   - **Primary Menu** - Displayed in the header
   - **Footer Menu** - Displayed in the footer

### Adding a Custom Logo

1. Go to **Appearance → Customize → Site Identity**
2. Click **Select Logo**
3. Upload your logo image
4. Click **Publish** to save

### Setting Up the Front Page

1. Create a new Page (Pages → Add New) or use the default
2. Go to **Settings → Reading**
3. Select **A static page**
4. Choose your page as the **Homepage**
5. Click **Save Changes**

---

## Theme Features

- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Custom logo support
- ✅ Custom navigation menus
- ✅ WordPress Customizer integration
- ✅ SEO-friendly semantic HTML5
- ✅ BEM-style CSS naming
- ✅ No external frameworks (lightweight)
- ✅ Accessibility features (skip links, ARIA attributes)
- ✅ Featured image support
- ✅ Widget areas

---

## Theme File Structure

```
product-theme/
├── style.css           # Main stylesheet with theme header
├── functions.php       # Theme functions and hooks
├── header.php          # Header template
├── footer.php          # Footer template
├── index.php           # Blog posts template
├── front-page.php      # Front page template (landing page)
├── single.php          # Single post template
├── page.php            # Page template
└── assets/
    ├── css/
    │   └── custom.css  # Additional styles
    ├── js/
    │   └── main.js     # JavaScript functionality
    └── images/         # Theme images
```

---

## Troubleshooting

### Theme Not Appearing in WordPress

- Ensure the theme folder is named exactly `product-theme`
- Verify `style.css` exists and has the proper theme header
- Check file permissions (folders: 755, files: 644)

### Images Not Loading

- Clear your browser cache
- Check if the images exist in `/assets/images/`
- Verify the image URLs in the Customizer settings

### Menu Not Showing

- Create a menu in **Appearance → Menus**
- Assign the menu to "Primary Menu" location
- Ensure you have menu items added

---

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

---

## License

This theme is licensed under the GNU General Public License v2 or later.
  