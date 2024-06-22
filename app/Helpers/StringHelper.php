<?php

declare(strict_types=1);

namespace App\Helpers;

class StringHelper
{
    public static function getImageNumber(int $number, int $type): int
    {
        return match ($type) {
            2 => ($number + 1) % 4 === 0 ? 1 : ($number + 1) % 4,
            3 => ($number + 2) % 4 === 0 ? 2 : ($number + 2) % 4,
            4 => ($number + 3) % 4 === 0 ? 3 : ($number + 3) % 4,
            default => $number % 4 === 0 ? 4 : $number % 4,
        };
    }
}
