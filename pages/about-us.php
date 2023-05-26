<?php
/**
 * Template Name: About Us
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title(''); ?></title>

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . "/dist/css/about-us.min.css"; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-us-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>About US</h1>
    </div>
  </section>

  <!-- Company-section -->
  <section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 company-section__data">
          <div>
            <h2 class="default-h2"><?php echo get_field("about_title"); ?></h2>
            <?php echo get_field("about_description"); ?>

            <a href="/about-us/overview/" class="btn btnWithProgress up">
              Read more
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-white.png"; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="<?php echo get_template_directory_uri() .
            "/assets/images/about-dana-gas-img.png"; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mb-5">
    <div class="container">
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/board-and-management/board-of-directors" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field(
                  "board_management_card_image"
                ); ?>" alt="Board & Management" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Board & Management</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/governance/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field("governance_card_image"); ?>" alt="Governance" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Governance</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/risk-management/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field("risk_management_card_image"); ?>" alt="Risk management" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Risk management</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>


  <?php include get_theme_file_path("/parts/why-invest.php"); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>