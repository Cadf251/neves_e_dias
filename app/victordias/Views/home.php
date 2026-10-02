<?php

use App\office\Helpers\OfficeAssets;
use App\victordias\data\SiteData;
use App\victordias\Helpers\VictorDiasAssets;
use App\victordias\Helpers\VictorDiasLayouts;

?>
<main class="main section-dark js--main">
  <div class="main__container">
    <div class="main__content animate--to-right">
      <div class="text-container">
        <h1 class="titulo titulo--1">
          <span class="destaque">Vícios de Obra:</span><br>Recupere Seu Investimento com o Advogado que Calça a Botina
        </h1>
        <p>Especialista em Direito Imobiliário | Sócio da Neves & Dias Advogados</p>
      </div>
      <button class="button js--form-btn">AGENDE UMA CONSULTORIA</button>
      <div class="main__cards">
        <?php foreach (siteData('victordias', 'main-cards') as $card) {
          VictorDiasLayouts::renderUi('main-card', ["card" => $card]);
        } ?>
      </div>
    </div>
  </div>
</main>
<section class="problemas" id="sobre">
  <div class="text-container">
    <h2 class="titulo titulo--2">Seu Imóvel Tem Problemas?</h2>
    <p>Não deixe que falhas na construção comprometam seu patrimônio e sua paz. Vícios de obra podem gerar grandes prejuízos e dores de cabeça.</p>
  </div>
  <div class="problemas__content">
    <strong>Problemas Comuns que Resolvemos:</strong>
    <div class="cards">
      <?= VictorDiasLayouts::renderManyUi('card-problema', siteData('victordias', 'cards-problema')) ?>
    </div>
  </div>
  <div class="text-container animate--opacity">
    <h3 class="titulo--3">Nossa solução:</h3>
    <p>Transformamos problemas em indenizações e reparos. Com a expertise do "Advogado de Botina", você tem a garantia de que seu caso será tratado com a seriedade e a profundidade que ele merece, buscando a reparação integral dos seus direitos.</p>
  </div>
</section>

<section class="diferenciais">
  <div class="text-container">
    <h2 class="titulo titulo--2">Por que o 'Advogado de Botina' é Diferente?</h2>
    <p>Minha abordagem vai além do tradicional. Para entender e resolver seu problema, eu calço a botina e vou a campo.</p>
  </div>
  <div class="diferenciais__content">
    <div class="left">
      <?php VictorDiasLayouts::renderManyUi('card-diferencial', siteData('victordias', 'cards-diferencial')) ?>
    </div>
    <div class="right">
      <img class="animate--scale" src="<?= VictorDiasAssets::img("bota-e-capacete") ?>" alt="Foto de obra">
    </div>
  </div>
</section>

<section class="services section-dark" id="servicos">
  <div class="text-container">
    <h2 class="titulo titulo--2">Serviços Especializados</h2>
    <p>Oferecemos uma gama completa de serviços para proteger seu investimento e garantir seus direitos contra vícios de obra.</p>
  </div>
  <div class="service__content animate--opacity">
    <?= SiteData::getServices() ?>
  </div>
</section>

<section class="casos" id="casos">
  <div class="text-container">
    <h3 class="titulo titulo--3">Casos de Sucesso</h3>
    <p>Veja alguns resultados que obtivemos para nossos clientes:</p>
  </div>
  <div class="casos__content animate--opacity">
    <?= SiteData::getCasos() ?>
  </div>
</section>

<section class="sobre">
  <div class="left">
    <img src="<?= VictorDiasAssets::img('victor-dias') ?>" alt="Victor Dias">
  </div>
  <div class="right">
    <h3 class="titulo titulo--3">Sobre Victor Dias</h3>
    <p>Victor Dias é um advogado com mais de uma década de experiência, especializado em Direito Imobiliário e Construção Civil. Sócio do renomado escritório Neves & Dias Advogados, ele é o criador do perfil <b>@advogado_de_botina</b>, onde compartilha seu conhecimento e sua paixão por soluções práticas.</p>
    <p>Com foco em vícios de obra e regularização imobiliária, Victor Dias se destaca por sua abordagem "pé no chão", indo além do escritório para entender a fundo os problemas de seus clientes e buscar as melhores estratégias para a recuperação de seus investimentos.</p>
    <p>Sua missão é transformar problemas complexos em soluções claras e eficazes.</p>
  </div>
</section>

<section class="firma section-dark">
  <div class="firma__content">
    <img class="animate--to-top" src="<?= OfficeAssets::img("logo") ?>" alt="Logo Neves & Dias Advogados">
    <h3 class="titulo titulo--2">Neves & Dias Advogados</h3>
    <p>A Neves & Dias Advogados é um escritório com sólida reputação, que oferece a estrutura e a credibilidade necessárias para casos de alta complexidade.</p>
  </div>
  <div class="firma__cards animate--to-bottom">
    <?= SiteData::getFirmaCards() ?>
  </div>
</section>

<section class="contato section-dark">
  <?php VictorDiasLayouts::renderComponent("form") ?>
</section>

<section class="faq section-dark">
  <h4 class="titulo titulo--2">Perguntas Frequentes</h4>
  <div class="faq__container">
    <?= SiteData::getFaqQuestions() ?>
  </div>
</section>