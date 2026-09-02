<?php
/**
 * Collections Section Template Part
 *
 * @package EverLine
 */
?>
<section class="collections-section" id="collections">
  <div class="collections-header-container">
    <div class="collections-heading-block">
      <span class="eyebrow"><?php esc_html_e( 'THE EVERLINE COLLECTIONS', 'everline' ); ?></span>
      <h2 class="section-title">
        <?php esc_html_e( 'ONE DESIGN LANGUAGE.', 'everline' ); ?><br>
        <?php esc_html_e( 'TWO WAYS TO DEFINE YOUR PROPERTY.', 'everline' ); ?>
      </h2>
    </div>
    <div class="collections-desc-block">
      <p class="collections-lead">
        <?php esc_html_e( 'Choose the warmth and privacy of TimberLine or the clean, open character of RidgeLine. Both bring the long-term performance of metal to the landscape.', 'everline' ); ?>
      </p>
    </div>
  </div>

  <!-- Side-by-side Showcase Cards -->
  <div class="collections-grid">
    <!-- Card 1: RidgeLine -->
    <article class="collection-card" id="ridgeline-card">
      <div class="collection-image-wrapper">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ridgeline.jpg' ); ?>" alt="<?php esc_attr_e( 'RidgeLine Architectural Open Rail Fence', 'everline' ); ?>" class="collection-img">
      </div>
      <div class="collection-info-box">
        <div class="collection-meta-row">
          <span class="collection-category"><?php esc_html_e( 'OPEN RAIL FENCE COLLECTION', 'everline' ); ?></span>
          <span class="collection-number">01</span>
        </div>
        <h3 class="collection-name"><?php esc_html_e( 'RIDGELINE', 'everline' ); ?></h3>
        <p class="collection-body">
          <?php esc_html_e( 'Inspired by ranches and rolling landscapes, RidgeLine defines property boundaries while maintaining visibility. Ideal for residential, agricultural, and estate applications.', 'everline' ); ?>
        </p>
        <div class="collection-features-list">
          <div class="feature-tag">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><?php esc_html_e( 'OPEN, ARCHITECTURAL SIGHTLINES', 'everline' ); ?></span>
          </div>
          <div class="feature-tag">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><?php esc_html_e( 'WOODGRAIN AND SOLID COLOR OPTIONS', 'everline' ); ?></span>
          </div>
        </div>
        <div class="collection-card-action">
          <button class="btn btn-outline btn-sm open-specs-btn" data-collection="ridgeline">
            <span><?php esc_html_e( 'VIEW SPECIFICATIONS', 'everline' ); ?></span>
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>
      </div>
    </article>

    <!-- Card 2: TimberLine -->
    <article class="collection-card" id="timberline-card">
      <div class="collection-image-wrapper">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/timberline.jpg' ); ?>" alt="<?php esc_attr_e( 'TimberLine Woodgrain Metal Privacy Fence', 'everline' ); ?>" class="collection-img">
      </div>
      <div class="collection-info-box">
        <div class="collection-meta-row">
          <span class="collection-category"><?php esc_html_e( 'CONTEMPORARY FENCE COLLECTION', 'everline' ); ?></span>
          <span class="collection-number">02</span>
        </div>
        <h3 class="collection-name"><?php esc_html_e( 'TIMBERLINE', 'everline' ); ?></h3>
        <p class="collection-body">
          <?php esc_html_e( 'Inspired by the warmth and character of natural wood, TimberLine features clean horizontal lines in privacy and rail configurations. Available in woodgrain and solid color options.', 'everline' ); ?>
        </p>
        <div class="collection-features-list">
          <div class="feature-tag">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><?php esc_html_e( 'WOOD-INSPIRED CHARACTER', 'everline' ); ?></span>
          </div>
          <div class="feature-tag">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><?php esc_html_e( 'PRIVACY AND RAIL CONFIGURATIONS', 'everline' ); ?></span>
          </div>
        </div>
        <div class="collection-card-action">
          <button class="btn btn-outline btn-sm open-specs-btn" data-collection="timberline">
            <span><?php esc_html_e( 'VIEW SPECIFICATIONS', 'everline' ); ?></span>
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>
      </div>
    </article>
  </div>
</section>
