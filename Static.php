<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

echo MathHelper::$name = "Ini kode static yang diubah" . PHP_EOL; 

$total = MathHelper::sum(10, 20);
echo "Total : $total";