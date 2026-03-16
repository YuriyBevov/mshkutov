<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

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
		<div class="reviews-preview__grid">

			<div class="reviews-preview__grid-item">
				<? if ($arResult["ITEMS"]): ?>
					<div class="swiper reviews-slider">
						<div class="swiper-wrapper">
							<? foreach ($arResult["ITEMS"] as $arItem):
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>
								<div class="swiper-slide">
									<? include($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/site_blocks/partials/review-card/review-card.php"); ?>
								</div>
							<? endforeach; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<? endif; ?>
			</div>
		</div>
	</div>
</section>

<div class="modal-overlay">
	<div class="modal main-modal review-modal" id="review-modal">
		<div class="modal-wrapper">
			<button class="modal-closer s" type="button" aria-label="Закрыть">
				<svg width="14" height="14">
					<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#icon-close"></use>
				</svg>
			</button>
			<div class="modal-content"><span class="modal-text"></span></div>
		</div>
	</div>
</div>