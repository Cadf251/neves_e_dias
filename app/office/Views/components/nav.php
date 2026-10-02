<?php use App\office\Helpers\OfficeAssets as Assets; ?>
<nav class="nav js--nav">
  <div class="nav__logo">
    <img fetchpriority="high" src="<?= Assets::img("logo") ?>" width="1810px" height="372px" alt="Neves & Dias Logo">
  </div>
  <div class="nav__container">
    <i class="nav__bar js--nav-bar"></i>
    <div class="nav__content js--nav-content">
      <div class="nav__item">
        <div class="nav__item__label js--nav-btn">Sobre Nós <svg class="nav__chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1.5 1.75 6 6.25l4.5-4.5" /></svg></div>
        <div class="nav__item__down-content js--nav-list">
          <a class="nav__link js--nav-link" href="<?= Assets::base() ?>" aria-label="Acesse nossa página Home">Quem somos</a>
          <a class="nav__link js--nav-link" href="<?= Assets::base("areas-de-atuacao") ?>" aria-label="Acesse nossa página Áreas de atuação">Áreas de atuação</a>
          <a class="nav__link js--nav-link" href="<?= Assets::base("socios-e-advogados") ?>" aria-label="Acesse nossa página Advogados">Advogados</a>
        </div>
      </div>
      <div class="nav__item">
        <div class="nav__item__label js--nav-btn">Blog <svg class="nav__chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1.5 1.75 6 6.25l4.5-4.5" /></svg></div>
        <div class="nav__item__down-content js--nav-list">
          <a href="<?= Assets::base("blog") ?>" class="nav__link js--nav-link" aria-label="Acesse nosso blog">Acessar blog</a>
        </div>
      </div>
      <div class="nav__item">
        <div class="nav__item__label js--nav-btn nav__item__label--contato">Entre em Contato <svg class="nav__chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1.5 1.75 6 6.25l4.5-4.5" /></svg></div>
        <div class="nav__item__down-content js--nav-list">
          <a href="<?= Assets::base("endereco-e-contato") ?>" class="nav__link js--nav-link" aria-label="Acesse mais informações de contato">Endereço e Contato</a>
          <a href="<?= Assets::base("trabalhe-conosco") ?>" class="nav__link js--nav-link" aria-label="Acesse mais informações para trabalhar conosco">Trabalhe Conosco</a>
        </div>
      </div>
    </div>
  </div>
</nav>