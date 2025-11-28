<?php

use App\data\SiteData;
use App\helpers\HTMLHelpers;

$main = [
  "h1" => "Estratégia Jurídica Integrada para Segurança e Vantagem Real.",
  "descricao" => "Atuamos como parceiros estratégicos dos nossos clientes — unindo experiência, inovação e visão multidisciplinar para transformar desafios em soluções concretas."
];

require APP_ROOT."/templates/partials/main-hero.php";
?>
<section class="intersection js--intersetion"></section>
<section class="section section--sobre animate--to-top">
  <h2 class="titulo-2">Muito além da advocacia tradicional. Um parceiro jurídico estratégico</h2>
  <h3 class="titulo-3">Atuação moderna, proativa e orientada a resultados.</h3>
  <p>Unimos a expertise em diversas áreas do Direito para oferecer uma perspectiva estratégica. Nosso compromisso é antecipar necessidades, propor soluções eficientes e construir caminhos jurídicos sólidos, com apoio de tecnologia e soluções modernas, como inteligência artificial.</p>
  <?php
  echo HTMLHelpers::renderButton();
  ?>
</section>
<section class="section section--pilares section--down-faixa section--centered-title">
  <h2 class="titulo-2">NOSSOS PILARES</h2>
  <h3 class="titulo-3">Os fundamentos que sustentam nossa forma única de advogar.</h3>
  <?php
  $pilares = SiteData::$pilares;
  echo HTMLHelpers::renderCardContainerPilar($pilares);
  ?>
</section>
<section class="section section--white section--centered-title animate--to-top section--especialidade">
  <h3 class="titulo-3">Nossas</h3>
  <h2 class="titulo-2">ÁREAS DE ESPECIALIDADE</h2>
  <p>Nosso escritório é <b>full service</b>, trabalhamos com uma visão 360º sobre as suas questões jurídicas, garantindo soluções completas, robustas e condizente com o cenário atual.</p>
  <a href="<?php echo $_ENV['HOST_BASE']?>areas-de-atuacao" class="button">Veja mais</a>
</section>