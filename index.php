<?php

// Dias trabalhados aqui: 26/11/2025 - ?
// Tempo trabalhado aqui: 21h 30m

use Cadud\Helpers\Html\LoadLayout;

require "app/core/bootstrap.php";

$view = [
  "html" => "/templates/views/home.php",
  "title" => "Home | Neves & Dias"
];

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/main.php", $view);