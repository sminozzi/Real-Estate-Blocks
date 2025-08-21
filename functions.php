<?php

/**
 * real-estate-blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package real-estate-blocks
 * @since real-estate-blocks 1.0
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if (!defined('REAL_ESTATE_BLOCKS_URL')) {
  define('REAL_ESTATE_BLOCKS_URL', get_template_directory_uri());
}

/**
 * Register block pattern categories.
 */
function real_estate_blocks_categories()
{
  $categories = [
    'real-estate-blocks/page' => ['label' => __('Pages', 'real-estate-blocks')],
    'real-estate-blocks/faq' => ['label' => __('FAQ', 'real-estate-blocks')],
    'real-estate-blocks/services' => ['label' => __('Services', 'real-estate-blocks')],
    'real-estate-blocks/about' => ['label' => __('About', 'real-estate-blocks')],
  ];
  foreach ($categories as $slug => $args) {
    if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($slug)) {
      register_block_pattern_category($slug, $args);
    }
  }
}
add_action('init', 'real_estate_blocks_categories');

/**
 * Gets the content of a pattern file, removes the PHP header, and then replaces placeholders.
 *
 * @param string $pattern_file_path The path to the pattern file.
 * @return string The processed pattern content.
 */
function real_estate_blocks_get_pattern_content_from_file_old($pattern_file_path)
{
  if (!is_readable($pattern_file_path)) {
    if (defined('WP_DEBUG') && WP_DEBUG) {
      trigger_error(esc_html__('Pattern file not found or not readable: ', 'real-estate-blocks') . esc_html($pattern_file_path), E_USER_WARNING);
    }
    return '';
  }

  $content = file_get_contents($pattern_file_path);

  $header_end_pos = strpos($content, '?>');

  if ($header_end_pos !== false) {
    $html_content = substr($content, $header_end_pos + 2);
  } else {
    $html_content = $content;
  }

  $theme_assets_uri = get_template_directory_uri() . '/assets/images';
  $processed_content = str_replace('{theme_assets_uri}', esc_url($theme_assets_uri), $html_content);

  return $processed_content;
}
/**
 * Gets the content of a pattern file by including it, which allows PHP to be executed.
 *
 * @param string $pattern_file_path The path to the pattern file.
 * @return string The processed pattern content.
 */
function real_estate_blocks_get_pattern_content_from_file($pattern_file_path)
{
  $theme_dir = realpath(get_template_directory());
  $real_path = realpath($pattern_file_path);
  if (!$real_path || strpos($real_path, $theme_dir) !== 0) {
    if (defined('WP_DEBUG') && WP_DEBUG) {
      trigger_error(esc_html__('Invalid pattern file path: ', 'real-estate-blocks') . esc_html($pattern_file_path), E_USER_WARNING);
    }
    return '';
  }
  if (!file_exists($real_path)) {
    if (defined('WP_DEBUG') && WP_DEBUG) {
      trigger_error(esc_html__('Pattern file not found: ', 'real-estate-blocks') . esc_html($real_path), E_USER_WARNING);
    }
    return '';
  }
  ob_start();
  include $real_path;
  return ob_get_clean();
}

/**
 * Register all block patterns for the theme.
 */
