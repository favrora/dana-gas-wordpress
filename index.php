<?php
/*
* Template Name: Home
*/
global $danagas;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta info -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . '/dist/css/index.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/main-page-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <div class="about-box">
        <div class="about-pre-title"><?php echo get_field('pre_title') ?></div>

        <h1><?php echo get_field('title') ?></h1>

        <div class="about-end-title"><?php echo get_field('after_title') ?></div>

        <a href="/about-us/overview/" class="btn btnWithProgress up">
          <?php echo get_field('title_button') ?>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
        </a>
      </div>

      <div class="about-scroll">
        <div class="scroll-downs" id="scrollNextBlock">
          <div class="mouse-icon">
            <div class="mouse-icon-ln"></div>
          </div>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/triangle-down-white.png'; ?>" class="scroller" alt="Triangle down icon">
        </div>
      </div>

      <div class="about-info-box">
        <div class="about-info-box__img">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/hand-leaf.png'; ?>" alt="Hand leaf icon">
        </div>

        <div>
          <div class="about-info-box__title"><?php echo get_field('info_box_title') ?></div>
          <div class="about-info-box__desc"><?php echo get_field('info_box_description') ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Operations section -->
  <section class="operations-section">
    <div class="container">
      <div class="operations-section__pre-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "عمليات" : "Operations" ?></div>
      <h2 class="default-h2 uppercase-h2"><?php echo get_field('operations_title') ?></h2>

      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/operations/egypt/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field('egypt_main_card_image') ?>" alt="Egypt" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "مصر" : "Egypt" ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/operations/kri/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field('kri_main_card_image') ?>" alt="Kurdistan Region of Iraq" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "إقليم كردستان العراق" : "Kurdistan Region of Iraq" ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/operations/united-arab-emirates/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_field('uae_main_card_image') ?>" alt="United Arab Emirates" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الإمارات العربية المتحدة" : "United Arab Emirates" ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>
      </div>

      <a href="/operations/" class="btn btnWithProgress mt-4 up">
        <?php echo get_field('operations_button') ?>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
      </a>
    </div>
  </section>


  <!-- Investors section -->
  <section class="investors-section mt-3">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-4 investors-section__box">
          <div class="text-brand mb-3"><?php echo get_field('investors_pre_title') ?></div>
          <h2 class="default-h2"><?php echo get_field('investors_title') ?></h2>
          <div class="investors-section__desc"><?php echo get_field('investors_description') ?>
          </div>
          <a href="/investors/results-center/" class="btn btnWithProgress mt-4 up">
            <?php echo get_field('investors_button') ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
          </a>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="result-block">
            <div class="result-block__pre-title"><?php echo get_field('latest_result') ?></div>
            <div class="result-block__title">2022</div>

            <img class="result-block__bg" src="<?php echo get_template_directory_uri() . '/assets/images/result-block-bg.png'; ?>" loading="lazy">
            <img class="result-block__bg-mob" src="<?php echo get_template_directory_uri() . '/assets/images/result-block-bg-mobile.png'; ?>" loading="lazy">
          </div>
        </div>

        <div class="col-12 col-lg-5">
          <div class="row">

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2022/08/20220811-Investor-Script-H1-2022.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "نص المستثمر" : "Investor script" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2023/05/20220510-Q1-2023-Investor-Presentation.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "عرض تقديمي" : "Presentation" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2023/05/Dana-Gas-Q1-2023-Financial-statements-English.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "القوائم المالية" : "Financial statements" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2023/05/Dana-Gas-Q1-2023-Directors-report-English.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "تقرير مجلس الإدارة" : "Board report" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2023/05/20230510-Q1-2023-Press-Release-English.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "بيان صحفي" : "Press Release" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="https://www.danagas.com/wp-content/uploads/2023/05/20220510-Q1-2023-Investor-Presentation.pdf" class="result-links-box" target="_blank">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "عرض تقديمي" : "Presentation" ?></div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Story section -->
  <section class="story-section">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-4 story-section__text">
          <div class="text-brand mb-3"><?php echo get_field('video_pre_title') ?></div>
          <h2 class="default-h2"><?php echo get_field('ceo_title') ?></h2>
          <div><?php echo get_field('ceo_description') ?></div>

          <a href="/about-us/overview/" class="btn btnWithProgress mt-4 up">
            <?php echo get_field('ceo_button') ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
          </a>
        </div>

        <div class="col-12 col-md-6 col-lg-8 story-section__video">
          <img src="<?php echo get_field('ceo_video_peview_image_link'); ?>" id="previewImg" alt=" Video preview" loading="lazy">
          <video id="previewVideo" class="d-none" preload="none">
            <source src="<?php echo get_field('ceo_video_link') ?>" type="video/mp4" />
          </video>

          <div class="story-section__play">
            <div class="story-section__play-icon" id="startVideo">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play-icon.png'; ?>" alt="Play icon">
            </div>
            <div class="story-section__pulsation"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include get_theme_file_path('/parts/why-invest.php'); ?>
  <?php get_footer(); ?>

  <script src="<?php echo get_template_directory_uri() . '/dist/js/index.min.js'; ?>"></script>

</body>

</html>