<?php /* Template Name: Kontakt*/
get_header(); ?>

<main class="contact">

<div class="contact__top top-subsection" style="background-image: url(<?php the_field('contact-top__image')?>)">
  <div class="container">
    <h1 class="subsection__title">
      <?php the_field('contact-top__title')?>
    </h1>
  </div>
</div>

<section class="contact__des">
  <div class="container">
    <h2 class="contact__des-title section__title">
      <?php the_field('contact__des-title')?>
    </h2>

    <div class="contact__row">

      <div class="contact__row-item">
          <h2 class="contact__title">
            <?php the_field('contact__title')?>
          </h2>
          <p class="contact__adress">
            <?php the_field('contact__adress')?>
          </p>
      </div>

      <div class="contact__row-item">
          <p class="contact__item">tel: <a href="tel:<?=get_field('contact-tel');?>"><?php the_field('contact-tel'); ?></a></p>
          <p class="contact__item">fax: <a href="fax:<?=get_field('contact-fax');?>"><?php the_field('contact-fax'); ?></a></p>
          <p class="contact__item">e-mail: <a href="mailto:<?=get_field('contact-mail');?>"><?php the_field('contact-mail'); ?></a></p>
      </div>
      <div class="contact__row-item contact__icons">
            <a href="<?php the_field('contact-icon-fb')?>" class="contact__icon" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb1.png" alt="Facebook Icon">
            </a>
            <a href="<?php the_field('contact-icon-tw')?>" class="contact__icon" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tw1.png" alt="Twitter Icon">
            </a>
            <a href="<?php the_field('contact-icon-yt')?>" class="contact__icon" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt1.png" alt="YouTube Icon">
            </a>
      </div>
      <div class="contact__row-item">
        <p class="contact__info"><?php the_field('contact-nip'); ?></p>
        <p class="contact__info"><?php the_field('contact-regon');?></p>
        <p class="contact__info"><?php the_field('contact-krs'); ?></p>
      </div>
    </div>


      <?php if( have_rows('contact__persons') ): ?>
          <ul class="contact__persons">
            <?php while( have_rows('contact__persons') ): the_row(); ?>
              <li class="contact__persons-item person">
                <h3 class="person__title">
                  <?php the_sub_field('person__title')?>
                </h3>

                <?php if( have_rows('contact__person') ): ?>
                  <ul class="contact__person">
                    <?php while( have_rows('contact__person') ): the_row(); ?>
                      <li class="person__item">
                        <p class="person__prof">
                          <?php the_sub_field('person-prof'); ?>
                        </p>
                        <p class="person__name">
                          <?php the_sub_field('person-name'); ?>
                        </p>
                        <p class="person__email">
                          e-mail: <a href="mailto:<?=get_sub_field('person-mail');?>"><?php the_sub_field('person-mail'); ?></a>
                        </p>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
  </div>
  <div id="map"></div>
</main>
<?php get_footer(); ?>