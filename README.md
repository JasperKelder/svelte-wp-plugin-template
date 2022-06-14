# Svelte WP Plugin Template

### Basic setup for using Svelte in WordPress plugins.

1. Compile your Svelte app with npm run build and copy the generated CSS and JS files to the svelte-plugin directory.
2. In index.php the strings index.???.css and index.???.js should be replaced with the names of the copied files.
3. Copy the svelte-plugin directory in your WordPress plugin directory and activate the plugin in the admin dashboard.
