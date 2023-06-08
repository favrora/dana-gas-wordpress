<?php
/**
 * Template Name: Governance reporting
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

            <div class="col-12 col-md-8 company-section__data">
                <div>
                    <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "تقارير الحوكمة"
                      : "Governance reporting"; ?></h2>

                    <?php echo get_field("governance_reporting_content"); ?>
                </div>
            </div>

            <div class="col-12 col-md-4 text-center">
                <img src="<?php echo get_field(
                  "governance_reporting_image_link"
                ); ?>" class="data-img" alt="About dana gas" loading="lazy">
            </div>

        </div>

      <div class="line-space-icon-br">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>
    </div>
</section>

<!-- Reserve report section -->
<section class="reports-section pt-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="26" title="Governance reports"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="26" title="تقارير الحوكمة"]'); ?>
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