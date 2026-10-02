<footer class="footer js--footer">
  <div class="footer__content footer__content--top">
    <div class="footer__content__left">
      <h2 class="titulo-1 titulo--bege">Contato</h2>
      <div class="footer__links">
        <a href="https://wa.me/<?php echo $_ENV['WHATSAPP_NUMBER'] ?>?text=Olá" aria-label="Entre em contato pelo whatsapp"><i class="fa-brands fa-whatsapp"></i> <?php echo $_ENV['WHATSAPP_PLACEHOLDER']?></a>
        <a href="tel:<?php echo $_ENV['TEL_NUMBER'] ?>" aria-label="Ligue para nosso telefone"><i class="fa-solid fa-phone"></i> <?php echo $_ENV['TEL_PLACEHOLDER'] ?></a>
        <a href="mailto:<?php echo $_ENV['EMAIL'] ?>" aria-label="Mande-nos um email"><i class="fa-solid fa-envelope"></i> <?php echo $_ENV['EMAIL'] ?></a>
      </div>
      <div class="footer__redes">
        <?php
        echo <<<HTML
        <a href="{$_ENV['IG_LINK']}" aria-label="Acesse nosso intagram"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="{$_ENV['FB_LINK']}" aria-label="Acesse nosso facebook"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="{$_ENV['LINKEDIN_LINK']}" aria-label="Acesse nosso linkedin"><i class="fa-brands fa-linkedin"></i></a>
        <a href="{$_ENV['HOST_BASE']}blog"  aria-label="Acesse nosso blog"><i class="fa-solid fa-blog"></i></a>
        HTML;
        ?>
      </div>
    </div>
    <div class="footer__content__right">
      <h2 class="titulo-1 titulo--bege">Localização</h2>
      <address class="footer__address">
        <?php
        echo <<<HTML
        {$_ENV['ADDRESS']}, {$_ENV['COMPLEMENTO']}<br>
        {$_ENV['BAIRRO_CIDADE']}/{$_ENV['UF']}<br>
        {$_ENV['CEP']}
        HTML;
        ?>
      </address>
    </div>
  </div>
  <div class="footer__content footer__content--bottom">
    <iframe title="Google Maps"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2835860218725!2d-46.6597602!3d-23.522300599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef93653ae679b%3A0x59b3fa2a085dc644!2sPaulo%20Neves%20Sociedade%20de%20Advocacia!5e0!3m2!1spt-BR!2sbr!4v1764266838204!5m2!1spt-BR!2sbr" width="600" 
      height="450" 
      style="border:0;" 
      allowfullscreen="false"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</footer>