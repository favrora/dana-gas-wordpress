<?php
/**
 * Template Name: Key financials
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(''); ?></title>

    <!-- Source files -->
    <link href="<?php echo get_template_directory_uri() . "/dist/css/key-financials.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/key-financials-bg.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
        <h1>Key financials</h1>
    </div>
</section>

<!-- Company-section -->
<section class="company-section top-bg-section pt-5">
  <div class="container">
    <div class="row">

      <div class="col-12">
          <?php the_content(); ?>
      </div>

    </div>
  </div>
</section>



<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/key-financials.min.js"; ?>"></script>

</body>

</html>