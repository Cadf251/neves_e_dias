<?php use App\victordias\Helpers\VictorDiasAssets; ?>

<div class="diferencial animate--to-left">
  <div class="svg-container">
    <?= VictorDiasAssets::renderSvg($icon) ?>
  </div>
  <div class="content">
    <strong><?= $title ?></strong>
    <p><?= $description ?></p>
  </div>
</div>