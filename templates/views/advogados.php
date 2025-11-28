<?php

use App\data\SiteData;
use App\helpers\HTMLHelpers;
?>
<main class="main animate--to-top main--simple section--down-faixa">
  <h1 class="titulo-1">SÓCIOS <span class="second-color">&</span> ADVOGADOS</h1>
</main>

<section class="section section--img">
  <?php

  $advogados = SiteData::$advogados;
  echo HTMLHelpers::renderCardAdvogados($advogados);
  ?>
</section>