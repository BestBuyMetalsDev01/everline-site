<?php
/**
 * The template for displaying the footer
 *
 * @package EverLine
 */

$phone = everline_get_mod( 'everline_phone', '(800) 728-4010' );
$phone_clean = preg_replace( '/[^0-9]/', '', $phone );
$bbm_url = everline_get_mod( 'everline_bbm_url', 'https://www.bestbuymetals.com' );
$promo_code = everline_get_mod( 'everline_promo_code', 'EVERLINE15' );
?>

  <!-- Pre-Footer CTA Section -->
  <section class="cta-banner-section" id="contact">
    <div class="cta-banner-container">
      <div class="cta-banner-left">
        <span class="eyebrow eyebrow-light"><?php esc_html_e( 'START YOUR PROJECT', 'everline' ); ?></span>
        <h2 class="cta-banner-title">
          <?php esc_html_e( 'BRING EVERLINE TO YOUR NEXT PROPERTY.', 'everline' ); ?>
        </h2>
        <p class="cta-banner-text">
          <?php esc_html_e( 'Tell us what you are planning. A local Best Buy Metals representative can help with product options, availability, pricing, and ordering.', 'everline' ); ?>
        </p>
        <div class="cta-meta-row">
          <div class="cta-meta-col">
            <span class="cta-meta-label"><?php esc_html_e( 'PRE-ORDER WINDOW', 'everline' ); ?></span>
          </div>
          <div class="cta-meta-col text-right">
            <span class="cta-meta-value"><?php esc_html_e( 'OPENS SEPTEMBER 15, 2026', 'everline' ); ?></span>
          </div>
        </div>
      </div>

      <div class="cta-banner-right">
        <div class="contact-card">
          <p class="contact-card-text">
            <?php esc_html_e( 'For current EverLine options, pricing, and ordering information, connect directly with your local Best Buy Metals team.', 'everline' ); ?>
          </p>
          <button class="btn btn-sage btn-block" id="contactSalesBtn">
            <span><?php esc_html_e( 'CONTACT BEST BUY METALS', 'everline' ); ?></span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <div class="contact-card-phone">
            <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="phone-link">
              <?php printf( esc_html__( 'OR CALL %s', 'everline' ), esc_html( $phone ) ); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Global Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-link">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/everline-logo-white.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo">
        </a>
      </div>

      <div class="footer-tagline">
        <span><?php esc_html_e( 'INSPIRED DESIGN', 'everline' ); ?></span>
        <span class="tagline-dot">•</span>
        <span><?php esc_html_e( 'PROVEN PROTECTION', 'everline' ); ?></span>
      </div>

      <div class="footer-external">
        <a href="<?php echo esc_url( $bbm_url ); ?>" target="_blank" rel="noopener" class="footer-external-link">
          <span><?php esc_html_e( 'VISIT BEST BUY METALS', 'everline' ); ?></span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
        </a>
      </div>
    </div>
    <div class="footer-bottom-bar">
      <div class="footer-bottom-container">
        <p class="copyright"><?php printf( esc_html__( '© %s Best Buy Metals. All rights reserved. EverLine™ is a trademark of Best Buy Metals.', 'everline' ), date('Y') ); ?></p>
        <div class="footer-legal-links">
          <a href="#"><?php esc_html_e( 'Privacy Policy', 'everline' ); ?></a>
          <a href="#"><?php esc_html_e( 'Terms of Sale', 'everline' ); ?></a>
          <a href="#"><?php esc_html_e( 'Warranty Details', 'everline' ); ?></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal: Check Availability / Launch Quote Request -->
  <div class="modal-backdrop" id="quoteModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-dialog">
      <div class="modal-header">
        <div class="modal-header-text">
          <span class="modal-badge"><?php esc_html_e( 'LAUNCH OFFER APPLIED • 15% OFF', 'everline' ); ?></span>
          <h3 class="modal-title" id="modalTitle"><?php esc_html_e( 'Plan Your EverLine Project', 'everline' ); ?></h3>
          <p class="modal-subtitle"><?php esc_html_e( 'Connect with a Best Buy Metals fence specialist for specs, pricing, and availability.', 'everline' ); ?></p>
        </div>
        <button class="modal-close" id="closeQuoteModal" aria-label="<?php esc_attr_e( 'Close modal', 'everline' ); ?>">&times;</button>
      </div>

      <div class="modal-body">
        <script src="https://js.hsforms.net/forms/embed/6362600.js" defer></script>
        <div class="hs-form-frame" data-region="na1" data-form-id="7051366e-60dd-4018-b004-5660ed5241e8" data-portal-id="6362600"></div>
      </div>
    </div>
  </div>

  <!-- Modal: Specifications Quick-View -->
  <div class="modal-backdrop" id="specsModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="specsTitle">
    <div class="modal-dialog modal-dialog-lg">
      <div class="modal-header">
        <div class="modal-header-text">
          <span class="modal-badge"><?php esc_html_e( 'ARCHITECTURAL SPECIFICATIONS', 'everline' ); ?></span>
          <h3 class="modal-title" id="specsTitle"><?php esc_html_e( 'Collection Technical Details', 'everline' ); ?></h3>
        </div>
        <button class="modal-close" id="closeSpecsModal" aria-label="<?php esc_attr_e( 'Close specifications', 'everline' ); ?>">&times;</button>
      </div>

      <div class="specs-modal-body" id="specsModalContent">
        <!-- Injected dynamically by theme.js -->
      </div>
    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>
