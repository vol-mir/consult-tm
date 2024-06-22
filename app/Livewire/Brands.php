<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Brands extends Component
{
    public array $brands;

    public function render(): ?View
    {
        $this->brands = Brand::query()
            ->select(['name', 'url', 'image', 'description'])
            ->get()
            ->toArray();

        if ($this->brands === []) {
            $this->skipRender();
        }

        return view('livewire.brands');
    }
}
