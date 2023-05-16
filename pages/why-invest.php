<?php

/**
 * Template Name: Why invest
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . '/dist/css/about-us.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-us-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>About US</h1>
    </div>
  </section>

  <!-- Company-section -->
  <section class="company-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-shape-bg.png'; ?>)">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 company-section__data">
          <div>
            <h2 class="default-h2">Why invest in Dana Gas</h2>
            <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
              <li>Mena largest</li>
              <li>Mena largest</li>
              <li>Mena largest</li>
            </ul>

            <a href="/contact-us" class="btn btnWithProgress up">
              Contact Us
              <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/about-dana-gas-img.png'; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Countries -->
  <section class="countries-section mt-5 mb-5">
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="title-green">KRI</h2>
          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

        <div class="col-12 col-md-6">
          <h2 class="title-green">Egypt</h2>
          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mt-5 mb-5">
    <div class="container">
      <h2 class="default-h2">Our Story</h2>
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Egypt</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Egypt</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Egypt</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>


  <?php include get_theme_file_path('/parts/why-invest.php'); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . '/dist/js/app.min.js'; ?>"></script>

</body>

</html>