<?php
/**
 * Title: About Us Section
 * Slug: real-estate-blocks/about
 * Categories: real-estate-blocks/about
 */
$theme_directory = get_template_directory_uri();
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"45%"} -->
    <div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large">
            <img src="<?php echo esc_url($theme_directory) . '/assets/images/about-image.jpg'; ?>" alt="A friendly real estate agent." />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading -->
        <h2 class="wp-block-heading">About Us</h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>We are a trusted real estate agency dedicated to helping you find your perfect property. Our team of experienced agents is here to guide you through every step of the process.</p>
        <!-- /wp:paragraph -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"width":"32px"} -->
                <div class="wp-block-column" style="flex-basis:32px">
                    <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large">
                        <img src="<?php echo esc_url($theme_directory) . '/assets/images/icon-phone.png'; ?>" alt="Phone Icon" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Phone:</strong> (555) 123-4567</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"width":"32px"} -->
                <div class="wp-block-column" style="flex-basis:32px">
                    <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large">
                        <img src="<?php echo esc_url($theme_directory) . '/assets/images/icon-clock.png'; ?>" alt="Clock Icon" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Hours:</strong> 10:00 AM – 5:00 PM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"width":"32px"} -->
                <div class="wp-block-column" style="flex-basis:32px">
                    <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large">
                        <img src="<?php echo esc_url($theme_directory) . '/assets/images/icon-location.png'; ?>" alt="Location Icon" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Location:</strong> 123 Realty Avenue, Miami, FL</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"width":"32px"} -->
                <div class="wp-block-column" style="flex-basis:32px">
                    <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large">
                        <img src="<?php echo esc_url($theme_directory) . '/assets/images/icon-envelope.png'; ?>" alt="Envelope Icon" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Email:</strong> info@example.com</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->