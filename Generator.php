<?php 

function getGanjil (int $max): Iterator {
    for ($i = 0; $i <= $max; $i++) {
        if ($i %2 == 1) {
            yield $i;
        }
    }
}

$ganjil = getGanjil (100);
foreach ($ganjil as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}