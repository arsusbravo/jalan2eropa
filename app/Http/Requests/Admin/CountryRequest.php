<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
{
    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'title' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'alpha_dash:ascii', 'max:100', Rule::unique('countries', 'slug')->ignore($this->route('country'))],
            'international' => ['nullable', 'string', 'max:100'],
            'codes' => ['required', 'alpha:ascii', 'size:2'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'keywords' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'short_desc' => ['nullable', 'string'],
            'to_see' => ['nullable', 'string'],
            'eatdrink' => ['nullable', 'string'],
            'shopping' => ['nullable', 'string'],
            'others' => ['nullable', 'string'],
            'active' => ['required', 'boolean'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg', 'max:4096'],
        ];
    }
}
