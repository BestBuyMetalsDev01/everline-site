<?php
/**
 * FAQ Accordion Template Part
 *
 * @package EverLine
 */

$phone = everline_get_mod( 'everline_phone', '(800) 728-4010' );
$phone_clean = preg_replace( '/[^0-9]/', '', $phone );
?>
<section class="faq-section" id="faq">
  <div class="faq-container">
    <div class="faq-intro-col">
      <span class="eyebrow"><?php esc_html_e( 'QUESTIONS, ANSWERED', 'everline' ); ?></span>
      <h2 class="faq-section-title">
        <?php esc_html_e( 'PLAN YOUR EVERLINE PROJECT WITH CONFIDENCE.', 'everline' ); ?>
      </h2>
      <p class="faq-intro-text">
        <?php esc_html_e( 'Find quick answers about product differences, applications, installation, availability, and ordering.', 'everline' ); ?>
      </p>
      <div class="faq-support-box">
        <p><?php esc_html_e( 'Need custom specs or architectural drawings?', 'everline' ); ?></p>
        <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="faq-phone-link">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span><?php printf( esc_html__( 'Speak with a Specialist: %s', 'everline' ), esc_html( $phone ) ); ?></span>
        </a>
      </div>
    </div>

    <div class="faq-accordion-col" role="region" aria-label="<?php esc_attr_e( 'Frequently Asked Questions', 'everline' ); ?>">
      <!-- Item 1 -->
      <div class="accordion-item" id="faq-item-1">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-1" id="faq-btn-1">
          <span class="accordion-num">01</span>
          <span class="accordion-question"><?php esc_html_e( 'What makes EverLine different from traditional fencing?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-1" role="region" aria-labelledby="faq-btn-1">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine bridges architectural elegance and industrial strength. Unlike standard wood or vinyl fences, EverLine is engineered with heavy-duty exterior-grade steel coated in high-performance weather-resistant finishes. It will never warp, crack, splinter, fade, or host moss and mold—providing pristine curb appeal year after year.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item" id="faq-item-2">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-2" id="faq-btn-2">
          <span class="accordion-num">02</span>
          <span class="accordion-question"><?php esc_html_e( 'Why choose metal fencing instead of wood?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-2" role="region" aria-labelledby="faq-btn-2">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Traditional wood requires ongoing pressure washing, chemical sealers, re-staining, and periodic board replacement. EverLine’s metal construction delivers the organic warmth and character of natural wood without the constant maintenance, insect vulnerability, dry rot, or fire hazard.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item" id="faq-item-3">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-3" id="faq-btn-3">
          <span class="accordion-num">03</span>
          <span class="accordion-question"><?php esc_html_e( 'Can EverLine be used around an entire property?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-3" role="region" aria-labelledby="faq-btn-3">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes. Both TimberLine and RidgeLine share a unified architectural design language and mounting system. You can install full-privacy TimberLine panels around backyards, patios, and pools, while transitioning effortlessly to open-rail RidgeLine for front yards, driveways, and expansive property boundaries.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item" id="faq-item-4">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-4" id="faq-btn-4">
          <span class="accordion-num">04</span>
          <span class="accordion-question"><?php esc_html_e( 'Can contractors install EverLine?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-4" role="region" aria-labelledby="faq-btn-4">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes! EverLine is built installer-ready for fencing contractors, general contractors, and landscape professionals. Best Buy Metals supplies comprehensive installation documentation, specification guides, brackets, and dedicated contractor project support.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="accordion-item" id="faq-item-5">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-5" id="faq-btn-5">
          <span class="accordion-num">05</span>
          <span class="accordion-question"><?php esc_html_e( 'Where can I buy EverLine?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-5" role="region" aria-labelledby="faq-btn-5">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine is exclusively distributed through Best Buy Metals branches and authorized professional partners. You can order directly by requesting launch pricing through this website or speaking with your local Best Buy Metals sales representative.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="accordion-item" id="faq-item-6">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-6" id="faq-btn-6">
          <span class="accordion-num">06</span>
          <span class="accordion-question"><?php esc_html_e( 'How quickly can I get my order?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-6" role="region" aria-labelledby="faq-btn-6">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Pre-orders officially open September 15, 2026. Production batches begin fulfillment in October 2026. Standard lead times once in full distribution run approximately 2 to 4 weeks depending on your order volume, destination, and selected finish options.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 7 -->
      <div class="accordion-item" id="faq-item-7">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-7" id="faq-btn-7">
          <span class="accordion-num">07</span>
          <span class="accordion-question"><?php esc_html_e( 'Is EverLine easy to install?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-7" role="region" aria-labelledby="faq-btn-7">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes. EverLine uses an engineered modular bracket and channel system designed to reduce installation hours compared to traditional custom metalwork. Components slide securely into place without any field welding required.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 8 -->
      <div class="accordion-item" id="faq-item-8">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-8" id="faq-btn-8">
          <span class="accordion-num">08</span>
          <span class="accordion-question"><?php esc_html_e( 'What warranties protect EverLine fencing?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-8" role="region" aria-labelledby="faq-btn-8">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine is backed by industry-leading warranties from Best Buy Metals. Painted finishes carry a 50-year paint warranty, a 50-year substrate warranty, and a 30-year fade/chalk warranty, engineered with primer and a heavy-gauge Galvalume® steel substrate under the paint. Unpainted Galvalume carries a 45-year warranty with a 55% aluminum and 45% zinc protective coating plus a clear acrylic overcoat.', 'everline' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
