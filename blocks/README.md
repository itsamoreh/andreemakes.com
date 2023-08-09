# Blocks

Add your theme specific custom blocks here. Each block should be in it's own
directory. Dynamic blocks are recommended but you could also add static blocks.

## Custom Block Assets

### CSS

Add CSS for your blocks in `/assets/css/blocks/custom/block-name.css`. Because
these theme specific blocks are so intertwined with the theme, it's recommended
to use the theme's main stylesheet for block styles.

Build the theme styles with `npm run build:css` or `npm run watch:css`. See the
main README for more details.

### JS

Alpine.js is included in the theme and is recommended for dynamic block
JavaScript functionality. Write your Alpine directives in the dynamic block's
render callback.

NOTE: Alpine was removed, because no custom blocks were being used. To add it
back, add the following to `functions.php`:

```php
/**
 * Enqueue theme scripts.
 */
function enqueue_script() {

	wp_enqueue_script( 'alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js', array(), null, false );
    wp_script_add_data( 'alpinejs', 'defer', true );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_script' );
```

See https://alpinejs.dev/start-here for more on Alpine.js.
