<?php

use App\office\Helpers\OfficeLayouts;
use App\office\Helpers\OfficeAssets;

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php OfficeLayouts::renderComponent("head", $view["head"] ?? []); ?>
<body class="body js--body">
  <?php
  OfficeLayouts::renderComponent("nav");
  OfficeLayouts::renderView($view["name"] ?? "");
  OfficeLayouts::renderComponent("footer");
  ?>
  <script src="<?= OfficeAssets::jquery() ?>" type="text/javascript" defer></script> 
  <script src="<?= OfficeAssets::js() ?>" defer></script>
</body>
</html>