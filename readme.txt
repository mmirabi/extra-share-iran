=== Extra Iranian Share Buttons ===
Contributors: mehdimirabi
Donate link: https://mehdimirabi.com
Tags: share, social, bale, soroush, eitaa, iran, xtra, woocommerce
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.0.1
License: MIT
License URI: https://opensource.org/licenses/MIT

Lightweight plugin that adds Bale, Soroush, and Eitaa share buttons to Xtra Theme posts and WooCommerce products, with full RTL support and custom SVG icons.

== Description ==

Extra Iranian Share Buttons is a simple, clean, and fully compatible WordPress plugin that adds share buttons for **Bale**, **Soroush**, and **Eitaa** to the **Xtra Theme** and **WooCommerce product pages**.

The plugin preserves the original UI/UX of Xtra's default social share icons and injects the new networks using native theme hooks.

No JavaScript, no settings panel, and no bloat — just functional, lightweight, and fast.

### ✨ Features

* Adds **Bale**, **Soroush**, and **Eitaa** share buttons  
* Full support for:
  * Xtra Theme posts (via `codevz/share`)
  * WooCommerce products (via `woocommerce_share`)
* Custom SVG icons (optimized and retina-ready)
* Full RTL compatibility
* Custom tooltip system (lightweight, CSS-only)
* Zero conflicts with theme or page builders
* Works with Elementor product templates
* Clean UI with center-aligned share box
* Copy-link button included
* Very lightweight: loads only on singular content

### 👌 Why this plugin?

Xtra Theme hardcodes its share icons list, so classic filters do not work.  
This plugin directly hooks into native share actions and injects real icon markup, ensuring 100% compatibility even inside Elementor templates and WooCommerce product pages.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/extra-iranian-share-buttons/`
2. Activate the plugin through the "Plugins" menu
3. You're done — share buttons will automatically appear on:
   * Posts (default Xtra share area)
   * WooCommerce product pages

== Frequently Asked Questions ==

= Does this plugin add settings to the dashboard? =
No. It works automatically and does not require configuration.

= Does it work with Elementor? =
Yes. Xtra's Elementor widgets rely on WooCommerce hooks, which this plugin supports.

= Can I customize colors or sizes? =
Yes. All styles are in `assets/iran-share.css`.  
You can safely override via theme or child-theme.

= Does it support RTL? =
Yes. It is fully RTL optimized.

== Screenshots ==

1. Share buttons displayed on an Xtra Theme post
2. Share buttons displayed on a WooCommerce product
3. Tooltip preview with SVG icons

== Changelog ==

= 1.0.1 =
* Added background wrapper to share area
* Increased icon sizes (SVG + Font Awesome)
* Added label “اشتراک”
* Improved tooltip design
* Codebase refactoring and cleanup
* Added WooCommerce compatibility (`woocommerce_share`)
* Added copy-link icon

* Added custom tooltip system
* Improved CSS structure

= 1.0.0 =
* Initial release
* Added Bale, Soroush and Eitaa buttons for posts (Xtra Theme)

== Upgrade Notice ==

= 1.0.1 =
Improved UI, larger icons, added share label, better styling.

== License ==

MIT License  
Copyright (c) Mehdi Mirabi  
https://opensource.org/licenses/MIT
