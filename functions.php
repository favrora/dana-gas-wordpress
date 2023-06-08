<?php

function meira_setup() {

    register_nav_menus( array(
        'main'    => __( 'Main Menu', 'meira' ),
        'footer'    => __( 'Footer Menu', 'meira' ),
        'sitemap'    => __( 'Sitemap', 'meira' )
    ) );

    add_theme_support( 'custom-logo', array(
        'width'       => 1925,
        'height'      => 2480,
        'flex-width'  => true,
    ) );

    add_image_size( 'bod-thumbnil', 233, 158, true );
    add_image_size( 'bod-main', 329, 396, true );

    add_theme_support( 'post-thumbnails' );

    load_theme_textdomain('danagas', get_template_directory() . '/languages');

}
add_action( 'after_setup_theme', 'meira_setup' );

function wpb_list_child_pages( $page_id = null ) {
    global $post;
    if( $page_id ) {
        $childpages = wp_list_pages( array(
            'sort_column' => 'menu_order',
            'title_li' => '',
            'child_of' => $page_id,
            'echo' => 0,
            'walker' => new WPSE_130877_Custom_Walker()
        ) );
    } else {
        if ( is_page() && $post->post_parent )
            $childpages = wp_list_pages( array(
                'sort_column' => 'menu_order',
                'title_li' => '',
                'child_of' => $post->post_parent,
                'echo' => 0,
                'walker' => new WPSE_130877_Custom_Walker()
            ) );
        else
            $childpages = wp_list_pages( array(
                'sort_column' => 'menu_order',
                'title_li' => '',
                'child_of' => $post->ID,
                'echo' => 0,
                'walker' => new WPSE_130877_Custom_Walker()
            ) );
    }
    if ( $childpages ) {
        $string = '<ul>' . $childpages . '</ul>';
    }
    return $string;
}

class WPSE_130877_Custom_Walker extends Walker_Page {

    function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
        if ( $depth )
            $indent = str_repeat("\t", $depth);
        else
            $indent = '';
        extract($args, EXTR_SKIP);
        $css_class = array('page_item', 'page-item-'.$page->ID);
        if ( !empty($current_page) ) {
            $_current_page = get_post( $current_page );
            if ( in_array( $page->ID, $_current_page->ancestors ) )
                $css_class[] = 'current_page_ancestor';
            if ( $page->ID == $current_page )
                $css_class[] = 'current_page_item';
            elseif ( $_current_page && $page->ID == $_current_page->post_parent )
                $css_class[] = 'current_page_parent';
        }
        elseif ( $page->ID == get_option('page_for_posts') ) {
            $css_class[] = 'current_page_parent';
        }

        $css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
        $icon_class = get_post_meta($page->ID, 'icon_class', true); //Retrieve stored icon class from post meta

        $output .= $indent . '<li class="' . $css_class . '">';
//
//      if( $depth == 0 ) {
//          $output .= '<a href="' . get_permalink($page->ID) . '">' . $link_before;
//        } else {

                // To dipslay link with or without section
                //$output .= '<a href="' . get_permalink($page->ID) . '#sec-'.$page->ID.'">' . $link_before;
                $output .= '<a href="' . get_permalink($page->ID) . '">' . $link_before;

//        }

        if($icon_class){ //Test if $icon_class exists
            $output .= '<span class="' . $icon_class . '"></span>'; //If it exists output a span with the $icon_class attached to it
        }

        $output .= apply_filters( 'the_title', $page->post_title, $page->ID );
        $output .= $link_after . '</a>';

        if ( !empty($show_date) ) {
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;
            $output .= " " . mysql2date($date_format, $time);
        }
    }
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

function title_tags() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'title_tags' );

