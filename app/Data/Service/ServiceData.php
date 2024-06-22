<?php

declare(strict_types=1);

namespace App\Data\Service;

use Spatie\LaravelData\Data;

class ServiceData extends Data
{
    public function __construct(
        public string $slug,
    ) {
    }
}
