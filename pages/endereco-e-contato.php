<?php

use Cadud\Helpers\Html\LoadLayout;

require "../app/core/bootstrap.php";

$view = [
  "html" => "/templates/views/endereco-e-contato.php",
  "title" => "Endereço & Contato | Neves & Dias"
];

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/main.php", $view);