<?php
/**
 * Template Name: Working with us
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo("name"); ?></title>

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/careers.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/working-with-us-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field("careers_title"); ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
      <h2 class="default-h2"><?php echo get_field("working_with_us_title"); ?></h2>
        <div class="row">

            <div class="col-12 col-md-7 company-section__data">
                <div>
                    <?php echo get_field("working_with_us_description"); ?>
                </div>
            </div>

            <div class="col-12 col-md-5">
              <div class="company-data-box">
                <div class="company-data-box__icon">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/icons/employees-icon.png"; ?>" alt="Right arrow icon">
                </div>

                <div class="company-data-box__info">
                  <div class="company-data-box__info-title">Full-time employees</div>
                  <div class="company-data-box__info-number"><?php echo get_field("full-time_employees_data"); ?></div>
                </div>
              </div>

              <div class="company-data-box">
                <div class="company-data-box__icon">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/icons/training-icon.png"; ?>" alt="Right arrow icon">
                </div>

                <div class="company-data-box__info">
                  <div class="company-data-box__info-title">Training days achieved a</div>
                  <div class="company-data-box__info-number"><?php echo get_field(
                    "training_days_achieved_data"
                  ); ?></div>
                </div>
              </div>

              <div class="company-data-box">
                <div class="company-data-box__icon">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/icons/nationalities-icon.png"; ?>" alt="Right arrow icon">
                </div>

                <div class="company-data-box__info">
                  <div class="company-data-box__info-title">Nationalities represented</div>
                  <div class="company-data-box__info-number"><?php echo get_field(
                    "nationalities_represented_data"
                  ); ?></div>
                </div>
              </div>
            </div>

        </div>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section story mt-5 mb-5">
    <div class="container">
        <div class="row mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_field(
                              "working_with_us_card_image"
                            ); ?>" alt="Working with us" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Working with us</div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_field(
                              "career_opportunities_card_image"
                            ); ?>" alt="Career opportunities" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Career opportunities</div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_field(
                              "employment_scam_disclaimer_card_image"
                            ); ?>" alt="Employment scam disclaimer" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Employment scam disclaimer</div>
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