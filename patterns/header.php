<?php
/**
 * Title: Header
 * Slug: am/header
 * Description: Header with site logo and navigation.
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","right":"24px","left":"24px"},"margin":{"top":"0px","bottom":"var:preset|spacing|xx-small"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"white","textColor":"black","className":"site-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header has-black-color has-white-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--xx-small);padding-top:32px;padding-right:24px;padding-bottom:32px;padding-left:24px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:image {"id":49,"width":214,"height":43,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="/"><img src="<?php echo get_theme_file_uri( 'assets/images/logo.png' ); ?>" alt="" class="wp-image-49" width="214" height="43"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"ref":26,"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
