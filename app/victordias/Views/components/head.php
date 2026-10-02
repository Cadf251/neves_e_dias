<?php

use App\office\Helpers\OfficeAssets;
use App\victordias\Helpers\VictorDiasAssets;

?>
<head>
  <link rel="stylesheet" href="<?= VictorDiasAssets::css() ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= OfficeAssets::img("favicon", "ico") ?>" type="image/x-icon">
  <title><?= $title ?? $_ENV['PROJECT_NAME'] ?></title>
  <meta name="description" content="<?= $description ?? "" ?>">
</head>