function twentynineteen_widgets_init() {

    register_sidebar(
        array(
            'name'          => 'Footer 1',
            'id'            => 'footer-a',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer 2',
            'id'            => 'footer-b',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer 3',
            'id'            => 'footer-c',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer 4',
            'id'            => 'footer-d',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer 5',
            'id'            => 'footer-e',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer 6',
            'id'            => 'footer-f',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

function reports_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'cat' => '',
            'show_filters' => 'true',
            'title' => '',
            'order' => 'DESC'
        ),
        $atts
    );

    ob_start();

    $terms = get_terms( 'category', array(
        'child_of' => $atts['cat'],
        'parent' => $atts['cat'],
        'hide_empty' => true,
        'orderby' => 'slug',
        'order' => $atts['order']
    ) );

    ?>

  <div class="col-12 text-center mb-2">
    <h2 class="default-h2"><?php echo $atts['title']; ?></h2>
  </div>

    <?php if( $atts['show_filters'] === 'true' ) : ?>
    <div class="reports-nav">
        <?php
        $counter = 1;
        $submenu = '';
        foreach ( $terms as $term ) {
            $active = ( $counter == 1 ) ? 'is-active' : '';
            if( $counter > 4 ) {
                $submenu .= '<div class="reports-nav__item '.$active.'">'.$term->name.'</div>';
            } else {
                echo '<div class="reports-nav__item '.$active.'">'.$term->name.'</div>';
            }
            $counter++;
        }
        ?>
        <?php if( count( $terms ) > 4 ) : ?>
          <!--<div class="reports-nav__item">< ? php /*echo 'More'; */?></div>-->
          <?php $moreText = (!empty(ICL_LANGUAGE_CODE) && ICL_LANGUAGE_CODE == 'ar') ? 'مزيد' : 'More'; ?>
          <div class="position-relative"><div class="moreFilters reports-nav__more"><?php echo $moreText; ?></div><ul class="subMenuReport"><?php echo $submenu; ?></ul></div>
        <?php endif; ?>
    </div>

    <div class="reports-links">
        <?php
        $counter = 1;
        foreach ( $terms as $term ) {
            $args = array(
                'post_type' => 'report',
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'term_id',
                        'terms'    => $atts['cat']
                    )
                )
            );
            if( $atts['show_filters'] === 'true' ) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $term->slug
                    )
                );
            }
            $reports = new WP_Query( $args );
            ?>
          <div class="reports-links__item <?php echo ( $counter == 1 ) ? 'is-active' : ''; ?>">
              <?php
              while ( $reports->have_posts() ):
                  $reports->the_post();
                  $link = rwmb_meta( 'external_link' );
                  $rdate = rwmb_meta( 'report_date' );
                  if( !empty( $link ) ) {
                      echo '<a href="'.$link.'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
                  } else {
                      $file = rwmb_meta( 'upload_file', 'limit=1' );
                      echo '<a href="'.$file[0]['url'].'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
                  }
              endwhile;
              wp_reset_query();
              ?>
          </div>
            <?php
            $counter++;
        }
        ?>
    </div>
    <?php else: ?>
    <div class="reports-links">
        <?php
        $counter = 1;
        $args = array(
            'post_type' => 'report',
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $atts['cat']
                )
            )
        );
        $reports = new WP_Query( $args );
        ?>
      <div class="reports-links__item is-active">
          <?php
          while ( $reports->have_posts() ):
              $reports->the_post();
              $link = rwmb_meta( 'external_link' );
              $rdate = rwmb_meta( 'report_date' );
              if( !empty( $link ) ) {
                  echo '<a href="'.$link.'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
              } else {
                  $file = rwmb_meta( 'upload_file', 'limit=1' );
                  echo '<a href="' . $file[0]['url'] . '" target="_blank"><div class="d-flex flex-wrap">' . get_the_title() . '<span class="pres-date"> ' . $rdate . ' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
              }
              $counter++;
          endwhile;
          wp_reset_query();
          ?>
      </div>
    </div>
    <?php endif; ?>

    <?php

    return ob_get_clean();

}
add_shortcode( 'reports', 'reports_shortcode' );


