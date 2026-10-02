<?php

namespace App\core;

use App\core\Services\LeadService;
use Cadud\Helpers\Html\LoadLayout;

abstract class Controller
{
  public static function view(string $layout, array $view = [])
  {
    LoadLayout::loadLayout($layout, $view);
  }

  protected static function arrayTemplate(
    string $viewName,
    string $title,
    string $description = ""
  )
  {
    return [
      "name" => $viewName,
      "head" => [
        "title" => $title,
        "description" => $description
      ]
    ];
  }

  public static function error(int $code)
  {
    http_response_code($code);
    
    $config = [
      404 => [
        "title" => "Página Não Encontrada",
        "description" => "Não foi possível acessar esta página"
      ]
    ];

    if ($code === 403) $code = 404;
    
    self::view("error", $config[$code] ?? []);

    exit;
  }

  public static function lead()
  {
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $service = new LeadService();
    $service->resolvePost($post);
  }
}