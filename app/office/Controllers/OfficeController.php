<?php

namespace App\office\Controllers;

use App\core\Controller;
use App\office\Helpers\OfficeLayouts;

class OfficeController extends Controller
{
  private static function layout(string $layout = "main")
  {
    return OfficeLayouts::getLayoutPath($layout);
  }

  public static function home()
  {
    self::view(self::layout(), self::arrayTemplate(
      "home",
      "Escritório de Advocacia Full-Service em SP | Neves & Dias",
      "Escritório de advocacia especializado em soluções jurídicas estratégicas para empresas e pessoas físicas. Atendimento humanizado e foco em resultados."
    ));
  }
  
  public static function areas()
  {
    self::view(self::layout(), self::arrayTemplate(
      "areas",
      "Áreas de Atuação | Advocacia Completa para Sua Necessidade",
      "Atuamos em diversas áreas do Direito com estratégia, técnica e foco no resultado. Conheça nossos serviços jurídicos e como podemos te ajudar."
    ));
  }

  public static function contato()
  {
    self::view(self::layout(), self::arrayTemplate(
      "endereco-e-contato",
      "Endereço & Contato | Neves & Dias",
      ""
    ));
  }

  public static function socios()
  {
    self::view(self::layout(), self::arrayTemplate(
      "advogados",
      "Equipe de Advogados Especialistas | Neves & Dias Advocacia",
      "Conheça os advogados do escritório Neves & Dias. Profissionais especializados, éticos e comprometidos com soluções jurídicas estratégicas."
    ));
  }

  public static function trabalhe()
  {
    self::view(self::layout(), self::arrayTemplate(
      "trabalhe-conosco",
      "Trabalhe Conosco | Neves & Dias",
      ""
    ));
  }

  public static function blog()
  {
    self::view(self::layout(), self::arrayTemplate(
      "blog",
      "Blog | Neves & Dias",
      ""
    ));
  }
}
