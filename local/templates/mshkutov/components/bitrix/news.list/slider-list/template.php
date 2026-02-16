<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
$APPLICATION->AddHeadScript($templateFolder . "/custom_script.js");
?>

<? if ($arResult["ITEMS"]): ?>
  <section class="section">
    <div class="container">
      <div class="section__header">
        <div class="section__header-wrapper">
          <h2 class="section__title"><?= $arResult["NAME"] ?></h2>
        </div>

        <? if ($arResult["DESCRIPTION"]): ?>
          <p class="section__desc"><?= $arResult["DESCRIPTION"] ?></p>
        <? endif; ?>
      </div>

      <div class="swiper">
        <div class="swiper-wrapper">
          <? foreach ($arResult["ITEMS"] as $index => $arItem):
            $this->AddEditAction(
              $arItem['ID'],
              $arItem['EDIT_LINK'],
              CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
            );
            $this->AddDeleteAction(
              $arItem['ID'],
              $arItem['DELETE_LINK'],
              CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
              ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
            );
          ?>



            <div class="swiper-slide base-card-container" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
              <? $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "base-card",
                array(
                  "ANIMATE_BORDER" => "Y",
                  "ACTIVE_DATE_FORMAT" => "d.m.Y",
                  "ADD_ELEMENT_CHAIN" => "N",
                  "ADD_SECTIONS_CHAIN" => "N",
                  "AJAX_MODE" => "N",
                  "AJAX_OPTION_ADDITIONAL" => "",
                  "AJAX_OPTION_HISTORY" => "N",
                  "AJAX_OPTION_JUMP" => "N",
                  "AJAX_OPTION_STYLE" => "Y",
                  "BROWSER_TITLE" => "-",
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
                  "ELEMENT_CODE" => "",
                  "ELEMENT_ID" => $arItem["ID"],
                  "FIELD_CODE" => array(0 => "PREVIEW_PICTURE", 1 => "",),
                  "IBLOCK_ID" => $arResult["ID"],
                  "IBLOCK_TYPE" => "site_content",
                  "IBLOCK_URL" => "",
                  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                  "MESSAGE_404" => "",
                  "META_DESCRIPTION" => "-",
                  "META_KEYWORDS" => "-",
                  "PAGER_BASE_LINK_ENABLE" => "N",
                  "PAGER_SHOW_ALL" => "N",
                  "PAGER_TEMPLATE" => ".default",
                  "PAGER_TITLE" => "Страница",
                  "PROPERTY_CODE" => array(0 => "", 1 => "",),
                  "SET_BROWSER_TITLE" => "N",
                  "SET_CANONICAL_URL" => "N",
                  "SET_LAST_MODIFIED" => "N",
                  "SET_META_DESCRIPTION" => "N",
                  "SET_META_KEYWORDS" => "Y",
                  "SET_STATUS_404" => "N",
                  "SET_TITLE" => "N",
                  "SHOW_404" => "N",
                  "STRICT_SECTION_CHECK" => "N",
                  "USE_PERMISSIONS" => "N",
                  "USE_SHARE" => "N"
                )
              ); ?>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>