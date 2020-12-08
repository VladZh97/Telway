<?php
get_header();
?>
<main>
  <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article>
    <div class="row">
      <div class="cookie col-12">
        <h1 class="cookie__title"><?php the_title(); ?></h1>
        <div class="cookie__text"><?php the_content(); ?></div>
      </div>
    </div>
  </article>
  <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
  <?php endif; ?>
  </div>
</main>
<?php
get_footer();