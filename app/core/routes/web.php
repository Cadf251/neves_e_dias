<?php

use App\core\Controller;
use App\office\Controllers\OfficeController;
use App\victordias\Controllers\VictorDiasController;
use Cadud\Helpers\Core\Router;

Router::get("/", fn() => OfficeController::home());
Router::get("/areas-de-atuacao", fn() => OfficeController::areas());
Router::get("/endereco-e-contato", fn() => OfficeController::contato());
Router::get("/socios-e-advogados", fn() => OfficeController::socios());
Router::get("/trabalhe-conosco", fn() => OfficeController::trabalhe());

Router::get("/victordias", fn() => VictorDiasController::home());

Router::post('/lead', fn() => Controller::lead());