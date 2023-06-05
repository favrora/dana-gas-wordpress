<?php
/**
 * Template Name: International Advisory Board
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/about-us.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/senior-management-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "معلومات عنا" : "About US" ?></h1>
    </div>
</section>


<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-shape-bg.png"; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "المجلس الاستشاري الدولي" : "International Advisory Board" ?></h2>
                <div class="mb-4"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "شاهد فريقنا بالكامل وتعيينهم" : "See our entire team & their designation" ?></div>
              <div class="advisory-img-box">
                <img class="mb-2" src="<?php echo get_template_directory_uri() .
                    "/assets/images/international-advisory-board.png"; ?>" alt="International Advisory Board" loading="lazy">
                <div class="advisory-img-box__note"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "من اليسار الى اليمين" : "From left to right" ?></div>
              </div>

            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Mr. Kai Hietarinta</div>
                    <div class="senior-management__position">Former Vice Chairman of Neste Oy (Finland)</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Dr. Joseph Stanislaw</div>
                    <div class="senior-management__position">Former CEO of Cambridge Energy Research Associates (CERA)</div>
                </div>
            </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="senior-management">
              <div class="senior-management__name">Mr. Nordine Ait-Laoussine</div>
              <div class="senior-management__position">Former Algerian Oil Minister & former Head of Sonatrach</div>
            </div>
          </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Sir Graham Hearne</div>
                    <div class="senior-management__position">Chairman of the IA Board, former  Chairman of Enterprise Oil (UK)</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Ms. Razan Jafar</div>
                    <div class="senior-management__position">Secretary of the IA Board</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Hamid Jafar</div>
                    <div class="senior-management__position">Chairman of Dana Gas</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Said Arrata</div>
                    <div class="senior-management__position">Chairman and CEO, Delta Oil and Gas (UK)</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Lord Simon of Highbury</div>
                    <div class="senior-management__position">Former Chairman of British Petroleum (BP)</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="senior-management">
                    <div class="senior-management__name">Dr. Burckhard Bergmann</div>
                    <div class="senior-management__position">Former member of the Board of Gazprom (Russia)</div>
                </div>
            </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="senior-management">
              <div class="senior-management__name">Dr. Nader Sultan</div>
              <div class="senior-management__position">Former CEO of Kuwait Petroleum  Corporation and Director of the</div>
            </div>
          </div>
        </div>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section story pt-4 mb-5">
    <div class="container">
        <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "مجلس الإدارة والإدارة" : "Board & Management" ?></h2>
        <div class="row mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url() ?>/about-us/board-and-management/board-of-directors/" class="card-link">
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
                <a href="<?php echo get_site_url() ?>/about-us/board-and-management/international-advisory-board/" class="card-link">
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
                <a href="<?php echo get_site_url() ?>/about-us/board-and-management/senior-executive-management/" class="card-link">
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