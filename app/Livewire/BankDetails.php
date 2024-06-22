<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BankDetails extends Component
{
    public ?string $bankDetails = null;

    public function render(): ?View
    {
        $setting = Setting::query()
            ->select(['bank_details'])
            ->where('slug', 'main')
            ->first();

        if ($setting) {
            $this->bankDetails = $setting->bank_details;
        }

        if (is_null($this->bankDetails)) {
            $this->skipRender();
        }

        return view('livewire.bank-details');
    }
}
