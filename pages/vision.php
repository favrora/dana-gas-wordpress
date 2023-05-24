<?php
/**
 * Template Name: Vision
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/vision.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-us-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1><?php echo get_field("about_us_global_title"); ?></h1>
    </div>
</section>

<!-- Company-section -->
<section class="first-section top-bg-section pt-5" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <h2 class="default-h2 mb-3"><?php echo get_field("page_title"); ?></h2>
    <div class="row">

      <div class="col-12 col-md-4">
        <img src="<?php echo get_template_directory_uri() .
          "/assets/images/our-vision.png"; ?>" alt="Our vision" loading="lazy">
        <h3 class="title-green">Our vision</h3>
        <div>
          <ul class="list-with-arrow">
            <li>To be the leading private sector natural gas company in the Middle East, North Africa and South Asia region (MENASA) generating value for our stakeholders.</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <img src="<?php echo get_template_directory_uri() .
          "/assets/images/our-strategy.png"; ?>" alt="Our strategy" loading="lazy">
        <h3 class="title-green">Our strategy</h3>
        <div>
          <ul class="list-with-arrow">
            <li>Focus on sustainable growth in the MENASA region across the natural gas value chain</li>
            <li>Leverage strategic relationships to maintain competitive advantage</li>
            <li>Continuously enhance our technical and commercial skills to develop and operate assets safely and efficiently</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <img src="<?php echo get_template_directory_uri() .
          "/assets/images/our-values.png"; ?>" alt="Our values" loading="lazy">
        <h3 class="title-green">Our values</h3>
        <div>
          <ul class="list-with-arrow">
            <li>We set and apply the highest standards of conduct and accountability</li>
            <li>We respect and value everyone and embrace diversity</li>
            <li>We aim to provide a safe, healthy and environmentally friendly workplace for our employees and business partners and to minimise any adverse effects of our operations on communities and the environment</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section story mb-5">
  <div class="container">
    <h2 class="default-h2"><?php echo get_field("our_story_title"); ?></h2>
    <div class="row mt-3">

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/overview/1537-2/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field("why_invest_in_dana_gas"); ?>" alt="Why invest in Dana Gas" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">Why invest in Dana Gas</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/overview/vision-strategy-values/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field(
                "vision_strategy_values_image"
              ); ?>" alt="Vision, strategy & values" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">Vision, strategy & values</div>
              <img class="arrow" src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="/about-us/overview/group-structure/" class="card-link">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo get_field("group_structure_image"); ?>" alt="Group structure" loading="lazy">
            </div>
            <div class="card-body">
              <div class="card-title">Group structure</div>
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