<?php global $danagas; ?>

<!-- Header section -->
<header class="nav-header">
  <a class="site-logo" href="<?php echo get_site_url() ?>">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/Dana-Gas-logo.png'; ?>" alt="Dana Gas">
  </a>

  <div class="nav-item">
    <div class="mobile-menu" id="toggleMobileMenu">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
        <g stroke-width="6.5" stroke-linecap="round">
          <path d="M72 82.286h28.75" fill="#009100" fill-rule="evenodd" />
          <path d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554" fill="none" />
          <path d="M72 125.143h28.75" fill="#009100" fill-rule="evenodd" />
          <path d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554" fill="none" />
          <path d="M100.75 82.286h28.75" fill="#009100" fill-rule="evenodd" />
          <path d="M100.75 125.143h28.75" fill="#009100" fill-rule="evenodd" />
        </g>
      </svg>
    </div>

    <div class="nav-price">
      <div class="nav-price__text">
          <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <a href="https://www.adx.ae/English/Pages/ProductsAndServices/Securities/SelectCompany/default.aspx?listedcompanyid=DANA" target="_blank" class="stat"><?php echo $danagas['share_price']; ?></a>
          <?php elseif (ICL_LANGUAGE_CODE == 'ar') : ?>
            <a href="#" target="_blank" class="stat"><?php echo $danagas['share_price_ar']; ?></a>
          <?php endif; ?>
      </div>

      <div class="lang-sec float-left">
          <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
      </div>
    </div>

  <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
    <ul class="nav-item__ul">
      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/about-us/">About us</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/about-us/overview/">About us</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/">Our story</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/1537-2/">Why invest in Dana Gas</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/vision-strategy-values/">Vision, strategy &amp; values</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/group-structure/">Group structure</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/about-us/board-and-management/board-of-directors">Board &amp; Management</a>
          <ul class="child-menu">
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/board-of-directors/">Board of Directors</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/international-advisory-board/">International Advisory Board</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/senior-executive-management/">Senior Executive Management</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/senior-management/">Senior Management</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/about-us/governance/">Governance</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/governance/committees/">Board committees</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/governance/governance-reporting/">Governance reporting</a></li>
          </ul>
          <a href="<?php echo get_site_url() ?>/about-us/risk-management/">Risk Management and Internal Audit</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/operations/">Operations</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/operations/egypt/">Egypt</a>
          <a href="<?php echo get_site_url() ?>/operations/kri/">Kurdistan Region of Iraq</a>
          <a href="<?php echo get_site_url() ?>/operations/united-arab-emirates/">United Arab Emirates</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/sustainability/">Sustainability</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/media/">Media</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/media/press-releases/">Press releases</a>
          <a href="<?php echo get_site_url() ?>/media/regulatory-disclosures/">Regulatory disclosures</a>
          <a href="<?php echo get_site_url() ?>/media/media-library/">Media library</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/investors/">Investors</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/investors/results-center/">Results centre</a>
          <a href="<?php echo get_site_url() ?>/investors/reports/">Reports &amp; presentations</a>
          <a href="<?php echo get_site_url() ?>/investors/sukuk-information/">Sukuk information</a>
          <a href="<?php echo get_site_url() ?>/investors/key-financials/">Key financials</a>
          <a href="<?php echo get_site_url() ?>/investors/general-assembly-meeting/">General Assembly Meeting</a>
          <a href="<?php echo get_site_url() ?>/investors/share-price-information-2/">Share price information</a>
          <a href="<?php echo get_site_url() ?>/investors/faqs/">FAQs</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/careers/">Careers</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/contact/">Contact us</a>
        </div>
      </li>
    </ul>

  <?php elseif (ICL_LANGUAGE_CODE == 'ar') : ?>
    <ul class="nav-item__ul">
      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/about-us/">معلومات عنا</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/about-us/overview/">معلومات عنا</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/">قصتنا</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/1537-2/">لماذا الاستثمار في دانة غاز</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/vision-strategy-values/">الرؤية والاستراتيجية والقيم</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/overview/group-structure/">هيكل المجموعة</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/about-us/board-and-management/board-of-directors">مجلس الإدارة والإدارة</a>
          <ul class="child-menu">
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/board-of-directors/">مجلس إدارة</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/international-advisory-board/">المجلس الاستشاري الدولي</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/senior-executive-management/">الإدارة التنفيذية العليا</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us/board-and-management/senior-management/">الإدارة العليا</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/about-us/governance/">الحكم</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/governance/committees/">لجان مجلس الإدارة</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/about-us/governance/governance-reporting/">تقارير الحوكمة</a></li>
          </ul>
          <a href="<?php echo get_site_url() ?>/about-us/risk-management/">إدارة المخاطر والتدقيق الداخلي</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/operations/">عمليات</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/operations/egypt/">مصر</a>
          <a href="<?php echo get_site_url() ?>/operations/kri/">إقليم كردستان العراق</a>
          <a href="<?php echo get_site_url() ?>/operations/united-arab-emirates/">الإمارات العربية المتحدة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/sustainability/">الاستدامة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/media/">وسائط</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/media/press-releases/">تصريحات صحفيه</a>
          <a href="<?php echo get_site_url() ?>/media/regulatory-disclosures/">الإفصاحات التنظيمية</a>
          <a href="<?php echo get_site_url() ?>/media/media-library/">مكتبة الوسائط</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/investors/">المستثمرون</a>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dropdown-open-icon.png'; ?>" alt="Dropdown open icon">
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/investors/results-center/">مركز النتائج</a>
          <a href="<?php echo get_site_url() ?>/investors/reports/">التقارير والعروض التقديمية</a>
          <a href="<?php echo get_site_url() ?>/investors/sukuk-information/">معلومات الصكوك</a>
          <a href="<?php echo get_site_url() ?>/investors/key-financials/">البيانات المالية الرئيسية</a>
          <a href="<?php echo get_site_url() ?>/investors/general-assembly-meeting/">اجتماع الهيئة العامة</a>
          <a href="<?php echo get_site_url() ?>/investors/share-price-information-2/">معلومات سعر السهم</a>
          <a href="<?php echo get_site_url() ?>/investors/faqs/">أسئلة وأجوبة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/careers/">وظائف</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/contact/">اتصل بنا</a>
        </div>
      </li>
    </ul>
  <?php endif; ?>


  </div>
</header>