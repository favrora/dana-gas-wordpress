<?php
/**
 * Template Name: Operations KRI
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
    <?php wp_head(); ?>
</head>

<body class="why-invest-grey-bg">

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/operations-kri-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field("operations_title"); ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-7 company-section__data">
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

      <div class="col-12 col-md-5">
        <div class="overview-blocks">

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/gas-production.png"; ?>" alt="Gas production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross gas production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("gross_gas_production_value"); ?></div>
                <div class="overview-item__title-info">mmscfpd</div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/condensate-production.png"; ?>" alt="Condensate production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross condensate production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("condensate_production_value"); ?></div>
                <div class="overview-item__title-info">bblpd</div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/lpg-production.png"; ?>" alt="LPG production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross LPG production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("gross_lpg_production_value"); ?></div>
                <div class="overview-item__title-info">MTD</div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/net-production.png"; ?>" alt="Net production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Net production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("net_production_value"); ?></div>
                <div class="overview-item__title-info">kboepd</div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
        "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>


<!-- Reserves section -->
<section class="reserves-section mt-5 pt-5">
  <div class="container">

    <div class="row">
      <div class="col-12 col-md-6 content-vertical-center">
        <div>
          <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "محميات" : "Reserves"; ?></h2>
            <?php echo get_field("reserves_content"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <img src="<?php echo get_site_url() .
            "/wp-content/uploads/2023/06/kri-map.png"; ?>" alt="kri map" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Overview 2 section -->
<section class="overview-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
        <h2 class="default-h2 mt-2 mb-3"><?php echo ICL_LANGUAGE_CODE == "ar"
                ? "ملخص"
                : "Overview"; ?></h2>

          <?php echo get_field("overview_2_content"); ?>
      </div>

      <div class="col-12 col-md-6">
        <div class="overview-blocks mb-3">

          <div class="overview-item" style="margin: 0 auto 20px;">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/icons/gas-production.png"; ?>" alt="Gas production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross gas production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main">309</div>
                <div class="overview-item__title-info">mmscfpd</div>
              </div>
            </div>
          </div>

          <div class="overview-item" style="margin: 0 auto 20px;">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/icons/condensate-production.png"; ?>" alt="Condensate production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross condensate production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main">13.0</div>
                <div class="overview-item__title-info">bblpd</div>
              </div>
            </div>
          </div>

          <div class="overview-item" style="margin: 0 auto 20px;">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/icons/lpg-production.png"; ?>" alt="LPG production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Gross LPG production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main">976</div>
                <div class="overview-item__title-info">MTD</div>
              </div>
            </div>
          </div>

          <div class="overview-item" style="margin: 0 auto 20px;">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/icons/net-production.png"; ?>" alt="Net production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title">Net production</div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main">26.7</div>
                <div class="overview-item__title-info">kboepd</div>
              </div>
            </div>
          </div>

        </div>

        <img src="<?php echo get_site_url() .
            "/wp-content/uploads/2023/06/iraq-map.png"; ?>" alt="Development kri" loading="lazy">
      </div>
    </div>

    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Settlement section -->
<section class="settlement-section mt-5">
  <div class="container">

    <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/settlement-kri.png'; ?>" alt="Settlement kri" loading="lazy">

    <h2 class="default-h2 text-center mt-4 mb-3"><?php echo ICL_LANGUAGE_CODE == "ar"
      ? "مستعمرة"
      : "Settlement"; ?></h2>

    <div class="row">
      <div class="col-12 col-md-6">
          <?php echo get_field("settlement_content_1"); ?>
      </div>

      <div class="col-12 col-md-6">
          <?php echo get_field("settlement_content_2"); ?>
      </div>
    </div>

  </div>
</section>

<!-- Development section -->
<section class="development-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
          <?php echo get_field("development_content"); ?>
      </div>

      <div class="col-12 col-md-6">
        <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/kri-development-img.png'; ?>" alt="Development kri" loading="lazy">
      </div>
    </div>

    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Gas sale section -->
<section class="gas-sale-section mt-5 pt-5 pb-5">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6">
        <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/kri-gas-sale.png'; ?>" alt="Gas sale" loading="lazy">
      </div>

      <div class="col-12 col-md-6 content-vertical-center">
        <div>
          <h2 class="default-h2 mb-2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "بيع الغاز" : "Gas sale"; ?></h2>
            <?php echo get_field("gas_sale_content"); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section bottom-bg-section story pt-5 mt-5" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/bg-shape/grey-shape-end.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
    <div class="row mt-3">

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