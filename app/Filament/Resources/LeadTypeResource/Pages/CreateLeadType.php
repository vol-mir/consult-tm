<?php

declare(strict_types=1);

namespace App\Filament\Resources\LeadTypeResource\Pages;

use App\Filament\Resources\LeadTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLeadType extends CreateRecord
{
    protected static string $resource = LeadTypeResource::class;
}
