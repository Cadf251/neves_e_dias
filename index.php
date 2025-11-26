<?php

use Cadud\Helpers\Html\LoadLayout;

require "app/core/bootstrap.php";

echo "Hello World";

LoadLayout::loadLayout(APP_ROOT."/templates/layouts/home.php");