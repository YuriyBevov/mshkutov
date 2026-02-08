<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult["ITEMS"]): ?>
  <section class="section bg-sphere">
    <div class="container">
      <div class="section__header">
        <div class="section__header-wrapper">
          <h2 class="section__title"><?= $arResult["NAME"] ?></h2>
        </div>

        <? if ($arResult["DESCRIPTION"]): ?>
          <p class="section__desc"><?= $arResult["DESCRIPTION"] ?></p>
        <? endif; ?>
      </div>

      <div class="areas">
        <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
          <div class="areas__item animate-border">
            <span class="subtitle"><?= $arItem["NAME"] ?></span>
            <span class="areas__item-text"><?= $arItem["PREVIEW_TEXT"] ?></span>
          </div>
        <? endforeach; ?>
      </div>


    </div>
  </section>
<? endif; ?>