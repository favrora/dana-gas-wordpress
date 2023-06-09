<?php
/**
 * Template Name: Operations Egypt
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

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/operations-egypt-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field("operations_title"); ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pb-0 pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-7 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field("operations_title_2"); ?></h2>

            <?php echo get_field("operations_description"); ?>
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
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج الغاز" : "Gas production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("gross_gas_production_value"); ?></div>
                <div class="overview-item__title-info"><?php echo ICL_LANGUAGE_CODE == "ar" ? "mmscfpd" : "mmscfpd"; ?></div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/condensate-production.png"; ?>" alt="Condensate production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مكثف" : "Condensate"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("condensate_production_value"); ?></div>
                <div class="overview-item__title-info"><?php echo ICL_LANGUAGE_CODE == "ar" ? "bblpd" : "bblpd"; ?></div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/lpg-production.png"; ?>" alt="LPG production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج غاز البترول المسال" : "LPG production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("gross_lpg_production_value"); ?></div>
                <div class="overview-item__title-info"><?php echo ICL_LANGUAGE_CODE == "ar" ? "MTD" : "MTD"; ?></div>
              </div>
            </div>
          </div>

          <div class="overview-item">
            <div class="overview-item__img">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/icons/net-production.png"; ?>" alt="Net production icon" loading="lazy">
            </div>
            <div class="overview-item__text">
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج" : "Production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("net_production_value"); ?></div>
                <div class="overview-item__title-info"><?php echo ICL_LANGUAGE_CODE == "ar" ? "kboepd" : "kboepd"; ?></div>
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
            "/wp-content/uploads/2023/06/operations-uae-2.png"; ?>" alt="Operations uae" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Overview 2 section -->
<section class="overview-2-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br top-integrated">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row">

      <div class="col-12 col-md-7 company-section__data">
        <div>
          <h2 class="default-h2"><?php echo get_field("overview_2_title"); ?></h2>

            <?php echo get_field("overview_2_content"); ?>
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
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج الغاز" : "Gas production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("gas_production_value_2"); ?></div>
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
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مكثف" : "Condensate"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("condensate_production_value_2"); ?></div>
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
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج غاز البترول المسال" : "LPG production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("lpg_production_value_2"); ?></div>
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
              <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إنتاج" : "Production"; ?></div>
              <div class="d-flex align-content-end">
                <div class="overview-item__title-main"><?php echo get_field("net_production_value_2"); ?></div>
                <div class="overview-item__title-info">kboepd</div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="line-space-icon-br top-integrated">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Reserves 2 section -->
<section class="reserves-2-section mt-5">
  <div class="container">

    <div class="row">
      <div class="col-12 col-md-6 content-vertical-center">
        <div>
          <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "محميات" : "Reserves"; ?></h2>
            <?php echo get_field("reserves_content_2"); ?>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <img src="<?php echo get_site_url() .
            "/wp-content/uploads/2023/06/egypt-2-map.png"; ?>" alt="Reserves" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Onshore assets section -->
<section class="onshore-section bottom-bg-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/bg-shape/shape-middle.png"; ?>)">
  <div class="container">
    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "الأصول البرية" : "Onshore assets"; ?></h2>
          <?php echo get_field("onshore_assets_pre_titile"); ?>
      </div>

      <div class="col-12 col-md-6">
          <h3 class="title-green"><?php echo ICL_LANGUAGE_CODE == "ar"
            ? "عمليات دلتا النيل"
            : "Nile Delta operations"; ?></h3>

        <p><?php echo get_field("nile_delta_operations"); ?> <span class="showMoreText d-none"><?php echo get_field(
   "nile_delta_operations_show_more"
 ); ?></span></p>

        <button class="showMoreBtn btn btn-link pl-0">
          <span class="showMoreTextSwitch"><?php echo ICL_LANGUAGE_CODE == "ar" ? "أظهر المزيد" : "Show more"; ?></span>
          <span class="showLessText d-none"><?php echo ICL_LANGUAGE_CODE == "ar" ? "عرض أقل" : "Show less"; ?></span>
          <img class="arrow-ic" src="<?php echo get_template_directory_uri() .
            "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Dropdown open icon">
        </button>
      </div>

      <div class="col-12 col-md-6">
        <h3 class="title-green"><?php echo ICL_LANGUAGE_CODE == "ar"
          ? "معمل الوسطاني للغاز"
          : "El Wastani Gas plant"; ?></h3>

        <p><?php echo get_field("gas_plant"); ?> <span class="showMoreText d-none"><?php echo get_field(
   "gas_plant_show_more"
 ); ?></span></p>

        <button class="showMoreBtn btn btn-link pl-0">
          <span class="showMoreTextSwitch"><?php echo ICL_LANGUAGE_CODE == "ar" ? "أظهر المزيد" : "Show more"; ?></span>
          <span class="showLessText d-none"><?php echo ICL_LANGUAGE_CODE == "ar" ? "عرض أقل" : "Show less"; ?></span>
          <img class="arrow-ic" src="<?php echo get_template_directory_uri() .
            "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Dropdown open icon">
        </button>
      </div>
    </div>

    <div class="line-space-icon-br top-integrated" style="margin-top: -30px;">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section story mt-5 pt-5 mb-5">
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