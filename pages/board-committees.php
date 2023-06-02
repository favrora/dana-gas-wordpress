<?php
/**
 * Template Name: Board committees
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

<!-- Company-section -->
<section class="pt-5">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 company-section__data" style="margin: 0 auto;">
                <div>
                    <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "لجان مجلس الإدارة" : "Board committees" ?></h2>

                    <?php echo get_field("board_committees_content"); ?>
                </div>
            </div>

        </div>
    </div>
</section>



<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>