<main class="main main--hero  
<?php
if(isset($main["down"]) && ($main["down"]))
  echo " section--down-faixa ";
?>
 js--main">
  <div class="main__content">
    <h1 class="titulo-1"><?php echo $main['h1']?></h1>
    <p class="main__descricao">
      <?php echo $main['descricao'] ?>
    </p>
    <button class="button">Entre em Contato</button>
  </div>
  <div class="main__items">
    <img class="main__img main__img--1" src="<?php echo $_ENV['HOST_BASE'] ?>public/img/reuniao-escritorio.webp" alt="Forum">
    <img class="main__img main__img--2" src="<?php echo $_ENV['HOST_BASE'] ?>public/img/forum.webp" alt="Forum">
  </div>
</main>