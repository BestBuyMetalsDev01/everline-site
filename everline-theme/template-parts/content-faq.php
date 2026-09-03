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
          <span class="accordion-question"><?php esc_html_e( 'How much does EverLine cost?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-1" role="region" aria-labelledby="faq-btn-1">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'If you’re looking for a permanent fence, EverLine is competitively priced and may even be more affordable than other permanent fencing options. For specific pricing or a quote, contact your local Best Buy Metals on or after the release date. As pricing will vary based on gauge, color, and length.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item" id="faq-item-2">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-2" id="faq-btn-2">
          <span class="accordion-num">02</span>
          <span class="accordion-question"><?php esc_html_e( 'What lengths does EverLine come in?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-2" role="region" aria-labelledby="faq-btn-2">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine will be available in 6 ft. high × 6 ft. long sections for TimberLine, and 4 ft. high × 8 ft. long sections for RidgeLine. Custom sizes will also be available.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item" id="faq-item-3">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-3" id="faq-btn-3">
          <span class="accordion-num">03</span>
          <span class="accordion-question"><?php esc_html_e( 'What is the warranty?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-3" role="region" aria-labelledby="faq-btn-3">
          <div class="accordion-panel-inner">
            <p><?php esc_html_e( 'EverLine offers different warranty coverage depending on the finish selected:', 'everline' ); ?></p>
            <ul class="faq-list">
              <li><strong><?php esc_html_e( 'Standard & HD Paint:', 'everline' ); ?></strong> <?php esc_html_e( '50-year finish warranty and 30-year fade/chalk warranty.', 'everline' ); ?></li>
              <li><strong><?php esc_html_e( 'Wood Print:', 'everline' ); ?></strong> <?php esc_html_e( '25-year finish warranty and 20-year fade/chalk warranty.', 'everline' ); ?></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item" id="faq-item-4">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-4" id="faq-btn-4">
          <span class="accordion-num">04</span>
          <span class="accordion-question"><?php esc_html_e( 'Can it be installed on concrete?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-4" role="region" aria-labelledby="faq-btn-4">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes. You would need to use steel post with a base to bolt into the concrete.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="accordion-item" id="faq-item-5">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-5" id="faq-btn-5">
          <span class="accordion-num">05</span>
          <span class="accordion-question"><?php esc_html_e( 'What gauge steel is EverLine?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-5" role="region" aria-labelledby="faq-btn-5">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine is available in two steel gauges: 24-gauge and 26-gauge, allowing you to choose the option that best fits your project’s needs.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="accordion-item" id="faq-item-6">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-6" id="faq-btn-6">
          <span class="accordion-num">06</span>
          <span class="accordion-question"><?php esc_html_e( 'What are the standard color options & can I do custom?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-6" role="region" aria-labelledby="faq-btn-6">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'EverLine will be offered in all of our 26 & 24 gauge colors. White, HD Black, and TigerWood will be stocked in the near future.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 7 -->
      <div class="accordion-item" id="faq-item-7">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-7" id="faq-btn-7">
          <span class="accordion-num">07</span>
          <span class="accordion-question"><?php esc_html_e( 'Can the post be different colors?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-7" role="region" aria-labelledby="faq-btn-7">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes, EverLine allows you to choose a different color for the fence posts and planks, giving you the flexibility to create a customized, two-tone look.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 8 -->
      <div class="accordion-item" id="faq-item-8">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-8" id="faq-btn-8">
          <span class="accordion-num">08</span>
          <span class="accordion-question"><?php esc_html_e( 'Do you guys sell 4x4 wood post weather treated?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-8" role="region" aria-labelledby="faq-btn-8">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'Yes. Best Buy Metals does sell weather-treated 4x4 wood posts. To eliminate wood you can also choose our EverPost which is a patent pending all metal design.', 'everline' ); ?>
          </div>
        </div>
      </div>

      <!-- Item 9 -->
      <div class="accordion-item" id="faq-item-9">
        <button class="accordion-trigger" aria-expanded="false" aria-controls="faq-panel-9" id="faq-btn-9">
          <span class="accordion-num">09</span>
          <span class="accordion-question"><?php esc_html_e( 'What is the turn around time?', 'everline' ); ?></span>
          <span class="accordion-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-panel" id="faq-panel-9" role="region" aria-labelledby="faq-btn-9">
          <div class="accordion-panel-inner">
            <?php esc_html_e( 'We expect a week on most projects initially. We will scale production as needed but the exact lead time may vary depending on the project. EverLine will also be stocked in the three standard color options in the near future, which will help make those options available with a much faster turnaround.', 'everline' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
