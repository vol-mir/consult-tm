<?php

declare(strict_types=1);

namespace App\Filament\Resources\LeadResource\Pages;

use App\Filament\Resources\LeadResource;
use App\Models\Lead;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditLead extends EditRecord
{
    protected static string $resource = LeadResource::class;

    public function getTitle(): string | Htmlable
    {
        /** @var Lead $record */
        $record = $this->getRecord();

        return (string)$record->id;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
