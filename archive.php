<?php
get_header();
?>

<main class="aoun-archive">
  <div class="aoun-container">
    <h1 class="aoun-archive__title">
      <?php the_archive_title(); ?>
    </h1>

    <?php if ( have_posts() ) : ?>
      <div class="aoun-archive__grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'aoun-archive__item' ); ?>>
            <a href="<?php the_permalink(); ?>">
              <h2 class="aoun-archive__item-title"><?php the_title(); ?></h2>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p>Keine Einträge gefunden.</p>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
