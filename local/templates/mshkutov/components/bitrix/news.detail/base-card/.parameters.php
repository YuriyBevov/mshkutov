<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arTemplateParameters = array(
  "BASE_CARD_ANIMATE_BORDER" => array(
    "NAME" => "Включить анимацию рамки",
    "TYPE" => "CHECKBOX",
    "DEFAULT" => "N",
    "PARENT" => "VISUAL",
    "SORT" => 100,
  ),
  "BASE_CARD_FILLED_BG" => array(
    "NAME" => "Использовать градиентную заливку карточки",
    "TYPE" => "CHECKBOX",
    "DEFAULT" => "N",
    "PARENT" => "VISUAL",
    "SORT" => 200,
  ),
  "BASE_CARD_PICTURE_USE_DEFAULT" => array(
    "NAME" => "Использовать изображение-заглушку в карточке, если не загружена картинка для анонса",
    "TYPE" => "CHECKBOX",
    "DEFAULT" => "N",
    "PARENT" => "VISUAL",
    "SORT" => 300,
  ),
);
