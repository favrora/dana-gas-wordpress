<?php
/**
 * Template Name: About Us
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . "/dist/css/about-us.min.css"; ?>" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() . "/dist/css/base.min.css"; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-us-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات عنا" : "About US"; ?></h1>
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

            <a href="<?php echo get_site_url(); ?>/about-us/overview/" class="btn btnWithProgress up">
              <?php echo ICL_LANGUAGE_CODE == "ar" ? "اقرأ أكثر" : "Read more"; ?>
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

      <div class="line-space-icon-br mt-5">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mt-5 pt-5 mb-5">
    <div class="container">
      <div class="row slider-js mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/board-and-management/board-of-directors" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/cards/board-management-card.png"; ?>" alt="Board & Management" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "مجلس الإدارة والإدارة"
                  : "Board & Management"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/governance/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/cards/governance-card.png"; ?>" alt="Governance" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "الحكم" : "Governance"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/risk-management/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/cards/risk-management.png"; ?>" alt="Risk management" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "إدارة المخاطر"
                  : "Risk management"; ?></div>
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