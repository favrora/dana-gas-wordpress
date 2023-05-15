<!DOCTYPE html>
<html lang="en">

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
        <div class="about-pre-title">We are Focused on</div>

        <h1><?php echo get_field('title') ?></h1>

        <div class="about-end-title"><?php echo get_field('after_title') ?></div>

        <a href="/" class="btn btnWithProgress up">
          Learn more
          <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
        </a>
      </div>

      <div class="about-scroll">
        <div class="scroll-downs" id="scrollNextBlock">
          <div class="mouse-icon">
            <div class="mouse-icon-ln"></div>
          </div>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/triangle-down-white.png'; ?>" class="scroller'; ?>" alt="Triangle down icon">
        </div>
      </div>

      <div class="about-info-box">
        <div class="about-info-box__img">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/hand-leaf.png'; ?>" alt="Hand leaf icon">
        </div>

        <div>
          <div class="about-info-box__title">Dana Gas</div>
          <div class="about-info-box__desc">Sustainability</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Operations section -->
  <section class="operations-section">
    <div class="container">
      <div class="operations-section__pre-title">Operations</div>
      <h2 class="default-h2 uppercase-h2">Exploration & Production assets</h2>

      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
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
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
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
                <img src="https://renfaze.com/projects-data/creek-waters/creek-waters-1.webp" alt="Creek Waters by Emaar Properties" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">United Arab Emirates</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>
      </div>

      <a href="/" class="btn btnWithProgress mt-4 up">
        View all
        <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
      </a>
    </div>
  </section>


  <!-- Investors section -->
  <section class="investors-section mt-3">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-4 investors-section__box">
          <div class="text-brand mb-3">Investors</div>
          <h2 class="default-h2">The results centre</h2>
          <div class="investors-section__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industy.
          </div>
          <a href="/" class="btn btnWithProgress mt-4 up">
            View all
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
          </a>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="result-block">
            <div class="result-block__pre-title">Latest result</div>
            <div class="result-block__title">2022</div>

            <img class="result-block__bg" src="<?php echo get_template_directory_uri() . '/assets/images/result-block-bg.png'; ?>" loading="lazy">
            <img class="result-block__bg-mob" src="<?php echo get_template_directory_uri() . '/assets/images/result-block-bg-mobile.png'; ?>" loading="lazy">
          </div>
        </div>

        <div class="col-12 col-lg-5">
          <div class="row">

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </a>
            </div>

            <div class="col-6 col-md-4">
              <a href="/" class="result-links-box">
                <div class="result-links-box__pre-title text-brand">Q2 2022</div>
                <div class="result-links-box__title">Investor script</div>
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
          <div class="text-brand mb-3">Latest video</div>
          <h2 class="default-h2">Hear from the ceo</h2>
          <div>Established in 2005, Dana Gas is the first and largest private sector natural gas company in the Middle East and is listed on the Abu Dhabi Securities Exchange.</div>

          <a href="/" class="btn btnWithProgress mt-4 up">
            Our story
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
          </a>
        </div>

        <div class="col-12 col-md-6 col-lg-8 story-section__video">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/video-preview.png'; ?>" id="previewImg" alt=" Video preview" loading="lazy">
          <video id="previewVideo" class="d-none" preload="none">
            <source src="https://ftp.f1nalboss.de/data/imgly/videoplayer/testvid.mp4" type="video/mp4" />
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