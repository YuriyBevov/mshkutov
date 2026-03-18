<div class="section__header">
  <? if ($arParams["SHOW_SLIDER_NAVIGATION_BLOCK"] === "Y"): ?>
    <div class="grid">
      <div class="grid__item">
        <h2 class="section__header-title"><?= $arParams["TITLE"] ?></h2>
        <? if ($arParams["DESCRIPTION"] !== ""): ?>
          <span class="text"><?= $arParams["DESCRIPTION"] ?></span>
        <? endif; ?>
      </div>
      <div class="grid__item">
        <div class="swiper-navigation-container">
          <div class="swiper-btn swiper-btn-prev" aria-label="Предыдущий слайд">
            <svg width='16' height='16' role='img' aria-hidden='true' focusable='false'>
              <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#slider-arrow'></use>
            </svg>
          </div>
          <div class="swiper-btn swiper-btn-next" aria-label="Следующий слайд">
            <svg width='16' height='16' role='img' aria-hidden='true' focusable='false'>
              <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#slider-arrow'></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  <? else: ?>
    <h2 class="section__header-title"><?= $arParams["TITLE"] ?></h2>
    <? if ($arParams["DESCRIPTION"] !== ""): ?>
      <span class="text"><?= $arParams["DESCRIPTION"] ?></span>
    <? endif; ?>
  <? endif; ?>
</div>