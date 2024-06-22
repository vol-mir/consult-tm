<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Lead;
use App\Models\LeadType;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class SubscriptionForm extends Component
{
    public ?string $email;

    protected array $rules = [
        'email' => 'required|email:rfc,dns',
    ];

    /**
     * @throws ValidationException
     * @param mixed $propertyName
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $validatedData = $this->validate();

        $type = LeadType::query()
            ->where('slug', LeadType::TYPE_SUBSCRIPTION)
            ->first();

        if ($type) {
            Lead::updateOrCreate([
                'email' => $validatedData['email'],
                'lead_type_id' => $type->id,
            ], [
                'is_processed' => false,
                'is_message_sent' => false,
                'updated_at' => now(),
            ]);
        }

        session()->flash('subscription_message', 'subscription_success');

        $this->email = null;
    }

    public function render(): ?View
    {
        return view('livewire.forms.subscription');
    }
}
