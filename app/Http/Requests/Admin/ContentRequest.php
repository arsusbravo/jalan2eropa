<?php

namespace App\Http\Requests\Admin;

use App\Http\Controllers\TipController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class ContentRequest extends FormRequest
{
    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'alpha_dash:ascii', 'max:100', Rule::unique('content', 'slug')->ignore($this->route('content'))],
            'type' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string'],
        ];
    }

    /**
     * @return array<int, callable(Validator): void>
     */
    public function after(): array
    {
        return [
            function (Validator $validator): void {
                $current = $this->route('content');

                if ($current !== null
                    && in_array($current->slug, array_column(TipController::TIPS, 'content'), true)
                    && $this->input('slug') !== $current->slug) {
                    $validator->errors()->add('slug', 'This page is used by the public Tips section; its slug cannot change.');
                }
            },
        ];
    }
}
