<?php

/**
 * Template Name: Faq
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . '/dist/css/faq.min.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/faq-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field('investors_global_name') ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-shape-bg.png'; ?>)">
    <div class="container">
        <div class="row">
          <h2 class="default-h2"><?php echo get_field('faq_title') ?></h2>



        </div>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section story mb-5">
    <div class="container">
        <h2 class="default-h2"><?php echo get_field('our_story_title') ?></h2>
        <div class="row mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="View our Annual report 2019" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">View our Annual report 2019</div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Events Calendar" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Events Calendar</div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_field('why_invest_in_dana_gas') ?>" alt="Why invest in Dana Gas" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Why invest in Dana Gas</div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<?php include get_theme_file_path('/parts/why-invest.php'); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/faq.min.js'; ?>"></script>

</body>

</html>