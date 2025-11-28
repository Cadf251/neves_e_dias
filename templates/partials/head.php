<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo $_ENV["HOST_BASE"] ?>public/img/favicon.webp" type="image/x-icon">
  <title><?php echo $view["title"] ?? "Paulo & Neves" ?></title>
  <?php
  if (isset($view["description"]) && !empty($view["description"])) {
    echo <<<HTML
      <meta name="description" content="{$view['description']}">
      HTML;
  }
  if (isset($view["keywords"]) && !empty($view["keywords"])) {
    echo <<<HTML
      <meta name="keywords" content="{$view['keywords']}">
      HTML;
  }
  ?>
  <meta name="author" content="Carlos Eduardo Dias Prado">
  <link rel="stylesheet" href="<?php echo $_ENV['HOST_BASE'] ?>public/css/main.min.css?v=7">
  <!-- <link rel="stylesheet" href="<?php /*echo $_ENV['HOST_BASE']*/ ?>public/css/pallets/main.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
  <?php
  if (isset($view['json-ld']) && !empty($view['json-ld'])) {
    echo <<<HTML
      <script type="application/ld+json">
        {$view['json-ld']}
      </script>
      HTML;
  }
  ?>
</head>