<?php

require "../app/core/bootstrap.php";

http_response_code($code);

$title = "Erro $code";

$html = <<<HTML
<main class="main main--erro">
  <div class="main__content">
    <img src="{$_ENV['HOST_BASE']}public/img/logo.webp" alt="Logotipo Paulo & Neves Advogados Associados">
    <h1 class="titulo-1">$title</h1>
    <p>$description</p>
    <a href="{$_ENV['HOST_BASE']}" class="button">Voltar para o site</a>
  </div>
</main>
HTML;

$view = [
  "title" => $title,
  "html" => $html
];

require APP_ROOT."/templates/layouts/erro.php";