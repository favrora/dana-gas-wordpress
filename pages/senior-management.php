<?php
/**
 * Template Name: Senior management
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
        <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "معلومات عنا" : "About US"; ?></h1>
    </div>
</section>


<!-- Company-section -->
<section class="company-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == "ar" ? "" : "Senior management"; ?></h2>
        <div><?php echo ICL_LANGUAGE_CODE == "ar" ? "شاهد فريقنا بالكامل وتعيينهم" : "See our entire team & their designation"; ?></div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "احمد قبيلي" : "Ahmed Kebaili"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس الجيوفيزياء" : "Chief Geophysicist"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "اظفر ابو بكر" : "Azfar Aboobakar"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس الرقابة المالية والإبلاغ" : "Head of Financial Control & Reporting"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "محمد مبيضين" : "Mohammmed Mubaideen"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس علاقات المستثمرين" : "Head of Investor Relations"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "ريتشارد حلواني" : "Richard Helwani"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس قسم تقنية المعلومات" : "Head of IT"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "ماثيو نيكس" : "Matthew Nix"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس قسم تمويل الشركات" : "Head of Corporate Finance"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "أيمن سمرة" : "Ayman Samra"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مدير مالي - مصر" : "Finance Manager - Egypt"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "شون ب. هولاهان" : "Shaun P. Hoolahan"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "رئيس قسم تحت السطحية و RE" : "Head of Subsurface & RE"; ?></div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="senior-management">
          <div class="senior-management__name"><?php echo ICL_LANGUAGE_CODE == "ar" ? "محمد خفاجي" : "Mohamed Khafagy"; ?></div>
          <div class="senior-management__position"><?php echo ICL_LANGUAGE_CODE == "ar" ? "مدير عام واسكو - مصر" : "WASCO General Manager - Egypt"; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section story pt-4 mb-5">
    <div class="container">
        <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == "ar"
          ? "مجلس الإدارة والإدارة"
          : "Board & Management"; ?></h2>
        <div class="row mt-3">

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url(); ?>/about-us/board-and-management/board-of-directors/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/directors/board-of-directors.png"; ?>" alt="Board of Directors" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                              ? "مجلس إدارة"
                              : "Board of Directors"; ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url(); ?>/about-us/board-and-management/international-advisory-board/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/directors/international-advisory.png"; ?>" alt="International Advisory Board" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                              ? "المجلس الاستشاري الدولي"
                              : "International Advisory Board"; ?></div>
                            <img class="arrow" src="<?php echo get_template_directory_uri() .
                              "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <a href="<?php echo get_site_url(); ?>/about-us/board-and-management/senior-executive-management/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/directors/senior-executive.png"; ?>" alt="Senior Executive Management" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                              ? "الإدارة التنفيذية العليا"
                              : "Senior Executive Management"; ?></div>
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