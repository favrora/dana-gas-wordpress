<?php
/**
 * Template Name: Why invest
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
            <h2 class="default-h2"><?php echo get_field("wip_invest_title"); ?></h2>
            <?php echo get_field("wip_invest_list"); ?>

            <a href="<?php echo get_site_url(); ?>/contact/" class="btn btnWithProgress up">
              <?php echo get_field("wip_invest_button"); ?>
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-white.png"; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6 text-center">
          <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/why-invest-1-img.png'; ?>" class="data-img" alt="About dana gas" loading="lazy">
        </div>
      </div>

      <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
  </section>

  <!-- Countries -->
  <section class="countries-section mt-5 pt-5 mb-5">
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="title-green"><?php echo get_field("wip_kri_text"); ?></h2>
          <?php echo get_field("wip_invest_kri_list"); ?>
        </div>

        <div class="col-12 col-md-6">
          <h2 class="title-green"><?php echo get_field("wip_egypt_text"); ?></h2>
          <?php echo get_field("wip_invest_egypt_list"); ?>
        </div>

      </div>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mb-5">
    <div class="container">
      <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "قصتنا" : "Our Story"; ?></h2>
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/overview/1537-2/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/why-invest-card.png'; ?>" alt="Why invest in Dana Gas" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "لماذا الاستثمار في دانة غاز"
                  : "Why invest in Dana Gas"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/overview/vision-strategy-values/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/vision-strategy-card.png'; ?>" alt="Vision, strategy & values" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "الرؤية والاستراتيجية والقيم"
                  : "Vision, strategy & values"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/about-us/overview/group-structure/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/group-structure-card.png'; ?>" alt="Group structure" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                  ? "هيكل المجموعة"
                  : "Group structure"; ?></div>
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