<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult): ?>
  <div class="base-card<?= $arParams["BASE_CARD_ANIMATE_BORDER"] === "Y" ? ' --animate-border' : '' ?><?= $arParams["BASE_CARD_FILLED_BG"] === "Y" ? ' --filled-bg' : '' ?>">
    <? if ($arResult["PREVIEW_PICTURE"]["SRC"]): ?>
      <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" width="290" height="160">
    <? elseif ($arParams["BASE_CARD_PICTURE_USE_DEFAULT"] === "Y"):
      $APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . '/include/no-image.php',
        array(),
        array('MODE' => 'html', 'NAME' => 'изображение-заглушку', 'SHOW_BORDER' => true)
      );
    ?>
    <? endif; ?>

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