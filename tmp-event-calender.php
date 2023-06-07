<?php
/**
 * Template Name: Event Calender
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/event-calendar.min.css"; ?>" rel="stylesheet">
      <?php wp_head(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . "/dist/js-plugins/jquery.icalendar.min.js"; ?>"></script>
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

  <div class="page-content mt-4">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-10" style="margin: 0 auto">
          <div class="content-detail event-calendar">
            <div class="ev-cal-header">
              <a href="#" class="ev-title">Title</a>
              <a href="#" class="ev-date">Date</a>
              <a href="#" class="ev-out">Outlook</a>
            </div>
              <?php
              $counter = 1;
              $events = rwmb_meta( 'add_event' );
              foreach ( $events as $event ) :
                  ?>
                  <?php $ed = explode( '-', $event['event_date'] ); ?>
                <div class="ev-cal-row">
                  <p class="ev-row-title"><?php echo $event['event_title']; ?></p>
                  <p class="ev-row-date"><?php echo $ed[2]; ?>/<?php echo $ed[1]; ?>/<?php echo $ed[0]; ?></p>
                  <a class="saveEvent">
                      <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <span>Add to Calendar</span>
                      <?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
                        <span>إضافة إلى التقويم</span>
                      <?php endif; ?>

                    <div id="addToCalendar<?php echo $counter; ?>" class="addToCalendar"></div>
                  </a>
                </div>

                <script>
                  document.addEventListener("DOMContentLoaded", function () {
                  $('#addToCalendar<?php echo $counter; ?>').icalendar(
                    $.extend({
                        icons: '<?php echo get_template_directory_uri(); ?>/images/icalendar.png',
                        sites: [],
                        echoUrl: '<?php echo home_url(); ?>/iCalEvent.php'
                      },
                      {
                        start: new Date(<?php echo $ed[0]; ?>, <?php echo $ed[1]; ?>, <?php echo $ed[2]; ?>, 0, 0, 0),
                        end: new Date(<?php echo $ed[0]; ?>, <?php echo $ed[1]; ?>, <?php echo $ed[2]; ?>, 23, 59, 0),
                        title: "<?php echo str_replace( ' ', '+', $event['event_title'] ); ?>",
                        summary: "For+details,+link+here:+<?php echo home_url('/investors/event-calender/'); ?>",
                        description: '',
                        location: 'Dubai, UAE'
                      }
                    )
                  );
                  })
                </script>

                  <?php $counter++; endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/event-calendar.min.js"; ?>"></script>

</body>

</html>