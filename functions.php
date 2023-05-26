<?php

function add_script()
{
    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), 1.1, true);
    wp_register_script('index', get_template_directory_uri() . '/dist/js/index.min.js', array('jquery'), 1.1, true);
    wp_register_script('contact', get_template_directory_uri() . '/dist/js/contact-us.min.js', array('jquery'), 1.1, true);

    if (wp_script_is('app', 'enqueued')) {
        wp_enqueue_script('app');
    }

    if (wp_script_is('index', 'enqueued')) {
        wp_enqueue_script('index');
    }

    if (wp_script_is('contact', 'enqueued')) {
        wp_enqueue_script('contact');
    }
}

add_action('wp_enqueue_scripts', 'add_script');

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
          <?php echo $submenu; ?>
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

add_shortcode('reports', 'reports_shortcode');