function results_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'cat' => '',
            'show_filters' => 'true',
            'title' => '',
            'order' => 'DESC'
        ),
        $atts
    );

    ob_start();

    $terms = get_terms( 'category', array(
        'child_of' => $atts['cat'],
        'parent' => $atts['cat'],
        'hide_empty' => true,
        'orderby' => 'slug',
        'order' => $atts['order']
    ) );

    ?>

  <div class="col-12 text-center mb-2">
    <h2 class="default-h2"><?php echo $atts['title']; ?></h2>
  </div>

    <?php if( $atts['show_filters'] === 'true' ) : ?>
    <div class="reports-nav">
        <?php
        $counter = 1;
        $submenu = '';
        foreach ( $terms as $term ) {
            $active = ( $counter == 1 ) ? 'is-active' : '';
            if( $counter > 4 ) {
                $submenu .= '<div class="reports-nav__item '.$active.'">'.$term->name.'</div>';
            } else {
                echo '<div class="reports-nav__item '.$active.'">'.$term->name.'</div>';
            }
            $counter++;
        }
        ?>
        <?php if( count( $terms ) > 4 ) : ?>
          <!--<div class="reports-nav__item">< ? php /*echo 'More'; */?></div>-->
          <?php $moreText = (!empty(ICL_LANGUAGE_CODE) && ICL_LANGUAGE_CODE == 'ar') ? 'مزيد' : 'More'; ?>
          <div class="position-relative"><div class="moreFilters reports-nav__more"><?php echo $moreText; ?></div><ul class="subMenuReport"><?php echo $submenu; ?></ul></div>
        <?php endif; ?>
    </div>

    <div class="reports-links">
        <?php
        $counter = 1;
        foreach ( $terms as $term ) {
            $args = array(
                'post_type' => 'report',
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'term_id',
                        'terms'    => $atts['cat']
                    )
                )
            );
            if( $atts['show_filters'] === 'true' ) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $term->slug
                    )
                );
            }
            $reports = new WP_Query( $args );
            ?>
          <div class="reports-links__item <?php echo ( $counter == 1 ) ? 'is-active' : ''; ?>">
              <?php
              while ( $reports->have_posts() ):
                  $reports->the_post();
                  $link = rwmb_meta( 'external_link' );
                  $rdate = rwmb_meta( 'report_date' );
                  if( !empty( $link ) ) {
                      echo '<a href="'.$link.'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
                  } else {
                      $file = rwmb_meta( 'upload_file', 'limit=1' );
                      echo '<a href="'.$file[0]['url'].'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
                  }
              endwhile;
              wp_reset_query();
              ?>
          </div>
            <?php
            $counter++;
        }
        ?>
    </div>
    <?php else: ?>
    <div class="reports-links">
        <?php
        $counter = 1;
        $args = array(
            'post_type' => 'report',
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $atts['cat']
                )
            )
        );
        $reports = new WP_Query( $args );
        ?>
      <div class="reports-links__item is-active">
          <?php
          while ( $reports->have_posts() ):
              $reports->the_post();
              $link = rwmb_meta( 'external_link' );
              $rdate = rwmb_meta( 'report_date' );
              if( !empty( $link ) ) {
                  echo '<a href="'.$link.'" target="_blank"><div class="d-flex flex-wrap">'.get_the_title().'<span class="pres-date"> '.$rdate.' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
              } else {
                  $file = rwmb_meta( 'upload_file', 'limit=1' );
                  echo '<a href="' . $file[0]['url'] . '" target="_blank"><div class="d-flex flex-wrap">' . get_the_title() . '<span class="pres-date"> ' . $rdate . ' </span></div><img class="arrow" src="' . get_template_directory_uri() . '/assets/images/right-arrow-green.png" alt="Right arrow icon"></a>';
              }
              $counter++;
          endwhile;
          wp_reset_query();
          ?>
      </div>
    </div>
    <?php endif; ?>

    <?php

    return ob_get_clean();

}
add_shortcode( 'results', 'results_shortcode' );


