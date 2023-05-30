<?php
/**
 * Template Name: General Assembly Meetings
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(''); ?></title>

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/operations-kri.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/general-meeting-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo ICL_LANGUAGE_CODE == 'ar' ? "المستثمرون" : "Investors" ?></h1>
    </div>
</section>

<!-- General meeting section -->
<section class="company-section reports-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">General Assembly Meetings</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2023</div>
          <div class="reports-nav__item">2022</div>
          <div class="reports-nav__item">2021</div>
          <div class="reports-nav__item">2020</div>
          <div class="reports-nav__item">2019</div>
          <div class="reports-nav__item">2018</div>
          <div class="reports-nav__item">2017</div>
          <div class="reports-nav__item">2016</div>
          <div class="reports-nav__item">2015</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://reg.lumiengage.com/dana-gas-2023" target="_blank">
              <div>For registration and voting please click here</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/03/Dana-Gas-Invitation_Proxy.pdf" target="_blank">
              <div>AGM Invitation, Agenda and Proxy Authorization to Attend & Vote. – 26 April 2023</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/03/Proxy-Authorizayion-to-Attend-April-2023.docx" target="_blank">
              <div>Proxy Authorization to Attend & Vote</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/03/20230321-Proposed-Amendment-of-AOA-V1-English.pdf" target="_blank">
              <div>Amended and Restated Articles of Association Of “Dana Gas”</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/04/DanaGas_IR22_English_April25.pdf" target="_blank">
              <div>Integrated Report 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.smartagm.ae/" target="_blank">
              <div>For registration and voting please click here – www.smartagm.ae</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/03/agenda-2.pdf" target="_blank">
              <div>Annual General Assembly Agenda – 21 April 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/FAB-Dana-Gas-Invitation-ne-ne-ne-ne.pdf" target="_blank">
              <div>AGM Invitation, Agenda and Proxy Authorization to Attend & Vote. – 21April 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>

            <a href="https://www.danagas.com/wp-content/uploads/2022/03/%D8%A7%D9%81%D8%B5%D8%A7%D8%AD-%D8%AA%D9%88%D8%B6%D9%8A%D8%AD%D9%8A-%D8%A8%D8%B4%D8%A3%D9%86-%D8%A7%D8%B9%D8%AA%D9%85%D8%A7%D8%AF-%D8%A7%D9%84%D8%AA%D9%88%D9%83%D9%8A%D9%84%D8%A7%D8%AA.pdf" target="_blank">
              <div>Clarifying disclosure regarding the approval of agencies</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/05/Dana-Gas-Revised-Dividends-Policy-English.pdf" target="_blank">
              <div>Dana Gas Dividends Policy</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/03/Dana-Gas-Revised-Board-Remunerations-Policy-English.pdf" target="_blank">
              <div>Board of Directors’ Remuneration Policy</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>

            <a href="https://www.danagas.com/wp-content/uploads/2022/03/20220328-Proposed-Amendments-to-the-DG-Restated-AOA-English.pdf" target="_blank">
              <div>Amended and Restated Articles of Association Of “Dana Gas”</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/20220323-Corporate-Governance-Report-2021-English-V6-FINAL-clean-%D8%A4%D9%86%D8%AB%D8%B4%D9%89-%D8%A4%D9%86%D8%B3%D9%8A%D8%AA%D9%83%D9%85%D8%B5%D8%AA.pdf" target="_blank">
              <div>Corporate Governance Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2021/11/Invitation-to-the-General-Assembly-9-December-2021-Final-En.pdf" target="_blank">
              <div>AGM Invitation and Agenda – 9 December 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/11/Proxy-Authorizayion-to-Attend-Dec2021-1.pdf" target="_blank">
              <div>Proxy Authorization to Attend &amp; Vote at the General Assembly Meeting</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/إفصاح-توضيحي-بشأن-إعتماد-التوكيلات.pdf" target="_blank">
              <div>Clarifying disclosure regarding the approval of agencies</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.smartagm.ae/" target="_blank" rel="noopener">
              <div>For registration and voting please click here – www.smartagm.ae</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/04/20210405-Nominees-BIO-En.pdf" target="_blank">
              <div>List of Candidates for Membership of Directors</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Amended-Restated-AoA-Clean-Copy.pdf" target="_blank">
              <div>Amended and Restated Articles of Association Of “Dana Gas”</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Board-of-Directors-Remuneration-Policy-English.pdf" target="_blank">
              <div>Board of Directors’ Remuneration Policy</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Dana-Gas-Dividends-Policy-English.pdf" target="_blank">
              <div>Dana Gas Dividends Policy</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/04/Dana-Gas-Invitation-and-Proxy2021-1.pdf" target="_blank">
              <div>AGM Invitation, Agenda and Proxy Authorization to Attend &amp; Vote. – 13 April 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/04/Proxy-Authorization-to-Attend-2021.pdf" target="_blank">
              <div>Proxy Authorization to Attend &amp; Vote – 13 April 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/إفصاح-توضيحي-بشأن-إعتماد-التوكيلات.pdf" target="_blank">
              <div>Clarifying disclosure regarding the approval of agencies</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Opening-Nominations-English.pdf" target="_blank">
              <div>Announcement of opening nominations for Board membership</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Signed-Corporate-Governance-Report-2020-English-21-03-2021.pdf" target="_blank">
              <div>Corporate Governance Report 2020</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/03/Dana-Gas-PJSC-FY-2020-Financial-statements-English.pdf" target="_blank">
              <div>FY 2020 – Financial statements</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/Corporate-Governance-Report-English-2019-2.pdf" target="_blank">
              <div>Corporate Governance Report 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/Chairmans-statement-in-English-20202.pdf" target="_blank">
              <div>Chairman’s Statement</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/CEOs-statement-in-English-20202.pdf" target="_blank">
              <div>CEO’s Statement</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/2020-AGM-English-Booklet-2.pdf" target="_blank">
              <div>AGM Booklet</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/Dana-Gas-PJSC-FY-2019-Financial-statements-English.pdf" target="_blank">
              <div>FY 2019 – Financial statements</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/DanaGasAGMInvitation-f-1.pdf" target="_blank">
              <div>AGM Invitation, Agenda and Proxy Authorization to Attend &amp; Vote. – To be held on 21 April 2020</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/Online-AGM-User-Guide.pdf" target="_blank">
              <div>Online AGM User Guide 2020</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/04/Registration-Instructions-.pdf" target="_blank">
              <div>Registration Instructions to Attend Annual General Assembly Meeting Remotely</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.smartagm.ae/" target="_blank" rel="noopener">
              <div>For registration and voting please click here – www.smartagm.ae</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/03/20200330-Demerger-Press-Release-Final-En.pdf" target="_blank">
              <div>Dana Gas: Feasibility Study for the Demerger of Dana Gas</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/Minutes-of-General-Assembly-Meeting-Held-on-17-April-2019-1.pdf" target="_blank">
              <div>Minutes of general assembly meeting – Held on 17th April 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/General-Assembly-Meeting-Report-Held-on-17-April-2019-1.pdf" target="_blank">
              <div>General assembly meeting report – Held on 17th April 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/Minutes-of-General-Assembly-Meeting-Held-on-18-April-2018-1.pdf" target="_blank">
              <div>Minutes of general assembly meeting – Held on 18th April 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/General-Assembly-Meeting-Report-Held-on-18-April-2018-1.pdf" target="_blank">
              <div>General assembly meeting report – Held on 18th April 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/Minutes-of-General-Assembly-Meeting-Held-on-13-April-2017-1.pdf" target="_blank">
              <div>Minutes of general assembly meeting – Held on 13th April 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/General-Assembly-Meeting-Report-Held-on-13-April-2017-1.pdf" target="_blank">
              <div>General assembly meeting report – Held on 13th April 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/Minutes-of-General-Assembly-Meeting-Held-on-28-April-2016-1.pdf" target="_blank">
              <div>Minutes of general assembly meeting – Held on 28th April 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/General-Assembly-Meeting-Report-Held-on-28-April-2016-1.pdf" target="_blank">
              <div>General assembly meeting report – Held on 28th April 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/Minutes-of-General-Assembly-Meeting-Held-30-13-April-2015-1.pdf" target="_blank">
              <div>Minutes of general assembly meeting – Held on 30th April 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/10/General-Assembly-Meeting-Report-Held-on-30-April-2015-1.pdf" target="_blank">
              <div>General assembly meeting report – Held on 30th April 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/sustainability.min.js"; ?>"></script>

</body>

</html>