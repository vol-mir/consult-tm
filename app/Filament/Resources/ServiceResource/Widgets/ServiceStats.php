<?php

declare(strict_types=1);

namespace App\Filament\Resources\ServiceResource\Widgets;

use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ServiceStats extends StatsOverviewWidget
{
    protected static ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make(__('widgets.total_services'), Service::count()),
            Stat::make(__('widgets.is_visible_total_services'), Service::where('is_visible', true)->count()),
            Stat::make(__('widgets.is_popular_total_services'), Service::where('is_popular', true)->count()),
        ];
    }
}
