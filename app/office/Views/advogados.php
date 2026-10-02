<?php

use App\office\Helpers\OfficeLayouts;

?>
<main class="main animate--to-top section--down-faixa main--simple">
  <h1 class="titulo-1">Advogados <span class="second-color">&</span> sócios</h1>
  <p class="titulo-3">Equipe de advogados especialistas em Direito Empresarial, Imobiliário, Tributário e do Trabalho em São Paulo.</p>
</main>

<section class="section section--img">
  <div class="container container--advogados">
    <?php OfficeLayouts::renderManyUi('card-advogado', siteData("office", "advogados")) ?>
  </div>
</section>