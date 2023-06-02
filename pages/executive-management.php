<?php
/**
 * Template Name: Senior Executive Management
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
    "/assets/images/executive-management-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "معلومات عنا" : "About US" ?></h1>
    </div>
</section>

<!-- Cards section -->
<section class="directors-section mt-5 mb-5">
    <div class="container">
        <div class="row mt-3">

            <div class="col-12 text-center mb-3">
                <h2 class="default-h2"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الإدارة التنفيذية العليا" : "Senior Executive Management" ?></h2>
                <div><?php echo ICL_LANGUAGE_CODE == 'ar' ? "شاهد فريقنا بالكامل وتعيينهم" : "See our entire team & their designation" ?></div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/dr-patrick-allman-ward/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo get_template_directory_uri() .
                                "/assets/images/executive/patrick-allman.png"; ?>" alt="Dr. Patrick Allman-Ward" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Dr. Patrick Allman-Ward</div>
                            <div class="desc">Chief Executive Officer</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/chris-hearne/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/chris-hearne.png"; ?>" alt="Chris Hearne" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Chris Hearne</div>
                            <div class="desc">Chief Financial Officer</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/neville-henwood/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/neville-henwood.jpg"; ?>" alt="Neville Henwood" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Neville Henwood</div>
                            <div class="desc">Legal and Commercial Director</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/mike-seymour/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/mike-seymour.png"; ?>" alt="Mike Seymour" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Mike Seymour</div>
                            <div class="desc">Head of HSSE & Sustainability</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/ramganesh-srinivasan/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/ramganesh-srinivasan.png"; ?>" alt="Ramganesh Srinivasan" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Ramganesh Srinivasan</div>
                            <div class="desc">Head of Human Resources</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/michael-pyszka/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/michael-pyszka.png"; ?>" alt="Michael Pyszka" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Michael Pyszka</div>
                            <div class="desc">General Manager – Egypt</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <a href="/team/shakir-shakir/" class="card-link">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo get_template_directory_uri() .
                              "/assets/images/executive/shakir-shakir.png"; ?>" alt="Shakir Shakir" loading="lazy">
                        </div>
                        <div class="card-body">
                            <div class="card-title">Shakir Shakir</div>
                            <div class="desc">Iraq Country Manager</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Cards section -->
<section class="cards-section story pt-2 pb-3 mb-5">
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