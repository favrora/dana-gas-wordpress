<?php
/**
 * Template Name: Shareholder Information
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
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات المساهمين" : "Shareholder Information"; ?></h1>
    </div>
</section>

<!-- Annual reports section -->
<section class="company-section reports-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <?php echo do_shortcode('[reports cat="26" title="Governance reports"]'); ?>
                <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
                    <?php echo do_shortcode('[reports cat="26" title="تقارير الحوكمة"]'); ?>
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
                    <?php echo do_shortcode('[reports cat="272" title="General assembly meetings"]'); ?>
                <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
                    <?php echo do_shortcode('[reports cat="272" title="اجتماعات الهيئة العامة"]'); ?>
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
                    <?php echo do_shortcode('[reports cat="278" title="Memorandum & Articles of association"]'); ?>
                <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
                    <?php echo do_shortcode('[reports cat="278" title="عقد التأسيس والنظام الأساسي"]'); ?>
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
                    <?php echo do_shortcode('[reports cat="301" title="Investors rights guide"]'); ?>
                <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
                    <?php echo do_shortcode('[reports cat="301" title="دليل حقوق المستثمرين"]'); ?>
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

        <div class="row slider-js mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url(); ?>/investors/reports/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/card-annual-report.png'; ?>" alt="View our Annual report 2019" loading="lazy">
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
                            <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/events-calendar-card.png'; ?>" alt="Events Calendar" loading="lazy">
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
                            <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/why-invest-card.png'; ?>" alt="Why invest in Dana Gas" loading="lazy">
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

<!-- Content section -->
<section class="text-content-section pt-5 mt-5 pb-5">
  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-10" style="margin: 0 auto">
          <?php the_content(); ?>
      </div>

    </div>
  </div>
</section>

<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>