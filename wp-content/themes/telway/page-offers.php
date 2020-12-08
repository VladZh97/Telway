<?php /* Template Name: Oferta*/
get_header(); ?>

<main class="offers">

<div class="offers__top top-subsection" style="background-image: url(<?php the_field('offers-top__image')?>)">
  <div class="container">
    <h1 class="subsection__title">
      <?php the_field('offers__title')?>
    </h1>
  </div>
</div>

<section class="offers__des">
  <div class="container">
    <h2 class="offers__des-title section__title">
      <?php the_field('offers__des-title')?>
    </h2>

    <div class="offers__row row">
      <div class="col-md-7">
        <div class="offers__des-text">
          <?php the_field('offers__des-text')?>
        </div>
        <div class="offers__image">
          <img src="<?php the_field('offers__image')?>" alt="Obrazek oferty">
        </div>
      </div>

      <div class="col-md-5">
        <?php if( have_rows('offers__list') ): ?>
          <ul class="offers__list">
            <?php while( have_rows('offers__list') ): the_row(); ?>
              <li class="offers__list-item"><?php the_sub_field('offers__list-item')?></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


</main>
<?php get_footer(); ?>