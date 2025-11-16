<?php
get_header();
?>

<main class="aoun-page">
  <div class="aoun-container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'aoun-page__article' ); ?>>
          <h1 class="aoun-page__title"><?php the_title(); ?></h1>
          <div class="aoun-page__content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
