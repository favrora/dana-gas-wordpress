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

    <title><?php wp_title(''); ?></title>

    <!-- Source files -->
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
        <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الاستدامة" : "Sustainability" ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-7 company-section__data">
                <div>
                    <h2 class="default-h2"><?php echo get_field("sustainability_title_2"); ?></h2>
                    <?php echo get_field("sustainability_description"); ?>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="overview-blocks">

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/gas-production.png"; ?>" alt="Injury Free Man-Hours" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Injury Free Man-Hours</div>
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
                              "/assets/images/icons/condensate-production.png"; ?>" alt="Recordable Injuries at Zora Gas Plant" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Recordable Injuries at Zora Gas Plant</div>
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
                              "/assets/images/icons/lpg-production.png"; ?>" alt="Certification For Head Office" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Certification For Head Office</div>
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
                              "/assets/images/icons/net-production.png"; ?>" alt="Net production icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Injury Free Days Achieved</div>
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
    </div>
</section>

<!-- Overview 2 section -->
<section class="overview-2-section pb-5 pt-5">
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
                              "/assets/images/icons/gas-production.png"; ?>" alt="Hazardous Waste Recycled" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Hazardous Waste Recycled</div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field("hazardous_waste"); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/condensate-production.png"; ?>" alt="Total Energy Consumption icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Total Energy Consumption</div>
                            <div class="d-flex align-content-end">
                                <div class="overview-item__title-main"><?php echo get_field("total_energy_2"); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="overview-item">
                        <div class="overview-item__img">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/icons/lpg-production.png"; ?>" alt="Total Water Footprint icon" loading="lazy">
                        </div>
                        <div class="overview-item__text">
                            <div class="overview-item__pre-title">Total Water Footprint</div>
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
      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Sustainability reports</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2021</div>
          <div class="reports-nav__item">2020</div>
          <div class="reports-nav__item">2019</div>
          <div class="reports-nav__item">2018</div>
          <div class="reports-nav__item">2017</div>
          <div class="reports-nav__item">2016</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2022/09/222208_Dana-Gas_Sustainability-Report-Sep8En.pdf" target="_blank">
              <div>Sustainability Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2021/08/2020-Sustainability-Report-web-1.pdf" target="_blank">
              <div>Sustainability Report 2020</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2020/11/Dana-Gas-SR_Pages_LR.pdf" target="_blank">
              <div>Sustainability Report 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>

            <a href="https://www.danagas.com/wp-content/uploads/2020/04/DGE-Economic-Impact-Report-Eng.pdf" target="_blank">
              <div>Dana Gas Egypt Impact Assessment Report 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/08/SReport-2018.pdf" target="_blank">
              <div>Sustainability Report 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/CP-KRI-Rep-2018.pdf" target="_blank">
              <div>CP KRI report 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/Dana-Gas-SR-2017.pdf" target="_blank">
              <div>Sustainability Report 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/Dana-Gas-SR-2016-LR.pdf" target="_blank">
              <div>Sustainability Report 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/AMAR_DG-Report-Q3.pdf" target="_blank">
              <div>AMAR report Q3</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/AMAR-Report-Q1.pdf" target="_blank">
              <div>AMAR report Q1</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/AMAR-_DG-Report-Q2.pdf" target="_blank">
              <div>AMAR report Q2</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>