<?php

// Dias trabalhados aqui: 26/11/2025 - ?
// Tempo trabalhado aqui: 21h 30m

use App\core\Controller;
use App\office\Controllers\OfficeController;
use App\victordias\Controllers\VictorDiasController;
use Cadud\Helpers\Core\Router;

require "app/core/bootstrap.php";

if (isset($_GET["error"])) {
  if (in_array($_GET["error"], [
    403, 404, 500
  ])) {
    Controller::error($_GET["error"]);
  } else {
    Controller::error(403);
  }
}

// Routes
require APP_ROOT . "/app/core/routes/web.php";

$run = Router::run($_GET["url"] ?? "/");
