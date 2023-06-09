<?php
/**
 * Template Name: Investors
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
  <link href="<?php echo get_template_directory_uri() . "/dist/css/investors.min.css"; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/investors-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "المستثمرون" : "Investors"; ?></h1>
    </div>
  </section>

  <!-- Cards section -->
  <section class="cards-section mt-5 mb-5">
    <div class="container">
      <div class="row mt-3">

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/results-center/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/results-centre.png"; ?>" alt="Results Centre" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مركز النتائج" : "Results Centre"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/reports/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/reports-presentations.png"; ?>" alt="Reports and Presentations" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "التقارير والعروض التقديمية" : "Reports & Presentations"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/regulatory-disclosures/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/regulatory-disclosures.png'; ?>" alt="Regulatory Disclosures" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "الإفصاحات التنظيمية" : "Regulatory Disclosures"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/key-financials/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/key-financials.png"; ?>" alt="Key Financials" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "البيانات المالية الرئيسية" : "Key Financials"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/share-price-information/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/share-price.jpg"; ?>" alt="Share Price Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات سعر السهم" : "Share Price Information"; ?></div>
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
          <a href="<?php echo get_site_url(); ?>/investors/shareholder-information/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/shareholder-information.png"; ?>" alt="Shareholder Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات المساهمين" : "Shareholder Information"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/sukuk-information/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/sukuk-information.png"; ?>" alt="Sukuk Information" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات الصكوك" : "Sukuk Information"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <a href="<?php echo get_site_url(); ?>/investors/faqs/" class="card-link">
            <div class="card">
              <div class="card-header">
                <img src="<?php echo get_template_directory_uri() .
                  "/assets/images/investors/faq.png"; ?>" alt="FAQs" loading="lazy">
              </div>
              <div class="card-body">
                <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar" ? "أسئلة وأجوبة" : "FAQs"; ?></div>
                <img class="arrow" src="<?php echo get_template_directory_uri() .
                  "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Get in touch section -->
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row mt-3 mb-3">
        <div class="col-12">
          <div class="contact-section d-flex flex-wrap">

            <div class="col-12 col-md-4">
              <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "ابق على تواصل معنا"
                      : "Get in touch with us"; ?></h2>
            </div>

            <div class="col-12 col-md-3">
              <div class="contact-section__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "محمد مبيضين" : "Mohammed Mubaideen"; ?></div>
              <div class="contact-section__desc"><?php echo ICL_LANGUAGE_CODE == "ar"
                      ? "علاقات المستثمرين واتصالات الشركة"
                      : "Investor Relations & Corporate Communications"; ?></div>
            </div>

            <div class=" col-12 col-md-5 d-flex">
              <div class="d-flex contact-section__data">
                <div class="contact-section__data-icon">
                  <img class="arrow-ic" src="<?php echo get_template_directory_uri() .
                      "/assets/images/icons/phone.png"; ?>" alt="Phone icon">
                </div>

                <div>
                    <?php echo ICL_LANGUAGE_CODE == "ar" ? "هاتف" : "Telephone"; ?><br> <?php echo get_field(
                        "telephone_contact"
                    ); ?>
                </div>
              </div>

              <div class="d-flex contact-section__data">
                <div class="contact-section__data-icon">
                  <img class="arrow-ic" src="<?php echo get_template_directory_uri() .
                      "/assets/images/icons/email.png"; ?>" alt="Email icon">
                </div>

                <div>
                    <?php echo ICL_LANGUAGE_CODE == "ar" ? "بريد إلكتروني" : "Email"; ?><br> <?php echo get_field(
                        "email_contact"
                    ); ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form section -->
  <section class="form-section mt-5 pt-5">
    <div class="container">
      <h2 class="default-h2 text-center"><?php echo get_field("contact_form_title"); ?></h2>
      <p class="form-section__desc"><?php echo get_field("contact_form_description"); ?></p>

        <?php if (ICL_LANGUAGE_CODE == "en"): ?>
            <?php echo do_shortcode('[contact-form-7 id="630" title="Contact Form"]'); ?>
        <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
            <?php echo do_shortcode('[contact-form-7 id="4706" title="Contact Form Arabic"]'); ?>
        <?php endif; ?>
    </div>
  </section>

  <?php include get_theme_file_path("/parts/why-invest.php"); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>