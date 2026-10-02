<?php

use App\office\Helpers\OfficeAssets as Assets;
use App\office\Helpers\OfficeLayouts as Layouts;

?>
<main class="main main--hero animate--to-right<?= (isset($down)) && ($down) ? " section--down-faixa" : "" ?> js--main">
  <div class="main__content">
    <h1 class="titulo-1"><?= $h1 ?></h1>
    <p class="main__descricao">
      <?= $description ?? "" ?>
    </p>
    <?php Layouts::renderUi("button") ?>
  </div>
  <div class="main__items">
    <img class="main__img main__img--1" src="<?= Assets::img("reuniao-escritorio") ?>" alt="Forum">
    <img class="main__img main__img--2" src="<?= Assets::img("forum") ?>" alt="Forum">
  </div>
</main>