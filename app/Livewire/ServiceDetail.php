<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Helpers\StringHelper;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ServiceDetail extends Component
{
    public string $slug;

    public ?array $service;

    public function render(): View
    {
        $service = Service::query()
            ->with(['category'])
            ->where('slug', $this->slug)
            ->first();

        if (is_null($service)) {
            $this->skipRender();

            return view('livewire.service-detail');
        }

        $this->service = [
            'name' => $service->name,
            'description' => $service->description,
            'presentation' => $service->presentation,
            'price' => $service->price,
            'rating' => $service->rating,
            'image1' => StringHelper::getImageNumber($service->id, 1),
            'image2' => StringHelper::getImageNumber($service->id, 2),
            'image3' => StringHelper::getImageNumber($service->id, 3),
            'image4' => StringHelper::getImageNumber($service->id, 4),
            'category' => $service->category?->name,
            'category_slug' => $service->category?->slug,
        ];

        return view('livewire.service-detail', [
            'service' => $this->service,
        ]);
    }
}
