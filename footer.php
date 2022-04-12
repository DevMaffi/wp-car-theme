<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<!-- FOOTER -->
<footer class="footer section" data-blur-target>
  <div class="shape shape__big"></div>
  <div class="shape shape__small"></div>

  <!-- FOOTER CONTAINER -->
  <div class="footer__container container grid">

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <a class="footer__logo" href="#">
        <i class="ri-steering-line"></i>
        Elecar
      </a>
      <p class="footer__description">
        <?php the_field('footer_description'); ?>
      </p>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Company</h3>

      <?php
      wp_nav_menu([
        'menu' => 'Company menu',
        'container' => false,
        'menu_class' => 'footer__links',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'depth' => 1,
      ]);
      ?>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Information</h3>

      <?php
      wp_nav_menu([
        'menu' => 'Information menu',
        'container' => false,
        'menu_class' => 'footer__links',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'depth' => 1,
      ]);
      ?>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Follow us</h3>

      <!-- FOOTER SOCIAL -->
      <ul class="footer__social">
        <?php
        $posts = get_posts(array(
          'numberposts' => 3,
          'category_name' => 'social_links',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <a class="footer__social-link" href="<?php the_field('social_link_url'); ?>" target="_blank">
            <?php the_field('social_link_icon'); ?>
          </a>
        <?php
        }

        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>
  <span class="footer__copy">
    <?php the_field('footer_copy'); ?>
  </span>
</footer>
</main>

<!-- SCROLL UP -->
<a class="scroll-up" id="scroll-up" href="#">
  <i class="ri-arrow-up-line"></i>
</a>

<!-- svg element with blur filter applied -->
<svg class="hide-svg" id="svg-image-blur">
  <filter id="blur-effect">
    <feGaussianBlur stdDeviation="86"></feGaussianBlur>
  </filter>
</svg>

<?php
wp_footer();
?>
</body>

</html>