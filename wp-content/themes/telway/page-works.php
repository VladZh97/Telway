<?php /* Template Name: Realizacje*/
get_header(); ?>


<main class="works">

<div class="works__top top-subsection" style="background-image: url(<?php the_field('works-top__image')?>)">
  <div class="container">
    <h1 class="subsection__title">
      <?php the_field('works-top__title')?>
    </h1>
  </div>
</div>

<section class="works__main">
<div class="container">
    <h2 class="works__des-title section__title">
      <?php the_field('works__des-title')?>
    </h2>

    <?php if( have_rows('works__list') ): ?>
          <ul class="works__list">
            <?php while( have_rows('works__list') ): the_row(); ?>
              <li class="works__list-item"><?php the_sub_field('works__list-item')?>
                  <div class="works__item">
                    <img src="<?php the_sub_field('works__item-img')?>" alt="Obrazek realizacji" class="works__item-img">
                    <div class="works__item-content">
                    <div class="works__item-top">
                    <h3 class="works__item-title"><?php the_sub_field('works__item-title')?></h3>
                    <p class="works__item-des"><?php the_sub_field('works__item-des')?>...</p>
                    </div>
                    <button class="works__item-btn btn">
                      <a href="<?php the_sub_field('works-btn-link')?>" class="btn-link">
                        <?php the_sub_field('works__btn-more');?>
                      </a>
                    </button>
                    </div>
                </div>
              
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
  </div>
</section>

</main>
<?php get_footer(); ?>