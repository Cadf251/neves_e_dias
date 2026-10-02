<?php

namespace App\core;

abstract class Assets
{
  protected static string $module = "";

  public static function base($to = ""): string
  {
    return $_ENV["HOST_BASE"] . $to;
  }

  public static function version(): string
  {
    return (string)"?v=" . rand(1, 1000);
  }

  public static function assets(): string
  {
    return self::base("public");
  }

  public static function module()
  {
    return self::assets() . "/" . static::$module;
  }

  public static function img(string $name, string $type = 'webp')
  {
    return self::module() . "/img/$name.$type";
  }

  public static function css()
  {
    return self::module() . "/css/main.min.css" . self::version();
  }

  public static function js()
  {
    return self::module() . "/js/main.min.js" . self::version();
  }

  public static function jquery($file = "jquery-3.7.1.min.js")
  {
    return self::assets() . "/shared/jquery/$file";
  }

  public static function svg(string $id)
  {
    return self::assets() . "/shared/img/icons.svg#" . static::$module . "--img--icons--$id";
  }

  public static function renderSvg(string $id)
  {
    $link = self::svg($id);

    return <<<HTML
    <svg>
      <use xlink:href="$link"></use>
    </svg>
    HTML;
  }
}