function press_shortcode( $atts ) {

    ob_start();

    $terms = get_terms( 'category_press', array(
        'hide_empty' => true,
        'orderby' => 'slug',
        'order' => 'DESC'
    ) );

    ?>

    <style>
        .parent {
            width: 100%;
            overflow: hidden;
            display: inline-block;
        }
        .child {
            overflow: auto;
        }
        #inner {
            min-width: 100%;
        }
    </style>

    <div class="scrol-bar">
      <div class="reports-nav mb-5">
                            <?php
                                $counter = 1;
                                $submenu = '';
                                foreach ( $terms as $term ) {
                                    $url = add_query_arg( array( 'lang' => ICL_LANGUAGE_CODE, 'cat' => $term->slug ) );
                                    if( isset( $_GET['cat'] ) && ( $_GET['cat'] == $term->slug ) ) {
                                        $active = 'is-active';
                                    } elseif( !isset( $_GET['cat'] ) && ( $counter == 1 ) ) {
                                        $active = 'is-active';
                                    } else {
                                        $active = '';
                                    }
                                    if(ICL_LANGUAGE_CODE == 'ar') {
                                        //remove duplicate
                                        if(substr($term->slug, -3) == '-ar' && ICL_LANGUAGE_CODE == 'ar') {
                                            if( $counter > 6 ) {
                                                $submenu .= '<a class="reports-nav__item '.$active.'" href="'.$url.'">'.$term->name.'</a>';
                                            } else {
                                                echo '<a class="reports-nav__item '.$active.'" href="'.$url.'">'.$term->name.'</a>';
                                            }
//
                                        }
                                    } elseif (ICL_LANGUAGE_CODE == 'en') {
                                        if( $counter > 6 ) {
                                            $submenu .= '<a class="reports-nav__item '.$active.'" href="'.$url.'">'.$term->name.'</a>';
                                        } else {
                                            echo '<a class="reports-nav__item '.$active.'" href="'.$url.'">'.$term->name.'</a>';
                                        }
                                    }

                                    $counter++;
                                }
                            ?>
                                    <?php $moreText = (!empty(ICL_LANGUAGE_CODE) && ICL_LANGUAGE_CODE == 'ar') ? 'مزيد' : 'More'; ?>
                  <div class="position-relative"><div class="moreFilters reports-nav__more"><?php echo $moreText; ?></div><ul class="subMenuReport"><?php echo $submenu; ?></ul>
        </div>
        <div class="tab-content mt-4">
            <?php
            if( isset( $_GET['cat'] ) ) {
                $cat = $_GET['cat'];
            } else {
                $cat = $terms[0]->slug;
            }
            $args = array(
                'post_type' => 'press_releases',
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'category_press',
                        'field'    => 'slug',
                        'terms'    => $cat
                    )
                )
            );
            $reports = new WP_Query( $args );
            $counter = 1;
            while ( $reports->have_posts() ):
                $reports->the_post();
                ?>
                <div id="sec-<?php the_ID(); ?>">


               <div class="faq-question-box faqQuestionBox <?php echo ( $counter == 1 ) ? 'top-border' : ''; ?>">
                 <div class="faq-question-box__title <?php echo ( $counter == 1 ) ? 'is-active' : ''; ?>">
                 <?php echo get_the_title(); ?> (<?php echo rwmb_meta( 'pr_date' ); ?>)
                   <div><img class="arrow" src="<?php echo get_template_directory_uri() . "/assets/images/icons/dropdown-open-icon.png"; ?>" alt="Down arrow icon"></div>
                 </div>

                 <div class="faq-question-box__content">
                    <?php the_content(); ?>
                 </div>
               </div>
                </div>
            <?php
            $counter++;
            endwhile;
            wp_reset_query();
            ?>
        </div>

    </div>

<?php

    return ob_get_clean();

}
add_shortcode( 'press', 'press_shortcode' );

function startsWith($haystack, $needle) {
    return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
}
function endsWith($haystack, $needle) {
    return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}

