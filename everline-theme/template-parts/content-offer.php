<?php
/**
 * Launch Offer Template Part
 *
 * @package EverLine
 */
?>
<section class="launch-offer-section" id="launch-offer">
  <div class="launch-offer-container">
    <div class="offer-badge-col">
      <div class="offer-kicker-box">
        <span class="offer-kicker-label"><?php esc_html_e( 'LIMITED-TIME', 'everline' ); ?></span>
        <span class="offer-kicker-title"><?php esc_html_e( 'LAUNCH OFFER', 'everline' ); ?></span>
      </div>
      <div class="offer-discount-display">
        <span class="discount-percent">15%</span>
        <span class="discount-unit">OFF</span>
      </div>
    </div>

    <div class="offer-content-col">
      <h3 class="offer-headline"><?php esc_html_e( 'BE ONE OF THE FIRST TO EXPERIENCE EVERLINE.', 'everline' ); ?></h3>
      <p class="offer-description">
        <?php esc_html_e( 'Save 15% on fences purchased at pre-launch or within the first month of launch. Pre-orders begin September 15.', 'everline' ); ?>
      </p>
      <span class="offer-disclaimer"><?php esc_html_e( 'Offer valid September 15–October 31, 2026. Restrictions may apply.', 'everline' ); ?></span>
    </div>

    <div class="offer-action-col">
      <button class="btn btn-dark btn-offer" id="claimOfferBtn">
        <span><?php esc_html_e( 'GET LAUNCH PRICING', 'everline' ); ?></span>
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </button>
    </div>
  </div>

  <!-- Architectural Fence Track Border Motif -->
  <div class="fence-rail-divider">
    <div class="fence-rail-track"></div>
  </div>
</section>
