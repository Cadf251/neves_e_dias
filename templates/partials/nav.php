<nav class="nav js--nav">
  <div class="nav__logo">
    <img src="<?php echo $_ENV['HOST_BASE'] ?>public/img/logo.webp" width="1810px" height="372px" alt="Neves & Dias Logo">
  </div>
  <div class="nav__content">
    <div class="nav__item">
      <div class="nav__item__label js--nav-btn">Sobre Nós <i class="fa-solid fa-sort-down"></i></div>
      <div class="nav__item__down-content js--nav-list">
        <a class="nav__link js--nav-link" href="<?php // echo $_ENV['HOST_BASE'] ?>/">Quem somos</a>
        <a class="nav__link js--nav-link" href="<?php echo $_ENV['HOST_BASE'] ?>areas-de-atuacao">Áreas de atuação</a>
        <a class="nav__link js--nav-link" href="<?php echo $_ENV['HOST_BASE'] ?>socios-e-advogados">Advogados</a>
      </div>
    </div>
    <div class="nav__item">
      <div class="nav__item__label js--nav-btn">Blog <i class="fa-solid fa-sort-down"></i></div>
      <div class="nav__item__down-content js--nav-list">
        <a href="<?php echo $_ENV['HOST_BASE'] ?>blog/" class="nav__link js--nav-link">Acessar blog</a>
      </div>
    </div>
    <div class="nav__item">
      <div class="nav__item__label js--nav-btn nav__item__label--contato">Entre em Contato <i class="fa-solid fa-sort-down"></i></div>
      <div class="nav__item__down-content js--nav-list">
        <a href="<?php echo $_ENV['HOST_BASE'] ?>endereco-e-contato" class="nav__link js--nav-link">Endereço e Contato</a>
        <a href="<?php echo $_ENV['HOST_BASE'] ?>trabalhe-conosco" class="nav__link js--nav-link">Trabalhe Conosco</a>
      </div>
    </div>
  </div>
</nav>