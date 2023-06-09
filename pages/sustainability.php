<?php
/**
 * Template Name: Sustainability
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
  "/assets/images/sustainability-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "الاستدامة" : "Sustainability"; ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-7 company-section__data">
                <div>
                    <h2 class="default-h2"><?php echo get_field("sustainability_title_2"); ?></h2>
                    <?php echo get_field("sustainability_description"); ?>

                    <a class="btn btn-transparent mt-3" href="<?php echo get_site_url() ?>/wp-content/uploads/2021/12/Dana-Gas-Group-HSSE-SP-Policy-Mar-2021.pdf" target="_blank" download><?php echo ICL_LANGUAGE_CODE == "ar"
                            ? "تحميل"
                            : "Download"; ?></a>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="overview-blocks">

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-1.png"; ?>" alt="Injury Free Man-Hours" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "ساعات عمل خالية من الإصابات" : "Injury Free Man-Hours"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field(
                                  "free_man-hours_value"
                                ); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-2.png"; ?>" alt="Recordable Injuries at Zora Gas Plant" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إصابات قابلة للتسجيل في معمل غاز الزوراء" : "Recordable Injuries at Zora Gas Plant"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field(
                                  "recordable_injuries_value"
                                ); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-3.png"; ?>" alt="Certification For Head Office" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "شهادة للمكتب الرئيسي" : "Certification For Head Office"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field(
                                  "certification_for_head_office_value"
                                ); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-4.png"; ?>" alt="Net production icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "تم تحقيق أيام خالية من الإصابات" : "Injury Free Days Achieved"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field(
                                  "injury_free_days"
                                ); ?></div>
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

<!-- Overview 2 section -->
<section class="overview-2-section pb-5 mt-5 pt-5">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-7 company-section__data">
                <div>
                    <h2 class="default-h2"><?php echo get_field("sustainability_title_2_content"); ?></h2>

                    <?php echo get_field("sustainability_title_2_content_text"); ?>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="overview-blocks">

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-5.png"; ?>" alt="Hazardous Waste Recycled" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إعادة تدوير المخلفات الخطرة" : "Hazardous Waste Recycled"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field("hazardous_waste"); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-6.png"; ?>" alt="Total Energy Consumption icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إجمالي استهلاك الطاقة" : "Total Energy Consumption"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field("total_energy_2"); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/sustainability-7.png"; ?>" alt="Total Water Footprint icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "إجمالي البصمة المائية" : "Total Water Footprint"; ?></div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field(
                                  "total_water_footprint_2"
                                ); ?></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sustainability reports section -->
<section class="reports-section pb-5 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if (ICL_LANGUAGE_CODE == "en"): ?>
              <?php echo do_shortcode('[reports cat="60" title="Sustainability reports"]'); ?>
          <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
              <?php echo do_shortcode('[reports cat="60" title="تقارير الاستدامة"]'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>