<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Шкутов Михаил - Разработка IT-решений");
?>

<? if ($USER->isAdmin()): ?>
  <?/*
  $APPLICATION->IncludeFile(
    SITE_DIR . 'include/about-preview/about-preview.php',
    array(),
    array('MODE' => 'html', 'NAME' => 'надпись над заголовком', 'SHOW_BORDER' => true)
  );
  */ ?>

  <!-- sale preview -->
  <?
  $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "base-card-list",
    [
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
      "DETAIL_URL" => "/sale/#ELEMENT_CODE#/",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "N",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "",
        1 => "",
      ],
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "14",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "20",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_TEMPLATE" => "lw-page-navigation",
      "PAGER_TITLE" => "Новости",
      "PARENT_SECTION" => "",
      "PARENT_SECTION_CODE" => "",
      "PREVIEW_TRUNCATE_LEN" => "",
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
      ],
      "SET_BROWSER_TITLE" => "N",
      "SET_LAST_MODIFIED" => "N",
      "SET_META_DESCRIPTION" => "N",
      "SET_META_KEYWORDS" => "N",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "N",
      "SHOW_404" => "N",
      "SORT_BY1" => "SORT",
      "SORT_BY2" => "SORT",
      "SORT_ORDER1" => "DESC",
      "SORT_ORDER2" => "ASC",
      "STRICT_SECTION_CHECK" => "N",
      "COMPONENT_TEMPLATE" => "base-card-list",
      "BASE_CARD_ANIMATE_BORDER" => "Y",
      "BASE_CARD_FILLED_BG" => "Y",
      "SLIDER_CLASS" => "sale-preview-slider",
      "USE_SLIDER" => "Y",
      "SLIDER_DESKTOP_VIEW" => "2",
      "SLIDER_TABLET_VIEW" => "2",
      "SLIDER_MOBILE_VIEW" => "auto",
      "SLIDES_DESKTOP_VIEW_COUNT" => "2",
      "SLIDES_TABLET_VIEW_COUNT" => "2",
      "SLIDES_MOBILE_VIEW_COUNT" => "1",
      "BASE_CARD_PICTURE_USE_DEFAULT" => "N",
      "BASE_CARD_USE_NUMERIC_TITLES" => "Y",
      "SHOW_FORM_OPENER_BTN" => "N"
    ],
    $component
  ); ?>
  <!-- sale preview -->

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
    "base-card-list",
    [
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
      "COMPONENT_TEMPLATE" => "base-card-list",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "",
        1 => "",
      ],
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
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
      ],
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
      "BASE_CARD_ANIMATE_BORDER" => "Y",
      "BASE_CARD_FILLED_BG" => "N",
      "USE_SLIDER" => "N",
      "SHOW_FORM_OPENER_BTN" => "N",
      "BASE_CARD_PICTURE_USE_DEFAULT" => "N",
      "BASE_CARD_USE_NUMERIC_TITLES" => "Y",
      "GRID_DESKTOP_VIEW_COUNT" => "3"
    ],
    false
  ); ?>
  <!-- areas end -->

  <!-- approach -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "base-card-list",
    [
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
      "COMPONENT_TEMPLATE" => "base-card-list",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "",
        1 => "",
      ],
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "11",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "",
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
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
      ],
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
      "BASE_CARD_ANIMATE_BORDER" => "N",
      "BASE_CARD_FILLED_BG" => "N",
      "USE_SLIDER" => "N",
      "BASE_CARD_PICTURE_USE_DEFAULT" => "N",
      "BASE_CARD_USE_NUMERIC_TITLES" => "N",
      "GRID_DESKTOP_VIEW_COUNT" => "4",
      "SHOW_FORM_OPENER_BTN" => "N"
    ],
    false
  );  ?>
  <!-- approach end -->

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
  );  ?>
  <!-- features end -->

  <!-- stack -->
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
        0 => "CODE",
        1 => "NAME",
        2 => "PREVIEW_TEXT",
        3 => "",
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
        0 => "",
        1 => "ICON",
        2 => "",
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
  <!-- stack end -->

  <!-- cases -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "base-card-list",
    [
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
      "COMPONENT_TEMPLATE" => "base-card-list",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "",
        1 => "",
      ],
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "6",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "",
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
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
      ],
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
      "BASE_CARD_ANIMATE_BORDER" => "Y",
      "BASE_CARD_FILLED_BG" => "N",
      "USE_SLIDER" => "Y",
      "SLIDES_DESKTOP_VIEW_COUNT" => "3",
      "SLIDES_TABLET_VIEW_COUNT" => "2",
      "SLIDES_MOBILE_VIEW_COUNT" => "1",
      "SHOW_FORM_OPENER_BTN" => "Y",
      "SHOW_FORM_OPENER_TEXT" => "Получить бесплатный аудит",
      "FORM_ID" => "1"
    ],
    $component
  ); ?>
  <!-- cases end -->

  <!-- blog-preview -->
  <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "base-card-list",
    [
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
      "COMPONENT_TEMPLATE" => "base-card-list",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "",
        1 => "",
      ],
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "15",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "",
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
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
      ],
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
      "BASE_CARD_ANIMATE_BORDER" => "Y",
      "BASE_CARD_FILLED_BG" => "N",
      "USE_SLIDER" => "Y",
      "SLIDES_DESKTOP_VIEW_COUNT" => "3",
      "SLIDES_TABLET_VIEW_COUNT" => "2",
      "SLIDES_MOBILE_VIEW_COUNT" => "1",
      "BASE_CARD_PICTURE_USE_DEFAULT" => "Y",
      "SHOW_FORM_OPENER_BTN" => "N"
    ],
    $component
  ); ?>
  <!-- blog-preview end -->

  <!-- faq -->
  <?
  $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "faq-preview",
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
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "16",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "20",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_TEMPLATE" => "lw-page-navigation",
      "PAGER_TITLE" => "Новости",
      "PARENT_SECTION" => "",
      "PARENT_SECTION_CODE" => "",
      "PREVIEW_TRUNCATE_LEN" => "",
      "PROPERTY_CODE" => array(
        0 => "SHOW_ON_INDEX_PAGE",
        1 => "",
      ),
      "SET_BROWSER_TITLE" => "N",
      "SET_LAST_MODIFIED" => "N",
      "SET_META_DESCRIPTION" => "N",
      "SET_META_KEYWORDS" => "N",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "N",
      "SHOW_404" => "N",
      "SORT_BY1" => "SORT",
      "SORT_BY2" => "SORT",
      "SORT_ORDER1" => "DESC",
      "SORT_ORDER2" => "ASC",
      "STRICT_SECTION_CHECK" => "N",
      "COMPONENT_TEMPLATE" => "faq-preview"
    ),
    $component
  ); ?>
  <!-- faq -->

  <!-- reviews-preview -->
  <?/*
  $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "reviews-slider",
    [
      "ACTIVE_DATE_FORMAT" => "j F Y",
      "ADD_SECTIONS_CHAIN" => "N",
      "AJAX_MODE" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "N",
      "CACHE_FILTER" => "N",
      "CACHE_GROUPS" => "N",
      "CACHE_TIME" => "36000000",
      "CACHE_TYPE" => "Y",
      "CHECK_DATES" => "Y",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "N",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "N",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => [
        0 => "DATE_CREATE",
        1 => "",
      ],
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "13",
      "IBLOCK_TYPE" => "site_content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "",
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
      "PROPERTY_CODE" => [
        0 => "",
        1 => "",
        2 => "",
      ],
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
      "COMPONENT_TEMPLATE" => "slider-list"
    ],
    false
  ); */ ?>
  <!-- reviews-preview -->

  <!-- callback -->
  <section class="section contacts">
    <div class="container">
      <div class="grid --filled-bg">
        <div class="grid__item">
          <h2>Контакты</h2>
          <p>
            <strong>
              Шкутов Михаил<br>
              <i>разработчик</i>
            </strong>
          </p>

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
        <div class="grid__item">
          <? $APPLICATION->IncludeComponent(
            "bitrix:form.result.new",
            "callback-form",
            array(
              "SHOW_TITLE" => "N",
              "AJAX_MODE" => "Y",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "N",
              "AJAX_OPTION_HISTORY" => "N",
              "CACHE_TIME" => "3600",
              "CACHE_TYPE" => "A",
              "CHAIN_ITEM_LINK" => "",
              "CHAIN_ITEM_TEXT" => "",
              "EDIT_URL" => "",
              "IGNORE_CUSTOM_TEMPLATE" => "N",
              "LIST_URL" => "",
              "SEF_MODE" => "N",
              "SUCCESS_URL" => "",
              "USE_EXTENDED_ERRORS" => "Y",
              "WEB_FORM_ID" => "1",
              "COMPONENT_TEMPLATE" => "callback-form",
              "VARIABLE_ALIASES" => array(
                "WEB_FORM_ID" => "WEB_FORM_ID",
                "RESULT_ID" => "RESULT_ID",
              )
            ),
            false
          ); ?>
        </div>
      </div>

    </div>
  </section>
  <!-- callback -->

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