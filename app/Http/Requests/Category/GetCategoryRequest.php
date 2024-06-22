<?php

declare(strict_types=1);

namespace App\Http\Requests\Category;

use App\Data\Category\CategoryData;
use Illuminate\Foundation\Http\FormRequest;

class GetCategoryRequest extends FormRequest
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
                'exists:categories,slug',
            ],
        ];
    }

    public function toData(): CategoryData
    {
        return CategoryData::from($this->validated());
    }
}
