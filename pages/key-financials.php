<?php
/**
 * Template Name: Key financials
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/key-financials.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/key-financials-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "البيانات المالية الرئيسية" : "Key financials"; ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5">
  <div class="container">
    <div class="row">

      <div class="col-12">
          <?php the_content(); ?>
      </div>

    </div>
  </div>
</section>


<!-- Form section -->
<section class="form-section mt-5 pt-5">
  <div class="container">
    <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == "ar"
            ? "آخر تحديثات الأخبار"
            : "Latest news updates"; ?></h2>

      <?php if (ICL_LANGUAGE_CODE == "en"): ?>
          <?php echo do_shortcode('[contact-form-7 id="630" title="Contact Form"]'); ?>
      <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
          <?php echo do_shortcode('[contact-form-7 id="4706" title="Contact Form Arabic"]'); ?>
      <?php endif; ?>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/key-financials.min.js"; ?>"></script>

</body>

</html>