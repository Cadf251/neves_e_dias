<?php

use App\office\Helpers\OfficeAssets;

?>
<div class="card-main card-main--advogados">
  <img src="<?= OfficeAssets::img($foto) ?>" alt="Foto Advogado <?= $nome ?>">
  <strong class="card-main--advogados__nome"><?= $nome ?> <span class="second-color"><?= $sobrenome ?></span></strong>
  <div class="card-main--advogados__content">
    <strong><?= $funcao ?></strong>
    <p><?= $descricao ?></p>
  </div>
</div>
