<!DOCTYPE html>
<html lang="pt-br">
<?php
require APP_ROOT."/templates/partials/head.php";
?>
<body class="body js--body">
  <?php
  require APP_ROOT."/templates/partials/nav.php";
  require APP_ROOT."{$view['html']}";
  require APP_ROOT."/templates/partials/footer.php";
  ?>
</body>
</html>