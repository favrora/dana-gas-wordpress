<?php
/**
 * Template Name: Reports
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/operations-kri.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() . "/dist/css/reports.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/reports-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "التقارير" : "Reports"; ?></h1>
    </div>
</section>

<!-- Annual reports section -->
<section class="company-section reports-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="20" title="Annual reports"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="20" title="تقارير سنوية"]'); ?>
          <?php endif; ?>
      </div>
    </div>

    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Presentations reports section -->
<section class="reports-section mt-5 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="29" title="Presentations"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="29" title="العروض التقديمية"]'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Integrated reports section -->
<section class="reports-section bottom-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br top-integrated">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="408" title="Integrated Report"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="408" title="تقرير متكامل"]'); ?>
          <?php endif; ?>
      </div>
    </div>

    <div class="line-space-icon-br bottom-bg">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Reserve report section -->
<section class="reports-section pt-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="21" title="Reserve report" ]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="21" title="تقرير الاحتياطي"]'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section bottom-bg-section story mt-5" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br" style="margin-top: -50px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row mt-3">

      <div class="col-12 col-md-4 mb-3">
        <a href="<?php echo get_site_url(); ?>/investors/reports/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/annual-report.png"; ?>" alt="View our Annual report 2019" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "اطلع على تقريرنا السنوي 2019"
                      : "View our Annual report 2019"; ?></div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="<?php echo get_site_url(); ?>/investors/event-calender/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/events-calendar.png"; ?>" alt="Events Calendar" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "تقويم الأحداث"
                      : "Events Calendar"; ?></div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="<?php echo get_site_url(); ?>/about-us/overview/1537-2/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field(
                  "why_invest_in_dana_gas"
              ); ?>" alt="Why invest in Dana Gas" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "لماذا الاستثمار في دانة غاز"
                      : "Why invest in Dana Gas"; ?></div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

    </div>

    <div class="line-space-icon-br bottom-bg">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Form section -->
<section class="form-section pt-5 mt-5">
  <div class="container">
    <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == "ar"
            ? "آخر تحديثات الأخبار"
            : "Latest news updates"; ?></h2>

      <?php if (ICL_LANGUAGE_CODE == "en"): ?>
          <?php echo do_shortcode('[contact-form-7 id="630" title="Contact Form"]'); ?>
      <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
          <?php echo do_shortcode('[contact-form-7 id="4706" title="Contact Form Arabic"]'); ?>
      <?php endif; ?>
  </div>
</section>

<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>