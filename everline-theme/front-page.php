<?php
/**
 * The template for displaying the front page
 *
 * Template Name: EverLine Landing Page
 *
 * @package EverLine
 */

get_header(); ?>

<main id="primary" class="site-main">
  <?php
  // 1. Hero Section
  get_template_part( 'template-parts/content', 'hero' );

  // 2. Value Props Bar
  get_template_part( 'template-parts/content', 'value-props' );

  // 3. The EverLine Collections (RidgeLine & TimberLine)
  get_template_part( 'template-parts/content', 'collections' );

  // 4. Why Metal Fencing Split Section
  get_template_part( 'template-parts/content', 'why-metal' );

  // 5. 15% OFF Launch Offer Section
  get_template_part( 'template-parts/content', 'offer' );

  // 6. FAQ Accordion Section
  get_template_part( 'template-parts/content', 'faq' );
  ?>
</main>

<?php
get_footer();
