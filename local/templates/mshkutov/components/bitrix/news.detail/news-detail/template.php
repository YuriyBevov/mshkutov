<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="section">
	<div class="container">
		<div class="news-detail">
			<div class="news-detail__header">
				<h1><?= $arResult["NAME"] ?></h1>
				<? if ($arResult["DETAIL_PICTURE"]["SRC"]): ?>
					<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" width="780" height="520">
				<? endif; ?>
				<? if ($arResult["DISPLAY_ACTIVE_FROM"] || $arResult["PROPERTIES"]["READING_TIME"]["VALUE"]): ?>
					<div class="news-detail__header-note">
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
			</div>

			<div class="news-detail__content">
				<? if ($arResult["DETAIL_TEXT"]): ?>
					<?= $arResult["DETAIL_TEXT"] ?>
				<? endif; ?>
			</div>

			<? if ($arParams["SHOW_FORM_OPENER_BTN"] === "Y" && $arParams["FORM_ID"] !== ""): ?>
				<button class="main-btn iconed" data-form-id="<?= $arParams["FORM_ID"] ?>">
					<span><?= $arParams["SHOW_FORM_OPENER_TEXT"] ?></span>
				</button>
			<? endif; ?>
		</div>
	</div>
</section>