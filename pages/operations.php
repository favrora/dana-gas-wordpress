<?php
/**
 * Template Name: Operations
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
  "/assets/images/operations-main-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "عمليات" : "Operations"; ?></h1>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section mt-5 mb-5">
    <div class="container">
        <div class="row slider-js mt-3">

            <div class="col-12 col-md-4 mb-3">
              <a href="<?php echo get_site_url(); ?>/operations/egypt/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_site_url() .
                                "/wp-content/uploads/2023/06/egypt-card-post.png"; ?>" alt="Egypt" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مصر" : "Egypt"; ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
              <a href="<?php echo get_site_url(); ?>/operations/kri/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_site_url() .
                                "/wp-content/uploads/2023/06/kri-card-post.png"; ?>" alt="Kurdistan Region of Iraq" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                              ? "إقليم كردستان العراق"
                              : "Kurdistan Region of Iraq"; ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
              <a href="<?php echo get_site_url(); ?>/operations/united-arab-emirates/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_site_url() .
                                "/wp-content/uploads/2023/06/uae-card-post-1.png"; ?>" alt="United Arab Emirates" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                              ? "الإمارات العربية المتحدة"
                              : "United Arab Emirates"; ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>