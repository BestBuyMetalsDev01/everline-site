<?php
/**
 * The header for the EverLine theme
 *
 * @package EverLine
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.png' ); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.ico' ); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apple-touch-icon.png' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Announcement Bar -->
<div class="announcement-bar" id="announcementBar">
  <div class="announcement-content">
    <span class="announcement-date"><?php echo esc_html( everline_get_mod( 'everline_announcement_date', 'PRE-ORDERS BEGIN SEPTEMBER 15' ) ); ?></span>
    <span class="announcement-sep">•</span>
    <span class="announcement-text"><?php echo esc_html( everline_get_mod( 'everline_announcement_text', 'Save 15% during the EverLine launch offer' ) ); ?></span>
    <a href="#launch-offer" class="announcement-link" id="viewOfferLink">
      <?php esc_html_e( 'VIEW OFFER', 'everline' ); ?>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </a>
  </div>
  <button class="announcement-close" id="closeAnnouncement" aria-label="<?php esc_attr_e( 'Close Announcement', 'everline' ); ?>">&times;</button>
</div>

<!-- Main Navigation Header -->
<header class="header" id="mainHeader">
  <div class="header-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo-link" aria-label="<?php bloginfo( 'name' ); ?>">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/everline-black.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="brand-logo">
      <?php endif; ?>
      <span class="brand-subtext"><?php esc_html_e( 'A BEST BUY METALS PRODUCT', 'everline' ); ?></span>
    </a>

    <nav class="desktop-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'everline' ); ?>">
      <?php
      if ( has_nav_menu( 'primary' ) ) :
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'desktop-nav-list',
          'fallback_cb'    => false,
        ) );
      else :
      ?>
        <a href="#collections" class="nav-link"><?php esc_html_e( 'COLLECTIONS', 'everline' ); ?></a>
        <a href="#why-everline" class="nav-link"><?php esc_html_e( 'WHY EVERLINE', 'everline' ); ?></a>
        <a href="#faq" class="nav-link"><?php esc_html_e( 'FAQ', 'everline' ); ?></a>
      <?php endif; ?>
    </nav>

    <div class="header-actions">
      <button class="btn btn-dark btn-header" id="openQuoteModalBtn">
        <span><?php esc_html_e( 'CHECK AVAILABILITY', 'everline' ); ?></span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </button>

      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e( 'Toggle Navigation Menu', 'everline' ); ?>">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
      </button>
    </div>
  </div>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-drawer" id="mobileDrawer">
    <nav class="mobile-nav">
      <a href="#collections" class="mobile-nav-link"><?php esc_html_e( 'COLLECTIONS', 'everline' ); ?></a>
      <a href="#why-everline" class="mobile-nav-link"><?php esc_html_e( 'WHY EVERLINE', 'everline' ); ?></a>
      <a href="#launch-offer" class="mobile-nav-link"><?php esc_html_e( 'LAUNCH OFFER', 'everline' ); ?></a>
      <a href="#faq" class="mobile-nav-link"><?php esc_html_e( 'FAQ', 'everline' ); ?></a>
      <a href="#contact" class="mobile-nav-link"><?php esc_html_e( 'CONTACT', 'everline' ); ?></a>
    </nav>
    <div class="mobile-drawer-cta">
      <button class="btn btn-dark btn-full" id="mobileCheckAvailBtn">
        <span><?php esc_html_e( 'CHECK AVAILABILITY', 'everline' ); ?></span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </button>
    </div>
  </div>
</header>
