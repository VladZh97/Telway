<?php /* Template Name: Aktualności*/
get_header(); ?>


<main>
  <div class="news__top top-subsection" style="background-image: url(<?php the_field('news__top-image')?>)">
    <div class="container">
      <h1 class="subsection__title">
        <?php the_field('news__top-title')?>
      </h1>
    </div>
  </div>

  <section class="news__main">
    <div class="container">
        <h2 class="news__des-title section__title">
          <?php the_field('news__section-title')?>
        </h2>

            <?php if( have_rows('news__list') ): ?>
              <ul class="news__list">
                <?php while( have_rows('news__list') ): the_row(); ?>
                  <li class="news__list-item"><?php the_sub_field('news__list-item')?>
                  <div class="news__content row">
                    <div class="news__text col-md-6">
                      <h3 class="news__item-title"><?php the_sub_field('news__item-title')?></h3>
                      <p class="news__item-des">
                        <?php the_sub_field('news__item-des')?>...
                      </p>
                      <button class="news__item-btn btn">
                        <a href="<?php the_sub_field('news__btn-link')?>" class="btn-link">
                        <?php the_sub_field('news__btn-more')?>
                        </a>
                      </button>
                    </div>
                    
                    <div class="news__image col-md-6">
                      <img src="<?php the_sub_field('news__item-img')?>" alt="Obrazek aktualności">
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