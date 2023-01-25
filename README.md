# Beach Life Property Management

This project aims to create a landing page for a property management company in South Carolina, USA.

This project is built with WordPress.

Local By Flywheel was used to build the WordPress site locally.

The `beachlifepm` directory (theme) was created in the WordPress themes directory, located at `wp-content/themes`.

## Theme setup

The `style.css` file, which is located in the root directory, contains a header comment section to display information about the theme in the Appearance (Themes) dashboard panel.

The `functions.php` contains theme's feautures which need to be hooked into the core functions of WordPress to make your theme more modular, extensible, and functional.

## SASS setup

A Node application was initialized.

The SASS package was installed as a development dependency.

The Bootstrap package was installed.

Font Awesome icons were downloaded from https://fontawesome.com/download. Only the `css` and `webfonts` directories and the `LICENSE.txt` file were added to the project.

The following npm-script was added `compile:sass": "sass --watch assets/scss:assets/css` to compile SASS into CSS.

## Tools

- VS Code
- WordPress
- Bootstrap

## Resources

- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Bootstrap Docs](https://getbootstrap.com/docs/5.3)
