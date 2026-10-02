<?php

use App\victordias\Helpers\VictorDiasAssets;
use App\victordias\Helpers\VictorDiasLayouts;

?>
<!DOCTYPE html>
<html lang="pt-br">

<?php VictorDiasLayouts::renderComponent("head", $view["head"]) ?>

<body class="js--body">
  <?php 
  VictorDiasLayouts::renderComponent("nav");
  VictorDiasLayouts::renderView($view["name"]);
  VictorDiasLayouts::renderComponent("overlay");
  VictorDiasLayouts::renderComponent("footer");
  ?>

  <script src="<?= VictorDiasAssets::jquery() ?>" type="text/javascript" defer></script> 
  <script src="<?= VictorDiasAssets::jquery("jquery-mask.min.js") ?>" type="text/javascript" defer></script> 
  <script src="<?= VictorDiasAssets::js() ?>" defer></script>
</body>
</html>