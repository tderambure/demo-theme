
# Demo Theme

A **Timber** theme for **WordPress Bedrock**. This theme is designed to work with the **Bedrock** project structure and uses **Timber** for templating.

## Installation

1. Clone this repository into the `web/themes/` directory of your WordPress Bedrock project:

   ```bash
   git clone https://github.com/tderambure/demo-theme.git
   ```

2. For unreleased template, install the project composer dependencies:

   ```bash
   cd web/themes/demo-theme
   composer install
   ```

2. If needed, in a node environnement, install the project dependencies:

   ```bash
   cd web/themes/demo-theme
   npm install
   ```

## Asset Compilation

If needed, in order to generate the assets, in a Node.js environement, please use :

```bash
npm run build
```

This will compile the necessary CSS and JavaScript files for your theme.

## Directory Structure

Your theme should be placed in:

```
web/themes/demo-theme
```

of your Bedrock Wordpress
