<?php
/**
 * Template Name: Media library
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
    <link href="<?php echo get_template_directory_uri() . "/dist/css/media-library.min.css"; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="why-invest-grey-bg">

<?php get_header(); ?>

<!-- About section -->
<section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
  "/assets/images/media-library.png"; ?>')">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo ICL_LANGUAGE_CODE == "ar" ? "وسائط" : "Media"; ?></h1>
    </div>
</section>

<section class="company-section reports-section top-bg-section pt-5 pb-0" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/about-shape-bg.png"; ?>)">
  <div class="container">
    <div class="row">

      <div class="col-12 mb-3">
        <div class="media-nav">
          <div class="media-nav__item showVideos is-active"><?php echo ICL_LANGUAGE_CODE == "ar"
            ? "أشرطة فيديو"
            : "Videos"; ?></div>
          <div class="media-nav__item showImages"><?php echo ICL_LANGUAGE_CODE == "ar" ? "الصور" : "Images"; ?></div>
        </div>
      </div>
    </div>

    <div class="row videoSection is-active">
        <?php
        $videos = rwmb_meta("media_videos");
        foreach ($videos as $video): ?>
          <div class="col-12 col-md-4">
            <div class="media-card popup-youtube" data-video-link="<?php echo $video["video_link"]; ?>">
              <?php $img = wp_get_attachment_image_src($video["video_thumbnil"][0]); ?>
              <img src="<?php echo $img[0]; ?>" alt="Video preview img">
              <div class="media-card__play">
                <div class="media-card__play-icon">
                  <img src="<?php echo get_template_directory_uri() .
                    "/assets/images/icons/play-icon.png"; ?>" alt="Play icon">
                </div>
              </div>
              <div class="hover-text"><?php echo $video["video_title"]; ?></div>
            </div>
          </div>
        <?php endforeach;
        ?>
    </div>

    <div class="row imagesSection">
        <?php
        $folders = rwmb_meta("media_folders");
        foreach ($folders as $folder):
          $cover = wp_get_attachment_url($folder["media_images"][0]); ?>
          <div class="col-12 col-md-4 mb-3">
            <div class="card-link openImageModal">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo $cover; ?>" loading="lazy" alt="Preview img modal">
                </div>
                <div class="card-body">
                  <div class="card-title"><?php echo $folder["folder_name"]; ?></div>
                  <img class="arrow" src="<?php echo get_template_directory_uri() .
                    "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                </div>

                <div class="img-modal-links">
                    <?php
                    unset($folder["media_images"][0]);
                    foreach ($folder["media_images"] as $image_id):
                      $image = wp_get_attachment_url($image_id); ?>
                      <div class="img-link d-none" data-link="<?php echo $image; ?>"></div>
                    <?php
                    endforeach;
                    ?>
                </div>

              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>

    </div>

    <div class="line-space-icon-br">
      <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
          "/assets/images/line-space-icon.png"; ?>')"></div>
    </div>
  </div>
</section>

<!-- Form section -->
<section class="form-section mt-5 pt-5">
  <div class="container">
    <h2 class="default-h2 text-center"><?php echo ICL_LANGUAGE_CODE == "ar"
            ? "آخر تحديثات الأخبار"
            : "Latest news updates"; ?></h2>

      <?php if (ICL_LANGUAGE_CODE == "en"): ?>
          <?php echo do_shortcode('[contact-form-7 id="630" title="Contact Form"]'); ?>
      <?php elseif (ICL_LANGUAGE_CODE == "ar"): ?>
          <?php echo do_shortcode('[contact-form-7 id="4706" title="Contact Form Arabic"]'); ?>
      <?php endif; ?>
  </div>
</section>

<!-- Cards section -->
<section class="cards-section bottom-bg-section story pt-5 mt-5" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/bg-shape/grey-shape-end.png"; ?>)">
    <div class="container">
      <div class="line-space-icon-br">
        <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() .
            "/assets/images/line-space-icon.png"; ?>')"></div>
      </div>

        <div class="row mt-3">

          <div class="col-12 col-md-4 mb-3">
            <a href="<?php echo get_site_url(); ?>/media/press-releases/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/press-releases.png'; ?>" alt="Press Releases" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                    ? "تصريحات صحفيه"
                    : "Press Releases"; ?></div>
                  <img class="arrow" src="<?php echo get_template_directory_uri() .
                    "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                </div>
              </div>
            </a>
          </div>

          <div class="col-12 col-md-4 mb-3">
            <a href="<?php echo get_site_url(); ?>/media/regulatory-disclosures/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/regulatory-disclosures.png'; ?>" alt="Regulatory Disclosures" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                    ? "الإفصاحات التنظيمية"
                    : "Regulatory Disclosures"; ?></div>
                  <img class="arrow" src="<?php echo get_template_directory_uri() .
                    "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                </div>
              </div>
            </a>
          </div>

          <div class="col-12 col-md-4 mb-3">
            <a href="<?php echo get_site_url(); ?>/media/media-library/" class="card-link">
              <div class="card">
                <div class="card-header">
                  <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/media-library.png'; ?>" alt="Media Library" loading="lazy">
                </div>
                <div class="card-body">
                  <div class="card-title"><?php echo ICL_LANGUAGE_CODE == "ar"
                    ? "مكتبة الوسائط"
                    : "Media Library"; ?></div>
                  <img class="arrow" src="<?php echo get_template_directory_uri() .
                    "/assets/images/right-arrow-green.png"; ?>" alt="Right arrow icon">
                </div>
              </div>
            </a>
          </div>

        </div>
    </div>
</section>

<!-- Video Modal -->
<div id="videoModal" class="custom-modal" tabindex="-1" role="dialog">
  <div class="custom-modal__content">
    <div class="custom-modal__close" data-dismiss="custom-modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </div>

    <iframe id="videoIframe" src="" allowfullscreen></iframe>
  </div>

  <div class="custom-modal__bg" data-dismiss="custom-modal"></div>
</div>

<!-- Images Modal -->
<div id="imagesModal" class="custom-modal" tabindex="-1" role="dialog">
  <div class="custom-modal__content">
    <div class="custom-modal__close" data-dismiss="custom-modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </div>

    <div class="slider-img" id="sliderImg"></div>

    <img class="slider-arrow prev" src="<?php echo get_template_directory_uri() .
      "/assets/images/icons/arrow-right.svg"; ?>" alt="Left arrow">
    <img class="slider-arrow next" src="<?php echo get_template_directory_uri() .
      "/assets/images/icons/arrow-right.svg"; ?>" alt="Right arrow">

    <div class="slider-count"><span class="currentIndex">2</span> of <span class="sliderAll"></span></div>
  </div>

  <div class="custom-modal__bg" data-dismiss="custom-modal"></div>
</div>


<?php include get_theme_file_path("/parts/why-invest.php"); ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/dist/js/media-library.min.js"; ?>"></script>

</body>

</html>