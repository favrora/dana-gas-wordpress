<?php
/**
 * Template Name: Privacy & Terms & Disclaimer
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
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Content section -->
<section class="text-content-section pt-4">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-10" style="margin: 0 auto">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>