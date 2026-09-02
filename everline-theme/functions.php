<?php
/**
 * EverLine Theme Functions and Definitions
 *
 * @package EverLine
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

define( 'EVERLINE_VERSION', '1.0.0' );

/**
 * Theme Setup
 */
function everline_setup() {
  // Make theme available for translation
  load_theme_textdomain( 'everline', get_template_directory() . '/languages' );

  // Let WordPress manage document title
  add_theme_support( 'title-tag' );

  // Enable Post Thumbnails
  add_theme_support( 'post-thumbnails' );

  // Custom Logo support
  add_theme_support( 'custom-logo', array(
    'height'      => 75,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
  ) );

  // HTML5 Markup support
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ) );

  // Register Navigation Menus
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'everline' ),
  ) );
}
add_action( 'after_setup_theme', 'everline_setup' );

/**
 * Enqueue scripts and styles.
 */
function everline_scripts() {
  // Google Fonts (Raleway & Roboto Condensed) from Brand Guidelines
  wp_enqueue_style(
    'everline-google-fonts',
    'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
    array(),
    null
  );

  // Core Theme Stylesheet
  wp_enqueue_style(
    'everline-theme-style',
    get_template_directory_uri() . '/assets/css/theme.css',
    array(),
    EVERLINE_VERSION
  );

  // Root Stylesheet (theme declaration)
  wp_enqueue_style(
    'everline-root-style',
    get_stylesheet_uri(),
    array( 'everline-theme-style' ),
    EVERLINE_VERSION
  );

  // Core Theme Script
  wp_enqueue_script(
    'everline-theme-script',
    get_template_directory_uri() . '/assets/js/theme.js',
    array(),
    EVERLINE_VERSION,
    true
  );
}
add_action( 'wp_enqueue_scripts', 'everline_scripts' );

/**
 * WordPress Customizer Settings
 */
function everline_customize_register( $wp_customize ) {
  // EverLine Settings Section
  $wp_customize->add_section( 'everline_general_section', array(
    'title'       => esc_html__( 'EverLine Settings', 'everline' ),
    'priority'    => 30,
    'description' => esc_html__( 'Manage contact info, pre-order dates, and launch promotion copy.', 'everline' ),
  ) );

  // Phone Number
  $wp_customize->add_setting( 'everline_phone', array(
    'default'           => '(800) 728-4010',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  $wp_customize->add_control( 'everline_phone', array(
    'label'   => esc_html__( 'Support Phone Number', 'everline' ),
    'section' => 'everline_general_section',
    'type'    => 'text',
  ) );

  // Announcement Date
  $wp_customize->add_setting( 'everline_announcement_date', array(
    'default'           => 'PRE-ORDERS BEGIN SEPTEMBER 15',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  $wp_customize->add_control( 'everline_announcement_date', array(
    'label'   => esc_html__( 'Announcement Date', 'everline' ),
    'section' => 'everline_general_section',
    'type'    => 'text',
  ) );

  // Announcement Text
  $wp_customize->add_setting( 'everline_announcement_text', array(
    'default'           => 'Save 15% during the EverLine launch offer',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  $wp_customize->add_control( 'everline_announcement_text', array(
    'label'   => esc_html__( 'Announcement Text', 'everline' ),
    'section' => 'everline_general_section',
    'type'    => 'text',
  ) );

  // Promo Discount Code
  $wp_customize->add_setting( 'everline_promo_code', array(
    'default'           => 'EVERLINE15',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  $wp_customize->add_control( 'everline_promo_code', array(
    'label'   => esc_html__( 'Launch Promo Voucher Code', 'everline' ),
    'section' => 'everline_general_section',
    'type'    => 'text',
  ) );

  // Best Buy Metals External URL
  $wp_customize->add_setting( 'everline_bbm_url', array(
    'default'           => 'https://www.bestbuymetals.com',
    'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( 'everline_bbm_url', array(
    'label'   => esc_html__( 'Best Buy Metals Website URL', 'everline' ),
    'section' => 'everline_general_section',
    'type'    => 'url',
  ) );
}
add_action( 'customize_register', 'everline_customize_register' );

/**
 * Helper to get theme mod with fallback
 */
function everline_get_mod( $key, $default = '' ) {
  return get_theme_mod( $key, $default );
}
