<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Шкутов Михаил - Разработка IT-решений");
?>

<? if ($USER->isAdmin()): ?>
  <?
  $APPLICATION->IncludeFile(
    SITE_DIR . 'include/about-preview/about-preview.php',
    array(),
    array('MODE' => 'html', 'NAME' => 'надпись над заголовком', 'SHOW_BORDER' => true)
  );
  ?>

  <!-- workflow -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "workflow",
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
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "7",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
        0 => "",
        1 => "",
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
      "COMPONENT_TEMPLATE" => "workflow"
    ),
    false
  ); ?>
  <!-- workflow end -->

  <!-- areas -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "areas",
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
      "COMPONENT_TEMPLATE" => ".default",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(0 => "", 1 => "",),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "17",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
      "PROPERTY_CODE" => array(0 => "", 1 => "",),
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
      "STRICT_SECTION_CHECK" => "N"
    )
  ); ?>
  <!-- areas end -->

  <!-- performance -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "performance",
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
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "8",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
        0 => "",
        1 => "",
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
      "COMPONENT_TEMPLATE" => "performance"
    ),
    false
  ); ?>
  <!-- performance end -->

  <!-- features -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "features",
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
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "9",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
        0 => "ICON",
        1 => "",
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
      "COMPONENT_TEMPLATE" => "features"
    ),
    false
  ); ?>
  <!-- features end -->

  <!-- features -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "stack",
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
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "12",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
        0 => "ICON",
        1 => "",
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
      "COMPONENT_TEMPLATE" => "stack"
    ),
    false
  ); ?>
  <!-- features end -->

  <?
  /*
$APPLICATION->IncludeFile(
  SITE_DIR . 'include/headlines/faq-headline.php',
  array(),
  array('MODE' => 'html', 'NAME' => 'надпись над заголовком', 'SHOW_BORDER' => true)
);
*/ ?>

<? else: ?>
  <section class="site-preview">
    <div class="container">
      <a href="/" class="logo">
        <img src="<?= SITE_TEMPLATE_PATH ?>/public/logo.svg" alt="Шкутов Михаил - Разработка IT-решений" width="240" height="120">
      </a>
      <h1 class="site-preview__title">Добрый день!<br><br>Я — Михаил Шкутов. Мой сайт ещё в разработке, но вы уже сейчас можете связаться со мной любым удобным способом:</h1>

      <div class="site-preview__social">
        <a href="tel:+79219260260">
          <span>Телефон для связи:</span>&nbsp;
          <span>+7(921)926-02-60</span>
        </a>

        <a href="mailto:m@shkutov.ru">
          <span>Электронная почта:</span>&nbsp;
          <span>m@shkutov.ru</span>
        </a>

        <a href="https://t.me/mshutov" rel="noopener nofollow norefferer" target="_blank">
          <span>Telegram</span>
        </a>
        <a href="https://max.ru/u/f9LHodD0cOJnEPJRjDzTFbSOGmY0L8OnfWbLKbS-IcrVLgA92bk6-7dJAeM" rel="noopener nofollow norefferer" target="_blank">
          <span>MAX</span>
        </a>


      </div>
    </div>
  </section>

  <style>
    main {
      display: flex;
      height: 100vh;
    }

    .site-preview {
      padding: clamp(40px, 6vw, 120px) 0;
      background-image: url(/local/templates/mshkutov/assets/images/sphere-bg.png);
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      margin: auto 0;
      width: 100%;
    }

    .site-preview .logo {
      margin-bottom: 50px;
    }

    .site-preview .logo img {
      width: 240px;
      max-width: 60vw;
      height: auto;
    }

    .site-preview .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .site-preview__title {
      font-size: clamp(24px, 3.6vw, 36px);
    }

    .site-preview__social {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2px;
    }

    .site-preview__social a {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: clamp(18px, 4vw, 28px);
      width: fit-content;
    }
  </style>
<? endif; ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>