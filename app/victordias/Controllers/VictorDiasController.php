<?php

namespace App\victordias\Controllers;

use App\core\Controller;
use App\victordias\Helpers\VictorDiasLayouts;
use Cadud\Helpers\Html\LoadLayout;

class VictorDiasController extends Controller
{
  private static function layout(string $layout = "main")
  {
    return VictorDiasLayouts::getLayoutPath($layout);
  }

  public static function home()
  {
    self::view(self::layout(), self::arrayTemplate(
      "home",
      "Vícios de Obra | Victor Dias"
    ));
  }
}