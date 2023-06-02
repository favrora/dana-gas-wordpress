<?php
/**
 * Template Name: Board of Directors
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/board-of-directors.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/board-of-directors-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field("header_h1_title"); ?></h1>
    </div>
</section>

<!-- Cards section -->
<section class="directors-section mt-5 mb-5">
    <div class="container">
        <div class="row mt-3">

            <div class="col-12 text-center mb-3">
                <h2 class="default-h2"><?php echo get_field("page_title"); ?></h2>
                <div><?php echo ICL_LANGUAGE_CODE == 'ar' ? "شاهد فريقنا بالكامل وتعيينهم" : "See our entire team & their designation" ?></div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/hamid-jafar/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/directors/hamid-jafar.png"; ?>" alt="Hamid Jafar" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Hamid Jafar</div>
                            <div class="desc">Chairman of the Board</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/rashid-saif-al-jarwan/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/rashed-saif.png"; ?>" alt="Rashed Saif S. Al Jarwan Al Shamsi" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Rashed Saif S. Al Jarwan Al Shamsi</div>
                      <div class="desc">Vice Chairman & Chairman of the Board Steering Committee</div>
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/varouj-nerguizian/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/varoujan-nerguizian.jpg"; ?>" alt="Varoujan A. Nerguizian" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Varoujan A. Nerguizian</div>
                      <div class="desc">Corporate Governance,  Remuneration & Nominations Committee (CG</div>
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/majid-jafar/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/majid-jafar.png"; ?>" alt="Majid Jafar" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Majid Jafar</div>
                      <div class="desc">Board Managing Director</div>
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/ziad-abdulla-galadari/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/ziad-abdulla.png"; ?>" alt="Ziad Abdulla Ibrahim Galadari Director" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Ziad Abdulla Ibrahim Galadari</div>
                      <div class="desc">Director</div>
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/hani-hussain-alterkait/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/hani-abdulaziz.png"; ?>" alt="Hani Abdulaziz" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Hani Abdulaziz Hussain Al Terkait</div>
                      <div class="desc">Director & Chairman of  Reserves Sub-Committee</div>
                    </div>
                  </div>
                </a>
            </div>

          <div class="col-12 col-md-3 mb-3">
            <a href="/team/shaheen-mohamed-almheiri/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/directors/shaheen-mohamed.png"; ?>" alt="Shaheen Mohamed Abdulaziz" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title">Shaheen Mohamed Abdulaziz Rubayea Almheiri</div>
                  <div class="desc">Director</div>
                </div>
              </div>
            </a>
          </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/jassim-mohamedrafi-alseddiqi/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/jassim-mohamed.png"; ?>" alt="Jassim Mohamed" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">Jassim Mohamed Rafie Alseddiqi Alansaari</div>
                      <div class="desc">Director & Chairman of Audit &  Compliance Committee (A&CC)</div>
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/h-e-younis-al-khoori/" class="card-link">
                  <div class="card">
                    <div class="card-header">
                      <img src="<?php echo get_template_directory_uri() .
                        "/assets/images/directors/younis-al-khoori.png"; ?>" alt="H.E. Younis Al Khoori" loading="lazy">
                    </div>
                    <div class="card-body">
                      <div class="card-title">H.E. Younis Al Khoori</div>
                      <div class="desc">Director</div>
                    </div>
                  </div>
                </a>
            </div>

          <div class="col-12 col-md-3 mb-3">
            <a href="/team/mr-ajit-vijay-joshi/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/directors/ajit-vijay.png"; ?>" alt="Mr. Ajit Vijay Joshi" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title">Mr. Ajit Vijay Joshi</div>
                  <div class="desc">Director</div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-12 col-md-3 mb-3">
            <a href="/team/ms-najla-ahmed-al-midfa/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/directors/najla-ahmed.png"; ?>" alt="Ms. Najla Ahmed Al-Midfa" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title">Ms. Najla Ahmed Al-Midfa</div>
                  <div class="desc">Director</div>
                </div>
              </div>
            </a>
          </div>

        </div>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section story pb-3 mb-5">
  <div class="container">
    <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "مجلس الإدارة والإدارة" : "Board & Management" ?></h2>
    <div class="row mt-3">

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/board-and-management/board-of-directors/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/directors/board-of-directors.png"; ?>" alt="Board of Directors" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "مجلس إدارة" : "Board of Directors" ?></div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/board-and-management/international-advisory-board/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/directors/international-advisory.png"; ?>" alt="International Advisory Board" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "المجلس الاستشاري الدولي" : "International Advisory Board" ?></div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/board-and-management/senior-executive-management/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/directors/senior-executive.png"; ?>" alt="Senior Executive Management" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الإدارة التنفيذية العليا" : "Senior Executive Management" ?></div>
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