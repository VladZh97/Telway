<?php
get_header();
?>
<main>
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <div class="single__content row">
        <div class="single__text col-md-6">
            <h3 class="single__item-title"><?php the_title(); ?></h3>
            <div class="single__item-des"><?php the_content(); ?></div>
        </div>
        <div class="single__image col-md-6">
          <img src="<?php the_field('single__item-img')?>" alt="Obrazek aktualności">
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