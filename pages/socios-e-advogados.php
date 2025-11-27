<?php

use Cadud\Helpers\Html\LoadLayout;

require "../app/core/bootstrap.php";

$view = [
  "html" => "/templates/views/advogados.php",
  "title" => "Sócios & Advogados | Neves & Dias"
];

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/main.php", $view);