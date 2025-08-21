<?php

/**
 * Title: Default Header
 * Slug: real-estate-blocks/header-default
 * Categories: real-estate-blocks/page
 * Block Types: core/template-part/header
 * Keywords: header, top bar, navigation
 */
$theme_directory = get_template_directory_uri();
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"real-estate-top-bar","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull real-estate-top-bar"><!-- wp:group {"className":"top-bar-contact-info","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group top-bar-contact-info"><!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group contact-item"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url($theme_directory); ?>/assets/images/icon-location.png" alt="Location"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"has-base-color has-text-color"} -->
<p class="has-base-color has-text-color">Miami, Florida</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group contact-item"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url($theme_directory); ?>/assets/images/icon-envelope.png" alt="Email"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"has-base-color has-text-color"} -->
<p class="has-base-color has-text-color">info@site.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group contact-item"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url($theme_directory); ?>/assets/images/icon-phone.png" alt="Phone"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"has-base-color has-text-color"} -->
<p class="has-base-color has-text-color">987-065-40321</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group contact-item"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url($theme_directory); ?>/assets/images/icon-clock.png" alt="Hours"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"has-base-color has-text-color"} -->
<p class="has-base-color has-text-color">10 AM – 5 PM</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"youtube"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --><!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"real-estate-block-container-logo","layout":{"type":"constrained"}} -->
<div class="wp-block-group real-estate-block-container-logo"><!-- wp:site-logo {"width":200,"shouldSyncIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"className":"real-estate-block-container-menu","layout":{"type":"constrained"}} -->
<div class="wp-block-group real-estate-block-container-menu"><!-- wp:navigation {"ref":2602,"textColor":"base","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->