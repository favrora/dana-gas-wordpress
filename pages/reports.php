<?php

/**
 * Template Name: Reports
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
    <link href="<?php echo get_template_directory_uri() . '/dist/css/operations-kri.min.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/reports-bg.png'; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1>Reports</h1>
    </div>
</section>

<!-- Annual reports section -->
<section class="company-section reports-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-shape-bg.png'; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Annual reports</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2023</div>
          <div class="reports-nav__item">2022</div>
          <div class="reports-nav__item">2021</div>
          <div class="reports-nav__item">2020</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2023/04/DanaGas_IR22_English_April25.pdf" target="_blank">
              <div>Integrated Report 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>


          <div class="reports-links__item">
            <a href="" target="_blank">
              <div>AGM Invitation and Agenda – 9 December 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>

<!-- Presentations reports section -->
<section class="reports-section pt-5">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Presentations</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2023</div>
          <div class="reports-nav__item">2022</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2023/05/20220510-Q1-2023-Investor-Presentation.pdf" target="_blank">
              <div>Q1 2023 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/02/Dana-Gas-Corporate-Presentation-EFG-Conference-March-2023.pdf" target="_blank">
              <div>Corporate Presentation – March 2023</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="" target="_blank">
              <div>AGM Invitation and Agenda – 9 December 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Integrated reports section -->
<section class="reports-section pt-5">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Integrated Report</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2022</div>
          <div class="reports-nav__item">2021</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2023/04/DanaGas_IR22_English_April25.pdf" target="_blank">
              <div>Integrated Report 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2022/03/Dana-Gas-PJSC-FY-2021-financial-statements-English-1.pdf" target="_blank">
              <div>Financial Statements 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/09/222208_Dana-Gas_Sustainability-Report-Sep8En.pdf" target="_blank">
              <div>Sustainability Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/20220323-Corporate-Governance-Report-2021-English-V6-FINAL-clean-%D8%A4%D9%86%D8%AB%D8%B4%D9%89-%D8%A4%D9%86%D8%B3%D9%8A%D8%AA%D9%83%D9%85%D8%B5%D8%AA.pdf" target="_blank">
              <div>Corporate Governance Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/Dana-Gas-Integrated-Report-2021-En-%D8%A7%D9%84%D9%86%D9%87%D8%B1%D8%AF%D8%A9.pdf" target="_blank">
              <div>Integrated report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Reserve report section -->
<section class="reports-section pt-5 mb-3">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Reserve report</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2019</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/Gaffney-Cline-Report/Gaffney-Cline-Reserves-Report-Extract.pdf" target="_blank">
              <div>Gaffney Cline Reserves report extract</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-green.png'; ?>" alt="Right arrow icon">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include get_theme_file_path('/parts/why-invest.php'); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/sustainability.min.js'; ?>"></script>

</body>

</html>