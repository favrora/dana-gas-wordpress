<?php

/**
 * Template Name: Investors
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
  <link href="<?php echo get_template_directory_uri() . '/dist/css/investors.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/investors-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>Investors</h1>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mt-5 mb-5">
    <div class="container">
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/results-centre.png'; ?>" alt="Results Centre" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Results Centre</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/reports-presentations.png'; ?>" alt="Reports and Presentations" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Reports & Presentations</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/regulatory-disclosures.png'; ?>" alt="Regulatory Disclosures" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Regulatory Disclosures</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/key-financials.png'; ?>" alt="Key Financials" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Key Financials</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/share-price.jpg'; ?>" alt="Share Price Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Share Price Information</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/events-calendar.png'; ?>" alt="Events Calendar" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Events Calendar</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/shareholder-information.png'; ?>" alt="Shareholder Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Shareholder Information</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/sukuk-information.png'; ?>" alt="Sukuk Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">Sukuk Information</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/investors/faq.png'; ?>" alt="FAQs" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title">FAQs</div>
                <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Get in touch section -->
  <section class="contact-section mt-5 mb-5">
    <div class="container">
      <div class="row mt-3 mb-3">

        <div class="col-12 col-md-4">
          <h2 class="default-h2">Get in touch with us</h2>
        </div>

        <div class="col-12 col-md-3">
          <div class="contact-section__name">Mohammed Mubaideen</div>
          <div class="contact-section__desc">Investor Relations & Corporate Communications</div>
        </div>

        <div class=" col-12 col-md-5 d-flex">
          <div class="d-flex contact-section__data">
            <div class="contact-section__data-icon">
              <img class="arrow-ic" src="<?php echo get_template_directory_uri() . '/assets/images/icons/phone.png'; ?>" alt="Phone icon">
            </div>

            <div>
              Telephone<br> <?php echo get_field('telephone_contact') ?>
            </div>
          </div>

          <div class="d-flex contact-section__data">
            <div class="contact-section__data-icon">
              <img class="arrow-ic" src="<?php echo get_template_directory_uri() . '/assets/images/icons/email.png'; ?>" alt="Email icon">
            </div>

            <div>
              Email<br> <?php echo get_field('email_contact') ?>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>



  <?php include get_theme_file_path('/parts/why-invest.php'); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . '/dist/js/app.min.js'; ?>"></script>

</body>

</html>