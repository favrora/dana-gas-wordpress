<?php

/**
 * Template Name: Investors
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
  <link href="<?php echo get_template_directory_uri() . '/dist/css/investors.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/investors-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>Investors</h1>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mt-5 mb-5">
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

  <!-- Get in touch section -->
  <section class="contact-section mt-5 mb-5">
    <div class="container">
      <div class="row mt-3 mb-3">

        <div class="col-12 col-md-4">
          <h2 class="default-h2">Get in touch with us</h2>
        </div>

        <div class="col-12 col-md-3">
          <div class="contact-section__name">Mohammed Mubaideen</div>
          <div class="contact-section__desc">Investor Relations & Corporate Communications</div>
        </div>

        <div class=" col-12 col-md-5 d-flex">
          <div class="d-flex contact-section__data">
            <div class="contact-section__data-icon">
              Icon
            </div>

            <div>
              Telephone<br> +971 (0)6 5194 499
            </div>
          </div>

          <div class="d-flex contact-section__data">
            <div class="contact-section__data-icon">
              Icon
            </div>

            <div>
              Email<br> ir@danagas.com
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>



  <?php include get_theme_file_path('/parts/why-invest.php'); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . '/dist/js/app.min.js'; ?>"></script>

</body>

</html>