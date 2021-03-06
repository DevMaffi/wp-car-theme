<?php
get_header();
?>

<!-- HOME -->
<section class="home section" id="home" data-blur-target>

  <!-- SHAPES -->
  <div class="shape shape__big"></div>
  <div class="shape shape__small"></div>

  <!-- HOME CONTAINER  -->
  <div class="home__container container grid">

    <!-- HOME DATA -->
    <div class="home__data">
      <h1 class="home__title">
        <?php the_field('home_title'); ?>
      </h1>
      <h2 class="home__subtitle">
        <?php the_field('home_subtitle'); ?>
      </h2>
      <h3 class="home__elec">
        <?php the_field('home_elec_icon'); ?>
        <?php the_field('home_elec_text'); ?>
      </h3>
    </div>
    <img class="home__img" src="<?php the_field('home_img'); ?>" alt="🏡">

    <!-- HOME CAR -->
    <div class="home__car">
      <?php
      $posts = get_posts(array(
        'numberposts' => 3,
        'category_name' => 'car_data',
        'order_by' => 'date',
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
      ));

      foreach ($posts as $post) {
        setup_postdata($post);
      ?>
        <div class="home__car-data">
          <div class="home__car-icon">
            <?php the_field('car_data_icon'); ?>
          </div>
          <h2 class="home__car-number">
            <?php the_field('car_data_number'); ?>
          </h2>
          <h3 class="home__car-name">
            <?php the_field('car_data_text'); ?>
          </h3>
        </div>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>
    <a class="home__button" href="#about">START</a>
  </div>
</section>

<!-- ABOUT -->
<section class="about section" id="about" data-blur-target>

  <!-- ABOUT CONTAINER -->
  <div class="about__container container grid">

    <!-- ABOUT GROUP -->
    <div class="about__group">
      <img class="about__img" src="<?php the_field('about_img'); ?>" alt="about">

      <!-- ABOUT CARD -->
      <div class="about__card">
        <h3 class="about__card-title">
          <?php the_field('about_card_title'); ?>
        </h3>
        <p class="about__card-description">
          <?php the_field('about_card_description'); ?>
        </p>
      </div>
    </div>

    <!-- ABOUT DATA -->
    <div class="about__data">
      <h2 class="section__title about__title">
        <?php the_field('about_title'); ?>
      </h2>
      <p class="about__description">
        <?php the_field('about_description'); ?>
      </p>
      <a class="button" href="#">Know more</a>
    </div>
  </div>
</section>

<!-- POPULAR -->
<section class="popular section" id="popular" data-blur-target>
  <h2 class="section__title">
    <?php the_field('popular_title'); ?>
  </h2>

  <!-- POPULAR CONTAINER -->
  <div class="popular__container container swiper">

    <!-- SWIPER WRAPPER -->
    <div class="swiper-wrapper">
      <?php
      $posts = get_posts(array(
        'numberposts' => -1,
        'category_name' => 'popular',
        'order_by' => 'date',
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
      ));

      foreach ($posts as $post) {
        setup_postdata($post);
      ?>
        <!-- POPULAR CARD -->
        <article class="popular__card swiper-slide">
          <div class="shape shape__smaller"></div>
          <h1 class="popular__title">
            <?php the_title(); ?>
          </h1>
          <h3 class="popular__subtitle">
            <?php the_field('card_subtitle'); ?>
          </h3>
          <img class="popular__img" src="<?php the_post_thumbnail_url(); ?>" alt="popular">

          <!-- POPULAR DATA -->
          <div class="popular__data">
            <div class="popular__data-group">
              <i class="ri-dashboard-3-line"></i>
              <?php the_field('card_dash_spec'); ?>
            </div>
            <div class="popular__data-group">
              <i class="ri-funds-box-line"></i>
              <?php the_field('card_funds_spec'); ?>
            </div>
            <div class="popular__data-group">
              <i class="ri-charging-pile-2-line"></i>
              <?php the_field('card_charge_spec'); ?>
            </div>
          </div>
          <h3 class="popular__price">
            <?php the_field('card_price'); ?>
          </h3>
          <button class="button popular__button">
            <i class="ri-shopping-bag-2-line"></i>
          </button>
        </article>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- FEATURES -->
<section class="features section" data-blur-target>
  <h2 class="section__title">
    <?php the_field('features_title'); ?>
  </h2>

  <!-- FEATURES CONTAINER -->
  <div class="features__container container grid">
    <div class="features__group">
      <img class="features__img" src="<?php the_field('features_img'); ?>" alt="features">

      <?php
      $posts = get_posts(array(
        'numberposts' => 3,
        'category_name' => 'features',
        'order_by' => 'date',
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
      ));

      foreach ($posts as $key => $post) {
        setup_postdata($post);
      ?>
        <!-- FEATURES CARD -->
        <div class="features__card features__card-<?= ($key + 1) ?>">
          <h3 class="features__card-title">
            <?php the_field('card_title'); ?>
          </h3>
          <p class="features__card-description">
            <?php the_field('card_description'); ?>
          </p>
        </div>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>
  </div>
  <img class="features__map" src="<?= bloginfo('template_url'); ?>/assets/images/map.svg" alt="map">
</section>

<!-- FEATURED -->
<section class="featured section" id="featured" data-blur-target>
  <h2 class="section__title">
    <?php the_field('featured_title'); ?>
  </h2>

  <!-- FEATURED CONTAINER -->
  <div class="featured__container container">

    <!-- FEATURED FILTERS -->
    <ul class="featured__filters">
      <li>
        <button class="featured__item" data-filter="all">
          <span>All</span>
        </button>
      </li>

      <?php
      $posts = get_posts(array(
        'numberposts' => 3,
        'category_name' => 'featured_filters',
        'order_by' => 'date',
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
      ));

      foreach ($posts as $key => $post) {
        setup_postdata($post);
      ?>
        <li>
          <button class="featured__item" data-filter=".<?= the_field('filter_type') ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="logo">
          </button>
        </li>
      <?php
      }

      wp_reset_postdata();
      ?>
    </ul>

    <!-- FEATURED CONTENT -->
    <div class="featured__content grid">
      <?php
      $posts = get_posts(array(
        'numberposts' => -1,
        'category_name' => 'featured_cards',
        'order_by' => 'date',
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
      ));

      foreach ($posts as $key => $post) {
        setup_postdata($post);
      ?>
        <!-- FEATURED CARD -->
        <article class="featured__card mix <?= the_field('card_brand') ?>">
          <div class="shape shape__smaller"></div>
          <h1 class="featured__title">
            <?php the_title(); ?>
          </h1>
          <h3 class="featured__subtitle">
            <?php the_field('card_subtitle'); ?>
          </h3>
          <img class="featured__img" src="<?php the_post_thumbnail_url(); ?>" alt="featured">
          <h3 class="featured__price">
            <?php the_field('card_price'); ?>
          </h3>
          <button class="button featured__button">
            <i class="ri-shopping-bag-2-line"></i>
          </button>
        </article>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- OFFER -->
<section class="offer section" data-blur-target>

  <!-- OFFER CONTAINER -->
  <div class="offer__container container grid">
    <img class="offer__bg" src="<?= bloginfo('template_url'); ?>/assets/images/offer-bg.png" alt="offer bg">

    <!-- OFFER DATA -->
    <div class="offer__data">
      <h2 class="section__title offer__title">
        <?php the_field('offer_title'); ?>
      </h2>
      <p class="offer__description">
        <?php the_field('offer_description'); ?>
      </p>
      <a class="button" href="#">Subscribe Now</a>
    </div>
    <img class="offer__img" src="<?php the_field('offer_img'); ?>" alt="offer">
  </div>
</section>

<!-- LOGOS -->
<section class="logos section" data-blur-target>

  <!-- LOGOS CONTAINER -->
  <div class="logos__container container grid">
    <?php
    $posts = get_posts(array(
      'numberposts' => 6,
      'category_name' => 'logos',
      'order_by' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    foreach ($posts as $key => $post) {
      setup_postdata($post);
    ?>
      <!-- LOGOS CONTENT -->
      <div class="logos__content">
        <img class="logos__img" src="<?php the_post_thumbnail_url(); ?>" alt="logo">
      </div>
    <?php
    }

    wp_reset_postdata();
    ?>
  </div>
</section>

<?php
get_footer();
?>