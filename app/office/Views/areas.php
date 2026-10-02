<?php

use App\office\Helpers\OfficeLayouts as Layouts;

Layouts::renderComponent('main-hero', [
  "h1" => "Nossas Áreas de Especialização",
  "description" => "Nosso escritório é <b>full service</b>, trabalhamos com uma visão 360º sobre as suas questões jurídicas, garantindo soluções completas, robustas e condizente com o cenário atual.",
  "down" => true
]); ?>

<section class="section section--centered-title section--img">
  <h2 class="titulo-2">ÁREAS DE ATUAÇÃO</h2>
  <div class="container container--areas">
    <?php foreach (siteData("office", "areas") as $area) {
      Layouts::renderUi('card-area', ['area' => $area]);
    } ?>
  </div>
</section>