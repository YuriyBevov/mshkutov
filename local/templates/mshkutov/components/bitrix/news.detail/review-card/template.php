<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult): ?>
  <div class="review-card --animate-border<?= $arParams["ANIMATE_BORDER"] === "Y" ? ' --animate-border' : '' ?>">
    <div class="review-card__rate">
      <? for ($i = 0; $i < 5; $i++): ?>
        <svg width='16' height='16' role='img' aria-hidden='true' focusable='false'>
          <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#icon-star'></use>
        </svg>
      <? endfor; ?>
    </div>

    <span class="text"><?= $arResult["PREVIEW_TEXT"] ?></span>

    <span class="subtitle"><?= $arResult["NAME"] ?></span>
    <? if ($arResult["DISPLAY_ACTIVE_FROM"]): ?>
      <div class="review-card__note">
        <small><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></small>
      </div>
    <? endif; ?>
  </div>
<? endif; ?>