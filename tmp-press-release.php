<?php
/**
 * Template Name: Press Releases
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
    "/assets/images/about-us-bg.png"; ?>')">
  <div class="about-overlay"></div>
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<?php while ( have_posts() ) : the_post(); ?>

<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="breadcrumbs">-->
<!--					--><?php //bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>   [press]-->
<div class="page-content reports-section pt-2">
    <div class="container">
        <div class="row">

          <div class="col-12 col-lg-10" style="margin: 0 auto">
              <?php echo do_shortcode( '[press]' ); ?>
          </div>
        </div>
    </div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/press-release.min.js"; ?>"></script>

</body>

</html>