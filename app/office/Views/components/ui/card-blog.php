<?php

use App\office\Helpers\OfficeAssets as Assets;

$modifiers = "";
if (!empty($reverse)) $modifiers .= " postagem--reverse";
if (!empty($destaque)) $modifiers .= " postagem--destaque";

?>
<div class="postagem<?= $modifiers ?> animate--to-right">
  <div class="postagem__info" style="--img: url('<?= Assets::img($capa) ?>')">
    <h2 class="titulo-2 titulo--bege"><?= $title ?></h2>
    <b>Escrito em <?= $data_postagem ?> por <?= $autor ?></b>
    <p><?= $descricao ?></p>
    <a href="" class="button" aria-label="Leia o artigo <?= $title ?>">Ler artigo completo</a>
  </div>
  <div class="postagem__capa">
    <img src="<?= Assets::img($capa) ?>" alt="Capa da postagem <?= $title ?>">
  </div>
</div>