<?php

/**
 * @package real-estate-blocks
 * @since real-estate-blocks 1.0
 */

/**
 * Register Theme Dashboard.
 *
 * WARNING: This type of admin page is not allowed in themes on WordPress.org.
 * It must be removed for the theme to be approved.
 */

if (!defined('ABSPATH')) {
    exit;
}

function real_estate_blocks_menu()
{
    add_theme_page(
        esc_attr__('Real Estate Blocks', 'real-estate-blocks'), // Page title
        esc_attr__('Real Estate Theme Dashboard', 'real-estate-blocks'), // Menu title
        'edit_theme_options',
        'real_estate_blocks',
        'real_estate_blocks_dashboard'
    );
}
// You are adding the action twice, which is redundant. I am keeping only one.
add_action('admin_menu', 'real_estate_blocks_menu');

function real_estate_blocks_admin_theme_style()
{
    // A more secure way to get the page value.
    $page_value = isset($_GET['page']) ? sanitize_text_field($_GET['page']) : '';
    if ($page_value === 'real_estate_blocks') {
        wp_enqueue_style(
            'real_estate_blocks_admin_styles',
            esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('admin_enqueue_scripts', 'real_estate_blocks_admin_theme_style');

function real_estate_blocks_dashboard()
{
?>
    <div id="real-estate-blocks-logo">
        <img alt="<?php esc_attr_e('Real Estate Blocks Logo', 'real-estate-blocks'); ?>" width="300" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" />
    </div>

    <div id="real-estate-blocks-steps3">
        <div class="real-estate-blocks-block-title">
            <img alt="<?php esc_attr_e('3 Steps Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/3steps.png" />
            <br /><br />
            <?php esc_attr_e('Follow these 3 steps after installing the theme:', 'real-estate-blocks'); ?>
        </div>
        <div class="real-estate-blocks-help-container1">
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-1">
                <img alt="<?php esc_attr_e('Step 1 Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/step1.png" />
                <h3><?php esc_html_e('Install Plugin', 'real-estate-blocks'); ?></h3>
                <?php esc_attr_e('After activating the theme, install the optional free real-estate-right-now plugin.', 'real-estate-blocks'); ?>
                <br />
                <?php esc_attr_e('The plugin provides agents with complete control over their listings and content, allowing them to efficiently manage and sell or rent properties online. It offers unlimited options for custom property fields and advanced search filters, enabling agents to perfectly showcase their listings to match their specific property management needs.', 'real-estate-blocks'); ?>
                <br /><br />
                <?php echo esc_url('https://wordpress.org/plugins/real-estate-right-now'); ?>
                <br />
            </div>
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-2">
    <img alt="<?php esc_attr_e('Step 2 Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/step2.png" />
    <h3><?php esc_html_e('Online Documentation', 'real-estate-blocks'); ?></h3>
    <p style="font-size: 1.1em;"><?php esc_html_e('To view our online documentation, please visit the link below:', 'real-estate-blocks'); ?></p>
    <p>
        <a href="https://RealEstateTheme.eu/Documentation">
            <?php esc_html_e('View Documentation', 'real-estate-blocks'); ?>
        </a>
    </p>
    <br /><br />
</div>
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-3">
                <img alt="<?php esc_attr_e('Step 3 Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/step3.png" />
                <h3><?php esc_html_e('Theme Management', 'real-estate-blocks'); ?></h3>
                <?php esc_attr_e('To manage the theme, click Appearance => Editor in the left menu.', 'real-estate-blocks'); ?>
            </div>
        </div>
    </div>

    <div id="real-estate-blocks-services3">
        <div class="real-estate-blocks-block-title">
            <?php esc_attr_e('Help, Support, Troubleshooting:', 'real-estate-blocks'); ?>
        </div>
        <div class="real-estate-blocks-help-container1">
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-1">
                <img alt="<?php esc_attr_e('Support Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/support.png" />
                <h3><?php esc_html_e('Help and More Tips', 'real-estate-blocks'); ?></h3>
                <?php esc_attr_e('Visit the theme site for more information.', 'real-estate-blocks'); ?>
                <br /><br />
            </div>
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-2">
                <img alt="<?php esc_attr_e('Service Configuration Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/service_configuration.png" />
                <h3><?php esc_html_e('Online Guide, Support...', 'real-estate-blocks'); ?></h3>
                <?php esc_attr_e('You will find our complete and updated online guide, demo video, link to support page, and more useful stuff on our site.', 'real-estate-blocks'); ?>
                <br /><br />
                <?php echo esc_url('http://RealEstatetheme.eu'); ?>
            </div>
            <div class="real-estate-blocks-help-column real-estate-blocks-help-column-3">
                <img alt="<?php esc_attr_e('System Health Icon', 'real-estate-blocks'); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/system_health.png" />
                <h3><?php esc_html_e('Troubleshooting Guide', 'real-estate-blocks'); ?></h3>
                <?php esc_attr_e('Using an old WordPress version, low memory, a plugin with JavaScript errors, or wrong permalink settings are some possible problems. Read this and discover how to fix them quickly!', 'real-estate-blocks'); ?>
                <br /><br />
                <?php echo esc_url('http://siterightaway.net/troubleshooting/'); ?>
            </div>
        </div>
    </div>
<?php
}
