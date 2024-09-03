<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'flag' => 'nullable|string|max:255', // Optional image
            'country_code' => 'required|string|max:5',
            'num_code' => 'required|string|max:5',
            'iso_code' => 'required|string|max:10',
            'status' => 'required|in:0,1,2',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The country name is required.',
            'flag' => 'The flag must be an emoji.',
            'country_code.required' => 'The country code is required.',
            'num_code.required' => 'The numeric code is required.',
            'iso_code.required' => 'The ISO code is required.',
            'status.required' => 'The status is required.',
        ];
    }
}
