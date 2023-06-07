
<?php get_header() ?>

<div class="page-banner " style="background: url('<?php echo get_template_directory_uri(); ?>/images/page-banner.png')">
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Search Results</h3>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="page-content search-page">
    <div class="container">
        <div class="row">

            <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6">
                    <div class="content-detail">
                        <h3><?php the_title(); ?></h3>
	                    <?php the_excerpt() ?>
                        <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="content-detail text-center">
                        <h3>No Results Found!</h3>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>



<?php include 'parts/footer-links.php'; ?>

<?php get_footer() ?>