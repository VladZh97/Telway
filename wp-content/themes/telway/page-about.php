<?php /* Template Name: O Nas*/
get_header(); ?>


<main class="about">

  <div class="about__top top-subsection" style="background-image: url(<?php the_field('about__image')?>)">
  <div class="container">
    <h1 class="subsection__title">
      <?php the_field('about__title')?>
    </h1>
  </div>
</div>

  <section class="about__des">
    <div class="container">
      <h2 class="about__des-title section__title">
        <?php the_field('about__des-title')?>
      </h2>
      <div class="row about__main">
        <div class="col-md-6 about__left">

          <p class="about__des-text">
            <?php the_field('about__des-text')?>
          </p>       
            <?php if( have_rows('about__des-list-l') ): ?>
              <ul class="about__des-list-l list">
                <?php while( have_rows('about__des-list-l') ): the_row(); ?>
                  <li class="list__item"><?php the_sub_field('list__item')?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
          <div class="about__des-image">
            <img src="<?php the_field('about__des-image')?>" alt="Logo">
          </div>


          <p class="about-list__title-r">
            <?php the_field('list__title-s')?>
          </p>
          <?php if( have_rows('about__des-list-r') ): ?>
              <ul class="about__des-list-r list">
                <?php while( have_rows('about__des-list-r') ): the_row(); ?>
                  <li class="list__item"><?php the_sub_field('list__item')?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="about-des__bottom">
        <div class="container">
          <div class="row about__bottom">
            <div class="col-md-6">
              <div class="about__bottom-text">
                <?php the_field('about__bottom-text')?>
              </div>
            </div>  

            <div class="col-md-6">
              <div class="about__bottom-image">
                <img src="<?php the_field('about__bottom-image')?>" alt="Logo partnera">
              </div>
            </div>  
          </div>  
        </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>