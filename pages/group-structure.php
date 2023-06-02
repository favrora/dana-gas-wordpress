<?php
/**
 * Template Name: Group structure
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . "/dist/css/group-structure.min.css"; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-us-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "معلومات عنا" : "About US" ?></h1>
    </div>
  </section>

  <!-- Table section -->
  <section class="table-section mt-4 mb-5">
    <div class="container">
      <h2 class="default-h2"><?php echo get_field("group_structure_title"); ?></h2>
      <p><?php echo get_field("group_structure_description"); ?></p>

      <?php echo get_field("group_structure_subsidiaries_table"); ?>

      <?php echo get_field("group_structure_joint_operations_table"); ?>

      <?php echo get_field("group_structure_joint_ventures_table"); ?>

    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section story mb-5">
    <div class="container">
      <h2 class="default-h2"><?php echo get_field("our_story_title"); ?></h2>
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/about-us/overview/1537-2/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field(
                  "why_invest_in_dana_gas"
                ); ?>" alt="Why invest in Dana Gas" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "لماذا الاستثمار في دانة غاز" : "Why invest in Dana Gas" ?></div>
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
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الرؤية والاستراتيجية والقيم" : "Vision, strategy & values" ?></div>
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
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "هيكل المجموعة" : "Group structure" ?></div>
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