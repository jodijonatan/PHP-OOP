<?php

namespace Data;

interface HasBrand {
    function getBrand (): void;
}

interface IsMaintenance {
    function isMaintenance (): bool;
}

interface Car extends HasBrand {
    function drive (): void;

    function getTire (): int;
}

class Avanza implements Car, IsMaintenance {
    function drive (): void {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int {
        return 4;
    }

    function getBrand(): void {
        echo "Toyota" . PHP_EOL;
    }

    function isMaintenance(): bool {
        return true;
    }
}