<?php

use Cadud\Helpers\Html\LoadLayout;

require "../app/core/bootstrap.php";

$view = [
  "html" => "/templates/views/areas.php",
  "title" => "Áreas de Atuação | Neves & Dias"
];

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/main.php", $view);