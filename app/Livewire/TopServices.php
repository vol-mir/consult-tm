<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Helpers\StringHelper;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TopServices extends Component
{
    public array $services;

    public function render(): ?View
    {
        $this->services = [];

        $services = Service::query()
            ->with(['category'])
            ->where('is_visible', true)
            ->where('is_popular', true)
            ->whereDate('published_at', '<=', now())
            ->take(3)
            ->latest()
            ->get();

        foreach ($services as $service) {
            $data = [
                'name' => $service->name,
                'sku' => $service->sku,
                'rating' => $service->rating,
                'price' => $service->price,
                'slug' => $service->slug,
                'image1' => StringHelper::getImageNumber($service->id, 1),
                'image2' => StringHelper::getImageNumber($service->id, 2),
                'category' => $service->category?->name,
            ];

            $this->services[] = $data;
        }

        if ($this->services === []) {
            $this->skipRender();
        }

        return view('livewire.top-services');
    }
}
