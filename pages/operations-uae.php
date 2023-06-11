<?php
/**
 * Template Name: Operations UAE
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
  "/assets/images/operations-bg.png"; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1><?php echo get_field("operations_title"); ?></h1>
  </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field("operations_title_2"); ?></h2>
            <?php echo get_field("operations_description"); ?>

          <div class="showMoreText d-none"><?php echo get_field("operations_show_more_description"); ?></div>

          <button class="showMoreBtn btn btn-link pl-0">
            <span class="showMoreTextSwitch"><?php echo ICL_LANGUAGE_CODE == "ar" ? "أظهر المزيد" : "Show more"; ?></span>
            <span class="showLessText d-none"><?php echo ICL_LANGUAGE_CODE == "ar" ? "عرض أقل" : "Show less"; ?></span>
            <img class="arrow-ic" src="<?php echo get_template_directory_uri() .
              "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Dropdown open icon">
          </button>
        </div>
      </div>

      <div class="col-12 col-md-6 text-center">
        <img src="<?php echo get_site_url() .
            "/wp-content/uploads/2023/06/uae-map.png"; ?>" class="data-img" alt="About dana gas" loading="lazy">
      </div>

    </div>

    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section story pt-5 mt-5 mb-5">
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