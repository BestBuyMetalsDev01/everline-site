<?php
/**
 * Template Name: EverLine Landing Page
 * Template Post Type: page
 *
 * @package EverLine_Page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( EVERLINE_PAGE_URL . 'assets/images/favicon.png' ); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url( EVERLINE_PAGE_URL . 'assets/images/favicon.ico' ); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( EVERLINE_PAGE_URL . 'assets/images/apple-touch-icon.png' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'everline-landing-body' ); ?>>
<?php wp_body_open(); ?>

<?php
include EVERLINE_PAGE_DIR . 'templates/everline-content.php';
?>

<?php wp_footer(); ?>
</body>
</html>
