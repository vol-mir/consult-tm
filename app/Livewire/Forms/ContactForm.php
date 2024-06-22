<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Contact;
use App\Models\Lead;
use App\Models\LeadType;
use App\Models\Setting;
use App\Models\SocialNetwork;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactForm extends Component
{
    public array $phones = [];
    public array $emails = [];
    public string $address = '';
    public array $socialNetworks = [];

    public ?string $first_name;
    public ?string $last_name;
    public ?string $phone;
    public ?string $email;
    public ?string $message;

    protected array $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email:rfc,dns',
        'message' => 'required|string',
    ];

    /**
     * @throws ValidationException
     */
    public function updated(mixed $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $validatedData = $this->validate();

        $type = LeadType::query()
            ->where('slug', LeadType::TYPE_CONTACT)
            ->first();

        if ($type) {
            Lead::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'],
                'message' => $validatedData['message'],
                'lead_type_id' => $type->id,
                'is_processed' => false,
                'is_message_sent' => false,
            ]);
        }

        session()->flash('contact_message', 'contact_success');

        $this->first_name = null;
        $this->last_name = null;
        $this->phone = null;
        $this->email = null;
        $this->message = null;
    }

    public function render(): ?View
    {
        $this->phones = [];
        $this->emails = [];
        $this->address = '';
        $this->socialNetworks = [];

        $setting = Setting::query()
            ->select(['address'])
            ->where('slug', 'main')
            ->first();

        if ($setting) {
            $this->address = $setting->address ?? '';
        }

        $contacts = Contact::query()
            ->get();

        foreach ($contacts as $contact) {
            $presentation = $contact->value;
            if ($contact->contactType?->slug === 'phone') {
                $presentation .= " - $contact->name";
            }

            if ($contact->description) {
                $presentation .= " ($contact->description)";
            }

            $data = [
                'name' => $contact->name,
                'description' => $contact->description,
                'presentation' => $presentation,
                'value' => $contact->value,
                'contact_type_name' => $contact->contactType?->name,
                'contact_type_slug' => $contact->contactType?->slug,
            ];

            if ($contact->contactType?->slug === 'phone') {
                $this->phones[] = $data;
            } elseif ($contact->contactType?->slug === 'email') {
                $this->emails[] = $data;
            }
        }

        $this->socialNetworks = SocialNetwork::query()
            ->select(['name', 'url', 'image'])
            ->get()
            ->toArray();

        return view('livewire.forms.contact');
    }
}
