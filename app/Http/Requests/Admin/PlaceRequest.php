<?php

namespace App\Http\Requests\Admin;

use App\Http\Controllers\Admin\PlaceController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlaceRequest extends FormRequest
{
    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'name' => ['required', 'string', 'max:100'],
            'slug' => ['nullable', 'alpha_dash:ascii', 'max:255', Rule::unique('cities', 'slug')->where('country_id', $this->input('country_id'))->ignore($this->route('place'))],
            'search_term' => ['nullable', 'string', 'max:150'],
            'type' => ['required', Rule::in(array_keys(PlaceController::TYPES))],
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
            'hotels' => ['nullable', 'string', 'max:100'],
            'youtube' => ['nullable', 'url', 'max:255'],
            'attractions' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'thumb_file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ];
    }
}
