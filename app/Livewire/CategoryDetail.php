<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Helpers\StringHelper;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CategoryDetail extends Component
{
    public string $slug;

    public ?array $category;

    public ?array $services;

    public function render(): View
    {
        $category = Category::query()
            ->with(['services'])
            ->where('slug', $this->slug)
            ->first();

        if (is_null($category)) {
            $this->skipRender();

            return view('livewire.category-detail');
        }

        $this->category = [
            'name' => $category->name,
        ];

        $services = [];
        foreach ($category->services as $service) {
            $services[] = [
                'name' => $service->name,
                'sku' => $service->sku,
                'rating' => $service->rating,
                'price' => $service->price,
                'description' => $service->description,
                'slug' => $service->slug,
                'image1' => StringHelper::getImageNumber($service->id, 1),
                'image2' => StringHelper::getImageNumber($service->id, 2),
                'category' => $service->category?->name,
            ];
        }

        $this->services = $services;

        return view('livewire.category-detail', [
            'category' => $this->category,
            'services' => $this->services,
        ]);
    }
}
