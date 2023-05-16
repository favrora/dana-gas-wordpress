<?php

/**
 * Template Name: Our story
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
            <h2 class="default-h2">Our Story</h2>
            <p>Established in 2005, Dana Gas is the first and largest private sector natural gas company in the Middle East and is listed on the Abu Dhabi Securities Exchange.</p>
            <p>We have exploration and production, as well as processing and transportation assets in the Kurdistan Region of Iraq (KRI) and Egypt.</p>
            <p>In the KRI, Dana Gas is engaged in and has interests in upstream, midstream and downstream activities, including the exploration, production and processing of natural gas, gas transmission and the sale of petroleum products.</p>

            <p>In Egypt, we have high-quality gas assets and our principal operations are focused on developing and producing from 15 fields in the onshore Nile Delta. We are also have potentially three independent prospects with resource potential in the Eastern Mediterranean basin offshore.</p>

            <a href="/" class="btn btnWithProgress up">
              Show more
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

  <!-- Cards section -->
  <section class="cards-section mb-5">
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