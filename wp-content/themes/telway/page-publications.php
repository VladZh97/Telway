<?php /* Template Name: Publikacje*/
get_header(); ?>


<main>
  <div class="publications__top top-subsection" style="background-image: url(<?php the_field('publications__top-image')?>)">
    <div class="container">
      <h1 class="subsection__title">
        <?php the_field('publications__top-title')?>
      </h1>
    </div>
  </div>

  <section class="publications__main">
    <div class="container">
        <h2 class="publications__des-title section__title">
          <?php the_field('publications__section-title')?>
        </h2>

            <?php if( have_rows('publications__list') ): ?>
              <ul class="publications__list">
                <?php while( have_rows('publications__list') ): the_row(); ?>
                  <li class="publications__list-item"><?php the_sub_field('publications__list-item')?>
                  <div class="publications__content row">
                    <div class="publications__text col-md-6">
                      <h3 class="publications__item-title"><?php the_sub_field('publications__item-title')?></h3>
                      <p class="publications__item-des">
                        <?php the_sub_field('publications__item-des')?>...
                      </p>
                      <button class="publications__item-btn btn">
                        <a href="<?php the_sub_field('publications__btn-link')?>" class="btn-link">
                        <?php the_sub_field('publications__btn-more')?>
                        </a>
                      </button>
                    </div>
                    
                    <div class="publications__image col-md-6">
                      <img src="<?php the_sub_field('publications__item-img')?>" alt="Obrazek aktualności">
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