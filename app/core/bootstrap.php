<?php

use Cadud\Helpers\Support\GenerateLog;

define("APP_ROOT", str_replace('\\', '/', realpath(__DIR__ . "/../../")));
define("VICTOR_TEMPLATES", APP_ROOT."/victordias/templates");

require APP_ROOT . "/vendor/autoload.php";

// Instancia as variáveis de ambiente
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(APP_ROOT);
$dotenv->load();

session_start();
ob_start();
ini_set("display_errors", 1);

// Logger Config
GenerateLog::config(APP_ROOT . "/logs");
GenerateLog::observe();

// Paths
$_ENV['HOST_BASE'] = $_ENV["LOCALHOST"];

// Data renderer
function siteData(string $module, string $file): array {
  $include = include APP_ROOT."/app/$module/data/$file.php";

  if (is_array($include)) return $include;
  else return [];
}

// Link Renderes
function publicImg(string $file, string $type = "webp"):string {
  return $_ENV["HOST_BASE"] . "public/img/" . $file . "." . $type;
}

function victorPublicImg(string $file, string $type = "webp"):string {
  return publicImg("victordias/$file", $type);
}