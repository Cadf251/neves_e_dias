<?php

namespace App\data;

/**
 * Um pequeno "banco de dados interno" para geração reaproveitamento de conteúdo no site
 */
class SiteData
{
  public static array $pilares = [
    [
      "title" => "Excelência Técnica",
      "descricao" => "Atuação precisa, fundamentada e confiável, conduzida por uma equipe experiente e altamente qualificada. Cada caso é tratado com rigor jurídico e dedicação total à segurança do cliente."
    ], [
      "title" => "Visão",
      "descricao" => "Unimos diferentes áreas do Direito para enxergar cada demanda com profundidade e amplitude. Essa abordagem 360º garante soluções completas, coerentes e mais eficazes."
    ], [
      "title" => "Inovação Estratégica",
      "descricao" => "Aliamos tecnologia, eficiência e pensamento estratégico para antecipar riscos, criar soluções inteligentes e gerar vantagem real para nossos clientes."
    ], 
  ];

  public static array $areas = [
    "Resolução de Disputas & Litígios",
    "Tributário & Aduaneiro",
    "Direito do Consumidor & Product Liability",
    "Recuperação de Ativos",
    "Insolvência & Reestruturação",
    "Comercial e Empresarial",
    "Bancário e Financeiro",
    "Mercado de Capitais",
    "Imobiliário",
    "Fusões & Aquisições",
    "Penal Empresarial",
    "Ambiental"
  ];

  public static array $advogados = [
    [
      "nome" => "Paulo",
      "sobrenome" => "Neves",
      "funcao" => "CEO e Sócio Fundador",
      "descricao" => "À frente do escritório, Paulo Neves é o CEO e Sócio Fundador da banca, conduzindo com excelência um modelo de advocacia full service voltado à alta performance e à entrega de soluções jurídicas sofisticadas e estratégicas. Advogado com ampla experiência e reconhecida competência técnica, é Especialista em Direito Empresarial e Imobiliário, e atua de forma direta e decisiva na gestão do escritório e nos casos mais complexos sob nossa responsabilidade. Lidera as práticas de Direito Penal Empresarial e Fraudes, Ambiental, Bancário e Financeiro, Comercial, Mercado de Capitais, bem como as áreas Tributária e Aduaneira. Sua atuação combina visão empresarial, rigor técnico e foco absoluto na geração de valor para empresas e clientes de todos os portes.",
      "foto" => "paulo"
    ], [
      "nome" => "Victor",
      "sobrenome" => "Dias",
      "funcao" => "CMO e Sócio responsável pela área de Direito Imobiliário",
      "descricao" => "Responsável pela condução estratégica da área de Direito Imobiliário do escritório, atua com excelência na estruturação de soluções jurídicas completas, seguras e personalizadas. Possui sólida experiência em negociações complexas, elaboração e revisão de contratos, regularização fundiária e resolução de disputas imobiliárias. Especialista em Direito Imobiliário e Tributário. Seu trabalho é pautado pela transparência, eficiência e absoluto comprometimento com os objetivos dos clientes, contribuindo diretamente para a entrega de resultados consistentes e sustentáveis.",
      "foto" => "victor"
    ], [
      "nome" => "Michelly",
      "sobrenome" => "Queiroz",
      "funcao" => "Responsável pelas áreas de Direito do Trabalho, e Compliance Trabalhista",
      "descricao" => "Com quase uma década de experiência na advocacia, atua com excelência na condução de casos estratégicos, tanto na esfera consultiva quanto contenciosa, assessorando pessoas e empresas em demandas complexas e sensíveis. Especialista em Direito do Trabalho, combina conhecimento técnico, visão estratégica e forte capacidade de negociação, estruturação de compliance, auditorias, mediações sindicais, reestruturações organizacionais e defesa em litígios relevantes. Atuação é pautada pela prevenção de riscos, redução de passivos e entrega de soluções eficazes.",
      "foto" => "michelly"
    ]
  ];
}
