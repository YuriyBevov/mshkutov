<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
if ($arResult["ITEMS"]):
?>
  <section class="section">
    <div class="container">
      <?
      $APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . '/include/section-header.php',
        array(
          'TITLE' => $arResult["NAME"],
          'DESCRIPTION' => $arResult["DESCRIPTION"],
          'SHOW_SLIDER_NAVIGATION_BLOCK' => $arParams["USE_SLIDER"] ?? 'N'
        ),
        array('MODE' => 'html', 'NAME' => 'шапку раздела', 'SHOW_BORDER' => false)
      );
      ?>

      <div class="services-list-container">
        <div class="services-list">
          <? foreach ($arResult["ITEMS"] as $arItem):
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
            <div class="service-card-container">
              <div class="service-card --animate-border" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <span class="service-card__title">
                  <?= $arItem["NAME"] ?>
                </span>

                <? if ($arItem["PROPERTIES"]["PRICE"]["VALUE"]): ?>
                  <span class="service-card__price">
                    <?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?>&nbsp;₽
                  </span>
                <? endif; ?>
                <? if (!empty($arItem["PROPERTIES"]["SERVICE_DESC"])): ?>
                  <ul>
                    <? foreach ($arItem["PROPERTIES"]["SERVICE_DESC"]["VALUE"] as $arServiceDesc): ?>
                      <li>
                        <span class="text">
                          <?= $arServiceDesc ?>
                        </span>
                      </li>
                    <? endforeach; ?>
                  </ul>
                <? endif; ?>

                <button class="main-btn iconed">
                  Заказать
                </button>
              </div>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  </section>


<? endif; ?>