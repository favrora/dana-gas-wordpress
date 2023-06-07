<?php
/**
 * Template Name: 404 Page
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/404.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- Content section -->
<section class="content-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/404-shape.png"; ?>')">
    <div class="container">
        <div class="row">

            <div class="box-error">
              <div class="box-error__title default-h2">
                4
                <img src="<?php echo get_template_directory_uri() . "/assets/images/bg-shape/logo-element.png"; ?>" alt="Logo element">
                4
              </div>

              <div class="box-error__error">
                  <?php echo ICL_LANGUAGE_CODE == 'ar' ? "عفوا ، الصفحة غير موجودة" : "Oops, Page not found" ?>
              </div>

              <div class="box-error__content">
                  <?php echo ICL_LANGUAGE_CODE == 'ar' ? "ربما تمت إزالة الصفحة التي تبحث عنها إذا تم تغيير اسمها أو أنها غير متاحة مؤقتًا." : "The page you are looking for might have been removed had its name changed or is temporarily unavailable." ?>
              </div>

              <a href="<?php echo get_site_url() ?>/" class="btn btnWithProgress mt-4 up">
                  <?php echo ICL_LANGUAGE_CODE == 'ar' ? "العودة إلى المنزل" : "Back to home" ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>