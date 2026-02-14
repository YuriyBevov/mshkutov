<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult["ITEMS"]):
  $bgImage = CFile::GetPath($arResult["PICTURE"]);
?>
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

      <div class="stack">
        <? foreach ($arResult["ITEMS"] as $index => $arItem):

          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

          $icon = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
          if ($icon):
        ?>
            <div class="stack__item animate-border" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
              <img src="<?= $icon ?>" alt="Иконка" width="200" height="52">
              <span class="text"><?= $arItem["PREVIEW_TEXT"] ?></span>
              <? if ($arItem["CODE"]): ?>
                <a href="<?= $arItem["CODE"] ?>" class="main-link iconed">Подробнее</a>
              <? endif; ?>
            </div>
        <? endif;
        endforeach; ?>
      </div>
    </div>
  </section>
<? endif; ?>