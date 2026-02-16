<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? if ($arResult): ?>
  <div class="base-card <?= $arParams["ANIMATE_BORDER"] === "Y" ? 'animate-border' : '' ?>">
    <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" width="290" height="160">
    <span class="subtitle"><?= $arResult["NAME"] ?></span>
    <span class="text"><?= $arResult["PREVIEW_TEXT"] ?></span>

    <? if ($arResult["DETAIL_PAGE_URL"]): ?>
      <a class="main-link iconed base-card__detail-link" href="<?= $arResult["DETAIL_PAGE_URL"] ?>">Подробнее</a>
    <? endif; ?>
  </div>
<? endif; ?>