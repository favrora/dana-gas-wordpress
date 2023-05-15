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

  <title><?php bloginfo('name'); ?></title>

  <!-- Source files -->
  <link href="<?php echo get_template_directory_uri() . '/dist/css/contact-us.min.css'; ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <?php get_header(); ?>

  <!-- About section -->
  <section class="about-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/contact-us-bg.png'; ?>)">
    <div class="about-overlay"></div>
    <div class="container">
      <h1>Contact US</h1>
    </div>
  </section>

  <!-- Group contacts section -->
  <section class="group-section">
    <div class="container">
      <h2 class="default-h2">Group contacts</h2>

      <div class="row mt-4">

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title">Head Office Switchboard</div>

            <div>PO Box 2011</div>
            <div>Sharjah, United Arab Emirates</div>

            <div class="mt-1">T: +971 (0)6 5194444</div>
            <div>F: +971 (0)6 556 6522</div>
            <div>Email: mail@danagas.com</div>

          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title">Human Resources</div>

            <div>PO Box 2011</div>
            <div>Sharjah, United Arab Emirates</div>

            <div class="mt-1">Email: careers@danagas.com</div>

          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title">Investor Relations & Corporate Communication</div>

            <div>PO Box 2011</div>
            <div>Sharjah, United Arab Emirates</div>

            <div class="mt-1">T: +971 (0)6 519 4499</div>
            <div>F: +971 (0)6 556 6522</div>
            <div>Email: ir@danagas.com</div>

          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <div class="group-section__contact">
            <div class="group-section__contact-title">Contracts & Purchasing Department</div>

            <div>Sharjah,</div>
            <div>United Arab Emirates</div>

            <div class="mt-1">Email: purchasing@danagas.com</div>

          </div>
        </div>

      </div>
  </section>

  <!-- Form section -->
  <section class="form-section">
    <div class="container">
      <h2 class="default-h2 text-center">Latest news updates</h2>
      <p class="form-section__desc">Let's get this conversation started. Tell us a bit about yourself, and we'll get in touch as soon as we can.</p>

      <form class="form-section__form mt-3">
        <div class="row">
          <div class="col-12 col-md-6">
            <input type="text" name="first_name" placeholder="First Name:*">
          </div>

          <div class="col-12 col-md-6">
            <input type="text" name="last_name" placeholder="Last Name:*">
          </div>

          <div class="col-12 col-md-6">
            <input id="phoneNumber" type="text" class="phone" name="phone_number">
            <input type="hidden" name="phone_county_code">
          </div>

          <div class="col-12 col-md-6">
            <input type="email" name="email" placeholder="Email Address:*">
          </div>

          <div class="col-12 col-md-6">
            <select class="form-control">
              <option value="" selected disabled>Purporse:*</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>

          <div class="col-12 col-md-6">
            <input type="text" name="company_name" placeholder="Company Name:">
          </div>

          <div class="col-12">
            <textarea class="form-control" rows="3" placeholder="Comments:*"></textarea>
          </div>

          <div class="col-12 text-center">
            <button class="btn btnWithProgress mt-3 up">
              Submit
              <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow-white.png'; ?>" alt="Right arrow icon">
            </button>
          </div>

        </div>
      </form>

    </div>
  </section>

  <!-- Location section -->
  <section class="location-section">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="location-section__countries">

          </div>
        </div>

      </div>
    </div>
  </section>


  <?php include get_theme_file_path('/parts/why-invest.php'); ?>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri() . '/dist/js/contact-us.min.js'; ?>"></script>

</body>

</html>