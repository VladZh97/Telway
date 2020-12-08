<?php
/*
*
* Template Name: Strona glowna
*
*/
?>

<?php get_header(); ?>
<main>


<section class="slider">

  <?php if( have_rows('slide') ): ?>
    <ul class="slide owl-carousel">
      <?php while( have_rows('slide') ): the_row(); 
                ?>
        <li class="slide__item" style="background-image: url(<?php the_sub_field('slide__image')?>)">
          <div class="container">
            <div class="slide__container">

              <h1 class="slide__title">
                <?php the_sub_field('slide__title')?>
              </h1>
              <p class="slide__subtitle">
                <?php the_sub_field('slide__subtitle')?>
              </p>

              <button class="slide__btn btn">
                <a href="<?php the_sub_field('slide-btn-link')?>" class="btn-link">
                  <?php the_sub_field('slide__btn-more');?>
                </a>
              </button>
            </div>
                    
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</section>


<!-- ABOUT MAIN PAGE SECTION -->
<section class="about-page">
  <div class="container">
    <div class="about-page__inner">
      <h2 class="about-page__title section__title">
        <?php the_field('about-page__title')?>
      </h2>

      <div class="about-page__content row">
        <div class="about-page__text col-md-6">
          <p class="about-page__des">
            <?php the_field('about-page__des');?>...
          </p>
          <p class="about-page__des-bold">
          <?php the_field('about-page__des-bold')?>
          </p>
          <button class="about-page__btn btn">
            <a href="<?php the_field('about-btn-link')?>" class="btn-link">
            <?php the_field('about-page__btn')?>
            </a>
          </button>
        </div>
        
        <div class="about-page__image col-md-6">
          <img src="<?php the_field('about-page__image')?>" alt="O Nas">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- NEWS MAIN PAGE SECTION -->
<section class="news-page">
  <div class="container">
    <div class="news-page__inner">
      <h2 class="news-page__title section__title">
      <?php the_field('news-page__title')?>
      </h2>

      <div class="news-page__contener">
        <?php if( have_rows('news-page__content') ): ?>
          <ul id="news-page__content" class="news-page__content owl-carousel">
          <?php while( have_rows('news-page__content') ): the_row(); 
              ?>
              <li class="news-page__item">
                <h3 class="news-page__item-title">
                  <?php the_sub_field('news__item-title')?>
                </h3>

                <p class="news-page__item-des">
                  <?php the_sub_field('news__item-des')?>...
                </p>

                <button class="news-page__item-btn btn">
                  <a href="<?php the_sub_field('news__item-link')?>" class="news-page__link btn-link">
                    <?php the_sub_field('news__item-btn');?>
                  </a>
                </button>
              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>

        <div class="btn__container">
          <button class="news-page__btn btn-all">
            <a href="<?php the_field('news-btn-link')?>" class="btn-link">
            <?php the_field('news-page-btn-more');?>
            </a>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- SPECIALIZATIONS MAIN PAGE SECTION -->
<section class="spec-page">
  <div class="container">
    <div class="spec-page__inner">
      <h2 class="spec-page__title section__title">
      <?php the_field('spec-page__title')?>
      </h2>

      <div class="spec-page__contener">
        <?php if( have_rows('spec-page__content') ): ?>
          <ul class="spec-page__content">
          <?php while( have_rows('spec-page__content') ): the_row(); 
              ?>
              <li class="spec-page__item">
                <h3 class="spec-page__item-title">
                  <?php the_sub_field('spec__item-title')?>
                </h3>

                
                  <button class="spec-page__item-btn btn">
                    <a href="<?php the_sub_field('spec-page__item-link');?>" class="spec-page__link btn-link">
                      <?php the_sub_field('spec-page-btn');?>
                    </a>
                  </button>
              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>

        <div class="btn__container">
        <button class="spec-page__btn btn-all">
          <a href="<?php the_field('spec-page__btn-link')?>" class="btn-link">
          <?php the_field('spec-page-btn-more');?>
          </a>
        </button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- INFO PARTNERS -->
<section class="info-page">
  <div class="container">

  <?php if( have_rows('info-page__items') ): ?>
          <ul class="info-page__items">
          <?php while( have_rows('info-page__items') ): the_row(); 
              ?>
              <li class="info-page__item">
                <p class="info-page__title">
                  <?php the_sub_field('info-page__title')?>
                </p>
                <div class="info-page__img">
                  <img class="image" src="<?php the_sub_field('info-page__img')?>" alt="">
                </div>
              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
  </div>
</section>



<!-- CONTACT -->
<section class="contact-page" style="background-image: url(<?php the_field('contact__image')?>)">
  <div class="container">
    <div class="contact-page__inner row">
      <div class="col-md-4">
        <h2 class="contact-page__title">
          <?php the_field('contact-page__title')?>
        </h2>
        <p class="contact-page__adress">
          <?php the_field('contact-page__adress')?>
        </p>
      </div>
      <div class="col-md-4">
        <p class="contact-page__item">tel: <a href="tel:<?=get_field('contact-page-tel');?>"><?php the_field('contact-page-tel'); ?></a></p>
        <p class="contact-page__item">fax: <a href="fax:<?=get_field('contact-page-fax');?>"><?php the_field('contact-page-fax'); ?></a></p>
        <p class="contact-page__item">e-mail: <a href="mailto:<?=get_field('contact-page-mail');?>"><?php the_field('contact-page-mail'); ?></a></p>
      </div>
      <div class="col-md-4 contact-page__icons">
          <a href="<?php the_field('contact-icon-fb')?>" class="contact-page__icon" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt="Facebook">
          </a>
          <a href="<?php the_field('contact-icon-tw')?>" class="contact-page__icon" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tw.png" alt="Twitter">
          </a>
          <a href="<?php the_field('contact-icon-yt')?>" class="contact-page__icon" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.png" alt="YouTube">
          </a>
      </div>
    </div>
  </div>
</section>


</main>
<?php
get_footer();
