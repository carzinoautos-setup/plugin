# Carzino WordPress Plugin

This plugin embeds the Carzino React app into WordPress using a shortcode.

## Features
- Automated React build integration.
- Shortcode support to embed the app anywhere.
- Organized folder structure (`frontend`, `includes`, etc.).

## Usage
1. Install this plugin in WordPress.
2. Use the shortcode `[carzino_app]` (or your chosen shortcode) inside a post or page.
3. The React app will render from the `/build` directory.

## Development
If you’re contributing:
- React source is in `/frontend`
- PHP plugin logic is in `/includes` and `carzino-plugin.php`

⚠️ You do **not** need to build locally. GitHub Actions handles this automatically.
