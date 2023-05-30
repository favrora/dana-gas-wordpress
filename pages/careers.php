<?php
/**
 * Template Name: Careers
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title(''); ?></title>

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . "/dist/css/careers.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/careers-bg.png"; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "وظائف" : "Careers" ?></h1>
  </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <h2 class="default-h2"><?php echo get_field("careers_title_2"); ?></h2>

      <div class="col-12 col-md-6 company-section__data">
        <div>
          <div class="border-text"><?php echo get_field("careers_pre_description"); ?></div>

            <?php echo get_field("careers_description"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
          <?php echo get_field("image_content"); ?>
        <img src="<?php echo get_field(
          "working_with_us_image"
        ); ?>" class="data-img" alt="Working with us" loading="lazy">
      </div>

    </div>
  </div>
</section>

<!-- Opportunities section -->
<section class="opportunities-section pt-5">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field("opportunities_title"); ?></h2>

          <?php echo get_field("opportunities_description"); ?>

        </div>
      </div>

      <div class="col-12 col-md-6">
          T
      </div>

    </div>
  </div>
</section>

<!-- Disclaimer section -->
<section class="disclaimer-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/bg-shape/grey-shape-end.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6">
        <div>
          <h2 class="default-h2"><?php echo get_field("disclaimer_title"); ?></h2>
            <?php echo get_field("disclaimer_description"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <img src="<?php echo get_field(
          "disclaimer_image"
        ); ?>" class="data-img" alt="Employment scam disclaimer" loading="lazy">
      </div>

    </div>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>