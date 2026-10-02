<?php

namespace App\victordias\data;

use App\victordias\Helpers\VictorDiasAssets;

/**
 * Um pequeno "banco de dados interno" para geração reaproveitamento de conteúdo no site
 */
class SiteData
{
  public static function getSvg(string $id):string {
    return VictorDiasAssets::renderSvg($id);
  }

  private static array $services = [
    [
      "file",
      "Diagnóstico Técnico-Jurídico",
      "Análise detalhada do seu caso, com parecer sobre a viabilidade jurídica e técnica."
    ], [
      "balanca",
      "Ação de Responsabilidade Civil",
      "Representação judicial contra construtoras e incorporadoras para reparação de danos."
    ], [
      "handshake",
      "Negociação Extrajudicial",
      "Busca por acordos e soluções amigáveis para evitar litígios prolongados."
    ], [
      "calc",
      "Medição de Danos e Perdas",
      "Avaliação precisa dos prejuízos materiais e morais decorrentes dos vícios."
    ], [
      "escudo",
      "Defesa em Ações Revisionais",
      "Atuação em casos onde a construtora tenta se eximir da responsabilidade."
    ], [
      "building",
      "Regularização de Obras com Vícios",
      "Orientação e ação para regularizar imóveis afetados por falhas construtivas."
    ]
  ];

  public static function getServices(): string
  {
    $final = "";
    foreach (self::$services as $service) {
      $svg = self::getSvg($service[0]);
      $final .= <<<HTML
      <div class="card card--diferencial">
        <div class="svg-container">
          {$svg}
        </div>
        <strong>$service[1]</strong>
        <p>$service[2]</p>
      </div>
      HTML;
    }
    return $final;
  }

  private static array $casos = [
    [
      "R$ 280.000",
      "Recuperei para cliente com infiltração estrutural que comprometia a segurança do imóvel."
    ], [
      "18 meses",
      "Resolvi atraso na entrega de obra residencial, garantindo indenização por lucros cessantes e danos morais."
    ], [
      "Condomínio de luxo",
      "Indenização por vícios em condomínio de luxo, cobrindo custos de reparo e desvalorização dos imóveis."
    ], [
      "Interdição evitada",
      "Regularização de obra com problemas hidráulicos graves, evitando interdição e garantindo a habitabilidade."
    ]
  ];

  public static function getCasos(): string
  {
    $final = "";
    foreach (self::$casos as $caso) {
      $svg = self::getSvg("up-line");
      $final .= <<<HTML
      <div class="caso">
        <strong>{$svg} {$caso[0]}</strong>
        <p>{$caso[1]}</p>
      </div>
      HTML;
    }
    return $final;
  }

  private static array $firmaCards = [
    [
      "medalha",
      "Credibilidade e Estrutura",
      "Um escritório tradicional com anos de experiência e reconhecimento no mercado jurídico."
    ], [
      "team",
      "Equipe Multidisciplinar",
      "Contamos com uma equipe de advogados especializados em diversas áreas do direito, garantindo um suporte completo para seu caso."
    ], [
      "support",
      "Atendimento Personalizado",
      "Cada cliente é único, e por isso oferecemos um atendimento focado em suas necessidades específicas, com transparência e dedicação."
    ]
  ];

  public static function getFirmaCards(): string
  {
    $final = "";
    foreach( self::$firmaCards as $card) {
      $svg = self::getSvg($card[0]);
      $final .= <<<HTML
      <div class="firma-card">
        <div class="svg-container">
          $svg
        </div>
        <strong>{$card[1]}</strong>
        <p>{$card[2]}</p>
      </div>
      HTML;
    }
    return $final;
  }

  private static array $perguntas = [
    "O que são vícios de obra?" => "São falhas ou defeitos na construção de um imóvel que o tornam impróprio para uso ou diminuem o seu valor. Podem ser aparentes (fáceis de ver) ou ocultos (só aparecem com o tempo).",
    "Qual o prazo para reclamar de vícios de obra?" => "O prazo varia conforme o tipo de vício. Para vícios aparentes, o prazo é de 90 dias a partir da entrega do imóvel. Para vícios ocultos, o prazo é de 1 ano a partir da descoberta do defeito, mas a construtora tem responsabilidade de 5 anos pela solidez e segurança da obra.",
    "Preciso de um laudo técnico para entrar com uma ação?" => "Um laudo técnico é fundamental para comprovar a existência e a origem dos vícios, além de quantificar os danos. Podemos auxiliar na contratação de peritos qualificados.",
    "A construtora pode se recusar a reparar os vícios?" => "Sim, e é comum que isso aconteça. Nesses casos, a via judicial se torna necessária para garantir seus direitos.",
    "Quanto custa um processo por vícios de obra?" => "Os custos variam conforme a complexidade do caso. Oferecemos uma consultoria inicial gratuita para analisar seu caso e apresentar as opções e estimativas de custos."
  ];

  public static function getFaqQuestions(): string
  {
    $final = "";
    foreach (self::$perguntas as $pergunta => $resposta) {
      $final .= <<<HTML
      <div class="question" data-question-active=false>
        <strong class='title'>$pergunta</strong>
        <div class='answer'>$resposta</div>
      </div>
      HTML;
    }
    return $final;
  }
}
?>
