<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Categories extends Component
{
    public array $categories;

    public string $ulClass = '';

    public function mount(string $ulClass = ''): void
    {
        $this->ulClass = $ulClass;
    }

    public function render(): ?View
    {
        $this->categories = Category::query()
            ->select(['name', 'slug'])
            ->whereNull('parent_id')
            ->get()
            ->toArray();

        if ($this->categories === []) {
            $this->skipRender();
        }

        return view('livewire.categories', [
            'ulClass' => $this->ulClass,
        ]);
    }
}
