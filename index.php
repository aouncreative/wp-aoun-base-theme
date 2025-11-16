<?php
get_header();
?>

<main class="aoun-main">
  <div class="aoun-container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'aoun-main__article' ); ?>>
          <h1 class="aoun-main__title"><?php the_title(); ?></h1>
          <div class="aoun-main__content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Keine Inhalte gefunden.</p>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
