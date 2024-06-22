<?php

declare(strict_types=1);

namespace App\Filament\Resources\LeadTypeResource\Pages;

use App\Filament\Resources\LeadTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeadTypes extends ListRecords
{
    protected static string $resource = LeadTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
