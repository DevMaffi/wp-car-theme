<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <title>
    <?php
    bloginfo('name');
    echo ' | ';
    bloginfo('description');
    ?>
  </title>

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