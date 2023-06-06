<?php
/**
 * Template Name: FAQ
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/faq.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/faq-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "المستثمرون" : "Investors" ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5 pb-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <h2 class="default-h2"><?php echo get_field("faq_title"); ?></h2>

    <div class="faq-question-box faqQuestionBox top-border">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title_1"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description_1"); ?>
      </div>
    </div>

    <div class="faq-question-box faqQuestionBox">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title2"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description2"); ?>
      </div>
    </div>

    <div class="faq-question-box faqQuestionBox">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title3"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description3"); ?>
      </div>
    </div>

    <div class="faq-question-box faqQuestionBox">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title4"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description4"); ?>
      </div>
    </div>

    <div class="faq-question-box faqQuestionBox">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title5"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description5"); ?>
      </div>
    </div>

    <div class="faq-question-box faqQuestionBox">
      <div class="faq-question-box__title">
          <?php echo get_field("faq_question_title6"); ?>

        <div><img class="arrow" src="<?php echo get_template_directory_uri() .
          "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
      </div>

      <div class="faq-question-box__content">
          <?php echo get_field("faq_question_description6"); ?>
      </div>
    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section story mb-5">
    <div class="container">
        <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "قصتنا" : "Our Story" ?></h2>
        <div class="row mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url() ?>/investors/reports/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                            "/assets/images/investors/annual-report.png"; ?>" alt="View our Annual report 2019" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "اطلع على تقريرنا السنوي 2019" : "View our Annual report 2019" ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url() ?>/investors/event-calender/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                            "/assets/images/investors/events-calendar.png"; ?>" alt="Events Calendar" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "تقويم الأحداث" : "Events Calendar" ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

          <div class="col-12 col-md-4 mb-3">
            <a href="<?php echo get_site_url() ?>/about-us/overview/1537-2/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_field(
                    "why_invest_in_dana_gas"
                  ); ?>" alt="Why invest in Dana Gas" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "لماذا الاستثمار في دانة غاز" : "Why invest in Dana Gas" ?></div>
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
<script src="<?php echo get_template_directory_uri() . "/dist/js/faq.min.js"; ?>"></script>

</body>

</html>