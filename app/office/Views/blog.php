<main class="main main--blog section--down-faixa js--main">
  <div class="main__content animate--to-top">
    <h1 class="titulo-1">Insights e Estratégias para o Cenário Jurídico Atual</h1>
    <p class="main__descricao">Conteúdos produzidos com profundidade, clareza e visão estratégica — conectando diferentes áreas do Direito para orientar empresas e pessoas na tomada de decisões mais seguras e eficientes.</p>
    <div class="blog-search">
      <input type="text" class="blog-search--input" placeholder="Pesquise algum conteúdo...">
      <div class="blog-sugestoes">
        <div class="blog-sugestoes__content">
          <p>Artigo 1</p>
          <p>Artigo 2</p>
          <p>Artigo 3</p>
          <p>Artigo 4</p>
        </div>
      </div>
      <i class="blog-search--icon fa-solid fa-magnifying-glass"></i>
    </div>
  </div>
</main>
<section class="section section--down-faixa section--postagens">
  <?php

    use App\office\Helpers\OfficeLayouts;

    // Alterna o lado da capa a cada postagem
    foreach (siteData('office', 'articles') as $i => $article) {
      OfficeLayouts::renderUi('card-blog', $article + ['reverse' => $i % 2 === 1]);
    }

  ?>
  <script>
    document.querySelectorAll('.postagem').forEach(post => {
      const capa = post.querySelector('.postagem__capa');
      const largura = capa.offsetWidth + 'px';
      post.style.setProperty('--capa-w', largura);
    });
  </script>
</section>