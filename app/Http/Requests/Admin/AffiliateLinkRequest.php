<?php

namespace App\Http\Requests\Admin;

use App\Support\AffiliateOffers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AffiliateLinkRequest extends FormRequest
{
    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'affiliate_id' => ['required', 'integer', 'exists:affiliates,id'],
            'country_id' => ['nullable', 'integer', 'exists:countries,id'],
            'city_id' => ['nullable', 'integer', 'exists:cities,id'],
            'category' => ['required', Rule::in(array_keys(AffiliateOffers::CATEGORIES))],
            'kind' => ['required', Rule::in(['city', 'attraction'])],
            'label' => ['required', 'string', 'max:100'],
            'sort' => ['nullable', 'integer', 'between:0,32000'],
            'query' => ['nullable', 'string', 'max:150', 'required_without:url'],
            'url' => ['nullable', 'url:https', 'max:2000', 'required_without:query'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'query.required_without' => 'Enter a search query or a full page URL.',
            'url.required_without' => 'Enter a search query or a full page URL.',
        ];
    }
}
