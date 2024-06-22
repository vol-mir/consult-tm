<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MapArea extends Component
{
    public ?string $map = null;

    public function render(): ?View
    {
        $setting = Setting::query()
            ->select(['map'])
            ->where('slug', 'main')
            ->first();

        if ($setting) {
            $this->map = $setting->map;
        }

        if (is_null($this->map)) {
            $this->skipRender();
        }

        return view('livewire.map-area');
    }
}
