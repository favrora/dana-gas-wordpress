<!-- Why invest section -->
<section class="why-invest-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/why-invest-bg.png'; ?>')">

  <div class="line-space-icon-br">
    <div class="line-space-icon" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/line-space-icon.png'; ?>')"></div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6">
        <div class="why-invest-block">
          <div class="why-invest-block__pre-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "لماذا تستثمر في" : "Why invest in" ?></div>
          <div class="why-invest-block__title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "دانة غاز" : "Dana Gas" ?></div>
          <p><?php echo ICL_LANGUAGE_CODE == 'ar' ? "أكبر شركة في منطقة الشرق الأوسط وشمال إفريقيا مدرجة بشكل مستقل وتركز على الغاز الطبيعي" : "MENA's largest independently listed, natural gas-focused E&P Company" ?></p>

          <div class="row">
            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/why-invest-production.png'; ?>" alt="Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "الإنتاج الإجمالي" : "Gross Production" ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_gross_production_value_num') ?? "63.1" ?> <?php echo ICL_LANGUAGE_CODE == 'ar' ? "كيلوبايت في اليوم" : "kboepd" ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/why-invest-2p-reserves.png'; ?>" alt="2P reserves icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "2P الاحتياطيات" : "2P Reserves" ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_2p_reserves_value_num') ?? "1,079" ?> <?php echo ICL_LANGUAGE_CODE == 'ar' ? "ممبو" : "mmboe" ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/why-invest-gas.png'; ?>" alt="Gas Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "متوسط إنتاج الغاز اليومي" : "Average Daily Gas Production" ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_average_production_value_num') ?? "294" ?> <?php echo ICL_LANGUAGE_CODE == 'ar' ? "ملي قدم مكعب" : "mmscf" ?></div>
              </div>
            </div>

            <div class="col-6 why-invest-block__data">
              <div class="why-invest-block__data-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/why-invest-condensate.png'; ?>" alt="Condensate Production icon">
              </div>

              <div class="d-flex flex-wrap">
                <div class="why-invest-block__data-title"><?php echo ICL_LANGUAGE_CODE == 'ar' ? "متوسط إنتاج المكثفات اليومي" : "Average Daily Condensate Production" ?></div>
                <div class="why-invest-block__data-stats"><?php echo get_field('why_average_condensate_value_num')  ?? "10,608" ?> <?php echo ICL_LANGUAGE_CODE == 'ar' ? "برميل" : "bbl" ?></div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>