function real_estate_blocks_register_all_patterns_old()
{
  $patterns = [
    'header-default'        => ['title' => __('Default Header', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'footer-default'        => ['title' => __('Default Footer', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'about'                 => ['title' => __('About Us', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/about']],
    'faq'                   => ['title' => __('FAQ Section', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/faq']],
    '404-content'           => ['title' => __('404 Page Content', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'template-query-loop'   => ['title' => __('Post List', 'real-estate-blocks'), 'categories' => ['query']]
  ];

  foreach ($patterns as $slug => $details) {
    $pattern_name = "real-estate-blocks/{$slug}";

    if (WP_Block_Patterns_Registry::get_instance()->is_registered($pattern_name)) {
      continue;
    }

    $content = real_estate_blocks_get_pattern_content_from_file(get_theme_file_path("/patterns/{$slug}.php"));

    if (!empty($content)) {
      register_block_pattern(
        $pattern_name,
        array_merge(
          $details,
          ['content' => $content]
        )
      );
    }
  }
}

/**
 * Register all block patterns for the theme.
 */
function real_estate_blocks_register_all_patterns()
{
  $patterns = [
    'header-default'        => ['title' => __('Default Header', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'footer-default'        => ['title' => __('Default Footer', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'about'                 => ['title' => __('About Us', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/about']],
    'faq'                   => ['title' => __('FAQ Section', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/faq']],
    '404-content'           => ['title' => __('404 Page Content', 'real-estate-blocks'), 'categories' => ['real-estate-blocks/page']],
    'template-query-loop'   => ['title' => __('Post List', 'real-estate-blocks'), 'categories' => ['query']]
  ];

  foreach ($patterns as $slug => $details) {
    $pattern_name = "real-estate-blocks/{$slug}";

    // Unregister the auto-registered version first.
    if (WP_Block_Patterns_Registry::get_instance()->is_registered($pattern_name)) {
      unregister_block_pattern($pattern_name);
    }

    $content = real_estate_blocks_get_pattern_content_from_file(get_theme_file_path("/patterns/{$slug}.php"));

    if (!empty($content)) {
      register_block_pattern(
        $pattern_name,
        array_merge(
          $details,
          ['content' => $content]
        )
      );
    }
  }
}
add_action('init', 'real_estate_blocks_register_all_patterns');


/**
 * Enqueue theme stylesheet.
 */
function real_estate_blocks_theme_enqueue_styles()
{
  wp_enqueue_style(
    'real-estate-blocks-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'real_estate_blocks_theme_enqueue_styles');

/**
 * Theme setup.
 */
function real_estate_blocks_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('align-wide');
  add_theme_support('responsive-embeds');
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  add_editor_style('style.css');
}
add_action('after_setup_theme', 'real_estate_blocks_setup');

// Optional: Include the dashboard panel if it exists.
$dashboard_file = get_template_directory() . '/dashboard/dashboard.php';
if (file_exists($dashboard_file)) {
  require_once $dashboard_file;
}

/**
 * Checks if the required 'Real Estate Right Now' plugin is installed.
 * If not, it displays a dismissible admin notice.
 */
function real_estate_blocks_check_required_plugin() {
    
  // Define the full path to the plugin's main file.
  // WP_PLUGIN_DIR is a WordPress constant that points directly to the plugins folder.
  $plugin_path = WP_PLUGIN_DIR . '/real-estate-right-now/realestate.php';

  // Check directly on the file system if the plugin file does NOT exist.
  // This method is reliable and not affected by WordPress cache.
  if ( ! file_exists( $plugin_path ) ) {

      // Prepare the URL to search for the plugin in the WordPress installer.
      $plugin_slug = 'real-estate-right-now';
      $install_url = admin_url( 'plugin-install.php?tab=search&s=' . $plugin_slug );
      
      // The message to be displayed in the notice.
      $message = sprintf(
          esc_html__( 'The Real Estate Blocks theme requires the free "Real Estate Right Now" plugin for full functionality. %s', 'real-estate-blocks' ),
          '<a href="' . esc_url( $install_url ) . '"><strong>' . esc_html__( 'Please install the plugin from the WordPress directory.', 'real-estate-blocks' ) . '</strong></a>'
      );

      // Output the admin notice HTML.
      printf(
          '<div class="notice notice-warning is-dismissible"><p>%s</p></div>',
          $message
      );
  }
}
// Add the function to the 'admin_notices' action hook.
add_action( 'admin_notices', 'real_estate_blocks_check_required_plugin' );

if (!function_exists('real_estate_blocks_block_styles')) :
  /**
   * Register custom block styles.
   *
   * @since real-estate-blocks 1.0
   * @return void
   */
  function real_estate_blocks_block_styles()
  {
    $block_styles = [
      'core/details' => [
        'name' => 'arrow-icon-details',
        'label' => esc_attr__('Arrow icon', 'real-estate-blocks'),
        'style_handle' => 'real-estate-blocks-arrow-icon-details',
      ],
      'core/post-terms' => [
        'name' => 'pill',
        'label' => esc_attr__('Pill', 'real-estate-blocks'),
        'style_handle' => 'real-estate-blocks-post-terms-pill',
      ],
      'core/list' => [
        'name' => 'checkmark-list',
        'label' => esc_attr__('Checkmark', 'real-estate-blocks'),
        'style_handle' => 'real-estate-blocks-checkmark-list',
      ],
      'core/navigation-link' => [
        'name' => 'arrow-link',
        'label' => esc_attr__('With arrow', 'real-estate-blocks'),
        'style_handle' => 'real-estate-blocks-arrow-link',
      ],
      'core/heading' => [
        'name' => 'asterisk',
        'label' => esc_attr__('With asterisk', 'real-estate-blocks'),
        'style_handle' => 'real-estate-blocks-heading-asterisk',
      ],
    ];
    $style_path = get_theme_file_path('assets/css/block-styles.css');
    $style_src = get_theme_file_uri('assets/css/block-styles.css');
    foreach ($block_styles as $block => $args) {
      register_block_style($block, [
        'name' => $args['name'],
        'label' => $args['label'],
      ]);
      if (file_exists($style_path)) {
        wp_enqueue_block_style($block, [
          'handle' => $args['style_handle'],
          'src' => $style_src,
          'path' => $style_path,
          'ver' => wp_get_theme()->get('Version'),
        ]);
      } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        trigger_error(esc_html__('Block style file not found: ', 'real-estate-blocks') . esc_html($style_path), E_USER_WARNING);
      }
    }
  }
endif;
add_action('init', 'real_estate_blocks_block_styles');