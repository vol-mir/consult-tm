<?php

declare(strict_types=1);

namespace App\Http\Requests\Service;

use App\Data\Service\ServiceData;
use Illuminate\Foundation\Http\FormRequest;

class GetServiceRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => $this->route('slug'),
        ]);
    }

    public function rules(): array
    {
        return [
            'slug' => [
                'required',
                'string',
                'exists:services,slug',
            ],
        ];
    }

    public function toData(): ServiceData
    {
        return ServiceData::from($this->validated());
    }
}
