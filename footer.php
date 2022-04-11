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
        We offer the best electric cars of
        <br />
        the most recognized brands in
        <br />
        the world.
      </p>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Company</h3>

      <!-- FOOTER LINKS -->
      <ul class="footer__links">
        <li>
          <a class="footer__link" href="#">About</a>
        </li>
        <li>
          <a class="footer__link" href="#">Cars</a>
        </li>
        <li>
          <a class="footer__link" href="#">History</a>
        </li>
        <li>
          <a class="footer__link" href="#">Shop</a>
        </li>
      </ul>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Information</h3>

      <!-- FOOTER LINKS -->
      <ul class="footer__links">
        <li>
          <a class="footer__link" href="#">Request a quote</a>
        </li>
        <li>
          <a class="footer__link" href="#">Find a dealer</a>
        </li>
        <li>
          <a class="footer__link" href="#">Contact us</a>
        </li>
        <li>
          <a class="footer__link" href="#">Services</a>
        </li>
      </ul>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="footer__content">
      <h3 class="footer__title">Follow us</h3>

      <!-- FOOTER SOCIAL -->
      <ul class="footer__social">
        <a class="footer__social-link" href="https://www.facebook.com/" target="_blank">
          <i class="ri-facebook-fill"></i>
        </a>
        <a class="footer__social-link" href="https://www.instagram.com/" target="_blank">
          <i class="ri-instagram-line"></i>
        </a>
        <a class="footer__social-link" href="https://twitter.com/" target="_blank">
          <i class="ri-twitter-line"></i>
        </a>
      </ul>
    </div>
  </div>
  <span class="footer__copy">© 2022 Elecar. All rights reserved</span>
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