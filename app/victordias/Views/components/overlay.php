<div class="overlay js--overlay">
  <div class="js--overlay-close overlay__close">X</div>
  <div class="overlay__content js--overlay-content">
    <div class="js--overlay-module" id="overlay--form" style="display:none">
      <?php

      use App\victordias\Helpers\VictorDiasLayouts;

      VictorDiasLayouts::renderComponent("form", [
        "formTag" => "overlay"
      ]); ?>
    </div>
    <div class="js--overlay-module" id="overlay--privacy" style="display:none">
      Privacidade
    </div>
  </div>
</div>