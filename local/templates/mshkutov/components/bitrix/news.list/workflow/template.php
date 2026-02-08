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
        <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
          <div class="workflow__item">
            <span class="outlined-number"><?= $index < 10 ? '0' . $index + 1 : $index + 1 ?></span>
            <span class="subtitle"><?= $arItem["NAME"] ?></span>
            <span class="text"><?= $arItem["PREVIEW_TEXT"] ?></span>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  </section>
<? endif; ?>