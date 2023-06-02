<?php
/**
 * Template Name: Results centre
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . "/dist/css/operations-kri.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/results-centre-bg.png"; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1>Results centre</h1>
  </div>
</section>

<!-- Annual reports section -->
<section class="company-section reports-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
              <?php echo do_shortcode('[reports cat="28" show_filters="false" title="Latest results - 2023"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == 'ar') : ?>
              <?php echo do_shortcode('[reports cat="28" show_filters="false" title="آخر النتائج - 2023"]'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Presentations reports section -->
<section class="reports-section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
              <?php echo do_shortcode('[results cat="122" title="Results archive"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == 'ar') : ?>
              <?php echo do_shortcode('[results cat="122" title="أرشيف النتائج"]'); ?>
          <?php endif; ?>
      </div>

    </div>
  </div>
</section>



<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>