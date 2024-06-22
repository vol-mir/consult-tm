<?php

declare(strict_types=1);

namespace App\Data\Category;

use Spatie\LaravelData\Data;

class CategoryData extends Data
{
    public function __construct(
        public string $slug,
    ) {
    }
}
