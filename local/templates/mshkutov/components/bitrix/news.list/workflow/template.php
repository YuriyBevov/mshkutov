<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult["ITEMS"]): ?>
  <section class="section">
    <div class="container">
      <?
      $APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . '/include/section-header.php',
        array(
          'TITLE' => $arResult["NAME"],
          'DESCRIPTION' => $arResult["DESCRIPTION"],
        ),
        array('MODE' => 'html', 'NAME' => 'шапку раздела', 'SHOW_BORDER' => false)
      );
      ?>
      <div class="workflow-container">
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
    </div>
  </section>
<? endif; ?>