function rd_reports_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'cat' => '',
            'show_filters' => 'true',
            'title' => '',
            'order' => 'DESC'
        ),
        $atts
    );

    ob_start();

    $terms = get_terms( 'categories_rd_reports', array(
        'child_of' => $atts['cat'],
        'parent' => $atts['cat'],
        'hide_empty' => true,
        'orderby' => 'slug',
        'order' => $atts['order']
    ) );

    ?>

    <style>
        .parent {
            width: 100%;
            overflow: hidden;
            display: inline-block;
        }
        .child {
            overflow: auto;
        }
        #inner {
            min-width: 100%;
        }
    </style>

    <div class="scrol-bar">
        <h3> <?php echo $atts['title']; ?> </h3>
        <?php if( $atts['show_filters'] === 'true' ) : ?>
            <div class="parent">
                <div class="child">
                    <ul id="inner" class="clearfix nav nav-tabs">
                                        <?php
                                        $counter = 1;
                                        $submenu = '';
                                        foreach ( $terms as $term ) {
                                            $active = ( $counter == 1 ) ? 'active' : '';
                                            if( $counter > 4 ) {
                                                $submenu .= '<li><a data-toggle="tab" href="#'.$atts['cat'].'-tab-'.$counter.'" class="'.$active.'">'.$term->name.'</a></li>';
                                            } else {
                                                echo '<li><a data-toggle="tab" href="#'.$atts['cat'].'-tab-'.$counter.'" class="'.$active.'">'.$term->name.'</a></li>';
                                            }
                                            $counter++;
                                        }
                                        ?>
                                        <?php if( count( $terms ) > 4 ) : ?>
                                            <?php $moreText = (!empty(ICL_LANGUAGE_CODE) && ICL_LANGUAGE_CODE == 'ar') ? 'مزيد' : 'More'; ?>
                                          <div class="position-relative"><div class="moreFilters reports-nav__more"><?php echo $moreText; ?></div><ul class="subMenuReport"><?php echo $submenu; ?></ul></div>
                                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <?php
                $counter = 1;
                foreach ( $terms as $term ) {
                    $args = array(
                        'post_type' => 'rd_reports',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'categories_rd_reports',
                                'field'    => 'term_id',
                                'terms'    => $atts['cat']
                            )
                        )
                    );
                    if( $atts['show_filters'] === 'true' ) {
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'categories_rd_reports',
                                'field'    => 'slug',
                                'terms'    => $term->slug
                            )
                        );
                    }
                    $reports = new WP_Query( $args );
                    ?>
                    <div id="<?php echo $atts['cat']; ?>-tab-<?php echo $counter; ?>" class="tab-pane <?php echo ( $counter == 1 ) ? 'active' : ''; ?>">
                        <?php
                        while ( $reports->have_posts() ):
                            $reports->the_post();
                            $link = rwmb_meta( 'rd_external_link' );
                            $rdate = rwmb_meta( 'rd_report_date' );
                            $rtitle = rwmb_meta( 'rd_report_title' );
                            if( !empty( $link ) ) {
                                echo '<p><a href="'.$link.'" target="_blank">'.$rtitle.'<span class="pres-date"> '. date( 'd M Y', $rdate ).'</span></a></p>';
                            } else {
                                $file = rwmb_meta( 'rd_upload_file', 'limit=1' );
                                echo '<p><a href="'.$file[0]['url'].'" target="_blank">'.$rtitle.'<span class="pres-date"> '. date( 'd M Y', $rdate ).'</span></a></p>';
                            }
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                    <?php
                    $counter++;
                }
                ?>
            </div>
        <?php else: ?>
            <div class="tab-content">
                <?php
                $counter = 1;
                $args = array(
                    'post_type' => 'rd_reports',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categories_rd_reports',
                            'field'    => 'term_id',
                            'terms'    => $atts['cat']
                        )
                    )
                );
                $reports = new WP_Query( $args );
                ?>
                <div class="tab-pane active">
                    <?php
                    while ( $reports->have_posts() ):
                        $reports->the_post();
                        $link = rwmb_meta( 'rd_external_link' );
                        $rdate = rwmb_meta( 'rd_report_date' );
                        $rtitle = rwmb_meta( 'rd_report_title' );
                        if( !empty( $link ) ) {
                            echo '<p><a href="'.$link.'" target="_blank">'.$rtitle.'<span class="pres-date"> '.$rdate.' </span></a> </p>';
                        } else {
                            $file = rwmb_meta( 'rd_upload_file', 'limit=1' );
                            echo '<p><a href="'.$file[0]['url'].'" target="_blank">'.$rtitle.'<span class="pres-date"> '.$rdate.' </span></a></p>';
                        }
                        $counter++;
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <?php

    return ob_get_clean();

}
add_shortcode( 'rd_reports', 'rd_reports_shortcode' );


require_once (dirname(__FILE__) . '/inc/theme-options.php');

require_once (dirname(__FILE__) . '/inc/theme-metas.php');

require_once (dirname(__FILE__) . '/inc/theme-post-types.php');

require_once (dirname(__FILE__) . '/inc/theme-taxonomies.php');


add_action( 'init', function() {

    add_shortcode( 'site_url', function( $atts = null, $content = null ) {
        return site_url();
    } );

} );

