<?php
/*
* Template Name: Board and Management
*/
global $danagas;
?>

<?php get_header() ?>

<? include 'parts/page-banner.php'; ?>

<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="breadcrumbs">-->
<!--					--><?php //bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<div class="page-content" id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="side-bar">
                    <?php
                    if( ( is_page( 226 ) ) || is_page( 2652 ) || ( is_page( 230 ) ) || is_page( 2667 ) || ( is_page( 232 ) ) || is_page( 2676 ) || ( is_page( 228 ) ) || is_page( 2672 ) || is_page( 5125 ) || is_page( 5095 ) || is_page( 5028 ) || is_page( 5199 ) || is_page( 5218 ) ) {
                        echo wpb_list_child_pages( 8 );
                    } else {
                        echo wpb_list_child_pages();
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="content-detail" style="display: flex;flex-wrap:wrap;">
	                <?php
	                if( is_page( 226 ) || is_page( 2652 ) ):
		                ?>
                        <div class="bods-cover">
	                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2><a href="<?php home_url('Board of Directors') ?>">Board of Directors</a> </h2>
	                        <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                                <h2><a href="<?php home_url('Board of Directors') ?>">أعضاء مجلس الإدارة</a> </h2>
	                        <?php endif; ?>

                        </div>
	                <?php
	                endif;
	                ?>

                    <?php
	                if( is_page( 230 ) || is_page( 2667 ) ):
		                ?>
                        <div class="bods-cover">
	                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2>Senior Executive Management</h2>
	                        <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                                <h2> الإدارة التنفيذية العليا</h2>
	                        <?php endif; ?>

                        </div>
	                <?php
	                endif;
	                ?>

	                <?php
	                if( is_page( 232 ) || is_page( 2676 ) ):
		                ?>
                        <div class="bods-cover">
	                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2>Senior Management</h2>
	                        <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                                <h2>الإدارة العليا</h2>
	                        <?php endif; ?>
                        </div>
	                <?php
	                endif;
	                ?>



                    <?php
                    if( is_page( 228 ) || is_page( 2672 ) ):
                        ?>
                        <div class="bods-cover">
	                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2>International Advisory Board</h2>
                                <img src="https://www.danagas.com/wp-content/uploads/2022/02/dana-gas-board-managment.jpg" alt="">
                                <span style="font-family: 'Calibri'; font-size: 16px; font-weight: 400;color: #656f8a;display: block;">From left to right</span>
	                        <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                                <h2>المجلس الاستشاري الدولي</h2>
                                <img src="https://www.danagas.com/wp-content/uploads/2022/02/dana-gas-board-managment.jpg" alt="">
                                <span style="font-family: 'Calibri'; font-size: 16px; font-weight: 400;color: #656f8a;display: block; text-align: right;">من اليسار الى اليمين</span>
	                        <?php endif; ?>

                        </div>
                        <?php
                    endif;
                    ?>


	                <?php
	                if( is_page( 5028 ) ):
		                ?>
                        <div class="bods-cover">
                            <h2>Extended Management - Egypt</h2>
                        </div>
	                <?php
	                endif;
	                ?>

                    <!-- Language --->
                        <div class="bods clearfix">


			                <?php
                                if(ICL_LANGUAGE_CODE=='en'):
                                    $args = array(
                                        'post_type'              => array( 'team' ),
                                        'posts_per_page'         => '-1',
                                        'order'                  => 'DESC',
                                    );
                                elseif(ICL_LANGUAGE_CODE=='ar'):
	                                $args = array(
		                                'post_type'              => array( 'team' ),
		                                'posts_per_page'         => '-1',
		                                'order'                  => 'DESC',
	                                );
                                endif;
			                if( is_page( 226 ) || is_page( 2652 ) ) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'board-of-directors',
					                )
				                );
			                }
			                if( is_page( 230 ) ) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'senior-executive-management',
					                )
				                );
			                }
                            if( is_page( 2667 ) ) {
                              $args['tax_query'] = array(
                                array(
                                  'taxonomy' => 'category_team',
                                  'field'    => 'slug',
                                  'terms'    => 'senior-executive-management-ar',
                                )
                              );
                            }
			                if( is_page( 232 ) ) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'senior-management',
					                )
				                );
			                }
                            if( is_page( 2676 ) ) {
                              $args['tax_query'] = array(
                                array(
                                  'taxonomy' => 'category_team',
                                  'field'    => 'slug',
                                  'terms'    => 'extended-management-ar',
                                )
                              );
                            }
			                if( is_page( 228 ) || is_page( 2672 ) ) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'international-advisory-board',
					                )
				                );
			                }
			                if( is_page( 5028 )) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'extended-management-egypt',
					                )
				                );
			                }
			                if( is_page( 5125 )) {
				                $args['tax_query'] = array(
					                array(
						                'taxonomy' => 'category_team',
						                'field'    => 'slug',
						                'terms'    => 'extended-management-egypt-ar',
					                )
				                );
			                }
                            if( is_page( 5199 )) {
                              $args['tax_query'] = array(
                                array(
                                  'taxonomy' => 'category_team',
                                  'field'    => 'slug',
                                  'terms'    => 'extended-management-iraq',
                                )
                              );
                            }
                            if( is_page( 5218 )) {
                              $args['tax_query'] = array(
                                array(
                                  'taxonomy' => 'category_team',
                                  'field'    => 'slug',
                                  'terms'    => 'extended-management-iraq-ar',
                                )
                              );
                            }
			                $query = new WP_Query( $args );
			                if( $query->have_posts() ) :
				                while( $query->have_posts() ) :
					                $query->the_post();
					                get_template_part( 'parts/team' );
				                endwhile;
				                wp_reset_query();
			                endif;
			                ?>


                        </div>

                    <!-- Language --->




                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'parts/footer-links.php'; ?>
<?php get_footer() ?>
