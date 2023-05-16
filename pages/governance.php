<?php

/**
 * Template Name: Governance
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
  <link href="<?php echo get_template_directory_uri() . '/dist/css/governance.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-us-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>About Us</h1>
    </div>
  </section>

  <!-- Title section -->
  <section class="title-section story pt-3 pb-5" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-shape-bg.png'; ?>)">
    <div class="container text-center">
      <h2 class="default-h2">Governance</h2>
      <p>Dana Gas corporate governance structure was designed to guarantee and protect the<br> interests of all stakeholders.</p>

    </div>
  </section>

  <!-- Company section -->
  <section class="company-section pt-5">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 company-section__data">
          <div>
            <h2 class="title-green">The Board of Directors</h2>
            <p>Established in 2005, Dana Gas is the first and largest private sector natural gas company in the Middle East and is listed on the Abu Dhabi Securities Exchange.</p>
            <p>We have exploration and production, as well as processing and transportation assets in the Kurdistan Region of Iraq (KRI) and Egypt.</p>
            <p>We have exploration and production, as well as processing and transportation assets in the Kurdistan Region of Iraq (KRI) and Egypt.</p>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/about-dana-gas-img.png'; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Responsibilities section -->
  <section class="responsibilities-section mt-5 mb-5">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <h2 class="title-green">Responsibilities of the<br> Board of Directors</h2>
        </div>

        <div class="col-12 col-md-6">
          <p>The main responsibilities of the Board of Directors include:</p>

          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

        <div class="col-12 col-md-6">
          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Responsibilities section -->
  <section class="responsibilities-section mt-5 mb-5">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/about-dana-gas-img.png'; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

        <div class="col-12 col-md-6">
          <h2 class="title-green">Responsibilities & Authority of the Executive Management</h2>
          <p>The Board of Directors has delegated the Company’s executive ma</p>

          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Governance section -->
  <section class="governance-section mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="title-green">​Corporate Governance Documents​</h2>

          <ul class="list-with-arrow" style="list-style-image: url('<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>')">
            <li>Mena largest</li>
            <li>Mena largest</li>
            <li>Mena largest</li>
          </ul>
        </div>

        <div class="col-12 col-md-6">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/about-dana-gas-img.png'; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section pt-3 mb-5">
    <div class="container">
      <h2 class="default-h2">Governance</h2>

      <div class="row justify-content-center mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Board Committees</div>
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
                <div class="card-title">Governance Reporting</div>
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