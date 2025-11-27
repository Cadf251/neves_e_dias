<?php

use App\data\SiteData;
use App\helpers\HTMLHelpers;

$main = [
  "h1" => "Nossas Áreas de Especialização",
  "descricao" => "Nosso escritório é <b>full service</b>, trabalhamos com uma visão 360º sobre as suas questões jurídicas, garantindo soluções completas, robustas e condizente com o cenário atual.",
  "down" => true
];
require APP_ROOT."/templates/partials/main-hero.php";
?>
<section class="section section--centered-title section--img">
  <h2 class="titulo-2">ÁREAS DE ATUAÇÃO</h2>
  <?php
  $areasAtuacao = SiteData::$areas;
  echo HTMLHelpers::renderCardContainerAreas($areasAtuacao);
  ?>
</section>