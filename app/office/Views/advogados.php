<?php

use App\office\Helpers\OfficeLayouts;

?>
<main class="main animate--to-top section--down-faixa main--simple">
  <h2 class="titulo-1">SÓCIOS <span class="second-color">&</span> ADVOGADOS</h2>
  <h1 class="titulo-3">Profissionais com atuação estratégica, ética e foco total na solução jurídica mais segura para cada cliente.</h1>
</main>

<section class="section section--img">
  <div class="container container--advogados">
    <?php OfficeLayouts::renderManyUi('card-advogado', siteData("office", "advogados")) ?>
  </div>
</section>