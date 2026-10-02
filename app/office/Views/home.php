<?php

use App\core\Assets;
use App\office\Helpers\OfficeLayouts as Layouts;

Layouts::renderComponent('main-hero', [
  "h1" => "Estratégia Jurídica Integrada para Segurança e Vantagem Real.",
  "description" => "Atuamos como parceiros estratégicos dos nossos clientes — unindo experiência, inovação e visão multidisciplinar para transformar desafios em soluções concretas."
]);

?>

<section class="intersection js--intersetion"></section>

<section class="section section--sobre animate--to-top">
  <h2 class="titulo-2">Muito além da advocacia tradicional. Um parceiro jurídico estratégico</h2>
  <h3 class="titulo-3">Atuação moderna, proativa e orientada a resultados.</h3>
  <p>Unimos a expertise em diversas áreas do Direito para oferecer uma perspectiva estratégica. Nosso compromisso é antecipar necessidades, propor soluções eficientes e construir caminhos jurídicos sólidos, com apoio de tecnologia e soluções modernas, como inteligência artificial.</p>
  <?php Layouts::renderUi("button") ?>
</section>
<section class="section section--pilares section--down-faixa section--centered-title">
  <h2 class="titulo-2">NOSSOS PILARES</h2>
  <h3 class="titulo-3">Os fundamentos que sustentam nossa forma única de advogar.</h3>
  <div class="container">
    <?php Layouts::renderManyUi('card-pilar', siteData("office", "pilares")) ?>
  </div>
</section>
<section class="section section--white section--centered-title animate--to-top section--especialidade">
  <h3 class="titulo-3">Nossas</h3>
  <h2 class="titulo-2">ÁREAS DE ESPECIALIDADE</h2>
  <p>Nosso escritório é <b>full service</b>, trabalhamos com uma visão 360º sobre as suas questões jurídicas, garantindo soluções completas, robustas e condizente com o cenário atual.</p>
  <a href="<?= Assets::base("areas-de-atuacao") ?>" class="button" aria-label="Acesse nossa página Áreas de Atuação">Confira Áreas de Atuação</a>
</section>