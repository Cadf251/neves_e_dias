<!DOCTYPE html>
<html lang="pt-br">
<?php 
include APP_ROOT."/templates/partials/head.php";
?>
<body class="body js--body">
  <main class="main main--erro">
  <div class="main__content">
    <img src="<?= publicImg("logo") ?>" alt="Logotipo Paulo & Neves Advogados Associados">
    <h1 class="titulo-1"><?= $view["title"] ?? "Erro interno" ?></h1>
    <p><?= $view["description"] ?? "Algum erro ocorreu" ?></p>
    <a href="<?= $_ENV["HOST_BASE"] ?>" class="button" aria-label="Volte para o site principal">Voltar para o site</a>
  </div>
</main>
</body>
</html>