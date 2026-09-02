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

      <form class="modal-form" id="quoteForm">
        <div class="form-row form-row-2">
          <div class="form-group">
            <label for="fullName"><?php esc_html_e( 'Full Name', 'everline' ); ?> <span class="req">*</span></label>
            <input type="text" id="fullName" name="fullName" required placeholder="John Doe">
          </div>
          <div class="form-group">
            <label for="email"><?php esc_html_e( 'Email Address', 'everline' ); ?> <span class="req">*</span></label>
            <input type="email" id="email" name="email" required placeholder="john@example.com">
          </div>
        </div>

        <div class="form-row form-row-2">
          <div class="form-group">
            <label for="phone"><?php esc_html_e( 'Phone Number', 'everline' ); ?> <span class="req">*</span></label>
            <input type="tel" id="phone" name="phone" required placeholder="(555) 000-0000">
          </div>
          <div class="form-group">
            <label for="zipCode"><?php esc_html_e( 'Project Zip Code', 'everline' ); ?> <span class="req">*</span></label>
            <input type="text" id="zipCode" name="zipCode" required placeholder="37402">
          </div>
        </div>

        <div class="form-row form-row-2">
          <div class="form-group">
            <label for="projectType"><?php esc_html_e( 'I am a...', 'everline' ); ?></label>
            <select id="projectType" name="projectType">
              <option value="Homeowner"><?php esc_html_e( 'Homeowner', 'everline' ); ?></option>
              <option value="Fencing Contractor"><?php esc_html_e( 'Fencing Contractor', 'everline' ); ?></option>
              <option value="General Contractor"><?php esc_html_e( 'General Contractor / Builder', 'everline' ); ?></option>
              <option value="Architect / Designer"><?php esc_html_e( 'Architect / Landscape Designer', 'everline' ); ?></option>
              <option value="Commercial Developer"><?php esc_html_e( 'Commercial / Estate Developer', 'everline' ); ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="collectionChoice"><?php esc_html_e( 'Collection of Interest', 'everline' ); ?></label>
            <select id="collectionChoice" name="collectionChoice">
              <option value="Both Collections"><?php esc_html_e( 'Both (TimberLine + RidgeLine)', 'everline' ); ?></option>
              <option value="TimberLine"><?php esc_html_e( 'TimberLine (Privacy System)', 'everline' ); ?></option>
              <option value="RidgeLine"><?php esc_html_e( 'RidgeLine (Open Rail System)', 'everline' ); ?></option>
            </select>
          </div>
        </div>

        <div class="form-row form-row-2">
          <div class="form-group">
            <label for="estFootage"><?php esc_html_e( 'Estimated Linear Footage', 'everline' ); ?></label>
            <select id="estFootage" name="estFootage">
              <option value="Under 100 ft"><?php esc_html_e( 'Under 100 ft', 'everline' ); ?></option>
              <option value="100 - 250 ft" selected><?php esc_html_e( '100 - 250 ft', 'everline' ); ?></option>
              <option value="250 - 500 ft"><?php esc_html_e( '250 - 500 ft', 'everline' ); ?></option>
              <option value="500+ ft (Large Estate / Commercial)"><?php esc_html_e( '500+ ft (Large Estate / Commercial)', 'everline' ); ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="timeframe"><?php esc_html_e( 'Project Timeline', 'everline' ); ?></label>
            <select id="timeframe" name="timeframe">
              <option value="Pre-order (Sept 15 launch)"><?php esc_html_e( 'Pre-order for Sept 15 launch', 'everline' ); ?></option>
              <option value="1 - 2 Months"><?php esc_html_e( 'Within 1 - 2 Months', 'everline' ); ?></option>
              <option value="3 - 6 Months"><?php esc_html_e( '3 - 6 Months', 'everline' ); ?></option>
              <option value="Planning / Budgeting"><?php esc_html_e( 'Budgeting / Future Project', 'everline' ); ?></option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="notes"><?php esc_html_e( 'Project Notes or Questions (Optional)', 'everline' ); ?></label>
          <textarea id="notes" name="notes" rows="3" placeholder="<?php esc_attr_e( 'Tell us about your property layout, desired fence height, or gate requirements...', 'everline' ); ?>"></textarea>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-dark btn-block btn-lg" id="submitQuoteBtn">
            <span><?php esc_html_e( 'SUBMIT INQUIRY & LOCK IN 15% LAUNCH OFFER', 'everline' ); ?></span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <p class="form-privacy-note"><?php esc_html_e( 'Your information is secure and only used to respond to your inquiry. No spam guaranteed.', 'everline' ); ?></p>
        </div>
      </form>

      <!-- Success State Confirmation -->
      <div class="modal-success-state" id="modalSuccessState" style="display: none;">
        <div class="success-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2b302a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h3 class="success-title"><?php esc_html_e( 'Thank You! Inquiry Received', 'everline' ); ?></h3>
        <p class="success-msg"><?php esc_html_e( 'A Best Buy Metals representative will reach out shortly with product details, availability, and your 15% pre-launch voucher code.', 'everline' ); ?></p>
        <div class="voucher-box">
          <span class="voucher-label"><?php esc_html_e( 'PRE-ORDER PROMO CODE:', 'everline' ); ?></span>
          <span class="voucher-code"><?php echo esc_html( $promo_code ); ?></span>
        </div>
        <button class="btn btn-dark" id="closeSuccessBtn"><?php esc_html_e( 'BACK TO EVERLINE', 'everline' ); ?></button>
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
