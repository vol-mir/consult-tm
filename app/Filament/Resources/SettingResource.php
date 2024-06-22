<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Resources\Resource;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?int $navigationSort = 4;

    public static function getNavigationGroup(): string
    {
        return __('navigation.settings');
    }

    public static function getPluralModelLabel(): string
    {
        return __('models.settings');
    }

    public static function getModelLabel(): string
    {
        return __('models.settings');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\Settings::route('/'),
        ];
    }
}
