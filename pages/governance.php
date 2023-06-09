<?php
/**
 * Template Name: Governance
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/base.min.css"; ?>" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() . "/dist/css/governance.min.css"; ?>" rel="stylesheet">
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

  <!-- Title section -->
  <section class="title-section top-bg-section story pt-3 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container text-center">
      <h2 class="default-h2"><?php echo get_field("governance_title"); ?></h2>
      <p><?php echo get_field("governance_description"); ?></p>

      <div class="line-space-icon-br">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
  </section>

  <!-- Company section -->
  <section class="company-section pt-5 mt-5">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 company-section__data">
          <div>
            <h2 class="title-green"><?php echo get_field("governance_title_2"); ?></h2>
            <?php echo get_field("governance_description_2"); ?>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="<?php echo get_template_directory_uri() .
              "/assets/images/investors/governance-1.png"; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

      </div>
    </div>
  </section>

  <!-- Responsibilities section -->
  <section class="responsibilities-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
      "/assets/images/bg-shape/shape-middle.png"; ?>)">
    <div class="container">
      <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="title-green"><?php echo get_field("governance_title_3"); ?></h2>
        </div>

        <div class="col-12 col-md-6">
            <?php echo get_field("governance_description_3"); ?>
        </div>

        <div class="col-12 col-md-6">
            <?php echo get_field("governance_description_3_list"); ?>
        </div>
      </div>

      <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
  </section>

  <!-- Responsibilities section -->
  <section class="responsibilities-section mt-5 pt-5 mb-5">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6">
          <img src="<?php echo get_template_directory_uri() .
              "/assets/images/investors/governance-responsibilities.png"; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>

        <div class="col-12 col-md-6">
          <h2 class="title-green"><?php echo get_field("governance_title_4"); ?></h2>
          <?php echo get_field("governance_description_3_list"); ?>
        </div>

      </div>
    </div>
  </section>

  <!-- Governance section -->
  <section class="governance-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
      "/assets/images/bg-shape/shape-middle.png"; ?>)">
    <div class="container">
      <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center flex-wrap">
          <div>
            <h2 class="title-green"><?php echo get_field("governance_title_5"); ?></h2>
              <?php echo get_field("governance_description_5"); ?>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <img src="<?php echo get_template_directory_uri() .
              "/assets/images/investors/governance-corporate.png"; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>
      </div>

      <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section pt-5 mt-5 mb-5">
    <div class="container">
      <h2 class="default-h2"><?php echo get_field("governance_title"); ?></h2>

      <div class="row slider-js justify-content-center mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/governance/committees/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/cards/board-committees.png"; ?>" alt="Board Committees" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "لجان مجلس الإدارة"
                  : "Board Committees"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/governance/governance-reporting/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/cards/governance-reporting.png"; ?>" alt="Governance Reporting" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "تقارير الحوكمة"
                  : "Governance Reporting"; ?></div>
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