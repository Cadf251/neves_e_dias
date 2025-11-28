<?php

namespace App\helpers;

/**
 * Generate canonical HTML components
 */
class HTMLHelpers
{

  public static function renderButton(): string
  {
    return <<<HTML
    <button class="button">
      Entre em Contato
    </button>
    HTML;
  }

  private static function renderContainer(string $content, string $class = ""):string {
    return <<<HTML
    <div class="container $class">
      $content
    </div>
    HTML;
  }

  public static function renderCardContainerPilar(array $pilares): string
  {
    $content = "";
    foreach ($pilares as $pilar){
      $content .= <<<HTML
      <div class="card-pilar animate--to-top">
        <strong class="card-pilar__title">+ {$pilar['title']}</strong>
        <p class="card-pilar__descricao">{$pilar['descricao']}</p>
      </div>
      HTML;
    }
    return self::renderContainer($content);
  }

  public static function renderCardContainerAreas(array $areas):string {
    $content = "";
    foreach($areas as $area){
      $content .= <<<HTML
      <div class="card-main animate--scale card-main--areas">
        <strong>$area</strong>
      </div>
      HTML;
    }

    return self::renderContainer($content, "container--areas");
  }

  public static function renderCardAdvogados(array $advogados):string {
    $content = "";
    foreach($advogados as $advogado){
      extract($advogado);
      $content .= <<<HTML
      <div class="card-main card-main--advogados">
        <img src="{$_ENV['HOST_BASE']}public/img/{$foto}.webp" alt="Foto Advogado {$nome}">
        <strong class="card-main--advogados__nome">$nome <span class="second-color">$sobrenome</span></strong>
        <div class="card-main--advogados__content">
          <strong>$funcao</strong>
          <p>$descricao</p>
        </div>
      </div>
      HTML;
    }

    return self::renderContainer($content, "container--advogados");
  }

  public static function blogCard(array $articles):string {
    $content = "";
    foreach ($articles as $article) {
      $content .= <<<HTML
      <div class="postagem animate--to-right">
        <div class="postagem__info" style="--img: url('{$_ENV['HOST_BASE']}{$article['capa']}')">
          <h2 class="titulo-2 titulo--bege">{$article['title']}</h2>
          <b>Escrito em {$article['data_postagem']} por {$article['autor']}</b>
          <p>{$article['descricao']}</p>
          <a href="" class="button">Ler artigo completo</a>
        </div>
        <div class="postagem__capa">
          <img src="{$_ENV['HOST_BASE']}{$article['capa']}" alt="Capa da postagem {$article['title']}">
        </div>
      </div>
      HTML;
    }
    return $content;
  }
}
