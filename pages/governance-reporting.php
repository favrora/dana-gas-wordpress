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
        <h1><?php echo get_field("about_us_global_title"); ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 company-section__data">
                <div>
                    <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "تقارير الحوكمة" : "Governance reporting" ?></h2>

                    <?php echo get_field("governance_reporting_content"); ?>
                </div>
            </div>

            <div class="col-12 col-md-4 text-center">
                <img src="<?php echo get_field(
                  "governance_reporting_image_link"
                ); ?>" class="data-img" alt="About dana gas" loading="lazy">
            </div>

        </div>
    </div>
</section>



<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>