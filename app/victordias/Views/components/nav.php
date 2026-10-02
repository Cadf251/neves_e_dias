<?php

use App\office\Helpers\OfficeAssets;

?>
<nav class="nav js--nav">
  <div class="nav__empresa">
    <img src="<?= OfficeAssets::img("logo") ?>" alt="Logotipo Neves & Dias">
    <div class="text-container">
      <strong>Advogado de Botina</strong>
      <p>Neves & Dias Advogados</p>
    </div>
  </div>
  <div class="nav__menu js--nav-menu">
    <a href="#sobre">Sobre</a>
    <a href="#servicos">Serviços</a>
    <a href="#casos">Casos</a>
    <a href="#contato">Contato</a>
  </div>
</nav>