// Send Email notification to all resume applicants matching Languagues / Ethinicity / Gender with current Job
function press_release_subscriber_notification($post_id, $post, $update) {
        global $wpdb;
        // if ( wp_is_post_revision( $post_id ) ) {
      //    return;
      // }

        // echo $post->post_type;
        //
        $title  = get_the_title($post_id);
        $content_post = get_post($post_id);
        $content = $content_post->post_content;
        // $content = apply_filters('the_content', $content);
        // $content = str_replace(']]>', ']]&gt;', $content);

    if ($post->post_type == 'press_releases' ) { //&& $post->post_status == 'publish'

            if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
              //$lang_post_id = icl_object_id( 4987 , 'press_releases', true, 'ar' );

              if(ICL_LANGUAGE_CODE=='en'):

                  $subscribers =  $wpdb->get_results(
                                $wpdb->prepare("SELECT DISTINCT value from wp_cf7_vdata_entry where cf7_id = 615 AND name = 'email'")
                              );
                    $subject    = $title;
                    $body        = $content ;


              elseif(ICL_LANGUAGE_CODE=='ar'):

                    $subscribers =  $wpdb->get_results(
                                                $wpdb->prepare("SELECT DISTINCT value from wp_cf7_vdata_entry where cf7_id = 615 AND name = 'email'")
                                            );

                                            $subject    = $title;
                                            $body        = $content;

              endif;

            }



            foreach ($subscribers as $user) {
              $to =   sanitize_email($user->value);

                    $headers    = array('Content-Type: text/html; charset=UTF-8');
                $headers[]  = 'From DANA GAS:  <mail@danagas.com>';

                $send = wp_mail( $to, $subject, $body, $headers );

          }

    }
}
//add_action( 'save_post', 'press_release_subscriber_notification', 10, 3 ); //wp_insert_post



function get_investor_dividend() {


  // Get search term from search field
  global $wpdb;
  if (isset($_POST['nonce'])){
    
    if ( wp_verify_nonce( $_POST['nonce'], 'search_invsetor_dividend' ) ){
      $investor_number = $_POST['investor_number'];

        /*$msgu = 'not founda'.$investor_number;
        $response   = array('dividendList' => '', 'message' => $msgu);
        echo json_encode($response);
        die();*/
      
      //$results = $wpdb->get_results( $wpdb->prepare("SELECT * FROM dg_investors_dividend WHERE investor_number=%s", $investor_number));
      $results = $wpdb->get_results( $wpdb->prepare("SELECT investor.investor_number, investor.div_amount, investor.year,
                                                      MAX(CASE WHEN investor.year = 2021 THEN investor.div_amount END) '2021',
                                                      MAX(CASE WHEN investor.year = 2020 THEN investor.div_amount END) '2020',
                                                      MAX(CASE WHEN investor.year = 2019 THEN investor.div_amount END) '2019',
                                                      MAX(CASE WHEN investor.year = 2018 THEN investor.div_amount END) '2018'
                                                      FROM dg_investors_dividend investor
                                                      WHERE investor_number = %s
                                                      GROUP BY  investor.year, investor.div_amount #,investor.investor_number,
                                                      ORDER BY investor.year  DESC", $investor_number));
                                              //print("<pre>".print_r($results,true)."</pre>");
     

      if(!empty($results)){
        // $yearly_dividend = array();
        // foreach ($results as $row) {
        //
        //    $yearly_dividend['year'][$row->year][] = $row;
        // }
        // $yearrr = '';
        // foreach($yearly_dividend as $year){
        //   print("<pre>".print_r($year,true)."</pre>");
        //   $yearrr .= '<td>' . $year['year'] . '</td>';
        //
        // }
        // echo '<tr class="tr-2015"><td>UAE152000064811</td>'. $yearrr .'</tr>';
        //print("<pre>".print_r($yearly_dividend,true)."</pre>");
        //
        $response   = array('dividendList' => $results, 'message' => '');

        //echo json_encode($response);
        //die();

      }else{
        $message = (!empty(ICL_LANGUAGE_CODE) && ICL_LANGUAGE_CODE=='ar' ) ? 'لم يتم العثور على أي نتائج، يرجى التواصل مع سوق أبوظبي للأوراق المالية أو شركة دانة غاز لمزيد من المعلومات' : 'No result found, please contact ADX or Dana Gas for further clarification.';
        $response   = array('dividendList' => '', 'message' => $message, 'lang' => ICL_LANGUAGE_CODE);
      }


      echo json_encode($response);

    }
  }
  die();
}

add_action( 'wp_ajax_get_investor_dividend', 'get_investor_dividend' );
add_action( 'wp_ajax_nopriv_get_investor_dividend', 'get_investor_dividend' );
