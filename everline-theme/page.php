<?php
/**
 * Generic Page Template
 *
 * @package EverLine
 */

get_header(); ?>

<main id="primary" class="site-main" style="max-width: var(--max-width); margin: 0 auto; padding: var(--section-padding) 36px;">
  <?php
  while ( have_posts() ) :
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header" style="margin-bottom: 30px;">
        <h1 class="section-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content" style="font-size: 1.05rem; line-height: 1.7; color: var(--color-text-muted);">
        <?php the_content(); ?>
      </div>
    </article>
    <?php
  endwhile;
  ?>
</main>

<?php
get_footer();
