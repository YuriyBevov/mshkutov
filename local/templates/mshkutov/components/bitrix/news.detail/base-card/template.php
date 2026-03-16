<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult): ?>
  <div class="base-card<?= $arParams["ANIMATE_BORDER"] === "Y" ? ' animate-border' : '' ?><?= $arParams["FILLED_BG"] === "Y" ? ' --filled-bg' : '' ?>">
    <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" width="290" height="160">

    <? if ($arResult["DISPLAY_ACTIVE_FROM"] || $arResult["PROPERTIES"]["READING_TIME"]["VALUE"]): ?>
      <div class="base-card__note">
        <? if ($arResult["DISPLAY_ACTIVE_FROM"]): ?>
          <small><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></small>
        <? endif; ?>
        <? if ($arResult["PROPERTIES"]["READING_TIME"]["VALUE"]): ?>
          <small>
            <svg width='24' height='24' role='img' aria-hidden='true' focusable='false'>
              <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#icon-clock'></use>
            </svg>
            Время прочтения <?= $arResult["PROPERTIES"]["READING_TIME"]["VALUE"] ?>
          </small>
        <? endif; ?>
      </div>
    <? endif; ?>

    <span class="subtitle"><?= $arResult["NAME"] ?></span>
    <span class="text"><?= $arResult["PREVIEW_TEXT"] ?></span>

    <? if ($arResult["DETAIL_PAGE_URL"]): ?>
      <a class="main-link iconed base-card__detail-link" href="<?= $arResult["DETAIL_PAGE_URL"] ?>">Подробнее</a>
    <? endif; ?>
  </div>
<? endif; ?>