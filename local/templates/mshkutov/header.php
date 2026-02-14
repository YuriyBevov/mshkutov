<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico" />

  <? $APPLICATION->ShowHead(); ?>
  <title><? $APPLICATION->ShowTitle() ?></title>
  <?/* $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/vendors/swiper/styles.css", true); */ ?>
  <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/template_scripts.js"); ?>
  <?
  // подключаю для работы попапов на сайте
  \CJSCore::Init(['popup']);
  ?>
</head>

<body>
  <? $APPLICATION->ShowPanel() ?>
  <? if ($USER->isAdmin()): ?>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="worktime">
            <svg width='24' height='24' role='img' aria-hidden='true' focusable='false'>
              <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#clock'></use>
            </svg>
            <span><strong>Рабочие часы:</strong> Понедельник–пятница, 10:00–18:00</span>
          </div>

          <div class="contacts">
            <a href="mailto:email@mail.ru">email@mail.ru</a>
            <a href="tel:+70000000000">+7 (000) 000-00-00</a>
          </div>

          <div class="social">
            social
          </div>

        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
          <a href="/" class="logo">
            <img src="<?= SITE_TEMPLATE_PATH ?>/public/logo.svg" alt="Шкутов Михаил - Разработка IT-решений" width="146" height="55">
          </a>

          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "row-menu",
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "left",
              "DELAY" => "N",
              "MAX_LEVEL" => "1",
              "MENU_CACHE_GET_VARS" => array(),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "MENU_THEME" => "site",
              "ROOT_MENU_TYPE" => "top",
              "USE_EXT" => "Y",
              "COMPONENT_TEMPLATE" => "row-menu"
            ),
            false
          ); ?>

          <button type="button" class="burger-btn">
            <svg width='24' height='24' role='img' aria-hidden='true' focusable='false'>
              <use xlink:href='<?= SITE_TEMPLATE_PATH ?>/assets/sprite.svg#icon-burger'></use>
            </svg>
          </button>
        </div>
      </div>
    </header>
  <? endif; ?>
  <main class="workarea">