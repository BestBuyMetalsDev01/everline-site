<?php
/**
 * Hero Section Template Part
 *
 * @package EverLine
 */
?>
<section class="hero-section" id="hero">
  <div class="hero-bg-container">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-clean.jpg' ); ?>" alt="<?php esc_attr_e( 'EverLine Architectural Open Rail Fence Landscape', 'everline' ); ?>" class="hero-bg-img">
    <div class="hero-overlay-gradient"></div>
  </div>

  <div class="hero-inner">
    <div class="hero-copy-box">
      <span class="eyebrow hero-eyebrow"><?php esc_html_e( 'NEW FROM BEST BUY METALS', 'everline' ); ?></span>
      <h1 class="hero-title"><?php esc_html_e( 'FOREVER FENCING NOW HAS A NAME.', 'everline' ); ?></h1>
      <p class="hero-subtitle">
        <?php esc_html_e( 'Clean lines, modern curb appeal, and metal durability—designed to complement your property for years to come.', 'everline' ); ?>
      </p>
    </div>

    <div class="hero-cta-box">
      <a href="#collections" class="btn btn-white hero-btn-primary">
        <span><?php esc_html_e( 'EXPLORE COLLECTIONS', 'everline' ); ?></span>
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
      <button class="btn btn-ghost hero-btn-secondary" id="heroLaunchPricingBtn">
        <span><?php esc_html_e( 'GET LAUNCH PRICING', 'everline' ); ?></span>
      </button>
    </div>
  </div>
</section>
