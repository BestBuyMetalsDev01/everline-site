<?php
/**
 * Plugin Name: EverLine Landing Page
 * Plugin URI: https://www.bestbuymetals.com
 * Description: Dedicated architectural landing page for EverLine metal fencing (TimberLine & RidgeLine systems) by Best Buy Metals. Adds an 'EverLine Landing Page' template selectable on any page, and automatically creates an /everline/ page.
 * Version: 1.0.0
 * Author: Best Buy Metals
 * Author URI: https://www.bestbuymetals.com
 * License: Proprietary
 * Text Domain: everline-page
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

define( 'EVERLINE_PAGE_VERSION', '1.0.0' );
define( 'EVERLINE_PAGE_DIR', plugin_dir_path( __FILE__ ) );
define( 'EVERLINE_PAGE_URL', plugin_dir_url( __FILE__ ) );

/**
 * Register Page Template in WordPress Page Attributes dropdown
 */
function everline_register_page_template( $templates ) {
  $templates['everline-template.php'] = __( 'EverLine Landing Page', 'everline-page' );
  return $templates;
}
add_filter( 'theme_page_templates', 'everline_register_page_template' );

/**
 * Intercept template loading and load plugin's custom template
 */
function everline_load_page_template( $template ) {
  if ( is_page() ) {
    $current_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
    if ( 'everline-template.php' === $current_template ) {
      $plugin_template = EVERLINE_PAGE_DIR . 'templates/everline-template.php';
      if ( file_exists( $plugin_template ) ) {
        return $plugin_template;
      }
    }
  }
  return $template;
}
add_filter( 'template_include', 'everline_load_page_template', 99 );

/**
 * Enqueue scripts and styles on EverLine template pages or shortcode usage
 */
function everline_enqueue_page_assets() {
  $is_everline = false;

  if ( is_page() ) {
    $current_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
    if ( 'everline-template.php' === $current_template ) {
      $is_everline = true;
    }
  }

  // Also check for shortcode in post content
  global $post;
  if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'everline_landing_page' ) ) {
    $is_everline = true;
  }

  if ( $is_everline ) {
    // Google Fonts: Raleway & Roboto Condensed from Brand Guidelines
    wp_enqueue_style(
      'everline-fonts',
      'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
      array(),
      null
    );

    // EverLine Scoped CSS
    wp_enqueue_style(
      'everline-style',
      EVERLINE_PAGE_URL . 'assets/css/everline.css',
      array(),
      EVERLINE_PAGE_VERSION
    );

    // EverLine JavaScript
    wp_enqueue_script(
      'everline-script',
      EVERLINE_PAGE_URL . 'assets/js/everline.js',
      array(),
      EVERLINE_PAGE_VERSION,
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'everline_enqueue_page_assets', 20 );

/**
 * Shortcode [everline_landing_page]
 */
function everline_page_shortcode() {
  // Enqueue assets if not already enqueued
  everline_enqueue_page_assets();

  ob_start();
  include EVERLINE_PAGE_DIR . 'templates/everline-content.php';
  return ob_get_clean();
}
add_shortcode( 'everline_landing_page', 'everline_page_shortcode' );

/**
 * Plugin Activation: Auto-create /everline/ page if it doesn't already exist
 */
function everline_activate_plugin() {
  $existing_page = get_page_by_path( 'everline' );
  if ( ! $existing_page ) {
    $page_id = wp_insert_post( array(
      'post_title'     => 'EverLine Metal Fencing',
      'post_name'      => 'everline',
      'post_status'    => 'publish',
      'post_type'      => 'page',
      'comment_status' => 'closed',
    ) );

    if ( $page_id && ! is_wp_error( $page_id ) ) {
      update_post_meta( $page_id, '_wp_page_template', 'everline-template.php' );
    }
  } else {
    update_post_meta( $existing_page->ID, '_wp_page_template', 'everline-template.php' );
  }
}
register_activation_hook( __FILE__, 'everline_activate_plugin' );
