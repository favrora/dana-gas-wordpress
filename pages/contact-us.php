<?php
/**
 * Template Name: Contact Us
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
  <link href="<?php echo get_template_directory_uri() . "/dist/css/contact-us.min.css"; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() .
    "/assets/images/contact-us-bg.png"; ?>)">
    <div class="about-overlay"></div>
    <div class="container">
      <h1><?php echo get_field("contact_us_title"); ?></h1>
    </div>
  </section>

  <!-- Group contacts section -->
  <section class="group-section">
    <div class="container">
      <h2 class="default-h2"><?php echo get_field("contact_us_title_2"); ?></h2>

      <div class="row mt-4">

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title"><?php echo get_field("head_office_title"); ?></div>
            <?php echo get_field("head_office_description"); ?>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title"><?php echo get_field("human_resources_title"); ?></div>
            <?php echo get_field("human_resources_description"); ?>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title"><?php echo get_field("investor_relations_title"); ?></div>
            <?php echo get_field("investor_relations_description"); ?>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title"><?php echo get_field("contracts_department_title"); ?></div>
            <?php echo get_field("contracts_department_description"); ?>
          </div>
        </div>

      </div>
  </section>

  <!-- Form section -->
  <section class="form-section d-none">
    <div class="container">
      <h2 class="default-h2 text-center"><?php echo get_field("contact_form_title"); ?></h2>
      <p class="form-section__desc"><?php echo get_field("contact_form_description"); ?></p>

      <form class="form-section__form mt-3">
        <div class="row">
          <div class="col-12 col-md-6">
            <input type="text" name="first_name" placeholder="<?php echo get_field("contact_first_name_input"); ?>:*">
          </div>

          <div class="col-12 col-md-6">
            <input type="text" name="last_name" placeholder="<?php echo get_field("contact_last_name_input"); ?>:*">
          </div>

          <div class="col-12 col-md-6">
            <input id="phoneNumber" type="text" class="phone" name="phone_number">
            <input type="hidden" name="phone_county_code">
          </div>

          <div class="col-12 col-md-6">
            <input type="email" name="email" placeholder="<?php echo get_field("contact_email_address_input"); ?>:*">
          </div>

          <div class="col-12 col-md-6">
            <select class="form-control">
              <option value="" selected disabled>Purporse:*</option>
              <option value="1">General Enquiry</option>
              <option value="2">Feedback</option>
            </select>
          </div>

          <div class="col-12 col-md-6">
            <input type="text" name="company_name" placeholder="<?php echo get_field(
              "contact_company_name_input"
            ); ?>:">
          </div>

          <div class="col-12">
            <textarea class="form-control" rows="3" placeholder="<?php echo get_field(
              "contact_comments_input"
            ); ?>:*"></textarea>
          </div>

          <div class="col-12 text-center">
            <button class="btn btnWithProgress mt-3 up">
              <?php echo get_field("contact_form_button"); ?>
              <img src="<?php echo get_template_directory_uri() .
                "/assets/images/right-arrow-white.png"; ?>" alt="Right arrow icon">
            </button>
          </div>

        </div>
      </form>

    </div>
  </section>

  <!-- Location section -->
  <section class="location-section pb-4 mt-5">
    <div class="container">
      <div class="row">

        <div class="col-12 d-flex justify-content-center mb-4">
          <div class="location-section__country active" data-switch="1"><?php echo get_field("uae_title"); ?></div>
          <div class="location-section__country" data-switch="2"><?php echo get_field("egypt_title"); ?></div>
          <div class="location-section__country" data-switch="3"><?php echo get_field("kri_title"); ?></div>
        </div>

        <!-- UAE office location -->
        <div class="col-12 col-md-6 switchLocation">
          <h2 class="default-h2"><?php echo get_field("dana_gas_uae"); ?></h2>
          <?php echo get_field("location_uae_details"); ?>
        </div>

        <!-- Egypt office location -->
        <div class="col-12 col-md-6 switchLocation d-none">
          <h2 class="default-h2"><?php echo get_field("dana_gas_egypt"); ?></h2>
          <?php echo get_field("location_egypt_details"); ?>
        </div>

        <!-- KRI office location -->
        <div class="col-12 col-md-6 switchLocation d-none">
          <h2 class="default-h2"><?php echo get_field("dana_gas_kri"); ?></h2>
          <?php echo get_field("location_kri_details"); ?>
        </div>

        <div class="col-12 col-md-6">
          <div id="mapLocation"></div>
        </div>

      </div>
    </div>
  </section>


  <?php include get_theme_file_path("/parts/why-invest.php"); ?>

  <?php get_footer(); ?>
  <script>
    const locationIcon = "<?php echo get_template_directory_uri() . "/assets/images/icons/location.png"; ?>"
  </script>
  <script src="<?php echo get_template_directory_uri() . "/dist/js/contact-us.min.js"; ?>"></script>

</body>

</html>