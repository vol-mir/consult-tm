<?php

declare(strict_types=1);

namespace App\Filament\Resources\LeadTypeResource\Pages;

use App\Filament\Resources\LeadTypeResource;
use App\Models\LeadType;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditLeadType extends EditRecord
{
    protected static string $resource = LeadTypeResource::class;

    public function getTitle(): string | Htmlable
    {
        /** @var LeadType $record */
        $record = $this->getRecord();

        return $record->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
