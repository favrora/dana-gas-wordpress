<?php
/**
 * Template Name: Careers
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
  <link href="<?php echo get_template_directory_uri() . "/dist/css/careers.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/careers-bg.png"; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "وظائف" : "Careers"; ?></h1>
  </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <h2 class="default-h2"><?php echo get_field("careers_title_2"); ?></h2>

      <div class="col-12 col-md-6 company-section__data">
        <div>
          <div class="border-text"><?php echo get_field("careers_pre_description"); ?></div>

            <?php echo get_field("careers_description"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
          <?php echo get_field("image_content"); ?>
        <img src="<?php echo get_template_directory_uri() .
            "/assets/images/careers/img-1.png"; ?>" class="data-img" alt="img" loading="lazy">
      </div>

    </div>

    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
        "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Opportunities section -->
<section class="opportunities-section pt-5 mt-5 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field("opportunities_title"); ?></h2>

          <?php echo get_field("opportunities_description"); ?>

        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="opportunities-box">
          <div class="opportunities-item">
            <img class="icon" src="<?php echo get_template_directory_uri() .
              "/assets/images/icons/employees-icon.png"; ?>" alt="icon">
            <div class="desc">Full-time Employees</div>
            <div class="num">146</div>
          </div>

          <div class="opportunities-item">
            <img class="icon" src="<?php echo get_template_directory_uri() .
              "/assets/images/icons/training-icon.png"; ?>" alt="icon">
            <div class="desc">Training Days Achieved</div>
            <div class="num">481</div>
          </div>

          <div class="opportunities-item">
            <img class="icon" src="<?php echo get_template_directory_uri() .
              "/assets/images/icons/nationalities-icon.png"; ?>" alt="icon">
            <div class="desc">Nationalities Represented</div>
            <div class="num">17</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Disclaimer section -->
<section class="disclaimer-section top-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/bg-shape/grey-shape-end.png"; ?>');padding-top: 30px;">
  <div class="container">
    <div class="line-space-icon-br" style="height: 150px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
        "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row pt-5">

      <div class="col-12 col-md-6">
        <div>
          <h2 class="default-h2"><?php echo get_field("disclaimer_title"); ?></h2>
            <?php echo get_field("disclaimer_description"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <img src="<?php echo get_template_directory_uri() .
            "/assets/images/careers/img-2.png"; ?>" class="data-img" alt="Employment scam disclaimer" loading="lazy">
      </div>

    </div>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>