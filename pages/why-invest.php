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

  <title><?php bloginfo("name"); ?></title>

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
      <h1><?php echo get_field("about_us_global_title"); ?></h1>
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

            <a href="/contact-us" class="btn btnWithProgress up">
              <?php echo get_field("wip_invest_button"); ?>
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

  <!-- Countries -->
  <section class="countries-section mt-5 mb-5">
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
      <h2 class="default-h2"><?php echo get_field("our_story_global_name"); ?></h2>
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/overview/1537-2/#sec-1537" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field(
                  "why_invest_in_dana_gas"
                ); ?>" alt="Why invest in Dana Gas" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Why invest in Dana Gas</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/overview/vision-strategy-values/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field(
                  "vision_strategy_values_image"
                ); ?>" alt="Vision, strategy & values" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Vision, strategy & values</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/overview/group-structure/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field("group_structure_image"); ?>" alt="Group structure" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Group structure</div>
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