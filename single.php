<?php
get_header();
?>

<main class="aoun-single">
  <div class="aoun-container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'aoun-single__article' ); ?>>
          <h1 class="aoun-single__title"><?php the_title(); ?></h1>
          <div class="aoun-single__content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
