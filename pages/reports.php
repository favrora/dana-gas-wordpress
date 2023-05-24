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

    <title><?php bloginfo("name"); ?></title>

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/operations-kri.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/reports-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1>Reports</h1>
    </div>
</section>

<!-- Annual reports section -->
<section class="company-section reports-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-2">
        <h2 class="default-h2">Annual reports</h2>
      </div>

      <div class="col-12">
        <div class="reports-nav">
          <div class="reports-nav__item is-active">2021</div>
          <div class="reports-nav__item">2020</div>
          <div class="reports-nav__item">2019</div>
          <div class="reports-nav__item">2018</div>
          <div class="reports-nav__item">2017</div>
          <div class="reports-nav__item">2016</div>
          <div class="reports-nav__item">2015</div>
          <div class="reports-nav__item">2014</div>
          <div class="reports-nav__item">2013</div>
          <div class="reports-nav__item">2012</div>
          <div class="reports-nav__item">2011</div>
          <div class="reports-nav__item">2010</div>
          <div class="reports-nav__item">2009</div>
          <div class="reports-nav__item">2008</div>
          <div class="reports-nav__item">2007</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2022/07/DanaGas-AR21-English-7.7.22.pdf" target="_blank">
              <div>Annual report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2021/08/DanaGas-AR20-English.pdf" target="_blank">
              <div>Annual report 2020</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2020/09/DanaGas-AR19_ENG_FINAL.pdf" target="_blank">
              <div>Annual report 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/08/DanaGas-Annual-Report-2018-English.pdf" target="_blank">
              <div>Annual report 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20171126-Dana-Gas-Corporate-IR-Presentation-November-17.pdf" target="_blank">
              <div>Corporate presentation – Nov 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/DANA-28494-AR2017-ENG-web.pdf" target="_blank">
              <div>Annual report 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/05/Dana-26811-AR-2016-English-web.pdf" target="_blank">
              <div>Annual report 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/Annual-Report-2015.pdf" target="_blank">
              <div>Annual report 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/Annual-Report-Low-resolution-PDF.pdf" target="_blank">
              <div>Annual report 2014</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2013.pdf" target="_blank">
              <div>Annual report 2013</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>
          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2012.pdf" target="_blank">
              <div>Annual report 2012</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q3-2011-Investor-presentation-14-Nov-2011.pdf" target="_blank">
              <div>Financial Result presentation for 3Q</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2011.pdf" target="_blank">
              <div>Annual report 2011</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2010.pdf" target="_blank">
              <div>Annual report 2010</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2009.pdf" target="_blank">
              <div>Annual report 2009</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/Annual-Reports/DG-Annual-Report-2008.pdf" target="_blank">
              <div>Annual report 2008</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2021/01/Annual-Report-2007.pdf" target="_blank">
              <div>Annual report 2007</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
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
          <div class="reports-nav__item">2021</div>
          <div class="reports-nav__item">2020</div>
          <div class="reports-nav__item">2019</div>
          <div class="reports-nav__item">2018</div>
          <div class="reports-nav__item">2017</div>
          <div class="reports-nav__item">2016</div>
          <div class="reports-nav__item">2015</div>
          <div class="reports-nav__item">2014</div>
          <div class="reports-nav__item">2013</div>
          <div class="reports-nav__item">2010</div>
        </div>

        <div class="reports-links">
          <div class="reports-links__item is-active">
            <a href="https://www.danagas.com/wp-content/uploads/2023/05/20220510-Q1-2023-Investor-Presentation.pdf" target="_blank">
              <div>Q1 2023 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2023/02/Dana-Gas-Corporate-Presentation-EFG-Conference-March-2023.pdf" target="_blank">
              <div>Corporate Presentation – March 2023</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2023/02/20230206-DG-FY22-Investor-Presentation.pdf" target="_blank">
              <div>FY Preliminary 2022 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/11/20221101-Dana-Gas-Corporate-Presentation-November-2022_new.pdf" target="_blank">
              <div>Corporate Presentation – November 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/08/20220809-Q2-2022-Investor-Presentation.pdf" target="_blank">
              <div>Q2 2022 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/20220412-Dana-Gas-Corporate-Presentation-April-2022.pdf" target="_blank">
              <div>Corporate Presentation 2022</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2022/02/20210208-FY21-Investor-Presentation-V7-002.pdf" target="_blank">
              <div>FY Preliminary 2021 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/11/20211114-9M-2021-Investor-Presentation.pdf" target="_blank">
              <div>Q3 2021 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/08/20210810-Q2-2021-Investor-Presentation-H-H-H.pdf" target="_blank">
              <div>H1 2021 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/05/20210508-Q1-2021-Investor-Presentation-V3.pdf" target="_blank">
              <div>Q1 2021- Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2021/02/20210209-FY20-Investor-Presentation-V7.pdf" target="_blank">
              <div>FY 2020 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/11/20201111-9M-2020-Investor-Presentation-V33.pdf" target="_blank">
              <div>Q3 2020 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2021/02/Dana-Gas_Factsheet_2020.pdf" target="_blank">
              <div>Company factsheet</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2020/08/20200813-Q2-2020-Investor-Presentation.pdf" target="_blank">
              <div>Q2 2020 Investor presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2020/02/20200211-FY19-Investor-Presentation-Final.pdf" target="_blank">
              <div>FY Preliminary 2019 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/11/ir-p.pdf" target="_blank">
              <div>Q3 2019 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/06/Q1-Investor-Presentation_6-May-2019.pdf" target="_blank">
              <div>Q1 2019 Investor presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/06/Dana-Gas-Corporate-Presentation-May-2019.pdf" target="_blank">
              <div>Corporate presentation – May 2019</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/06/20190430-Q1-2019-Investor-Presentation-V5.pdf" target="_blank">
              <div>Q1 2019 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/KRI-Impact-Report-2019-Dec-2018.pdf" target="_blank">
              <div>KRI Impact Report 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20180516_Dana-Gas-Corporate-Presentation-Sept-2018.pdf" target="_blank">
              <div>Corporate presentation – Sept 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20180814_Dana-Gas-Q2-2018-Financial-Results-14-Aug-2018.pdf" target="_blank">
              <div>Q2 2018 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20180516_Dana-Gas-Corporate-Presentation-May-2018.pdf" target="_blank">
              <div>Corporate presentation – May 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20180319-Dana-Gas-Corporate-Presentation-March-2018.pdf" target="_blank">
              <div>Corporate presentation – March 2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20190213-Dana-Gas-FY-2018-Investor-Presentation.pdf" target="_blank">
              <div>DANA GAS PJSC Financial Results Presentation for the Period Ended December 31,2018</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20180315-Dana-Gas-FY-2017-Financial-Results-15-March-2018-1.pdf" target="_blank">
              <div>FY 2017 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20171126-Dana-Gas-Corporate-IR-Presentation-November-17.pdf" target="_blank">
              <div>Corporate presentation – Nov 2017</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20170509-Dana-Gas_Q1-Investor-Presentation-11-May-2017.pdf" target="_blank">
              <div>Q1 2017 Investor presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q3-2017-Financial-Presentation-13-Nov-2017.pdf" target="_blank">
              <div>Q3 2017 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20170814-Dana-Gas-Q2-Investor-Presentation-Final.pdf" target="_blank">
              <div>Q2 2017 – Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201609-Dana-Gas_JP-Morgan-IR-Presentation-30-Sept-2016.pdf" target="_blank">
              <div>Investor presentation – Sept 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201603-Dana-Gas-Investors-Presentation-31-March-2016.pdf" target="_blank">
              <div>Investor presentation – March 2016</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201511-Dan-Gas-Clean-Energy-For-the-MENA-Regions-Tomorrow-Nov-2015.pdf" target="_blank">
              <div>Investor presentation – Nov 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201509-Dana-Gas-Investors-Presentation-September-2015.pdf" target="_blank">
              <div>Investor presentation – Sept 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201503-Dana-Gas-Equity-Investors-Presentation-March-2015.pdf" target="_blank">
              <div>Equity investor presentation – March 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201502-Dana-Gas-Investors-Presentation-2014-Results-Feb-2015.pdf" target="_blank">
              <div>Investor presentation – Feb 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201502-Dana-Gas-Credit-Investors-Presentation-Feb-2015.pdf" target="_blank">
              <div>Credit investor presentation – Feb 2015</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20150211-Dana-Gas-North-Africa-IP-Week-2015-Patrick-Allman-Ward-11-Feb-2015.pdf" target="_blank">
              <div>CEO’s presentation – IP week, London presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201501-Dana-Gas-CEO-Presentation-Gas-Arabia-Summit-2015-Dubai-UAE-January-2015.pdf" target="_blank">
              <div>CEO’s presentation – Gas Arabia Summit</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201406-Dana-Gas-ADX-NDR-Presentation-London-June-2014.pdf" target="_blank">
              <div>Investor presentation – June 2014</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201403-Dana-Gas-Equity-Investors-Presentation-March-2014.pdf" target="_blank">
              <div>Equity investor presentation – March 2014</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201402-Dana-Gas-JP-Morgan-Fixed-Income-Emerging-Market-Conference-Miami-US-Feb-2014.pdf" target="_blank">
              <div>JP Morgan Fixed Income Emerging Market Conference – investor presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201402-Dana-Gas-Investors-Presentation-at-Deutsche-Bank-MENA-Conference-February-2014.pdf" target="_blank">
              <div>Deutsche Bank MENA Conference – investor presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201402-Dana-Gas-2013-Preliminary-Results-Presentation-03-Feb-2014.pdf" target="_blank">
              <div>Analyst presentation – Feb 2014</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201311-Dana-Gas-Investors-Roadshow-London-November-2013.pdf" target="_blank">
              <div>Investor presentation – Nov 2013</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201309-Dana-Gas-EFG-Hermes-3rd-London-MENA-Conference-September-2013.pdf" target="_blank">
              <div>Investor presentation – Sept 2013</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/20130623-Dana-Gas-Presentation-to-ADX-Brokers-26-June-2013.pdf" target="_blank">
              <div>Presentation to ADX Brokers – June 2013</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/201302-Dana-Gas-Corporate-Presentation-Feb-2013.pdf" target="_blank">
              <div>Corporate presentation – Feb 2013</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q2-2013-Investor-presentation-14-August-2013.pdf" target="_blank">
              <div>Dana Gas 2Q 2013 Performance Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/FY-2010-Investor-presentation-31-Dec-2010.pdf" target="_blank">
              <div>Results Presentation for Year Ended 31 December 2010</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q3-2010-Investor-presentation-10-Nov-2010.pdf" target="_blank">
              <div>3Q Results Presentation 2010</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q2-2010-Investor-presentation-11-Aug-2010.pdf" target="_blank">
              <div>2Q 2010 Results Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2019/09/Q1-2010-Investor-presentation-13-May-2010.pdf" target="_blank">
              <div>1Q 2010 Results Presentation</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
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
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
          </div>

          <div class="reports-links__item">
            <a href="https://www.danagas.com/wp-content/uploads/2022/03/Dana-Gas-PJSC-FY-2021-financial-statements-English-1.pdf" target="_blank">
              <div>Financial Statements 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/09/222208_Dana-Gas_Sustainability-Report-Sep8En.pdf" target="_blank">
              <div>Sustainability Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/20220323-Corporate-Governance-Report-2021-English-V6-FINAL-clean-%D8%A4%D9%86%D8%AB%D8%B4%D9%89-%D8%A4%D9%86%D8%B3%D9%8A%D8%AA%D9%83%D9%85%D8%B5%D8%AA.pdf" target="_blank">
              <div>Corporate Governance Report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </a>
            <a href="https://www.danagas.com/wp-content/uploads/2022/04/Dana-Gas-Integrated-Report-2021-En-%D8%A7%D9%84%D9%86%D9%87%D8%B1%D8%AF%D8%A9.pdf" target="_blank">
              <div>Integrated report 2021</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
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