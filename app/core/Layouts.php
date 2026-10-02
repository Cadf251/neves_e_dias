<?php

namespace App\core;

abstract class Layouts
{
  protected static string $module = "";

  private static function render(string $something, array $data = [])
  {
    extract($data);
    if (is_file($something)) include $something;
  }

  public static function getViewsPath()
  {
    return APP_ROOT . "/app/" . static::$module . "/Views";
  }

  public static function getLayoutPath(string $name): string
  {
    return self::getViewsPath() . "/layouts/$name.php";
  }

  public static function renderComponent(string $name, array $data = [])
  {
    $file = self::getViewsPath() . "/components/$name.php";

    self::render($file, $data);
  }

  public static function renderUi(string $name, array $data = [])
  {
    self::renderComponent("ui/$name", $data);
  }

  public static function renderManyUi(string $name, array $items = [])
  {
    foreach ($items as $item) {
      self::renderUi($name, $item);
    }
  }

  public static function renderView(string $name, array $data = [])
  {
    $file = self::getViewsPath() . "/$name.php";

    self::render($file, $data);
  }

 
}