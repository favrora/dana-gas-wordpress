<?php
/**
 * Template Name: Team member
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

<?php while ( have_posts() ) : the_post(); ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="st-header clearfix">
                    <!-- Language --->
	                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <div class="float-left">
                            <h3><?php the_title() ?></h3>
                            <h6><?php echo rwmb_meta( 'team_member-ges' ); ?></h6>
                        </div>
                        <div class="float-right">
                            <button onclick="window.history.back();" class="bck-btn">Back</button>
                        </div>
	                <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                        <div class="float-right">
                            <h3><?php the_title() ?></h3>
                            <h6><?php echo rwmb_meta( 'team_member-ges' ); ?></h6>
                        </div>
                        <div class="float-left">
                            <button onclick="window.history.back();" class="bck-btn">عودة</button>
                        </div>
	                <?php endif; ?>
                    <!-- Language --->

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="st-detail clearfix">
                    <figure class="float-left">
						<?php the_post_thumbnail() ?>
                    </figure>
                    <article class="float-left">
						<?php the_content() ?>
                    </article>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>


<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/app.min.js"; ?>"></script>

</body>

</html>