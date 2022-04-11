<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <title>Responsive Car Website</title>

  <?php
  wp_head();
  ?>
</head>

<!-- BODY -->

<body>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <header class="header" id="header" data-blur-target>

      <!-- NAV CONTAINER -->
      <nav class="nav container">
        <a class="nav__logo" href="#">
          <i class="ri-steering-line"></i>
          Elecar
        </a>

        <!-- NAV MENU -->
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link active-link" href="#home">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#about">About</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#popular">Popular</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#featured">Featured</a>
            </li>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line"></i>
        </div>
      </nav>
    </header>

    <!-- HOME -->
    <section class="home section" id="home" data-blur-target>

      <!-- SHAPES -->
      <div class="shape shape__big"></div>
      <div class="shape shape__small"></div>

      <!-- HOME CONTAINER  -->
      <div class="home__container container grid">

        <!-- HOME DATA -->
        <div class="home__data">
          <h1 class="home__title">Choose The Best Car</h1>
          <h2 class="home__subtitle">Porsche Mission E</h2>
          <h3 class="home__elec">
            <i class="ri-flashlight-fill"></i>
            Electric car
          </h3>
        </div>
        <img class="home__img" src="<?= bloginfo('template_url'); ?>/assets/images/home.png" alt="🏡">

        <!-- HOME CAR -->
        <div class="home__car">
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-temp-cold-line"></i>
            </div>
            <h2 class="home__car-number">24°</h2>
            <h3 class="home__car-name">TEMPERATURE</h3>
          </div>
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-dashboard-3-line"></i>
            </div>
            <h2 class="home__car-number">873</h2>
            <h3 class="home__car-name">MILEAGE</h3>
          </div>
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-flashlight-fill"></i>
            </div>
            <h2 class="home__car-number">94%</h2>
            <h3 class="home__car-name">BATTERY</h3>
          </div>
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
          <img class="about__img" src="<?= bloginfo('template_url'); ?>/assets/images/about.png" alt="about">

          <!-- ABOUT CARD -->
          <div class="about__card">
            <h3 class="about__card-title">2.500+</h3>
            <p class="about__card-description">
              Supercharges placed along popular routes
            </p>
          </div>
        </div>

        <!-- ABOUT DATA -->
        <div class="about__data">
          <h2 class="section__title about__title">
            Machines With
            <br>
            Future Technology
          </h2>
          <p class="about__description">
            See the future with high-performance electric cars produced by renowned brands. They feature futuristic builds and designs with new and innovative platforms that last a long time.
          </p>
          <a class="button" href="#">Know more</a>
        </div>
      </div>
    </section>

    <!-- POPULAR -->
    <section class="popular section" id="popular" data-blur-target>
      <h2 class="section__title">
        Choose Your Electric Car
        <br>
        Of The Porsche Brand
      </h2>

      <!-- POPULAR CONTAINER -->
      <div class="popular__container container swiper">

        <!-- SWIPER WRAPPER -->
        <div class="swiper-wrapper">

          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo S</h3>
            <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular1.png" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>
                3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>
                356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>
                Electric
              </div>
            </div>
            <h3 class="popular__price">$175,900</h3>
            <button class="button popular__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Taycan</h3>
            <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular2.png" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>
                3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>
                356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>
                Electric
              </div>
            </div>
            <h3 class="popular__price">$114,900</h3>
            <button class="button popular__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo S Cross</h3>
            <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular3.png" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>
                3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>
                356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>
                Electric
              </div>
            </div>
            <h3 class="popular__price">$150,900</h3>
            <button class="button popular__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Boxster 718</h3>
            <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular4.png" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>
                3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>
                356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>
                Electric
              </div>
            </div>
            <h3 class="popular__price">$125,900</h3>
            <button class="button popular__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- POPULAR CARD -->
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Cayman</h3>
            <img class="popular__img" src="<?= bloginfo('template_url'); ?>/assets/images/popular5.png" alt="popular">

            <!-- POPULAR DATA -->
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>
                3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>
                356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>
                Electric
              </div>
            </div>
            <h3 class="popular__price">$128,900</h3>
            <button class="button popular__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="features section" data-blur-target>
      <h2 class="section__title">More Features</h2>

      <!-- FEATURES CONTAINER -->
      <div class="features__container container grid">
        <div class="features__group">
          <img class="features__img" src="<?= bloginfo('template_url'); ?>/assets/images/features.png" alt="features">

          <!-- FEATURES CARD -->
          <div class="features__card features__card-1">
            <h3 class="features__card-title">800v</h3>
            <p class="features__card-description">
              Turbo
              <br />
              Charging
            </p>
          </div>

          <!-- FEATURES CARD -->
          <div class="features__card features__card-2">
            <h3 class="features__card-title">350</h3>
            <p class="features__card-description">
              Km
              <br />
              Range
            </p>
          </div>
          <!-- FEATURES CARD -->
          <div class="features__card features__card-3">
            <h3 class="features__card-title">480</h3>
            <p class="features__card-description">
              Km
              <br />
              Travel
            </p>
          </div>
        </div>
      </div>
      <img class="features__map" src="<?= bloginfo('template_url'); ?>/assets/images/map.svg" alt="map">
    </section>

    <!-- FEATURED -->
    <section class="featured section" id="featured" data-blur-target>
      <h2 class="section__title">Featured Luxury Cars</h2>

      <!-- FEATURED CONTAINER -->
      <div class="featured__container container">

        <!-- FEATURED FILTERS -->
        <ul class="featured__filters">
          <li>
            <button class="featured__item" data-filter="all">
              <span>All</span>
            </button>
          </li>
          <li>
            <button class="featured__item" data-filter=".tesla">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/logo3.png" alt="logo">
            </button>
          </li>
          <li>
            <button class="featured__item" data-filter=".audi">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/logo2.png" alt="logo">
            </button>
          </li>
          <li>
            <button class="featured__item" data-filter=".porsche">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/logo1.png" alt="logo">
            </button>
          </li>
        </ul>

        <!-- FEATURED CONTENT -->
        <div class="featured__content grid">

          <!-- FEATURED CARD -->
          <article class="featured__card mix tesla">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model X</h3>
            <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/featured1.png" alt="featured">
            <h3 class="featured__price">$98,900</h3>
            <button class="button featured__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- FEATURED CARD -->
          <article class="featured__card mix tesla">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model 3</h3>
            <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/featured2.png" alt="featured">
            <h3 class="featured__price">$45,900</h3>
            <button class="button featured__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- FEATURED CARD -->
          <article class="featured__card mix audi">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Audi</h1>
            <h3 class="featured__subtitle">E-tron</h3>
            <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/featured3.png" alt="featured">
            <h3 class="featured__price">$175,900</h3>
            <button class="button featured__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- FEATURED CARD -->
          <article class="featured__card mix porsche">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Porsche</h1>
            <h3 class="featured__subtitle">Boxster 987</h3>
            <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/featured4.png" alt="featured">
            <h3 class="featured__price">$126,900</h3>
            <button class="button featured__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>

          <!-- FEATURED CARD -->
          <article class="featured__card mix porsche">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Porsche</h1>
            <h3 class="featured__subtitle">Panamera</h3>
            <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/featured5.png" alt="featured">
            <h3 class="featured__price">$126,900</h3>
            <button class="button featured__button">
              <i class="ri-shopping-bag-2-line"></i>
            </button>
          </article>
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
            Do You Want To Receive
            <br />
            Special Offers?
          </h2>
          <p class="offer__description">
            Be the first to receive all the information about our products and new cars by email by subscribing to our mailing list.
          </p>
          <a class="button" href="#">Subscribe Now</a>
        </div>
        <img class="offer__img" src="<?= bloginfo('template_url'); ?>/assets/images/offer.png" alt="offer">
      </div>
    </section>

    <!-- LOGOS -->
    <section class="logos section" data-blur-target>

      <!-- LOGOS CONTAINER -->
      <div class="logos__container container grid">

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo1.png" alt="logo">
        </div>

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo2.png" alt="logo">
        </div>

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo3.png" alt="logo">
        </div>

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo4.png" alt="logo">
        </div>

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo5.png" alt="logo">
        </div>

        <!-- LOGOS CONTENT -->
        <div class="logos__content">
          <img class="logos__img" src="<?= bloginfo('template_url'); ?>/assets/images/logo6.png" alt="logo">
        </div>
      </div>
    </section>

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