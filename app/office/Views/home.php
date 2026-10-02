<?php

use App\core\Assets;
use App\office\Helpers\OfficeLayouts as Layouts;

Layouts::renderComponent('main-hero', [
  "h1" => "Escritório de advocacia empresarial em <span class=\"second-color\">São Paulo</span>",
  "description" => "Advocacia <b>full service</b> para empresas e pessoas: consultoria, contencioso e planejamento jurídico em um só escritório."
]);

?>

<section class="intersection js--intersetion"></section>

<section class="section section--sobre section--down-faixa animate--to-top">
  <h2 class="titulo-2">Muito além da advocacia tradicional. Um parceiro jurídico estratégico</h2>
  <h3 class="titulo-3">Os fundamentos que sustentam nossa forma única de advogar</h3>
  <div class="container">
    <?php Layouts::renderManyUi('card-pilar', siteData("office", "pilares")) ?>
  </div>
  <?php Layouts::renderUi("button") ?>
</section>
<section class="section section--white section--centered-title animate--to-top section--especialidade">
  <h3 class="titulo-3">Nossas</h3>
  <h2 class="titulo-2">ÁREAS DE ESPECIALIDADE</h2>
  <p>Nosso escritório é <b>full service</b>, trabalhamos com uma visão 360º sobre as suas questões jurídicas, garantindo soluções completas, robustas e condizente com o cenário atual.</p>
  <a href="<?= Assets::base("areas-de-atuacao") ?>" class="button" aria-label="Acesse nossa página Áreas de Atuação">Confira Áreas de Atuação</a>
</section>