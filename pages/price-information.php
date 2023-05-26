<?php
/**
 * Template Name: Share price information
 */
?>

<!DOCTYPE html>
<html lang="en">

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
    "/assets/images/results-centre-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1>Share price information</h1>
    </div>
</section>

<!-- Annual reports section -->
<section class="reports-section pt-5">
    <div class="container">
        <div class="row">

            <div class="col-12 iframe-style">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</section>




<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>