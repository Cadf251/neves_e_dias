<?php

use App\office\Helpers\OfficeLayouts as Layouts;

Layouts::renderComponent('main-hero', [
  "h1" => "Áreas de atuação em Direito Empresarial <span class=\"second-color\">e</span> Tributário",
  "description" => "Contencioso, tributário, imobiliário, fusões e aquisições, penal empresarial e mais: atendimento jurídico completo para empresas e pessoas em São Paulo.",
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