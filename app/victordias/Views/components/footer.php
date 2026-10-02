<?php

use App\victordias\Helpers\VictorDiasAssets;
use App\victordias\Helpers\VictorDiasLayouts;

?>
<footer class="footer" id="contato">
  <div class="top">
    <div class="content">
      <div>
        <strong>Advogado de Botina</strong>
        <p>Neves & Dias Advogados</p>
      </div>
      <div>
        <p>Especialistas em vícios de obra e direito imobiliário, com uma abordagem prática e eficaz.</p>
      </div>
    </div>
    <div class="content">
      <strong>Contato</strong>
      <div class="links">
        <a href="tel:<?= $_ENV["VD_TEL_NUMBER"] ?>">
          <?= VictorDiasAssets::renderSvg('tel') ?>
          <p><?= $_ENV["VD_TEL_PLACEHOLDER"] ?></p>
        </a>
        <a href="mailto:<?= $_ENV["EMAIL"] ?>">
          <?=  VictorDiasAssets::renderSvg('email') ?>

          <p><?= $_ENV["EMAIL"] ?></p>
        </a>
        <a href="<?= $_ENV["GOOGLE_MAPS"] ?>">
          <?php VictorDiasLayouts::renderUi('svg-icon', [
            "link" => VictorDiasAssets::svg('pin')
          ]) ?>
          <address><?= "{$_ENV["ADDRESS"]} / {$_ENV["BAIRRO_CIDADE"]} {$_ENV["COMPLEMENTO"]} / {$_ENV["UF"]}" ?></address>
        </a>
      </div>
    </div>
    <div class="content">
      <strong>Redes Sociais</strong>
      <div class="links">
        <a href="<?= $_ENV["VD_IG_LINK"] ?>">
          <?php VictorDiasLayouts::renderUi('svg-icon', [
            "link" => VictorDiasAssets::svg('ig')
          ]) ?>
          <p><?= $_ENV["VD_IG_PLACEHOLDER"] ?></p>
        </a>
      </div>
      <strong>Informações</strong>
      <div class="links">
        <p>OAB/SP 375.544</p>
      </div>
    </div>
  </div>
  <div class="bottom">
    <p>© 2026 Neves & Dias Advogados. Todos os direitos reservados.</p>
    <p class="js--privacy-btn">Políticas de privacidade</p>
  </div>
</footer>