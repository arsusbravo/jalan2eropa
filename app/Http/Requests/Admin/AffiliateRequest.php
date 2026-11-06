<?php

namespace App\Http\Requests\Admin;

use App\Support\AffiliateOffers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AffiliateRequest extends FormRequest
{
    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['nullable', 'alpha_dash:ascii', 'max:50', Rule::unique('affiliates', 'slug')->ignore($this->route('affiliate'))],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['string', Rule::in(array_keys(AffiliateOffers::CATEGORIES))],
            'url' => ['nullable', 'url:https', 'max:100', 'required_if:active,true'],
            'search_template' => ['nullable', 'string', 'max:2000', 'regex:/\{query\}/'],
            'hotel_search_template' => ['nullable', 'string', 'max:2000', 'regex:/\{query\}/'],
            'description' => ['nullable', 'string', 'max:255'],
            'active' => ['required', 'boolean'],
            'sort' => ['required', 'integer', 'between:0,65535'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'search_template.regex' => 'The search template must contain the {query} placeholder.',
            'hotel_search_template.regex' => 'The hotel search template must contain the {query} placeholder.',
            'url.required_if' => 'An active program needs its Travelpayouts short link.',
        ];
    }
}
