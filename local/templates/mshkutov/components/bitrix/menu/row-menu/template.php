<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

if ($arResult): ?>
  <nav class="row-menu">
    <ul>
      <? foreach ($arResult as $arItem): ?>
        <li>
          <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
        </li>
      <? endforeach; ?>
    </ul>
  </nav>
<? endif; ?>