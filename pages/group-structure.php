<?php

/**
 * Template Name: Group structure
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
  <link href="<?php echo get_template_directory_uri() . '/dist/css/group-structure.min.css'; ?>" rel="stylesheet">
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