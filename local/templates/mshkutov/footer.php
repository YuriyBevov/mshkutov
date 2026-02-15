<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</main>
<? if ($USER->isAdmin()): ?>
  <footer class="footer">
    <div class="container">
      <div class="footer__row">
        <? $APPLICATION->IncludeComponent(
          "bitrix:menu",
          "row-menu",
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_THEME" => "site",
            "ROOT_MENU_TYPE" => "bottom",
            "USE_EXT" => "Y",
            "COMPONENT_TEMPLATE" => "row-menu"
          ),
          false
        ); ?>
      </div>
      <div class="footer__row">
        <a href="/" class="logo">
          <img src="<?= SITE_TEMPLATE_PATH ?>/public/logo.svg" alt="Шкутов Михаил - Разработка IT-решений" width="146" height="55">
        </a>
        <span class="text">Copyright © 2026 All Rights Reserved.</span>
        <a href="tel:+70000000000" class="main-link">+7 (000) 000-00-00</a>
        <a href="mailto:email@mail.ru" class="main-link">email@mail.ru</a>

        <div class="social">
          social
        </div>
      </div>
    </div>
  </footer>
<? endif; ?>
</body>

</html>