<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\SocialNetwork;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SocialNetworks extends Component
{
    public array $socialNetworks;

    public string $place = '';

    public function mount(string $place = ''): void
    {
        $this->place = $place;
    }

    public function render(): View
    {
        $this->socialNetworks = SocialNetwork::query()
            ->select(['name', 'url', 'image'])
            ->get()
            ->toArray();

        if ($this->socialNetworks === []) {
            $this->skipRender();
        }

        return view('livewire.social-network', [
            'place' => $this->place,
        ]);
    }
}
