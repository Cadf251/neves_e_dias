<?php

use Cadud\Helpers\Html\LoadLayout;

require "../app/core/bootstrap.php";

$view = [
  "html" => "/templates/views/trabalhe-conosco.php",
  "title" => "Trabalhe Conosco | Neves & Dias"
];

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/main.php", $view);