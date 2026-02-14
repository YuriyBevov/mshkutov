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

      <div class="performance">
        <div class="performance__image-wrapper animate-border">
          <img src="<?= $bgImage ?>" alt="Изображение для фона" width="600" height="400">
        </div>
        <div class="performance__content-wrapper">
          <div class="grid">
            <? foreach ($arResult["ITEMS"] as  $arItem):
              $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
              $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            ?>
              <div class="performance__item animate-border" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="performance__item-header">
                  <? if ($arItem["PREVIEW_PICTURE"]): ?>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" width="36" height="36">
                  <? endif; ?>
                  <span class="subtitle"><?= $arItem["NAME"] ?></span>
                </div>

                <span class="text"><?= $arItem["PREVIEW_TEXT"] ?></span>
              </div>
            <? endforeach; ?>
          </div>
        </div>
      </div>

      <button class="main-btn align-center iconed">
        <span>Получить бесплатный аудит</span>
      </button>
    </div>
  </section>
<? endif; ?>