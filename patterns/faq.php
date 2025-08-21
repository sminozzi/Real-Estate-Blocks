<?php
/**
 * Title: FAQ Section
 * Slug: real-estate-blocks/faq
 * Categories: real-estate-blocks/faq
 */
$theme_directory = get_template_directory_uri();
?><!-- wp:media-text {"mediaType":"image","mediaWidth":33,"verticalAlignment":"center"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:33% auto">
    <figure class="wp-block-media-text__media"><img src="<?php echo esc_url($theme_directory) . '/assets/images/faq-image.jpg'; ?>" alt=""/></figure>

    <div class="wp-block-media-text__content"><!-- wp:details -->
        <details class="wp-block-details">
            <summary>Do you offer services for both property rentals and sales?</summary><!-- wp:paragraph -->
            <p>Yes, we offer comprehensive services for both residential rentals and sales. Our team is equipped to help you find the perfect home to buy or rent, and can also assist you in selling your property for the best possible value.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details --><!-- wp:details -->
        <details class="wp-block-details">
            <summary>Do you handle commercial properties?</summary><!-- wp:paragraph -->
            <p>Absolutely. In addition to the residential real estate market, our expertise extends to commercial properties. We can assist you with the purchase, sale, and lease of offices, retail spaces, and industrial buildings.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details --><!-- wp:details -->
        <details class="wp-block-details">
            <summary>What geographical areas do you serve?</summary><!-- wp:paragraph -->
            <p>We specialize in the "Greater Miami Area". Our local knowledge allows us to provide in-depth market analysis and exceptional service to our clients in this region.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->
    </div>
</div>
<!-- /wp:media-text -->