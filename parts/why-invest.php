<!-- Why invest section -->
<section class="why-invest-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/why-invest-bg.png'; ?>')">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6">
        <div class="why-invest-block">
          <div class="why-invest-block__pre-title"><?php echo get_field('why_invest_pre_title') ?></div>
          <div class="why-invest-block__title"><?php echo get_field('why_invest_title') ?></div>
          <p><?php echo get_field('why_invest_description') ?></p>

          <div class="row">
            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/why-invest-production.png'; ?>" alt="Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo get_field('why_gross_production') ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_gross_production_value') ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/why-invest-2p-reserves.png'; ?>" alt="2P reserves icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo get_field('why_2p_reserves') ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_2p_reserves_value') ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/why-invest-gas.png'; ?>" alt="Gas Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo get_field('why_average_production') ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_average_production_value') ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/why-invest-condensate.png'; ?>" alt="Condensate Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo get_field('why_average_condensate') ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_average_condensate_value') ?></div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>