<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <!-- Source files -->
  <?php wp_head(); ?>
</head>

<body>

  <!-- About section -->
  <section class="about-section" style="background-image: url('/assets/images/about-us-bg.png')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>About US</h1>
    </div>
  </section>

  <!-- Company-section -->
  <section class="company-section pt-5">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 company-section__data">
          <div>
            <h2 class="default-h2">About Dana Gas</h2>
            <p>Established in 2005, Dana Gas is the first and largest private sector natural gas company in the Middle East and is listed on the Abu Dhabi Securities Exchange.</p>
            <p>We have exploration and production, as well as processing and transportation assets in the Kurdistan Region of Iraq (KRI) and Egypt.</p>

            <a href="/" class="btn btnWithProgress up">
              Read more
              <img src="/assets/images/right-arrow-white.png" alt="Right arrow icon">
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="/assets/images/about-dana-gas-img.png" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mb-5">
    <div class="container">
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Egypt</div>
                <img class="arrow" src="/assets/images/right-arrow-green.png" alt="Right arrow icon">
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
                <img class="arrow" src="/assets/images/right-arrow-green.png" alt="Right arrow icon">
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
                <img class="arrow" src="/assets/images/right-arrow-green.png" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <?php include 'parts/why-invest.php' ?>
  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . '../dist/js/app.min.js'; ?>"></script>

</body>

</html>