<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
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

      <div class="workflow">
        <? foreach ($arResult["ITEMS"] as $index => $arItem):
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        ?>
          <div class="workflow__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <span class="outlined-text"><?= $index < 10 ? '0' . $index + 1 : $index + 1 ?></span>
            <span class="subtitle"><?= $arItem["NAME"] ?></span>
            <span class="text"><?= $arItem["PREVIEW_TEXT"] ?></span>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  </section>
<? endif; ?>