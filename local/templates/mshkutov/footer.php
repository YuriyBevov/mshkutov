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

        <div class="contacts-row">
          <?
          $APPLICATION->IncludeFile(
            SITE_DIR . 'include/static-info/mail.php',
            array(),
            array('MODE' => 'html', 'NAME' => 'адрес эл.почты', 'SHOW_BORDER' => true)
          );
          ?>
          <?
          $APPLICATION->IncludeFile(
            SITE_DIR . 'include/static-info/phone.php',
            array(),
            array('MODE' => 'html', 'NAME' => 'номер телефона', 'SHOW_BORDER' => true)
          );
          ?>
        </div>

        <? $APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "social",
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
              0 => "",
              1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "18",
            "IBLOCK_TYPE" => "site_content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "3",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
              0 => "LINK",
              1 => "ICON",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "social"
          ),
          false
        ); ?>
      </div>
    </div>
  </footer>
<? endif; ?>
</body>

</html>