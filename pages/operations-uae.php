<?php

/**
 * Template Name: Operations UAE
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
  <link href="<?php echo get_template_directory_uri() . '/dist/css/about-us.min.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/operations-bg.png'; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1><?php echo get_field('operations_title') ?></h1>
  </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-shape-bg.png'; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field('operations_title_2') ?></h2>
            <?php echo get_field('operations_description') ?>

          <div class="showMoreText d-none"><?php echo get_field('operations_show_more_description') ?></div>

          <button class="showMoreBtn btn btn-link pl-0">
              <?php echo get_field('button_show_more') ?>
            <img class="arrow-ic" src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          </button>
        </div>
      </div>

      <div class="col-12 col-md-6 text-center">
        <img src="<?php echo get_field('operations_image_link') ?>" class="data-img" alt="About dana gas" loading="lazy">
      </div>

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
              <img src="<?php echo get_field('egypt_card_image') ?>" alt="Egypt" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">Egypt</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field('kri_card_image') ?>" alt="Kurdistan Region of Iraq" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">Kurdistan Region of Iraq</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field('uae_card_image') ?>" alt="United Arab Emirates" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">United Arab Emirates</div>
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
<script src="<?php echo get_template_directory_uri() . '/dist/js/app.min.js'; ?>"></script>

</body>

</html>