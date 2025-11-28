<?php

define("APP_ROOT", str_replace('\\', '/', realpath(__DIR__ . "/../../")));

require APP_ROOT."/vendor/autoload.php";

// Instancia as variáveis de ambiente
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(APP_ROOT);
$dotenv->load();

session_start();
ob_start();
ini_set("display_errors", 0);

$utm_params = [
  'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', "palavra", "gclid", "fbclid"
];

foreach ($utm_params as $utm) {
  if (isset($_GET[$utm]) && empty($_SESSION["utm"][$utm])) {
    $_SESSION["utm"][$utm] = $_GET[$utm];
  }
}

if ($_SERVER["HTTP_HOST"] === "neves-e-dias.local"){
  $_ENV["HOST_BASE"] = $_ENV["LOCALHOST"];
}