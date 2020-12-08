<footer class="footer">
  <div class="container">
    <div class="footer__inner">

    <a  href="<?php echo get_home_url()?>"><img class="footer__logo"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png"
      alt="Logo TelWay">
    </a>

      
      <?php
      wp_nav_menu(array(
        'container'      => '',
        'menu_id'        => 'footer__nav',
        'menu_class'     => 'footer__nav',
        'fallback_cb'    => 'thesis_nav_menu',
        'theme_location' => 'footer',
      ));
      ?>

    </div>
  </div>

  <div class="footer__seo">
    <a class="tworzenie_stron_www" title="tworzenie stron www" href="http://www.milleniumstudio.pl" target="_blank">projektowanie stron Milleniumstudio</a>
  </div>
</footer>
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>