<?php global $danagas; ?>

<!-- Header section -->
<header class="nav-header">
  <a class="site-logo" href="<?php echo get_site_url() ?>">
    <img src="<?php echo get_site_url() . '/wp-content/uploads/2023/06/dana-gas-logo.png'; ?>" alt="Dana Gas">
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
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/investors/results-center/">Results centre</a>
          <a href="<?php echo get_site_url() ?>/investors/reports/">Reports &amp; presentations</a>
          <a href="<?php echo get_site_url() ?>/investors/sukuk-information/">Sukuk information</a>
          <a href="<?php echo get_site_url() ?>/investors/key-financials/">Key financials</a>
          <a href="<?php echo get_site_url() ?>/investors/general-assembly-meeting/">General Assembly Meeting</a>
          <a href="<?php echo get_site_url() ?>/investors/shareholder-information/">Shareholder information</a>
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
          <a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/?lang=ar">معلومات عنا</a>
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%84%d9%85%d8%ad%d8%a9-%d8%b9%d8%a7%d9%85%d8%a9/?lang=ar">معلومات عنا</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%84%d9%85%d8%ad%d8%a9-%d8%b9%d8%a7%d9%85%d8%a9/?lang=ar">قصتنا</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%84%d9%85%d8%ad%d8%a9-%d8%b9%d8%a7%d9%85%d8%a9/%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%ab%d9%85%d8%a7%d8%b1-%d9%81%d9%8a-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/?lang=ar">لماذا الاستثمار في دانة غاز</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%84%d9%85%d8%ad%d8%a9-%d8%b9%d8%a7%d9%85%d8%a9/vision-strategy-values/?lang=ar">الرؤية والاستراتيجية والقيم</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%84%d9%85%d8%ad%d8%a9-%d8%b9%d8%a7%d9%85%d8%a9/%d9%87%d9%8a%d9%83%d9%84-%d8%a7%d9%84%d9%85%d8%ac%d9%85%d9%88%d8%b9%d8%a9/?lang=ar">هيكل المجموعة</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/?lang=ar">مجلس الإدارة والإدارة</a>
          <ul class="child-menu">
            <li><a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/?lang=ar">مجلس إدارة</a></li>
            <li><a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%b4%d8%a7%d8%b1%d9%8a-%d8%a7%d9%84%d8%af%d9%88%d9%84%d9%8a/?lang=ar">المجلس الاستشاري الدولي</a></li>
            <li><a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/?lang=ar">الإدارة التنفيذية العليا</a></li>
            <li><a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d9%80%d8%a7/%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%b9%d9%84%d9%8a%d8%a7/?lang=ar">الإدارة العليا</a></li>
          </ul>

          <a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d8%a7%d9%84%d8%ad%d9%88%d9%83%d9%85%d8%a9/?lang=ar">الحكم</a>
          <ul class="child-menu">
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d8%a7%d9%84%d8%ad%d9%88%d9%83%d9%85%d8%a9/%d9%84%d8%ac%d8%a7%d9%86-%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d8%a9/?lang=ar">لجان مجلس الإدارة</a></li>
            <li><a class="child-menu__a" href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d8%a7%d9%84%d8%ad%d9%88%d9%83%d9%85%d8%a9/%d8%aa%d9%82%d8%b1%d9%8a%d8%b1-%d8%a7%d9%84%d8%ad%d9%88%d9%83%d9%85%d8%a9/?lang=ar">تقارير الحوكمة</a></li>
          </ul>
          <a href="<?php echo get_site_url() ?>/%d8%b9%d9%86-%d8%af%d8%a7%d9%86%d8%a9-%d8%ba%d8%a7%d8%b2/%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d9%85%d8%ae%d8%a7%d8%b7%d8%b1/?lang=ar">إدارة المخاطر والتدقيق الداخلي</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%b4%d8%ba%d9%8a%d9%84%d9%8a%d8%a9/?lang=ar">عمليات</a>
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%b4%d8%ba%d9%8a%d9%84%d9%8a%d8%a9/%d9%85%d8%b5%d8%b1/?lang=ar">مصر</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%b4%d8%ba%d9%8a%d9%84%d9%8a%d8%a9/%d8%a5%d9%82%d9%84%d9%8a%d9%85-%d9%83%d8%b1%d8%af%d8%b3%d8%aa%d8%a7%d9%86-%d8%a7%d9%84%d8%b9%d8%b1%d8%a7%d9%82/?lang=ar">إقليم كردستان العراق</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%b4%d8%ba%d9%8a%d9%84%d9%8a%d8%a9/%d8%af%d9%88%d9%84%d8%a9-%d8%a7%d9%84%d8%a5%d9%85%d8%a7%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a%d8%a9-%d8%a7%d9%84%d9%85%d8%aa%d8%ad%d8%af%d8%a9/?lang=ar">الإمارات العربية المتحدة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%af%d8%a7%d9%85%d8%a9/?lang=ar">الاستدامة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b1%d9%83%d8%b2-%d8%a7%d9%84%d8%a5%d8%b9%d9%84%d8%a7%d9%85%d9%8a/?lang=ar">وسائط</a>
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b1%d9%83%d8%b2-%d8%a7%d9%84%d8%a5%d8%b9%d9%84%d8%a7%d9%85%d9%8a/press-releases/?lang=ar">تصريحات صحفيه</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a7%d9%84%d8%a5%d9%81%d8%b5%d8%a7%d8%ad%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d9%86%d8%b8%d9%8a%d9%85%d9%8a%d8%a9/?lang=ar">الإفصاحات التنظيمية</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b1%d9%83%d8%b2-%d8%a7%d9%84%d8%a5%d8%b9%d9%84%d8%a7%d9%85%d9%8a/media-library/?lang=ar">مكتبة الوسائط</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/?lang=ar">المستثمرون</a>
          <div class="showDropdownList">−</div>
        </div>

        <div class="dropdown-list">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d9%85%d8%b1%d9%83%d8%b2-%d8%a7%d9%84%d9%86%d8%aa%d8%a7%d8%a6%d8%ac-%d9%88%d8%a7%d9%84%d8%b9%d8%b1%d9%88%d8%b6-%d8%a7%d9%84%d8%aa%d9%88%d8%b6%d9%8a%d8%ad%d9%8a%d8%a9/?lang=ar">مركز النتائج</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a7%d9%84%d8%aa%d9%82%d8%a7%d8%b1%d9%8a%d8%b1-%d9%88%d8%a7%d9%84%d8%b9%d8%b1%d9%88%d8%b6-%d8%a7%d9%84%d8%aa%d9%88%d8%b6%d9%8a%d8%ad%d9%8a%d8%a9/?lang=ar">التقارير والعروض التقديمية</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a7%d9%84%d9%85%d8%b9%d9%84%d9%88%d9%85%d8%a7%d8%aa-%d8%a7%d9%84%d8%ae%d8%a7%d8%b5%d8%a9-%d8%a8%d8%a7%d9%84%d8%b5%d9%83%d9%88%d9%83/?lang=ar">معلومات الصكوك</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a7%d9%84%d9%85%d8%a4%d8%b4%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d9%85%d8%a7%d9%84%d9%8a%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9/?lang=ar">البيانات المالية الرئيسية</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a5%d8%ac%d8%aa%d9%85%d8%a7%d8%b9-%d8%a7%d9%84%d8%ac%d9%85%d8%b9%d9%8a%d8%a9-%d8%a7%d9%84%d8%b9%d9%85%d9%88%d9%85%d9%8a%d8%a9/?lang=ar">اجتماع الهيئة العامة</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/shareholder-information/?lang=ar">معلومات المساهمين</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/2901-2/?lang=ar">معلومات سعر السهم</a>
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%ab%d9%85%d8%b1%d9%88%d9%86/%d8%a3%d8%b3%d8%a6%d9%84%d8%a9-%d9%88%d8%a3%d8%ac%d9%88%d8%a8%d8%a9/?lang=ar">أسئلة وأجوبة</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%a7%d9%84%d9%88%d8%b8%d8%a7%d8%a6%d9%81/?lang=ar">وظائف</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropdown-title">
          <a href="<?php echo get_site_url() ?>/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/?lang=ar">اتصل بنا</a>
        </div>
      </li>
    </ul>
  <?php endif; ?>


  </div>
</header>